<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
use yii\widgets\LinkPager;
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <ul>
            <?php foreach($profesiones as $key => $value): ?>
                <li><?= $value->profesion ?></li>
            <?php endforeach; ?>
            </ul>
        </div>

        <div class="text-center">
            <?php echo LinkPager::widget([
                'pagination' => $pagination,
            ]); ?>
        </div>
    </div>
</div>
