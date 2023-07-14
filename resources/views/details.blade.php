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
                <a href="index.html" class="navbar-brand">STT Terpadu Nurul Fikri</a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="{{ route('index') }}" class="smoothScroll">Home</a></li>
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


    <!-- BLOG HEADER -->
    <section id="blog-header" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-offset-1 col-md-5 col-sm-12">
                    <h2>Halo, {{ Auth::user()->name }}! <br> Apakah Kamu Sedang Mencari Ruangan Yang Diperlukan?</h2>
                </div>

            </div>
        </div>
    </section>


    <!-- BLOG DETAIL -->
    <section id="blog-detail" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <!-- BLOG THUMB -->
                    <div class="blog-detail-thumb">
                        <h2>Ingin Meminjam Ruangan Di Kampus Kami?</h2>
                        <p>Isi Form Dibawah Ini Untuk Meminjam Ruangan Di Kampus Kami</p>
                        <blockquote>Fasilitas Dalam Ruangan : Proyektor, Kursi Meja, Papan Tulis, AC.</blockquote>
                        <div class="col-md-10 col-sm-10">

                            <!-- CONTACT FORM HERE -->
                            <form action="{{ route('user.peminjaman.store') }}" method="post">
                                @csrf
                                <div class="col-md-12 col-sm-6" style="margin-bottom: 20px">
                                    <label for="room_id">Pilih Ruangan</label>
                                    <select name="room_id" id="room_id" class="form-control">
                                        @foreach ($rooms as $room)
                                            <option value="{{ $room->id }}">{{ $room->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <label for="borrow_at">Tanggal Peminjaman</label>
                                    <input type="datetime-local" class="form-control" name="borrow_at" id="borrow_at">
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <label for="until_at">Tanggal Selesai Peminjaman</label>
                                    <input type="datetime-local" class="form-control" name="until_at" id="until_at">
                                </div>

                                <div class="col-md-12 col-sm-12" style="margin-top: 20px">
                                    <label for="notes">Catatan</label>
                                    <textarea class="form-control" name="notes" id="notes" cols="15" rows="5"></textarea>
                                </div>

                                <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6" style="margin-top: 20px">
                                    <input type="submit" class="form-control" name="submit" value="Submit Button">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <footer data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

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
                                <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
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
