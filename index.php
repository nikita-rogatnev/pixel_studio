<?
// не удалять. нужно для загрузчика файлов
session_start();
$_SESSION['guid'] = substr(preg_replace('/[^A-Za-z]/',null,crypt(time()).crypt(time())),1,10);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
		<meta name="format-detection" content="telephone=no" />
		<meta property="og:title" content="Интернет-агентство ПИКСЕЛъ" />
        <meta property="og:url" content="http://webarts.pro/" />
		<meta property="og:image" content="img/ogp.png" />
		
		<title>Дизайн и разработка профессиональных сайтов | интернет-агентство ПИКСЕЛъ</title>
		<meta name="description" content="Мы умеем разрабатывать интерфейсы и посадочные, пойдём на эксперимент и с той же хваткой возьмёмся за типовую задачу. Дело не в этом. Для успеха агентского опыта мало — нужны ваши знания. Участвуйте, доверяйте, и всё получится.">
		<meta name="keywords" content="">
		
		
		<meta property="og:description" content="Мы умеем разрабатывать интерфейсы и посадочные, пойдём на эксперимент и с той же хваткой возьмёмся за типовую задачу. Дело не в этом. Для успеха агентского опыта мало — нужны ваши знания. Участвуйте, доверяйте, и всё получится." />
		<link rel="shortcut icon" href="img/favicon.ico">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<header>
			<div class="container">
				<div class="logo">
					<a href="./">
					<img src="./img/logo.png" alt="logo" width="152" height="40">
					</a>
				</div>
				<div class="nav-menu-icon"><a href="#"><i></i></a></div>
				<nav>
					<ul>
						<li><a href="./landing.php">Лендинги</a></li>
						<li><a href="./promo.php">Промо-сайты</a></li>
						<li><a href="./vizitka.php">Сайты-визитки</a></li>
						<li><a href="./corporate.php">Корпоративные</a></li>
						<li><a href="./shop.php">Интернет-магазины</a></li>
						<li><a href="./portal.php">Порталы</a></li>
					</ul>
				</nav>
			</div>
		</header>

     <div class="main-baner full-width full-height">
			<div class="full-height anime bg-index">
				    <div class="dark-layer"></div>
                        <div class="vertical-center padd-80 full-width">
								<div class="container">
									<div class="row">
										<div class="col-lg-12 col-md-12 col-xs-12">
												<div class="second-title col-white home-header">
													<h1>Создаем сайты и веб-сервисы</h1>
													<h2>Мы являемся интернет-агентством полного цикла со своим штатом специалистов. Профессионально решаем задачи любого уровня сложности. Логотипы и веб-дизайн, корпоративные сайты и интернет-магазины, лэндинги и мобильные приложения, seo продвижение и контекстная реклама.</h2>
													<a href="#order-block" class="btn_transparent">Бесплатная оценка</a>
											</div>
										</div>
									</div>
							</div>
				 </div>
				 <a href="#services"><div class="mouse_icon"></div></a>
			 </div>
     </div>
     
     
     

                        
                        
		
		<div class="main-section service bg-grey" id="services">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
						<div class="second-title">
							<h2>Мы разрабатываем</h2>
							<p>Мы умеем разрабатывать интерфейсы и посадочные, пойдём на эксперимент и с той же хваткой возьмёмся за типовую задачу. Дело не в этом. Для успеха агентского опыта мало — нужны ваши знания. Участвуйте, доверяйте, и всё получится.</p>
						</div>
					</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="serv-block border-grey">
							<a href="./landing.php">
								<img src="img/services/1.png" alt="services" width="130" height="130">
								<h6>Посадочные страницы</h6>
								<p class="font-13">Посадочная страница - это возможность показать посетителю уникальное товарное предложение и легко осуществить заказ с помощью всего одной страницы.</p>
							</a>
							<a href="./landing/" class="button-1">подробнее</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="serv-block border-grey">
							<a href="./vizitka.php">
								<img src="img/services/3.png" alt="services" width="130" height="130">
								<h6>Сайты-визитки</h6>
								<p class="font-13">Визитка - самый недорогой вид одностраничного сайта. Подходит, если Вам нужно заявить о своей компании, описать всего один товар или услугу и запустить контекстную рекламу.</p>
							</a>
							<a href="./vizitka/" class="button-1">подробнее</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="serv-block border-grey">
							<a href="./promo.php">
								<img src="img/services/2.png" alt="services" width="130" height="130">
								<h6>Промо-сайты</h6>
								<p class="font-13">Промо-сайт - яркая, сочная и бьющая прямо в голову страничка. Самое то для тех, чей бизнес построен на эмоциях и впечатлениях. Это отличный инструмент для формирования имиджа компании.</p>
							</a>
							<a href="./promo/" class="button-1">подробнее</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="serv-block border-grey">
							<a href="./corporate.php">
								<img src="img/services/4.png" alt="services" width="130" height="130">
								<h6>Корпоративные сайты</h6>
								<p class="font-13">Корпоративный сайт это ваш виртуальный офис, в котором работают лучшие сотрудники. Они расскажут обо всех достижениях и преимуществах компании, примут заказ и ответят на вопросы.</p>
							</a>
							<a href="./corporate/" class="button-1">подробнее</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="serv-block border-grey">
							<a href="./shop.php">
								<img src="img/services/5.png" alt="services" width="130" height="130">
								<h6>Интернет-магазины</h6>
								<p class="font-13">Интернет-магазин — не просто сайт, это значимая часть вашего бизнеса. Он разрабатывается, работает и развивается по своим специфичным законам, отличным от традиционных.</p>
							</a>
							<a href="./shop/" class="button-1">подробнее</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="serv-block border-grey">
							<a href="./landing.php">
								<img src="img/services/6.png" alt="services" width="130" height="130">
								<h6>Порталы</h6>
								<p class="font-13">Индивидуальные проекты по сложным техническим решениям. Наш опыт и профессионализм позволяет решить ваши индивидуальные задачи любой сложности.</p>
							</a>
							<a href="./portal/" class="button-1">подробнее</a>
						</div>
					</div>
				</div>
				</div>	
			</div>
		</div>
		<div class="main-section bg-image order" class="order-form">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="second-title col-white">
							<h2 class="pulsate">Я и так знаю что мне нужно! Хочу</h2>
							<div class="block_order-form">
								<?php include './blocks/order-form.php'; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include './blocks/more-services.php'; ?>
		<?php include './blocks/partners.php'; ?>
		<?php include './blocks/works.php'; ?>
		<?php include './blocks/reviews.php'; ?>
		<?php include './blocks/about-us.php'; ?>
		<?php include './blocks/questions.php'; ?>
		<?php include './blocks/contact-form.php'; ?>
		<div class="main-section bg-image order-second" class="order_form_2">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="second-title col-white">
							<h2 class="pulsate">У меня нет больше вопросов! Хочу</h2>
							<div class="block_order_form_2">
								<?php include './blocks/order-form-second.php'; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
        <script src="https://yastatic.net/jquery/2.1.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<script src="js/idangerous.swiper.min.js"></script>
		<script src="js/jquery.zaccordion.min.js"></script>
		
		<!-- For File Upload -->
		<script src="js/jquery.knob.js"></script>
		<script src="js/jquery.ui.widget.js"></script>
		<script src="js/jquery.iframe-transport.js"></script>
		<script src="js/jquery.fileupload.js"></script>
		
		<script src="js/all.js"></script>
		<script src="//cdn.callbackhunter.com/cbh.js?hunter_code=f448d4494e021da85277dbb67b5cc90d"></script>
		<script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter32202054 = new Ya.Metrika({ id:32202054, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script>


</body>
</html>