<?php
namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

class SaludoWidget extends Widget {
    public $mensaje;

    // configuración
    public function init()
    {
        parent::init();
        if ( $this->mensaje === null ) {
            $this->mensaje = "no existe un mensaje";
        }
    }
    
    // ejecución
    public function run()
    {
        return Html::encode($this->mensaje);
    }
}