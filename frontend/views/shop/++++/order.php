<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm; //сама форма
use yii\widgets\ActiveField; // настройка для формы
use yii\widgets\Pjax;

//var_dump(Yii::$app->session['cart']);
?>

		<main class="page-content">
			<section class="section-34 section-bottom-78">
				<?php Pjax::begin(['id' => 'order-pjax']); echo "\n";?>
					<div class="shell">
						<h2 class="divider offset-top-40 offset-md-top-80 text-center">
							КОРЗИНА
						</h2>
						<div class="range">
<?php if(!empty($data['data'])){?>
							<div class="cell-xs-12">
								<div class="table-cart table-responsive">
									<table class="table text-left table-primary table-2">
										<thead>
											<tr>
												<td>
												</td>
												<td>
													№
												</td>
												<td>
													Наименование
												</td>
												<td>
													Сумма
												</td>
											</tr>
										</thead>
<?php foreach ($data['data'] as $key => $value){?>
<?php $s[] = $data['data'][$key]['price']; $data['data'][$key]['position'] = $key;?>
<?php $form = ActiveForm::begin(['id' => 'Order-Ajax', 'action' => '/shop/order','options' =>['data-pjax' => true,'enctype' => 'multipart/form-data',]]);echo "\n";?>
										<tbody>
											<tr>
												<td>
<?= $form->field($data['model'], 'id',['template' => "\t\t\t\t\t\t\t\t\t\t\t\t\t{input}"])->hiddenInput(['value' => $data['data'][$key]['position']])->label(false); echo"\n";?>
													<?= Html::submitButton('', ['class' => 'icon fa-trash icon-xs-3 icon-silver', 'name' => 'delete-order-button-'.$data['data'][$key]['position']]); echo"\n"; ?>
												</td>
												<td>
													<?php echo $data['data'][$key]['sku']."\n"?>
												</td>
												<td>
													<a href="/shop/item?product=<?php echo $data['data'][$key]['id']?>" target="_blank">
														<?php echo $data['data'][$key]['name']."\n"?>
													</a>
												</td>
												<td>
													<?php echo $data['data'][$key]['price']."\n"?>
												</td>
											</tr>
										</tbody>										
<?php ActiveForm::end(); echo "\n";?>
<?php }?>
									</table>

								</div>
							</div>
							<div class="cell-lg-4 cell-sm-6 cell-lg-preffix-4 offset-xs-top-90">
								<div class="table-responsive">
									<table class="table text-left table-dark table-striped">
										<thead>
											<tr>
												<th>
													Предварительный заказ
												</th>
												<th>
												</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th>
													Итого
												</th>
												<th>
													<?php if(!empty($sum)){echo $sum.' 000 руб.';}else{echo '0 руб.';}?>
												</th>
											</tr>
										</tbody>
									</table>
								</div>
<?php $form = ActiveForm::begin(['id' => 'Order-Ajax', 'action' => '/shop/add-order','options' =>['data-pjax' => true,'enctype' => 'multipart/form-data',]]);echo "\n";?>
<?= $form->field($data['model'], 'detail',['template' => "\t\t\t\t\t\t\t\t\t\t\t\t\t{input}"])->hiddenInput(['value' => $data['data']])->label(false); echo"\n";?>
								<?= Html::submitButton('Заказать', ['class' => 'btn btn-primary btn-sm btn-width-full', 'name' => 'add-order-button-'.$data['data'][$key]['position']]); echo"\n"; ?>
<?php ActiveForm::end(); echo "\n";?>
							</div>
							
<?php }else if(empty($data['data'])){?>
							<div class="cell-md-12">
								<h2 class="text-center">
									Уважаемый пользователь!
								</h2>
								<h3 class="text-center">
									В корзине нет данных для заказа!
								</h3>
								<div class="text-center btn-group-variant-1 offset-top-30 offset-lg-top-40">
									<a href="/shop/constructor" class="btn btn-primary btn-sm btn-min-width-240">3D-Конструктор</a>
									<a href="/shop/catalog" class="btn btn-primary btn-sm btn-min-width-240">Каталог</a>
								</div>
							</div>
<?php }?>							
						</div>
					</div>
				<?php Pjax::end(); echo "\n";?>
			</section>
		</main>
<?php /*
		<main class="page-content">
		
		<!--sections Product Catalog-->
        <section class="section-34 section-bottom-78">
			<?php Pjax::begin(['id' => 'signin-pjax']);?>
          <div class="shell">
            <h2 class="divider offset-top-40 offset-md-top-80 text-center">КОРЗИНА</h2>
            <div class="range">
              <div class="cell-xs-12">
				<div class="table-cart table-responsive">
				
				
				
                  <table class="table text-left table-primary table-2">
                    <thead>
                      <tr>
                        <th></th>
                        <th>№</th>
                        <th>Продукт</th>
                        <th>Стоимость</th>
                        
                      </tr>
                    </thead>
                    <tbody>
<?php foreach($data['data'] as $key => $value){?>
						<tr>
<?php 
	$s[] = $data['data'][$key]['price'];
	$data['data'][$key]['position'] = $key;
?>
<?php 
	$form = ActiveForm::begin([
		'id' => 'Registration-Ajax',
		'action' => '/shop/order',
		'enableAjaxValidation' => true,
		'options' =>[
			'data-pjax' => true,
			'enctype' => 'multipart/form-data',
		]
	]); 
?>
<?= $form->field($data['model'], 'id')->hiddenInput(['value' => $data['data'][$key]['position']])->label(false)?>
						<td>
<?= Html::submitButton('', ['class' => 'icon fa-trash icon-xs-3 icon-silver', 'name' => 'delete-order-button-'.$data['data'][$key]['position']]) ?>
						</td>
						<td><?php echo $data['data'][$key]['sku']?></td>
						<td><a href="/shop/item?product=<?php echo $data['data'][$key]['id']?>"><?php echo $data['data'][$key]['name']?></a></td>
                        <td><?php echo $data['data'][$key]['price']?> руб.</td>
                      </tr>
<?php ActiveForm::end(); echo "\n";?>
<?php }?>
<?php if(!empty($s))foreach ($s as $key => $value){
	$sum += $value;
}?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--div class="cell-md-4 cell-lg-3 offset-top-50">
                <form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="rd-mailform text-left">
                  <div class="form-group">
                    <label for="coupon" class="form-label">Купон</label>
                    <input id="coupon" type="text" name="coupon" data-constraints="@Required @Numeric" class="form-control">
                  </div>
                </form>
              </div-->
              <!--div class="cell-xs-6 cell-md-4 cell-lg-2 offset-top-50 text-center text-xs-left"><a href="#" class="btn btn-transparent-2 btn-sm btn-sm-3 btn-height-50">Активировать</a></div>
              <div class="cell-xs-6 cell-md-4 cell-lg-2 cell-lg-preffix-5 offset-top-50 text-xs-right text-center"><a href="#" class="btn btn-primary btn-sm btn-sm-3">Обновить</a></div-->
              <div class="cell-lg-4 cell-sm-6 cell-lg-preffix-4 offset-xs-top-90">
                <div class="table-responsive">
                  <table class="table text-left table-dark table-striped">
                    <thead>
                      <tr>
                        <th>Предварительный заказ</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Итого</td>
                        <td><?php if(!empty($sum)){echo $sum.' 000 руб.';}else{echo '0 руб.';}?></td>
                      </tr>
                    </tbody>
                  </table>
                </div><a href="/shop/order" class="btn btn-primary btn-sm btn-width-full">Заказать</a>
              </div>
            </div>
          </div>
		<?php Pjax::end();?>
        </section>
	
		</main>	
*/?>