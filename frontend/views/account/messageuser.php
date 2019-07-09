<?php
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;
?>	
		<main>
			<section class="section-34 section-md-bottom-83 section-bottom-45">
				<div class="shell">
					<h2 class="divider offset-top-20 text-center">Приветствуем <?php echo Yii::$app->user->identity->name ?>!</h2>
					<div class="range">
						<div class="cell-md-8">
							<?php foreach ($messages as  $items){?>
								<?php foreach ($items as $key => $value){?>
									
							<div class="section-30 inset-left-10 inset-right-10 inset-md-left-30 inset-md-right-30 <?php if(!empty($items[$key]['id_admin'])) echo 'text-right';?>">
								<div class="bg-pampas section-30 inset-md-left-30 inset-md-right-30">
									<h6><?php echo $items[$key]['data'];?></h6>
									<?php if(!empty($items[$key]['id_admin'])) echo '<h5>менеджер</h5>';?>
									<p><?php echo $items[$key]['message'];?></p>
								</div>
							</div>
								<?php }?>
							<?php }?>
							
							<div class="text-center">
							<?php 
								echo LinkPager::widget([
									'pagination' => $pages
							]);
							?>
							</div>
							<?php if ($message == false){?>
							<?php Pjax::begin(['id' => 'signin-pjax']); echo "\n";?>
								<?php $form = ActiveForm::begin([
									'id' => 'Authorize-Ajax',
									'action' => '/account/message',
									'enableAjaxValidation' => true,
									'validationUrl' => '/account/validate-message',
									'options' =>[
										'data-pjax' => true,
										'class' => 'rd-mailform text-left offset-top-20',
										'enctype' => 'multipart/form-data',
										'data-form-output' => 'form-output-global',
										'data-form-type' => 'usermessage'
									]
							]); ?>
								<div class="cell-xs-12 offset-top-48">
									<div class="form-group">
										<?= $form->field($messageuser, 'message', ['template' => "{label}\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t{error}", 'labelOptions' => ['class' => 'form-label'],])->label('Сообщение *')->textarea(['rows' => '6']) ?>
									</div>
								</div>
								<div class="cell-xs-12 text-center offset-top-27">
									<?= Html::submitButton('Отправить', ['class' => 'btn btn-primary btn-sm btn-min-width-230', 'name' => 'message-button']) ?>
								</div>
								<?php ActiveForm::end(); echo "\n";?>
							<?php Pjax::end()?>
							<?php }else if($message == 'ok'){ ?>
							<h3>Сообщение отправлено!</h3>
							<?php }else if($message == 'no'){?>
							<h3>Внутренняя ошибка сервера! Пожалуйста, свяжитесь с администрацией сайта</h3>
							<?php }?>
						</div>
						<div class="cell-md-4">
							<div class="inset-md-left-25">
							<div class="range">
								<div class="cell-xs-6 cell-sm-3 cell-md-12 cell-xs-push-1">
									<h5 class="txt-matrix">Мы в социальных сетях</h5>
									<ul class="list-inline list-inline-variant-4 offset-top-7">
										<li><a href="#" class="icon icon-xxs icon-darker fa-facebook"></a></li>
										<li><a href="#" class="icon icon-xxs icon-darker fa-vk"></a></li>
										<li><a href="#" class="icon icon-xxs icon-darker fa-odnoklassniki"></a></li>
									</ul>
								</div>
								<div class="cell-xs-6 cell-sm-3 cell-md-12 offset-top-36 offset-sm-top-0 offset-md-top-36 cell-xs-push-3 cell-md-push-2">
									<h5 class="txt-matrix">Телефоны</h5>
									<ul class="offset-top-10">
										<li><a href="tel:#" class="txt-black">1-800-1234-567</a></li>
										<li><a href="tel:#" class="txt-black">1-800-987-1234</a></li>
									</ul>
								</div>
								<div class="cell-xs-6 cell-sm-3 cell-md-12 offset-top-36 offset-xs-top-0 offset-md-top-36 cell-xs-push-2 cell-md-push-3">
									<h5 class="txt-matrix">E-mail</h5>
									<a href="/cdn-cgi/l/email-protection#c7e4" class="txt-matrix offset-top-10 reveal-inline-block"><span class="__cf_email__" data-cfemail="11787f777e5175747c7e7d787f7a3f7e6376">ritgran@yandex.ru</span></a>
								</div>
								<div class="cell-xs-6 cell-sm-4 cell-md-12 cell-xs-push-5">
									<h5 class="txt-matrix offset-top-36">Режим работы</h5>
									<p class="offset-top-7">С понедельника по пятницу 9:00–18:00</p>
									<p class="offset-top-0">Суббота-воскресенье выходной </p>
								</div>
							</div>
						</div>
						</div>
					</div>
					<div class="range">
						<div class="cell-md-12">
							
						</div>
					</div>
			</section>
		</main>

