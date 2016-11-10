<?php
/**
 * Created by PhpStorm.
 * User: quangthinh
 * Date: 8/6/2016
 * Time: 9:04 PM
 */

namespace quangthinh\yii\adminlte;


use yii\web\AssetBundle as Asset;

class IonIconAsset extends Asset
{
    public $baseUrl = 'http://code.ionicframework.com/ionicons/2.0.1';
    public $css = [
        'css/ionicons.min.css',
    ];
}