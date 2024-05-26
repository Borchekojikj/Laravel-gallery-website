<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    @include('partials.head')
</head>


<body>

    <div class="container-fluid">
        <div class="row justify-content-center  min-vh-100">
            <div class="col-12   align-self-start">
                <div class="row justify-content-center bg-warning">
                    <div class="col-sm-12 col-lg-8">

                        <nav class="navbar navbar-expand-lg">
                            <div class="container-fluid">
                                <div class="text-center">
                                    <img src="/images/logo_footer_black.png" alt="" width="40px">
                                    <p class="navbar-brand me-0 fw-bold text-uppercase mb-0 "> Brainster </p>
                                </div>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link " aria - current="page" href="#"> Академоија за Програмирање </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"> Академија за Маркетинг </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"> Академија за Дизајн </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"> Блог </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Вработи наши студенти </a>
                                        </li>

                                        @auth
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('user.logout') }}"> Одјави се </a>
                                        </li>
                                        @endauth
                                    </ul>

                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @auth <div class="col-lg-8 col-sm-12 border-bottom mb-4">
                        <div>
                            <a href="{{ route('home') }}" class="custom-button"> Почетна страница </a>
                            <a href="{{ route('home.store') }}" class="custom-button"> Додај </a>
                            <a href="{{ route('home.edit') }}" class="custom-button"> Измени </a>
                        </div>
                    </div>
                    @else
                    <div class="col-12">
                        <div class="row">
                            <div class="banner">
                                <div class="inner">
                                    <div class="text-center ">
                                        <h1 class="fs-1"> Brainster.xyz Labs </h1>
                                        <p> Проекти од академиите на Brainster </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endauth
                </div>
            </div>
            @if (session()->has('success'))
            <p class="alert alert-success"> {{ session('success') }}</p>
            @endif
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <!--Content-->
                        @yield('content')
                    </div>
                </div>

            </div>
            @include('partials.footer')

        </div>
    </div>


    @include('partials.contact-modal')

    @yield('scripts')



    <!-- POPPER JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>


</html>