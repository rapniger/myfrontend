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
					<div class="cell-xs-12 text-center offset-top-40 bg-pampas">
					    <h3>
                            Уважаемый пользователь!
                        </h3>
                        <h4>
                            Компания "РИТГРАН" приняла ваш заказ!
                        </h4>
                        <h5>
                            Ваш уникальный номер заказа <b><?php echo $data['id_cart']?></b>.
                        </h5>
                        <h5>
                            Заказ продублирован на эл.почту и в историю заказа.
                        </h5>
                        <h5>
                            В ближайщее время с вами свяжется менеджер компании "РИТГРАН".
                        </h5>
					</div>
				</div>
			</div>
		</section>
			
		</main>