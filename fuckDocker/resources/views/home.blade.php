@extends('layout')

@section('title')Главная@endsection

@section('main_content')


    <div class="container">
        <h2>Все новости</h2>
        @foreach($reviews as $el)

            <div class="alert alert-warning">
                <h3>{{$el->id}} | {{$el->subject}}</h3>
                <b>{{$el->email}}</b>
                <p>{{$el->message}}</p>
            </div>

        @endforeach
        <br>

         {{$reviews->links()}}

    </div>



@endsection
