@extends('layout')

@section('title') Home2 @endsection

@section('main_content')
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}  <!-- {{Auth::user()->id}} -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">

        <h2>Добавь статью!</h2>

        @if($errors -> any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors -> all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="/review/check">
            @csrf  <!-- токен для безопасной отправки -->
            <input type="email" name="email" id="email" placeholder="Введите почту" class="form-control"><br>
            <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control"><br>

            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Введите сообщение"></textarea><br>
            <button type="submit" class="btn btn-success">Отправить</button>
        </form>



    </div>
@endsection
