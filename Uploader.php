<?php
namespace aminkt\widgets\jquery\uploader;


use yii\base\Widget;
use yii\bootstrap\Html;
use yii\bootstrap\Modal;
use yii\helpers\Json;
use yii\web\View;
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
        $this->options['class'] = isset($this->options['class']) ? $this->options['class'].' fileuploader' : 'fileuploader';
        $this->assetBundle = Assets::register($this->view);
    }

    public function run()
    {
        parent::run();
        $this->registerJs();
        $html = Html::beginTag('div', [
            'class'=>'fileuploader-container'
        ]);
        $html .= $this->renderInputHtml('file');
        $html .= Html::tag('div', 'آپلود فایل', ['class'=>'add-file']);
        $html .= Html::endTag('div');
        return $html;
    }

    public function registerJs(){
        $options = Json::encode($this->pluginOptions);
        $js = <<<JS
let upload = $("#{$this->getId()}").fileUploader($options);
JS;
        $this->view->registerJs($js, View::POS_READY);

    }
}