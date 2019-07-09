<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm; //сама форма
use yii\widgets\ActiveField; // настройка для формы
use yii\widgets\Pjax;
//use kartik\date\DatePicker;
//use kartik\select2\Select2;
use yii\widgets\InputWidget;
use yii\jui\DatePicker;

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
									<?php
									/*
										Здесь нужна проверка, вошел ли пользователь или нет!! 
									*/
									
									if(Yii::$app->user->isGuest){
									?>
										
										<button type="button" class="btn btn-primary btn-xxs" data-toggle="modal" data-target=	"#exampleModal">
											Войти
										</button>
									<?	
									}else{
									?>
									
										<button type="button" class="btn btn-primary btn-xxs" data-toggle="modal" data-target=	"#exampleModal">
											Меню
										</button>
									
									<?
									}
									?>
									
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
									<a src ="\page\signin"class="text-center">
										Или пройти регистрацию в системе
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		<main>
			<section class="section-34 section-md-bottom-83 section-bottom-45 bg-pampas">
				<div class="shell">
					<h2 class="divider offset-top-20 text-center">Приветствие</h2>
					<div class="range">
						<div class="cell-md-12">
							<h3 class="text-center">Уважаемый пользователь!</h3>
							<p>Поздравляем Вас! Вы успешно зарегистрировались в систему!</p>
							<p>Администратор сайта рекомендует пройти подтверждения вашего аккаунта. Зайдите в электронную почту за дальнейшей инструкции!</p>
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
		
		
<?/*	
<?= $form->field($form_model, 'avatar', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t{error}"])->label('Аватар')->fileInput()?>




			
$form->field($form_model,'databirth')->widget(DatePicker::classname(),['name' => 'check_issue_date','language' => 'ru','value' => date('dd/mm/yyyy', strtotime('+7 days')),'readonly' => true,'type' => DatePicker::TYPE_COMPONENT_APPEND,
'options' =>['placeholder'=>Yii::$app->formatter->asDate($form_model->databirth),'class' => '','autocomplete' => 'off'],'pluginOptions' => ['autoclose'=>true,'format' => 'dd-M-yyyy'],])->label('Дата рождения');?>									
<?= $form->field($form_model, 'databirth', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t{error}"])->label('День рождения')?>
						*/
?>