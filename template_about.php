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
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1251">

<!-- Meta -->

<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Title -->
<title>BUSINESS ACTIVITY MANAGEMENT LP - О компании</title>

<!-- Favicons -->
<link rel="shortcut icon" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/favicon_60x60.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/favicon_76x76.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/favicon_120x120.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/favicon_152x152.png">

<!-- Google Web Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,400italic,300italic,300,700italic' rel='stylesheet' type='text/css'>

<!-- CSS Styles -->
<link rel="stylesheet" href="/assets/css/styles.css" />

<!-- CSS Animations -->
<link rel="stylesheet" href="/assets/css/animate.css" />

<!-- CSS Template -->
<link rel="stylesheet" href="/assets/css/theme.css" />
<link rel="stylesheet" href="/assets/css/theme-italic-style.css" />

</head>

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

<!-- Mobile Navigation -->
<nav id="mobile-nav" class="bg-white">
    <div class="mobile-nav-wrapper">
        <ul class="nav nav-side">
            <li>
                <a href="#home"><span>Главная</span><span>Главная</span></a>
            </li>
            <li>
                <a href="#about"><span>О нас</span><span>О нас</span></a>
            </li>
            <li>
                <a href="#directions"><span>Направления</span><span>Направления</span></a>
            </li>
            <li>
                <a href="#reviews"><span>Отзывы</span><span>Отзывы</span></a>
            </li>
            <li>
                <a href="#contact"><span>Contact</span><span>Contact</span></a>
            </li>
            <li>
                <a href="/registration"><span>Регистрация</span><span>Регистрация</span></a>
            </li>
			<li>
                <a href="/login"><span>Вход</span><span>Вход</span></a>
            </li>
        </ul>
    </div>
    <a href="#" class="mobile-nav-close" data-target="mobile-nav"><i class="ti-close"></i></a>
</nav>

<!-- JS Libraries -->
<script src="/assets/js/jquery-1.11.3.min.js"></script>

<!-- JS Plugins -->
<script>
window.paceOptions = {
    target: '#page-loader',
    ajax: false
};
</script>
<script src="/assets/js/plugins.js"></script>

<!-- JS Core -->
<script src="/assets/js/core.js"></script>

<!-- Google Map API -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
<!--
<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXX-X']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
-->
<script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>
</body>

</html>