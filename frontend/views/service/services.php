<?php
use yii\web\Session;
use yii\helpers\Html;
use yii\widgets\ActiveForm; //сама форма
use yii\widgets\ActiveField; // настройка для формы
use yii\widgets\Pjax;
?>
		<section class="section-34 section-bottom-78 bg-pampas">
			<div class="shell">
				<h2 class="divider offset-top-40 offset-md-top-80 text-center">Наши услуги</h2>
					<div class="range offset-md-top-50">
						<div class="cell-xs-12 cell-md-11">
							<!-- Responsive-tabs-->
							<div class="responsive-tabs responsive-tabs-default offset-top-40 responsive-tabs-default-variant-2 text-left">
								<ul class="resp-tabs-list text-right resp-tabs-list-2">
									<li><span>Уход за могилой</span></li>
									<li><span>Доставка памятников</span></li>
									<li><span>Реставрация старых памятников</span></li>
									<!--li><span>Ритуальные услуги</span></li-->
								</ul>
								<div class="resp-tabs-container resp-tabs-container-2">
								<!--Cremation-->
									<div>
										<h3 class="txt-black">Уход за могилой</h3>
										<p class="offset-top-20"></p>
										<p>Особенно важен правильный уход за могилой, что сам памятник нужно регулярно мыть и очищать от мусора вне зависимости из чего сделан памятник. Памятникам из мрамора требует особого внимания, для очистки нельзя пользоваться бытовым и моющим средствами!</p>
										<p>Что включает в себя уход за могилой?</p>
										<ul class="list-marked list-marked-variant-2 offset-top-10 inset-left-38">
											<li>Подготовка участка:<small><br/>Приводим в порядок "зеленую" часть: подравниваем и поливаем траву, подстригаем кустарник и деревья. Избавляемся от сорняков, сгребаем опавшие листья и увядших рстении, и вывозим весь накопивший мусор</small></li>
											<li>Чистим захоронение:<small><br/>Моем памятники, украшения и ограду от налипших пыли и грязи</small></li>
											<li>Косметический ремонт<small><br/>покраска оград и скамеек</small></li>
											<li>Защита захоронения<small><br/>Обработка каменные и металлические объекты водооталкивающими и биозащитными средства</small></li>
										</ul>
										<blockquote class="quote-2 offset-top-40">
											<p class="h3">
												<q>Аккуратная ухоженная могила выражает наше признание, уважение и любовь. Место последнего упокоения поддерживает связь живых с усопшим, и оно должно выглядеть достойно</q>
											</p>
											<p>
												<cite>Сергей Драгузин</cite>
											</p>
										</blockquote>
										<div class="range">
											<div class="cell-sm-12 offset-top-40">
												<div class="pricing-table-variant-1">
													<div class="title">
														<div class="h5">Уборка за могилой</div>
													</div>
													<div class="price">
														<div class="h2">600 руб.</div>
													</div>
													<div class="pricing-table-body">
														<ul class="list-marked list-marked-variant-2">
															<p>1 уборка<p>
															Что входит:
															<li>Очистка надгробия от сорняков и опавших листьев</li>
															<li>Земельные работы(подравниваем и поливаем "зеленую" часть)</li>
															<li>Вывоз мусора</li>
															<li>Мытьё памятников и металлических объектов</li>
															<p class="offset-top-20">Возможности заказа:<p>
															<li>несколько объектов</li>
															<li>несколько раз в год</li>
														</ul>
													</div>
													<div class="table-footer">
														<a href="/service/add-cart?service=1" class="btn btn-sm btn-primary btn-width-full">Заказать</a>
													</div>
												</div>					
											</div>
										</div>
									</div>
									<!--Funerals-->
									<div>
										<h3 class="txt-black">Доставка памятников</h3>
										<p class="offset-top-20">Только наша компания занимается доставкой памятников не только по Ростовской области, но и по всей России. Мы надежная компания и на нас можно положится, изготовим и доставим памятник в срок.</p>
										<ul class="list-marked list-marked-variant-2 offset-top-10 inset-left-38">
											<li>Быстрая доставка</li>
											<li>Доставка по всей России</li>
										</ul>
									</div>
									<div>
										<h3 class="txt-black">Реставрация</h3>
										<p class="offset-top-20">Текст для "ухода за могилой".Текст для "ухода за могилой".Текст для "ухода за могилой".Текст для "ухода за могилой".</p>
										<p>Текст для "ухода за могилой".Текст для "ухода за могилой":</p>
										<ul class="list-marked list-marked-variant-2 offset-top-10 inset-left-38">
											<li>Текст для "ухода за могилой".</li>
											<li>Текст для "ухода за могилой".</li>
											<li>Текст для "ухода за могилой".</li>
											<li>Текст для "ухода за могилой".</li>
										</ul>
										<blockquote class="quote-2 offset-top-40">
											<p class="h3">
												<q>A death is not the extinguishing of a light, but the putting out of the lamp because the dawn has come.</q>
											</p>
											<p>
												<cite>Имя Фамилия</cite>
											</p>
										</blockquote>
										<div class="range">
											<div class="cell-sm-6">
												<div class="pricing-table-variant-1">
													<div class="title">
														<div class="h5">Реставрация</div>
													</div>
													<div class="price">
														<div class="h2">8000 руб.</div>
													</div>
													<div class="pricing-table-body">
														<ul class="list-marked list-marked-variant-2">
															<li>Что реставрируем</li>
															<li>Что реставрируем</li>
															<li>Что реставрируем</li>
														</ul>
													</div>
													<div class="table-footer">
														<a href="#" class="btn btn-sm btn-primary btn-width-full">Заказать</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!--Calculator-->
									<!--div class="calculator">
										<h3 class="txt-black">Ритуальные услуги</h3>
										<p>Здесь представлены услуги на выбор</p>
										<ol class="list-index offset-top-45">
											<li>
												<div class="list-index-counter">
													<div class="h3">ФИО усопшего</div>
													<form>
														<div class="form-group">
															<label class="radio-inline">
																<input name="input-group-radio" type="text" data-price="2000" checked id="blankRadioYes" placeholder="Фамилия">
															</label>
															<label class="radio-inline">
																<input name="input-group-radio" type="text" data-price="2000" checked id="blankRadioYes" placeholder="Имя">
															</label>
															<label class="radio-inline">
																<input name="input-group-radio" type="text" data-price="2000" checked id="blankRadioYes" placeholder="Отчество">
															</label>
														</div>
														<div class="form-group">
															<label class="radio-inline">
																<input name="input-group-radio" type="text" data-price="2000" checked id="blankRadioYes" placeholder="Дата рождения">
															</label>
															<label class="radio-inline">
																<input name="input-group-radio" type="text" data-price="2000" checked id="blankRadioYes" placeholder="Дата смерти">
															</label>
														</div>
													</form>
												</div>
											</li>
											<li>
												<div class="list-index-counter">
													<div class="h3">Катафалк</div>
													<p>Автомобили:</p>
													<form>
														<div class="form-group">
															<label class="radio-inline">
																<input name="input-group-radio" value="radio-3" type="radio">ПАЗ
															</label>
															<label class="radio-inline">
																<input name="input-group-radio" value="radio-1" type="radio" data-price="2000" checked id="blankRadioYes">Газель
															</label>
															<label class="radio-inline">
																<input name="input-group-radio" value="radio-2" type="radio">Ford Transit
															</label>
														</div>
													</form>
												</div>
											</li>
											<li>
												<div class="list-index-counter">
													<div class="h3">Венки</div>
													<p>Количество</p>
													<form>
														<div class="form-group">
															<label class="checkbox-inline">
																<input name="input-group-radio" type="text" data-price="2000" checked id="blankRadioYes" placeholder="От кого">
															</label>
														</div>
														<div class="form-group">
															<label class="checkbox-inline">
																<input name="input-group-radio" type="text" data-price="2000" checked id="blankRadioYes" placeholder="Текст">
															</label>
														</div>
													</form>	
												</div>
											</li>
											<li>
												<div class="list-index-counter">
													<div class="h3">Гроб</div>
													<form>
														<div class="form-group">
															<label class="checkbox-inline">
																Рисунок и цена
																<input name="input-group-radio" value="checkbox-1" type="radio" data-price="295" id="extra1">
															</label>
														</div>
														<div class="form-group">
															<label class="checkbox-inline">
																Рисунок и цена
																<input name="input-group-radio" value="checkbox-2" type="radio" data-price="50" id="extra2">
															</label>
														</div>
													</form>	
												</div>
											</li>
											<li>
												<div class="list-index-counter">
													<div class="h3">Ритуальные принадлежности</div>
													<form>
														<div class="form-group">
															<label class="checkbox-inline">
																<input name="input-group-radio" value="checkbox-1" type="checkbox" data-price="295" id="extra1">Одежда:$295.00
															</label>
														</div>
														<div class="form-group">
															<label class="checkbox-inline">
																<input name="input-group-radio" value="checkbox-2" type="checkbox" data-price="50" id="extra2">И другие: $50.00
															</label>
														</div>
													</form>	
												</div>
											</li>
											<li>
												<div class="list-index-counter">
													<div class="h3">Организация похорон</div>
													<p>Надо продумать</p>
													<p>Текст текст Текст текст текст Текст текст Текст текст текст Текст текст Текст текст текст Текст текст Текст текст текст</p>
												</div>
											</li>
										</ol>
										<h4 class="offset-top-40"><span>Итого:</span><span id="total">0</span></h4>
										<a href="#" class="btn btn-sm btn-primary offset-top-10">Заказать</a>
									</div-->
								</div>
							</div>
                        </div>
					</div>
			</div>
		</section>
		
		<script src="/assets/js/jquery.js"></script>