<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FreeTime</title>

    <!-- Calendar css -->
    <link href="css/calandar.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <link href="css/table.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">


    @yield('content')

    <!-- jQuery -->
    <script src="js/jquery.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!--<script src="js/classie.js"></script>-->
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>

    <!-- autocomplete script -->
   <script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

    <!-- calendar.js -->
    <script src="js/fullcalendar.min.js"></script>
    <script src="js/calendar.js"></script>

    <script>

        $(window).load(function () {


            //send get request when user clicks on event to add
            $('.attach-item').click(function() {
                var url = $(this).attr('attr-url');
                var id = $(this).attr('attr-id');
                var scheduleId = $('body').attr('attr-schedule-id');
                var fullUrl = '/schedules/' + scheduleId + "/" + url + "/" + id + "/add";
                $.get(fullUrl);
                window.location.reload()
            });

            //send the get request if user clicks from autocomplete suggestions
            $('#autocomplete').autocomplete({
              lookup: currencies,
              groupBy: 'category',
              onSelect: function (suggestion) {
                var url = suggestion.data.attrUrl;
                var scheduleId = $('body').attr('attr-schedule-id');
                console.log("schedules = "+scheduleId+" id="+id+"url-"+url);
                //if (scheduleId === undefined) ##don't know what this is for 
                var fullUrl = '/schedules/' + scheduleId + '/' + url + '/' + id + '/add';
                console.log("Full url "+fullUrl);
                $.get(fullUrl);
                window.location.reload()
                }
            });



            //function for updating the freetime table
            function createTable(element, index, array) {
                var sups;
                if(element.equipment){
                    sups = element.equipment;
                }
                else if(element.supplies){
                    sups = element.supplies;
                }
                else{
                    sups = "None";
                }
                $('#freeTimeTable')
                .append("<tr><td>"+element.start+"</td><td>"+element.end+"</td><td>"+element.name+"</td><td>"+element.location+"</td><td>"+element.min_players+"</td><td>"+element.max_players+"</td><td>"+sups+"</td>");
            }
            //update the "I got freetime tab"
            $('#freetimeModal').click(function(){
                $.get( "/schedules/all", function( data ) {
                    console.log(data.sports[0])
                    data.sports.forEach(createTable);
                    data.activities.forEach(createTable);
                });
            });
          });

    </script>


</body>

</html>
