<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm; //сама форма
use yii\widgets\ActiveField; // настройка для формы
use yii\widgets\Pjax;
use yii\widgets\LinkPager;
use yii\widgets\ListView;
use yii\helpers\VarDumper;

?>
		<main class="page-content">
		
		<section class="section-34 section-bottom-78">
			<div class="shell">
				<?php Pjax::begin(['id' => 'price-pjax']); echo "\n";?>
				<div class="text-center">
					<ol class="breadcrumb">
						<li><a href="/index/index/">Главная</a></li>
						<li><a href="/shop/catalog">Памятники</a></li>
						<li>Все памятники</li>
					</ol>
				</div>
				<h2 class="divider offset-top-30 offset-md-top-40 text-center">КАТАЛОГ</h2>
				<div class="range  bg-pampas offset-md-top-60 offset-xs-top-60">
					<div class="cell-md-3  offset-md-top-40">
						<?php echo $this->render('_search', compact('searchPrice', 'data'))?>
						<h5 class="txt-matrix offset-top-20">Категории памятников</h5>
						<ul class="offset-top-10">
							<li><a href="/shop/catalog?category=1">Вертикальные памятники</a></li>
							<li><a href="/shop/catalog?category=2">Семейные памятники</a></li>
							<li><a>Нестандартные памятники</a></li>
						</ul>
						<h5 class="txt-matrix offset-top-20">Аксессуары к памятникам</h5>
						<ul class="offset-top-10">
							<li><a>Ограды</a></li>
							<li><a>Вазы</a></li>
						</ul>
					</div>
					<div class="cell-md-9 offset-md-top-40 offset-xs-top-40">
							<?= ListView::widget([
								'dataProvider' => $data['items'],
								//'itemView' => '_list', Имя представления (view) для вывода записи
								'itemView' => function ($model, $key, $index, $widget){
										return $this->render('_catalog_list', compact('model'));
									},
								'options' => [
									'tag' => 'div',
									'class' => 'range'
								],
								'layout' => "
								<div class='cell-xs-12 cell-md-12 text-center'>\n{pager}\n\t\t\t\t\t\t\t\t</div>
								<div class='cell-xs-12 cell-md-12 text-center'>\n{summary}\n\t\t\t\t\t\t\t\t</div>
								{items}
								<div class='cell-xs-12 cell-md-12 text-center'>\n{summary}\n\n\t\t\t\t\t\t\t\t</div>
								<div class='cell-xs-12 cell-md-12 text-center'>\n{pager}\n\t\t\t\t\t\t\t\t</div>
								",
								'itemOptions' => [
									'tag' => 'div',
									'class'=> 'cell-xs-6 cell-md-4 offset-md-top-10 offset-xs-top-10 offset-md-bottom-10'
								],
								'pager' => [       
									'maxButtonCount' => 4,
								],
							]);
							?>
					
					</div>		
				</div>
				<?php Pjax::end(); echo "\n";?>
			</div>
		</section>
			
		</main>
		
		<script src="/assets/js/jquery.js"></script>
<?php
/*																	
		<!---
		
Ползунок
php composer.phar require --prefer-dist yii2mod/yii2-ion-slider "*"
or add

"yii2mod/yii2-ion-slider": "*"
to the require section of your composer.json.
		
		-->
*/?>