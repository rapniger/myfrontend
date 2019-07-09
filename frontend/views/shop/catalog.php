<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm; //сама форма
use yii\widgets\ActiveField; // настройка для формы
use yii\widgets\Pjax;
use yii\widgets\LinkPager;
use yii\widgets\ListView;
//use yii\widgets\GridView;
use yii\helpers\VarDumper;
?>
<main class="page-content">

    <section class="section-34 section-bottom-78">
        <div class="shell">
            <?php Pjax::begin(['id' => 'filter-pjax']); echo "\n";?>
            <!--div class="text-center">
                <ol class="breadcrumb">
                    <li><a href="/index/index/">Главная</a></li>
                    <li><a href="/shop/catalog">Памятники</a></li>
                    <li>Все памятники</li>
                </ol>
            </div-->
            <h2 class="divider offset-top-30 offset-md-top-40 text-center">КАТАЛОГ</h2>
            <div class="range  bg-pampas offset-md-top-60 offset-xs-top-60">
                <div class="cell-md-3  offset-md-top-40">
                    <?php echo $this->render('catalog/_filter', compact('data'))?>
                    
                </div>
                <div class="cell-md-9 offset-md-top-40 offset-xs-top-40">
                    <?= ListView::widget([
                        'dataProvider' => $data['items']['adp'],
                        //'itemView' => '_list', Имя представления (view) для вывода записи
                        'itemView' => function ($model, $key, $index, $widget){
                            return $this->render('catalog/_items', compact('model'));
                        },
                        'options' => [
                            'tag' => 'div',
                            'class' => 'range'
                        ],
                        'layout' => "
								<div class='cell-xs-12 cell-md-12 text-center'>\n{pager}\n\t\t\t\t\t\t\t\t</div>
								<div class='cell-xs-12 cell-md-12 text-center'>\n{summary}\n\t\t\t\t\t\t\t\t</div>
								{items}
								<div class='cell-xs-12 cell-md-12 text-center'>\n{summary}\n\n\t\t\t\t\t\t\t\t</div>
								<div class='cell-xs-12 cell-md-12 text-center'>\n{pager}\n\t\t\t\t\t\t\t\t</div>
								",
                        'itemOptions' => [
                            'tag' => 'div',
                            'class'=> 'cell-xs-6 cell-md-4 offset-md-top-10 offset-xs-top-10 offset-md-bottom-10'
                        ],
                        'pager' => [
                            'maxButtonCount' => 4,
                        ],
                    ]);
                    ?>

                </div>
            </div>
            <?php Pjax::end(); echo "\n";?>
        </div>
    </section>

</main>

<script src="/assets/js/jquery.js"></script>