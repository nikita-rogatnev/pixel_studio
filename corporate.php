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
						<li class="active"><a href="./corporate.php">Корпоративные</a></li>
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
								<div class="bg bg-bg-chrome act" style="background-image:url(./img/bg/corporate_bg.jpg)">
								</div>
							</div>
							<div class="dark-layer"></div>
							<div class="full-width vertical-center padd-80">
								<div class="container">
									<div class="row">
										<div class="col-lg-12 col-md-12 col-xs-12">
											<div class="data-block-vps">
												<div class="second-title col-white">
													<h1>РАЗРАБОТКА Корпоративных сайтов</h1>
													<h2>информативных сайтов для больших команд</h2>
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
							<h2>Корпоративные сайты</h2>
							<p>Официальный сайт вашей компании, отличающийся безупречным дизайном и точным исполнением всех ваших пожеланий к функциональности.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
						<img src="./img/demo/corporate.svg" alt="corporate" style="width:100%; margin:0 auto;" />
					</div>
				</div>
			</div>
		</div>
		<div class="main-section bg-grey service-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
						<div class="second-title">
							<h2>Зачем нам корпоративный сайт?</h2>
							<p>Нам известны десятки случаев, когда менеджер на стороне заказчика шел на повышение сразу после запуска нового сайта. Если вы сейчас в поиске разработчика — значит, вскоре вам предстоит увлекательный, захватывающий процесс. И успех в этом деле крайне важен. Для вашей компании это дополнительные продажи и узнаваемость на рынке. А чего ждете от разработки сайта лично вы?</p>
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
							<p>Важным элементом корпоративного сайта есть оформление сайта и материалы: фотографии услуг, примеры выполненных работ. Не прибегайте к использованию рекламных штампов, это раздражает. Преподносить информацию об услугах необходимо точно, показать весь накопленный опыт организации, положительные отзывы клиентов. Если на сайте будет размещена форма расчета предварительной стоимости, то это  добавит Вашему сайту только привлекательности.</p>
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
										<td>от 30</td>
									</tr>
									<tr>
										<td>Хостинг в подарок (мес.)</td>
										<td>6</td>
									</tr>
									<tr>
										<td>Домен в подарок (.ru или .рф)</td>
										<td>1</td>
									</tr>
									<tr>
										<td>Лимит заполнения страниц (шт.)</td>
										<td>30</td>
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
							<h2 class="pulsate">Круто, нам срочно нужен корпоративный сайт! Хотим</h2>
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
							<p>Надеемся этот раздел поможет вам ответить на многие вопросы, касаемо корпоративных сайтов</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="accordeon-wrapper">
							<div class="accordeon-entry">
								<h5>1. У нас нет сайта. Зачем нам корпоративный сайт?</h5>
								<p>
Основным и главным преимуществом корпоративного сайта является возможность привлечения новых клиентов. Другими словами, корпоративный сайт – это рекламная площадка, позволяющая самым эффективным образом донести до потенциальных потребителей информацию о предлагаемых товарах или предоставляемых услугах.
Еще одним важным достоинством сайта по сравнению с другими медиа-каналами является возможность оперативного обновления информации без каких-либо финансовых затрат. Небезызвестно, что любая полиграфическая продукция (рекламные листовки, буклеты, проспекты) остается неизменной вплоть до переиздания. Именно поэтому любой печатной рекламе присущ некий «образ макулатурности»: изменить или откорректировать напечатанный тираж уже невозможно. Этого нельзя сказать о сайте, поскольку «электронная версия рекламного буклета» может обновляться с любой периодичностью. Как следствие, информация на корпоративном сайте может быть всегда актуальной и свежей.
								</p>
							</div>
							<div class="accordeon-entry">
								<h5>2. Что такое конверсия?</h5>
								<p>
Конверсия в интернет-маркетинге — это отношение числа посетителей сайта, выполнивших на нём какие-либо целевые действия (скрытые или прямые указания рекламодателей, продавцов, создателей контента — покупку, регистрацию, подписку, посещение определённой страницы сайта, переход по рекламной ссылке), к общему числу посетителей сайта, выраженное в процентах. Например: у вас имеется интернет-магазин по продаже какой-либо продукции. Допустим, что в сутки на него заходит 500 уникальных посетителей. В течение этих суток в вашем магазине совершается 7 разных покупок. В данном случае процент конверсии посетителей и покупателей равен 1,4 (7 покупок/500 посетителей*100%=1,4 %).
								</p>
							</div>
							<div class="accordeon-entry">
								<h5>3. Что дает разработка корпоративного сайта?</h5>
								<p>
Современный корпоративный сайт является не только средством предоставления информации, но и средством получения необходимой информации от посетителей. Именно этот аспект позволяет рассматривать сайт как полноценную интерактивную информационную систему.

В первую очередь организация двустороннего общения позволяет узнать, что из себя представляют ваши клиенты и как они относятся к вашей компании. Для реализации этой задачи можно обратиться в специализированное маркетинговое агентство, либо воспользоваться собственным корпоративным сайтом, который может предоставить в ваше распоряжение несколько эффективных маркетинговых инструментов: форма обратной связи, книга отзывов, голосование. С помощью этих средств можно получить информацию о том, какие товары и услуги наиболее востребованы, что именно не устраивает ваших клиентов, а также другие важные данные, необходимые для успешного развития бизнеса.

Помимо маркетинговых инструментов корпоративный сайт может содержать средства информационной и технической поддержки клиентов. Возможность задать вопрос и оперативно получить на него ответ является очень важным критерием для потребителя при выборе поставщика товаров или услуг. Организация онлайновой справочной службы или форума позволяет эффективно удерживать клиентов за счет предоставления непрерывного доступа к необходимой информации и взаимного общения клиентов между собой.
								</p>
							</div>
							<div class="accordeon-entry">
								<h5>4. Цена на разработку включает систему управления?</h5>
								<p>
Да, компания выполняет создание интернет сайтов с CMS, то есть с разделом для администраторов, откуда можно легко и просто поправить любой текст, создать новую страницу, запустить новую акцию, выложить новый товар и так далее. Конкретная функциональность системы управления сайтом зависит от выбранного варианта работ и задач, решаемых ресурсом. Общий принцип: ничего лишнего, но при этом всё, чтобы вы могли комфортно и уверенно работать со своим интернет-ресурсом.
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
							<h2 class="pulsate">У нас нет больше вопросов! Сделайте наш корпоративный сайт</h2>
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