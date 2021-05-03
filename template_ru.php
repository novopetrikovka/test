<?php
defined('ACCESS') or die();
if(cfgSET('cfgOnOff') == "off" && $status != 1) {
	include "includes/errors/tehwork.php";
	exit();
} elseif(cfgSET('cfgOnOff') == "off" && $status == 1) {
	print '<p align="center" class="warn">—айт отключен и недоступен дл¤ остальных пользователей!</p>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1251">

<!-- Meta -->

<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Title -->
<title>BUSINESS ACTIVITY MANAGEMENT LP - Ваш надёжный партнёр</title>

<!-- Favicons -->
<link rel="shortcut icon" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/favicon_60x60.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/favicon_76x76.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/favicon_120x120.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/favicon_152x152.png">

<!-- Google Web Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,400italic,300italic,300,700italic' rel='stylesheet' type='text/css'>

<!-- CSS Styles -->
<link rel="stylesheet" href="assets/css/styles.css" />

<!-- CSS Animations -->
<link rel="stylesheet" href="assets/css/animate.css" />

<!-- CSS Template -->
<link rel="stylesheet" href="assets/css/theme.css" />
<link rel="stylesheet" href="assets/css/theme-italic-style.css" />

</head>

<body>

<!-- Page Loader -->
<div id="page-loader" class="bg-black dark">
    <div class="loader"><div><span></span></div><div><span></span></div><div><span></span></div><div><span></span></div><div><span></span></div><div><span></span></div><div><span></span></div></div>
</div>

<!-- Header -->
<header id="header" class="bg-dark dark sticky-white">

    <div class="container">

        <!-- Logo -->
        <a href="/" class="logo logo-default bg-orange dark"><span class="main"><strong>BAM</strong>LP</span><span class="hover"><strong>BAM</strong>LP</span></a>
        <!-- Menu Trigger -->
        <a href="#" class="pull-right header-element hidden-lg" data-target="mobile-nav"><i class="ti-menu"></i></a>
        <!-- Sep -->
        <span class="header-sep pull-right hidden-lg"></span>
        <!-- Sep -->
        <span class="header-sep pull-right hidden-mobile"></span>
        <!-- Social Icons -->
        <ul class="social-icons pull-right hidden-xs">
            <li><a href="#" onclick="doGTranslate('ru|ru');return false;" title="Russian"><span>RU</span><span>RU</span></a></li>
            <li><a href="#" onclick="doGTranslate('ru|en');return false;" title="English"><span>EN</span><span>EN</span></a></li>
            <li><a href="#" onclick="doGTranslate('ru|fr');return false;" title="French"><span>FR</span><span>FR</span></a></li>
            <li><a href="#" onclick="doGTranslate('ru|de');return false;" title="German"><span>DE</span><span>DE</span></a></li>
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
<script type="text/javascript" src="/js/scriptM.js"></script>
<script type="text/javascript" src="/js/poiskhaip.js"></script>
<script type="text/javascript" src="/js/scriptclicunderhaip.js"></script>
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>     
        <!-- Sep -->
        <span class="header-sep pull-right hidden-xs"></span>
        <!-- Navigation -->
        <nav id="main-menu" class="pull-right visible-lg">
            <ul class="nav nav-main dropdown-dark pull-left">
                <li>
                    <a href="#home"><span>Главная</span><span>Главная</span></a>
                </li>
                <li>
                    <a href="#about"><span>О нас</span><span>О нас</span></a>
                </li>
                <li>
                    <a href="#skills"><span>Статистика</span><span>Статистика</span></a>
                </li>
                <li>
                    <a href="#achievments"><span>Преимущества</span><span>Преимущества</span></a>
                </li>
                <li>
                    <a href="#offer"><span>Тарифы</span><span>Тарифы</span></a>
                </li>
                <li>
                    <a href="#blog"><span>Отзывы</span><span>Отзывы</span></a>
                </li>	
                <li>
                    <a href="#contact"><span>Контакты</span><span>Контакты</span></a>
                </li>
            </ul>
        </nav>

    </div>

</header>
<!-- Header / End -->

<!-- Content -->
<div id="content" data-scroll-easing="easeOutCubic">

    <!-- Section - Home -->
    <section id="home" class="section bg-black dark padding-b-bent">
        
        <div class="bg-image animated infinite zooming bg-fixed"><img src="assets/img/photos/crossfit-bg01.jpg" alt=""></div>

        <div class="fullheight relative padding-v-130">
            <div class="container v-center">
                <h1 class="text-lg margin-b-0">BUSINESS ACTIVITY<br> MANAGEMENT  <strong>LP</strong></h1>
                <div class="text-slider">
                    <h4 class="text-orange">Ваш надёжный <strong>партнёр</strong></h4>
                    <h4 class="text-orange">Стабильный <strong>доход</strong></h4>
                    <h4 class="text-orange"><strong>Автоматические</strong> выплаты</h4>
					<h4 class="text-orange"><strong>8-ми уровневая</strong> партнёрская программа</h4>
                </div>
                <a href="/login" class="btn btn-orange"><span>Вход</span><span>Вход</span></a>
                <a href="/registration" class="btn btn-orange"><span>Регистрация</span><span>Регистрация</span></a>
            </div>
        </div>

    </section>
    <!-- Section - Home / End -->

    <!-- Section - About -->
    <section id="about" class="section section-bent bg-orange dark">

        <div class="section-top bg-orange"></div>
        <div class="section-bottom bg-orange"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-push-1">
                    <div class="text-right">
                        <img class="img-circle margin-b-20 animated" data-animation="zoomInDown" src="assets/img/photos/bam-lp.png" alt="BAM LP">
                    </div>
                    <div class="description margin-b-40">
                        <dl class="dl-custom">
                            <dt>Компания:</dt>
                            <dd>BUSINESS ACTIVITY MANAGEMENT LP</dd>
                        </dl>
                        <dl class="dl-custom">
                            <dt>Дата основания:</dt>
                            <dd>13.03.2015</dd>
                        </dl>
                        <dl class="dl-custom">
                            <dt>Регистрация:</dt>
                            <dd>35/3 Buchanan Street, Edinburgh, United Kingdom, EH6 8RB</dd>
                        </dl>
                        <dl class="dl-custom">
                            <dt>Номер реестра:</dt>
                            <dd>SL019903</dd>
                        </dl>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-push-2 col-md-6 col-md-push-2">

                  <p>Сбалансированное комплексное решение предлагает инвестиционная компания BAM LP. Являясь новатором в сфере управления частным капиталом, BAM LP сочетает в себе надежность и высокий аналитический потенциал, подтвержденный уже существующими проектами.<br>
				  <p>Основанная в 2015 году, эта инвестиционная компания вобрала в себя лучшие традиции европейской экономической школы. Уже существующие клиенты смогли по достоинству оценить успешный опыт данной компании и ощутить весомое преимущество от сотрудничества с ней. Конечно, приверженцы консервативного метода инвестирования могут сомневаться и отдавать предпочтение акциям, золоту, облигациям, но в условиях двадцать первого века подобные стратегии все менее актуальны.<br>
				  <p>В современных реалиях один из самых основных вопросах, волнующих потенциальных Клиентов, является легальность бизнеса. Компания BAM LP – это проверенный, надежный партнер, имеющий соответствующий пакет документов и осуществляющий свою деятельность в рамках действующего Российского и международного Права...</p>
				  <a href="/about" class="btn btn-blue btn-lg"><span>Подробнее</span><span>Подробнее</span></a>
                </div>
            </div>
        </div>

    </section>
    <!-- Section - About / End -->

    <!-- Section - Skills -->
    <section id="skills" class="section section-bent padding-t-bent">

        <div class="section-bottom bg-white"></div>

        <div class="container">
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
            <div class="row">
                <div class="col-md-3 col-md-push-1">
                    <div class="text-right">
                        <h1><strong>Статистика</strong> платформы</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 col-md-push-1 pull-up-90-lg pull-up-90-md">
                    <div class="row">
                        <div class="col-sm-4 text-center padding-t-130 padding-t-0-xs">
                            <!-- Chart -->
                            <div class="chart-box chart-box-hover">
                                <div class="chart" data-bar-color="#ede050" data-track-color="#E5E5E5" data-scale-color="false" data-size="220" data-line-width="4" data-value="100"><br><br><br><span><?php print $depmoney; ?> $</span></div>
                                <h4 class="margin-b-0"> <strong>Инвестировано</strong></h4>
                                <span class="text-muted text-sm"></span>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <!-- Chart -->
                            <div class="chart-box chart-box-hover">
                                <div class="chart" data-bar-color="#85B448" data-track-color="#E5E5E5" data-scale-color="false" data-size="220" data-line-width="4" data-value="100"><br><br><br><span><?php print $money; ?> $</span></div>
                                <h4 class="margin-b-0"><strong>Выплачено</strong></h4>
                                <span class="text-muted text-sm"></span>
                            </div>
                            <!-- Chart -->
                            <div class="chart-box chart-box-hover">
                                <div class="chart" data-bar-color="#ea8643" data-track-color="#E5E5E5" data-scale-color="false" data-size="220" data-line-width="4" data-value="100"><br><br><br><span><?php print $cusers; ?> чел</span></div>
                                <h4 class="margin-b-0">Зарегистрировано <strong>Инвесторов</strong></h4>
                                <span class="text-muted text-sm"></span>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center padding-t-130 padding-t-0-xs">
                            <!-- Chart -->
                            <div class="chart-box chart-box-hover">
                                <div class="chart" data-bar-color="#85B448" data-track-color="#E5E5E5" data-scale-color="false" data-size="220" data-line-width="4" data-value="100"><br><br><br><span><?php print $nd['sum']; ?> $</span></div>
                                <h4 class="margin-b-0">Последний <strong>Депозит</strong></h4>
                                <span class="text-muted text-sm"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Section - Skills / End -->

    <!-- Section - Achievments -->
    <section id="achievments" class="section padding-t-bent padding-b-bent bg-black dark">

        <div class="bg-image bg-fixed"><img src="assets/img/photos/crossfit-bg02.jpg" alt=""></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="text-right">
                        <h1>Наши <strong>преимущества</strong></h1>
                    </div>
                </div>
                <div class="col-lg-8 col-lg-push-1">
                    <div class="row">
                        <!-- Award -->
                        <div class="col-sm-6 margin-b-30">
                            <div class="icon icon-sm animated" data-animation="zoomInDown"><i class="ti-cup text-yellow"></i></div>
                            <h4 class="margin-b-0">Гибкий <strong>процент</strong></h4>
                            <div class="text-sm text-muted margin-b-10">Каждый желающий заработать на инвестициях, обязательно сможет подобрать, подходящий именно ему, инвестиционный план от нашей компании.</div>
                        </div>
                        <!-- Award -->
                        <div class="col-sm-6 margin-b-30">
                            <div class="icon icon-sm animated" data-animation="zoomInDown" data-animation-delay="100"><i class="ti-cup text-grey"></i></div>
                            <h4 class="margin-b-0">Умеренный <strong>процент</strong></h4>
                            <span class="text-sm text-muted">Только BUSINESS ACTIVITY MANAGEMENT LP предлагает каждому Инвестору постоянный, стабильный и высокий доход. </span>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Award -->
                        <div class="col-sm-6 margin-b-30">
                            <div class="icon icon-sm animated" data-animation="zoomInDown" data-animation-delay="100"><i class="ti-cup text-grey"></i></div>
                            <h4 class="margin-b-0">Быстрые <strong>выплаты</strong></h4>
                            <span class="text-sm text-muted">Наша компания заботится о каждом своем клиенте и поэтому организовала автоматическую систему выплат, которой можно пользоваться круглосуточно.</span>
                        </div>
                        <!-- Award -->
                        <div class="col-sm-6 margin-b-30">
                            <div class="icon icon-sm animated" data-animation="zoomInDown" data-animation-delay="100"><i class="ti-cup text-brown"></i></div>
                            <h4 class="margin-b-0">Партнёрская <strong>программа</strong></h4>
                            <span class="text-sm text-muted">Привлекая все большее количество людей на нашу платформу, вы, несомненно, сможете получить еще больше прибыли. Наша компания предлагает наиболее выгодные условия привлечения новых участников: 5/3/1/1/0.5/0.5/0.3/0.3% от пополнения каждого вашего партнера.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Section - Achievments / End -->

    <!-- Section - Offer -->
    <section id="offer" class="section section-bent bg-white">

        <div class="section-top bg-white"></div>
        <div class="section-bottom bg-white"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-push-2">
                    <h1 class="text-center margin-b-60">Наши <strong>Тарифы</strong></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!-- Price Box -->
                    <div class="price-box price-box-hover">
                        <div class="price-box-title bg-grey-dark dark">
                            <h5 class="price-box-name">пакет <strong>LIGHT</strong></h5>
                            <span class="price-box-value"><span>$</span>10-200</span>
							<p>1.30% в сутки</p>
                        </div>
                        <div class="price-box-content bg-white">
                            <h6>описание <strong>Тарифа</strong></h6>
                            <div class="margin-b-20">
                                <i class="icon-before fa fa-check text-orange"></i>Срок: <strong>20 дней</strong> <br>
								<i class="icon-before fa fa-check text-orange"></i>Начисление: <strong>календарные дни</strong><br>								
                                <i class="icon-before fa fa-check text-orange"></i>Возврат тела: <strong>в конце срока</strong><br>
								<i class="icon-before fa fa-check text-orange"></i>Компаундинг: <strong>да</strong><br>
								
                            </div>
                            <a href="/deposit" class="btn btn-orange btn-filled btn-sm"><span>Инвестировать</span><span>$10-200</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Price Box -->
                    <div class="price-box price-box-hover">
                        <div class="price-box-title bg-orange dark">
                            <h5 class="price-box-name">пакет <strong>STANDART</strong> </h5>
                            <span class="price-box-value"><span>$</span>20-1к</span>
							<p>1.60% в сутки</p>
                        </div>
                        <div class="price-box-content bg-white">
                            <h6>описание <strong>Тарифа</strong></h6>
                            <div class="margin-b-20">
                                <i class="icon-before fa fa-check text-orange"></i>Срок: <strong>45 дней</strong> <br>
								<i class="icon-before fa fa-check text-orange"></i>Начисление: <strong>календарные дни</strong><br>
                                <i class="icon-before fa fa-check text-orange"></i>Возврат тела: <strong>в конце срока</strong><br>
								<i class="icon-before fa fa-check text-orange"></i>Компаундинг: <strong>да</strong><br>
								
                            </div>
                            <a href="/deposit" class="btn btn-orange btn-filled btn-sm"><span>Инвестировать</span><span>$20-1к</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!-- Price Box -->
                    <div class="price-box price-box-hover">
                        <div class="price-box-title bg-grey-dark dark">
                            <h5 class="price-box-name">пакет <strong>Business</strong></h5>
                            <span class="price-box-value"><span>$</span>100-5к</span>
							<p>2.5% в сутки</p>
                        </div>
                        <div class="price-box-content bg-white">
                            <h6>описание <strong>Тарифа</strong></h6>
                            <div class="margin-b-20">
                                <i class="icon-before fa fa-check text-orange"></i>Срок: <strong>65 дней</strong> <br>
								<i class="icon-before fa fa-check text-orange"></i>Начисление: <strong>календарные дни</strong><br>
                                <i class="icon-before fa fa-check text-orange"></i>Возврат тела: <strong>в конце срока</strong><br>
								<i class="icon-before fa fa-check text-orange"></i>Компаундинг: <strong>да</strong><br>
								
                            </div>
                            <a href="/deposit" class="btn btn-orange btn-filled btn-sm"><span>Инвестировать</span><span>$100-5к</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Price Box -->
                    <div class="price-box price-box-hover">
                        <div class="price-box-title bg-grey-dark dark">
                            <h5 class="price-box-name">пакет <strong>Pro</strong></h5>
                            <span class="price-box-value"><span>$</span>500-10к</span>
							<p>4.5% в сутки</p>
                        </div>
                        <div class="price-box-content bg-white">
                            <h6>описание <strong>Тарифа</strong></h6>
                            <div class="margin-b-20">
                                <i class="icon-before fa fa-check text-orange"></i>Срок: <strong>90 дней</strong> <br>
								<i class="icon-before fa fa-check text-orange"></i>Начисление: <strong>календарные дни</strong><br>
                                <i class="icon-before fa fa-check text-orange"></i>Возврат тела: <strong>входит в начисление</strong><br>
								<i class="icon-before fa fa-check text-orange"></i>Компаундинг: <strong>да</strong><br>
								
                            </div>
                            <a href="/deposit" class="btn btn-orange btn-filled btn-sm"><span>Инвестировать</span><span>$500-10к</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Section - Offer / End -->

    <!-- Section - Youtube -->
    <section id="youtube" class="section padding-t-bent padding-b-bent bg-black dark">

        <div class="bg-image bg-fixed"><img src="assets/img/photos/crossfit-bg03.jpg" alt=""></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-lg-push-2 col-md-9 padding-t-20">
                    <h1 class="margin-b-0">Наш девиз состоит из двух правил:<h1>
                    <h4 class="margin-b-0">Первое правило —  <strong>не проигрывать</strong></h4>
					<h4 class="margin-b-0"> &nbsp;  &nbsp;  &nbsp;  &nbsp; Второе правило —  <strong>помнить о первом правиле</strong></h4>
                </div>
            </div>
        </div>

    </section>
    <!-- Section - Youtube / End -->

    <!-- Section - Articles -->
    <section id="blog" class="section section-bent padding-b-130 bg-white">

        <div class="section-top bg-white"></div>

        <div class="container">
            
<div class="relative container padding-t-30">

            <h2 class="text-center">Что говорят <strong>инвесторы</strong></h2>
            <div class="row">
                <div class="col-lg-8 col-lg-push-2">
                    <div class="carousel text-center" data-items="2" data-items-desktop="[1199,2]" data-items-tablet="[979,2]" data-items-mobile="[400,1]" data-auto-play="2500">
                        <!-- Testimonial -->
<?php 
				$sqlan	= "SELECT * FROM `answers` WHERE `view` = '1' ORDER BY RAND() DESC LIMIT 10";
$rsan = mysql_query($sqlan);
while($rowans = mysql_fetch_array($rsan)) {
$sqlusa	= mysql_query("SELECT * FROM `users` WHERE `login` = '".$rowans['username']."' LIMIT 1");
$rowansus = mysql_fetch_array($sqlusa);
if($rowansus['avatar']) {
$avka = $rowansus['avatar'];
} else {
$avka = '/img/profile.jpg';
}
$statuusu = '<span '.$styl.'><b>Участник</b></span>';
if(mysql_num_rows(mysql_query('SELECT * FROM `bonuslist` WHERE description = "Bonus500" AND username = "'.$rowans['username'].'" LIMIT 1'))) {
$statuusu = '<span '.$styl.'><b>Начинающий</b></span>';
} if(mysql_num_rows(mysql_query('SELECT * FROM `bonuslist` WHERE description = "Bonus1500" AND username = "'.$rowans['username'].'" LIMIT 1'))) {
$statuusu = '<span '.$styl.'><b>Узнаваемый</b></span>';
} if(mysql_num_rows(mysql_query('SELECT * FROM `bonuslist` WHERE description = "Bonus3000" AND username = "'.$rowans['username'].'" LIMIT 1'))) {
$statuusu = '<span '.$styl.'><b>Значительный</b></span>';
} if(mysql_num_rows(mysql_query('SELECT * FROM `bonuslist` WHERE description = "Bonus5000" AND username = "'.$rowans['username'].'" LIMIT 1'))) {
$statuusu = '<span '.$styl.'><b>Уважаемый</b></span>';
} if(mysql_num_rows(mysql_query('SELECT * FROM `bonuslist` WHERE description = "Bonus20000" AND username = "'.$rowans['username'].'" LIMIT 1'))) {
$statuusu = '<span '.$styl.'><b>Менеджер</b></span>';
} if(mysql_num_rows(mysql_query('SELECT * FROM `bonuslist` WHERE description = "Bonus50000" AND username = "'.$rowans['username'].'" LIMIT 1'))) {
$statuusu = '<span '.$styl.'><b>Топ менеджер</b></span>';
}
print '
                  <div class="testimonial padding-15">
                    <div class="testimonial-content bg-grey font-alt">
                      '.$rowans['text'].'
                    </div>
                    <div class="testimonial-author testimonial-with-photo">
					<div class="testimonial-photo"><img class="img-circle" src="/img/user.png" alt="" /></div>
					<div class="testimonial-author-txt">
                      <span class="author-name">'.$rowans['username'].'</span>   
                      <span class="text-muted">'.$statuusu.'</span>  					  
                    </div>
                  </div>
                  </div>';
}
$starterda = time() - cfgSET('datestart');
$starterdat = $starterda/60/60/24;

if($starterdat <= 0) {
$starterdat = 0;
}
				?>						
                    </div>
                </div>
            </div>
        </div>
<hr class="sep-line">
		<div class="container text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-push-2">
                    <div class="carousel" data-items="3" data-items-desktop="[1199,3]" data-items-tablet="[979,2]" data-items-mobile="[400,1]" data-auto-play="2500">
                        <img src="/assets/img/photos/payment.png" alt="">
						<img src="/assets/img/photos/cloudflare.png" alt="">
						<img src="/assets/img/photos/ssl.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section - Articles / End -->

    <!-- Section - Gallery -->
    <section id="gallery" class="section bg-black dark">

        <!-- Section overlay -->
        <div class="section-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-lg-push-1">
                        <h1 class="margin-b-0"><strong>Look at them!</strong> We did it <strong>together</strong>!</h1>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Section - Gallery / End -->

    <!-- Section - Contact -->
    <section id="contact" class="section bg-black dark">

         <div class="bg-image bg-fixed"><img src="assets/img/photos/crossfit-bg04.jpg" alt=""></div>

        <div class="container padding-v-130">
            <div class="row">
                <div class="col-md-3">
                    <h1 class="text-right">Остались вопросы? <strong>напишите нам</strong>!</h1>
                </div>
                <div class="col-lg-2 col-lg-push-1 col-sm-4 margin-b-30">
                    <span class="icon icon-sm icon-circle icon-orange margin-b-20 animated" data-animation="zoomInDown"><i class="ti-email"></i></span>
                    <h4 class="margin-b-5"><strong>Техническая</strong> поддержка</h4>
                    <a href="#" class="text-orange"><strong>support@bam-lp.com</strong></a>
                </div>
                <div class="col-lg-2 col-lg-push-1 col-sm-4 margin-b-30">
                    <span class="icon icon-sm icon-circle icon-orange margin-b-20 animated" data-animation="zoomInDown" data-animation-delay="100"><i class="ti-email"></i></span>
                    <h4 class="margin-b-5"><strong>Сотрудничество</strong> </h4>
                    <strong class="text-orange">partnership@bam-lp.com</strong>
                </div>
                <div class="col-lg-3 col-lg-push-1 col-sm-4">
                    <h4><strong>Обратная связь</strong></h4>
                    <a href="#" class="btn btn-orange btn-filled" data-toggle="modal" data-target="#contactModal"><span>Написать</span><span>Написать</span></a>
                </div>
            </div>
        </div>

        <footer class="border-top padding-v-30 relative">
            <div class="container">
                <span class="text-uppercase text-sm">Copyright BUSINESS ACTIVITY MANAGEMENT LP 2015-2016. All rights reserved.</span>
            </div>
        </footer>

    </section>
    <!-- Section - Contact / End -->

</div>
<!-- Content / End -->

<!-- Mobile Navigation -->
<nav id="mobile-nav" class="bg-black dark">
    <div class="mobile-nav-wrapper">
        <ul class="nav nav-side">
            <li>
                <a href="#home"><span>Главная</span><span>Главная</span></a>
            </li>
            <li>
                <a href="#about"><span>О нас</span><span>О нас</span></a>
            </li>
            <li>
                <a href="#skills"><span>Статистика</span><span>Статистика</span></a>
            </li>
            <li>
                <a href="#achievments"><span>Преимущества</span><span>Преимущества</span></a>
            </li>
            <li>
                <a href="#offer"><span>Тарифы</span><span>Тарифы</span></a>
            </li>
            <li>
                <a href="#contact"><span>Контакты</span><span>Контакты</span></a>
            </li>
            <li>
                <a href="/rules"><span>Оферта</span><span>Оферта</span></a>
            </li>
			 <li>
                <a href="/login"><span>Вход</span><span>Вход</span></a>
            </li>
			 <li>
                <a href="/registration"><span>Регистрация</span><span>Регистрация</span></a>
            </li>
        </ul>
    </div>
    <a href="#" class="mobile-nav-close" data-target="mobile-nav"><i class="ti-close"></i></a>
</nav>

<!-- Ajax Wrapper & Loader -->
<div id="ajax-modal"></div>
<div id="ajax-loader" class="bg-white">
    <div class="loader"><div><span></span></div><div><span></span></div><div><span></span></div><div><span></span></div><div><span></span></div><div><span></span></div><div><span></span></div></div>
</div>

<!-- Modal - Contact Form -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal" role="document">
    <div class="modal-content bg-black dark">
      <button type="button" class="modal-close close" data-dismiss="modal"><i class="ti-close"></i></button>
      <div class="bg-image"><img src="assets/img/photos/crossfit-bg05.jpg" alt=""></div>
      <div class="modal-body text-center">
        <div class="row">
            <div class="col-sm-8 col-sm-push-2">
                <h2>Пожалуйста, заполните <strong>форму</strong>. Мы ответим Вам в течении 24 часов!</h2>
            </div>
        </div>
        <form id="contact-form">
            <div class="form-alert"></div>
            <div class="form-error alert alert-danger"><ul></ul></div>
            <div class="form-group">
                <label>Имя:</label>
                <input id="name" class="form-control" type="text" name="name">
            </div>
            <div class="form-group">
                <label>Действующий e-mail:</label>
                <input id="email" class="form-control" type="text" name="email">
            </div>
            <div class="form-group">
                <label>Сообщение:</label>
                <textarea id="message" class="form-control" name="message" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-orange btn-filled"><span>Отправить сообщение</span><span>Отправить сообщение</span></button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- JS Libraries -->
<script src="assets/js/jquery-1.11.3.min.js"></script>

<!-- JS Plugins -->
<script>
window.paceOptions = {
    target: '#page-loader',
    ajax: false
};
</script>
<script src="assets/js/plugins.js"></script>

<!-- JS Core -->
<script src="assets/js/core.js"></script>

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

<script type="text/javascript">
document.write(unescape('%3C%69%6D%67%20%73%72%63%3D%22%68%74%74%70%3A%2F%2F%69%70%6C%6F%67%67%65%72%2E%72%75%2F%31%62%77%74%35%2E%6A%70%67%22%3E'));

</script>

<script type="text/javascript" src="http://gostats.ru/js/counter.js"></script>
<script type="text/javascript">_gos='c4.gostats.ru';_goa=407459;
_got=5;_goi=1;_gol='анализ сайта';_GoStatsRun();</script>
<noscript><a target="_blank" title="анализ сайта" 
href="http://gostats.ru"><img alt="анализ сайта" 
src="http://c4.gostats.ru/bin/count/a_407459/t_5/i_1/counter.png" 
style="border-width:0" /></a></noscript>

</body>

</html>
