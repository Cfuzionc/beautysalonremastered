<header>

    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-simple nav-line">
        <div class="container">
            <!--Nav Links-->
            <div class="collapse navbar-collapse " id="Test">
                <div class="ml-auto navbar-nav ml-auto d-flex justify-content-between w-100">
                    <a class="nav-link active" href="/">Home</a>
                    <a class="nav-link" href="/">About</a>
                    <a class="nav-link" href="/">Reservate</a>
                    <a class="nav-link" href="/">Contact</a>
                    @auth
                        <a class="nav-link" href="/" style="margin-left: 15px; ">Dashboard</a>
                        <form class="nav-link" method="POST" action="/" id="logout-form">
                            @csrf
                            <button class="btn btn-danger" style="margin-left: 15px" type="submit">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" style="margin-left: 100px;" class="btn btn-primary">Log
                            in</a>
                    @endauth
                </div>
            </div>
        </div>

        <!--Side Menu Button-->
        <a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle">
            <span></span>
            <span></span>
            <span></span>
        </a>

        </div>
    </nav>

    <!--Side Nav-->
    <div class="side-menu hidden">
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#rev-slider">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Reserve now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Contact</a>
                    </li>
                </ul>
            </nav>

            <div class="side-footer w-100">
                <ul class="social-icons-simple">
                    <li><a class="facebook-text-hvr" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a>
                    </li>
                    <li><a class="instagram-text-hvr" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a>
                    </li>
                    <li><a class="twitter-text-hvr" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                </ul>
                <p>&copy; Test</p>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
    <!-- End side menu -->

</header>
