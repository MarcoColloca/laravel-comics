@extends('layouts.app')

@section('title', 'About Us')

@section('main-content')
    <section class="bg-dark my-5 py-2">
        <div class="container">
            <h1 class="title text-center text-primary">Chi siamo noi?</h1>
        </div>
    </section>
    <section class="bg-subtle pb-5 pt-2">
        <div class="py-1 mb-3 text-primary container">
            <h1>I Nostri Utenti:</h1>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($cards as $card)
                    <div class="col-4">
                        <div class="card">
                            <img src="{{$card['img']}}" class="card-img-top p-5 pb-2" alt="...">

                            <div class="card-body px-5">
                                <h5 class="card-title text-center pb-3">{{$card['name']}}</h5>

                                <p class="card-text">{{$card['description']}}</p>
                            </div>
                        </div>
                    </div>

                @endforeach                
            </div>
        </div>
    </section>    
@endsection