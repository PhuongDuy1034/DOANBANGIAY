<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- bootstrap css -->
      <link rel="stylesheet"  href="{{ asset('frontend/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet"  href="{{ asset('frontend/css/style.css') }}">
      <!-- Responsive-->
      <link  rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
      <!-- fevicon -->
      <link href="images/fevicon.png" type="image/gif" />
      <link  rel="stylesheet" href="{{ asset('frontend/images') }}">
      <!-- Scrollbar Custom CSS -->
      <link  rel="stylesheet" href="{{ asset('frontend/css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link   href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link  rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
      <link rel="stylesheet"  href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
      <link   href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
</head>
         {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
 class="antialiased"
          class="main-layout" 
         </div>  --}}
         <body>
            <!-- header section start -->
            <div class="header_section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="logo"><a href="#"><img src="{{ asset('frontend/images/logo.png')}}"></a></div>
                        </div>
                        <div class="col-sm-9">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                   <a class="nav-item nav-link" href="index.html">Home</a>
                                   <a class="nav-item nav-link" href="/product">New Products</a>
                                   <a class="nav-item nav-link" href="shoes.html">Shoes</a>
                                   <a class="nav-item nav-link" href="racing boots.html">Racing Boots</a>
                                   <a class="nav-item nav-link" href="contact.html">Contact</a>
                                   <a class="nav-item nav-link last" href="#"><img src="{{ asset('frontend/images/search_icon.png')}}"></a>
                                   <a class="nav-item nav-link last" href="contact.html"><img src="{{ asset('frontend/images/shop_icon.png')}}"></a>
                                   @if (Route::has('login'))
                                   
                                       @auth
                                           <a href="{{ route('user.logout')}}" class="nav-item nav-link">Log Out</a>
                                       @else
                                           <a href="{{ route('login') }}" class="nav-item nav-link">Log in</a>
                   
                                           @if (Route::has('register'))
                                               <a href="{{ route('register') }}" class="nav-item nav-link">Register</a>
                                           @endif
                                       @endauth
                                   
                               @endif
                                </div>
                            </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="banner_section">
                    <div class="container-fluid">
                        <section class="slide-wrapper">
            <div class="container-fluid">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>
        
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                            <div class="col-sm-2 padding_0">
                                <p class="mens_taital">Men Shoes</p>
                                <div class="page_no">0/2</div>
                                <p class="mens_taital_2">Men Shoes</p>
                            </div>
                            <div class="col-sm-5">
                                <div class="banner_taital">
                                    <h1 class="banner_text">New Running Shoes </h1>
                                    <h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
                                    <p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <button class="buy_bt">Buy Now</button>
                                    <button class="more_bt">See More</button>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="shoes_img"><img src="{{ asset('frontend/images/running-shoes.png')}}"></div>
                            </div>
                        </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                            <div class="col-sm-2 padding_0">
                                <p class="mens_taital">Men Shoes</p>
                                <div class="page_no">0/2</div>
                                <p class="mens_taital_2">Men Shoes</p>
                            </div>
                            <div class="col-sm-5">
                                <div class="banner_taital">
                                    <h1 class="banner_text">New Running Shoes </h1>
                                    <h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
                                    <p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <button class="buy_bt">Buy Now</button>
                                    <button class="more_bt">See More</button>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="shoes_img"><img src="{{ asset('frontend/images/running-shoes.png')}}"></div>
                            </div>
                        </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                            <div class="col-sm-2 padding_0">
                                <p class="mens_taital">Men Shoes</p>
                                <div class="page_no">0/2</div>
                                <p class="mens_taital_2">Men Shoes</p>
                            </div>
                            <div class="col-sm-5">
                                <div class="banner_taital">
                                    <h1 class="banner_text">New Running Shoes </h1>
                                    <h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
                                    <p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <button class="buy_bt">Buy Now</button>
                                    <button class="more_bt">See More</button>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="shoes_img"><img src="{{ asset('frontend/images/running-shoes.png')}}"></div>
                            </div>
                        </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                            <div class="col-sm-2 padding_0">
                                <p class="mens_taital">Men Shoes</p>
                                <div class="page_no">0/2</div>
                                <p class="mens_taital_2">Men Shoes</p>
                            </div>
                            <div class="col-sm-5">
                                <div class="banner_taital">
                                    <h1 class="banner_text">New Running Shoes </h1>
                                    <h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
                                    <p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <button class="buy_bt">Buy Now</button>
                                    <button class="more_bt">See More</button>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="shoes_img"><img src="{{ asset('frontend/images/running-shoes.png')}}"></div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>			
                    </div>
                </div>
            </div>
            <!-- header section end -->
            <!-- new collection section start -->
            <div class="layout_padding collection_section">
                <div class="container">
                    <h1 class="new_text"><strong>New  Collection</strong></h1>
                    <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                    <div class="collection_section_2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-img">
                                    <button class="new_bt">New</button>
                                    <div class="shoes-img"><img src="{{ asset('frontend/images/shoes-img1.png')}}"></div>
                                    <p class="sport_text">Men Sports</p>
                                    <div class="dolar_text">$<strong style="color: #f12a47;">90</strong> </div>
                                    <div class="star_icon">
                                        <ul>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <button class="seemore_bt">See More</button>
                            </div>
                            <div class="col-md-6">
                                <div class="about-img2">
                                    <div class="shoes-img2"><img src="{{ asset('frontend/images/shoes-img2.png')}}"></div>
                                    <p class="sport_text">Men Sports</p>
                                    <div class="dolar_text">$<strong style="color: #f12a47;">90</strong> </div>
                                    <div class="star_icon">
                                        <ul>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collection_section">
                <div class="container">
                    <h1 class="new_text"><strong>Racing Boots</strong></h1>
                    <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
            </div>
            <div class="collectipn_section_3 layuot_padding">
                <div class="container">
                    <div class="racing_shoes">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="shoes-img3"><img src="{{ asset('frontend/images/shoes-img3.png')}}"></div>
                            </div>
                            <div class="col-md-4">
                                <div class="sale_text"><strong>Sale <br><span style="color: #0a0506;">JOGING</span> <br>SHOES</strong></div>
                                <div class="number_text"><strong>$ <span style="color: #0a0506">100</span></strong></div>
                                <button class="seemore">See More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collection_section layout_padding">
                <div class="container">
                    <h1 class="new_text"><strong>New Arrivals Products</strong></h1>
                    <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
            </div>
            <!-- new collection section end -->
            <!-- New Arrivals section start -->
            <div class="layout_padding gallery_section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="best_shoes">
                                <p class="best_text">Best Shoes </p>
                                <div class="shoes_icon"><img src="{{ asset('frontend/images/shoes-img4.png')}}"></div>
                                <div class="star_text">
                                    <div class="left_part">
                                        <ul>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                        </ul>
                                    </div>
                                    <div class="right_part">
                                        <div class="shoes_price">$ <span style="color: #ff4e5b;">60</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="best_shoes">
                                <p class="best_text">Best Shoes </p>
                                <div class="shoes_icon"><img src="{{ asset('frontend/images/shoes-img5.png')}}"></div>
                                <div class="star_text">
                                    <div class="left_part">
                                        <ul>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                        </ul>
                                    </div>
                                    <div class="right_part">
                                        <div class="shoes_price">$ <span style="color: #ff4e5b;">400</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="best_shoes">
                                <p class="best_text">Best Shoes </p>
                                <div class="shoes_icon"><img src="{{ asset('frontend/images/shoes-img6.png')}}"></div>
                                <div class="star_text">
                                    <div class="left_part">
                                        <ul>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                        </ul>
                                    </div>
                                    <div class="right_part">
                                        <div class="shoes_price">$ <span style="color: #ff4e5b;">50</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="best_shoes">
                                <p class="best_text">Sports Shoes</p>
                                <div class="shoes_icon"><img src="{{ asset('frontend/images/shoes-img7.png')}}"></div>
                                <div class="star_text">
                                    <div class="left_part">
                                        <ul>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                        </ul>
                                    </div>
                                    <div class="right_part">
                                        <div class="shoes_price">$ <span style="color: #ff4e5b;">70</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="best_shoes">
                                <p class="best_text">Sports Shoes</p>
                                <div class="shoes_icon"><img src="{{ asset('frontend/images/shoes-img8.png')}}"></div>
                                <div class="star_text">
                                    <div class="left_part">
                                        <ul>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                        </ul>
                                    </div>
                                    <div class="right_part">
                                        <div class="shoes_price">$ <span style="color: #ff4e5b;">100</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="best_shoes">
                                <p class="best_text">Sports Shoes</p>
                                <div class="shoes_icon"><img src="{{ asset('frontend/images/shoes-img9.png')}}"></div>
                                <div class="star_text">
                                    <div class="left_part">
                                        <ul>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                            <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                        </ul>
                                    </div>
                                    <div class="right_part">
                                        <div class="shoes_price">$ <span style="color: #ff4e5b;">90</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buy_now_bt">
                        <button class="buy_text">Buy Now</button>
                    </div>
                </div>
            </div>
               <!-- New Arrivals section end -->
               <!-- contact section start -->
            <div class="layout_padding contact_section">
                <div class="container">
                    <h1 class="new_text"><strong>Contact Now</strong></h1>
                </div>
                <div class="container-fluid ram">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="email_box">
                            <div class="input_main">
                               <div class="container">
                                  <form action="/action_page.php">
                                    <div class="form-group">
                                      <input type="text" class="email-bt" placeholder="Name" name="Name">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" class="email-bt" placeholder="Phone Numbar" name="Name">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" class="email-bt" placeholder="Email" name="Email">
                                    </div>
                                    
                                    <div class="form-group">
                                        <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                                    </div>
                                  </form>   
                               </div> 
                               <div class="send_btn">
                                <button class="main_bt">Send</button>
                               </div>                   
                            </div>
                    </div>
                        </div>
                        <div class="col-md-6">
                            <div class="shop_banner">
                                <div class="our_shop">
                                    <button class="out_shop_bt">Our Shop</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               <!-- contact section end -->
            <!-- section footer start -->
            <div class="section_footer">
                <div class="container">
                    <div class="mail_section">
                        <div class="row">
                            <div class="col-sm-6 col-lg-2">
                                <div><a href="#"><img src="{{ asset('frontend/images/footer-logo.png')}}"></a></div>
                            </div>
                            <div class="col-sm-6 col-lg-2">
                                <div class="footer-logo"><img src="{{ asset('frontend/images/phone-icon.png')}}"><span class="map_text">(71) 1234567890</span></div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="footer-logo"><img src="{{ asset('frontend/images/email-icon.png')}}"><span class="map_text">Demo@gmail.com</span></div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="social_icon">
                                    <ul>
                                        <li><a href="#"><img src="{{ asset('frontend/images/fb-icon.png')}}"></a></li>
                                        <li><a href="#"><img src="{{ asset('frontend/images/twitter-icon.png')}}"></a></li>
                                        <li><a href="#"><img src="{{ asset('frontend/images/in-icon.png')}}"></a></li>
                                        <li><a href="#"><img src="{{ asset('frontend/images/google-icon.png')}}"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                    </div> 
                    <div class="footer_section_2">
                        <div class="row">
                            <div class="col-sm-4 col-lg-2">
                                <p class="dummy_text"> ipsum dolor sit amet, consectetur ipsum dolor sit amet, consectetur  ipsum dolor sit amet,</p>
                            </div>
                            <div class="col-sm-4 col-lg-2">
                                <h2 class="shop_text">Address </h2>
                                <div class="image-icon"><img src="{{ asset('frontend/images/map-icon.png')}}"><span class="pet_text">No 40 Baria Sreet 15/2 NewYork City, NY, United States.</span></div>
                            </div>
                            <div class="col-sm-4 col-md-6 col-lg-3">
                                <h2 class="shop_text">Our Company </h2>
                                <div class="delivery_text">
                                    <ul>
                                        <li>Delivery</li>
                                        <li>Legal Notice</li>
                                        <li>About us</li>
                                        <li>Secure payment</li>
                                        <li>Contact us</li>
                                    </ul>
                                </div>
                            </div>
                        <div class="col-sm-6 col-lg-3">
                            <h2 class="adderess_text">Products</h2>
                            <div class="delivery_text">
                                    <ul>
                                        <li>Prices drop</li>
                                        <li>New products</li>
                                        <li>Best sales</li>
                                        <li>Contact us</li>
                                        <li>Sitemap</li>
                                    </ul>
                                </div>
                        </div>
                        <div class="col-sm-6 col-lg-2">
                            <h2 class="adderess_text">Newsletter</h2>
                            <div class="form-group">
                                <input type="text" class="enter_email" placeholder="Enter Your email" name="Name">
                            </div>
                            <button class="subscribr_bt">Subscribe</button>
                        </div>
                        </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- section footer end -->
            <div class="copyright">2019 All Rights Reserved. <a href="https://html.design">Free html  Templates</a></div>
        
            <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
            <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
            <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('frontend/js/jquery-3.0.0.min.js') }}"></script>
            <script src="{{ asset('frontend/js/plugin.js') }}"></script>
            <!-- sidebar -->
            <script src="{{ asset('frontend/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
            <script src="{{ asset('frontend/js/custom.js') }}"></script>
            <!-- javascript --> 
            <script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
            <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
            <script>
               $(document).ready(function(){
               $(".fancybox").fancybox({
               openEffect: "none",
               closeEffect: "none"
               });
               
               
        $('#myCarousel').carousel({
                  interval: false
              });
        
              //scroll slides on swipe for touch enabled devices
        
              $("#myCarousel").on("touchstart", function(event){
        
                  var yClick = event.originalEvent.touches[0].pageY;
                  $(this).one("touchmove", function(event){
        
                      var yMove = event.originalEvent.touches[0].pageY;
                      if( Math.floor(yClick - yMove) > 1 ){
                          $(".carousel").carousel('next');
                      }
                      else if( Math.floor(yClick - yMove) < -1 ){
                          $(".carousel").carousel('prev');
                      }
                  });
                  $(".carousel").on("touchend", function(){
                      $(this).off("touchmove");
                  });
              });
            </script> 
        </body>
        </html>
        