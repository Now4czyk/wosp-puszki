import { RouteObject } from 'react-router-dom';
import {
  AddUserPage,
  AddVolunteerPage,
  ListUsersPage,
  ListVolunteersPage,
  LogsPage,
} from '@/pages';
import { InnerLayout } from '@/components';
import { ProtectedRoute } from '@components/ProtectedRoute/ProtectedRoute';

const addUserPagePath = 'users/add';
const listVolunteersPagePath = 'volunteers/list';
const addVolunteerPagePath = 'volunteers/add';
const logsPagePath = 'logs';

const adminSubroutes: RouteObject[] = [
  {
    path: addUserPagePath,
    element: <AddUserPage />,
  },
  {
    index: true,
    element: <ListUsersPage />,
  },
  {
    path: listVolunteersPagePath,
    element: <ListVolunteersPage />,
  },
  {
    path: addVolunteerPagePath,
    element: <AddVolunteerPage />,
  },
  {
    path: logsPagePath,
    element: <LogsPage />,
  },
];

export const adminRoute = {
  path: 'admin',
  element: (
    <ProtectedRoute>
      <InnerLayout
        links={[
          { url: addUserPagePath, label: 'Dodaj użytkownika' },
          { url: '', label: 'Lista użytkowników', withDot: true },
          { url: addVolunteerPagePath, label: 'Dodaj wolontariusza' },
          { url: listVolunteersPagePath, label: 'Lista wolontariuszy', withDot: true },
          { url: logsPagePath, label: 'Logi' },
        ]}
      />
    </ProtectedRoute>
  ),
  children: adminSubroutes,
};
