<?php
use  yii\web\Session;
use yii\helpers\Html;
use yii\widgets\ActiveForm; //сама форма
use yii\widgets\ActiveField; // настройка для формы
use yii\widgets\Pjax;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
?>	
		<main class="page-content">
		
		<section class="section-34 section-md-bottom-83 section-bottom-45">
			<div class="shell">
				<h2 class="divider offset-top-80 text-center">ОБРАТНАЯ СВЯЗЬ</h2>
				<div class="range">
					<div class="cell-md-8">
						<!-- RD Mailform-->
						<?php Pjax::begin(['id' => 'contact-pjax']); echo "\n";?>
							<?php $form = ActiveForm::begin([
								'id' => 'Contact-Ajax',
								'action' => '/contact/contact',
								'enableAjaxValidation' => true,
								'validationUrl' => '/contact/validate-contact',
								'options' =>[
									'data-pjax' => true,
									'class' => 'rd-mailform text-left offset-top-20',
									'enctype' => 'multipart/form-data',
									'data-form-output' => 'form-output-global',
									'data-form-type' => 'contact'
								]
							]); ?>
							<div class="range">
								<?php if($messagecontact == false){ ?>
								<div class="cell-sm-6">
									<div class="form-group">
										<?= $form->field($contact, 'name', ['template' => "{label}\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t{error}", 'labelOptions' => ['class' => 'form-label'],])->label('Имя *'); ?>
									</div>
								</div>
								<div class="cell-sm-6 offset-top-48 offset-sm-top-0">
									<div class="form-group">
										<?= $form->field($contact, 'subname', ['template' => "{label}\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t{error}", 'labelOptions' => ['class' => 'form-label'],])->label('Фамилия *'); ?>
									</div>
								</div>
								<div class="cell-sm-6 offset-top-48">
									<div class="form-group">
										<?= $form->field($contact, 'telephone', ['template' => "{label}\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t{error}", 'labelOptions' => ['class' => 'form-label'],])->label('Телефон *'); ?>
									</div>
								</div>
								<div class="cell-sm-6 offset-top-48">
									<div class="form-group">
										<?= $form->field($contact, 'email', ['template' => "{label}\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t{error}", 'labelOptions' => ['class' => 'form-label'],])->label('Электронная почта *'); ?>
									</div>
								</div>
								<div class="cell-xs-12 offset-top-48">
									<div class="form-group">
										<?= $form->field($contact, 'message', ['template' => "{label}\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t{error}", 'labelOptions' => ['class' => 'form-label'],])->label('Сообщение *')->textarea(['rows' => '6']) ?>
									</div>
								</div>
								<div class="cell-xs-12 offset-top-48">
									<div class="form-group text-center">
										<?= $form->field($contact, 'verifyCode')
											->widget(\himiklab\yii2\recaptcha\ReCaptcha::className(),
											['siteKey' => '6Lf8bqgUAAAAACqQhCfAXz2H3CLqIEAq-AyE6bT4',
											'widgetOptions' => ['class' => 'div-recaptcha text-center']])
											->label('Просим пройти верификацию')
										?>
									</div>
								</div>
								<div class="cell-xs-12 text-center offset-top-27">
									<?= Html::submitButton('Отправить', ['class' => 'btn btn-primary btn-sm btn-min-width-230', 'name' => 'contact-button']) ?>
								</div>
							</div>
							<?php }else if($messagecontact == 'ok'){?>
							<div class="cell-xs-12 text-center offset-top-30">
								<h3>Сообщение отправлено!</h3>
							</div>
							<?php }else if($messagecontact == 'no'){ ?>
							<div class="cell-xs-12 text-center offset-top-30">
								<h3>Сообщение не отправлено!</h3>
							</div>
							<?php } ?>

<?//							<?= $form->errorSummary($contact); ?>
							<?php ActiveForm::end(); ?>
						<?php Pjax::end()?>
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
									<a href="/cdn-cgi/l/email-protection#c7e4" class="txt-matrix offset-top-10 reveal-inline-block"><span class="__cf_email__" data-cfemail="11787f777e5175747c7e7d787f7a3f7e6376">[email&#160;protected]</span></a>
								</div>
								<div class="cell-xs-6 cell-sm-3 cell-md-12 offset-top-36 offset-sm-top-0 offset-md-top-36 cell-xs-push-4">
									<h5 class="txt-matrix">Адреса</h5>
									<address class="address offset-top-7">
										<p>Ростовская область,<br>г. Ростов-на-Дону, пр. 40-летия Победы 108</p>
										<p>Ростовская область,<br>г. Аксай, ул. Садовая 33</p>
										<p>Ростовская область,<br>г. Аксай, ул. Шевченко 154</p>
									</address>
								</div>
								<div class="cell-xs-6 cell-sm-4 cell-md-12 cell-xs-push-5">
									<h5 class="txt-matrix offset-top-36">Режим работы</h5>
									<p class="offset-top-7">С понедельника по пятницу 9:00–18:00</p>
									<p class="offset-top-0">Суббота-воскресенье </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		</main>
		
		<!--script src="/assets/js/jquery.js"></script-->