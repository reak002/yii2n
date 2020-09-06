<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\News;

class NewsController extends Controller
{
	public function actionIndex()
	{
		$query = News::find();

		$news = $query->orderBy([
			'id' => SORT_DESC,
			'date' => SORT_ASC
		])->limit(5)->all();

		return $this->render('index', [
			'news' => $news,
		]);
	}
}