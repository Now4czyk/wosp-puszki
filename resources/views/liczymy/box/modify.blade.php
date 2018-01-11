@extends('layouts.app')

@section('content')
    <form class="form-horizontal" method="POST" action="{{ route('box.modify.post', ['boxID' => $box->id]) }}" autocomplete="off">
        <fieldset>

        {{ csrf_field() }}

        <!-- Form Name -->
            <legend><b>Edycja</b> rozliczenia puszki {{ $box->collector->identifier }}</legend>

        {{-- Ilości monet --}}
        <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="count_1gr">Ilość monet 1gr</label>
                <div class="col-md-4">
                    <input id="count_1gr" name="count_1gr" value="{{ $box->count_1gr }}" type="text" placeholder="" class="form-control input-md" required="">

                </div>
            </div>

            {{--2gr--}}
            <div class="form-group">
                <label class="col-md-4 control-label" for="count_2gr">Ilość monet 2gr</label>
                <div class="col-md-4">
                    <input id="count_2gr" name="count_2gr" value="{{ $box->count_2gr }}" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>

            {{--5gr--}}
            <div class="form-group">
                <label class="col-md-4 control-label" for="count_5gr">Ilość monet 5gr</label>
                <div class="col-md-4">
                    <input id="count_5gr" name="count_5gr" value="{{ $box->count_5gr }}" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>

            {{--10gr--}}
            <div class="form-group">
                <label class="col-md-4 control-label" for="count_10gr">Ilość monet 10gr</label>
                <div class="col-md-4">
                    <input id="count_10gr" name="count_10gr" value="{{ $box->count_10gr }}" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>

            {{--20gr--}}
            <div class="form-group">
                <label class="col-md-4 control-label" for="count_20gr">Ilość monet 20gr</label>
                <div class="col-md-4">
                    <input id="count_20gr" name="count_20gr" value="{{ $box->count_20gr }}" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>

            {{--50gr--}}
            <div class="form-group">
                <label class="col-md-4 control-label" for="count_50gr">Ilość monet 50gr</label>
                <div class="col-md-4">
                    <input id="count_50gr" name="count_50gr" value="{{ $box->count_50gr }}" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>

            {{--Złote--}}

            {{--1zł--}}
            <div class="form-group">
                <label class="col-md-4 control-label" for="count_1zl">Ilość monet 1zł</label>
                <div class="col-md-4">
                    <input id="count_1zl" name="count_1zl" value="{{ $box->count_1zl }}" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>

            {{--2zł--}}
            <div class="form-group">
                <label class="col-md-4 control-label" for="count_2zl">Ilość monet 2zł</label>
                <div class="col-md-4">
                    <input id="count_2zl" name="count_2zl" value="{{ $box->count_2zl }}" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>

            {{--5zł--}}
            <div class="form-group">
                <label class="col-md-4 control-label" for="count_5zl">Ilość monet 5zł</label>
                <div class="col-md-4">
                    <input id="count_5zl" name="count_5zl" value="{{ $box->count_5zl }}" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>

            {{-- Banknoty --}}
            {{--10zł--}}
            <div class="form-group">
                <label class="col-md-4 control-label" for="count_10zl">Ilość banknotów 10zł</label>
                <div class="col-md-4">
                    <input id="count_10zl" name="count_10zl" value="{{ $box->count_10zl }}" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>

            {{--20zł--}}
            <div class="form-group">
                <label class="col-md-4 control-label" for="count_20zl">Ilość banknotów 20zł</label>
                <div class="col-md-4">
                    <input id="count_20zl" name="count_20zl" value="{{ $box->count_20zl }}" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>

            {{--50zł--}}
            <div class="form-group">
                <label class="col-md-4 control-label" for="count_50zl">Ilość banknotów 50zł</label>
                <div class="col-md-4">
                    <input id="count_50zl" name="count_50zl" value="{{ $box->count_50zl }}" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>

            {{--100zł--}}
            <div class="form-group">
                <label class="col-md-4 control-label" for="count_100zl">Ilość banknotów 100zł</label>
                <div class="col-md-4">
                    <input id="count_100zl" name="count_100zl" value="{{ $box->count_100zl }}" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>

            {{--200zł--}}
            <div class="form-group">
                <label class="col-md-4 control-label" for="count_200zl">Ilość banknotów 200zł</label>
                <div class="col-md-4">
                    <input id="count_200zl" name="count_200zl" value="{{ $box->count_200zl }}" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>

            {{--500zł--}}
            <div class="form-group">
                <label class="col-md-4 control-label" for="count_500zl">Ilość banknotów 500zł</label>
                <div class="col-md-4">
                    <input id="count_500zl" name="count_500zl" value="{{ $box->count_500zl }}" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>

            {{-- Waluty obce --}}
            {{-- EUR --}}
            <div class="form-group">
                <label class="col-md-4 control-label" for="amount_EUR">Ilość Euro</label>
                <div class="col-md-4">
                    <div class="input-group">
                        <input id="amount_EUR" name="amount_EUR" value="{{ $box->amount_EUR }}" class="form-control" placeholder="Np. 14.00" type="text" required="">
                        <span class="input-group-addon">€ (EUR)</span>
                    </div>
                    <p class="help-block">Suma wartości, bez podziału na monety i banknoty</p>
                </div>
            </div>
            {{-- GBP --}}
            <div class="form-group">
                <label class="col-md-4 control-label" for="amount_GBP">Ilość Funtów Brytyjskich</label>
                <div class="col-md-4">
                    <div class="input-group">
                        <input id="amount_GBP" name="amount_GBP" value="{{ $box->amount_GBP }}" class="form-control" placeholder="Np. 14.00" type="text" required="">
                        <span class="input-group-addon">£ (GBP)</span>
                    </div>
                    <p class="help-block">Suma wartości, bez podziału na monety i banknoty</p>
                </div>
            </div>
            {{-- USD --}}
            <div class="form-group">
                <label class="col-md-4 control-label" for="amount_USD">Ilość Dolarów Amerykańskich</label>
                <div class="col-md-4">
                    <div class="input-group">
                        <input id="amount_USD" name="amount_USD" value="{{ $box->amount_USD }}" class="form-control" placeholder="Np. 14.00" type="text" required="">
                        <span class="input-group-addon">$ (USD)</span>
                    </div>
                    <p class="help-block">Suma wartości, bez podziału na monety i banknoty</p>
                </div>
            </div>


        {{-- Pole komentarza --}}

        <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="comment">Inne</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="comment" name="comment">{{ $box->comment }}</textarea>
                </div>
            </div>


            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton">Wyślij puszkę</label>
                <div class="col-md-4">
                    <button id="singlebutton" name="singlebutton" class="btn btn-success">Wyślij puszkę</button>
                </div>
            </div>

        </fieldset>
    </form>

@endsection