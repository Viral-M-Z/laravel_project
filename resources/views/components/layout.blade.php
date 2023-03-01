<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?=asset('assets/img/apple-icon.png')?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=asset('assets/img/favicon.png')?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Queermap</title>

	
     <!-- Bootstrap core CSS     -->
    <link href="<?=asset('assets/css/bootstrap.min.css')?>" rel="stylesheet" />

  <!--<link href="<?=asset('assetsback/css/paper-dashboard.css?v=2.0.1')?>" rel="stylesheet" />-->
  <!-- CSS Just for demo purpose, don't include it in your project -->
 
    <link href="<?=asset('assets/css/paper-dashboard.css')?>" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?=asset('assets/css/demo.css')?>" rel="stylesheet" />
    <link href="<?=asset('assets/css/custom.css')?>" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?=asset('assets/css/themify-icons.css')?>" rel="stylesheet">
    <?php $success_message = '';
        $messages = '';
        $message_array='';
        if(session()->has('_messages')) {
            $messages = session('_messages');
        }
  
        $message_array = json_encode($messages,true);
        ?>
</head>

<body>
      <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="https://demos.creative-tim.com/paper-dashboard-pro/examples/dashboard/overview.html">Paper Dashboard PRO</a>-->
            </div>
            <div class="collapse navbar-collapse">
                <!--<ul class="nav navbar-nav navbar-right">
                    <li>
                       <a href="register.html">
                            Register
                        </a>
                    </li>
                    <li>
                       <a href="https://demos.creative-tim.com/paper-dashboard-pro/examples/dashboard/overview.html">
                            Dashboard
                        </a>
                    </li>
                </ul>-->
            </div>
        </div>
    </nav>

    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page" data-color="" data-image="<?=asset('assets/img/background/background-2.jpg')?>">
        <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->


        
    {{ $slot }}

<footer class="footer footer-transparent">
                <div class="container">
                    <div class="copyright">
                        &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.29kreativ.com/">29 Kreativ</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
<script>
    $message_data = JSON.parse('<?php echo $message_array;?>');
    console.log($message_data);
    _notify = $message_data;
</script>
   <!--   Core JS Files   -->
  <script src="<?=asset('assetsback/js/core/jquery.min.js')?>"></script>
  {{-- <script src="<?=asset('assetsback/js/core/popper.min.js')?>"></script> --}}
  <script src="<?=asset('assetsback/js/core/bootstrap.min.js')?>"></script>
  <!-- <script src="<?=asset('assetsback/js/plugins/perfect-scrollbar.jquery.min.js')?>"></script>
  <script src="<?=asset('assets/js/perfect-scrollbar.js')?>"></script> -->
  <!--  Google Maps Plugin    -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
  <!-- Chart JS -->
  <script src="<?=asset('assetsback/js/plugins/chartjs.min.js')?>"></script>
  <!--  Notifications Plugin    -->
  <script src="<?=asset('assetsback/js/plugins/bootstrap-notify.js')?>"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?=asset('assetsback/js/paper-dashboard.min.js?v=2.0.1')?>" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?=asset('assetsback/demo/demo.js')?>"></script>
  <script src="<?=asset('assets/js/custom.js')?>"></script>
</body>

</html>
