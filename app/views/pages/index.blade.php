@extends('layouts.main')

@section('content')



        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">FreeTime</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#login">Login/Register</a>
                        </li>

                        <li>
                            <a class="page-scroll" href="#about">About</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#team">Meet The Group</a>
                        </li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <!-- Header -->
        <header>
            <div class="container">
                <div class="intro-text">
                    <div class="intro-lead-in">Welcome To FreeTime!</div>
                    <div class="intro-heading">Start Having Fun Now</div>
                    <a href="#login" class="page-scroll btn btn-xl">Login/Register</a>
                </div>
            </div>
        </header>




        <!-- About Section -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">About</h2>
                        <h3 class="section-subheading text-muted">You Could be Doing Anything. Never Be Bored Again</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <img class="img-responsive" src="img/portfolio/roundicons-free.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- Meet the Group Section -->
        <section id="team" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Our Amazing Team</h2>
                        <h3 class="section-subheading text-muted">Kicking DataBase Ass</h3>
                    </div>
                </div>
                <div class="row">
                  <div class="col-lg-1"></div>
                    <div class="col-lg-2">
                        <div class="team-member">
                            <img src="img/Jayme.jpg" class="img-responsive img-circle" alt="">
                            <h4>Jayme Becker</h4>
                            <p class="text-muted">Designer</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="team-member">
                            <img src="img/kyle.jpg" class="img-responsive img-circle" alt="">
                            <h4>Kyle McCarthy</h4>
                            <p class="text-muted">Back-end Developer</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="team-member">
                            <img src="img/SamKreter.jpg" class="img-responsive img-circle" alt="">
                            <h4>Sam Kreter</h4>
                            <p class="text-muted">Project Developer</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="team-member">
                            <img src="img/adam.jpg" class="img-responsive img-circle" alt="">
                            <h4>Adam Speichinger</h4>
                            <p class="text-muted">API Developer</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="team-member">
                            <img src="img/Shannon.jpg" class="img-responsive img-circle" alt="">
                            <h4>Shannon Hall</h4>
                            <p class="text-muted">API Developer</p>
                            <ul class="list-inline social-buttons">
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>

            </div>
        </section>


        <!-- login/ register section -->
        <section id="login">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="section-heading text-center">Log In Existing User</h2>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="section-heading text-center">Register New User</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                            <div class="row">
                                <div id="right-line-solid" class="col-md-6">
                                  <form method="POST" action="login" name="sent-login-info" id="loginForm" novalidate>
                                      <div class="form-group">
                                          <input name="username" type="text" class="form-control" placeholder="Your Username *" id="username" required data-validation-required-message="Please enter your Username.">
                                          <p class="help-block text-danger"></p>
                                      </div>
                                      <div class="form-group">
                                          <input name="password" type="password" class="form-control" placeholder="Your Password *" id="pass" required data-validation-required-message="Please enter your Password.">
                                          <p class="help-block text-danger"></p>
                                      </div>
                                      <div class="col-lg-12 text-center">
                                          <div id="success"></div>
                                          <button id="login-button"type="submit" class="btn btn-xl">Log In</button>
                                      </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                  <form method="POST" action="register" name="sent-register-info" id="registerForm">
                                      <div class="form-group">
                                          <input name="username" type="text" class="form-control" placeholder="Username *" id="register-username" required data-validation-required-message="Please enter your Username.">
                                          <p class="help-block text-danger"></p>
                                      </div>
                                      <div class="form-group">
                                          <input name="password" type="password" class="form-control" placeholder="Enter Password *" id="register-pass" required data-validation-required-message="Please enter your Password.">
                                          <p class="help-block text-danger"></p>
                                      </div>
                                      <div class="form-group col-lg-6">
                                          <input name="first_name" type="text" class="form-control" placeholder="Enter Your First Name *" id="fname" required data-validation-required-message="Please re-enter your Password.">
                                          <p class="help-block text-danger"></p>
                                      </div>
                                      <div class="form-group col-lg-6">
                                          <input name="last_name" type="text" class="form-control" placeholder="Enter Your Last Name *" id="lname" required data-validation-required-message="Please re-enter your Password.">
                                          <p class="help-block text-danger"></p>
                                      </div>
                                      <div class="col-lg-12 text-center">
                                          <div id="success"></div>
                                          <button type="submit" class="btn btn-xl">Register</button>
                                      </div>
                                    </form>
                                  </div>

                                <div class="clearfix"></div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <span class="copyright">Copyright &copy; BadAss DB Group 2014</span>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline quicklinks">
                            <li><a href="#">Privacy Policy</a>
                            </li>
                            <li><a href="#">Terms of Use</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>


@stop
