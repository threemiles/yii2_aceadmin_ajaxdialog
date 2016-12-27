<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Permission;

class PermissionController extends Controller {

    public $layout = "ajax";

    public function actionCreate() {
        $model = new Permission();
        if ($_POST['Permission']) {
            $model->attributes=$_POST['Permission'];
            if($model->validate()){
                return $this->renderPartial('//layouts/message');
            }
        }
        return $this->renderPartial('create', [
                    'model' => $model,
        ]);
    }

}
