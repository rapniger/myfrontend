<?php
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
?>	
		<main>
			<section class="section-34 section-md-bottom-83 section-bottom-45 bg-pampas">
				<div class="shell">
					<h2 class="divider offset-top-20 text-center">Приветствуем <?php echo Yii::$app->user->identity->name ?>!</h2>
					<div class="range">
						<div class="cell-md-12">
							<?php Pjax::begin()?>
								
								<?php $form = ActiveForm::begin([
									'id' => 'Account-Ajax',
									'action' => '/ajax/account',
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
										<?= $form->field($model, 'name', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t{error}"])->label('Имя *')->input('name', ['value' => Yii::$app->user->identity->name])?>
								
										<?= $form->field($model, 'subname', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t{error}"])->label('Фамилия *')->input('subname', ['value' => Yii::$app->user->identity->subname])?>
										
										<?= $form->field($model,'databirth', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t{error}", 'labelOptions' => [ 'class' => 'control-label' ],])
										->widget(\yii\jui\DatePicker::class, ['language' => 'ru','options'=>['class'=>'form-control','autocomplete'=>'on', 'value' => date('Y-M-d'),],'dateFormat' => 'yyyy-MM-dd','value' => '0000-00-00','clientOptions' =>['changeMonth' => true,'changeYear' => true,'yearRange'=>'1930:2001',],])
										->label('Дата рождения')->input('name', ['value' => Yii::$app->user->identity->databirth]); ?>		
		
									</div>
								</div>
								<div class="range">
									<h3>Контактная информация</h3>
									<div class="range">
										<?= $form->field($model, 'telephone', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t{error}"])->label('Телефон *')->input('telephone', ['value' => Yii::$app->user->identity->telephone])?>
								
										<?= $form->field($model, 'email', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t{error}"])->label('Электронная почта *')->input('email', ['value' => Yii::$app->user->identity->email])?>
											
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
										
										<p>Ваш логин: <br/><b><?php echo Yii::$app->user->identity->login ?></b></p>
										
										<!-- НАДО ПОДУМАТЬ, КАК ЧТОБЫ ПРОШЛА ВАЛИДАЦИЯ ФОРМЫ -->
										
										<?= $form->field($model, 'password_repeat', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{error}\n\t\t\t\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t\t\t</div>"])->passwordInput()->label('Пароль *') ?>
										
										<?= $form->field($model, 'password', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{error}\n\t\t\t\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t\t\t</div>"])->passwordInput()->label('Повтор пароля *') ?>
										
									</div>
								</div>
								<div class="range">
									<h3>Статус учетной записи</h3>
									<div class="range">
										<p>!!!??Yii::$app->user->isGuest??!!!ПРОВЕРКА АККАУНТА, ЕСЛИ НЕ АКТИВИРОВАННЫЙ!!!</p>
										<h4>Срок действия неактивированного аккаунта - 2 дня</h4>
										<p>После регистрации системы обязательным условием является утверждение статуса учетной записи для полноценной работы с ресурсами сайта.</p>
										<p>Чтобы подтвердить учетную запись - пожалуйста, загляните в электронную почту за дальнейшей инструкции.</p>
										<?= Html::submitButton('Активировать аккаунт', ['class' => 'offset-top-30 btn btn-primary btn-sm btn-width-full', 'name' => 'activate-button']) ?>
									</div>
								</div>
								<div class="range">
									<div class="range">
										<div class="cell-md-6">
											
											<?= Html::submitButton('Сохранить', ['class' => 'offset-top-30 btn btn-primary btn-sm btn-width-full', 'name' => 'save-button']) ?>
											
										</div>
										<div class="cell-md-6">
											
											<?= Html::submitButton('Отмена', ['class' => 'offset-top-30 btn btn-primary btn-sm btn-width-full', 'name' => 'cancel-button']) ?>
											
										</div>
									
									</div>
								<?php ActiveForm::end(); ?>
								<?php Pjax::end()?>
								</div>
						</div>
					</div>
			</section>
		</main>

