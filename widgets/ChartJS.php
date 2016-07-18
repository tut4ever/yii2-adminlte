<?php
/**
 * Created by PhpStorm.
 * User: vuquangthinh
 * Date: 7/16/2016
 * Time: 10:56 AM
 */

namespace quangthinh\yii\adminlte\widgets;


use quangthinh\yii\adminlte\ChartJSAsset;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Class ChartJS
 * @package quangthinh\yii\adminlte\widgets
 *
 * Widget Chart
 * @see http://www.chartjs.org/
 */
class ChartJS extends Widget
{
    public $options = [];
    public $clientOptions = [];

    public function init()
    {
        if (!is_array($this->options)) {
            $this->options = [];
        }

        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->id;
        }

        if (!is_array($this->clientOptions)) {
            $this->clientOptions = [];
        }

        ChartJSAsset::register($this->view);
    }

    public function run()
    {
        $this->view->registerJs('var _chart' . $this->id
            . ' = new Chart(document.getElementById("' . $this->options['id'] . '"), ' . Json::encode($this->clientOptions) . ');');

        return Html::tag('canvas', '', $this->options);
    }
}