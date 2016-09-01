<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <?php if ($exception->statusCode == 404): ?>
        <?= $this->render("_404",["mensaje" => $message]) ?>
    <?php else: ?>
        <h1><?= Html::encode($this->title) ?></h1>
        <p><?= Html::encode($message) ?></p>
    <?php endif; ?>
</div>
