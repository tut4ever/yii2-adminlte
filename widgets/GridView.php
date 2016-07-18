<?php
/**
 * Created by PhpStorm.
 * User: vuquangthinh
 * Date: 7/16/2016
 * Time: 10:49 AM
 */

namespace quangthinh\yii\adminlte\widgets;


use yii\helpers\Html;

class GridView extends \yii\grid\GridView
{
    public $layout = "<div class=\"box\">{header}\n{items}\n<div class=\"box-footer clearfix text-right\">{pager}</div>\n</div>";

    public function init()
    {
        $this->tableOptions = ['class' => 'table table-hover no-margin'];
        $this->pager['options'] = ['class' => 'pagination pagination-sm pull-right no-margin'];
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function renderSection($name)
    {
        if ($name == '{header}') {
            $summary = $this->renderSummary();
            if (!empty($summary)) {
                return Html::tag('div', $summary . Html::tag('span', $this->renderPager(), ['class' => 'box-tools']), ['class' => 'box-header with-border']);
            }

            return '';
        }
        return parent::renderSection($name); // TODO: Change the autogenerated stub
    }
}