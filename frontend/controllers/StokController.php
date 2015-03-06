<?php

namespace frontend\controllers;

use yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use frontend\models\VStok;

class StokController extends \yii\web\Controller
{
    public function actionIndex()
    {
	    $model = new VStok();
	    if ($model->load(Yii::$app->request->post())) {
	    	$model->load($_POST);
	        if ($model->validate()) {	            
	            // $model = VStok::find()->where(['LIKE', 'kode', $model->kode])->orderBy('size')->all();
	            $model = VStok::find()->where(['kode'=>$model->kode])->orderBy('size')->all();
				return $this->render('result', ['model'=>$model]);	            
	        }
	    }else{
		    return $this->render('index', [
		        'model' => $model,
		    ]);
	    }
    }

    public function actionResult()
    {
        return $this->render('result');
    }

}
