<?php
namespace app\components;

use yii\base\Widget;

class FooterWidget extends Widget {
    
    // configuración
    public function init()
    {
        parent::init();   
    }
    
    // ejecución
    public function run()
    {
        return $this->render("footer");
    }
}