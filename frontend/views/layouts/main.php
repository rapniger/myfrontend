<?php
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;

if(Yii::$app->session->has('cart')){

	$addcart = Yii::$app->session->get('cart');
	
	$id = implode(';', $addcart);
	
	$count = count($addcart);
	 
}else{
	
	$count = '-';
	
}
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ru-RU" class="wide wow-animation">
	<head>
	<!-- Site Title-->
		<title><?= $this->title?></title>
		<meta name="format-detection" content="telephone=no">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset="utf-8">
		<meta name="yandex-verification" content="b7ab1ebf54e1213b" />
		<script src="/assets/js/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
		<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
		<!-- Stylesheets-->
		<!--link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700%7COpen+Sans:400,700"-->
		<link rel="stylesheet" href="/assets/css/style.css?v=0.372">
		<link rel="stylesheet" href="/assets/css/datepicker.css?v=0.2">
		<link rel="stylesheet" href="/assets/css/ion.rangeslider.css?v=0.1">
		<!--[if lt IE 10]>
		<div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
		<script src="js/html5shiv.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php $this->beginBody() ?>
		
		<div class="page">
		
		<header class="page-head">
			<!-- RD Navbar-->
			<div class="rd-navbar-wrap">
				<nav class="rd-navbar rd-navbar-original rd-navbar-static" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-sm-stick-up-offset="50px" data-lg-stick-up-offset="200px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true">
					<span data-rd-navbar-toggle="#rd-navbar-right-panel" data-custom-toggle-disable-on-blur="true" class="rd-navbar-right-panel-toggle toggle-original"></span>
					<div class="rd-navbar-inner">
						<ul class="rd-navbar-user">
							<?php if (Yii::$app->user->isGuest){?>
								
							<li>
								<i>Вы вошли, как </i><b>гость</b><i>!</i>
							</li>
							<li>
								<a href="/account/signin">
									Регистрация в системе
									<span class="fa-users"></span>
								</a>
							</li>
							<li>
								<a href="/account/authorize">
									Авторизоваться в системе
									<span class="fa-sign-in"></span>
								</a>
							</li>
							<?php }else if(!Yii::$app->user->isGuest){?>
							
							<li>
								<a>
									<i>Вы вошли под логином </i><b><?php echo Yii::$app->user->identity->login ?></b><i>!</i>
								</a>
							</li>
							<li>
								<a href="/account/message">
									Cообщения
									<span class="fa-envelope-o"></span>
								</a>
							</li>
							<li>
								<a href="/account/account">
									Аккаунт
									<span class="fa-user"></span>
								</a>
							</li>
							<li>
								<a>
									История заказов
									<span class="fa-shopping-cart"></span>
								</a>
							</li>
							<li>
								<a href="/account/signout">
									Выйти
									<span class="fa-sign-out"></span>
								</a>
							</li>
							<?php }?>
							
						</ul>
						<div class="rd-navbar-panel-wrap">
						<!-- RD Navbar Panel-->
							<div class="rd-navbar-panel">
							
							<!-- RD Navbar Toggle-->
								<button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle toggle-original">
									<span></span>
								</button>
								<!-- RD Navbar Brand-->
								<div class="rd-navbar-brand brand-static">
									<a href="/index/index" class="brand-name">
										<div class="brand-logo">
											<p>РИТГРАН</p>
											<!--p>Ритуальные услуги</p-->
										</div>
									</a>
								</div>
							</div>
							<div id="rd-navbar-right-panel" class="rd-navbar-right-panel toggle-original-elements">
								<address class="address">
									<span class="icon icon-sm icon-white icon-border fa-map-marker"></span>
									<span class="txt-darker">
										<a href="/contacts.htm">
											Ростовская область,<br>г. Аксай, ул. Садовая 33
										</a>
									</span>
								</address>
								<div class="time">
									<span class="icon icon-sm icon-white icon-border fa-clock-o"></span>
									<span>С 9:00 по 18:00</span>
								</div>
								<div class="contact-info">
									<span class="icon icon-sm icon-white icon-border fa-phone"></span>
									<span>
										<a href="tel:#"><span>8(908)1894009</span><br>
											<span>Связь с менеджером</span>
										</a>
									</span>
								</div>
							</div>
						</div>
						<div class="rd-navbar-nav-wrap toggle-original-elements">
							<!-- RD Navbar Brand-->
							<div class="rd-navbar-brand brand-fixed">
								<a href="index.htm" class="brand-name">
									<div class="brand-logo">
										РИТГРАН
									</div>
								</a>
							</div>
							<!-- RD Search-->
							<form action="search-results.html" method="GET" data-search-live="rd-search-results-live" class="rd-search">
								<div id="rd-search" class="form-group">
									<label for="rd-search-form-input" class="form-label rd-input-label">
										Поиск
									</label>
									<input id="rd-search-form-input" type="text" name="s" autocomplete="off" class="form-control">
									<button type="submit" class="fa-search"></button>
								</div>
								<div id="rd-search-results-live" class="rd-search-results-live">
								</div>
							</form>
							<span data-custom-toggle="rd-search" data-custom-toggle-disable-on-blur="true" class="rd-navbar-search-toggle"></span>
							<?php 
							Modal::begin([
								'id' => 'cart-nav',
								'headerOptions' => ['class'=>'text-center'],
								'header' => '<h3>Корзина заказа</h3>',
								//'size' => 'modal-sm',
								'toggleButton' => [
									'label' => '('.$count.')',
									'tag' => 'a',
									'class' => 'rd-navbar-shop fa-shopping-cart',
								],
								'closeButton' => ['tag' => 'button', 'label' => false],
							]);?>
							<?php if(!empty($addcart)){?>
								<table class="table text-left table-primary">
									<thead>
										<tr>
											<td>
												№
											</td>
											<td>
												Наименование
											</td>
											<td>
												Стоимость
											</td>
										</tr>
									</thead>
									<tbody>
									
								<?php foreach($addcart as $key => $value){?>
                                    <?php $s[] = preg_replace("/\s+/", '', $addcart[$key]['price'] );?>
										<tr>
											<td>
												<?php echo $addcart[$key]['sku']?>
											</td>
											<td>
												<?php echo $addcart[$key]['name']?>
											</td>
											<td>
												<?php echo $addcart[$key]['price']?> руб.
											</td>
										</tr>
								<?php }?>
								<?php if(!empty($s)){?>
								<?php foreach ($s as $key => $value){?>
									<?php $sum += $value;?>
								<?php }?>
                                <?php }?>
										<tr class="fw-bold">
											<td>
												
											</td>
											<td>
												Итого:
											</td>
											<td>
												<?php echo $sum?> руб.
											</td>
										</tr>
									</tbody>
								</table>
								<a href="/shop/cart" class="btn btn-primary btn-sm">Заказать</a>
							<?php }else{?>
								<p>Корзина пуста</p>
							<?php }?>
							<?php
							Modal::end();
							?>
							
							
							<!--a href="/page/cart" class="rd-navbar-shop fa-shopping-cart">
								<span>
									
								</span>
							</a-->
							<!-- RD Navbar Nav-->
							<ul class="rd-navbar-nav">
								<li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="\index\index">Главная</a>
									<ul class="rd-navbar-dropdown">
										<li><a href="\index\index#why-me">Почему именно мы?</a></li>
										<li><a href="\index\index#comments">Отзывы</a></li>
										<li><a href="\index\index#popular-price">Прайслист</a></li>
										<li><a href="\index\index#feedback-1">Обратная связь</a></li>
									</ul>
									<span class="rd-navbar-submenu-toggle"></span>
								</li>
								<li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="\about\about">О компании</a>
									<ul class="rd-navbar-dropdown">
										<li><a href="\about\about#why-me">Кто мы?</a></li>
										<li><a href="\about\about#personal">Персонал</a></li>
										<li><a href="\about\about#portfolio">Портфолио работ</a></li>
										<li><a href="\about\about#requisites">Реквизиты</a></li>
										<li><a href="\about\about#job">Вакансии</a></li>
										<li><a href="\about\about#legal">Правовая информация</a></li>
									</ul>
									<span class="rd-navbar-submenu-toggle"></span>
								</li>
								<li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="\service\services">Услуги</a>
								<!-- RD Navbar Dropdown-->
									<ul class="rd-navbar-dropdown">
										<li><a href="\service\services">Уход за могилой</a></li>
										<li><a href="\service\services">Реставрация старых памятников</a></li>
										<li><a href="\service\services">Доставка памятников</a></li>
										<li><a href="\service\services">Ритуальные услуги</a></li>
									</ul>
									<span class="rd-navbar-submenu-toggle"></span>
								</li>
								<li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="\shop\catalog">Каталог</a>
									<!-- RD Navbar Dropdown-->
									<ul class="rd-navbar-dropdown">
										<li><a href="\shop\constructor">Конструктор памятников</a></li>
										<li><a href="\shop\cart">Корзина заказа</a></li>
										<li><a href="\shop\catalog">Каталог</a></li>
										<li><a href="\shop\sale">Акции</a></li>
										<!--li><a href="">Оптовая продажа</a></li-->
									</ul>
									<span class="rd-navbar-submenu-toggle"></span>
									<span class="rd-navbar-submenu-toggle"></span>
								</li>
								<li>
									<a href="\contact\contact">Контакты</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</header>	
<?= $content ?>
		<footer class="page-foot bg-ebony section-top-78 section-bottom-15">
			<div class="shell text-center text-sm-left">
				<div class="range">
					<div class="cell-sm-6 cell-md-3">
						<div class="rd-navbar-brand">
							<a href="/index/index" class="brand-name">
								<div class="brand-logo">
									<p>РИТГРАН</p>
									<p>Ритуальные услуги</p>
								</div>
							</a>
						</div>
						
					</div>
					<div class="cell-sm-6 cell-md-3 cell-md-preffix-1 text-left">
						<div class="contact-info reveal-block">
							<span class="icon icon-xs icon-white icon-border fa-phone"></span>
							<span>
								<a href="tel:#">
									<span>8(999)8885544</span><br>
									<span>Связь с менеджером</span>
								</a>
							</span>
						</div>
						<address class="address reveal-block offset-top-20 txt-darker">
							<span class="icon icon-xs icon-white icon-border fa-map-marker"></span>
							<span>
								<a href="contacts.html">Ростовская область,<br>г. Аксай, ул. Садовая</a>
							</span>
						</address>
						<div class="time reveal-block offset-top-20 txt-darker">
							<span class="icon icon-xs icon-white icon-border fa-clock-o"></span>
							<span>с 9:00 по 18:00</span>
						</div>
					</div>
					<div class="cell-sm-12 cell-md-5 offset-top-30 offset-sm-top-60 offset-md-top-0">
						<p>
							Изготовление памятников – один из основных профилей нашей работы. Мы изготавливаем памятники под конкретно Ваш бюджет в сжатые сроки.
							С каталогами памятников можно ознакомиться на странице сайта. Если по каким-то причинам не удалось найти в ассортименте каталога, удовлетворяющего все Ваши требования, оставьте заявку на сайте.
						</p>
					</div>
					<div class="cell-xs-12 offset-top-40 offset-lg-top-100">
						<div class="hr-double"></div>
						<p class="small txt-darker">
							&#169; 
							<span id="copyright-year"></span> 
							Все права защищены.
							<a href="privacy.html" class="txt-primary">Правовая информация</a>
							<a href="https://vk.com/dj_biggy" class="txt-primary">Веб-разработчик</a>
						</p>
					</div>
				</div>
			</div>
		</footer>
		
		</div>
	<?php $this->endBody() ?>
	
		<script src="/assets/js/script.js"></script>
	</body>
</html>
<?php $this->endPage() ?>