<?php
use  yii\web\Session;
use yii\helpers\Html;
use yii\widgets\ActiveForm; //сама форма
use yii\widgets\ActiveField; // настройка для формы
use yii\widgets\Pjax;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\widgets\LinkPager;

foreach ($array['stone'] as $key => $value){
	
	$key++;
	
	$stone[$key] = $value['name'];
	
}
$params['stone'] = [
	'promt' => 'Выберите тип камня'
];

foreach ($array['size'] as $key => $value){
	
	$key++;
	
	$size[$key] = $value['size'];
	
}
$params['size'] = [
	'promt' => 'Выберите размер'
];

//var_dump($array['figure']['model']);

foreach($array['figure']['model'] as $key => $value){
	
	//var_dump($value['name']);
	
	$figure_index[$key] = $value['id'];
	
	$figure_label[$key]['name'] = $value['name'];
	
	$figure_label[$key]['img'] = $value['img'];
	
	$figure_name[$key] = $value['name'];
	
}

$params['figure'] = [
	'promt' => 'Выберите фигуру'
];

foreach ($array['completestone'] as $key => $value){
	
	$key++;
	
	$completestone[$key] = $value['name'];
	
}
$params['completestone'] = [
	'promt' => 'Выберите размер'
];


?><?php var_dump($message);?>
		<main class="page-content">
		<h3>
			<?php //var_dump($constructor);?>
		</h3>
		<section class="section-88 bg-pampas">
			<div class="shell-wide text-center text-md-center">
				<h2 class="txt-black offset-top-40 offset-md-top-40">
					Конструктор памятника
					<!-- Responsive-tabs-->
				</h2>
				<div class="responsive-tabs responsive-tabs-default offset-top-40 responsive-tabs-btn text-center">
					<?php Pjax::begin()?>
						<?php $form = ActiveForm::begin([
							'id' => 'Constructor-Ajax',
								'action' => '/shop/constructor',
								'enableAjaxValidation' => true,
								'options' =>[
									'data-pjax' => true,
									'class' => 'rd-mailform text-left offset-top-20',
									'enctype' => 'multipart/form-data',
									'data-form-output' => 'form-output-global',
									'data-form-type' => 'contact'
								]
							]); echo "\n";?>
					
						<div class="text-center text-md-center offset-md-top-20" style="padding: 10px; position: fixed; right: 10px; box-shadow: inset 0 0 0 1px #ad5a55; background-color: #eeebe4;">
							<?= Html::submitButton('Расчитать стоимость', ['class' => 'btn  btn-primary btn-xs', 'name' => 'price-constructor-button']) ?>
							<?php if(isset($messageprice)){?>
								<h4><?php echo $messageprice ?></h4>
							<?php }else{?>
								<h4>0 руб.</h4>
							<?php }?>
						</div>
						
						
						
					
					
					
					<style>
						.btn-constructor{
							display: flex;
							flex-wrap: wrap;
							justify-content: space-around;
							height: 340px;
						}
						.btn-constructor > label > input[type="radio"]{
							display: none;
						}
						.btn-constructor > label {
							display: flex;
							flex-direction: column;
							justify-content: center;
							align-items: center;
							width: 130px;
							height: 160px;
							overflow: hidden;
							-webkit-box-shadow:
								inset 0 0 1px rgba(0,0,0,.8),
								inset 0 2px 0 rgba(255,255,255,.5),
								inset 0 -1px 0 rgba(0,0,0,.4);
							-moz-box-shadow:
								inset 0 0 1px rgba(0,0,0,.8),
								inset 0 2px 0 rgba(255,255,255,.5),
								inset 0 -1px 0 rgba(0,0,0,.4);
							box-shadow:
								inset 0 0 1px rgba(0,0,0,.8),
								inset 0 2px 0 rgba(255,255,255,.5),
								inset 0 -1px 0 rgba(0,0,0,.4);
							-webkit-border-radius: 20px;
							-moz-border-radius: 20px;
							border-radius: 10px;
						}
						.btn-constructor > label > h6{
							position: relative;
							top: 4px;
						}
						.btn-constructor > label > img{
							position: relative;
							top: 12px;
							width: 120px;
							height: 120px;
							transition: 0.1s ease-out;
						}
						.btn-constructor > label:active > img{
							position: relative;
							top: 12px;
							width: 128px;
							height: 128px;
						}
					</style>
					<div class="offset-md-top-40" style="box-shadow: inset 0 0 0 1px #ad5a55;">
						<div class="range">
							<div class="cell-md-12">
								<div class="range">
									<div class="cell-md-2">
										<div class="btn btn-transparent-2 btn-xs cell-md-4">
											<span class="icon icon-md-2 icon-comet fa-clipboard icon-round"></span>
											<div class="offset-top-20">
												<h4>Шаг 1</h4>
												<p class="font-weight-bold">Подбор</p>
											</div>
										</div>
									</div>
									<div class="cell-md-5">
											<?= $form->field($model, 'id_stone', ['template'=>"\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t{hint}\n\t\t\t\t\t\t\t\t\t\t\t{error}"])
												->dropDownList($stone, $params['stone'])
												->label('Тип камня:');?>								
											<?= $form->field($model, 'id_size', ['template'=>"\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t{hint}\n\t\t\t\t\t\t\t\t\t\t\t{error}"])
												->dropDownList($size, $params['size'])
												->label('Размер памятника:');?>								
											<?= $form->field($model, 'id_figure',['template' => "\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t{hint}\n\t\t\t\t\t\t\t\t\t\t\t{error}"])
											->radioList($figure_label,[
												'class' => 'btn-constructor',
												'item' => function ($figure_index, $figure_label, $figure_name){
													$figure_index++;
													$return = '
														<label>
															<h6>'.$figure_label['name'].'</h6>
															<input type="radio" value="'.$figure_index.'" name="'.$figure_name.'"/>
															<img src="/images/figure/'.$figure_label['img'].'"/>
														</label>';
													return $return;
												},
											])
											->label('Выберите фигуру памятника:');?>
											
											<?php 
												echo LinkPager::widget([
													'pagination' => $array['figure']['pages']
												]);
											?>
											
											<?= $form->field($model, 'id_completestone', ['template'=>"\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t{hint}\n\t\t\t\t\t\t\t\t\t\t\t{error}"])
												->dropDownList( $completestone, $params['completestone'])
												->label('Выберите надгробную плиту:');?>
									</div>
									<div class="cell-md-5" style="text-align: center;">
										<img src="/images/tombstone/shop/vertical/1/me-25.png" alt="" style="width: 40%;"/>
									</div>
								</div>
							</div>
						</div>
	
					</div>
					<div class="offset-md-top-40" style="box-shadow: inset 0 0 0 1px #ad5a55;">
						<div class="range">
							<div class="cell-md-2">
								<div class="btn btn-transparent-2 btn-xs cell-md-4">
									<span class="icon icon-md-2 icon-comet fa-pencil-square-o icon-round"></span>
									<div class="offset-top-20">
										<h4>Шаг 2</h4>
										<p class="font-weight-bold">Гравировка</p>
									</div>
								</div>
							</div>
							<div class="cell-md-5">
								<div>
									<h3>Данные о усопшем</h3>
								</div>		
							</div>
							<div class="cell-md-5" style="text-align: center;">
								<img src="/images/tombstone/shop/vertical/1/me-25.png" alt="" style="width: 40%;"/>
							</div>
						</div>
							
					</div>
					<div class="offset-md-top-40" style="">
						<li class="btn btn-transparent-2 btn-xs cell-md-4">
							
							<span class="icon icon-md-2 icon-comet fa-pencil-square-o icon-round"></span>
							<div class="offset-top-20">
								<h4>Шаг 3</h4>
								<p class="font-weight-bold">Установка</p>
							</div>
							
						</li>
							<h3> Установка</h3>
					</div>		
					<div class="offset-md-top-40">
						<li class="btn btn-transparent-2 btn-xs cell-md-4">
							<span class="icon icon-md-2 icon-comet fa-shopping-cart icon-round"></span>
							<div class="offset-top-20">
								<h4>Шаг 4</h4>
								<p class="font-weight-bold">Предзаказ</p>
							</div>
						</li>
						<h3> Итого: руб.</h3>
					</div>
				</div>
					<?php ActiveForm::end(); echo"\n"; ?>
					<?php Pjax::end(); echo"\n";?>
				</div>
			</div>
		</section>	
		</main>

<?/*
		<main class="page-content">
		<section class="section-88 bg-pampas">
			<div class="shell-wide text-center text-md-center">
				<h2 class="txt-black offset-top-40 offset-md-top-40">
					Конструктор памятника
					<!-- Responsive-tabs-->
				</h2>
				<div class="responsive-tabs responsive-tabs-default offset-top-40 responsive-tabs-btn text-center">
					<ul class="resp-tabs-list">
						<li class="btn btn-transparent-2 btn-xs cell-md-4">
							<span class="icon icon-md-2 icon-comet fa-clipboard icon-round"></span>
							<div class="offset-top-20">
								<h4>Шаг 1</h4>
								<p class="font-weight-bold">Подбор памятника</p>
							</div>
						</li>
						<li class="btn btn-transparent-2 btn-xs cell-md-4">
							<span class="icon icon-md-2 icon-comet fa-pencil-square-o icon-round"></span>
							<div class="offset-top-20">
								<h4>Шаг 2</h4>
								<p class="font-weight-bold"></p>
							</div>
						</li>
						<li class="btn btn-transparent-2 btn-xs cell-md-4">
							<span class="icon icon-md-2 icon-comet fa-pencil-square-o icon-round"></span>
							<div class="offset-top-20">
								<h4>Шаг 3</h4>
								<p class="font-weight-bold">Установка памятника</p>
							</div>
						</li>
						<li class="btn btn-transparent-2 btn-xs cell-md-4">
							<span class="icon icon-md-2 icon-comet fa-shopping-cart icon-round"></span>
							<div class="offset-top-20">
								<h4>Шаг 4</h4>
								<p class="font-weight-bold">Предзаказ</p>
							</div>
						</li>
					</ul>
					
					<?php Pjax::begin()?>
							
						<?php $form = ActiveForm::begin([
							'id' => 'Constructor-Ajax',
								'action' => '/ajax/constructor',
								'enableAjaxValidation' => true,
								'options' =>[
									'class' => 'rd-mailform text-left offset-top-20',
									'enctype' => 'multipart/form-data',
									'data-form-output' => 'form-output-global',
									'data-form-type' => 'contact'
								]
							]); echo "\n";?>
								<div class="resp-tabs-container">
									<div>
										<div class="range">
											<div class="cell-md-5">
										
												
												<?= $form->field($constructor, 'stone')->dropDownList([
													function(){}
												])->label('Тип камня:');?>
											<?/*	<?= $form->field($constructor, 'stone')->dropDownList([
													$stone[0]['id'] => $stone[0]['name'].'- черный: +'.$stone[0]['price'].' руб.',
													$stone[1]['id'] => $stone[1]['name'].'- черный: +'.$stone[1]['price'].' руб.',
													$stone[2]['id'] => $stone[2]['name'].'- черный: +'.$stone[2]['price'].' руб.',
													$stone[3]['id'] => $stone[3]['name'].'- черный: +'.$stone[3]['price'].' руб.',
													$stone[4]['id'] => $stone[4]['name'].'- черный: +'.$stone[4]['price'].' руб.',
													$stone[5]['id'] => $stone[5]['name'].'- черный: +'.$stone[5]['price'].' руб.',
												])->label('Тип камня:');?>
											*//*?>	
												<?= $form->field($constructor, 'size')->dropDownList([
													$size[0]['id'] => $size[0]['size'].'+ 0 руб.',
													$size[1]['id'] => $size[1]['size'].': +'.$size[1]['price'].' руб.',
													$size[2]['id'] => $size[2]['size'].': +'.$size[2]['price'].' руб.',
													$size[3]['id'] => $size[3]['size'].': +'.$size[3]['price'].' руб.',
													$size[4]['id'] => $size[4]['size'].': +'.$size[4]['price'].' руб.',
													$size[5]['id'] => $size[5]['size'].': +'.$size[5]['price'].' руб.',
													$size[6]['id'] => $size[6]['size'].': +'.$size[6]['price'].' руб.',
													$size[7]['id'] => $size[7]['size'].': +'.$size[7]['price'].' руб.',
													$size[8]['id'] => $size[8]['size'].': +'.$size[8]['price'].' руб.',
													$size[9]['id'] => $size[9]['size'].': +'.$size[9]['price'].' руб.',
													$size[10]['id'] => $size[10]['size'].': +'.$size[10]['price'].' руб.',
													$size[11]['id'] => $size[11]['size'].': +'.$size[11]['price'].' руб.',
													$size[12]['id'] => $size[12]['size'].': +'.$size[12]['price'].' руб.',
												])->label("Размер памятника:");?>
												
											</div>
											<div class="cell-md-7" style="text-align: center;">
												<img src="/images/tombstone/shop/vertical/1/me-25.png" alt="" style="width: 40%;"/>
											</div>
										</div>
									</div>
									<div>
										<div class="range">
											<div class="cell-md-5">
												<div>
													<h3>Данные о усопшем</h3>
												<?= $form->field($constructor, 'size', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{error}\n\t\t\t\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t\t\t</div>"])->passwordInput()->label('Фамилия') ?>
												
												<?= $form->field($constructor, 'size', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{error}\n\t\t\t\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t\t\t</div>"])->passwordInput()->label('Имя') ?>
												
												<?= $form->field($constructor, 'size', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{error}\n\t\t\t\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t\t\t</div>"])->passwordInput()->label('Отчество') ?>
												
												<?= $form->field($constructor,'size', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t{error}", 'labelOptions' => [ 'class' => 'control-label' ],])
												->widget(\yii\jui\DatePicker::class, ['language' => 'ru','options'=>['class'=>'form-control','autocomplete'=>'on', 'value' => date('Y-M-d'),],'dateFormat' => 'yyyy-MM-dd','value' => '0000-00-00','clientOptions' =>['changeMonth' => true,'changeYear' => true,'yearRange'=>'1930:2001',],])
												->label('Дата рождения'); ?>
										
												<?= $form->field($constructor,'size', ['template' => "\t\t\t\t\t\t\t\t\t\t\t<div class='cell-sm-6'>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class='form-group'>\n\t\t\t\t\t\t\t\t\t\t\t\t\t{label}\n\t\t\t\t\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t{error}", 'labelOptions' => [ 'class' => 'control-label' ],])
												->widget(\yii\jui\DatePicker::class, ['language' => 'ru','options'=>['class'=>'form-control','autocomplete'=>'on', 'value' => date('Y-M-d'),],'dateFormat' => 'yyyy-MM-dd','value' => '0000-00-00','clientOptions' =>['changeMonth' => true,'changeYear' => true,'yearRange'=>'1930:2001',],])
												->label('Дата смерти'); ?>
												
												</div>	
												
												<?= $form->field($constructor, 'size')->dropDownList([
													'1' => 'Вверх - слева',
													'2' => 'Вверх - справа',
													'3' => 'Вверх - посередине',
													'4' => 'Середина - слева',
													'5' => 'Середина - справа',
													'6' => 'Середина - посередине',
													'7' => 'Низ - слева',
													'8' => 'Середина - справа',
													'9' => 'Низ - посередине',
												])->label('Расположение:');?>
												
												<?= $form->field($constructor, 'size')->dropDownList([
													'1' => 'Фамилия Имя Отчество. Шрифт: название',
													'2' => 'Фамилия Имя Отчество. Шрифт: название',
													'3' => 'Фамилия Имя Отчество. Шрифт: название',
													'4' => 'Фамилия Имя Отчество. Шрифт: название',
												])->label('Шрифт:');?>
												
												<?= $form->field($constructor, 'size')->dropDownList([
													'1' => 'Портрет на граните(25*18см) ч/б',
													'1' => 'Портрет на граните(25*30см) ч/б',
													'1' => 'Портрет на граните(30*40см) ч/б',
													'1' => 'Портрет на граните(40*50см) ч/б',
													'1' => 'Портрет на граните(25*18см) цветной',
													'1' => 'Портрет на граните(25*30см) цветной',
													'1' => 'Портрет на граните(30*40см) цветной',
													'1' => 'Портрет на граните(40*50см) цветной',
													'2' => 'Портрет на мраморе (25*18см) на гранитной доске',
													'2' => 'Портрет на мраморе (25*30см) на гранитной доске',
													'2' => 'Портрет на мраморе (30*40см) на гранитной доске',
													'2' => 'Портрет на мраморе (40*50см) на гранитной доске',
													'2' => 'Портрет на мраморе (40*50см) на гранитной доске - полуовал',
													'2' => 'Портрет на мраморе (40*50см) на гранитной доске - полный овал',
													'3' => 'Фамилия Имя Отчество. Шрифт: название',
													'4' => 'Фамилия Имя Отчество. Шрифт: название',
												])->label('Портреты:');?>
												
												
												
												
											</div>
											<div class="cell-md-7" style="text-align: center;">
												<img src="/images/tombstone/shop/vertical/1/me-25.png" alt="" style="width: 40%;"/>
											</div>
									</div>
									<div>
										Оформить предзаказ
									</div>	
								</div>
								
								<div>
									<h3> Итого: руб.</h3>
								</div>
							</div>
						<?php ActiveForm::end(); echo"\n"; ?>
					<?php Pjax::end(); echo"\n";?>
				</div>
			</div>
		</section>
		
			
		</main>

*/?>

