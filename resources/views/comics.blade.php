@extends('layouts.app')

@section('title', 'Comics')

@section('main-content')
    <section class="my-5 p-3">
        <div class="container">
            <h1 class="title text-center text-danger pb-5">Comics!</h1>
        </div>

        <div class="container">
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