<?php
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;
use yii\widgets\LinkPager;

?>

		<section class="section-34 section-bottom-90">
			<div class="shell">
				<h2 class="divider offset-top-40 offset-md-top-80 text-center">Отзывы</h2>
				<div class="range offset-top-40">
					<?php foreach ($comments as $item){?>
					<div class="cell-md-4 offset-top-50">
						<div class="inset-sm-right-20">
							<h3><?php echo $item['name'].' '.$item['subname']?></h3>
							<p class="small"><?php echo $item['data']?></p>
							<p class="offset-top-22"><?php echo $item['message']?></p>
						</div>
					</div>
					<?php
					}
					?>
				</div>
				<div class="text-center offset-sm-top-80 offset-top-60">
				<?php 
					echo LinkPager::widget([
						'pagination' => $pages
					]);
				?>
				</div>
			</div>	
		</section>
		<section id="feedback-1" class="section-34">
				<div class="shell">
					<h2 class="text-center divider">Написать отзыв</h2>
					<div class="range offset-top-50">
						<div class="cell-lg-8 cell-lg-preffix-2">
						<!-- RD Mailform-->
						<?php Pjax::begin(['id' => 'contact-pjax']); echo "\n";?>
							<?php $form = ActiveForm::begin([
								'id' => 'Comment-Ajax',
								'action' => '/comment/comments',
								'enableAjaxValidation' => true,
								'validationUrl' => '/comment/validate-comment',
								'options' =>[
									'data-pjax' => true,
									'class' => 'rd-mailform text-left offset-top-20',
									'enctype' => 'multipart/form-data',
									'data-form-output' => 'form-output-global',
									'data-form-type' => 'comment'
								]
							]); ?>
							<div class="range">
								<?php if($messagecomment == false){?>
								<div class="cell-sm-6">
									<div class="form-group">
										<?= $form->field($comment, 'name', ['template' => "{label}\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t{error}", 'labelOptions' => ['class' => 'form-label'],])->label('Имя *'); ?>
									</div>
								</div>
								<div class="cell-sm-6 offset-top-48 offset-sm-top-0">
									<div class="form-group">
										<?= $form->field($comment, 'subname', ['template' => "{label}\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t{error}", 'labelOptions' => ['class' => 'form-label'],])->label('Фамилия *'); ?>
									</div>
								</div>
								<div class="cell-xs-12 offset-top-48">
									<div class="form-group">
										<?= $form->field($comment, 'message', ['template' => "{label}\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t{error}", 'labelOptions' => ['class' => 'form-label'],])->label('Сообщение *')->textarea(['rows' => '6']) ?>
									</div>
								</div>
								<div class="cell-xs-12 offset-top-48">
									<div class="form-group text-center">
										<?= $form->field($comment, 'verifyCode')
											->widget(\himiklab\yii2\recaptcha\ReCaptcha::className(),
											['siteKey' => '6Lf8bqgUAAAAACqQhCfAXz2H3CLqIEAq-AyE6bT4',
											'widgetOptions' => ['class' => 'div-recaptcha text-center']])
											->label('Просим пройти верификацию')
										?>
									</div>
								</div>
								<div class="cell-xs-12 text-center offset-top-27">
									<?= Html::submitButton('Отправить', ['class' => 'btn btn-primary btn-sm btn-min-width-230', 'name' => 'comment-button']) ?>
								</div>
								<?php } else if($messagecomment == 'ok'){?>
								<div class="cell-xs-12 offset-top-48">
									<div class="form-group text-center">
										<h3>Отзыв опубликован!</h3>
									</div>
								</div>
								<?php } else if($messagecomment == 'no'){?>
								<div class="cell-xs-12 offset-top-48">
									<div class="form-group">
										<h3>Произошла ошибка!</h3>
										<p>Обратитесь за помощью к администратору сайта</p>
									</div>
								</div>
								<?php } ?>
							</div>
					<?//		<?= $form->errorSummary($comment); ?>
							<?php ActiveForm::end(); ?>
						<?php Pjax::end()?>
						</div>
					</div>
				</div>
			</section>
		
		<script src="/assets/js/jquery.js"></script>