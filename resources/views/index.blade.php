@extends('layouts.user')

@section('content')
    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>


    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- lOGO TEXT HERE -->
                <a href="index.html" class="navbar-brand">STT-NF</a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="#about" class="smoothScroll">About</a></li>
                    <li><a href="#work" class="smoothScroll">Ruangan Kami</a></li>
                    <li><a href="{{ route('user.peminjaman.create') }}" class="smoothScroll">Pinjam Ruangan</a></li>
                    <li><a href="{{ route('user.peminjaman.show') }}" class="smoothScroll">Peminjaman Saya</a></li>
                </ul>

                @if (!Auth::check())
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="section-btn"><a href="{{ route('login') }}">Sign in /
                                Join</a></li>
                    </ul>
                @else
                    {{-- change to form action logout --}}
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <ul class="nav navbar-nav navbar-right">
                            <li><button class="btn" type="submit">Log Out<i class="fa fa-sign-out"
                                        style="margin-left:10px"></i></button></li>
                        </ul>
                    </form>
                @endif
            </div>

        </div>
    </section>


    <!-- HOME -->
    <section id="home" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="home-info">
                        <h1>STT Terpadu Nurul Fikri Menyediakan Ruangan Yang Ingin Dipinjam.</h1>
                        <a href="#about" class="btn section-btn smoothScroll">Mulai</a>
                        <span>
                            CALL US (+62) 812-3456-7890
                            <small>FUntuk info lebih lanjut</small>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="home-video">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="https://www.youtube.com/embed/BZKbKCAZ7CU" frameborder="0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ABOUT -->
    <section id="about" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-5 col-sm-6">
                    <div class="about-info">
                        <div class="section-title">
                            <h2>Tentang Kami</h2>
                            <span class="line-bar">...</span>
                        </div>
                        <p>STT Terpadu Nurul Fikri menyediakan ruangan yang memiliki fasilitas lengkap, tersedia proyektor
                            yang bisa digunakan maupun kursi yang ingin digunakan.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="about-info skill-thumb">

                        <strong>Ruangan Kampus A</strong>
                        {{-- <span class="pull-right">95%</span> --}}
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="95"
                                aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                        </div>

                        <strong>Ruangan Kampus B</strong>
                        {{-- <span class="pull-right">95%</span> --}}
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="95"
                                aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                        </div>

                        <strong>Auditorium STT-NF</strong>
                        {{-- <span class="pull-right">95%</span> --}}
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="95"
                                aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="about-image">
                        <img src="{{ asset('landing/images/Perpus-depan-jpg.webp') }}" class="img-responsive"
                            alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- WORK -->
    <section id="work" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2>Daftar Ruangan STT NF</h2>
                        <span class="line-bar">...</span>
                    </div>
                </div>

                @foreach ($rooms as $r)
                    <div class="col-md-3 col-sm-6">
                        <!-- WORK THUMB -->
                        <div class="work-thumb">
                            <a href="{{ asset('landing/images/Audit-1-jpg.webp') }}" class="image-popup">
                                <img src="{{ asset('landing/images/Audit-1-jpg.webp') }}" class="img-responsive"
                                    alt="Work">

                                <div class="work-info">
                                    <h3>{{ $r->name }}</h3>
                                    <small>{{ $r->roomType->name }}</small>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>




    <!-- FOOTER -->
    <footer data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-5 col-sm-12">
                    <div class="footer-thumb footer-info">
                        <h2>Hydro Company</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                </div>

                <div class="col-md-2 col-sm-4">
                    <div class="footer-thumb">
                        <h2>Company</h2>
                        <ul class="footer-link">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Join our team</a></li>
                            <li><a href="#">Read Blog</a></li>
                            <li><a href="#">Press</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-4">
                    <div class="footer-thumb">
                        <h2>Services</h2>
                        <ul class="footer-link">
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4">
                    <div class="footer-thumb">
                        <h2>Find us</h2>
                        <p>123 Grand Rama IX, <br> Krung Thep Maha Nakhon 10400</p>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12">
                    <div class="footer-bottom">
                        <div class="col-md-6 col-sm-5">
                            <div class="copyright-text">
                                <p>Copyright &copy; 2017 Your Company</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-7">
                            <div class="phone-contact">
                                <p>Call us <span>(+66) 010-020-0340</span></p>
                            </div>
                            <ul class="social-icon">
                                <li><a href="https://www.facebook.com/templatemo" class="fa fa-facebook-square"
                                        attr="facebook icon"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>


    <!-- MODAL -->
    <section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content modal-popup">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-md-12 col-sm-12">
                                <div class="modal-title">
                                    <h2>Hydro Co</h2>
                                </div>

                                <!-- NAV TABS -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#sign_up" aria-controls="sign_up" role="tab"
                                            data-toggle="tab">Create an account</a></li>
                                    <li><a href="#sign_in" aria-controls="sign_in" role="tab" data-toggle="tab">Sign
                                            In</a></li>
                                </ul>

                                <!-- TAB PANES -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="sign_up">
                                        <form action="#" method="post">
                                            <input type="text" class="form-control" name="name" placeholder="Name"
                                                required>
                                            <input type="telephone" class="form-control" name="telephone"
                                                placeholder="Telephone" required>
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Email" required>
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Password" required>
                                            <input type="submit" class="form-control" name="submit"
                                                value="Submit Button">
                                        </form>
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade in" id="sign_in">
                                        <form action="#" method="post">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Email" required>
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Password" required>
                                            <input type="submit" class="form-control" name="submit"
                                                value="Submit Button">
                                            <a href="https://www.facebook.com/templatemo">Forgot your password?</a>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
