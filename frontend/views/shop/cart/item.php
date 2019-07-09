<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm; //сама форма
use yii\widgets\ActiveField; // настройка для формы
use yii\widgets\Pjax;

?>
		<main class="page-content">
		
		<!--sections Single Product-->
		<section class="section-34 section-bottom-78">
			<div class="shell">
				<div class="range offset-md-top-20 offset-top-0">
					<div class="cell-md-5 cell-md-preffix-1 bg-pampas">
					<!-- Slick Carousel-->
						<div data-arrows="true" data-loop="false" data-dots="false" data-swipe="true" data-xs-items="1" class="slick-slider carousel-parent ">
							<div class="item">
							<!-- PhotoSwipe-->
								<a data-photo-swipe-item="" data-size="436x256" href="/<?php echo $data['item']['img_full'];?>/<?php echo $data['item']['file'];?>" data-author="Michael Hull" class="figure"><img width="436" height="256" src="/<?php echo $data['item']['img_full'];?>/<?php echo $data['item']['file'];?>" alt=""></a>
							</div>
						</div>
					</div>
					<div class="cell-md-4">
						<h3 class="txt-black"><?php echo $data['item']['name']; ?></h3>
						<p class="offset-top-25">Размер памятника: 100х50х5 см</p>
						<p class="reveal-inline-block txt-darker offset-top-40 inset-right-20">Количество</p>
						<form class="reveal-inline-block">
							<div class="form-group">
								<label for="qnt" class="form-label"></label>
								<input id="qnt" type="number" name="qnt" value="1" min="1" class="form-control-3">
							</div>
						</form>
						<div class="price offset-top-27">
							<div class="h4 reveal-inline-block"><?php echo $data['item']['price']?> руб</div>
						</div>
						<a href="/shop/add-cart?product=<?php echo $data['item']['id'] ?>" class="btn btn-sm btn-primary btn-min-width-210-lg offset-top-10">Добавить в корзину</a>
						<ul class="list-inline list-inline-variant-2 offset-top-20">
							<li class="h6">Поделиться записью</li>
							<li><a href="#" class="icon icon-xxs icon-darker fa-facebook"></a></li>
							<li><a href="#" class="icon icon-xxs icon-darker fa-vk"></a></li>
							<li><a href="#" class="icon icon-xxs icon-darker fa-odnoklassniki"></a></li>
						</ul>
					</div>
					<div class="cell-xs-12 text-center offset-top-40 bg-pampas">
					<!-- Responsive-tabs-->
						<div class="responsive-tabs responsive-tabs-default offset-top-40 responsive-tabs-default-variant-2 text-left">
							<ul class="resp-tabs-list text-right resp-tabs-list-2">
								<li><span>Информация</span></li>
								<li><span>Отзывы</span></li>
							</ul>
							<div class="resp-tabs-container resp-tabs-container-2">
								<div>
									<table class="table text-left table-dark table-striped-variant-2">
										<tbody>
											<tr>
												<td>Модель №</td>
												<td><?php echo $data['item']['sku']?></td>
											</tr> 
											<tr>
												<td>Размер</td>
												<td>100x60x5</td>
											</tr>
										</tbody>
									</table>	
								</div>
								<div>
<?php  if(empty($data['comment']) && empty($data['user'])){?>
									<div class="media media-variant-3 text-center text-sm-left">
										<div class="media-left round">
											<img src="images/post-page-4-70x70.jpg" alt="" width="70" height="70">
										</div>
										<div class="media-body">
											<h5 class="txt-matrix">Администрация сайта</h5>
											<h6>20-06-2019</h6>
											<p class="offset-md-top-20">Уважаемые пользователи, оставьте первым отзывы!</p><a href="#" class="icon icon-matrix fa-mail-reply icon-sm-2"></a>
										</div>
									</div>
<?php } else {?>
	<?php foreach($data['comment'] as $key => $value){?>
		<?php if($data['comment'][$key]['level'] == 1){?>
									<div class="media media-variant-3 text-center text-sm-left">
										<div class="media-left round">
											<img src="images/post-page-4-70x70.jpg" alt="" width="70" height="70">
										</div>
										<div class="media-body">
											<h5 class="txt-matrix"><?php echo $data['user'][$key]['name']?> <?php echo $data['user'][$key]['subname']?></h5>
											<h6><?php echo $data['comment'][$key]['create_at']?></h6>
											<p class="offset-md-top-20"><?php echo $data['comment'][$key]['comment']?></p><a href="#" class="icon icon-matrix fa-mail-reply icon-sm-2"></a>
										</div>
									</div>
		<?php } else if($data['comment'][$key]['level'] == 2){?>
									<div class="media media-variant-3 offset-top-23 inset-md-left-102 text-center text-sm-left">
										<div class="media-left round">
											<img src="images/post-page-5-70x70.jpg" alt="" width="70" height="70">
										</div>
										<div class="media-body">
											<h5 class="txt-matrix"><?php echo $data['user'][$key]['name']?> <?php echo $data['user'][$key]['subname']?></h5>
											<h6><?php echo $data['comment'][$key]['create_at']?>
												<br class="veil-sm">
												<span class="icon icon-darker fa-mail-reply icon-xxs-2"></span>
											</h6>
											<p class="offset-md-top-20"><?php echo $data['comment'][$key]['comment']?></p>
											<a href="#" class="icon icon-matrix fa-mail-reply icon-sm-2"></a>
										</div>
									</div>									
		<?php }?>
	<?php  }?>
<?php	}?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section-34 section-bottom-78 bg-pampas">
			<div class="shell">
				<h2 class="text-center divider">Другие модели памятников</h2>
				<div class="range offset-top-50">
<?php foreach($data['randomitem'] as $key => $value){ echo "\n"?>
					<div class="cell-xs-6 cell-md-3">
						<div class="thumbnail text-center thumbnail-product">
							<a href="/shop/item?product=<?php echo $data['randomitem'][$key][0]['id']; ?>">
							<img src="/<?php echo $data['randomitem'][$key][0]['img_full']; ?>/<?php echo $data['randomitem'][$key][0]['file']; ?>" alt="" width="270" height="160">
							</a>
							<div class="caption">
								<div class="h5">
									<a href="/shop/item?product=<?php echo $data['randomitem'][$key][0]['id']; ?>" class="txt-matrix">
										<?php echo $data['randomitem'][$key][0]['name']; ?>
									</a>
								</div>
								<div class="h4 reveal-inline-block"><?php echo $data['randomitem'][$key][0]['price'];?> руб.</div>
								<a href="#" class="btn btn-sm btn-primary btn-min-width-210-lg">Добавить в корзину</a>
							</div>
						</div>
					</div>
				<?php }?>
				
				</div>
			</div>
		</section>
			
		</main>