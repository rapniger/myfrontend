<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
?>

		
		<main>
			<section class="section-34 section-md-bottom-83 section-bottom-45">
				<div class="shell">
					<h2 class="divider offset-top-20 text-center">Авторизация</h2>
					<div class="range">
						<div class="cell-md-4 text-center">
							<?php Pjax::begin(['id' => 'signin-pjax']); echo "\n";?>
								<?php $form = ActiveForm::begin([
									'id' => 'Authorize-Ajax',
									'action' => '/account/authorize',
									'enableAjaxValidation' => true,
									'validationUrl' => '/account/validate-authorize',
									'options' =>[
										'data-pjax' => true,
										'class' => 'rd-mailform text-left offset-top-20',
										'enctype' => 'multipart/form-data',
										'data-form-output' => 'form-output-global',
										'data-form-type' => 'contact'
									]
							]); ?>
									
									<?= $form->field($loginuser, 'login', ['template' => "\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t{error}"])->label('Логин *')?>
										
									<?= $form->field($loginuser, 'password', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t{error}"])->passwordInput()->label('Пароль *')?>
									
									<div class="cell-xs-12 offset-top-20">
										<div class="form-group text-center">
										<?= $form->field($loginuser, 'verifyCode')
											->widget(\himiklab\yii2\recaptcha\ReCaptcha::className(),
											['siteKey' => '6Lf8bqgUAAAAACqQhCfAXz2H3CLqIEAq-AyE6bT4',
											'widgetOptions' => ['class' => 'div-recaptcha text-center']])
											->label('Просим пройти верификацию')
										?>
										</div>
									</div>
								
									<?= $form->field($loginuser, 'rememberme',['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{error}\n\t\t\t\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t\t\t</div>"])->checkbox(['checked' => false])->label('Запомнить меня') ?>
										
									<a class="text-center">Забыли логин/пароль</a>
									<?php if($messageauth == 'error'){?>
									
									<h4 class="text-center offset-top-20">
										Неправильный логин или пароль!
									</h4>	
									<?php }?>
									<?= Html::submitButton('Войти', ['class' => 'offset-top-30 btn btn-primary btn-sm btn-width-full', 'name' => 'auth_button']) ?>
									
									
								<?php ActiveForm::end(); echo "\n";?>
							<?php Pjax::end()?>
						
						</div>
					</div>
			</section>
		</main>

		<?php /*	<div class="range">
									<div class="range">
										<h3>Авторизация через социальные сети</h3>
										<ul class="list-inline offset-top-30 text-center">
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
									</div>
								</div>
*/?>