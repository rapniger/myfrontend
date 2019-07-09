<?php
use  yii\web\Session;
use yii\helpers\Html;

//Yii::$app->user->isGuest // Если пользователь гость, показыаем ссылку "Вход", если он авторизовался "Выход"
?>	
		<main class="page-content">
			<section class="section-53 bg-image bg-image-1 section-bottom-88">
				<div class="container text-center txt-white">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="h1">404</div>
							<div class="h2 divider">
								<a href="https://ru.wikipedia.org/wiki/%D0%9E%D1%88%D0%B8%D0%B1%D0%BA%D0%B0_404" target="_blank" title="Ссылка на википедии">
									Ой, нет такой страницы
								</a>
							</div>
							<div class="h5 offset-top-90">Запрошенная страница не найдена - это может быть из-за неверного URL-адреса.</div>
							<a href="index.html" class="btn-sm btn btn-primary btn-min-width-240 offset-top-42">Вернуться на главную страницу сайта</a>
							<div class="btn-group-variant-1 offset-top-30 offset-lg-top-40">
								<a href="/shop/constructor" class="btn btn-primary btn-sm btn-min-width-240">3D-Конструктор</a>
								<a href="shop/catalog" class="btn btn-transparent btn-sm btn-min-width-240">Каталог</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>