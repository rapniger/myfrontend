<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm; //сама форма
use yii\widgets\ActiveField; // настройка для формы
use yii\widgets\Pjax;
use yii\widgets\LinkPager;
use yii\widgets\ListView;
use yii\helpers\VarDumper;

$get = Yii::$app->request->get();

if(!isset($get['products']['price'])){

	$data['from'] = 22000;
	
	$data['to'] = 65000;
	
}else{
	
	list($data['from'], $data['to']) = explode(";", $get['products']['price']);
		
}
?>
<?php $form = ActiveForm::begin([
	'id' => 'Price-Ajax',
	'method' => 'get',
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
	'from' => $data['from'],
	'to' => $data['to'],
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
])->label(false);?>
							</ul>
							<ul class="offset-top-10 text-center">
								<?= $form->field($data['model'], 'price_sort')
	->radioList([
		'asc' => 'По убыванию цены',
		'desc' => 'По возрастанию цены',
	])->label(false);
		?>
							
							</ul>		
							<ul class="offset-top-10 text-center">
								<li>
									<?= Html::submitButton('Применить', ['class' => 'btn btn-primary btn-sm btn-min-width-230', 'name' => 'sort-button']) ?>
								
								</li>
								<li class="offset-top-10">
									<?= Html::a('Сбросить',['/shop/catalog'],['class' => 'btn btn-primary btn-sm btn-min-width-230']) ?>
								
								</li>
							</ul>
						<?php ActiveForm::end(); echo "\n";?>