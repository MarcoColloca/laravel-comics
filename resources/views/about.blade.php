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
                <div class="col-4">
                    <div class="card">
                        <img src="/img/master.jpg" class="card-img-top p-5" alt="...">

                        <div class="card-body px-5">
                            <h5 class="card-title text-center pb-3">Master</h5>

                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card">
                        <img src="/img/critical.jpg" class="card-img-top p-5" alt="...">
    
                        <div class="card-body px-5">
                            <h5 class="card-title text-center pb-3">Critical 1!</h5>

                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card">
                        <img src="/img/d20.jpg" class="card-img-top p-5" alt="...">

                        <div class="card-body px-5">
                            <h5 class="card-title text-center pb-3">d20 Dice</h5>

                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
@endsection