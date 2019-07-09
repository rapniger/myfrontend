<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm; //сама форма
use yii\widgets\ActiveField; // настройка для формы
use yii\widgets\Pjax;
use yii\widgets\LinkPager;
use yii\widgets\ListView;

$get = Yii::$app->request->get();

if(!empty($get)){
    
    $catchecked = $get['product']['category'];
    
    $sortchecked = $get['product']['price_sort'];
    
}

if(empty($data['items']['filter'])){
    
    $data['items']['filter'] = '22000;65000';
    
    list($data['from'], $data['to']) = explode(";", $data['items']['filter']);

}else if(!empty($data['items']['filter'])){
    
    //var_dump($data['filter']);
    
    list($data['from'], $data['to']) = explode(";", $data['items']['filter']);

}
$form = ActiveForm::begin([
	'id' => 'Filter-Ajax',
	'method' => 'get',
	'action' => '/shop/catalog',
	'options' =>[
		'data-pjax' => true,
		'class' => 'rd-mailform text-left offset-top-20',
		'enctype' => 'multipart/form-data',
		'data-form-output' => 'form-output-global',
		'data-form-type' => 'filter'
	]
]); echo "\n";?>
							<h5 class="txt-matrix text-center">Выбор цен</h5>
							<ul class="offset-top-10">
								<?= $form->field($data['model'], "price_ionslider")->widget(\yii2mod\slider\IonSlider::className(), [
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
                            <h5 class="txt-matrix offset-top-20 text-center">Сортировка цен</h5>
							<ul class="offset-top-10 text-center" style="font-size: 16px;">

    <?php $data['model']->price_sort = $sortchecked;?>
    <?= $form->field($data['model'], 'price_sort')
        ->radioList([
            'asc' => 'По убыванию цены',
            'desc' => 'По возрастанию цены',
        ])->label(false);
    ?>

							</ul>
                            <h5 class="txt-matrix offset-top-20 text-center">Категории памятников</h5>
							<ul class="offset-top-10 text-center" style="font-size: 16px;">
        
        <?php foreach($data['items']['AllCategory'] as $key => $value){
            $i[$value['id']] = $value['name'];
        }?>
        <?php $data['model']->category = $catchecked;?>
        <?= $form->field($data['model'], 'category')
            ->radioList( $i, [
                    'item' => function ($index,$label, $name, $checked, $value){
                        return '<li><label>'.Html::radio($name, $checked, ['value' => $value, 'class' => 'project-status-btn']) . $label . '</label></li>';
                    },
                ])
            ->label(false);?>
            
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
						
<?php /*
 
 <ul class="offset-top-10 text-center" style="font-size: 16px;">
                                <?= $data['model']->price_sort = $sortchecked;?>
								<?= $form->field($data['model'], 'price_sort')
	->radioList([
		'asc' => 'По убыванию цены',
		'desc' => 'По возрастанию цены',
	])->label(false);
		?>
							
							</ul>
							<ul class="offset-top-10 text-center" style="font-size: 16px;">
							    <?= $data['model']->category = $catchecked;?>
							    <?= $form->field($data['model'], 'category')
							    ->radioList(
							        [
							            '0' => 'Все памятники',
							            '1' => $data['items']['AllCategory'][0]['name'],
							            '2' => $data['items']['AllCategory'][1]['name']
							            //'3' => $data['items']['AllCategory'][2]['name']
							        ]
							    )
							    ->label('Категории');?>
                            </ul>
 
 */?>
