<header>
    <div class="main-header__others">
        <div class="container">
            <div class="w-100 d-flex justify-content-end gap-5 p-1">
                <span>
                    DC POWER VISA
                </span>
                <span>
                    <a href="">ADDITIONAL DC SITES ►</a>
                </span>
            </div>
        </div>
    </div>
    <section  class="main-header__nav">        
        <div class="container">
            <nav class="py-3">
                <div class="row">
                    <div class="col">
                        <div class="text-start nav-logo">
                            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
                        </div>
                    </div>                
                    
                    <div class="col">
                        <ul class="nav-bar">
                            <li class="mx-4">
                                <a href="{{route('home')}}">HOME</a>
                            </li>
                            <li class="mx-4">
                                <a href="{{route('comics')}}">COMICS</a>
                            </li>
                            <li class="mx-4">
                                <a href="{{route('about')}}">ABOUT US</a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="col">
                        <div class="text-end nav-search">
                            <input type="text" placeholder="Search">
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </section>
</header>