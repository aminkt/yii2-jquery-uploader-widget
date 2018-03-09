<?php
namespace aminkt\widgets\jquery\uploader;


use yii\base\Widget;
use yii\bootstrap\Html;
use yii\bootstrap\Modal;
use yii\helpers\Json;
use yii\widgets\InputWidget;

/**
 * Class LocationInput
 *
 * Widget to user jQuery uploader
 *
 * @package frontend\runtime\uploader
 */
class Uploader extends InputWidget
{
    public $pluginOptions = [];

    private $assetBundle;

    public function init()
    {
        parent::init();

        $this->assetBundle = Assets::register($this->view);
    }

    public function run()
    {
        parent::run();
        $this->registerJs();
        return $this->renderInputHtml('file');
    }

    public function registerJs(){
        $options = Json::encode($this->pluginOptions);
        $js = <<<JS
$('#{$this->getId()}').fileuploader();
JS;
        $this->getView()->registerJs($js);
    }


}