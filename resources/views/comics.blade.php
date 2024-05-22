@extends('layouts.app')

@section('title', 'Comics')

@section('main-content')
    <div class="hero-img-container">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
    </div>

    <section class="mt-4 py-4 comics-container">

        <div class="container">            
            <div class="hero-title-container">
                <h1>CURRENT SERIES</h1>
            </div>

            <div class="row g-5">
                @foreach ($comics as $comic)
                    <div class="col-4">
                        <div class="card my-card">
                            <img src="{{url($comic['thumb'])}}" class="card-img-top p-5 pb-2" alt="...">

                            <div class="card-body px-5">
                                <h5 class="card-title text-center pb-3">{{$comic['title']}}</h5>                            
                            </div>

                            <div class="card-footer px-5">                                
                                <p class="card-text text-center">{{$comic['series']}}</p>
                            </div>
                        </div>
                    </div>

                @endforeach                
            </div>
        </div>
    </section>    
@endsection