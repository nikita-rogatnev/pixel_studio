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
		<meta name="format-detection" content="telephone=yes" />
		<meta property="og:title" content="Интернет-агентство ПИКСЕЛъ" />
        <meta property="og:url" content="http://webarts.pro/" />
		<meta property="og:image" content="./img/ogp.png" />
		<meta property="og:description" content="Мы умеем разрабатывать интерфейсы и посадочные, пойдём на эксперимент и с той же хваткой возьмёмся за типовую задачу. Дело не в этом. Для успеха агентского опыта мало — нужны ваши знания. Участвуйте, доверяйте, и всё получится." />
		<link rel="shortcut icon" href="./favicon.ico" />
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
						<li class="active"><a href="./vizitka.php">Сайты-визитки</a></li>
						<li><a href="./corporate.php">Корпоративные</a></li>
						<li><a href="./shop.php">Интернет-магазины</a></li>
						<li><a href="./portal.php">Порталы</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<div class="full-width full-height">
			<div class="swiper-container swiper-swiper-unique-id-0" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="1" id="swiper-unique-id-0">
				<div class="swiper-wrapper">
					<div class="swiper-slide swiper-slide-visible">
						<div class="full-height">
							<div class="clip">
								<div class="bg bg-bg-chrome act" style="background-image:url(./img/bg/vizitka_bg.jpg)">
								</div>
							</div>
							<div class="dark-layer"></div>
							<div class="full-width vertical-center padd-80">
								<div class="container">
									<div class="row">
										<div class="col-lg-12 col-md-12 col-xs-12">
											<div class="data-block-vps">
												<div class="second-title col-white">
													<h1>РАЗРАБОТКА сайтов-визиток</h1>
													<h2>маленьких сайтов для больших людей</h2>
													<a href="#more" class="btn_transparent">Подробнее</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <a href="#more"><div class="mouse_icon"></div></a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="main-section bg-white about-service" id="more">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
						<div class="second-title">
							<h2>Сайты-визитки</h2>
							<p>Сайт визитка – это небольшой информационный сайт о компании, на котором Вы можете рассказать клиентам о ваших ценах, услугах, товарах, акциях и многом другом. При желании на сайте можно разместить каталог продукции, схему проезда, отзывы клиентов, новости компании, карту сайта, форму быстрой связи или форму предварительного заказа.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
						<img src="./img/demo/vizitka.svg" alt="vizitka" style="width:100%; margin:0 auto;" />
					</div>
				</div>
			</div>
		</div>
		<div class="main-section bg-grey service-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
						<div class="second-title">
							<h2>Зачем мне cайт-визитка?</h2>
							<p>Веб сайт визитка - это оптимальная рекламная площадка для представителей малого и среднего бизнеса. Имея в наличии свой сайт, Вы можете проводить рекламные кампании в Интернете.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="serv-block border-red">
							<img src="http://webarts.pro/img/services/8.png" alt="services" width="130" height="130">
							<h6>Яркий имидж</h6>
							<p class="font-13">&laquo;ВАУ - эффект&raquo; гарантирован. Товар или услуга будет выделяться среди конкурентов</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="serv-block border-red">
							<img src="http://webarts.pro/img/services/2.png" alt="services" width="130" height="130">
							<h6>Интерес к продукту</h6>
							<p class="font-13">Возможность представления товаров лимитированными и уникальными</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="serv-block border-red">
							<img src="http://webarts.pro/img/services/7.png" alt="services" width="130" height="130">
							<h6>Повышение лояльности</h6>
							<p class="font-13">Размещение информации о том, что компания обладает целым набором преимуществ</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="serv-block border-red">
							<img src="http://webarts.pro/img/services/9.png" alt="services" width="130" height="130">
							<h6>Клиентскую базу</h6>
							<p class="font-13">Благодаря формированию клиентской базы из контактной формы можно увеличить продажи</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-section canvas-graph">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
						<div class="second-title">
							<h2>Что входит в базовую стоимость?</h2>
							<p>У сайта-визитки есть свое уникальное и основное достоинство – он представляет посетителю (потенциальному покупателю) полную информацию о товарах или услугах. Он отличается от веб-ресурсов большого размера тем, что не содержит ничего лишнего, что способно отвлекать посетителя от процесса ознакомления с рекламными материалами. Здесь все предельно кратко и максимально информативно. Кроме того, сделать сайт-визитку будет намного дешевле, чем разрабатывать многостраничный web-ресурс, не заботясь о конверсии клиентов и посетителей.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="tables table">
								<tbody>
									<tr>
										<td>Наименование</td>
										<td>Значение</td>
									</tr>
									<tr>
										<td>Срок создания (дней)</td>
										<td>от 14</td>
									</tr>
									<tr>
										<td>Хостинг в подарок (мес.)</td>
										<td>3</td>
									</tr>
									<tr>
										<td>Домен в подарок (.ru или .рф)</td>
										<td>1</td>
									</tr>
									<tr>
										<td>Лимит заполнения страниц (шт.)</td>
										<td>6</td>
									</tr>
									<tr>
										<td>Разработка индивидуального дизайна</td>
										<td><i class="fa fa-check-circle"></i></td>
									</tr>
									<tr>
										<td>Адаптация сайта под мобильные устройства</td>
										<td><i class="fa fa-check-circle"></i></td>
									</tr>
									<tr>
										<td>Форма обратной связи</td>
										<td><i class="fa fa-check-circle"></i></td>
									</tr>
									<tr>
										<td>Регистрация в Yandex.ru и Google.com</td>
										<td><i class="fa fa-check-circle"></i></td>
									</tr>
									<tr>
										<td>Установка счетчика статистики</td>
										<td><i class="fa fa-check-circle"></i></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="raket">
							<a href="#order" class="button-2 bg-red">Заполнить бриф и узнать точную стоимость</a>
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
							<h2 class="pulsate">Круто, мне срочно нужен сайт-визитка! Хочу</h2>
							<div class="block_order-form">
								<?php include './blocks/order-form.php'; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="main-section bg-grey">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
						<div class="second-title">
							<h2>Часто задаваемые вопросы</h2>
							<p>Надеемся этот раздел поможет вам ответить на многие вопросы, касаемо сайтов-визиток.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="accordeon-wrapper">
							<div class="accordeon-entry">
								<h5>1. У меня уже есть сайт. Зачем мне сайт-визитка?</h5>
								<p>
Создание сайта-визитки предлагается компаниям и проектам практически не ориентированным на Интернет-аудиторию или ориентированным на небольшую четко определенную целевую группу. Если работа вашей компании, ваша продукция или услуги предназначены узкому кругу специалистов, если ваша компания работает в очень узкой тематике или ориентирована на конкретных потребителей в небольшом регионе, сайт-визитка вполне может стать решением для вас.
Другой причиной создания сайта-визитки часто становится ограниченный бюджет компании на создание сайта. Однако, следует понимать, что конкурентоспособность, эффективность и отдача от работы сайта-визитки обычно минимальны. Для компаний с широкой целевой группой мы рекомендуем создание сайта-визитки только как промежуточное решение.
								</p>
							</div>
							<div class="accordeon-entry">
								<h5>2. Что такое конверсия?</h5>
								<p>
Конверсия в интернет-маркетинге — это отношение числа посетителей сайта, выполнивших на нём какие-либо целевые действия (скрытые или прямые указания рекламодателей, продавцов, создателей контента — покупку, регистрацию, подписку, посещение определённой страницы сайта, переход по рекламной ссылке), к общему числу посетителей сайта, выраженное в процентах. Например: у вас имеется интернет-магазин по продаже какой-либо продукции. Допустим, что в сутки на него заходит 500 уникальных посетителей. В течение этих суток в вашем магазине совершается 7 разных покупок. В данном случае процент конверсии посетителей и покупателей равен 1,4 (7 покупок/500 посетителей*100%=1,4 %).
								</p>
							</div>
							<div class="accordeon-entry">
								<h5>3. Сколько стоит сайт-визитка?</h5>
								<p>
Цена создания сайта-визитки: 20-70 тысяч рублей.
Следует отметить, что, создавая сайт-визитку трудно рассчитывать на его высокую поисковую и, как следствие, коммерческую эффективность. Теоретически очень сложно добиться высокой поисковой эффективности сайта состоящего из одной-двух страниц. Особенно если речь идет о создании сайта-визитки компании в высококонкурентной тематике. Тем не менее, поисковое продвижение сайта-визитки может принести существенные результаты. Правда ежемесячная стоимость поискового продвижения в отдельных тематиках может в разы превышать стоимость создания сайта-визитки, что при ограниченной функциональности сайта-визитки будет неэффективным вложением.
								</p>
							</div>
							<div class="accordeon-entry">
								<h5>4. Что такое УТП?</h5>
								<p>
									Акроним УТП расшифровывается как «Уникальное торговое предложение». УТП должно отвечать таким условиям:<br>
									• Формулировка должна быть конкретной: «Купите товар, получите выгоду»;<br>
									• Один из ключевых критериев — уникальность. Вы должны предложить клиенту то, что конкурент не может или не хочет делать;<br>
									• Важно предложить что-то действительно привлекательное и сильное.
								</p>
							</div>
							<div class="accordeon-entry">
								<h5>5. Что такое CTA?</h5>
								<p>
									CTA (от англ. call to action, т.е. «призыв к действию») — элемент посадочной страницы, ради которого посетитель попадает на сайт. Это кнопки или открытые формы, которые переадресовывают на подписку, загрузку, звонок, покупку, регистрацию и так далее. Как правило, такие элементы выделяются на фоне других элементов страницы.
								</p>
							</div>
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
							<h2 class="pulsate">У меня нет больше вопросов! Сделайте мой сайт-визитку</h2>
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