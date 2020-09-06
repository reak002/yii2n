<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
	<h1>News</h1>
	<ul>
		<?php foreach (array_reverse($news, true) as $oneNews): ?>
			<li>
				<?= Html::encode("{$oneNews->id} ({$oneNews->date})") ?>:
				<?= $oneNews->previewText ?>
			</li>
		<?php endforeach; ?>
	</ul>

