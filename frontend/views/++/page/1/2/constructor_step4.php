<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm; //сама форма
use yii\widgets\ActiveField; // настройка для формы
use yii\widgets\Pjax;

?>
<?php

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
							<a href="cart.html" class="rd-navbar-shop fa-shopping-cart">
								<span>10</span>
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
									<?php
									/*
										Здесь нужна проверка, вошел ли пользователь или нет!! 
									*/
									?>
									
									<button type="button" class="btn btn-primary btn-xxs" data-toggle="modal" data-target="#exampleModal">
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
											'action' => '/ajax/signin',
											'enableAjaxValidation' => true,
											'options' =>[
												'class' => 'rd-mailform text-left offset-top-20',
												'enctype' => 'multipart/form-data',
												'data-form-output' => 'form-output-global',
												'data-form-type' => 'contact'
											]
										]); ?>
									
											<?= $form->field($authuser, 'login', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{error}\n\t\t\t\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t\t\t</div>"])->label('Логин')?>
										
											<?= $form->field($authuser, 'password', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{error}\n\t\t\t\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t\t\t</div>"])->passwordInput()->label('Пароль') ?>
										
											<?= $form->field($authuser, 'rememberme')->checkbox()->label('Оставаться в системе') ?>
										
											<?= Html::submitButton('Войти в систему', ['class' => 'offset-top-30 btn btn-primary btn-sm btn-width-full', 'name' => 'signIn-button']) ?>
									
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
									<a src ="\page\registration"class="text-center">
										Или пройти регистрацию в системе
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<main class="page-content">
		
		
		<section class="section-88 bg-pampas">
			<div class="shell-wide text-center text-md-center">
				<h2 class="divider text-center">КОНСТРУКТОР ПАМЯТНИКОВ</h2>
				<div class="range text-center text-md-left">
					<div class="cell-md-3">
						<div class="media media-variant-1">
							<div class="media-left"><span class="icon icon-md-2 icon-comet fa-clipboard icon-round"></span></div>
							<div class="media-body inset-md-right-25">
								<h3>Этап 1</h3>
								<p>Подбор тип камня, размера памятника</p>
							</div>
						</div>
					</div>
					<div class="cell-md-3">
						<div class="media media-variant-1 media-active">
							<div class="media-left"><span class="icon icon-md-2 icon-comet fa-pencil-square-o icon-round"></span></div>
							<div class="media-body inset-md-right-25">
								<h3 class="font-weight-bold">Этап 2</h3>
								<p class="font-weight-bold">ФИО усопшего, текста на памятника, гравировка.</p>
							</div>
						</div>
					</div>
					<div class="cell-md-3">
						<div class="media media-variant-1">
							<div class="media-left"><span class="icon icon-md-2 icon-comet fa-shopping-cart icon-round"></span></div>
							<div class="media-body inset-md-right-25">
								<h3>Этап 3</h3>
								<p>Проверка заказа. Утвердить эксиз.</p>
							</div>
						</div>
					</div>
					<div class="cell-md-3">
						<div class="media media-variant-1">
							<div class="media-left"><span class="icon icon-md-2 icon-comet fa-check icon-round"></span></div>
							<div class="media-body inset-md-right-25">
								<h3>Этап 4</h3>
								<p>Текст. Текст. Текст.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="shell-wide offset-top-20">
				<h2 class="divider text-center"></h2>
				<div class="range text-center text-md-left">	
					<div class="cell-md-5 offset-top-50">
						<div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group offset-top-40">
							<div class="panel panel-default">
								<div id="headingOne" role="tab" class="panel-heading">
									<div class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											<span class="btn-plus"></span>
											ФИО усопшего
										</a>
									</div>
								</div>
								<div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse in">
									<div class="panel-body">
										<input type="text" name="" placeholder="ФИО" />
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div id="headingOne1" role="tab" class="panel-heading">
									<div class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
											<span class="btn-plus"></span>
											Выберите шрифт для памятника
										</a>
									</div>
								</div>
								<div id="collapseOne1" role="tabpanel" aria-labelledby="headingOne1" class="panel-collapse collapse in">
									<div class="panel-body">
										<p style="font-style: italic;">Фамилия Имя Отчество</p>
										<p style="font-style: oblique;">Фамилия Имя Отчество</p>
										<p style="font-family: 'Times New Roman', Times, serif;">Фамилия Имя Отчество</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div id="headingTwo" role="tab" class="panel-heading">
									<div class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">
											<span class="btn-plus"></span>
											Выберите рисунок на памятнике
										</a>
									</div>
								</div>
								<div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="range text-center text-md-center">
											<label class="cell-md-4">
												<img src="" width="120" height="120" style="width: 120px; height: 120px; border: 1px solid #222;"/>	
											</label>
											<label class="cell-md-4">
												<img src="" width="120" height="120" style="width: 120px; height: 120px; border: 1px solid #222;"/>	
											</label>
											<label class="cell-md-4">
												<img src="" width="120" height="120" style="width: 120px; height: 120px; border: 1px solid #222;"/>	
											</label>
											<label class="cell-md-4">
												<img src="" width="120" height="120" style="width: 120px; height: 120px; border: 1px solid #222;"/>	
											</label>
											<label class="cell-md-4">
												<img src="" width="120" height="120" style="width: 120px; height: 120px; border: 1px solid #222;"/>	
											</label>
											<label class="cell-md-4">
												<img src="" width="120" height="120" style="width: 120px; height: 120px; border: 1px solid #222;"/>	
											</label>
										</div>
										<div class="text-center offset-top-20">
											<ul class="pagination">
												<li class="disabled"><span class="fa-chevron-left"></span></li>
												<li class="active"><span>1</span></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#"><span class="fa-chevron-right"></span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div id="headingThree3" role="tab" class="panel-heading">
									<div class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3" class="collapsed">
											<span class="btn-plus"></span>
											Загрузить фотографию
										</a>
									</div>
								</div>
								<div id="collapseThree3" role="tabpanel" aria-labelledby="headingThree3" class="panel-collapse collapse">
									<div class="panel-body">
										<input type="file" placeholder="Загрузить"/>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div id="headingThree" role="tab" class="panel-heading">
									<div class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed">
											<span class="btn-plus"></span>
											Выберите размер фотографии
										</a>
									</div>
								</div>
								<div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" class="panel-collapse collapse">
									<div class="panel-body">
										<select>
											<option>15х20</option>
											<option>20х25</option>
											<option>25х30</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="cell-md-7 offset-top-50">
						<img src="" style="width: 80%; height: 500px; border: 1px solid #222;"/>
					</div>
				</div>
			</div>
			<div class="shell-wide offset-top-20">
				<h3 style="font-size: 42px;">
					Итого: сумма руб.
				</h3>
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
