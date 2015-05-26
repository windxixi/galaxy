<?php

namespace home\modules\member\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{


    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCompare()
    {
        $this->layout= '/main';
        return $this->render('compare');
    }

    public function actionWishList()
    {
        var_dump('WishList');
    }
}
