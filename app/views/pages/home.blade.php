
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

          .autocomplete-suggestions { border: 1px solid #999; background: #FFF; cursor: default; overflow: auto; -webkit-box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64); -moz-box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64); box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64); }
          .autocomplete-suggestion { padding: 2px 5px; white-space: nowrap; overflow: hidden; }
          .autocomplete-no-suggestion { padding: 2px 5px;}
          .autocomplete-selected { background: #F0F0F0; }
          .autocomplete-suggestions strong { font-weight: bold; color: #000; }
          .autocomplete-group { padding: 2px 5px; }
          .autocomplete-group strong { font-weight: bold; font-size: 16px; color: #000; display: block; border-bottom: 1px solid #000; }
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
                            <a  class="filler">     </a>
                        </li>
                        <li>
                            <a class="page-scroll top-nav-menu" href="#portfolioModal2" data-toggle="modal"><b>Add Activity</b></a>
                        </li>
                        <li>
                            <a class="filler">     </a>
                        </li>
                        <li>
                            <a class="page-scroll top-nav-menu" href="#portfolioModal3" data-toggle="modal"><b>Schedule Activity</b></a>
                        </li>
                        <li>
                            <a class="filler">     </a>
                        </li>
                        <li>
                            <a class="page-scroll top-nav-menu" href="logout"><b>Log Out</b></a>
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
                        <h2 class="section-heading"><?php echo Auth::user()->username; ?></h2>
                        <h3 class="section-subheading text-muted">Enjoy Having Your Freetime</h3>
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

        <!-- FreeTime Modal 1 -->
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
                              <h2>Find Others Now!</h2>
                                <table class="bordered">
                                    <thead>

                                    <tr>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Name</th>
                                        <th>Location</th>
                                        <th>Min Players</th>
                                        <th>Max Players</th>
                                        <th>Needed Equipment</th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td>1</td>
                                        <td>The Shawshank Redemption</td>

                                        <td>1994</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>The Godfather</td>
                                        <td>1972</td>
                                    </tr>
                                    <tr>

                                        <td>3</td>
                                        <td>The Godfather: Part II</td>
                                        <td>1974</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>The Good, the Bad and the Ugly</td>
                                        <td>1966</td>

                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Pulp Fiction</td>
                                        <td>1994</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>12 Angry Men</td>

                                        <td>1957</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Schindler's List</td>
                                        <td>1993</td>
                                    </tr>
                                    <tr>

                                        <td>8</td>
                                        <td>One Flew Over the Cuckoo's Nest</td>
                                        <td>1975</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>The Dark Knight</td>

                                        <td>2008</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>The Lord of the Rings: The Return of the King</td>
                                        <td>2003</td>
                                    </tr>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Modal 2 -->

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
                                              <form method="post" action="/schedules/classes/new" name="sent-class-info" id="classForm" novalidate>
                                                  <div class="form-group">
                                                      <input type="text" class="form-control" placeholder="Class Title *" name="title" required data-validation-required-message="Please enter the Class Title.">
                                                      <p class="help-block text-danger"></p>
                                                  </div>
                                                  <div class="form-group">
                                                      <input type="text" class="form-control" placeholder="Class Instructor *" name="instructor" required data-validation-required-message="Please enter Class Instructor.">
                                                      <p class="help-block text-danger"></p>
                                                  </div>
                                                  <div class="form-group">
                                                    <label>Date *</label>
                                                    <input type="date" class="form-control" placeholder="Sport Date *" name="sportDate" required data-validation-required-message="Please enter the Sport's Date.">
                                                    <p class="help-block text-danger"></p>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                      <label>Start Time</label>
                                                      <input id="timeInput" type="time" class="form-control timeInput" placeholder="Start Time *" name="start" required data-validation-required-message="Please enter the Class Start Time.">
                                                      <p class="help-block text-danger"></p>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                      <label>End Time *</label>
                                                      <input type="time" class="form-control timeInput" placeholder="End Time *" name="end" required data-validation-required-message="Please enter the Class End Time.">
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
                                            <form method="post" action="/schedules/sports/new" name="sent-sport-info" id="sportForm" novalidate>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Sport Name *" name="name" required data-validation-required-message="Please enter the Sport's Name.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Sport Location *" name="location" required data-validation-required-message="Please enter the Sport's Location.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Min Number of People</label>
                                                        <input type="number" class="form-control" placeholder="Min Number of People *" name="min_players" required data-validation-required-message="Please enter the Minimal Number of People to play.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Max Number of People *</label>
                                                        <input type="number" class="form-control" placeholder="Mex Number of People *" name="max_players" required data-validation-required-message="Please enter the Max Number of People.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>

                                                    <div class="form-group">
                                                      <label>Date *</label>
                                                      <input type="date" class="form-control" placeholder="Sport Date *" name="sportDate" required data-validation-required-message="Please enter the Sport's Date.">
                                                      <p class="help-block text-danger"></p>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Start Time</label>
                                                        <input type="time" class="form-control timeInput" placeholder="Start Time *" name="start" required data-validation-required-message="Please enter the Sport's Start Time.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>End Time *</label>
                                                        <input type="time" class="form-control timeInput" placeholder="End Time *" name="end" required data-validation-required-message="Please enter the Sport's End Time.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="textbox" class="form-control" placeholder="Needed Equipment" name="sportEquipment" required data-validation-required-message="Please enter the needed equiptment for the sport.">
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
                                          <form method="post" action="/schedules/activities/new" name="sent-activity-info" id="activityForm" novalidate>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Activity Name *" name="name" required data-validation-required-message="Please enter the Activity's Name.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Activity Location *" name="location" required data-validation-required-message="Please enter the Activity's Location.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Min Number of People</label>
                                                    <input type="number" class="form-control" placeholder="Min Number of People *" name="min_players" required data-validation-required-message="Please enter the Minimal Number of People.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Max Number of People *</label>
                                                    <input type="number" class="form-control" placeholder="Mex Number of People *" name="max_players" required data-validation-required-message="Please enter the Max Number of People.">
                                                    <p class="help-block text-danger"></p>
                                                </div>

                                                <div class="form-group">
                                                  <label>Date *</label>
                                                  <input type="date" class="form-control" placeholder="Activity Date *" name="activityDate" required data-validation-required-message="Please enter the Activity's Date.">
                                                  <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Start Time</label>
                                                    <input type="time" class="form-control timeInput" placeholder="Start Time *" name="start" required data-validation-required-message="Please enter the Activity's Start Time.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>End Time *</label>
                                                    <input type="time" class="form-control timeInput" placeholder="End Time *" name="end" required data-validation-required-message="Please enter the Activity's End Time.">
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

    <!-- Scheduling Modal 3 -->
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
                    <h3>Click what you want to add</h3>
                    <div class="modal-body">
                        <div id="searchfield">
                          <form><input type="text" placeholder="Seaarch Through the List"name="currency" class="form-control" id="autocomplete"></form>
                        </div><!-- @end #searchfield -->
                        <div class="row .filterContent">
                            <div class="col-lg-4">
                                <h2>Classes</h2>
                                <?php foreach($classes as $class){
                                    echo "<h4><a href='#' class='attach-item' attr-url='classes' attr-id='$class->id'>$class->title - $class->instructor</a></h4>";
                                } ?>
                            </div>
                            <div class="col-lg-4">
                                <h2>Sports</h2>
                                <?php foreach($sports as $sport){
                                    echo "<h4><a href='#' class='attach-item' attr-url='sports' attr-id='$sport->id'>$sport->name - $sport->location</a><h4>";
                                }
                                ?>
                            </div>
                            <div class="col-lg-4">
                                <h2>Activities</h2>
                                <?php foreach($activities as $activity){
                                    echo "<h4><a href='#' class='attach-item' attr-url='activities' attr-id='$activity->id'>$activity->name - $activity->location</a></h4>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>​

    <script>
          //populate the autocomplete suggestions
          var currencies =
            <?php
            echo"[";
            //populate the actiity autocomplete
            foreach($activities as $activity){
                echo "{ value: '$activity->name  $activity->location',data: { category: 'Activity',attrUrl:'activities', attrId:'$activity->id' } },\n";
            }
            //populate the sports autocomplete
            foreach($sports as $sport){
                echo "{ value: '$sport->name  $sport->location',data: { category: 'Sport',attrUrl:'sports', attrId:'$sport->id' } },\n";
            }
            //populate the class autocomplete
            foreach($classes as $class){
                echo "{ value: '$class->title  $class->instructor',data: { category: 'Class',attrUrl:'classes', attrId:'$class->id' } },\n";
            }
            echo"];";
            ?>





    </script>

@stop
