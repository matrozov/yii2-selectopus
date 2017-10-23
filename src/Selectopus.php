<?php

namespace matrozov\selectopus;

use Yii;
use yii\bootstrap\Html;
use yii\helpers\Json;
use yii\web\View;

class Selectopus extends \yii\widgets\InputWidget
{
    public $clientOptions = [];

    public $items = [];

    /**
     * @inheritdoc
     */
    public function run()
    {
        SelectopusAsset::register($this->view);

        $this->options['multiple'] = $this->clientOptions['multiple'] = isset($this->clientOptions['multiple']) ? $this->clientOptions['multiple'] : $this->options['multiple'];

        $options = Json::encode($this->clientOptions);

        $this->view->registerJs('jQuery("#' . $this->options['id'] . '").selectopus(' . $options . ');', View::POS_LOAD);

        if ($this->hasModel()) {
            return Html::activeDropDownList($this->model, $this->attribute, $this->items, $this->options);
        }
        else {
            return Html::dropDownList($this->name, $this->value, $this->items, $this->options);
        }
    }
}
