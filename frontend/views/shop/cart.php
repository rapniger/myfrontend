<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm; //сама форма
use yii\widgets\ActiveField; // настройка для формы
use yii\widgets\Pjax;
if(yii::$app->session->has('cart')){
    
    $session_keys = array_keys(yii::$app->session['cart']);
    
}else{

    $session_keys = false;
    
}
?>
<?php if($data == false){?>
    <main class="page-content">
        <section class="section-34 section-bottom-78">
            <div class="shell">
                <h2 class="divider offset-top-40 offset-md-top-80 text-center">
                    КОРЗИНА
                </h2>
                <div class="range">
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
                </div>
            </div>
        </section>
    </main>
<?php } else{?>
    <main class="page-content">
        <section class="section-34 section-bottom-78">
			<?php Pjax::begin(['id' => 'order-pjax']); echo "\n";?>
				<div class="shell">
					<h2 class="divider offset-top-40 offset-md-top-80 text-center">
						КОРЗИНА
					</h2>
					<div class="range">
						<div class="cell-xs-12">
							<div class="table-cart table-responsive">
								<table class="table text-left table-primary table-2">
									<thead>
										<tr>
											<th>
											</th>
											<th>
												№
											</th>
											<th>
												Наименование
											</th>
											<th>
												Сумма
											</th>
										</tr>
									</thead>
								<?php foreach ($data['items'] as $key => $value){?>
									<?php $s[] = preg_replace("/\s+/", '', $data['items'][$key]['price']);?>

									<?php $form = ActiveForm::begin(['id' => 'Delete-Cart-Ajax', 'action' => '/shop/del-cart','options' =>['data-pjax' => true,'enctype' => 'multipart/form-data',]]);echo "\n";?>
									<tbody>
										<tr>
											<td>
												<?= $form->field($data['model'], 'id',['template' => "\t\t\t\t\t\t\t\t\t\t\t\t{input}"])->hiddenInput(['value' => $session_keys[$key]])->label(false); echo"\n";?>
												<?= Html::submitButton('', ['class' => 'icon fa-trash icon-xs-3 icon-silver', 'name' => 'delete-order-button-'.$data['items'][$key]['position']]); echo"\n"; ?>
											</td>
											<td>
												<?php echo $data['items'][$key]['sku']."\n"?>
											</td>
											<td>
												<a href="/shop/item?product=<?php echo $data['data']['items'][$key]['id']?>" target="_blank">
													<?php echo $data['items'][$key]['name']."\n"?>
												</a>
											</td>
											<td>
												<?php echo $data['items'][$key]['price']."\n"?>
											</td>
										</tr>
									</tbody>
									<?php ActiveForm::end();?>
								<?php } echo"\n";?>
								</table>
							</div>
						</div>
					</div>
					<div class="range">
						<div class="cell-lg-4 cell-sm-6 cell-md-2 cell-lg-preffix-4 offset-xs-top-90">
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
											<th><?php if(!empty($s)) foreach($s as $key => $value){ $sum += $value; }?>
												
												<?php if(!empty($sum)){echo $sum.' руб.';}else{echo '0 руб.';} echo "\n";?>
											</th>
										</tr>
									</tbody>
								</table>
							</div><?php if($data['user'] == false){ echo "\n";?>
							<ul class="text-center">
								<h3>
									Уважаемый, гость!<br/> Для заказа пожалуйста пройдите авторизацию или регистрацию.
								</h3>
								<li class="offset-top-20">
									<a href="/account/authorize" class="btn btn-primary btn-sm-2 btn-min-width-170">
										Авторизоваться в системе
										<span class="fa-sign-in"></span>
									</a>
								</li>
								<li class="offset-top-20">
									<a href="/account/signin" class="btn btn-primary btn-sm-2 btn-min-width-170">
										Регистрация в системе
										<span class="fa-users"></span>
									</a>
								</li>
							</ul>
                    <?php }else {?>
						<?php $form = ActiveForm::begin(['id' => 'Order-Ajax', 'action' => '/shop/save-cart','options' =>['data-pjax' => true,'enctype' => 'multipart/form-data',]]);echo "\n";?>
                    <?= $form->field($data['model'], 'detail',['template' => "\t\t\t\t\t\t\t\t\t\t\t\t\t{input}"])->hiddenInput(['value' => $data['data']])->label(false); echo"\n";?>
                    <?= Html::submitButton('Заказать', ['class' => 'btn btn-primary btn-sm btn-width-full', 'name' => 'add-order-button-'.$data['data'][$key]['position']]); echo"\n"; ?>
                    <?php ActiveForm::end(); echo "\n";?>
                    <?php } echo "\n";?>
						</div>
					</div>
				</div>
			<?php Pjax::end(); echo "\n";?>
        </section>
    </main>
<?php }?>