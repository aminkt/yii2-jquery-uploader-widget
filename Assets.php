<?php
namespace aminkt\widgets\jquery\uploader;


use yii\web\View;

/**
 * Class Assets
 * JQuery LocationInput assets.
 * @package frontend\runtime\uploader
 */
class Assets extends \yii\web\AssetBundle
{
    public $sourcePath;
    public $css = [
        'fileuploader.css'
    ];

    public $js = [
        'fileuploader.js'
    ];

    public $jsOptions = ['position'=>View::POS_END];
    public $depends = [
        'yii\web\JqueryAsset'
    ];

    public function init()
    {
        parent::init();
        $this->sourcePath = __DIR__ . "/assets";
    }
}