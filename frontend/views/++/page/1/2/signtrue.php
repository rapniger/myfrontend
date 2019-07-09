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
									'enableAjaxValidation' => true,
									'options' =>[
										'class' => 'rd-mailform text-left offset-top-20',
										'enctype' => 'multipart/form-data',
										'data-form-output' => 'form-output-global',
										'data-form-type' => 'contact'
									]
							]); ?>
									
								<div class="range">
									<h3>О пользователе</h3>
									<div class="range">
										<?= $form->field($form_model, 'name', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t{error}"])->label('Имя *')?>
								
										<?= $form->field($form_model, 'subname', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t{error}"])->label('Фамилия *')?>
										
										<?= $form->field($form_model,'databirth', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t{error}", 'labelOptions' => [ 'class' => 'control-label' ],])
										->widget(\yii\jui\DatePicker::class, ['language' => 'ru','options'=>['class'=>'form-control','autocomplete'=>'on', 'value' => date('Y-M-d'),],'dateFormat' => 'yyyy-MM-dd','value' => '0000-00-00','clientOptions' =>['changeMonth' => true,'changeYear' => true,'yearRange'=>'1930:2001',],])
										->label('Дата рождения'); ?>		
		
									</div>
								</div>
								<div class="range">
									<h3>Контактная информация</h3>
									<div class="range">
										<?= $form->field($form_model, 'telephone', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t{error}"])->label('Телефон *')?>
								
										<?= $form->field($form_model, 'email', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t{error}"])->label('Электронная почта *')?>
											
								<?php /*		<ul class="list-inline offset-top-30 text-center">
											<li>
												<?= Html::submitButton('', ['class' => 'icon fa-vk icon-xs icon-xs-2 icon-border icon-vk icon-btn', 'name' => 'login-vk']) ?>

											</li>
											<li>
												<?= Html::submitButton('', ['class' => 'icon fa-odnoklassniki icon-xs icon-xs-2 icon-border icon-odnoklassniki icon-btn', 'name' => 'login-ok']) ?>
											
											</li>
											<li>
												<?= Html::submitButton('', ['class' => 'icon fa-google icon-xs icon-xs-2 icon-border icon-google icon-btn', 'name' => 'login-google']) ?>
											
											</li>
										</ul>
								*/?>	</div>
								</div>
								<div class="range">
									<h3>Вход в системе</h3>
									<div class="range">
										<?= $form->field($form_model, 'login', ['template' => "\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div><div class=''>{error}</div>"])->label('Логин *')?>
								
										<?= $form->field($form_model, 'password_repeat', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{error}\n\t\t\t\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t\t\t</div>"])->passwordInput()->label('Пароль *') ?>
										
										<?= $form->field($form_model, 'password', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{error}\n\t\t\t\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t\t\t</div>"])->passwordInput()->label('Повтор пароля *') ?>
									
									</div>
								</div>
								<div class="range">
									<h3>Статус учетной записи</h3>
									<div class="range">
										<h4>Срок действия неактивированного аккаунта - 2 дня</h4>
										<p>После регистрации системы обязательным условием является утверждение статуса учетной записи для полноценной работы с ресурсами сайта.</p>
										<p>Чтобы подтвердить учетную запись - пожалуйста, загляните в электронную почту за дальнейшей инструкции.</p>
									</div>
								</div>
								<div class="range">
									<div class="range">
								
										<?= $form->field($form_model, 'agreelaw',['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{error}\n\t\t\t\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t\t\t</div>"])->checkbox(['checked' => false])->label('Я согласен о передаче и обработки персональных данных, и с условиям ФЗ "О персональных данных" ознакомлен') ?>
								
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
		
		
<?/*	
<?= $form->field($form_model, 'avatar', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t{error}"])->label('Аватар')->fileInput()?>




			
$form->field($form_model,'databirth')->widget(DatePicker::classname(),['name' => 'check_issue_date','language' => 'ru','value' => date('dd/mm/yyyy', strtotime('+7 days')),'readonly' => true,'type' => DatePicker::TYPE_COMPONENT_APPEND,
'options' =>['placeholder'=>Yii::$app->formatter->asDate($form_model->databirth),'class' => '','autocomplete' => 'off'],'pluginOptions' => ['autoclose'=>true,'format' => 'dd-M-yyyy'],])->label('Дата рождения');?>									
<?= $form->field($form_model, 'databirth', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t{error}"])->label('День рождения')?>
						*/
?>