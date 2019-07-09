<?php
use  yii\web\Session;
use yii\helpers\Html;
use yii\widgets\ActiveForm; //сама форма
use yii\widgets\ActiveField; // настройка для формы
use yii\widgets\Pjax;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;


$session = Yii::$app->session;
//Yii::$app->user->isGuest // Если пользователь гость, показыаем ссылку "Вход", если он авторизовался "Выход"
?>
<?php
if ($session->isActive == true){
	
	$session->open(); 
?>

		<div class="page">
		
		<header class="page-head">
		<!-- RD Navbar-->
			<div class="rd-navbar-wrap" style="height: 243px;">
				<nav class="rd-navbar rd-navbar-original rd-navbar-static" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-sm-stick-up-offset="50px" data-lg-stick-up-offset="200px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true">
					<span data-rd-navbar-toggle="#rd-navbar-right-panel" data-custom-toggle-disable-on-blur="true" class="rd-navbar-right-panel-toggle toggle-original"></span>
					<div class="rd-navbar-inner">
							<ul class="rd-navbar-user">
								<li>
									Вы вошли, как <?php echo "Пользователь"?>!
								</li>
								<li>
									<a>
										Читать сообщения
										<span class=""></span>
									</a>
								</li>
								<li>
									<a>
										Изменить информацию о себе
										<span class=""></span>
									</a>
								</li>
								<li>
									<a>
										Посмотреть историю заказов
										<span class=""></span>
									</a>
								</li>
								<li>
									<a href="/page/signout" target="">
										Выйти
										<span class=""></span>
									</a>
								</li>
							</ul>
						<div class="rd-navbar-panel-wrap">
						<!-- RD Navbar Panel-->
							<div class="rd-navbar-panel">
							<!-- RD Navbar Toggle-->
								<button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle toggle-original">
									<span></span>
								</button>
								<!-- RD Navbar Brand-->
								<div class="rd-navbar-brand brand-static">
									<a href="index.html" class="brand-name">
										<div class="brand-logo">
											<p>РИТГРАН</p>
											<!--p>Ритуальные услуги</p-->
										</div>
									</a>
								</div>
							</div>
							<div id="rd-navbar-right-panel" class="rd-navbar-right-panel toggle-original-elements">
								<address class="address">
									<span class="icon icon-sm icon-white icon-border fa-map-marker"></span>
									<span class="txt-darker">
										<a href="/contacts.htm">
											Ростовская область,<br>г. Аксай, ул. Садовая 33
										</a>
									</span>
								</address>
								<div class="time">
									<span class="icon icon-sm icon-white icon-border fa-clock-o"></span>
									<span>С 9:00 по 18:00</span>
								</div>
								<div class="contact-info">
									<span class="icon icon-sm icon-white icon-border fa-phone"></span>
									<span>
										<a href="tel:#"><span>8(908)1894009</span><br>
											<span>Связь с менеджером</span>
										</a>
									</span>
								</div>
							</div>
						</div>
						<div class="rd-navbar-nav-wrap toggle-original-elements">
							<!-- RD Navbar Brand-->
							<div class="rd-navbar-brand brand-fixed">
								<a href="index.htm" class="brand-name">
									<div class="brand-logo">
										РИТГРАН
									</div>
								</a>
							</div>
							<!-- RD Search-->
							<form action="search-results.html" method="GET" data-search-live="rd-search-results-live" class="rd-search">
								<div id="rd-search" class="form-group">
									<label for="rd-search-form-input" class="form-label rd-input-label">
										Поиск
									</label>
									<input id="rd-search-form-input" type="text" name="s" autocomplete="off" class="form-control">
									<button type="submit" class="fa-search"></button>
								</div>
								<div id="rd-search-results-live" class="rd-search-results-live">
								</div>
							</form>
							<span data-custom-toggle="rd-search" data-custom-toggle-disable-on-blur="true" class="rd-navbar-search-toggle"></span>
							<a href="/page/cart" class="rd-navbar-shop fa-shopping-cart">
								<span>2</span>
							</a>
							<!-- RD Navbar Nav-->
							<ul class="rd-navbar-nav">
								<li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="\page\index">Главная</a>
									<ul class="rd-navbar-dropdown">
										<li><a href="\page\index#why-me">Почему именно мы?</a></li>
										<li><a href="\page\index#comments">Отзывы</a></li>
										<li><a href="\page\index#popular-price">Прайслист</a></li>
										<li><a href="\page\index#feedback-1">Обратная связь</a></li>
									</ul>
									<span class="rd-navbar-submenu-toggle"></span>
								</li>
								<li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="\page\about">О компании</a>
									<ul class="rd-navbar-dropdown">
										<li><a href="">Кто мы?</a></li>
										<li><a href="">Персонал</a></li>
										<li><a href="">Портфолио работ</a></li>
										<li><a href="">Реквизиты</a></li>
										<li><a href="">Вакансии</a></li>
										<li><a href="">Правовая информация</a></li>
									</ul>
									<span class="rd-navbar-submenu-toggle"></span>
								</li>
								<li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="\page\services">Услуги</a>
								<!-- RD Navbar Dropdown-->
									<ul class="rd-navbar-dropdown">
										<li><a href="">Доставка памятников</a></li>
										<li><a href="">Еще услуги</a></li>
										<li><a href="">Ритуальные услуги</a></li>
									</ul>
									<span class="rd-navbar-submenu-toggle"></span>
								</li>
								<li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="\page\catalog">Каталог</a>
									<!-- RD Navbar Dropdown-->
									<ul class="rd-navbar-dropdown">
										<li><a href="\page\constructor_step1">Конструктор памятников. Этап 1</a></li>
										<li><a href="\page\constructor_step2">Конструктор памятников. Этап 2</a></li>
										<li><a href="\page\constructor_step3">Конструктор памятников. Этап 3</a></li>
										<li><a href="\page\constructor_step4">Конструктор памятников. Этап 4</a></li>
										<li><a href="\page\cart">Корзина заказа</a></li>
										<li><a href="\page\singleproduct">Описание товара</a></li>
										<li><a href="\page\catalog">Каталог</a></li>
										<li><a href="">Оптовая продажа</a></li>
									</ul>
									<span class="rd-navbar-submenu-toggle"></span>
									<span class="rd-navbar-submenu-toggle"></span>
								</li>
								<li><a href="\page\contact">Контакты</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>

		</header>
		
		<section>
			<div data-height="" data-min-height="" class="swiper-container swiper-slider">
				<div class="swiper-wrapper">
					<div data-slide-bg="/images/slider-1-1920x700.jpg" class="swiper-slide"></div>
					<div data-slide-bg="/images/slider-2-1920x700.jpg" class="swiper-slide"></div>
					<div data-slide-bg="/images/slider-3-1920x700.jpg" class="swiper-slide"></div>
				</div>
				<!-- Swiper Navigation-->
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
				<div class="jumbotron-wrap">
					<div class="jumbotron-variant-1">
						<h1>НАШИ УСЛУГИ<br class="veil reveal-lg-inline">по доступным ценам</h1>
						<h5>"Ритгран" - это многолетняя компания,<br class="veil reveal-lg-inline"> зарекомендованная огромным опытом и отличным качеством работ</h5>
						<div class="btn-group-variant-1">
							<a href="#" class="btn btn-primary btn-sm">3D Конструктор</a>
							<a href="contacts.html" class="btn btn-transparent btn-sm">Обратная связь</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<main class="page-content">
			<section id="why-me" class="section-83 section-bottom-78 bg-pampas">
				<div class="shell">
					<h2 class="divider text-center">О НАС</h2>
					<div class="range offset-top-42">
						<div class="cell-lg-8 cell-lg-preffix-2">
						<!-- Responsive-tabs-->
							<div class="responsive-tabs responsive-tabs-default offset-top-30">
								<ul class="resp-tabs-list resp-tabs-list-2 text-center">
									<li class="txt-matrix">Чем мы занимаемся?</li>
									<li class="txt-matrix">Почему именно мы?</li>
									<li class="txt-matrix">Качество услуг</li>
								</ul>
								<div class="resp-tabs-container text-justify why-me-content-height">
									<div>
										<p>
											Компания "Ритгран" изготавливает высококачественные памятники из благородных пород камня таких как: гранит и мрамор. 
										</p>
										<p>
											Наши художники отлично сделают гравировку на памятнике вашего близкого, а мастера выполнят точную резку камня под ваш формат. Мы уважаем каждого клиента и работаем с ним по системе предварительного просмотра эскиза памятника, что не каждая организация может себе позволить. Вы можете быть уверены, что Ваш памятник будет выполнен в срок. 
										</p>
										<p>
											Кроме изготовления памятников компания "Ритгран" предоставляет широчайший спектр услуг: организация похорон, продажа ритуальных принадлежностей, уход за могилой и т.д.
										</p>
									</div>
									<div>
										<p>Для нас важны наши клиенты. Качественное выполнение услуг в нашей компании стоит на первом месте. </p>
										<p>С нашими клиентами в процессе изготовления памятников мы держим постоянно связь. В компании используем систему - это поэтапный фотоотчет по выполнению работы изготовления памятника. И фотоотчет мы высылаем на электронную почту наших клиентов.</p>
									</div>
									<div>
										<p>Гранит и мрамор достаточно прочные, и могут прослужить более ста лет. Но если камень обработать не правильно, то в скором времени он может разрушиться. У нас только опытные мастера, работающие на новом оборудовании.</p>
										<p>Услуги</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>			
		
			<!-- RD Parallax-->
			<section data-parallax-img="/images/index-6-1920x896.jpg" class="parallax-container">
				<div class="parallax-content">
					<div class="shell text-center txt-white section-60 section-md-83">
						<h2 class="divider">
							Цена
						</h2>
						<div class="range">
							<div class="cell-md-8 cell-md-preffix-2">
								<h5>
									Несмотря на кризис в нашей стране и повышении цен на все услуги, наши цены Вас приятно удивят. Мы не импортируем камень из-за границы и не работаем через поставщиков. У нас только прямые поставки российского производства.
								</h5>
								<div class="btn-group-variant-1 offset-top-30 offset-lg-top-40">
								<a href="#" class="btn btn-primary btn-sm btn-min-width-240">3D-Конструктор</a>
								<a href="#" class="btn btn-transparent btn-sm btn-min-width-240">Готовые решения</a></div>
							</div>
						</div>
					</div>
				</div>
			</section>
		
			<!-- section Obituaries-->
			<section id="comments" class="section-60 section-md-83 bg-pampas">
				<div class="shell">
					<h2 class="text-center divider">Отзывы</h2>
					<div class="range text-center text-md-left">
						<div class="cell-xs-6 cell-md-3 offset-top-50 offset-md-top-0">
							<div class="caption offset-top-13">
								<a href="" class="h3">Руслан Н.</a>
								<p class="small txt-darker">Памятник гранит</p>
								<p class="offset-md-top-17">На могиле моего отца стоял невзрачный и пожелтевший памятник. Выглядел он, честно говоря, ужасно. Мы решили его заменить. И поставить такой, который смог бы долго выглядеть красиво. В данной компании мы заказали памятник из гранита. Мастера выполнили нам его в короткие сроки. После установки прошло уже несколько лет, а наш памятник до сих пор в идеальном состоянии. Огромное вам спасибо.</p>
							</div>
						</div>
						<div class="cell-xs-6 cell-md-3 offset-top-50 offset-md-top-0">
							<div class="caption offset-top-13">
								<a href="" class="h3">Имя Фамилия</a>
								<p class="small txt-darker">Заголовок</p>
								<p class="offset-md-top-17">На могиле моего отца стоял невзрачный и пожелтевший памятник. Выглядел он, честно говоря, ужасно. Мы решили его заменить. И поставить такой, который смог бы долго выглядеть красиво. В данной компании мы заказали памятник из гранита. Мастера выполнили нам его в короткие сроки. После установки прошло уже несколько лет, а наш памятник до сих пор в идеальном состоянии. Огромное вам спасибо.</p>
							</div>
						</div>
						<div class="cell-xs-6 cell-md-3 offset-top-50 offset-md-top-0">
							<div class="caption offset-top-13">
								<a href="" class="h3">Имя Фамилия</a>
								<p class="small txt-darker">Заголовок</p>
								<p class="offset-md-top-17">На могиле моего отца стоял невзрачный и пожелтевший памятник. Выглядел он, честно говоря, ужасно. Мы решили его заменить. И поставить такой, который смог бы долго выглядеть красиво. В данной компании мы заказали памятник из гранита. Мастера выполнили нам его в короткие сроки. После установки прошло уже несколько лет, а наш памятник до сих пор в идеальном состоянии. Огромное вам спасибо.</p>
							</div>
						</div>
						<div class="cell-xs-6 cell-md-3 offset-top-50 offset-md-top-0">
							<div class="caption offset-top-13">
								<a href="" class="h3">Имя Фамилия</a>
								<p class="small txt-darker">Заголовок</p>
								<p class="offset-md-top-17">На могиле моего отца стоял невзрачный и пожелтевший памятник. Выглядел он, честно говоря, ужасно. Мы решили его заменить. И поставить такой, который смог бы долго выглядеть красиво. В данной компании мы заказали памятник из гранита. Мастера выполнили нам его в короткие сроки. После установки прошло уже несколько лет, а наш памятник до сих пор в идеальном состоянии. Огромное вам спасибо.</p>
							</div>
						</div>
					</div>
					<div class="text-center offset-top-40">
						<a href="obituaries.html" class="btn btn-sm btn-transparent-2">Все отзывы</a>
					</div>
				</div>
			</section>	
	
			<!--sections Thick Line Progress Bars-->
			<section class="section-88">
				<div class="shell">
					<h2 class="divider text-center">счетчик</h2>
					<div class="range text-center">
						<div class="cell-xs-6 cell-md-3">
						<!-- Circle Progress Bar-->
							<div data-value="1" data-thickness="20" data-gradient="#ceb078, #ceb078" data-empty-fill="rgb(235,235,235)" data-size="165" class="progress-bar-circle"><span></span></div>
							<h5 class="offset-top-18">Оказанные услуги</h5>
						</div>
						<div class="cell-xs-6 cell-md-3 offset-top-40 offset-xs-top-0">
						<!-- Circle Progress Bar-->
							<div data-value="0.8" data-thickness="20" data-gradient="#ceb078, #ceb078" data-empty-fill="rgb(235,235,235)" data-size="165" class="progress-bar-circle"><span></span></div>
							<h5 class="offset-top-18">Памятники</h5>
						</div>
						<div class="cell-xs-6 cell-md-3 offset-top-40 offset-md-top-0">
						<!-- Circle Progress Bar-->
							<div data-value="0.25" data-thickness="20" data-gradient="#ceb078, #ceb078" data-empty-fill="rgb(235,235,235)" data-size="165" class="progress-bar-circle"><span></span></div>
							<h5 class="offset-top-18">Наименование</h5>
						</div>
						<div class="cell-xs-6 cell-md-3 offset-top-40 offset-md-top-0">
							<!-- Circle Progress Bar-->
							<div data-value="0.1" data-thickness="20" data-gradient="#ceb078, #ceb078" data-empty-fill="rgb(235,235,235)" data-size="165" class="progress-bar-circle"><span></span></div>
							<h5 class="offset-top-18">Наименование</h5>
						</div>
					</div>
				</div>
			</section>
		
			<section id="popular-price" class="section-88 bg-pampas">
				<div class="shell">
					<h2 class="divider text-center">Прайслист</h2>
					<div class="range">
						<div class="cell-sm-6 cell-md-3 reveal-flex align-stretch">
							<div class="pricing-table-variant-1">
								<div class="title">
									<div class="h5">Художественное оформление</div>
								</div>
								<div class="price">
									<div class="h2">от 3500 руб</div>
								</div>
								<div class="pricing-table-body">
									<ul class="list-marked list-marked-variant-2">
										<li>Портрет на граните</li>
										<li>Крестик стандартный</li>
										<li>Консультация</li>
									</ul>
								</div>
								<div class="table-footer"><a href="#" class="btn btn-sm btn-primary btn-width-full">Заказать</a></div>
							</div>
						</div>
						<div class="cell-sm-6 cell-md-3 reveal-flex align-stretch offset-top-30 offset-sm-top-0">
							<div class="pricing-table-variant-1">
								<div class="title">
									<div class="h5">Уборка надгробия</div>
								</div>
								<div class="price">
									<div class="h2">1100 руб</div>
								</div>
								<div class="pricing-table-body">
									<ul class="list-marked list-marked-variant-2">
										<li>Уборка холма</li>
										<li>Благоустройство(Щебень, песок, пленка), 1м2</li>
										<li>Консультация</li>
									</ul>
								</div>
								<div class="table-footer"><a href="#" class="btn btn-sm btn-primary btn-width-full">Заказать</a></div>
							</div>					
						</div>
						<div class="cell-sm-6 cell-md-3 reveal-flex align-stretch offset-top-30 offset-md-top-0">
							<div class="pricing-table-variant-1">
								<div class="title">
									<div class="h5">Памятник из мрамора</div>
								</div>
								<div class="price">
									<div class="h2">от 7000 руб</div>
								</div>
								<div class="pricing-table-body">
									<ul class="list-marked list-marked-variant-2">
										<li>Комплект памятника</li>
										<li>3D-макет</li>
										<li>Консультация</li>
									</ul>
								</div>
								<div class="table-footer"><a href="#" class="btn btn-sm btn-primary btn-width-full">Заказать</a></div>
							</div>
						</div>
						<div class="cell-sm-6 cell-md-3 reveal-flex align-stretch offset-top-30 offset-md-top-0">
							<div class="pricing-table-variant-1">
								<div class="title">
									<div class="h5">Памятник из гранита</div>
								</div>
								<div class="price">
									<div class="h2">от 11000 руб</div>
								</div>
								<div class="pricing-table-body">
									<ul class="list-marked list-marked-variant-2">
										<li>Комплект памятника</li>
										<li>3D-макет</li>
										<li>Консультация</li>
									</ul>
								</div>
								<div class="table-footer"><a href="#" class="btn btn-sm btn-primary btn-width-full">Заказать</a></div>
							</div>
						</div>
					</div>
				</div>
			</section>	
		
			<section id="feedback-1" class="section-83">
				<div class="shell">
					<h2 class="text-center divider">Обратная связь</h2>
					<div class="range offset-top-118">
						<div class="cell-lg-8 cell-lg-preffix-2">
						<!-- RD Mailform-->
							<form data-form-output="form-output-global" data-form-type="contact" method="post" action="" class="rd-mailform text-left">
								<div class="range">
									<div class="cell-sm-6">
										<div class="form-group">
											<label for="contact-name" class="form-label">Ваше имя</label>
											<input id="contact-name" type="text" name="name" data-constraints="@Required" class="form-control">
										</div>
									</div>
									<div class="cell-sm-6 offset-top-48 offset-sm-top-0">
										<div class="form-group">
											<label for="contact-name-last" class="form-label">Ваша фамилия</label>
											<input id="contact-name-last" type="text" name="phone" data-constraints="@Required" class="form-control">
										</div>
									</div>
									<div class="cell-sm-6 offset-top-48">
										<div class="form-group">
											<label for="contact-phone" class="form-label">Ваш телефон</label>
											<input id="contact-phone" type="text" name="phone" data-constraints="@Required @Numeric" class="form-control">
										</div>
									</div>
									<div class="cell-sm-6 offset-top-48">
										<div class="form-group">
											<label for="contact-email" class="form-label">Ваша электронная почта</label>
											<input id="contact-email" type="email" name="email" data-constraints="@Required @Email" class="form-control">
										</div>
									</div>
									<div class="cell-xs-12 offset-top-48">
										<div class="form-group">
											<label for="contact-message" class="form-label">Сообщение</label>
											<textarea id="contact-message" name="message" data-constraints="@Required" class="form-control"></textarea>
										</div>
									</div>
									<div class="cell-xs-12 text-center offset-top-27">
										<button type="submit" class="btn btn-primary btn-sm btn-min-width-230">Отправить</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
		</main>
		
		<footer class="page-foot bg-ebony section-top-78 section-bottom-15">
			<div class="shell text-center text-sm-left">
				<div class="range">
					<div class="cell-sm-6 cell-md-3">
						<div class="rd-navbar-brand">
							<a href="index.html" class="brand-name">
								<div class="brand-logo">
									<p>РИТГРАН</p>
									<p>Ритуальные услуги</p>
								</div>
							</a>
						</div>
						
					</div>
					<div class="cell-sm-6 cell-md-3 cell-md-preffix-1 text-left">
						<div class="contact-info reveal-block">
							<span class="icon icon-xs icon-white icon-border fa-phone"></span>
							<span>
								<a href="tel:#">
									<span>8(999)8885544</span><br>
									<span>Связь с менеджером</span>
								</a>
							</span>
						</div>
						<address class="address reveal-block offset-top-20 txt-darker">
							<span class="icon icon-xs icon-white icon-border fa-map-marker"></span>
							<span>
								<a href="contacts.html">Ростовская область,<br>г. Аксай, ул. Садовая</a>
							</span>
						</address>
						<div class="time reveal-block offset-top-20 txt-darker">
							<span class="icon icon-xs icon-white icon-border fa-clock-o"></span>
							<span>с 9:00 по 18:00</span>
						</div>
					</div>
					<div class="cell-sm-12 cell-md-5 offset-top-30 offset-sm-top-60 offset-md-top-0">
						<p>
							Изготовление памятников – один из основных профилей нашей работы. Мы изготавливаем памятники под конкретно Ваш бюджет в сжатые сроки.
							С каталогами памятников можно ознакомиться на странице сайта. Если по каким-то причинам не удалось найти в ассортименте каталога, удовлетворяющего все Ваши требования, оставьте заявку на сайте.
						</p>
					</div>
					<div class="cell-xs-12 offset-top-40 offset-lg-top-100">
						<div class="hr-double"></div>
						<p class="small txt-darker">
							&#169; 
							<span id="copyright-year"></span> 
							Все права защищены.
							<a href="privacy.html" class="txt-primary">Правовая информация</a>
						</p>
					</div>
				</div>
			</div>
		</footer>
		
		</div>
		
		<script src="/assets/js/jquery.js"></script>

<?php
	$session->close(); 
	
}else if($session->isActive == false){
?>

		<div class="page">
		
		<header class="page-head">
		<!-- RD Navbar-->
			<div class="rd-navbar-wrap" style="height: 243px;">
				<nav class="rd-navbar rd-navbar-original rd-navbar-static" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-sm-stick-up-offset="50px" data-lg-stick-up-offset="200px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true">
					<span data-rd-navbar-toggle="#rd-navbar-right-panel" data-custom-toggle-disable-on-blur="true" class="rd-navbar-right-panel-toggle toggle-original"></span>
					<div class="rd-navbar-inner">
						<div class="rd-navbar-panel-wrap">
						<!-- RD Navbar Panel-->
							<div class="rd-navbar-panel">
							<!-- RD Navbar Toggle-->
								<button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle toggle-original">
									<span></span>
								</button>
								<!-- RD Navbar Brand-->
								<div class="rd-navbar-brand brand-static">
									<a href="index.html" class="brand-name">
										<div class="brand-logo">
											<p>РИТГРАН</p>
											<!--p>Ритуальные услуги</p-->
										</div>
									</a>
								</div>
							</div>
							<div id="rd-navbar-right-panel" class="rd-navbar-right-panel toggle-original-elements">
								<address class="address">
									<span class="icon icon-sm icon-white icon-border fa-map-marker"></span>
									<span class="txt-darker">
										<a href="/contacts.htm">
											Ростовская область,<br>г. Аксай, ул. Садовая 33
										</a>
									</span>
								</address>
								<div class="time">
									<span class="icon icon-sm icon-white icon-border fa-clock-o"></span>
									<span>С 9:00 по 18:00</span>
								</div>
								<div class="contact-info">
									<span class="icon icon-sm icon-white icon-border fa-phone"></span>
									<span>
										<a href="tel:#"><span>8(908)1894009</span><br>
											<span>Связь с менеджером</span>
										</a>
									</span>
								</div>
							</div>
						</div>
						<div class="rd-navbar-nav-wrap toggle-original-elements">
							<!-- RD Navbar Brand-->
							<div class="rd-navbar-brand brand-fixed">
								<a href="index.htm" class="brand-name">
									<div class="brand-logo">
										РИТГРАН
									</div>
								</a>
							</div>
							<!-- RD Search-->
							<form action="search-results.html" method="GET" data-search-live="rd-search-results-live" class="rd-search">
								<div id="rd-search" class="form-group">
									<label for="rd-search-form-input" class="form-label rd-input-label">
										Поиск
									</label>
									<input id="rd-search-form-input" type="text" name="s" autocomplete="off" class="form-control">
									<button type="submit" class="fa-search"></button>
								</div>
								<div id="rd-search-results-live" class="rd-search-results-live">
								</div>
							</form>
							<span data-custom-toggle="rd-search" data-custom-toggle-disable-on-blur="true" class="rd-navbar-search-toggle"></span>
							<a href="/page/cart" class="rd-navbar-shop fa-shopping-cart">
								<span>2</span>
							</a>
							<!-- RD Navbar Nav-->
							<ul class="rd-navbar-nav">
								<li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="\page\index">Главная</a>
									<ul class="rd-navbar-dropdown">
										<li><a href="\page\index#why-me">Почему именно мы?</a></li>
										<li><a href="\page\index#comments">Отзывы</a></li>
										<li><a href="\page\index#popular-price">Прайслист</a></li>
										<li><a href="\page\index#feedback-1">Обратная связь</a></li>
									</ul>
									<span class="rd-navbar-submenu-toggle"></span>
								</li>
								<li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="\page\about">О компании</a>
									<ul class="rd-navbar-dropdown">
										<li><a href="">Кто мы?</a></li>
										<li><a href="">Персонал</a></li>
										<li><a href="">Портфолио работ</a></li>
										<li><a href="">Реквизиты</a></li>
										<li><a href="">Вакансии</a></li>
										<li><a href="">Правовая информация</a></li>
									</ul>
									<span class="rd-navbar-submenu-toggle"></span>
								</li>
								<li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="\page\services">Услуги</a>
								<!-- RD Navbar Dropdown-->
									<ul class="rd-navbar-dropdown">
										<li><a href="">Доставка памятников</a></li>
										<li><a href="">Еще услуги</a></li>
										<li><a href="">Ритуальные услуги</a></li>
									</ul>
									<span class="rd-navbar-submenu-toggle"></span>
								</li>
								<li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="\page\catalog">Каталог</a>
									<!-- RD Navbar Dropdown-->
									<ul class="rd-navbar-dropdown">
										<li><a href="\page\constructor_step1">Конструктор памятников. Этап 1</a></li>
										<li><a href="\page\constructor_step2">Конструктор памятников. Этап 2</a></li>
										<li><a href="\page\constructor_step3">Конструктор памятников. Этап 3</a></li>
										<li><a href="\page\constructor_step4">Конструктор памятников. Этап 4</a></li>
										<li><a href="\page\cart">Корзина заказа</a></li>
										<li><a href="\page\singleproduct">Описание товара</a></li>
										<li><a href="\page\catalog">Каталог</a></li>
										<li><a href="">Оптовая продажа</a></li>
									</ul>
									<span class="rd-navbar-submenu-toggle"></span>
									<span class="rd-navbar-submenu-toggle"></span>
								</li>
								<li><a href="\page\contact">Контакты</a>
								</li>
								<li>
									<button type="button" class="btn btn-primary btn-xxs" data-toggle="modal" data-target=	"#exampleModal">
										Войти
									</button>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-body">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<div class="range">
								<div class="cell-sm cell-sm-preffix">
									<?php Pjax::begin() ?>
									<?php 
										$form = ActiveForm::begin([
											'id' => 'Auth-Ajax',
											'action' => '/ajax/authorize',
											'enableAjaxValidation' => true,
											'options' =>[
												'class' => 'rd-mailform text-left offset-top-20',
												'enctype' => 'multipart/form-data',
												'data-form-output' => 'form-output-global',
												'data-form-type' => 'Authorize'
											]
										]); ?>
									
											<?= $form->field($authuser, 'login', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{error}\n\t\t\t\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t\t\t</div>"])->label('Логин')?>
										
											<?= $form->field($authuser, 'password', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{error}\n\t\t\t\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t\t\t</div>"])->passwordInput()->label('Пароль') ?>
										
											<?= $form->field($authuser, 'rememberme')->checkbox()->label('Оставаться в системе') ?>
										
											<?= Html::submitButton('Войти в систему', ['class' => 'offset-top-30 btn btn-primary btn-sm btn-width-full', 'name' => 'signin-button']) ?>
									
									<p class="offset-top-27 txt-light text-center">
										или вход с помощью
									</p>
									<ul class="list-inline offset-top-23 text-center">
										<li>
		
										<?= Html::submitButton('', ['text'=>'','class' => 'icon fa-vk icon-xs icon-xs-2 icon-border icon-vk icon-btn', 'name' => 'login-vk']) ?>
										</li>
										<li>
		
										<?= Html::submitButton('', ['class' => 'icon fa-odnoklassniki icon-xs icon-xs-2 icon-border icon-odnoklassniki icon-btn', 'name' => 'login-ok']) ?>
										</li>
										<li>
		
										<?= Html::submitButton('', ['id' => 'AjaxSubmitButton', 'class' => 'icon fa-google icon-xs icon-xs-2 icon-border icon-google icon-btn', 'name' => 'login-google']) ?>
										</li>
									</ul>
		
								<?php ActiveForm::end() ?>
								<?php Pjax::end()?>
								</div>
							</div>
							
							<div class="range">
								<div class="cell-sm cell-sm-preffix text-center">
									<a src="\page\signin"class="text-center">
										Или пройти регистрацию в системе
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</header>
		
		<section>
			<div data-height="" data-min-height="" class="swiper-container swiper-slider">
				<div class="swiper-wrapper">
					<div data-slide-bg="/images/slider-1-1920x700.jpg" class="swiper-slide"></div>
					<div data-slide-bg="/images/slider-2-1920x700.jpg" class="swiper-slide"></div>
					<div data-slide-bg="/images/slider-3-1920x700.jpg" class="swiper-slide"></div>
				</div>
				<!-- Swiper Navigation-->
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
				<div class="jumbotron-wrap">
					<div class="jumbotron-variant-1">
						<h1>НАШИ УСЛУГИ<br class="veil reveal-lg-inline">по доступным ценам</h1>
						<h5>"Ритгран" - это многолетняя компания,<br class="veil reveal-lg-inline"> зарекомендованная огромным опытом и отличным качеством работ</h5>
						<div class="btn-group-variant-1">
							<a href="#" class="btn btn-primary btn-sm">3D Конструктор</a>
							<a href="contacts.html" class="btn btn-transparent btn-sm">Обратная связь</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<main class="page-content">
			<section id="why-me" class="section-83 section-bottom-78 bg-pampas">
				<div class="shell">
					<h2 class="divider text-center">О НАС</h2>
					<div class="range offset-top-42">
						<div class="cell-lg-8 cell-lg-preffix-2">
						<!-- Responsive-tabs-->
							<div class="responsive-tabs responsive-tabs-default offset-top-30">
								<ul class="resp-tabs-list resp-tabs-list-2 text-center">
									<li class="txt-matrix">Чем мы занимаемся?</li>
									<li class="txt-matrix">Почему именно мы?</li>
									<li class="txt-matrix">Качество услуг</li>
								</ul>
								<div class="resp-tabs-container text-justify why-me-content-height">
									<div>
										<p>
											Компания "Ритгран" изготавливает высококачественные памятники из благородных пород камня таких как: гранит и мрамор. 
										</p>
										<p>
											Наши художники отлично сделают гравировку на памятнике вашего близкого, а мастера выполнят точную резку камня под ваш формат. Мы уважаем каждого клиента и работаем с ним по системе предварительного просмотра эскиза памятника, что не каждая организация может себе позволить. Вы можете быть уверены, что Ваш памятник будет выполнен в срок. 
										</p>
										<p>
											Кроме изготовления памятников компания "Ритгран" предоставляет широчайший спектр услуг: организация похорон, продажа ритуальных принадлежностей, уход за могилой и т.д.
										</p>
									</div>
									<div>
										<p>Для нас важны наши клиенты. Качественное выполнение услуг в нашей компании стоит на первом месте. </p>
										<p>С нашими клиентами в процессе изготовления памятников мы держим постоянно связь. В компании используем систему - это поэтапный фотоотчет по выполнению работы изготовления памятника. И фотоотчет мы высылаем на электронную почту наших клиентов.</p>
									</div>
									<div>
										<p>Гранит и мрамор достаточно прочные, и могут прослужить более ста лет. Но если камень обработать не правильно, то в скором времени он может разрушиться. У нас только опытные мастера, работающие на новом оборудовании.</p>
										<p>Услуги</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>			
		
			<!-- RD Parallax-->
			<section data-parallax-img="/images/index-6-1920x896.jpg" class="parallax-container">
				<div class="parallax-content">
					<div class="shell text-center txt-white section-60 section-md-83">
						<h2 class="divider">
							Цена
						</h2>
						<div class="range">
							<div class="cell-md-8 cell-md-preffix-2">
								<h5>
									Несмотря на кризис в нашей стране и повышении цен на все услуги, наши цены Вас приятно удивят. Мы не импортируем камень из-за границы и не работаем через поставщиков. У нас только прямые поставки российского производства.
								</h5>
								<div class="btn-group-variant-1 offset-top-30 offset-lg-top-40">
								<a href="#" class="btn btn-primary btn-sm btn-min-width-240">3D-Конструктор</a>
								<a href="#" class="btn btn-transparent btn-sm btn-min-width-240">Готовые решения</a></div>
							</div>
						</div>
					</div>
				</div>
			</section>
		
			<!-- section Obituaries-->
			<section id="comments" class="section-60 section-md-83 bg-pampas">
				<div class="shell">
					<h2 class="text-center divider">Отзывы</h2>
					<div class="range text-center text-md-left">
						<div class="cell-xs-6 cell-md-3 offset-top-50 offset-md-top-0">
							<div class="caption offset-top-13">
								<a href="" class="h3">Руслан Н.</a>
								<p class="small txt-darker">Памятник гранит</p>
								<p class="offset-md-top-17">На могиле моего отца стоял невзрачный и пожелтевший памятник. Выглядел он, честно говоря, ужасно. Мы решили его заменить. И поставить такой, который смог бы долго выглядеть красиво. В данной компании мы заказали памятник из гранита. Мастера выполнили нам его в короткие сроки. После установки прошло уже несколько лет, а наш памятник до сих пор в идеальном состоянии. Огромное вам спасибо.</p>
							</div>
						</div>
						<div class="cell-xs-6 cell-md-3 offset-top-50 offset-md-top-0">
							<div class="caption offset-top-13">
								<a href="" class="h3">Имя Фамилия</a>
								<p class="small txt-darker">Заголовок</p>
								<p class="offset-md-top-17">На могиле моего отца стоял невзрачный и пожелтевший памятник. Выглядел он, честно говоря, ужасно. Мы решили его заменить. И поставить такой, который смог бы долго выглядеть красиво. В данной компании мы заказали памятник из гранита. Мастера выполнили нам его в короткие сроки. После установки прошло уже несколько лет, а наш памятник до сих пор в идеальном состоянии. Огромное вам спасибо.</p>
							</div>
						</div>
						<div class="cell-xs-6 cell-md-3 offset-top-50 offset-md-top-0">
							<div class="caption offset-top-13">
								<a href="" class="h3">Имя Фамилия</a>
								<p class="small txt-darker">Заголовок</p>
								<p class="offset-md-top-17">На могиле моего отца стоял невзрачный и пожелтевший памятник. Выглядел он, честно говоря, ужасно. Мы решили его заменить. И поставить такой, который смог бы долго выглядеть красиво. В данной компании мы заказали памятник из гранита. Мастера выполнили нам его в короткие сроки. После установки прошло уже несколько лет, а наш памятник до сих пор в идеальном состоянии. Огромное вам спасибо.</p>
							</div>
						</div>
						<div class="cell-xs-6 cell-md-3 offset-top-50 offset-md-top-0">
							<div class="caption offset-top-13">
								<a href="" class="h3">Имя Фамилия</a>
								<p class="small txt-darker">Заголовок</p>
								<p class="offset-md-top-17">На могиле моего отца стоял невзрачный и пожелтевший памятник. Выглядел он, честно говоря, ужасно. Мы решили его заменить. И поставить такой, который смог бы долго выглядеть красиво. В данной компании мы заказали памятник из гранита. Мастера выполнили нам его в короткие сроки. После установки прошло уже несколько лет, а наш памятник до сих пор в идеальном состоянии. Огромное вам спасибо.</p>
							</div>
						</div>
					</div>
					<div class="text-center offset-top-40">
						<a href="obituaries.html" class="btn btn-sm btn-transparent-2">Все отзывы</a>
					</div>
				</div>
			</section>	
	
			<!--sections Thick Line Progress Bars-->
			<section class="section-88">
				<div class="shell">
					<h2 class="divider text-center">счетчик</h2>
					<div class="range text-center">
						<div class="cell-xs-6 cell-md-3">
						<!-- Circle Progress Bar-->
							<div data-value="1" data-thickness="20" data-gradient="#ceb078, #ceb078" data-empty-fill="rgb(235,235,235)" data-size="165" class="progress-bar-circle"><span></span></div>
							<h5 class="offset-top-18">Оказанные услуги</h5>
						</div>
						<div class="cell-xs-6 cell-md-3 offset-top-40 offset-xs-top-0">
						<!-- Circle Progress Bar-->
							<div data-value="0.8" data-thickness="20" data-gradient="#ceb078, #ceb078" data-empty-fill="rgb(235,235,235)" data-size="165" class="progress-bar-circle"><span></span></div>
							<h5 class="offset-top-18">Памятники</h5>
						</div>
						<div class="cell-xs-6 cell-md-3 offset-top-40 offset-md-top-0">
						<!-- Circle Progress Bar-->
							<div data-value="0.25" data-thickness="20" data-gradient="#ceb078, #ceb078" data-empty-fill="rgb(235,235,235)" data-size="165" class="progress-bar-circle"><span></span></div>
							<h5 class="offset-top-18">Наименование</h5>
						</div>
						<div class="cell-xs-6 cell-md-3 offset-top-40 offset-md-top-0">
							<!-- Circle Progress Bar-->
							<div data-value="0.1" data-thickness="20" data-gradient="#ceb078, #ceb078" data-empty-fill="rgb(235,235,235)" data-size="165" class="progress-bar-circle"><span></span></div>
							<h5 class="offset-top-18">Наименование</h5>
						</div>
					</div>
				</div>
			</section>
		
			<section id="popular-price" class="section-88 bg-pampas">
				<div class="shell">
					<h2 class="divider text-center">Прайслист</h2>
					<div class="range">
						<div class="cell-sm-6 cell-md-3 reveal-flex align-stretch">
							<div class="pricing-table-variant-1">
								<div class="title">
									<div class="h5">Художественное оформление</div>
								</div>
								<div class="price">
									<div class="h2">от 3500 руб</div>
								</div>
								<div class="pricing-table-body">
									<ul class="list-marked list-marked-variant-2">
										<li>Портрет на граните</li>
										<li>Крестик стандартный</li>
										<li>Консультация</li>
									</ul>
								</div>
								<div class="table-footer"><a href="#" class="btn btn-sm btn-primary btn-width-full">Заказать</a></div>
							</div>
						</div>
						<div class="cell-sm-6 cell-md-3 reveal-flex align-stretch offset-top-30 offset-sm-top-0">
							<div class="pricing-table-variant-1">
								<div class="title">
									<div class="h5">Уборка надгробия</div>
								</div>
								<div class="price">
									<div class="h2">1100 руб</div>
								</div>
								<div class="pricing-table-body">
									<ul class="list-marked list-marked-variant-2">
										<li>Уборка холма</li>
										<li>Благоустройство(Щебень, песок, пленка), 1м2</li>
										<li>Консультация</li>
									</ul>
								</div>
								<div class="table-footer"><a href="#" class="btn btn-sm btn-primary btn-width-full">Заказать</a></div>
							</div>					
						</div>
						<div class="cell-sm-6 cell-md-3 reveal-flex align-stretch offset-top-30 offset-md-top-0">
							<div class="pricing-table-variant-1">
								<div class="title">
									<div class="h5">Памятник из мрамора</div>
								</div>
								<div class="price">
									<div class="h2">от 7000 руб</div>
								</div>
								<div class="pricing-table-body">
									<ul class="list-marked list-marked-variant-2">
										<li>Комплект памятника</li>
										<li>3D-макет</li>
										<li>Консультация</li>
									</ul>
								</div>
								<div class="table-footer"><a href="#" class="btn btn-sm btn-primary btn-width-full">Заказать</a></div>
							</div>
						</div>
						<div class="cell-sm-6 cell-md-3 reveal-flex align-stretch offset-top-30 offset-md-top-0">
							<div class="pricing-table-variant-1">
								<div class="title">
									<div class="h5">Памятник из гранита</div>
								</div>
								<div class="price">
									<div class="h2">от 11000 руб</div>
								</div>
								<div class="pricing-table-body">
									<ul class="list-marked list-marked-variant-2">
										<li>Комплект памятника</li>
										<li>3D-макет</li>
										<li>Консультация</li>
									</ul>
								</div>
								<div class="table-footer"><a href="#" class="btn btn-sm btn-primary btn-width-full">Заказать</a></div>
							</div>
						</div>
					</div>
				</div>
			</section>	
		
			<section id="feedback-1" class="section-83">
				<div class="shell">
					<h2 class="text-center divider">Обратная связь</h2>
					<div class="range offset-top-118">
						<div class="cell-lg-8 cell-lg-preffix-2">
						<!-- RD Mailform-->
							<form data-form-output="form-output-global" data-form-type="contact" method="post" action="" class="rd-mailform text-left">
								<div class="range">
									<div class="cell-sm-6">
										<div class="form-group">
											<label for="contact-name" class="form-label">Ваше имя</label>
											<input id="contact-name" type="text" name="name" data-constraints="@Required" class="form-control">
										</div>
									</div>
									<div class="cell-sm-6 offset-top-48 offset-sm-top-0">
										<div class="form-group">
											<label for="contact-name-last" class="form-label">Ваша фамилия</label>
											<input id="contact-name-last" type="text" name="phone" data-constraints="@Required" class="form-control">
										</div>
									</div>
									<div class="cell-sm-6 offset-top-48">
										<div class="form-group">
											<label for="contact-phone" class="form-label">Ваш телефон</label>
											<input id="contact-phone" type="text" name="phone" data-constraints="@Required @Numeric" class="form-control">
										</div>
									</div>
									<div class="cell-sm-6 offset-top-48">
										<div class="form-group">
											<label for="contact-email" class="form-label">Ваша электронная почта</label>
											<input id="contact-email" type="email" name="email" data-constraints="@Required @Email" class="form-control">
										</div>
									</div>
									<div class="cell-xs-12 offset-top-48">
										<div class="form-group">
											<label for="contact-message" class="form-label">Сообщение</label>
											<textarea id="contact-message" name="message" data-constraints="@Required" class="form-control"></textarea>
										</div>
									</div>
									<div class="cell-xs-12 text-center offset-top-27">
										<button type="submit" class="btn btn-primary btn-sm btn-min-width-230">Отправить</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
		</main>
		
		<footer class="page-foot bg-ebony section-top-78 section-bottom-15">
			<div class="shell text-center text-sm-left">
				<div class="range">
					<div class="cell-sm-6 cell-md-3">
						<div class="rd-navbar-brand">
							<a href="index.html" class="brand-name">
								<div class="brand-logo">
									<p>РИТГРАН</p>
									<p>Ритуальные услуги</p>
								</div>
							</a>
						</div>
						
					</div>
					<div class="cell-sm-6 cell-md-3 cell-md-preffix-1 text-left">
						<div class="contact-info reveal-block">
							<span class="icon icon-xs icon-white icon-border fa-phone"></span>
							<span>
								<a href="tel:#">
									<span>8(999)8885544</span><br>
									<span>Связь с менеджером</span>
								</a>
							</span>
						</div>
						<address class="address reveal-block offset-top-20 txt-darker">
							<span class="icon icon-xs icon-white icon-border fa-map-marker"></span>
							<span>
								<a href="contacts.html">Ростовская область,<br>г. Аксай, ул. Садовая</a>
							</span>
						</address>
						<div class="time reveal-block offset-top-20 txt-darker">
							<span class="icon icon-xs icon-white icon-border fa-clock-o"></span>
							<span>с 9:00 по 18:00</span>
						</div>
					</div>
					<div class="cell-sm-12 cell-md-5 offset-top-30 offset-sm-top-60 offset-md-top-0">
						<p>
							Изготовление памятников – один из основных профилей нашей работы. Мы изготавливаем памятники под конкретно Ваш бюджет в сжатые сроки.
							С каталогами памятников можно ознакомиться на странице сайта. Если по каким-то причинам не удалось найти в ассортименте каталога, удовлетворяющего все Ваши требования, оставьте заявку на сайте.
						</p>
					</div>
					<div class="cell-xs-12 offset-top-40 offset-lg-top-100">
						<div class="hr-double"></div>
						<p class="small txt-darker">
							&#169; 
							<span id="copyright-year"></span> 
							Все права защищены.
							<a href="privacy.html" class="txt-primary">Правовая информация</a>
						</p>
					</div>
				</div>
			</div>
		</footer>
		
		</div>

<?php
	$session->close();
	
	$session->destroy();
}
?>