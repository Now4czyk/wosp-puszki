import { createBrowserRouter, RouterProvider } from 'react-router-dom';
import { routes } from './routes';
import { Spin } from 'antd';
import { QueryClient, QueryClientProvider } from '@tanstack/react-query';
import { ReactQueryDevtools } from '@tanstack/react-query-devtools';
import '@assets/fonts/Oswald-Bold.ttf';
import { createContext } from 'react';
import {
  IAuthContext,
  useAuthContextValues,
  IBoxContext,
  useBoxContextValues,
} from '@/utils';

const router = createBrowserRouter(routes, { basename: '/system' });

export const queryClient = new QueryClient();

export const AuthContext = createContext<IAuthContext | null>(null);
export const BoxContext = createContext<IBoxContext | null>(null);

function App() {
  const values = useAuthContextValues();
  const boxValues = useBoxContextValues();

  return (
    <BoxContext.Provider value={boxValues}>
      <AuthContext.Provider value={values}>
        <QueryClientProvider client={queryClient}>
          <RouterProvider router={router} fallbackElement={<Spin />} />
          <ReactQueryDevtools position="bottom-right" initialIsOpen={false} />
        </QueryClientProvider>
      </AuthContext.Provider>
    </BoxContext.Provider>
  );
}

export default App;
