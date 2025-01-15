<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        <link rel="stylesheet" href="{{ url('css/index.css') }}">
    </head>
    <body>

        <div>
            <header style="background-image: url({{ url('images/index/main.jpg')}})">
                <div class="bg-p" style="padding: 12px">
                    <img src="{{ url('images/index/logo.svg') }}">
                </div>
                <div class="header">
                    <div>
                        <h1 class="text-p" style="visibility: hidden">BYTOONA</h1>
                        <img src="{{ url('images/index/logo-title.svg') }}" alt="">
                    </div>
                    <div class="search">
                        <input type="search" placeholder="describe the house you want">
                        <button class="bg-p">Find</button>
                    </div>
                </div>
            </header>

            <section class="houses">
                <h2 class="text-p houses-headline">Find the house that suite you</h2>
                <div class="houses-card">

                    @livewire('house-card',['estate' => $estate])
                    @livewire('house-card',['estate' => $estate])
                    @livewire('house-card',['estate' => $estate])
                </div>
                <div class="discover">
                    {{-- <hr class="bo-p"> --}}
                    <div class="d-button text-p">discover more...</div>
                    {{-- <hr class="bo-p"> --}}
                </div>
            </section>

            <section class="features">
                <div class="feat-left">
                    <div class="bg-p"></div>
                    <div style="width: 80%;margin:19vh 0 20vh -31.6%">
                        <img src="{{ url('images/index/d09208183125ab47493d5de2f8710b6faa27d7cc-3000x2000.jpg') }}" alt="">
                        <div><span style="color: #fff">Find your dream</span> house effortlessly</div>
                    </div>
                </div>

                <div class="feat-right">
                    <h2 class="text-p" style="margin: 0 0 4vh 0;">Our features:</h2>
                    <div style="padding-left: 3%">
                        <div class="feature">
                            <img src="{{ url('images/index/icon1.svg') }}" alt="">
                            <div>
                                <h3 class="text-p">no fee's</h3>
                                <div>free for use no fee's no subscription no anything!</div>
                            </div>
                        </div>

                        <div class="feature">
                            <img src="{{ url('images/index/icon2.svg') }}" alt="">
                            <div>
                                <h3 class="text-p">no fee's</h3>
                                <div>free for use no fee's no subscription no anything!</div>
                            </div>
                        </div>

                        <div class="feature">
                            <img src="{{ url('images/index/icon3.svg') }}" alt="">
                            <div>
                                <h3 class="text-p">no fee's</h3>
                                <div>free for use no fee's no subscription no anything!</div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section class="about">
                <div style="padding: 48px 3%">
                    <div class="about-body">
                        <h3 class="text-p">About us:</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis deserunt vitae doloribus. Voluptates modi beatae ullam! Beatae eaque voluptate aliquam id, nihil vero culpa dolore optio nulla consequuntur odit neque.</p>
                    </div>
                    <img src="{{ url('images/index/bussin.jpg') }}" alt="">
                </div>
                <div class="bg-p"></div>
            </section>


            <section class="site-link">
                <div style="width: 15%">
                    <div class="social">
                        <a href="#"><img src="{{ url('images/index/social/X.svg')}}" alt=""></a>
                        <a href="#"><img src="{{ url('images/index/social/Linkedin.svg')}}" alt=""></a>
                        <a href="#"><img src="{{ url('images/index/social/Instagram.svg')}}" alt=""></a>
                        <a href="#"><img src="{{ url('images/index/social/YouTube.svg')}}" alt=""></a>
                    </div>
                    <div>
                        <img style="margin-left: 10%" src="{{ url('images/index/logo-b.svg')}}">
                    </div>
                </div>
                <div>
                    <ul>
                        <li><h3>explore</h3></li>
                        <li><a href="#">home page</a></li>
                        <li><a href="#">home page</a></li>
                        <li><a href="#">home page</a></li>
                        <li><a href="#">home page</a></li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><h3>explore</h3></li>
                        <li><a href="#">home page</a></li>
                        <li><a href="#">home page</a></li>
                        <li><a href="#">home page</a></li>
                        <li><a href="#">home page</a></li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><h3>explore</h3></li>
                        <li><a href="#">home page</a></li>
                        <li><a href="#">home page</a></li>
                        <li><a href="#">home page</a></li>
                        <li><a href="#">home page</a></li>
                    </ul>
                </div>
                <div></div>
            </section>


            <footer class="bg-p">
                this site created by <a href="#">Abdalgader m.sirag makki</a>
            </footer>
        </div>

        @livewireScripts
    </body>
</html>
