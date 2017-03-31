<?php

namespace matrozov\selectopus;

use Yii;
use yii\helpers\Json;
use yii\web\View;

class Selectopus extends \yii\widgets\InputWidget
{
    public $clientOptions;

    /**
     * @inheritdoc
     */
    public function run()
    {
        SelectopusAsset::register($this->view);

        $id = $this->options['id'];

        $options = Json::encode($this->clientOptions);

        $this->view->registerJs('jQuery("#' . $id . '").selectopus(' . $options . ');', View::POS_LOAD);
    }
}
