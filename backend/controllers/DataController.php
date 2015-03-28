<?php

namespace backend\controllers;

class DataController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionJavastok()
    {
    	return $this->render('javastok');
    }

    public function actionCbrstok()
    {
    	return $this->render('cbrstok');
    }

    public function actionSogastok()
    {
    	return $this->render('sogastok');
    }

}
