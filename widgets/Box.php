<?php
/**
 * Created by PhpStorm.
 * User: quangthinh
 * Date: 11/5/2016
 * Time: 9:38 AM
 */

namespace quangthinh\yii\adminlte\widgets;


use yii\base\Widget;
use yii\helpers\Html;

class Box extends Widget
{
    const TYPE_PRIMARY = 'box-primary';

    public $type;

    public $title;
    public $titleOptions;
    public $header = '{title}';
    public $headerOptions = [];

    public $options = [];

    public function init()
    {
        if (!$this->type) {
            $this->type = self::TYPE_PRIMARY;
        }

        Html::addCssClass($this->options, ['box', $this->type]);

        Html::addCssClass($this->headerOptions, 'box-header');
        Html::addCssClass($this->titleOptions, 'box-title');

        ob_start();
        ob_implicit_flush(0);
        echo Html::beginTag('div', $this->options);

        if ($this->header) {
            echo Html::tag('div', strtr($this->header, [
                '{title}' => Html::tag('h3', $this->title, $this->titleOptions),
            ]), $this->headerOptions);
        }

        echo Html::beginTag('div', ['class' => 'box-body']);
    }

    public function run()
    {
        echo Html::endTag('div');
        echo Html::endTag('div');
        return ob_get_clean();
    }
}