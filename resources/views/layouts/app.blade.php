<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resume - M. Hamdani Ilham Latjoro, ST</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/resume.css') }}" rel="stylesheet">
    <livewire:styles>

</head>

<body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">M. Hamdani Ilham Latjoro, S.T</span>
            <span class="d-none d-lg-block">
                <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset('img/profile.jpeg') }}" alt="">
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                @guest
                <li class="nav-item{{ request()->is('/') ? " active" : "" }}">
                    <a class="nav-link js-scroll-trigger" data-turbolinks-action="replace" href="{{ route('/') }}">About</a>
                </li>
                <li class="nav-item{{ request()->is('projects') ? " active" : "" }}">
                    <a class="nav-link js-scroll-trigger" data-turbolinks-action="replace"  href="{{ route('projects') }}">Projects</a>
                </li>
                <li class="nav-item{{ request()->is('experience') ? " active" : "" }}">
                    <a class="nav-link js-scroll-trigger" data-turbolinks-action="replace" href="{{ route('experience') }}">Experience</a>
                </li>
                <li class="nav-item{{ request()->is('education') ? " active" : "" }}">
                    <a class="nav-link js-scroll-trigger" data-turbolinks-action="replace" href="{{ route('education') }}">Education</a>
                </li>
                <li class="nav-item{{ request()->is('skills') ? " active" : "" }}">
                    <a class="nav-link js-scroll-trigger" data-turbolinks-action="replace" href="{{ route('skills') }}#skills">Skills</a>
                </li>
                <li class="nav-item{{ request()->is('awards') ? " active" : "" }}">
                    <a class="nav-link js-scroll-trigger"  data-turbolinks-action="replace"  href="{{ route('awards') }}">Awards</a>
                </li>
                @else
                <hr>
                <li class="nav-item{{ request()->is('/') ? " active" : "" }}">
                    <a class="nav-link js-scroll-trigger" data-turbolinks-action="replace"  href="{{ route('/') }}">Dashboard</a>
                </li>
                <li class="nav-item{{ request()->is('description/create') ? " active" : "" }}">
                    <a class="nav-link js-scroll-trigger" data-turbolinks-action="replace"  href="{{ route('description.create') }}">Description</a>
                </li>
                <li class="nav-item{{ request()->is('projects/lists') ? " active" : "" }}">
                    <a class="nav-link js-scroll-trigger" data-turbolinks-action="replace"  href="{{ route('projects.lists') }}">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                @endguest
            </ul>
        </div>
    </nav>


    @yield('content')

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/resume.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <livewire:scripts>

    @stack('js')

</body>

</html>
