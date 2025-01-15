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
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

        <!-- Styles -->
        @livewireStyles
        <link rel="stylesheet" href="{{ url('css/index.css') }}">
    </head>
    <body>

        <div>
            <header>
                <nav class="bg-p">
                    <img src="{{ url('images/index/logo.svg') }}">
                </nav>
                <div class="header">
                    <div>
                        <h1 class="text-p">BYTOONA</h1>
                    </div>
                    <div class="search">
                        <input type="search">
                        <button class="bg-p">Search</button>
                    </div>
                </div>
            </header>

            <section>
                <h2>Find the house that suite you</h2>
                <div>
                    <div>
                        <img src="" alt="">
                        <div>
                            <h3>homestead</h3>
                            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nulla, vel reiciendis.</div>
                            <div>
                                <div>
                                    <div>
                                        <img src="" alt=""> 10
                                    </div>
                                    <div>
                                        <img src="" alt=""> 2
                                    </div>
                                    <div>
                                        <img src="" alt=""> 4
                                    </div>
                                </div>
                                <div>
                                    <button>Book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img src="" alt="">
                        <div>
                            <h3>homestead</h3>
                            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nulla, vel reiciendis.</div>
                            <div>
                                <div>
                                    <div>
                                        <img src="" alt=""> 10
                                    </div>
                                    <div>
                                        <img src="" alt=""> 2
                                    </div>
                                    <div>
                                        <img src="" alt=""> 4
                                    </div>
                                </div>
                                <div>
                                    <button>Book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img src="" alt="">
                        <div>
                            <h3>homestead</h3>
                            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nulla, vel reiciendis.</div>
                            <div>
                                <div>
                                    <div>
                                        <img src="" alt=""> 10
                                    </div>
                                    <div>
                                        <img src="" alt=""> 2
                                    </div>
                                    <div>
                                        <img src="" alt=""> 4
                                    </div>
                                </div>
                                <div>
                                    <button>Book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div>
                    discover more...
                </div>
            </section>

            <section>
                <div>
                    <div></div>
                    <div>
                        <img src="" alt="">
                        <div><span>find your</span> dream house effortlessly</div>
                    </div>
                </div>

                <div>
                    <h2>Our features:</h2>
                    <div>
                        <div>
                            <img src="" alt="">
                            <div>
                                <h3>no fee's</h3>
                                <div>free for use no fee's no subscription no anything!</div>
                            </div>
                        </div>

                        <div>
                            <img src="" alt="">
                            <div>
                                <h3>no fee's</h3>
                                <div>free for use no fee's no subscription no anything!</div>
                            </div>
                        </div>

                        <div>
                            <img src="" alt="">
                            <div>
                                <h3>no fee's</h3>
                                <div>free for use no fee's no subscription no anything!</div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section>
                <div>
                    <div>
                        <h3>About us:</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis deserunt vitae doloribus. Voluptates modi beatae ullam! Beatae eaque voluptate aliquam id, nihil vero culpa dolore optio nulla consequuntur odit neque.</p>
                    </div>
                    <div>
                        <img src="" alt="">
                    </div>
                </div>
                <div></div>
            </section>

            <section>
                <div>
                    <div class="social"></div>
                    <div>
                        <img src="{{ url('images/index/logo.svg')}}">
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
            </section>


            <footer>
                this site created by <a href="#">Abdalgader m.sirag makki</a>
            </footer>
        </div>

        @livewireScripts
    </body>
</html>
