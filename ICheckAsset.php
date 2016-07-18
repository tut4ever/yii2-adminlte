<?php
/**
 * Created by PhpStorm.
 * User: vuquangthinh
 * Date: 5/31/2016
 * Time: 1:49 AM
 */
namespace quangthinh\yii\adminlte;

use yii\web\AssetBundle;

class ICheckAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins/iCheck';
    public $css = [
        'square/blue.css',
    ];
    public $js = [
        'icheck.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}