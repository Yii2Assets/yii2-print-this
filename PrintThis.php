<?php
namespace yii2assets\printthis;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\web\View;

class PrintThis extends Widget
{
    public $options = [];
    public $htmlOptions = [];

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        if(isset($this->htmlOptions['id'])){
            $this->id = $this->htmlOptions['id'];
        }else{
            $this->id = $this->htmlOptions['id'] = $this->getId();
        }

    }

    protected function registerAsset()
    {
        PrintThisAsset::register($this->view);

        $this->options = ArrayHelpers::merge(['bindto' => '#'.$this->id], $this->options);

        $jsOptions = Json::encode($this->options);
        $js = "$(\"".$this->id."\").printThis({".$jsOptions."});";

        $key = __CLASS__ . '#' . $this->id;

        $this->view->registerJs($js, View::POS_READY, $key);

    }
}
