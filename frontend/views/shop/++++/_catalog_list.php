<?php echo "\n";?>									<div class="thumbnail text-center thumbnail-product">
										<a href="/shop/item?product=<?php echo $model['id'] ?>"><img src="<?php echo "/".$model['img_full']."/".$model['file'] ?>" alt="" width="240" height="120"></a>
											<div class="caption">
												<div class="h5">
													<a href="/shop/item?product=<?php echo $model['id'] ?>" class="txt-matrix"><?php echo $model['name']?></a>
												</div>
												<div class="h4 reveal-inline-block"><?php echo $model['price']?> руб.</div>
												<a href="/shop/add-cart?product=<?php echo $model['id'] ?>" class="btn btn-sm btn-primary btn-min-width-210-lg">Добавить в корзину</a>
											</div>
										</div><?php echo "\n\t\t\t\t\t\t\t\t\t";?>