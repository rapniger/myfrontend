<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm; //сама форма
use yii\widgets\ActiveField; // настройка для формы
use yii\widgets\Pjax;
?>
		<main>
			<section class="section-34 section-md-bottom-83 section-bottom-45">
				<div class="shell">
					<h2 class="divider offset-top-20 text-center">Регистрация</h2>
					<div class="range">
						<div class="cell-md-12">
							<?php Pjax::begin()?>
							<?php $form = ActiveForm::begin([
									'id' => 'Registration-Ajax',
									'action' => '/ajax/reg',
									'options' =>[
										'class' => 'rd-mailform text-left offset-top-20',
										'enctype' => 'multipart/form-data',
										'data-form-output' => 'form-output-global',
										'data-form-type' => 'contact'
									]
							]); ?>
									
								<div class="range">
									<?= $form->field($form_model, 'name', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t{error}"])->label('Имя *')?>
									<?= $form->field($form_model, 'login', ['template' => "\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div><div class=''>{error}</div>"])->label('Логин *')?>
									<?= $form->field($form_model, 'password', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{error}\n\t\t\t\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t\t\t</div>"])->passwordInput()->label('Пароль *') ?>
									<?= Html::submitButton('Зарегистрироваться', ['class' => 'offset-top-30 btn btn-primary btn-sm btn-width-full', 'name' => 'reg-button']) ?>
									
								</div>
								<?php ActiveForm::end(); ?>
								<?php Pjax::end()?>
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