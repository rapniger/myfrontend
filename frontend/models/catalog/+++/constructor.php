<?php

namespace frontend\models\catalog;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\web\IdentityInterface;
use yii\data\Pagination;

/*КЛАСС СБОРКИ ДАННЫХ*/
class constructor extends ActiveRecord{
	
	public static function tableName(){
		
		return '{{con_order}}';
	
	}
	
	public function getActiveForm(){
		
		$model_stone = new Stone();
		$model_size = new Size();
		$model_figure = new Figure();
		$model_completestone = new CompleteStone();
		$model_completevase = new CompleteVase();
		
		$model = [
			'stone' => $model_stone->getAll(),
			'size' => $model_size->getAll(),
			'figure' => $model_figure->getAll(),
			'completestone' => $model_completestone->getAll(),
			'completevase' => $model_completevase->getAll(),
		];
		
		return $model;
		
	}

}

//ТИП КАМНЯ
class Stone extends ActiveRecord{
	
	public static function tableName(){
		
		return '{{con_stone}}';
	
	}
	
	public function getAll(){
	
		return $query = Stone::find()->asArray()->all();
		
	}
	
}

//РАЗМЕР ПАМЯТНИКА
class Size extends ActiveRecord{
	
	public static function tableName(){
		
		return '{{con_size}}';
	
	}
	
	public function getAll(){
	
		return $query = Size::find()->asArray()->all();
		
	}
	
}

//ФИГУРА ПАМЯТНИКА
class Figure extends ActiveRecord{
	
	public static function tableName(){
		
		return '{{con_figure}}';
	
	}
	
	public function getAll(){
		
		$data['model'] = $this->tenFigure();
		
		$data['pages'] = $this->paginationFigure();
		
		return $data;
		
		//return $query = Figure::find()->asArray()->all();
		
	}
	
		//вывод 10 коммент. Зависимый от paginationComment
	public function tenFigure(){
		
		$query = Figure::find();
		
		$pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 10]);
		
		$model = $query->offset($pages->offset)->orderBy(['id' => SORT_DESC])->limit($pages->limit)->all();
		
		return $model;
		
	}
	
	//вывод пагинации. Зависимый от tenComment
	public function paginationFigure(){
		
		$query = Figure::find();
		
		$pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 10]);
		
		$comments = $query->offset($pages->offset)->orderBy(['id' => SORT_DESC])->limit($pages->limit)->all();
		
		return $pages;
		
	}
	
}

//КОМПЛЕКТАЦИЯ ПАМЯТНИКА НАДГРОБНАЯ ПЛИТА
class CompleteStone extends ActiveRecord{
	
	public static function tableName(){
		
		return '{{con_completestone}}';
	
	}
	
	public function getAll(){
	
		return $query = CompleteStone::find()->asArray()->all();
		
	}
	
}

//КОМПЛЕКТАЦИЯ ПАМЯТНИКА ВАЗЫ
class CompleteVase extends ActiveRecord{
	
	public static function tableName(){
		
		return '{{con_completevase}}';
	
	}
	
	public function getAll(){
	
		return $query = CompleteVase::find()->asArray()->all();
		
	}
	
}

//ПРАЙСЛИСТ
class Price extends ActiveRecord{
	
	public static function tableName(){
		
		return '{{con_price}}';
	
	}
	
}
//ДОПОЛЬНИТЕЛЬНАЯ КОМПЛЕКТАЦИЯ

//ПОЛИРОВКИ

//ДОПОЛНИТЕЛЬНАЯ ОБРАБОТКА КАМНЯ

//ГРАФИЧЕСКИЕ ДАННЫЕ