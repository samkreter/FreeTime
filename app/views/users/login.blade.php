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
                    <a class="navbar-brand page-scroll" href="/">FreeTime</a>
                </div>


                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <!-- login/ register section -->
        <section id="login">

            <div class="container">
                <div class="row">
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="section-heading text-center">Log In Existing User</h2>
                        <?php if(Session::has('login')): ?>
                            <div class="alert alert-danger" role="alert"><?php echo Session::get('login'); ?></div>
                        <?php endif ?>
                    </div>

                    <div class="col-lg-6">
                        <h2 class="section-heading text-center">Register New User</h2>
                        <?php if(Session::has('errors')): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php
                                foreach ($errors->all() as $error) {
                                    echo $error . '<br>';
                                }
                                ?>
                            </div>
                        <?php endif ?>
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
                                      <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input name="first_name" type="text" class="form-control" placeholder="Enter Your First Name *" id="fname" required data-validation-required-message="Please re-enter your Password.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="col-lg-6">
                                                <input name="last_name" type="text" class="form-control" placeholder="Enter Your Last Name *" id="lname" required data-validation-required-message="Please re-enter your Password.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
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
