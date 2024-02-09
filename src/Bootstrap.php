<?php

namespace specialist\excelreport;

use Yii;
use yii\base\BootstrapInterface;
class Bootstrap implements BootstrapInterface{
    public function bootstrap($app)
    {
        $app->setModule('excelreport', 'specialist\excelreport\Module');
        Yii::$app->getModule('excelreport')->registerTranslations();
    }
}