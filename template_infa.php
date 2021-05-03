<?php
defined('ACCESS') or die();
if(cfgSET('cfgOnOff') == "off" && $status != 1) {
	include "includes/errors/tehwork.php";
	exit();
} elseif(cfgSET('cfgOnOff') == "off" && $status == 1) {
	print '<p align="center" class="warn">—айт отключен и недоступен дл¤ остальных пользователей!</p>';
}
?>
<?php
#################################################
# Kubelance.ru
# Дизайн адаптировал  Zorro
# Вконтакте: https://vk.com/kub_elance
# Skype: zorro.red (Готов принять ваши заказы)
# ICQ: 602930609
# E-mail: lavric.10@mail.ru
#################################################
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php print $title; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
	<meta name="keywords" content="<?php print $keywords; ?>" />
    <meta name="author" content="<?php print $description; ?>">

    <link type='text/css' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600' rel='stylesheet'>

    <link type="text/css" href="/lk/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">        <!-- Font Awesome -->
    <link type="text/css" href="/lk/fonts/themify-icons/themify-icons.css" rel="stylesheet">              <!-- Themify Icons -->
    <link type="text/css" href="/lk/css/styles.css" rel="stylesheet">                                     <!-- Core CSS with all styles -->

    <link type="text/css" href="/lk/plugins/codeprettifier/prettify.css" rel="stylesheet">                <!-- Code Prettifier -->
    <link type="text/css" href="/lk/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">              <!-- iCheck -->

    <!--[if lt IE 10]>
        <script type="text/javascript" src="assets/js/media.match.min.js"></script>
        <script type="text/javascript" src="assets/js/respond.min.js"></script>
        <script type="text/javascript" src="assets/js/placeholder.min.js"></script>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->
    
<link type="text/css" href="/lk/plugins/fullcalendar/fullcalendar.css" rel="stylesheet"> 						<!-- FullCalendar -->
<link type="text/css" href="/lk/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"> 			<!-- jVectorMap -->
<link type="text/css" href="/lk/plugins/switchery/switchery.css" rel="stylesheet">   							<!-- Switchery -->

    </head>

<body class="focused-form animated-content" style="background: url(/img/lk.png);
    background-attachment: fixed;
    background-size: cover;
    position: relative;
    min-height: 100%;">
<?php
	defined('ACCESS') or die();
	if(!$page) {
		include "includes/index.php";
	} elseif(file_exists("../".$page."/index.php")) {
		include "../".$page."/".$page."_ru.php";
	} else {
		include "includes/errors/404.php";
	}
?>
				
<!-- /Switcher -->
    <!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

<script type="text/javascript" src="/lk/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
<script type="text/javascript" src="/lk/js/jqueryui-1.10.3.min.js"></script> 							<!-- Load jQueryUI -->
<script type="text/javascript" src="/lk/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->
<script type="text/javascript" src="/lk/js/enquire.min.js"></script> 									<!-- Load Enquire -->

<script type="text/javascript" src="/lk/plugins/velocityjs/velocity.min.js"></script>					<!-- Load Velocity for Animated Content -->
<script type="text/javascript" src="/lk/plugins/velocityjs/velocity.ui.min.js"></script>

<script type="text/javascript" src="/lk/plugins/wijets/wijets.js"></script>     						<!-- Wijet -->

<script type="text/javascript" src="/lk/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->
<script type="text/javascript" src="/lk/plugins/bootstrap-switch/bootstrap-switch.js"></script> 		<!-- Swith/Toggle Button -->

<script type="text/javascript" src="/lk/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->

<script type="text/javascript" src="/lk/plugins/iCheck/icheck.min.js"></script>     					<!-- iCheck -->

<script type="text/javascript" src="/lk/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->

<script type="text/javascript" src="/lk/js/application.js"></script>
<script type="text/javascript" src="/lk/demo/demo.js"></script>
<script type="text/javascript" src="/lk/demo/demo-switcher.js"></script>

<!-- End loading site level scripts -->
    
    <!-- Load page level scripts-->
    
<!-- Charts -->
<script type="text/javascript" src="/lk/plugins/charts-flot/jquery.flot.min.js"></script>             	<!-- Flot Main File -->
<script type="text/javascript" src="/lk/plugins/charts-flot/jquery.flot.pie.min.js"></script>             <!-- Flot Pie Chart Plugin -->
<script type="text/javascript" src="/lk/plugins/charts-flot/jquery.flot.stack.min.js"></script>       	<!-- Flot Stacked Charts Plugin -->
<script type="text/javascript" src="/lk/plugins/charts-flot/jquery.flot.orderBars.min.js"></script>   	<!-- Flot Ordered Bars Plugin-->
<script type="text/javascript" src="/lk/plugins/charts-flot/jquery.flot.resize.min.js"></script>          <!-- Flot Responsive -->
<script type="text/javascript" src="/lk/plugins/charts-flot/jquery.flot.tooltip.min.js"></script> 		<!-- Flot Tooltips -->
<script type="text/javascript" src="/lk/plugins/charts-flot/jquery.flot.spline.js"></script> 				<!-- Flot Curved Lines -->

<script type="text/javascript" src="/lk/plugins/sparklines/jquery.sparklines.min.js"></script> 			 <!-- Sparkline -->

<script type="text/javascript" src="/lk/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>       <!-- jVectorMap -->
<script type="text/javascript" src="/lk/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>   <!-- jVectorMap -->

<script type="text/javascript" src="/lk/plugins/switchery/switchery.js"></script>     					<!-- Switchery -->
<script type="text/javascript" src="/lk/plugins/easypiechart/jquery.easypiechart.js"></script>
<script type="text/javascript" src="/lk/plugins/fullcalendar/moment.min.js"></script> 		 			<!-- Moment.js Dependency -->
<script type="text/javascript" src="/lk/plugins/fullcalendar/fullcalendar.min.js"></script>   			<!-- Calendar Plugin -->

<script type="text/javascript" src="/lk/demo/demo-index.js"></script> 									<!-- Initialize scripts for this page-->

    <!-- End loading page level scripts-->

    </body>
</html>