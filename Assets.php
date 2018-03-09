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
    public $sourcePath = __DIR__ . "/assets";
    public $css = [
        'jquery.fileuploader.min.css'
    ];

    public $js = [
        'jquery.fileuploader.min.js'
    ];

    public $jsOptions = ['position'=>View::POS_END];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}