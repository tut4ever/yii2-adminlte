<?php
/**
 * Created by PhpStorm.
 * User: vuquangthinh
 * Date: 7/16/2016
 * Time: 11:04 AM
 */

namespace quangthinh\yii\adminlte;


class ChartJSAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/bower_components/chart.js';
    public $js = [
        'Chart.min.js',
    ];
}
