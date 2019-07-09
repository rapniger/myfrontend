<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm; //сама форма
use yii\widgets\Pjax;
?>	
		<header>
			<nav class="navbar navbar-default navbar-fixed-top container">
			<ul class="nav nav-pills nav-justified list-inline list-unstyled text-center" role="navigation">
				<?php if (Yii::$app->user->isGuest){?>
				
				<li class="text-center">
					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalAuth">
						<span class="glyphicon glyphicon-log-in"></span> Войти
					</button>
				</li>
				<li class="text-center">
					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalSign">
						<span class="glyphicon glyphicon-share"></span> Регистрация
					</button>
				</li>
				<?php } else if(!Yii::$app->user->isGuest){?>
				
				<li class="text-center">
					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalAddData">
						<span class="glyphicon glyphicon-paste"></span> Добавить запись
					</button>
				</li>
				<li class="text-center">
					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalAuth">
						<span class="glyphicon glyphicon-log-out"></span> Выйти
					</button>
				</li>
				<?php } ?>
			</ul>
			</nav>
		</header>
 		<section style="height: 100vh;">
			<div class="container-fluid">
			<?php if (Yii::$app->user->isGuest){?>
			
			<!-- Модальные окна -->
			<div class="modal fade" id="myModalAuth" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Авторизация</h4>
						</div>
						<div class="modal-body">
						<?php Pjax::begin()?>
								
							<?php $form = ActiveForm::begin([
								'id' => 'auth-ajax',
								'action' => '/map/ajaxauthorize',
								'enableAjaxValidation' => true,
								'options' =>[
									//'class' => 'rd-mailform text-left offset-top-20',
									'enctype' => 'multipart/form-data',
									'data-form-output' => 'form-output-global',
									'data-form-type' => 'contact'
								]
							]); ?>
							
							<?= $form->field($authdata, 'login', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{error}\n\t\t\t\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t\t\t</div>"])->label('Логин *') ?>
							
							<?= $form->field($authdata, 'password', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{error}\n\t\t\t\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t\t\t</div>"])->passwordInput()->label('Пароль *') ?>
										
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
							
							<?= Html::submitButton('Войти', ['class' => 'btn btn-primary', 'name' => 'auth-button']) ?>	
							
						</div>
						
							<?php ActiveForm::end(); ?>
							
						<?php Pjax::end()?>
					</div>
				</div>
			</div>
			<div class="modal fade" id="myModalSign" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Регистрация</h4>
						</div>
						<div class="modal-body">
							<?php Pjax::begin()?>
								
							<?php $form = ActiveForm::begin([
								'id' => 'reg-ajax',
								'action' => '/ajax/signin',
								'enableAjaxValidation' => true,
								'enableClientValidation'=>true,
								'validateOnBlur'=>true,
								'validateOnChange'=>true,
								'options' =>[
									//'class' => 'rd-mailform text-left offset-top-20',
									'enctype' => 'multipart/form-data',
									'data-form-output' => 'form-output-global',
									'data-form-type' => 'contact'
								]
							]); ?>
							
							<?= $form->field($regdata, 'name', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{error}\n\t\t\t\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t\t\t</div>"])->label('Имя *') ?>
							
							<?= $form->field($regdata, 'login', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{error}\n\t\t\t\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t\t\t</div>"])->label('Логин *') ?>
							
							<?= $form->field($regdata, 'password', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{error}\n\t\t\t\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t\t\t</div>"])->passwordInput()->label('Пароль *') ?>
							
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
							<?= Html::submitButton('Сохранить', ['class' => 'offset-top-30 btn btn-primary btn-sm btn-width-full', 'name' => 'save-button']) ?>
											
						</div>
						
						<?php ActiveForm::end(); ?>
						<div class="modal-footer">
							
							<?= $time?>
							
						</div>
						
						<?php Pjax::end()?>
					</div>
				</div>
			</div>
			<?php } else if(!Yii::$app->user->isGuest){?>
			
			<!-- Модальные окна -->
			<div class="modal fade" id="myModalAddData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Форма добавления записи</h4>
						</div>
						<div class="modal-body">
						<?php Pjax::begin()?>
								
							<?php $form = ActiveForm::begin([
								'id' => 'addData-ajax',
								'action' => '/map/ajaxadddata',
								'enableAjaxValidation' => true,
								'options' =>[
									//'class' => 'rd-mailform text-left offset-top-20',
									'enctype' => 'multipart/form-data',
									'data-form-output' => 'form-output-global',
									'data-form-type' => 'contact'
								]
							]); ?>
							
							<?= $form->field($regdata, 'name', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{error}\n\t\t\t\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t\t\t</div>"])->label('Имя *') ?>
							
							<?= $form->field($regdata, 'login', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{error}\n\t\t\t\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t\t\t</div>"])->label('Логин *') ?>
							
							<?= $form->field($regdata, 'password', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{error}\n\t\t\t\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t\t\t</div>"])->passwordInput()->label('Пароль *') ?>
							
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
							<?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary', 'name' => 'save-button']) ?>	
						</div>
						
						<?php ActiveForm::end(); ?>
						
						<?php Pjax::end()?>
					</div>
				</div>
			</div>
			<?php }?>
			</div>
			<div id="map" style="width: 100%; height: 100%;"></div>
		</section>