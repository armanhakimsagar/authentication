<!--
author: Arman
gmail : armanhakimsagar@gmail.com
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Admin Tempalte</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- //custom-theme -->
<link href="<?php echo asset('/css/bootstrap.css')?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo asset('/css/snow.css')?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo asset('/css/component.css')?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo asset('/css/style_grid.css')?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo asset('/css/style.css')?>" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="<?php echo asset('/css/font-awesome.css')?>" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>




        <body style="background-color: #000">


            @yield('content')




          <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
          <script src="<?php echo asset('/js/modernizr.custom.js')?>"></script>
        
           <script src="<?php echo asset('/js/classie.js')?>"></script>
          <script src="<?php echo asset('/js/gnmenu.js')?>"></script>
          <script>
            new gnMenu( document.getElementById( 'gn-menu' ) );
         </script>
    
<!-- //js -->

<script src="<?php echo asset('/js/screenfull.js') ?>"></script>
        <script>
        $(function () {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

            if (!screenfull.enabled) {
                return false;
            }

            

            $('#toggle').click(function () {
                screenfull.toggle($('#container')[0]);
            }); 
        });
        </script>
<script src="<?php echo asset('/js/jquery.nicescroll.js')?>"></script>
<script src="<?php echo asset('/js/scripts.js')?>"></script>
<script src="<?php echo asset('/js/snow.js')?>"></script>
 <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript" src="<?php echo asset('/js/bootstrap-3.1.1.min.js')?>"></script>

    <script>
      new gnMenu( document.getElementById( 'gn-menu' ) );
    </script>
      <!-- script-for-menu -->

<!-- /circle-->
   <script type="text/javascript" src="<?php echo asset('/js/circles.js')?>"></script>
                   <script>
                var colors = [
                    ['#ffffff', '#fd9426'], ['#ffffff', '#fc3158'],['#ffffff', '#53d769'], ['#ffffff', '#147efb']
                  ];
                for (var i = 1; i <= 7; i++) {
                  var child = document.getElementById('circles-' + i),
                    percentage = 30 + (i * 10);
                    
                  Circles.create({
                    id:         child.id,
                    percentage: percentage,
                    radius:     80,
                    width:      10,
                    number:     percentage / 1,
                    text:       '%',
                    colors:     colors[i - 1]
                  });
                }
            
        </script>
  <!-- //circle -->
  <!--skycons-icons-->

<!--//skycons-icons-->
<!-- //js -->
<script src="<?php echo asset('/js/screenfull.js') ?>"></script>
    <script>
    $(function () {
      $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

      if (!screenfull.enabled) {
        return false;
      }

      

      $('#toggle').click(function () {
        screenfull.toggle($('#container')[0]);
      }); 
    });
    </script>
    <script src="<?php echo asset('/js/flipclock.js') ?>"></script>
  
  <script type="text/javascript">
    var clock;
    
    $(document).ready(function() {
      
      clock = $('.clock').FlipClock({
            clockFace: 'HourlyCounter'
        });
    });
  </script>
<script src="<?php echo asset('/js/bars.js') ?>"></script>







        <script src="<?php echo asset('/js/amcharts.js') ?>"></script>
           <script src="<?php echo asset('/js/serial.js') ?>"></script>
        <script src="<?php echo asset('/js/export.js') ?> "></script>  
        <script src="<?php echo asset('/js/light.js') ?>"></script>
        <!-- Chart code -->


  <!-- //amcharts -->
    <script src="<?php echo asset('/js/chart1.js') ?>"></script>
        <script src="<?php echo asset('/js/Chart.min.js') ?>"></script>
    
    <script src="<?php echo asset('/js/classie.js') ?>"></script>
    <script src="<?php echo asset('/js/gnmenu.js') ?>"></script>



</body>
</html>
