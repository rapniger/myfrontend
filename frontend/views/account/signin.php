<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;

?>

		
		<main>
			<section class="section-34 section-md-bottom-83 section-bottom-45">
				<div class="shell">
					<h2 class="divider offset-top-20 text-center">Регистрация</h2>
					<div class="range">
						<div class="cell-md-12">
							<?php Pjax::begin(['id' => 'signin-pjax']);?>	
								<?php $form = ActiveForm::begin([
									'id' => 'Registration-Ajax',
									'action' => '/account/signin',
									'enableAjaxValidation' => true,
									'validationUrl' => '/account/validate-signin',
									'options' =>[
										'data-pjax' => true,
										'class' => 'rd-mailform text-left offset-top-20',
										'enctype' => 'multipart/form-data',
										'data-form-output' => 'form-output-global',
										'data-form-type' => 'contact'
									]
							]); ?>
								<?php if($messagecontact == false){ ?>	
									<div class="range">
										<h3>О пользователе</h3>
										<div class="range">
											<?= $form->field($signinuser, 'name', ['template' => "\t\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t{error}"])->label('Имя *')?>
								
											<?= $form->field($signinuser, 'subname', ['template' => "\t\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t{error}"])->label('Фамилия *')?>
										
											<?= $form->field($signinuser,'databirth', ['template' => "\t\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t{error}", 'labelOptions' => [ 'class' => 'control-label' ],])
											->widget(\yii\jui\DatePicker::class, ['language' => 'ru','options'=>['class'=>'form-control','autocomplete'=>'on', 'value' => date('Y-M-d'),],'dateFormat' => 'yyyy-MM-dd','value' => '0000-00-00','clientOptions' =>['changeMonth' => true,'changeYear' => true,'yearRange'=>'1930:2001',],])
											->label('Дата рождения'); ?>		
		
										</div>
									</div>
									<div class="range">
										<h3>Контактная информация</h3>
										<div class="range">
											<?= $form->field($signinuser, 'telephone', ['template' => "\t\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t{error}"])->label('Телефон *')?>
								
											<?= $form->field($signinuser, 'email', ['template' => "\t\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t{error}"])->label('Электронная почта *')?>
											
										</div>
									</div>
									<div class="range">
										<h3>Вход в системе</h3>
										<div class="range">
											<?= $form->field($signinuser, 'login', ['template' => "\t\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t{error}"])->label('Логин *')?>
								
											<?= $form->field($signinuser, 'password_repeat', ['template' => "\t\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t{error}"])->passwordInput()->label('Пароль *') ?>
										
											<?= $form->field($signinuser, 'password', ['template' => "\t\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t{error}"])->passwordInput()->label('Повтор пароля *') ?>
									
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
											<?= $form->field($signinuser, 'agreelaw',['template' => "\t\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{error}"])->checkbox(['checked' => false])->label('Я согласен о передаче и обработки персональных данных, и с условиям ФЗ "О персональных данных" ознакомлен') ?>
										
												<div class="cell-xs-12 offset-top-48">
													<div class="form-group text-center">
														<?= $form->field($signinuser, 'verifyCode')
															->widget(\himiklab\yii2\recaptcha\ReCaptcha::className(),
															['siteKey' => '6Lf8bqgUAAAAACqQhCfAXz2H3CLqIEAq-AyE6bT4',
															'widgetOptions' => ['class' => 'div-recaptcha text-center']])
															->label('Просим пройти верификацию')
														?>
													</div>
												</div>
											<?= Html::submitButton('Зарегистрироваться', ['class' => 'offset-top-30 btn btn-primary btn-sm btn-width-full', 'name' => 'reg-button']) ?>
									
										</div>
									<?php }else if($messagecontact == 'ok'){?>
										<div class="cell-xs-12 text-center offset-top-30">
											<h3>Уважаемый пользователь!</h3>
											<p>Поздравляем Вас! Вы успешно зарегистрировались в систему!</p>
											<p>Администратор сайта рекомендует пройти подтверждения вашего аккаунта. Зайдите в электронную почту за дальнейшей инструкции!</p>
										</div>
									<?php }else if($messagecontact == 'no'){ ?>
										<div class="cell-xs-12 text-center offset-top-30">
											<h3>Уважаемый пользователь!</h3>
											<p>Система обнаружила ошибки введенных данных в регистрационной форме!</p>
											<p>Администрация сайта рекомендует вас внимательно заполнить все данные в форме</p>
											<p>По вопросам регистрации позвоните по телефону: 89995554411</p>
										</div>
									<?php } ?>
</div>
								<?php ActiveForm::end(); echo "\n";?>
							<?php Pjax::end();?>		
						</div>
					</div>
			</section>
		</main>
		
		
		
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
								*/?>