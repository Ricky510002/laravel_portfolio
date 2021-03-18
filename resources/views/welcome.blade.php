<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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

    <!-- ファビコン -->
    <link rel="bookmatch icon" href="{{ asset('bookmatch.ico') }}">

    <!-- Styles -->
    <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    
</head>

<body>
      <nav class=" navbar navbar-expand-md navbar-light bg-dark shadow-sm " style="height: 65px" >
        
            @if (Route::has('login'))
                <div class="top-right links ">
                    @auth
                     <a class="btn btn-outline-light btn-lg text-info py-2 mr-lg-5 " href="{{ route('home') }}">Home</a>
                    @else
                    <a class="text-white"  href="{{ route('login') }}"  >Login</a>

                        @if (Route::has('register'))
                            <a class="text-white" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif 
     </nav>
            <!-- パソコン用背景 -->
            <div class="container-lg-fluid h-100 d-none d-lg-block"
            style="
            background-image: url(https://images.pexels.com/photos/2663851/pexels-photo-2663851.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260);
            background-size: 100% 100%;
            background-attachment: fixed;
            ">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="display-1">Book Match</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <!-- <p class="text-white-75 font-weight-light mb-5">Start Bootstrap can help you build better websites using the Bootstrap framework! Just download a theme and start customizing, no strings attached!</p> -->
                        <a class="btn btn-outline-dark btn-lg btn-xl js-scroll-trigger" href="{{ route('register') }}">新規登録</a>
                    </div>
                </div>

            </div>

            <!-- スマホ用背景 -->
            <div class="container-lg-fluid h-100 d-block d-lg-none"
            style="
            
            background-image: url(https://images.unsplash.com/photo-1515707743625-2f8e5fd8f8b4?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8NDh8fGJvb2t8ZW58MHx8MHw%3D&auto=format&fit=crop&w=800&q=60);
            background-size: 100% 100%;
            background-attachment: fixed;
            ">
                <div class="row" style="height:80px;"></div>
                <div class="row  align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="display-1">Book Match</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <!-- <p class="text-white-75 font-weight-light mb-5">Start Bootstrap can help you build better websites using the Bootstrap framework! Just download a theme and start customizing, no strings attached!</p> -->
                        <a class="btn btn-outline-info btn-lg btn-xl js-scroll-trigger" href="{{ route('register') }}">新規登録</a>
                    </div>
                </div>
            </div>



            <div class="container-fluid  bg-dark">

                <div class="row  align-items-center  text-center">   
                        <h1 class="mt-4 ml-4 text-white">Book Match とは ?</h1>      
                </div>

                <!-- パソコン用 -->
                <div class="row justify-content-center m-5 d-none d-lg-block">
                    <div class="font-weight-bold text-white offset-4"  style="font-size: 2rem;">大学生のこんな問題を解決します！</div>
                </div>

                <div class="container d-none d-lg-block">

                    <div class="row mx-5 mt-5">
                        <div class="col-2 " >
                            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="180" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16" style="color:white;" >
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>
                            
                        </div>

                        <div class="col-10 bg-light rounded-pill ">

                            <div class="container">
                                <div class="row justify-content-center my-4">
                                <p class="text-dark" style="font-size:2rem;">・大学で使わなくなった教科書を売りたい</p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <p class="text-dark" style="font-size:2rem;">・教科書を捨てるのはもったいない</p>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>

                    <div class="row  mx-5">
                        <div class="col-2">
                            <p class="text-white ml-3" style="font-size:25px;">出品者</p>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16" style="color:pink;">
                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
                        </svg>
                    </div>

                    <div class="row justify-content-center mt-2">
                        <p style="font-size: 80px;" class="text-light">Book Match</p> 
                    </div>

                    <div class="row justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16" style="color:pink;">
                        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
                        </svg>
                    </div>

                    <div class="row mx-5 mt-5">

                        <div class="col-10 bg-light rounded-pill">
                            <div class="container">
                                <div class="row justify-content-center my-4">
                                <p class="text-dark" style="font-size:30px;">・大学の教科書を安く書いたい</p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <p class="text-dark" style="font-size:30px;">・先輩からその大学の情報を聞きたい</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-2" >
                             <svg xmlns="http://www.w3.org/2000/svg" width="150" height="180" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" style="color:white;">
                             <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                             </svg>
                        </div>
                            
                    </div>

                    <div class="row  mx-5" style="height:100px;">
                        <div class="col-10"></div>
                        <div class="col-2">
                            <p class="text-white ml-5" style="font-size:25px;">購入者</p>
                        </div>
                    </div>

                </div>
                <!-- パソコン用ここまで -->

                <!-- スマホ用 -->
                <div class="row justify-content-center my-5 d-block d-lg-none">
                    <div class="font-weight-bold text-white ml-4"  style="font-size: 20px;">大学生のこんな問題を解決します！</div>
                </div>

                <div class="container d-block d-lg-none">

                    <div class="row  mt-5">
                        <div class="col-2" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16" style="color:white;" >
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>
                            
                        </div>

                        <div class="col-8">
                            <p class="text-white" style="font-size:25px;">出品者</p>
                        </div>

                        <div class="col-12 bg-light rounded-pill ">

                            <div class="container">
                                <div class="row justify-content-center mt-4">
                                <p class="text-dark" style="font-size:1.2rem;">・大学で使わなくなった教科書を売りたい</p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row justify-content-center mt-1">
                                    <p class="text-dark" style="font-size:1.2rem;">・教科書を捨てるのはもったいない</p>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>


                    <div class="row justify-content-center my-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16" style="color:pink;">
                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
                        </svg>
                    </div>

                    <div class="row justify-content-center mt-2">
                        <p style="font-size: 60px;" class="text-light">Book Match</p> 
                    </div>

                    <div class="row justify-content-center my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16" style="color:pink;">
                        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
                        </svg>
                    </div>

                    <div class="row  mt-5">

                        <div class="col-12 bg-light rounded-pill">
                            <div class="container">
                                <div class="row justify-content-center mt-3">
                                <p class="text-dark" style="font-size:1.2rem;">・大学の教科書を安く書いたい</p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row justify-content-center mt-2">
                                    <p class="text-dark" style="font-size:1.1rem;">・先輩からその大学の情報を聞きたい</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row  mt-1" >

                        <div class="col-5"></div>
                        
                        <div class="col-4 mr-2 mt-3 ">
                            <p class="text-white" style="font-size:25px;">購入者</p>
                        </div>

                        <div class="col-2" >
                             <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" style="color:white;">
                             <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                             </svg>
                        </div>
                    </div>

                </div>


        
        </div>

        

    <div id="app">
       <main class="py-4 bg-light">
            <div class="container h-130 ">
                <div class="row justify-content-center ">
                    
                            @foreach($items as $item)
                                   
                                    <div class="col-lg-3 col-md-5 col-sm-5 ">
                                        <div class="card border border-secondary mb-3" style="width: 100%; margin-top: 30px;">
                                            <!-- パソコン用 -->
                                            <img class="bd-placeholder-img card-img-top d-none d-lg-block" width="100%" height="180" src="{{ Storage::url($item->file_path) }}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
                                            
                                            <!-- スマホ用 -->
                                            <img class="bd-placeholder-img card-img-top d-block d-lg-none" width="100%" height="300" src="{{ Storage::url($item->file_path) }}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
                                            
                                            <div class="card-body border border-secondary">
                                                    <h5 class="card-title text-dark">{{ $item->item_title }}</h5>
                                                    <!-- <a href="#" class="btn btn-outline-dark ml-4"></a> -->
                                            </div>
                                        </div>
                                    </div>
                               
                            @endforeach
                            
                            

                            <!-- <div class="mt-5 " >
                            {{ $items->links() }}
                            </div> -->

                            <!-- <div class="container">
                            <div class="row">

                            <div class="input-group" style="margin-top: 30px">
                                <form action="/search/" method="GET">
                                    <input type="text" class="form-control" name="search" value="{{request('search')}}" placeholder="検索">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-primary">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                          </svg>
                                        </button>
                                    </span>
                                </form>

                                
                                

                            </div>

                            <a href="/" class="btn btn-primary">一覧表示へ戻る</a>

                            </div>
                        </div>
             -->
                    
             
                </div> 
            </div>
        </main>
    </div>

    <footer class="footer container-fluid bg-dark " style="height: 65px" >
      <div class="row justify-content-center">
        <p class="text-white mt-3">&copy; BookMatch</p> 
      </div>
        
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
