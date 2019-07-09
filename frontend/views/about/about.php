<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm; //сама форма
use yii\widgets\ActiveField; // настройка для формы
use yii\widgets\Pjax;
?>
		<main class="page-content">

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
						<h1>НАШИ УСЛУГИ <br class="veil reveal-lg-inline">по доступным ценам</h1>
						<h5>"Ритгран" - это многолетняя компания,<br class="veil reveal-lg-inline"> зарекомендованная огромным опытом и отличным качеством работ. </h5>
						<div class="btn-group-variant-1">
							<a href="#" class="btn btn-primary btn-sm">3D Конструктор</a>
							<a href="contacts.html" class="btn btn-transparent btn-sm">Обратная связь</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<main class="page-content">
		
		<!--sections About Us: Registering a Death-->
		<section id="why-me" class="section-34 section-bottom-78">
			<div class="shell">
				<h2 class="divider offset-top-40 offset-md-top-80 text-center">О компании</h2>
				<div class="range">
					<div class="cell-md-6"><img src="/images/about-1-570x355.jpg" alt="" width="570" height="355"></div>
					<div class="cell-md-6">
						<div class="inset-md-left-27 inset-md-right-27">
							<h3>Мы работаем для Вас уже более 10 лет</h3>
							<p class="offset-top-22">"Ритгран" - это многолетняя компания, зарекомендованная огромным опытом и отличным качеством работ. Мы рады, что Вы доверяете именно нам, наша работа прослужит долголетием памяти ваших родных и близких.</p>
							<p class="offset-top-10">Компания "Ритгран" основана в 2007 году, опытными художниками и мастерами знающими отлично свою работу. Мы занимаемся изготовлением надгробных памятников и предоставлением других ритуальных услуг, связанных с похоронами. Ценовая политика компании "Ритгран" заключается в том, чтобы к нам могли обратиться люди с любым достатком и заказать такой надгробный памятник, который не отяготит их семейного бюджета. Наша компания ценится своим качеством по всей России.</p>
						</div>
					</div>
				</div>
				<div class="range">
					<div class="cell-md-6">
						<div class="inset-md-left-27 inset-md-right-27">
							<h3>Сотрудники</h3>
							<p class="offset-top-22">С момента открытия нашей компании у нас образовался единый и сплоченный коллектив. Каждый сотрудник отвечает за свою часть работы для создания единого памятника. Весь наш коллектив имеет колоссальный опыт в своей сфере деятельности. Наши сотрудники очень вежливы и всегда ответят на все вас интересующие вопросы.</p>
						</div>
					</div>
					<div class="cell-md-6"><img src="/images/about-1-570x355.jpg" alt="" width="570" height="355"></div>
				</div>
				<div class="range">
					<div class="cell-md-6"><img src="/images/about-1-570x355.jpg" alt="" width="570" height="355"></div>
					<div class="cell-md-6">
						<div class="inset-md-left-27 inset-md-right-27">
							<h3>Технологии</h3>
							<p class="offset-top-22">Наши технологии создания надгробных памятников заключаются не только в современном импортном оборудовании, но и в самом процессе. Весь процесс создания надгробных памятников проходит качественный контроль. Наши станки изготавливают только квадратную основу, но современные памятники имеют форму различных изгибов, а эта работа уже делается вручную. Только от опытных мастеров зависит то как будет выглядеть будущий памятник.</p>
						</div>
					</div>
				</div>
			</div>
		</section>		
		
		<!-- RD Parallax-->
		<section class="section-83 bg-pampas">
			<div class="shell">
				<h2 class="divider text-center">Шаги предзаказа</h2>
				<div class="range text-center text-md-left">
					<div class="cell-md-3 text-center">
						<div class="media media-variant-1">
							<span class="icon icon-md-2 icon-comet thin-icon-document-edit icon-round"></span>
							<h3 class="offset-top-30">
								<a href="\account\signin">Пройти регистрацию</a>
							</h3>
						</div>
					</div>
					<div class="cell-md-3 text-center">
						<div class="media media-variant-1">
							<span class="icon icon-md-2 icon-comet fa-sign-in icon-round"></span>
							<h3 class="offset-top-30">
								<a href="\account\authorize">Пройти авторизацию</a>
							</h3>
						</div>
					</div>
					<div class="cell-md-3 text-center">
						<div class="media media-variant-1">
							<span class="icon icon-md-2 icon-comet thin-icon-phone-call icon-round"></span>
							<h3 class="offset-top-30">
								Выбрать нужную услугу
							</h3>
						</div>
					</div>
					<div class="cell-md-3 text-center">
						<div class="media media-variant-1">
							<span class="icon icon-md-2 icon-comet thin-icon-phone-call icon-round"></span>
							<h3 class="offset-top-30">
								Пройти предзаказ
							</h3>
						</div>
					</div>
					<div class="cell-md-12 offset-top-30 text-center">
						<div class="btn-group-variant-1 offset-top-30 offset-lg-top-40">
							<a href="\page\constructor" class="btn btn-primary btn-sm btn-min-width-240">Конструктор памятников</a>
							<a href="\page\catalog" class="btn btn-primary btn-sm btn-min-width-240">Каталог услуг</a>
						</div>
					</div>
				</div>
				
			</div>
		</section>
		
		<section data-parallax-img="/images/about-2-1920x1060.jpg" class="parallax-container">
			<div class="parallax-content">
				<div class="shell text-center txt-white section-60 section-md-83">
					<h2 class="divider">РЕЖИМ РАБОТЫ КОМПАНИИ</h2>
					<div class="range">
						<div class="cell-md-10 cell-md-preffix-1">
							<h5>Офис работает с понедельника по пятницу с 8:00 по 18:00.</h5>
							<h5>Принимаем интернет-заявки круглосуточно</h5>
							<div class="btn-group-variant-1 offset-top-30 offset-lg-top-40">
								<a href="\page\contact" class="btn btn-primary btn-sm btn-min-width-240">Оставить заявку</a>
								<a href="\page\contact" class="btn btn-transparent btn-sm btn-min-width-240">Подробно</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	

		<section id="personal" class="section-34 section-bottom-88">
			<div class="shell">
				<h2 class="divider offset-top-40 offset-md-top-80 text-center">Персонал компании</h2>
				<div class="range">
					<div class="cell-sm-4">
						<div class="inset-md-right-22">
							<img src="/images/team-member-1-345x354.jpg" alt="" width="345" height="354">
							<ul class="list offset-top-15">
								<li><span class="icon-xxs icon-darker icon fa-phone"></span> <a href="tel:#" class="call-link"><span class="fw-bold">8(999)8885544</span> <span class="txt-primary">Позвонить</span></a>
								</li>
								<li><span class="icon-xxs icon-darker icon fa-map-marker"></span> <span class="txt-light"><a href="contacts.html">г. Аксай, ул. Садовая 33</a></span>
								</li>
							</ul>
							<a href="#" class="btn btn-primary btn-sm btn-width-full offset-top-32">Связаться со мной</a>
						</div>
					</div>
					<div class="cell-sm-8">
						<div class="h3 reveal-block">Сергей Викторович Драгузин</div>
						<h6 class="reveal-inline-block">Директор компании</h6>
						<ul class="list-inline pull-xs-right list-inline-variant-1">
							<li><a href="#" class="icon icon-xxs icon-darker fa-facebook"></a></li>
							<li><a href="#" class="icon icon-xxs icon-darker fa-vk"></a></li>
							<li><a href="#" class="icon icon-xxs icon-darker fa-odnoklassniki"></a></li>
						</ul>
						<hr class="offset-top-12">
						<h5 class="divider-small offset-top-22">Тексты... Тексты...Тексты... Тексты...Тексты... Тексты...Тексты... Тексты...Тексты... Тексты...</h5>
						<p class="offset-top-10">Тексты... Тексты...Тексты... Тексты...Тексты... Тексты...Тексты... Тексты...Тексты... Тексты...Тексты... Тексты...</p>
						<p class="offset-top-10">Тексты... Тексты...Тексты... Тексты...Тексты... Тексты...Тексты... Тексты...Тексты... Тексты...Тексты... Тексты...Тексты... Тексты...</p>
						<p class="offset-top-10">Тексты... Тексты...Тексты... Тексты...Тексты... Тексты...Тексты... Тексты...Тексты... Тексты...Тексты... Тексты...Тексты... Тексты...</p>
					</div>
				</div>
			</div>
		</section>
		
		<!--sections Staff Details-->
		<section class="section-md-88 bg-pampas section-md-bottom-129 section-53">
			<div class="shell text-center">
				<div class="range">
					<div class="cell-xs-6 cell-md-3">
						<div class="thumbnail thumbnail-variant-2 bg-pampas">
							<img src="/images/team-5-160x160.jpg" alt="" width="160" height="160" class="round width-auto">
							<div class="caption offset-top-16">
								<a href="team-member.html" class="h3">Имя Фамилия</a>
								<h6>Должность</h6>
								<ul class="list-inline list-inline-variant-1 offset-top-15">
									<li><a href="#" class="icon icon-xxs icon-darker fa-vk"></a></li>
									<li><a href="#" class="icon icon-xxs icon-darker fa-odnoklassniki"></a></li>
									<li><a href="#" class="icon icon-xxs icon-darker fa-facebook"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="cell-xs-6 cell-md-3 offset-top-46 offset-xs-top-0">
						<div class="thumbnail thumbnail-variant-2 bg-pampas">
							<img src="/images/team-6-160x160.jpg" alt="" width="160" height="160" class="round width-auto">
							<div class="caption offset-top-16">
								<a href="team-member.html" class="h3">Имя Фамилия</a>
								<h6>Должность</h6>
								<ul class="list-inline list-inline-variant-1 offset-top-15">
									<li><a href="#" class="icon icon-xxs icon-darker fa-vk"></a></li>
									<li><a href="#" class="icon icon-xxs icon-darker fa-odnoklassniki"></a></li>
									<li><a href="#" class="icon icon-xxs icon-darker fa-facebook"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="cell-xs-6 cell-md-3 offset-top-46 offset-md-top-0">
						<div class="thumbnail thumbnail-variant-2 bg-pampas">
							<img src="/images/team-7-160x160.jpg" alt="" width="160" height="160" class="round width-auto">
							<div class="caption offset-top-16">
								<a href="team-member.html" class="h3">Имя Фамилия</a>
								<h6>Должность</h6>
								<ul class="list-inline list-inline-variant-1 offset-top-15">
									<li><a href="#" class="icon icon-xxs icon-darker fa-vk"></a></li>
									<li><a href="#" class="icon icon-xxs icon-darker fa-odnoklassniki"></a></li>
									<li><a href="#" class="icon icon-xxs icon-darker fa-facebook"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="cell-xs-6 cell-md-3 offset-top-46 offset-md-top-0">
						<div class="thumbnail thumbnail-variant-2 bg-pampas">
							<img src="/images/team-8-160x160.jpg" alt="" width="160" height="160" class="round width-auto">
							<div class="caption offset-top-16">
								<a href="team-member.html" class="h3">Имя Фамилия</a>
								<h6>Должность</h6>
								<ul class="list-inline list-inline-variant-1 offset-top-15">
									<li><a href="#" class="icon icon-xxs icon-darker fa-vk"></a></li>
									<li><a href="#" class="icon icon-xxs icon-darker fa-odnoklassniki"></a></li>
									<li><a href="#" class="icon icon-xxs icon-darker fa-facebook"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="portfolio" class="section-top-34">
			<div class="container-fluid inset-left-0 inset-right-0">
				<h2 class="divider offset-top-40 offset-md-top-80 text-center">Портфолио</h2>
				<!-- Isotope Filters-->
				<div class="isotope-filters isotope-filters-horizontal text-center">
					<ul class="list-inline list-inline-sm">
						<li><a data-isotope-filter="*" data-isotope-group="gallery" href="#" class="h5 active">Все</a></li>
						<li><a data-isotope-filter="Category 5" data-isotope-group="gallery" href="#" class="h5">Памятники</a></li>
						<li><a data-isotope-filter="Category 1" data-isotope-group="gallery" href="#" class="h5">Стелы</a></li>
						<li><a data-isotope-filter="Category 2" data-isotope-group="gallery" href="#" class="h5">Проекты</a></li>
						<li><a data-isotope-filter="Category 3" data-isotope-group="gallery" href="#" class="h5">Гравировка</a></li>
						<li><a data-isotope-filter="Category 4" data-isotope-group="gallery" href="#" class="h5">Ограды</a></li>
					</ul>
				</div>
				<!-- Isotope Content-->
				<div data-isotope-layout="masonry" data-isotope-group="gallery" data-photo-swipe-gallery="gallery" class="isotope isotope-variant-cobbles">
					<div data-filter="Category 2" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/2/1.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/2/1.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Проекты</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 1" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/1/1.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/1/1.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Стела</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 3" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/3/1.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/3/1.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Гравировка</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 4" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/4/1.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/4/1.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Ограда</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 5" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/5/1.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/5/1.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Памятник</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 2" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/2/2.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/2/2.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Проекты</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 1" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/1/2.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/1/2.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Стела</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 3" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/3/2.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/3/2.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Гравировка</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 4" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/4/2.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/4/2.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Ограда</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 5" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/5/3.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/5/3.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Памятник</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 2" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/2/3.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/2/3.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Проекты</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 1" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/1/3.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/1/3.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Стела</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 3" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/3/3.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/3/3.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Гравировка</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 4" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/4/3.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/4/3.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Ограда</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 5" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/5/4.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/5/4.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Памятник</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 2" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/2/4.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/2/4.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Проекты</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 1" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/1/4.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/1/4.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Стела</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 3" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/3/4.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/3/4.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Гравировка</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 4" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/4/4.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/4/4.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Ограда</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 5" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/5/5.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/5/5.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Памятник</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 2" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/2/5.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/2/5.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Проекты</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 1" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/1/5.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/1/5.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Стела</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 3" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/3/5.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/3/5.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Гравировка</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 4" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/4/5.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/4/5.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Ограда</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 2" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/2/6.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/2/6.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Проекты</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 1" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/1/6.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/1/6.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Стела</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 3" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/3/6.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/1/6.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Гравировка</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 4" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/4/6.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/4/6.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Ограда</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 5" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/5/6.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/5/6.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Памятник</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 2" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/2/7.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/2/7.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Проекты</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 3" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/3/7.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/3/7.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Гравировка</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 4" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/4/7.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/4/7.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Ограда</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 5" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/5/7.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/5/7.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Памятник</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 2" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/2/8.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/2/8.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Проекты</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 3" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/3/8.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/3/8.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Гравировка</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 5" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/5/8.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/5/8.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Памятник</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 2" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/2/9.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/2/9.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Проекты</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 3" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/3/9.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/1/9.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Гравировка</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 5" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/5/9.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/5/9.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Памятник</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 2" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/2/10.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/2/10.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Проекты</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 3" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/3/10.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/3/10.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Гравировка</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 5" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/5/10.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/5/10.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Памятник</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 2" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/2/11.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/2/11.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Проекты</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 3" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/3/11.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/3/11.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Гравировка</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 5" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/5/11.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/5/11.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Памятник</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 2" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/2/12.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/2/12.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Проекты</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 3" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/3/12.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/1/12.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Гравировка</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 5" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/5/12.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/5/12.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Памятник</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 2" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/2/13.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/2/13.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Проекты</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 3" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/3/13.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/3/13.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Гравировка</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 3" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/3/14.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/3/14.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Гравировка</div>
							</div>
						</a>
					</div>
					<div data-filter="Category 3" class="isotope-item">
					<!-- PhotoSwipe-->
						<a data-photo-swipe-item="" data-size="1200x800" href="/images/portfolio/3/15.jpg" data-author="Michael Hull" class="figure">
							<img width="480" height="290" src="/images/portfolio/1/15.jpg" alt="">
							<div class="figure-caption">
								<div class="h3 divider-2">Гравировка</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>		
			
		<section id="requisites" class="section-88 bg-pampas">
			<div class="shell">
				<h2 class="divider text-center">Реквизиты</h2>
				<div class="range">
					<div class="cell-md-8 cell-md-preffix-2">
						<div id="q2" class="h5 offset-top-57"><b>ИП</b> Драгузин Сергей Викторович</div>
						<div id="q2" class="h5 offset-top-57"><b>ИНН</b> 610207340493</div>
						<div id="q2" class="h5 offset-top-57"><b>ОРГНИП</b> 312618920900022</div>
					</div>
				</div>
			</div>
		</section>	
		
		<section id="job" class="section-88 bg-pampas">
			<div class="shell">
				<h2 class="divider text-center">Вакансии</h2>
				<div class="range">
					<div class="cell-xs-12">
						<div class="media media-variant-5 range">
							<div class="cell-md-4">
								<h6 class="reveal-inline-block">Вакансия №1</h6>
								<ul class="list-inline pull-xs-right list-inline-variant-1">
									<li><a href="#" class="icon icon-xxs icon-darker fa-facebook"></a></li>
									<li><a href="#" class="icon icon-xxs icon-darker fa-twitter"></a></li>
									<li><a href="#" class="icon icon-xxs icon-darker fa-google"></a></li>
								</ul>
								<hr class="offset-top-12">
								<h5 class="divider-small offset-top-22">Менеджер по продажам</h5>
								<p class="offset-top-10">Основные требования к кандидату</p><a href="team-member.html" class="btn btn-sm btn-primary btn-min-width-230 offset-top-35">Подробности</a>
							</div>
							<div class="cell-md-4">
								<h6 class="reveal-inline-block">Вакансия №2</h6>
								<ul class="list-inline pull-xs-right list-inline-variant-1">
									<li><a href="#" class="icon icon-xxs icon-darker fa-facebook"></a></li>
									<li><a href="#" class="icon icon-xxs icon-darker fa-twitter"></a></li>
									<li><a href="#" class="icon icon-xxs icon-darker fa-google"></a></li>
								</ul>
								<hr class="offset-top-12">
								<h5 class="divider-small offset-top-22">Менеджер по продажам</h5>
								<p class="offset-top-10">Основные требования к кандидату</p><a href="team-member.html" class="btn btn-sm btn-primary btn-min-width-230 offset-top-35">Подробности</a>
							</div>
							<div class="cell-md-4">
								<h6 class="reveal-inline-block">Вакансия №3</h6>
								<ul class="list-inline pull-xs-right list-inline-variant-1">
									<li><a href="#" class="icon icon-xxs icon-darker fa-facebook"></a></li>
									<li><a href="#" class="icon icon-xxs icon-darker fa-twitter"></a></li>
									<li><a href="#" class="icon icon-xxs icon-darker fa-google"></a></li>
								</ul>
								<hr class="offset-top-12">
								<h5 class="divider-small offset-top-22">Менеджер по продажам</h5>
								<p class="offset-top-10">Основные требования к кандидату</p><a href="team-member.html" class="btn btn-sm btn-primary btn-min-width-230 offset-top-35">Подробности</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="legal" class="section-88 bg-pampas">
			<div class="shell">
				<h2 class="divider text-center">Правовая информация</h2>
				<div class="range">
					<div class="cell-md-8 cell-md-preffix-2">
						<p>Funerals are an important step in the grieving process, as well as an opportunity to honor a life lived. They offer family members and friends a caring, supportive environment to gather and support each other in a loss, as well as to celebrate the life that has been lived. Browse our list of frequently asked questions and answers to get to know more about the whole process.</p>
						<ul class="list-marked list-marked-variant-2 offset-top-10 inset-sm-left-38">
							<li><a href="#q1" data-waypoint-to="#q1">О персональных данных</a></li>
							<li><a href="#q2" data-waypoint-to="#q2">О конфиденциальной информации</a></li>
							<li><a href="#q3" data-waypoint-to="#q3">Оферта</a></li>
						</ul>
						<div id="q1" class="h5 offset-top-57">What type of funeral fits your family?</div>
						<p class="offset-top-10">Every funeral is different. Every family is different. A family should make a funeral choice that fits their needs at the time of loss. Among the options to consider are: traditional service with viewing and burial, traditional service with cremation to follow, cremation with a memorial service, or any type of arrangement that is right for your family. Many people are now using our pre-planning and pre-funding services to ensure their wishes are carried out upon their death and to relieve family and friends from additional stress.</p>
						<div id="q2" class="h5 offset-top-57">How can we make the funeral service personal?</div>
						<p class="offset-top-10">A funeral can be as unique as the person who died. Picture displays and video tributes are examples of the several ways to portray and celebrate the life of a loved one. Not only do these provide family and friends with a visual means to remember their loved one, assembly picture boards are also an opportunity to reminisce while designing the display.</p>
						<p class="offset-top-10">Some families choose unique songs and music to play at the service. Having a reception following the funeral or memorial service provides fellowship and a place for people to gather and visit in a more casual setting.</p>
						<p class="offset-top-10">Other options to personalize a service may include: dove release, balloon release, displaying personal memorabilia or treasures, and working with the funeral director to create a marker or monument that reflects the life of your loved one.</p>
						<div id="q3" class="h5 offset-top-57">What determines the cost of a funeral?</div>
						<p class="offset-top-10">You and your family do. A funeral can be as extravagant or as simple as you desire. The type of service and other items selected determines the cost of a funeral. An estimate of costs based on items and services selected is provided to the family and our general price list is provided for easy reference. A funeral does not have to be an extravagant display as there are caskets and urns available at all cost levels to fit the needs of every family. Pre-planning and pre-funding your funeral can help control costs. By making decisions ahead of time, you avoid having to make choices at a time when your emotions are heightened. Pre-planning and pre-funding also provides an opportunity for you to set aside funds that can be used to pay for part or all of the service.</p>
						<div id="q4" class="h5 offset-top-57">What about pre-planning and pre-funding a funeral?</div>
						<p class="offset-top-10">By planning and arranging a funeral in advance, you have the opportunity to discuss your wishes with your family. Having the details of a loved one’s funeral or memorial service settled before death allows families to make informed decisions.Pre-funding a funeral enables you to set funds aside to cover the costs of the funeral arrangements. These expenses can be partially or fully funded through the legal establishment of funeral trusts or life insurance. These funds earn interest and are fully transferable.</p>
					</div>
				</div>
			</div>
		</section>
			
		</main>
		
		<script src="/assets/js/jquery.js"></script>