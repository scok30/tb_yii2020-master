<?php

namespace backend\controllers;
use backend\models\Contactme;
class ContactmeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model=new Contactme();
        if($model->validate())
            echo" sucess";
        else
            echo"fail";
    }

}
