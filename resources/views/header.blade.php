@section('header')

    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li class="divider"></li>
        <li><a href="#!">three</a></li>
    </ul>

    <ul id="dropdown2" class="dropdown-content">
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li class="divider"></li>
        <li><a href="#!">three</a></li>
    </ul>

    <nav class="navbar-material materialize-blue dark-5" role="navigation">
        <div class="nav-wrapper">
            <a href="{{ route("/") }}" class="left brand-logo logo">
                <img src="{{asset('img/dspot_logo.png')}}" alt="logo" class="logo-default">
            </a>

            <a href="{{ route("/") }}" class="center brand-logo title">
                <img src="{{asset('img/dspot_title.png')}}" alt="logo" class="logo-default">
            </a>

{{--            <ul class="right hide-on-med-and-down">
                <li><a href="#">
                        <a class="dropdown-trigger" href="#!" data-target="dropdown1">
                            <i class="medium material-icons foreground_white">account_circle</i>
                        </a>
                    </a>
                </li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="#"><a class="dropdown-trigger" href="#!" data-target="dropdown2">Dropdown<i class="material-icons right">arrow_drop_down</i></a></a></li>
            </ul>

            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>--}}
        </div>
    </nav>

@show
