@extends('layouts.app')

@section('title', 'Welcome')

@section('main-content')

    <h1>Helloword!</h1>
        <div class="container">
            <div class="row">
              <ul class="col-12 d-flex flex-wrap ">
        @foreach ($movies as $movie)

        <div class="card col-6" style="">
            <div class="card-body">
              <h5 class="card-title">{{ $movie['title'] }}</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie['original_title']}}</h6>
              <p class="card-text">{{$movie['nationality']}}</p>
              <a href="#" class="card-link">{{$movie['date']}}</a>


            </div>
          </div>




           
        @endforeach
    </ul>

            </div>
        </div>
    
    
@endsection