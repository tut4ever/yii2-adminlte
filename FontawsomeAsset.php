<?php
/**
 * Created by PhpStorm.
 * User: quangthinh
 * Date: 7/18/2016
 * Time: 4:09 PM
 */

namespace quangthinh\yii\adminlte;


use yii\web\AssetBundle as AssetBase;

class FontawsomeAsset extends AssetBase
{
    public $baseUrl = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css';
    public $css = [
        'font-awesome.min.css',
    ];
}