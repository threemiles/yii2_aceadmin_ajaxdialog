<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Permission;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

class RoleController extends Controller {

    public function actionIndex() {

        $model = new Permission();
        if ($_GET['Permission']) {
            $model->attributes = $_GET['Permission'];
        }
        return $this->render('index', [
                    'model' => $model,
        ]);
    }

    public function actionCreate() {
        $model = new Permission();
        if ($_POST['Permission']) {
            $model->attributes = $_POST['Permission'];
            if ($model->validate()) {
                return $this->renderPartial('//layouts/message');
            }
        }
        return $this->renderPartial('create', [
                    'model' => $model,
        ]);
    }

}
