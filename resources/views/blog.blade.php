@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ask Rachel belle</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/belle.css')}}">
        <link rel="icon" type="image/x-icon" href="../images/flat-speech-bubble-with-question-marks.jpg"/favicon.png>
        <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
   <body>
       <div class="container-fluid">
           <div class="row">
               <div class="col-sm-4 left-profile">
                   <div class="container">
                       <div class="col-md">
                          <div class="card card-default">
                              <div class="card-header header">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <a class="home-left-profile-links" href="/moments">Posts</a>
                                        </div>
                                        <div class="col-sm">
                                            <a class="home-left-profile-links" href="/moments">Following</a>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="col-sm">
                                            <p class="home-left-profile-text">Who to follow</p>
                                            <a class="home-left-profile-links" href="">.Refresh</a>
                                            <a class="home-left-profile-links" href="https://twitter.com/who_to_follow/suggestions">.View all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>
                   </div>
               </div>
                <div class="col-sm-8 card-right">
                    <div class="container">
                       <div>
                           <div class="col-md">
                                <div class="card card-default">
                                   <div class="card-header right-card-header">
                                        <div class="container">
                                           <div class="row">
                                                <div class="col-sm">
                                                    <form method="post" action="/post">
                                                           @csrf
                                                          <textarea name="post" class="form-control" rows="1" placeholder="Title" required></textarea>
                                                          <textarea name="post" class="form-control" rows="1" placeholder="Ask Question?" required></textarea>
                                                          <button type="submit" class="btn btn-primary"> {{ __('Post') }}</button>
                                                   </form>
                                                   <div>
                                                       <post-component v-for="post in posts" :post="posts.post"></post-component>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                 </div>
                            </div>
                         </div>
                     </div>
                </div>
             </div>
         </div>
        <div class="col-md-9">
        @yield('main_content')
        </div>
</body>


@endsection
