@extends('layouts.index2')

@section('title') Авторизация@endsection

@section('content')
    <div class="container-fluid vh-100" style="margin-top:100px">
        <div class="" style="margin-top:150px">
            <div class="rounded d-flex justify-content-center">
                <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                    <div class="text-center">
                        <h3 class="text-primary">Вход</h3>
                    </div>
                    <form method="post" action="{{route('login_process')}}" class="general form">
                        @csrf
                        <div class="p-4">
                            <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-person-plus-fill text-white"></i></span>
                                <input name="email" type="email" id="emailAddress" class="form-control form-control-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}" />
                                @error('email')
                                    <p class="text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-key-fill text-white"></i></span>
                                <input name="password" type="password"  class="form-control form-control-lg @error('password') border-red-500 @enderror" value="{{ old('password') }}" />
                                @error('password')
                                    <p class="text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Запомнить
                                </label>
                            </div>
                            <button class="btn btn-primary text-center mt-2" type="submit">
                                Войти
                            </button>
                            <p class="text-center mt-5">У вас нет аккаунта?
                                <a href="{{ route('register') }}">
                                    <span class="text-primary">Зарегистрироваться</span></a>
                            </p>
                            {{--                        <p class="text-center text-primary">Forgot your password?</p>--}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

