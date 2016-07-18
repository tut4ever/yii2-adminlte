<?php

namespace quangthinh\yii\adminlte;

class AssetBundle extends \yii\web\AssetBundle
{
    public $skin = 'blue';
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';
    public $css = [
        'css/AdminLTE.min.css',
    ];
    public $js = [
        'js/app.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        $this->css[] = 'css/skins/skin-' . $this->skin . '.min.css';
    }
}