<?php
defined('ACCESS') or die();
if(cfgSET('cfgOnOff') == "off" && $status != 1) {
	include "includes/errors/tehwork.php";
	exit();
} elseif(cfgSET('cfgOnOff') == "off" && $status == 1) {
	print '<p align="center" class="warn">Сайт отключен и недоступен для остальных пользователей!</p>';
}
$email	= addslashes(htmlspecialchars($_POST['email'], ENT_QUOTES, ''));
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    
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

<body class="animated-content layout-boxed sidebar-collapsed">
<script type="text/javascript">
<!--
	var h=<?php print intval(date('G')); ?>;
	var m=<?php print intval(date('i')); ?>;
	var s=<?php print intval(date('s')); ?>;
	setInterval("showtime()",1000);

	function showtime() {
		s++;
		if (s>=60) {
			s=0;
			m++;
			if (m>=60) {
				m=0;
				h++;
				if (h>=24) h=0;
			}
		}
		s = s+"";
		m = m+"";
		h = h+"";
		if (s.length<2) s = "0"+s;
		if (m.length<2) m = "0"+m;
		if (h.length<2) h = "0"+h;
		document.getElementById("time").innerHTML = h+":"+m+":"+s;
	}

	$(document).ready(function(){
	$('#getContent').click(function(){
	$.ajax({
		url: "/adminpanel/modules/serverip.php",
		cache: false,
		beforeSend: function() {
			$('#divContent').html('<center><img src="images/loader.gif" width="16" height="16" border="0" alt="" /> Определяем IP адрес...</center>');
		},
		success: function(html){
			$("#divContent").html(html);
		}
	});
	return false;
	});
	});
-->
</script>        
        <header id="topnav" class="navbar navbar-fixed-top navbar-deep-orange" role="banner">

	<div class="logo-area">
		<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="ti ti-menu"></i>
				</span>
			</a>
		</span>
		
		<a class="navbar-brand" href="/">BAM LP</a>

		<div class="toolbar-icon-bg hidden-xs" id="toolbar-search">
            <div class="input-group">
            	<span class="input-group-btn"><button class="btn" type="button"><i class="ti ti-user"></i></button></span>
				<input type="text" class="form-control" value="https://<?php print $cfgURL; ?>/?ref=<?php print $login; ?>">
				<span class="input-group-btn"><button class="btn" type="button"><i class="ti ti-close"></i></button></span>
			</div>
        </div>

	</div><!-- logo-area -->

	<ul class="nav navbar-nav toolbar pull-right">
	

		<li class="toolbar-icon-bg visible-xs-block" id="trigger-toolbar-search">
			<a href="#"><span class="icon-bg"><i class="ti ti-search"></i></span></a>
		</li>
		<li class="toolbar-icon-bg hidden-xs">
            <a href="#" style="color: #FFF">Время сервера: <br><div id="time"></div></a>
        </li>
        
		<li class="toolbar-icon-bg hidden-xs">
            <a href="#" onclick="doGTranslate('ru|ru');return false;" title="Russian" class="social-media" style="background-position:-500px -200px;"><img src="/images/Russia.png" class="img-circle img-thumbnail" height="25" width="25" alt="Русский"/></a>
        </li>

        <li class="toolbar-icon-bg hidden-xs">
            <a href="#" onclick="doGTranslate('ru|en');return false;" title="English" class="" style="background-position:-0px -0px;"><img img src="/images/United-Kingdom.png" class="img-circle img-thumbnail" height="25" width="25" alt="Английский"/></a>
        </li>

        <li class="dropdown toolbar-icon-bg hidden-xs">
			<a href="#" onclick="doGTranslate('ru|fr');return false;" title="French" class="" style="background-position:-200px -100px;"><img src="/images/France.png" class="img-circle img-thumbnail" height="25" width="25" alt="Французский"/></a>
		</li>
		
		<li class="dropdown toolbar-icon-bg">
			<a href="#" onclick="doGTranslate('ru|de');return false;" title="German" class="" style="background-position:-300px -100px;"><img src="/images/Germany.png" class="img-circle img-thumbnail" height="25" width="25" alt="Немецкий"/></a>
		</li>

	</ul>
<style type="text/css"><!--
a.gflag {vertical-align:middle;font-size:16px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/16.png);}
a.gflag img {border:0;}
a.gflag:hover {background-image:url(//gtranslate.net/flags/16a.png);}
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}
--></style>
<div id="google_translate_element2"></div>
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'ru',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>
</header>

<div id="wrapper">
            <div id="layout-static">
                <div class="static-sidebar-wrapper sidebar-black">
                    <div class="static-sidebar">
                        <div class="sidebar">
	<div class="widget">
        <div class="widget-body">
            <div class="userinfo">
                <div class="avatar">
                    <img src="/img/user.png" class="img-responsive img-circle"> 
                </div>
                <div class="info">
                    <span class="username"><?php print"$login"; ?></span><br>
                    <span class="useremail"><i class="ti ti-wallet"></i> БАЛАНС: <a><?php print $pmbalance; ?> $ </a></span>
                </div>
            </div>
        </div>
    </div>
	<div class="widget stay-on-collapse" id="widget-sidebar">
        <nav role="navigation" class="widget-body">
<ul class="acc-menu">
		<li class="nav-separator"><span>Навигация</span></li>
		<li><a href="/"><i class="ti ti-home"></i><span>Главная</span></a></li>
		<li><a href="/myaccount"><i class="ti ti-desktop"></i><span>Кабинет</span></a></li>
		<li><a href="/news"><i class="ti ti-agenda"></i><span>Новости</span></a></li>
		<li><a href="/entermoney"><i class="ti ti-plus"></i><span>Пополнить счёт</span></a></li>
		<li><a href="/deposit"><i class="ti ti-briefcase"></i><span>Открыть депозит</span></a></li>
		<li><a href="/deposits"><i class="ti ti-server"></i><span>Мои депозиты</span></a></li>
		<li><a href="/withdraw"><i class="ti ti-wallet"></i><span>Снять средства</span></a></li>
		<li><a href="/transfer"><i class="ti ti-reload"></i><span>Перевод</span></a></li>
		<li><a href="/faq"><i class="ti ti-help-alt"></i><span>FAQ</span></a></li>		
		<li><a href="/mypartners"><i class="ti ti-user"></i><span>Партнеры</span></a></li>
		<li><a href="/settings"><i class="ti ti-settings"></i><span>Настройки</span></a></li>
		<li><a href="/answers"><i class="ti ti-announcement"></i><span>Отзывы</span></a></li>
		<li><a href="/contacts"><i class="ti ti-headphone-alt"></i><span>Тех.поддержка</span></a></li>
        <li><a href="/exit.php"><i class="ti ti-shift-left-alt"></i><span>Выход</span></a></li>		
	</ul>
</nav>
</div>
</div>
                    </div>
                </div>
				                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">
                                
<li class=""><a href="#">Кабинет</a></li>
<li class="active"><a href="#"><?php print $title; ?></a></li>

                            </ol>
                            <div class="container-fluid">
	
<?php
$cusers		= mysql_num_rows(mysql_query("SELECT id FROM users"));
$cwm		= mysql_num_rows(mysql_query("SELECT id FROM users WHERE pm_balance != 0 OR lr_balance != 0"));

$money	= 0.00;
$query	= "SELECT sum FROM output WHERE status = 2";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$money = $money + $row['sum'];
}

$depmoney	= 0.00;
$query	= "SELECT sum FROM deposits WHERE status = 0";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$depmoney = $depmoney + $row['sum'];
}
?>

<?php
$cusers		= mysql_num_rows(mysql_query("SELECT id FROM users")) + cfgSET('fakeusers');
$cwm		= mysql_num_rows(mysql_query("SELECT id FROM users WHERE pm_balance != 0 OR lr_balance != 0")) + cfgSET('fakeactiveusers');

$money	= cfgSET('fakewithdraws');
$query	= "SELECT sum FROM output WHERE status = 2";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$money = $money + $row['sum'];
}

$depmoney	= cfgSET('fakedeposits');
$query	= "SELECT sum FROM deposits WHERE status = 0";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$depmoney = $depmoney + $row['sum'];
}
?>

<?php
	$nu	= mysql_fetch_array(mysql_query("SELECT login FROM users ORDER BY id DESC LIMIT 1"));
?>
<?php
	$nd	= mysql_fetch_array(mysql_query("SELECT * FROM deposits ORDER BY id DESC LIMIT 1"));
?>
<?php
	$no	= mysql_fetch_array(mysql_query("SELECT * FROM output ORDER BY id DESC LIMIT 1"));
?>			

						
						
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
                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
                    <footer role="contentinfo">
    <div class="clearfix">
        <ul class="list-unstyled list-inline pull-left">
            <li><h6 style="margin: 0;">&copy; 2015-2016 BUSINESS ACTIVITY MANAGEMENT LP</h6></li>
        </ul>
        <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>
    </div>
</footer>

                </div>
            </div>
        </div>
<!-- Switcher -->
    <div class="demo-options">
        <div class="demo-options-icon"><i class="ti ti-stats-up"></i></div>
<?php
$cusers		= mysql_num_rows(mysql_query("SELECT id FROM users"));
$cwm		= mysql_num_rows(mysql_query("SELECT id FROM users WHERE pm_balance != 0 OR lr_balance != 0"));

$money	= 0.00;
$query	= "SELECT sum FROM output WHERE status = 2";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$money = $money + $row['sum'];
}

$depmoney	= 0.00;
$query	= "SELECT sum FROM deposits WHERE status = 0";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$depmoney = $depmoney + $row['sum'];
}
?>

<?php
$cusers		= mysql_num_rows(mysql_query("SELECT id FROM users")) + cfgSET('fakeusers');
$cwm		= mysql_num_rows(mysql_query("SELECT id FROM users WHERE pm_balance != 0 OR lr_balance != 0")) + cfgSET('fakeactiveusers');

$money	= cfgSET('fakewithdraws');
$query	= "SELECT sum FROM output WHERE status = 2";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$money = $money + $row['sum'];
}

$depmoney	= cfgSET('fakedeposits');
$query	= "SELECT sum FROM deposits WHERE status = 0";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$depmoney = $depmoney + $row['sum'];
}
?>

<?php
	$nu	= mysql_fetch_array(mysql_query("SELECT login FROM users ORDER BY id DESC LIMIT 1"));
?>
<?php
	$nd	= mysql_fetch_array(mysql_query("SELECT * FROM deposits ORDER BY id DESC LIMIT 1"));
?>
<?php
	$no	= mysql_fetch_array(mysql_query("SELECT * FROM output ORDER BY id DESC LIMIT 1"));
?>		
        <div class="demo-heading" >Статистика системы</div>
				<table width="100%" >
	<tr align="center" height="25" bgcolor="#eeeeee">
		<td>Открытие:</td>
		<td align="center"><font color="#e86f39"><?php print date("d.m.Y", cfgSET('datestart')); ?></font></td>
	</tr>
	<tr align="center" height="25">
		<td>Пользователей:</td>
		<td align="center"><font color="#e86f39"><?php print $cusers; ?></font></td>
	</tr>
	<tr align="center" height="25" bgcolor="#eeeeee">
		<td>Инвесторов:</td>
		<td align="center"><font color="#e86f39"><?php print $cwm; ?></font></td>
	</tr>
	<tr align="center" height="25">
		<td>Пользователей на сайте:</td>
		<td align="center"><font color="#e86f39"><?php print intval(mysql_num_rows(mysql_query("SELECT id FROM users WHERE go_time > ".intval(time() - 1200))) + cfgSET('fakeonline')); ?></font></td>
	</tr>
	<tr align="center" height="25" bgcolor="#eeeeee">
		<td>Инвестировано:</td>
		<td align="center"><font color="#e86f39">$<?php print $depmoney; ?></font></td>
	</tr>
	<tr align="center" height="25">
		<td>Выплачено:</td>
		<td align="center"><font color="#e86f39">$<?php print $money; ?></font></td>
	</tr>
	<tr align="center" height="25">
		<td>Новая инвестиция:</td>
		<td align="center"><font color="#e86f39">$ <br/>(<?php print $nd['sum']; ?>)</font></td>
	</tr>
	<tr align="center" height="25" bgcolor="#eeeeee">
		<td>Новая выплата:</td>
		<td align="center"><font color="#e86f39">$ <br/>(<?php print $no['sum']; ?>)</font></td>
	</tr>
</table>
        <div class="demo-body">
            <div class="tabular">
                
            </div>
        </div>



    </div>
    <!-- Load site level scripts -->
<script id="chatBroEmbedCode">/* Chatbro Widget Embed Code Start */function ChatbroLoader(chats,async) {async=async!==false;var params={embedChatsParameters:chats instanceof Array?chats:[chats],needLoadCode:typeof Chatbro==='undefined'};var xhr=new XMLHttpRequest();xhr.withCredentials = true;xhr.onload=function(){eval(xhr.responseText)};xhr.onerror=function(){console.error('Chatbro loading error')};xhr.open('POST','//www.chatbro.com/embed_chats/',async);xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');xhr.send('parameters='+encodeURIComponent(JSON.stringify(params)))}/* Chatbro Widget Embed Code End */ChatbroLoader({encodedChatId: '34wL'});</script>
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