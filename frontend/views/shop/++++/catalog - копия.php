<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm; //сама форма
use yii\widgets\ActiveField; // настройка для формы
use yii\widgets\Pjax;
use yii\widgets\LinkPager;
use yii\widgets\ListView;
use yii\helpers\VarDumper;


use yii\grid\GridView;

?>
		<main class="page-content">
		
		<section class="section-34 section-bottom-78">
			<div class="shell">
				<?php Pjax::begin(['id' => 'price-pjax']); echo "\n";?>
				<?php var_dump($_POST);?>
				<div class="text-center">
					<ol class="breadcrumb">
						<li><a href="index.html">Главная</a></li>
						<li><a href="#">Памятники</a></li>
						<li>Эконом-памятники</li>
					</ol>
				</div>
				<h2 class="divider offset-top-30 offset-md-top-40 text-center">КАТАЛОГ</h2>
				<div class="range  bg-pampas offset-md-top-60">
					<div class="cell-md-9 offset-md-top-40">
						<div class="range">
							<div class="cell-xs-6 cell-md-4 offset-md-top-10 offset-md-bottom-10">
								<div class="thumbnail text-center thumbnail-product">
									<a href="singleproduct.html"><img src="/images/shop/me-219_bh.png" alt="" width="240" height="120"></a>
									<div class="caption">
										<div class="h5">
											<a href="" class="txt-matrix">asdasdad </a>
										</div>
										<div class="h4 reveal-inline-block">45345 руб.</div>
										<!--span class="txt-darker reveal-block reveal-lg-inline-block inset-lg-left-5">
											<del>34000 руб.</del>
										</span-->
										<a href="#" class="btn btn-sm btn-primary btn-min-width-210-lg">Добавить в корзину</a>
									</div>
								</div>
							</div>
						</div>
						<div class="range">

							<!--div class="cell-xs-12 cell-md-12 text-center"-->
							<?= ListView::widget([
								'dataProvider' => $data['pages'],
								//'itemView' => '_list', Имя представления (view) для вывода записи
								'itemView' => function ($model, $key, $index, $widget){
										return $this->render('_catalog_list', compact('model'));
									},
								'options' => [
									'tag' => 'div',
									'class' => 'range'
								],
								'layout' => "
								<div class=''>{pager}</div>
								<div class=''>{summary}</div>
								{items}
								<div class=''>{summary}</div>
								<div class=''>{pager}</div>
								",
								'itemOptions' => [
									'tag' => 'div',
									'class'=> 'cell-xs-6 cell-md-4 offset-md-top-10 offset-md-bottom-10'
								],
								'pager' => [       
									'maxButtonCount' => 5,
								],
							]);
							?>	
								<?php 
									/*echo LinkPager::widget([
										'pagination' => $data['pages']
									]);
									echo "\n";
									
									//var_dump($data['pages']);
								?>
							</div>
						</div>
						<div class="range">
							<?php foreach ($data['products'] as $key => $value){ echo "\n";?>
							<div class="cell-xs-6 cell-md-4 offset-md-top-10 offset-md-bottom-10">
								<div class="thumbnail text-center thumbnail-product">
									<a href="singleproduct.html"><img src="<?php echo "/".$data['products'][$key]['img_full']."/".$data['products'][$key]['file'] ?>" alt="" width="240" height="120"></a>
									<div class="caption">
										<div class="h5">
											<a href="" class="txt-matrix"><?php echo $data['products'][$key]['name']?></a>
										</div>
										<div class="h4 reveal-inline-block"><?php echo $data['products'][$key]['price']?> руб.</div>
										<!--span class="txt-darker reveal-block reveal-lg-inline-block inset-lg-left-5">
											<del>34000 руб.</del>
										</span-->
										<a href="#" class="btn btn-sm btn-primary btn-min-width-210-lg">Добавить в корзину</a>
									</div>
								</div>
							</div>
							<?php } echo "\n";?>
						</div>
						<div class="range">
							<div class="cell-xs-12 cell-md-12 text-center">
								<?php 
									echo LinkPager::widget([
										'pagination' => $data['pages']
									]);
								?>
							</div>*/?>
						</div>
					</div>	
					<div class="cell-md-3  offset-md-top-40">
						<?php $form = ActiveForm::begin([
							'id' => 'Price-Ajax',
							'action' => '/shop/catalog',
							'options' =>[
								'data-pjax' => true,
								'class' => 'rd-mailform text-left offset-top-20',
								'enctype' => 'multipart/form-data',
								'data-form-output' => 'form-output-global',
								'data-form-type' => 'price'
							]
						]); echo "\n";?>
							<h5 class="txt-matrix text-center">Сортировка</h5>					
							<ul class="offset-top-10">
								<?= $form->field($data['model'], "price")->widget(\yii2mod\slider\IonSlider::className(), [
										'pluginOptions' => [
											'min' => 12000,
											'max' => 100000,
											'from' => $data['price_param']['from'],
											'to' => $data['price_param']['to'],
											'step' => 1000,
											'type' => 'double',
											'postfix' => ' Руб.',
											'hasGrid' => true,
											'prettify' => false,
											'onChange' => new \yii\web\JsExpression('
												function(data) {
													//console.log(data);
												}
											')
										]
									])->label(false); echo "\n";?>
							</ul>
							<ul class="offset-top-10 text-center">
								<?= $form->field($data['model'], 'price_sort')
											->radioList([
												'SORT_ASC' => 'По убыванию цены',
												'SORT_DESC' => 'По возрастанию цены',
											])->label(false);
									?>
							</ul>		
							<ul class="offset-top-10 text-center">
								<li>
									<?= Html::submitButton('Применить', ['class' => 'btn btn-primary btn-sm btn-min-width-230', 'name' => 'sort-button']) ?>
								</li>
								<li class="offset-top-10">
									<?= Html::a('Сбросить',['/shop/catalog?price-sort=SORT_ASC&price-from=&price-to=&'],['class' => 'btn btn-primary btn-sm btn-min-width-230']) ?>
								</li>
							</ul>
						<?php ActiveForm::end(); echo "\n";?>
						<h5 class="txt-matrix offset-top-20">Категории памятников</h5>
						<ul class="offset-top-10">
							<li><a>Вертикальные памятники</a></li>
							<li><a>Семейные памятники</a></li>
							<li><a>Нестандартные памятники</a></li>
						</ul>
						<h5 class="txt-matrix offset-top-20">Аксессуары к памятникам</h5>
						<ul class="offset-top-10">
							<li><a>Ограды</a></li>
							<li><a>Вазы</a></li>
						</ul>
					</div>	
				</div>
				<?php Pjax::end(); echo "\n";?>
			</div>
		</section>
			
		</main>
		
		<script src="/assets/js/jquery.js"></script>
<?php
/*

array(3) 
{ 
	["data"]=> array(3)
	{
		["UserCode"]=> string(88) "5NOcTBHRe92arZXyBjtYflISW0qqg0W5u1PYc9HXTUG8g_UVfZ8Jn93D8oRtXx1JKFkXIpPPPfDJHe4ZuZwDCA==" 
		["products"]=> array(1) 
		{ 
			["price"]=> string(11) "22000;49000" 
		} 
		["sort-button"]=> string(0) "" 
	}
	["post"]=> int(1) ["sort"]=> string(8) "SORT_ASC"
}


<?= Html::a('Обновить',['/shop/catalog'],['class' => 'btn btn-primary btn-sm btn-min-width-230']) ?>
																							
		<!---
		
Ползунок
php composer.phar require --prefer-dist yii2mod/yii2-ion-slider "*"
or add

"yii2mod/yii2-ion-slider": "*"
to the require section of your composer.json.
		
		-->
*/?>