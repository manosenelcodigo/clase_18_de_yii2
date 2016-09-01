<?php
use app\components\SaludoWidget;
use app\components\FooterWidget;
?>

<p>
    <?= SaludoWidget::widget(); ?>
</p>

<p>
    <?= SaludoWidget::widget([
        "mensaje"   => "hola desde mi primer widget",
    ]); ?>
</p>

<?php
FooterWidget::begin();
FooterWidget::end();
?>