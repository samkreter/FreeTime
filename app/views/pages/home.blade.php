
@extends('layouts.main')

@section('content')

        <style>
          .top-nav-menu{
            background-color: #fec503;
            border-color: black;
            font-weight: bold;
          }
          .filler{
            background-color: white;
          }
          .calendar-custum{
              position:relative;
              top:-61px;
          }
        </style>

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
                            <a href="#portfolioModal1" class="page-scroll top-nav-menu" data-toggle="modal"><b>I Got FreeTime!</b></a>
                        </li>
                        <li>
                            <a  class="page-scroll filler" href="#services">     </a>
                        </li>
                        <li>
                            <a class="page-scroll top-nav-menu" href="#portfolioModal2" data-toggle="modal"><b>Add Activity</b></a>
                        </li>
                        <li>
                            <a class="page-scroll filler" href="#services">     </a>
                        </li>
                        <li>
                            <a class="page-scroll top-nav-menu" href="#portfolioModal3" data-toggle="modal"><b>Remove Activity</b></a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>


        <!-- Services Section -->
        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="section-heading">Username</h2>
                        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                </div>
                    <div id="calendar" class="calendar-custum"></div>
                </div>
            </div>
        </section>



        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <span class="copyright">Copyright &copy; BadAss DBGroup 2014</span>
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

        <!-- Portfolio Modals -->
        <!-- Use the modals below to showcase details about your portfolio projects! -->

        <!-- Portfolio Modal 1 -->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Find Others with FreeTIme</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <img class="img-responsive" src="img/portfolio/roundicons-free.png" alt="">
                                <p>
                                    <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                                <ul class="list-inline">
                                    <li>Date: July 2014</li>
                                    <li>Client: Round Icons</li>
                                    <li>Category: Graphic Design</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal 2 -->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                  <div class="row">
                      <div class="col-lg-8 col-lg-offset-2">
                          <div class="modal-body">
                              <h2>Add Something!</h2>

                              <div class="row">
                                <div role="tabpanel">

                                  <!-- Nav tabs -->
                                  <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#class" aria-controls="class" role="tab" data-toggle="tab">Add Class</a></li>
                                    <li role="presentation"><a href="#sport" aria-controls="sport" role="tab" data-toggle="tab">Add Sport</a></li>
                                    <li role="presentation"><a href="#activity" aria-controls="activity" role="tab" data-toggle="tab">Add Activity</a></li>
                                  </ul>

                                  <!-- Tab panes -->
                                  <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="class">
                                        <div class="row">
                                            <div class="col-md-12">
                                              <form name="sent-login-info" id="loginForm" novalidate>
                                                  <div class="form-group">
                                                      <input type="text" class="form-control" placeholder="Class Title *" name="classTitle" required data-validation-required-message="Please enter the Class Title.">
                                                      <p class="help-block text-danger"></p>
                                                  </div>
                                                  <div class="form-group">
                                                      <input type="text" class="form-control" placeholder="Class Instructor *" name="classInstructor" required data-validation-required-message="Please enter Class Instructor.">
                                                      <p class="help-block text-danger"></p>
                                                  </div>
                                                  <div class="form-group">
                                                    <fieldset>
                                                      <label>Days Class Meets</label>
                                                      <span class="navbar-brand">
                                                        <input type="checkbox" name="Monday" value="Monday" />Monday
                                                        <input type="checkbox" name="Tuesday" value="Tuesday" />Tuesday
                                                        <input type="checkbox" name="Wednesday" value="Wednesday" />Wednesday
                                                        <input type="checkbox" name="Thursday" value="Thursday" />Thursday
                                                        <input type="checkbox" name="Friday" value="Friday" />Friday
                                                        <input type="checkbox" name="Saterday" value="Saterday" />Saterday
                                                        <input type="checkbox" name="Sunday" value="Sunday" />Sunday
                                                      </span>
                                                    </fieldset>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                      <label>Start Time</label>
                                                      <input type="time" class="form-control" placeholder="Start Time *" name="classStartTime" required data-validation-required-message="Please enter the Class Start Time.">
                                                      <p class="help-block text-danger"></p>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                      <label>End Time *</label>
                                                      <input type="time" class="form-control" placeholder="End Time *" name="classEndTime" required data-validation-required-message="Please enter the Class End Time.">
                                                      <p class="help-block text-danger"></p>
                                                  </div>
                                                  <div class="form-group">
                                                      <input type="text" class="form-control" placeholder="Room Number *" name="classRoomNumber" required data-validation-required-message="Please enter Class Room Number.">
                                                      <p class="help-block text-danger"></p>
                                                  </div>
                                                  <div class="col-lg-12 text-center">
                                                      <div id="success"></div>
                                                      <button type="submit" class="btn btn-xl">Add</button>
                                                  </div>
                                                </form>
                                            </div>
                                          </div>
                                    </div><!-- class tab -->
                                    <div role="tabpanel" class="tab-pane" id="sport">
                                      <div class="row">
                                          <div class="col-md-12">
                                            <form name="sent-login-info" id="loginForm" novalidate>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Sport Name *" name="sportName" required data-validation-required-message="Please enter the Sport's Name.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Sport Location *" name="sportLocation" required data-validation-required-message="Please enter the Sport's Location.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Min Number of People</label>
                                                        <input type="number" class="form-control" placeholder="Min Number of People *" name="sportMinNum" required data-validation-required-message="Please enter the Minimal Number of People to play.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Max Number of People *</label>
                                                        <input type="number" class="form-control" placeholder="Mex Number of People *" name="sportMaxNum" required data-validation-required-message="Please enter the Max Number of People.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>

                                                    <div class="form-group">
                                                      <input type="date" class="form-control" placeholder="Sport Date *" name="sportDate" required data-validation-required-message="Please enter the Sport's Date.">
                                                      <p class="help-block text-danger"></p>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Start Time</label>
                                                        <input type="time" class="form-control" placeholder="Start Time *" name="sportStartTime" required data-validation-required-message="Please enter the Sport's Start Time.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>End Time *</label>
                                                        <input type="time" class="form-control" placeholder="End Time *" name="sportEndTime" required data-validation-required-message="Please enter the Sport's End Time.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="textbox" class="form-control" placeholder="Needed Equipment *" name="sportEquipment" required data-validation-required-message="Please enter the needed equiptment for the sport.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                    <div class="col-lg-12 text-center">
                                                        <div id="success"></div>
                                                        <button type="submit" class="btn btn-xl">Add</button>
                                                    </div>
                                                  </form>
                                          </div>
                                        </div>
                                    </div> <!-- sport tab-->
                                    <div role="tabpanel" class="tab-pane" id="activity">
                                      <div class="row">
                                          <div class="col-md-12">
                                          <form name="sent-login-info" id="loginForm" novalidate>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Activity Name *" name="activityName" required data-validation-required-message="Please enter the Activity's Name.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Activity Location *" name="activityLocation" required data-validation-required-message="Please enter the Activity's Location.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Min Number of People</label>
                                                    <input type="number" class="form-control" placeholder="Min Number of People *" name="activityMinNum" required data-validation-required-message="Please enter the Minimal Number of People.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Max Number of People *</label>
                                                    <input type="number" class="form-control" placeholder="Mex Number of People *" name="activityMaxNum" required data-validation-required-message="Please enter the Max Number of People.">
                                                    <p class="help-block text-danger"></p>
                                                </div>

                                                <div class="form-group">
                                                  <input type="date" class="form-control" placeholder="Activity Date *" name="activityDate" required data-validation-required-message="Please enter the Activity's Date.">
                                                  <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Start Time</label>
                                                    <input type="time" class="form-control" placeholder="Start Time *" name="activityStartTime" required data-validation-required-message="Please enter the Activity's Start Time.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>End Time *</label>
                                                    <input type="time" class="form-control" placeholder="End Time *" name="activityEndTime" required data-validation-required-message="Please enter the Activity's End Time.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group">
                                                    <input type="textbox" class="form-control" placeholder="Needed Supplies *" name="activityEquipment" required data-validation-required-message="Please enter the needed supplies for the Activity.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="col-lg-12 text-center">
                                                    <div id="success"></div>
                                                    <button type="submit" class="btn btn-xl">Add</button>
                                                </div>
                                              </form>
                                          </div>
                                        </div>
                                    </div><!--activity tab -->

                                  </div>

                                </div>

                              </div>

                          </div>
                      </div>
                  </div>



                </div>
            </div>
        </div>

        <!-- Remove Modal 3 -->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Choose What to Remove</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                                <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@stop
