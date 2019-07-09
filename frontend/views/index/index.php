<?php
use  yii\web\Session;
use yii\helpers\Html;
use yii\widgets\ActiveForm; //сама форма
use yii\widgets\ActiveField; // настройка для формы
use yii\widgets\Pjax;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;

//Yii::$app->user->isGuest // Если пользователь гость, показыаем ссылку "Вход", если он авторизовался "Выход"
?>	
		<main class="page-content">
		
			<div data-height="" data-min-height="" class="swiper-container swiper-slider">
				<div class="swiper-wrapper">
					<div data-slide-bg="/images/slider-1-1920x700.jpg" class="swiper-slide"></div>
					<div data-slide-bg="/images/slider-2-1920x700.jpg" class="swiper-slide"></div>
					<div data-slide-bg="/images/slider-3-1920x700.jpg" class="swiper-slide"></div>
				</div>
				<!-- Swiper Navigation-->
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
				<div class="jumbotron-wrap">
					<div class="jumbotron-variant-1">
						<h1 class="offset-top-48" style="color: #FFF;">Изготовление и установка памятников</h1>
						<h1 >от<b class="marked"> 7500 </b> рублей</h1>
						<ul class="list-marked list-marked-variant-2 offset-top-10 inset-left-38" style="display: inline-block; font-size: 20px">
							<li>Собственное производство<br class="veil reveal-lg-inline"></li>
							<li>Работаем с 2005 года <br class="veil reveal-lg-inline"></li>
							<li>Гарантия на продукции <br class="veil reveal-lg-inline"></li>
						</ul>
						<div class="btn-group-variant-1 offset-top-42">
							<a href="/shop/catalog" class="btn btn-primary btn-sm">Каталог</a>
							<a href="/index/index#feedback-1" class="btn btn-transparent btn-sm">Обратная связь</a>
						</div>
					</div>
				</div>
			</div>

			<section id="why-me" class="section-83 section-bottom-78 bg-pampas">
				<div class="shell">
					<!--h2 class="divider text-center">О НАС</h2-->
						<div class="range text-center text-md-left">
							<div class="cell-md-12">
								<div class="media media-variant-1">
									<div class="media-body inset-md-right-15">
										<h2 class="text-center txt-matrix">О компании "РИТГРАН"</h2>
										<p class="text-justify">
											Компания “РИТГРАН” занимает лидирующие позиции в Ростовской области среди компании, занимающихся изготовлением и установкой надгробных памятников из натурального камня. Мемориальная архитектура – это искусство, которое подвластно только квалифицированным специалистам, профессионалам своего дела. 
										</p>
										<p class="text-justify">
											Наша гравировальная мастерская - производитель с уже более чем 10-летним стажем, поэтому мы можем предложить изготовление надгробий любой сложности. Кроме того форма надгробий может быть любой: обелиски, монументы или вертикальные, горизонтальные стелы. Заказать памятники или мемориальные комплексы можно из таких горных пород как гранит, мрамор, змеевик, долерит, габбро. Одним из наиболее долговечных и практичных материалов для изготовления памятников является гранит. Чаще всего его используют в качестве облицовочного материала, так как имеет низкое водопоглощение и высокую морозоустойчивость.
										</p>
										<p class="text-justify">
											Также у нас можно заказать сопутствующую продукцию: оградки, столики, лавки, скульптуры и барельефы. Технологии нашей компании позволят Вам заказать памятники не только из каталога, но и по индивидуальному, эксклюзивному эскизу, в том числе и мемориалы. Наши специалисты могут оформить надгробный памятник сусальным золотом, что придаст изделию благородный вид и защитит элементы: надпись, орнамент, крестик – от внешних факторов. 
											Компания «РИТГРАН» может предложить Вам возможность наглядно оценить проект заказа с помощью 3D-макета. Благодаря нему можно сразу доработать все спорные моменты и внести корректировки в будущее изделие. Мы учитываем все пожелания клиента и гарантируем индивидуальный подход к каждому клиенту.
										</p>
										<p class="text-justify">
											За всю историю существования мы накопили огромный опыт в сфере гравировального производства и создали производственную базу, оснащенную автоматизированным гравировальным оборудованием с компьютерным управлением разных модификаций, позволяющим  применять компьютерный метод обработки и переноса изображения на камень с достижением 100%-ного сходства с оригиналом в кратчайшие сроки.
										</p>
										<p class="text-justify">
											Купить памятник, а также заказать установку Вы можете в нашей компании, чем оградите себя от дополнительных сложностей, связанных с этим. Вам будет обеспечен качественный комплекс монтажных работ. Изготовление и продажа надгробий производится в Аксае и в Ростове-на-Дону, установка – по всему Южному региону. Мы гарантируем качество производимой продукции и оказываемых услуг
										</p>
										<p class="text-justify">
											Компания “Ритгран” предлагает приемлемые цены, так как камень поставляется непосредственно с карьеров, без дополнительных затрат.
										</p>
									</div>
								</div>
							</div>
						</div>
				</div>
			</section>		
		
			<!-- RD Parallax-->
			<section data-parallax-img="/images/index-6-1920x896.jpg" class="parallax-container">
				<div class="parallax-content">
					<div class="shell text-center txt-white section-60 section-md-83">
						<h2 class="divider">
							ЦЕНА
						</h2>
						<div class="range">
							<div>
								<h5>
									Несмотря на кризис в нашей стране и повышении цен на все услуги, наши цены Вас приятно удивят. Мы не импортируем камень из-за границы и не работаем через поставщиков. У нас только прямые поставки российского производства.
								</h5>
								<div class="btn-group-variant-1 offset-top-30 offset-lg-top-40">
									<a href="#" class="btn btn-primary btn-sm btn-min-width-240">3D-Конструктор</a>
									<a href="#" class="btn btn-transparent btn-sm btn-min-width-240">Готовые решения</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="popular-price" class="section-88 bg-pampas">
				<div class="shell">
					<!--h2 class="divider text-center">Прайслист</h2-->
					<div class="range">
						<div class="cell-sm-6 cell-md-4 reveal-flex align-stretch offset-top-30 offset-sm-top-0">
							<div class="pricing-table-variant-1">
								<div class="title">
									<div class="h5">Уход за могилой</div>
								</div>
								<div class="price">
									<div class="h2">от 600 руб.</div>
								</div>
								<div class="pricing-table-body">
									<ul class="list-marked list-marked-variant-2">
										<li>Очистка мусора, сорняков </li>
										<li>Благоустройство(Щебень, песок, пленка), 1м2</li>
										<li>Консультация</li>
									</ul>
								</div>
								<div class="table-footer"><a href="service\service" class="btn btn-sm btn-primary btn-width-full">Посмотреть</a></div>
							</div>					
						</div>
						<div class="cell-sm-6 cell-md-4 reveal-flex align-stretch offset-top-30 offset-md-top-0">
							<div class="pricing-table-variant-1">
								<div class="title">
									<div class="h5">Памятники из мрамора</div>
								</div>
								<div class="price">
									<div class="h2">от 7000 руб</div>
								</div>
								<div class="pricing-table-body">
									<ul class="list-marked list-marked-variant-2">
										<li>Стела, цветник, поребрик</li>
										<li>3D-макет</li>
										<li>Консультация</li>
									</ul>
								</div>
								<div class="table-footer"><a href="/shop/catalog?category=4" class="btn btn-sm btn-primary btn-width-full">Посмотреть</a></div>
							</div>
						</div>
						<div class="cell-sm-6 cell-md-4 reveal-flex align-stretch offset-top-30 offset-md-top-0">
							<div class="pricing-table-variant-1">
								<div class="title">
									<div class="h5">Памятники из гранита</div>
								</div>
								<div class="price">
									<div class="h2">от 11000 руб</div>
								</div>
								<div class="pricing-table-body">
									<ul class="list-marked list-marked-variant-2">
										<li>Комплект памятника</li>
										<li>3D-макет</li>
										<li>Консультация</li>
									</ul>
								</div>
								<div class="table-footer"><a href="/shop/catalog?category=3" class="btn btn-sm btn-primary btn-width-full">Посмотреть</a></div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--sections Thick Line Progress Bars-->
			<section class="section-88">
				<div class="shell">
					<h2 class="divider text-center">Достижения</h2>
					<div class="range text-center">
						<div class="cell-xs-6 cell-md-3">
						<!-- Circle Progress Bar-->
							<div data-value="1" data-thickness="20" data-gradient="#ceb078, #ceb078" data-empty-fill="rgb(235,235,235)" data-size="165" class="progress-bar-circle"><span></span></div>
							<h5 class="offset-top-18">Всего оказанных услуг</h5>
						</div>
						<div class="cell-xs-6 cell-md-3 offset-top-40 offset-xs-top-0">
						<!-- Circle Progress Bar-->
							<div data-value="0.7" data-thickness="20" data-gradient="#ceb078, #ceb078" data-empty-fill="rgb(235,235,235)" data-size="165" class="progress-bar-circle"><span></span></div>
							<h5 class="offset-top-18">Памятники</h5>
						</div>
						<div class="cell-xs-6 cell-md-3 offset-top-40 offset-md-top-0">
						<!-- Circle Progress Bar-->
							<div data-value="0.2" data-thickness="20" data-gradient="#ceb078, #ceb078" data-empty-fill="rgb(235,235,235)" data-size="165" class="progress-bar-circle"><span></span></div>
							<h5 class="offset-top-18">Уход за могилой</h5>
						</div>
						<div class="cell-xs-6 cell-md-3 offset-top-40 offset-md-top-0">
							<!-- Circle Progress Bar-->
							<div data-value="0.1" data-thickness="20" data-gradient="#ceb078, #ceb078" data-empty-fill="rgb(235,235,235)" data-size="165" class="progress-bar-circle"><span></span></div>
							<h5 class="offset-top-18">Ритуальные услуги</h5>
						</div>
					</div>
				</div>
			</section>
			<!-- section Obituaries-->
			<section id="comments" class="section-60 section-md-83 bg-pampas">
				<div class="shell">
					<h2 class="text-center divider">Отзывы</h2>
					<div class="range text-center text-md-left">
					<?php
						foreach($comments as $item){?>
						<div class="cell-xs-6 cell-md-3 offset-top-50 offset-md-top-0">
							<div class="caption offset-top-13">
								<a href="" class="h3">
									<?php echo $item['name']." ".$item['subname']?>
								</a>
								<p class="small txt-darker">
									<?php echo $item['data']?>
								</p>
								<p class="offset-md-top-17 text-justify">
									<?php echo $item['message']?>
								</p>
							</div>
						</div>	
					<?	}
					?>
					</div>
					<div class="text-center offset-top-40">
						<a href="/comment/comments" class="btn btn-sm btn-transparent-2">Все отзывы</a>
					</div>
				</div>
			</section>	

			<section id="feedback-1" class="section-83">
				<div class="shell">
					<h2 class="text-center divider">Обратная связь</h2>
					<div class="range offset-top-118">
						<div class="cell-lg-8 cell-lg-preffix-2">
						<!-- RD Mailform-->
							<?php Pjax::begin(['id' => 'contact-pjax']); echo "\n";?>
								<?php $form = ActiveForm::begin([
								'id' => 'Contact-Ajax',
								'action' => '/index/index',
								'enableAjaxValidation' => true,
								'validationUrl' => '/index/validate-contact',
								'options' =>[
									'data-pjax' => true,
									'class' => 'rd-mailform text-left offset-top-20',
									'enctype' => 'multipart/form-data',
									'data-form-output' => 'form-output-global',
									'data-form-type' => 'contact'
								]
							]); echo "\n";?>
									<div class="range">
										<?php if($messagecontact == false){ ?>
										<div class="cell-sm-6">
											<div class="form-group">
												<?= $form->field($contact, 'name', ['template' => "{label}\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t{error}", 'labelOptions' => ['class' => 'form-label'],])->label('Имя *'); ?>
											</div>
										</div>
										<div class="cell-sm-6 offset-top-48 offset-sm-top-0">
											<div class="form-group">
												<?= $form->field($contact, 'subname', ['template' => "{label}\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t{error}", 'labelOptions' => ['class' => 'form-label'],])->label('Фамилия *'); ?>
											</div>
										</div>
										<div class="cell-sm-6 offset-top-48">
											<div class="form-group">
												<?= $form->field($contact, 'telephone', ['template' => "{label}\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t{error}", 'labelOptions' => ['class' => 'form-label'],])->label('Телефон *'); ?>
											</div>
										</div>
										<div class="cell-sm-6 offset-top-48">
											<div class="form-group">
												<?= $form->field($contact, 'email', ['template' => "{label}\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t{error}", 'labelOptions' => ['class' => 'form-label'],])->label('Электронная почта *'); ?>
											</div>
										</div>
										<div class="cell-xs-12 offset-top-48">
											<div class="form-group">
												<?= $form->field($contact, 'message', ['template' => "{label}\t\t\t\t\t\t\t\t\t{input}\n\t\t\t\t\t\t\t\t\t{error}", 'labelOptions' => ['class' => 'form-label'],])->label('Сообщение *')->textarea(['rows' => '6']) ?>
											</div>
										</div>
										<div class="cell-xs-12 offset-top-48">
											<div class="form-group text-center">
												<?= $form->field($contact, 'verifyCode')
													->widget(\himiklab\yii2\recaptcha\ReCaptcha::className(),
													['siteKey' => '6Lf8bqgUAAAAACqQhCfAXz2H3CLqIEAq-AyE6bT4',
													'widgetOptions' => ['class' => 'div-recaptcha text-center']])
													->label('Просим пройти верификацию')
												?>
											</div>
										</div>
										<div class="cell-xs-12 text-center offset-top-27">
											<?= Html::submitButton('Отправить', ['class' => 'btn btn-primary btn-sm btn-min-width-230', 'name' => 'contact-button']) ?>
										</div>
										
										<?php }else if($messagecontact == 'ok'){?>
											<div class="cell-xs-12 text-center offset-top-30">
												<h3>Сообщение отправлено!</h3>
											</div>
										<?php }else if($messagecontact == 'no'){ ?>
											<div class="cell-xs-12 text-center offset-top-30">
												<h3>Сообщение не отправлено!</h3>
											</div>
										<?php } ?>
									</div>
								<?php ActiveForm::end(); ?>
							<?php Pjax::end(); ?>
						</div>
					</div>
				</div>
			</section>
		</main>