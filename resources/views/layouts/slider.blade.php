
------------------------------------------------------------------

@extends('admin.index')
@section("content")
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner">
        @foreach($sliderImg as $key => $slider)
        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
            <img src="{{url('images', $slider->image)}}" class="d-block w-100"  alt="..."> 
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true">     </span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
@endsection




------------------------------------------------------------------




  
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
<div class="flex flex-col">

    

    <div class="min-h-screen flex items-center justify-center">
        
        <header>
                     
            
            
            <!-- The HTML5 video element that will create the background video on the header -->
            <video class="z-index-1"playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="images/roller-video-inicio.mp4" type="video/mp4">
            </video>

            <!-- The header content -->
            <div class="z-index-2 container h-100 bg-dark">
                <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white">

                        @if(Route::has('login'))
                        <div class="absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
                            @auth
                                <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}</a>
                            @else
                            <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>
                            @endif
                            @endauth
                        </div>
                        @endif
                    </div>
                </div>
            </div>
         
        </header>
        
    </div>
</div>
</body>