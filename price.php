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
		<meta property="og:image" content="./img/ogp.png" />
		<meta property="og:description" content="Мы умеем разрабатывать интерфейсы и посадочные, пойдём на эксперимент и с той же хваткой возьмёмся за типовую задачу. Дело не в этом. Для успеха агентского опыта мало — нужны ваши знания. Участвуйте, доверяйте, и всё получится." />
		<link rel="shortcut icon" href="./favicon.ico">
		<link href="./css/style.css" rel="stylesheet" type="text/css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<title>Дизайн и разработка профессиональных сайтов | интернет-агентство ПИКСЕЛъ</title>
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


		<div class="main-section light-page">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
						<div class="second-title">
							<h2>Прайс лист</h2>
							<p>Мы умеем разрабатывать интерфейсы и посадочные, пойдём на эксперимент и с той же хваткой возьмёмся за типовую задачу. Дело не в этом. Для успеха агентского опыта мало — нужны ваши знания. Участвуйте, доверяйте, и всё получится.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="tables-price table">
								<tbody>
									<tr>
										<td>Тип сайта</td>
										<td>Лендинг</td>
										<td>Промо-сайт</td>
										<td>Сайт-визитка</td>
										<td>Корпоративный</td>
										<td>Магазин</td>
										<td>Портал</td>
									</tr>
									<tr>
										<td>Стоимость (руб.)</td>
										<td>от 10000</td>
										<td>от 20000</td>
										<td>от 20000</td>
										<td>от 40000</td>
										<td>от 80000</td>
										<td>от 100000</td>
									</tr>
									<tr>
										<td>Срок создания (дней)</td>
										<td>от 10</td>
										<td>от 14</td>
										<td>от 14</td>
										<td>от 30</td>
										<td>от 60</td>
										<td>от 90</td>
									</tr>
									<tr>
										<td>Хостинг в подарок (мес.)</td>
										<td>3</td>
										<td>3</td>
										<td>3</td>
										<td>6</td>
										<td>12</td>
										<td>12</td>
									</tr>
									<tr>
										<td>Лимит заполнения страниц (шт.)</td>
										<td>1</td>
										<td>2</td>
										<td>5</td>
										<td>30</td>
										<td>100</td>
										<td>100</td>
									</tr>
									<tr>
										<td>Домен в подарок (.ru или .рф)</td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
									</tr>
									<tr>
										<td>Индивидуальный дизайн</td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
									</tr>
									<tr>
										<td>Адаптация под смартфоны</td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
									</tr>
									<tr>
										<td>Форма обратной связи</td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
									</tr>
									<tr>
										<td>Регистрация в Yandex и Google</td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
									</tr>
									<tr>
										<td>Установка счетчика статистики</td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
									</tr>
									<tr>
										<td>Параллакс или видео фон</td>
										<td><i class="fa fa-minus-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
									</tr>
									<tr>
										<td>Галерея изображений</td>
										<td><i class="fa fa-minus-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
									</tr>
									<tr>
										<td>Каталог товаров</td>
										<td><i class="fa fa-minus-circle"></i></td>
										<td><i class="fa fa-minus-circle"></i></td>
										<td><i class="fa fa-minus-circle"></i></td>
										<td><i class="fa fa-minus-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-minus-circle"></i></td>
									</tr>
									<tr>
										<td>Корзина</td>
										<td><i class="fa fa-minus-circle"></i></td>
										<td><i class="fa fa-minus-circle"></i></td>
										<td><i class="fa fa-minus-circle"></i></td>
										<td><i class="fa fa-minus-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
										<td><i class="fa fa-minus-circle"></i></td>
									</tr>
									<tr>
										<td>Система личных кабинетов</td>
										<td><i class="fa fa-minus-circle"></i></td>
										<td><i class="fa fa-minus-circle"></i></td>
										<td><i class="fa fa-minus-circle"></i></td>
										<td><i class="fa fa-minus-circle"></i></td>
										<td><i class="fa fa-minus-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
									</tr>
									<tr>
										<td>Автоматические рассылки</td>
										<td><i class="fa fa-minus-circle"></i></td>
										<td><i class="fa fa-minus-circle"></i></td>
										<td><i class="fa fa-minus-circle"></i></td>
										<td><i class="fa fa-minus-circle"></i></td>
										<td><i class="fa fa-minus-circle"></i></td>
										<td><i class="fa fa-check-circle"></i></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>


        <?php include './blocks/questions.php'; ?>
		<?php include './blocks/contact-form.php'; ?>

		
		<div class="main-section bg-image order-second" class="order_form_2">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="second-title col-white">
							<h2 class="pulsate">У меня нет больше вопросов! Сделайте мою посадочную страницу</h2>
							<div class="block_order_form_2">
								<?php include './blocks/order-form-second.php'; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
        <script src="https://yastatic.net/jquery/2.1.4/jquery.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
		<script src="./js/idangerous.swiper.min.js"></script>
		<script src="./js/jquery.zaccordion.min.js"></script>
		
		<!-- For File Upload -->
		<script src="./js/jquery.knob.js"></script>
		<script src="./js/jquery.ui.widget.js"></script>
		<script src="./js/jquery.iframe-transport.js"></script>
		<script src="./js/jquery.fileupload.js"></script>
		
		<script src="./js/all.js"></script>
		<script src="//cdn.callbackhunter.com/cbh.js?hunter_code=f448d4494e021da85277dbb67b5cc90d"></script>
		<script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter32202054 = new Ya.Metrika({ id:32202054, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script>


</body>
</html>