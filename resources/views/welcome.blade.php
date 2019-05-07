<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ask Rachel belle</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/belle.css')}}">
        <link rel="icon" type="image/x-icon" href="../images/flat-speech-bubble-with-question-marks.jpg"/favicon.png>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <img class="logo" src="./images/flat-speech-bubble-with-question-marks.jpg" alt="logo" style="width:52px">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/marketing') }}">Marketing</a>
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div class="title">
            Ask Rachel Belle
        </div>
        <img class="welcome-first-image" src="./images/head.jpg" style="width:100%" >
        <div class="slideshow-container">

            <div class="mySlides">
              <div class="numbertext">1 / 3</div>
              <img src="./images/shoes.jpg" style="width:100%" >
              <div class="text"></div>
            </div>

            <div class="mySlides">
              <div class="numbertext">2 / 3</div>
              <img src="./images/guy.jpg" style="width:100%">
                <div class="text"></div>
            </div>

            <div class="mySlides">
              <div class="numbertext">3 / 3</div>
              <img src="./images/ipad.jpg" style="width:100%">
              <div class="text"></div>
            </div>

        </div>
        <br/>
        <div style="text-align:center">
           <span class="dot"></span>
           <span class="dot"></span>
           <span class="dot"></span>
        </div>

            <h1>Hello World!</h1>
            <div id="typed" class="strings">
                <p>Welcome to<strong> Ask Rachel Belle</strong> Got a</p>
                <p>question<em> that</em><p>needs answers?</p>
            </div>
            <span id="typed"> </span>

        <div class="container welcome-intro">
            <div class="row">
                <div class="col-sm-4">
                    <p>Here is how it works, sign up and register, ask a question and you should get a response asap.
                    Got something on your mind? Whether your at home on your computer, or traveling with your moblie device feel free and say Hi!</p>
                </div>
                <div class="col-sm-8">
                    <img  src="./images/testimonial.jpg">
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <p>Meet new people and connect!
                         Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                </div>
                <div class="col-sm">
                    <p>See what people have to say about thier experience when they discovered Ask Rachel Belle!</p>
                </div>
            </div>
        </div>
        {{-- <div class="container-fluid welcome-intro">
            <div class="row">
                <div class="col-sm" style="background-color:lavender;">
                    <p>Here is how it works, sign up and register, ask a question and you should get a response asap.
                        Got something on your mind? Whether your at home on your computer, or traveling with your moblie device feel free and say Hi!</p>
                </div>

            <div class="row">
                <div class="col-sm" style="background-color:lavenderblush;">
                    <p>Meet new people and connect!
                         Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                </div>

            <div class="row">
                <div class="col-sm" style="background-color:lavender;">
                    <p>See what people have to say about thier experience when they discovered Ask Rachel Belle!
                        </p>
                </div>

                  <img class="testimonial" src="./images/testimonial.jpg">
            </div>
        </div> --}}
        {{-- @include('partials.footer') --}}


        <script type="text/javascript" src="js/typed.js"></script>
       <script type="text/javascript" src="{{url::asset('js/coolstuff.js') }}" ></script>
       {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
       <script>
                   var slideIndex = 0;
                   showSlides();

                   function showSlides() {
                     var i;
                     var slides = document.getElementsByClassName("mySlides");
                     var dots = document.getElementsByClassName("dot");
                     for (i = 0; i < slides.length; i++) {
                       slides[i].style.display = "none";
                     }
                     slideIndex++;
                     if (slideIndex > slides.length) {slideIndex = 1}
                     for (i = 0; i < dots.length; i++) {
                       dots[i].className = dots[i].className.replace(" active", "");
                     }
                     slides[slideIndex-1].style.display = "block";
                     dots[slideIndex-1].className += " active";
                     setTimeout(showSlides, 3000); // Change image every 2 seconds
                   }
       </script>
       <script>
             var typed = new Typed('#typed', {
               stringsElement: '#typed-strings'
             });
       </script>
   </body>
</html>
