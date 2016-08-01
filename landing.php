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
		
		<title>Дизайн и разработка профессиональных сайтов | интернет-агентство ПИКСЕЛъ</title>
		<meta name="description" content="Мы умеем разрабатывать интерфейсы и посадочные, пойдём на эксперимент и с той же хваткой возьмёмся за типовую задачу. Дело не в этом. Для успеха агентского опыта мало — нужны ваши знания. Участвуйте, доверяйте, и всё получится.">
		<meta name="keywords" content="">
		
		
		<meta property="og:description" content="Мы умеем разрабатывать интерфейсы и посадочные, пойдём на эксперимент и с той же хваткой возьмёмся за типовую задачу. Дело не в этом. Для успеха агентского опыта мало — нужны ваши знания. Участвуйте, доверяйте, и всё получится." />
		<link rel="shortcut icon" href="./img/favicon.ico">
		<link href="./css/style.css" rel="stylesheet" type="text/css">
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
						<li class="active"><a href="./landing.php">Лендинги</a></li>
						<li><a href="./promo.php">Промо-сайты</a></li>
						<li><a href="./vizitka.php">Сайты-визитки</a></li>
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
								<div class="bg bg-bg-chrome act" style="background-image:url(./img/bg/landing_bg.jpg)">
								</div>
							</div>
							<div class="dark-layer"></div>
							<div class="full-width vertical-center padd-80">
								<div class="container">
									<div class="row">
										<div class="col-lg-12 col-md-12 col-xs-12">
											<div class="data-block-vps">
												<div class="second-title col-white">
													<h1>РАЗРАБОТКА ПОСАДОЧНЫХ СТРАНИЦ</h1>
													<h2>маленьких сайтов для больших продаж</h2>
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
							<h2>Посадочные страницы</h2>
							<p>Продающая страница (landing page) — действенный современный инструмент для повышения продаж в бизнесе. Попав на лендинг с рекламного объявления, пользователь увидит именно то, что искал. Ниже приводится ориентировочная схема продающей страницы:</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
						<img src="./img/demo/landing.svg" alt="landing" style="width:100%; margin:0 auto;" />
					</div>
				</div>
			</div>
		</div>
		<div class="main-section bg-grey service-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
						<div class="second-title">
							<h2>Зачем мне посадочная страница?</h2>
							<p>Хотите увеличить продажи и упрочнить позиции на рынке? Яркая привлекательная целевая страница это то что вам нужно! Создадим для вас одностраничный продающий сайт, благодаря которому вы получите:</p>
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
							<p>Мы разработаем для вас стильные продуманные целевые страницы, которые очаруют ваших посетителей и заинтересуют в покупке ваших товаров и услуг! Выверенная целевая страница легко и непринужденно расскажет посетителю все о ваших товарах и услугах, завоюет доверие и подтолкнет к совершению покупки.</p>
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
										<td>от 10</td>
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
										<td>1</td>
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
							<h2 class="pulsate">Круто, мне срочно нужен лендинг! Хочу</h2>
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
							<p>Надеемся этот раздел поможет вам ответить на многие вопросы, касаемо посадочных страниц.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="accordeon-wrapper">
							<div class="accordeon-entry">
								<h5>1. У меня уже есть сайт. Зачем мне посадочная страница?</h5>
								<p>
									Вполне резонный вопрос для тех, кто только знакомится с этой технологией. Обычный сайт создан для того чтобы человек набрал больше информации о вашей компании, узнал ее новости, посмотрел каталог товаров. Продающие сайты несут иную функцию. Благодаря своей структуре они нацелены на выполнение пользователем какого-либо действия. Например, покупку, подписку, сбор контактных данных. Небольшое показательное сравнение. Вероятность того что пользователь купит товар на сайте-каталоге равна 1-3%. Вероятность покупки на специальном продающем сайте 5-13%. Иногда бывают приятные исключения, когда конверсия сайта возрастает до 58%.
								</p>
							</div>
							<div class="accordeon-entry">
								<h5>2. Что такое конверсия?</h5>
								<p>
Конверсия в интернет-маркетинге — это отношение числа посетителей сайта, выполнивших на нём какие-либо целевые действия (скрытые или прямые указания рекламодателей, продавцов, создателей контента — покупку, регистрацию, подписку, посещение определённой страницы сайта, переход по рекламной ссылке), к общему числу посетителей сайта, выраженное в процентах. Например: у вас имеется интернет-магазин по продаже какой-либо продукции. Допустим, что в сутки на него заходит 500 уникальных посетителей. В течение этих суток в вашем магазине совершается 7 разных покупок. В данном случае процент конверсии посетителей и покупателей равен 1,4 (7 покупок/500 посетителей*100%=1,4 %).								</p>
							</div>
							<div class="accordeon-entry">
								<h5>3. Что дает разработка лендинга?</h5>
								<p>
									• Возможность собрать контактные данные пользователей для дальнейшего взаимодействия;<br>
									• Возможность оптимизировать рекламную кампанию и увеличить узнаваемость бренда;<br>
									• Посадочные страницы воспринимаются лучше, благодаря минимуму текста и максимуму графического наполнения;<br>
									• В сравнении с сайтами прошлого поколения, качественная landing page дает увеличение продаж на 15-30%;<br>
									• С помощью А/В тестирования можно шлифовать и совершенствовать страницу, увеличивая показатели эффективности на 5-17%.
								</p>
							</div>
							<div class="accordeon-entry">
								<h5>4. Сколько стоит посадочная страница?</h5>
								<p>
									Обычно стоимость зависит от сочетания многих факторов и может быть рассчитана индивидуально по вашему запросу после заполнения <a href="#order">формы брифа чуть выше</a>. Обычно цена начинается от 10 000 руб. Если Вы найдете где-то дешевле – это будет шаблонный лендинг, эффективность которого будет значительно меньше, так как при заходе на него у посетителя возникнет ощущение «Кажется я где-то этот дизайн уже видел…», которое никак не способствует повышению конверсии.
								</p>
							</div>
							<div class="accordeon-entry">
								<h5>5. Что такое УТП?</h5>
								<p>
									Акроним УТП расшифровывается как «Уникальное торговое предложение». УТП должно отвечать таким условиям:<br>
									• Формулировка должна быть конкретной: «Купите товар, получите выгоду»;<br>
									• Один из ключевых критериев — уникальность. Вы должны предложить клиенту то, что конкурент не может или не хочет делать;<br>
									• Важно предложить что-то действительно привлекательное и сильное.
								</p>
							</div>
							<div class="accordeon-entry">
								<h5>6. Что такое CTA?</h5>
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