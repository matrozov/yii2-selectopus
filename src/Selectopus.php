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

        $id = $this->options['id'];

        $options = Json::encode($this->clientOptions);

        $this->view->registerJs('jQuery("#' . $id . '").selectopus(' . $options . ');', View::POS_LOAD);

        if ($this->hasModel()) {
            echo Html::activeDropDownList($this->model, $this->attribute, $this->items, $this->options);
        } else {
            echo Html::dropDownList($this->name, $this->value, $this->items, $this->options);
        }
    }
}
