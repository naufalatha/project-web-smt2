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
                       <li><a href="index.html#home" class="smoothScroll">Home</a></li>
                       <li><a href="index.html#about" class="smoothScroll">About</a></li>
                       <li><a href="index.html#blog" class="smoothScroll">Blog</a></li>
                       <li><a href="index.html#work" class="smoothScroll">Our Work</a></li>
                       <li><a href="index.html#contact" class="smoothScroll">Contacts</a></li>
                  </ul>

                  <ul class="nav navbar-nav navbar-right">
                       <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                       <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                       <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                       <li class="section-btn"><a href="#" data-toggle="modal" data-target="#modal-form">Sign in / Join</a></li>
                  </ul>
             </div>

        </div>
   </section>


   <!-- BLOG HEADER -->
   <section id="blog-header" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
             <div class="row">

                  <div class="col-md-offset-1 col-md-5 col-sm-12">
                       <h2>Apakah Kamu Sedang Mencari Ruangan Yang Diperlukan?</h2>
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
                            <div class="blog-image">
                                 <img src="images/ruang-kuliah-kampus-b-227x300.webp" class="img-responsive" alt="Blog Image">
                            </div>
                            <h2>Ingin Meminjam Ruangan Di Kampus Kami?</h2>
                            <p>Ruangan kami yang berada di kampus B2 ini memiliki beberapa fasilitas yang diperlukan seperti: Proyektor, Kursi Meja, Papan Tulis</p>

                            <blockquote>Fasilitas Dalam Ruangan Ini : Proyektor,Kursi Meja,Papan Tulis,AC.</blockquote>
                            <div class="col-md-10 col-sm-10">
                      
                                 <!-- CONTACT FORM HERE -->
                                 <form id="contact-form" role="form" action="#" method="post">
                                      <div class="col-md-6 col-sm-6">
                                           <input type="text" class="form-control" placeholder="Full Name" id="cf-name" name="cf-name" required="">
                                      </div>
        
                                      <div class="col-md-6 col-sm-6">
                                           <input type="email" class="form-control" placeholder="Your Email" id="cf-email" name="cf-email" required="">
                                      </div>
        
                                      <div class="col-md-6 col-sm-6">
                                           <input type="tel" class="form-control" placeholder="Your Phone" id="cf-number" name="cf-number" required="">
                                      </div>
        
                                      <div class="col-md-6 col-sm-6">
                                           <select class="form-control" id="cf-budgets" name="cf-budgets">
                                                <option>Ruangan</option>
                                                <option>Auditorium</option>
                                                <option>Ruangan B1</option>
                                                <option>Ruangan B2</option>
                                           </select>
                                      </div>
        
                                      <div class="col-md-12 col-sm-12">
                                           <textarea class="form-control" rows="6" placeholder="Your requirements" id="cf-message" name="cf-message" required=""></textarea>
                                      </div>
        
                                      <div class="col-md-4 col-sm-12">
                                           <input type="submit" class="form-control" name="submit" value="Send Message">
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
   <section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                           <li class="active"><a href="#sign_up" aria-controls="sign_up" role="tab" data-toggle="tab">Create an account</a></li>
                                           <li><a href="#sign_in" aria-controls="sign_in" role="tab" data-toggle="tab">Sign In</a></li>
                                      </ul>

                                      <!-- TAB PANES -->
                                      <div class="tab-content">
                                           <div role="tabpanel" class="tab-pane fade in active" id="sign_up">
                                                <form action="#" method="post">
                                                     <input type="text" class="form-control" name="name" placeholder="Name" required>
                                                     <input type="telephone" class="form-control" name="telephone" placeholder="Telephone" required>
                                                     <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                     <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                     <input type="submit" class="form-control" name="submit" value="Submit Button">
                                                </form>
                                           </div>

                                           <div role="tabpanel" class="tab-pane fade in" id="sign_in">
                                                <form action="#" method="post">
                                                     <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                     <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                     <input type="submit" class="form-control" name="submit" value="Submit Button">
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