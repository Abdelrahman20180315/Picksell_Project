<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Picksell</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500&family=Tajawal:wght@300;400;500&display=swap" rel="stylesheet">
    
    
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- font aweasome icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/front/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/front/assets/css/style.css">

    <!-- style for responsive pages -->
    <link rel="stylesheet" href="public/front/assets/css/responsive.css">

    <!-- style for animation css -->
    <link rel="stylesheet" href="public/assets/css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- jquery script -->
    <script src="public/front/assets/js/jquery.min.js"></script>


</head>

<body>

   

    <!-- start hero section -->
    <section id="hero">
        
        <!-- ===> [ Start navbar ] <================== -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar_home">
            <div class="container">

                <a class="navbar-brand logo_home" href="#">
                    <img src="public/front/assets/img/Logo1.png" alt="" class="d-inline-block align-text-top">

                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                        <li class="nav-item">
                            <a class="nav-link" href="#entro_section">why picksell</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#steps_section">site work?</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="#users_opinion_section">Users' opinions</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="..public/front/ar/index.html">عربي</a>
                        </li>

                    </ul>

                    <div class="d-flex nav_box_btn">
                        <a href="{{url('users/login')}}">
                            <button class="btn rounded-pill  mx-1 login_btn">Login</button>
                        </a>
                        <a href="{{url('users/registration')}}">
                            <button class="btn rounded-pill  mx-1 register_btn">Register</button>
                        </a>
                       
                    </div>

                </div>
            </div>
        </nav>
        <!-- start dropdown for mobile -->
        <div class="offcanvas offcanvas-start nav_for_mobil" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">

                    <div class="logo_home_mobile">
                        <img src="public/front/assets/img/Logo1.png" alt="" width="30" height="24"
                            class="d-inline-block align-text-top">
                    </div>

                </h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="mt-3 login_row">
                    <a href="{{url('users/login')}}">Login</a>
                </div>

                <div class="mt-3 register_row">
                    <a href="{{url('users/registration')}}">Register</a>
                </div>

            </div>
        </div>
        <!-- end dropdown for mobile -->

        <!-- ===> [ End navbar ] <================== -->




        <div class="hero_section">
            <div class="hero_square_one"></div>
            <div class="hero_square_tow"></div>

            @foreach($home_slider as $home_slider)
            <div class="container col-md-7 m-auto ">
                <h1 class="wow animate__backInDown">
                    {{$home_slider->Title}}
                </h1>
                <p class="lead wow animate__backInDown">
                    {{$home_slider->Text}}
                </p>
                <button onclick="{{url('users/registeration')}}" class="rounded-pill wow animate__pulse infinite btn_get_start">Get Start</button>
            </div>

            @endforeach

        </div>
    </section>
    <!-- End hero section -->


    <section id="main">


        <!-- [ start entro section ] -->
        <section id="entro_section" class="entro_section">
            <div class="container">
                @foreach($home_intro as $home_intro)
                <div class="row">
                    <div class="col-md-7 wow animate__fadeInDown">

                        <h2 class="main_title"> <span>{{$home_intro->FirstTitle}}</span> </h2>
                        <p class="lead">
                            {{$home_intro->FirstText}}
                        </p>

                        <h2 class="mt-5 main_title"><span>{{$home_intro->SecondTitle}}</span></h2>
                        <p class="lead">
                            {{$home_intro->SecondText}}
                        </p>

                    </div>

                    <div class="col-md-5 wow animate__fadeInUp">
                        <img src="IntrosectionFolder/{{$home_intro->IntroImage}}" class="img-fluid" alt="name img here">
                    </div>


                </div>
                @endforeach

            </div>
            
        </section>
        <!-- [ End entro section ] -->

        <!-- [ start section Get start ] -->
        <section id="get_start_section" class="get_start_section">
            <div class="container">
                @foreach($middle_page as $middle_page)
                <div class="text-center pb-4">
                    <h3 class="big_title pb-2 wow animate__backInDown">
                        {{$middle_page->MiddleTitle}}
                    </h3>
                    <p class="lead wow animate__backInUp">
                        {{$middle_page->MiddleText}}
                    </p>
                </div>
                @endforeach
                <div class="row mt-5">
                    @foreach($platform_environment as $platform_environment)
                    <div class="col-md-3 text-center p-4 wow animate__fadeInUp" data-wow-duration="1s"
                        data-wow-delay="0.2s">
                        <img src="PlatformEnvironmentFolder/{{$platform_environment->PlatformImage}}" height="120px" width="100%" alt="">
                        <h4 class="mt-3 mb-4">{{$platform_environment->PlatformTitle}}</h4>
                        <p class="lead">
                            {{$platform_environment->PlatformText}}
                        </p>
                    </div>
                    @endforeach

                </div>

            </div>
        </section>
        <!-- [ End section Get start ] -->

        <!-- Start section steps -->
        <section class="steps_section" id="steps_section">
            <div class="square_top_one"></div>
            <div class="square_top_tow"></div>


            <div class="container">
                @foreach($after_platform as $after_platform)
                <div class="text-center">
                    <h4 class="big_title wow animate__rubberBand">{{$after_platform->AfterPlatformTitle}}</h4>
                    <p class="lead mt-3">{{$after_platform->AfterPlatformText}}</p>
                </div>
                @endforeach
                <div class="row mt-5">
                    @foreach($start_steps as $start_steps)
                    <div class="col-md-3 mb-5">
                        <div class="card card-body shadow wow animate__fadeInUp" data-wow-duration="1.5s"
                            data-wow-delay="0.2s">
                            <span class="number_step rounded-pill">{{$start_steps->id}}</span>
                            <img src="StartStepsFolder/{{$start_steps->StartImage}}" alt="" width="100px" height="100px">
                            <h5 class="mt-4 mb-4">{{$start_steps->StartText}}</h5>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>

        </section>
        <!-- End section steps -->

        <!-- start Users' opinions section -->
        <section id="users_opinion_section" class="users_opinion_section">
            <div class="square_top_three"></div>
            <div class="square_top_fore"></div>
            <div class="square_bottom_one"></div>
            <div class="square_bottom_tow"></div>

            <div class="container">
                <h5 class="big_title text-center">
                    <img class="mr-2 ml-2" src="public/front/assets/img/users-bubble.svg" alt="" width="60px" height="60px">
                    Users' opinions
                </h5>

                <div class="row mt-5 mb-4">
                    @foreach($user_opinions as $user_opinions)
                    <div class="col-md-4 mb-5 wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="card card-body text-center">
                            <p class="lead">
                                {{$user_opinions->OpinionText}}
                            </p>
                            <div class="row mt-3">
                                <div class="col-6 text-end">
                                    <img src="UsersOpinionsFolder/{{$user_opinions->userimage}}" class="rounded-pill" width="50px" height="50px"
                                        alt="">

                                </div>
                                <div class="col-6 text-start pt-1">
                                    <h6 class="m-0">username</h6>
                                    <p>{{$user_opinions->username}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   


                </div>
            </div>
        </section>
        <!-- End Users' opinions section -->

        <!-- start get start now section -->

        <section class="start_now" id="start_now">
            @foreach($before_footer as $before_footer)


            <div class="container wow animate__bounceInUp">

                <div class="col-md-9 m-auto">
                    <h6 class="big_title mb-3">
                        {{$before_footer->beforefootertitle}}
                    </h6>
                    <p class="lead mb-4">
                        {{$before_footer->beforefootertext}}
                    </p>

                    <button onclick="{{url('users/registeration')}}" class="get_start_btn_end rounded-pill mt-5 wow animate__pulse infinite ">Get Start</button>

                </div>

            </div>
            @endforeach

        </section>


        <!-- End get start now section -->



        <div class="page_wave"></div>
        <!-- start footer -->
        <section class="footer" id="footer">
            <div class="container">
                @foreach($footer as $footer)
                <div class="row">
                    <div class="col-md-7 mb-5">
                        <h6 class="main_title text-white mb-5">{{$footer->websiteurl}}</h6>
                        <p class="lead">{{$footer->footertext}}</p>
                    </div>
                    <div class="col-md-5 text-center">
                        <h4 class="text-white">Follow us on social media</h4>
                        <div class="box_social text-center">
                            <div class="d-flex justify-content-center">
                                <div><i class="bi bi-facebook"></i></div>
                                <div><i class="bi bi-whatsapp"></i></div>
                                <div><i class="bi bi-linkedin"></i></div>
                                <div><i class="bi bi-twitter"></i></div>
                                <div><i class="bi bi-youtube"></i></div>
                            </div>
                        </div>
                        <h5 class="mt-5">Contact us through e-mail:</h5>
                        <p class="lead">
                            <strong class="pr-3"> E-mail </strong>
                            <a href="#" class="text-info">
                                {{$footer->email}}
                            </a>
                        </p>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <p class="lead">
                        {{$footer->copywrite}}
                    </p>
                </div>
                @endforeach

            </div>
        </section>

        <!-- End footer -->


    </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="public/front/assets/js/bootstrap.bundle.min.js"></script>

    <!-- script for animation on page -->
    <script src="public/front/assets/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>


</body>

</html>