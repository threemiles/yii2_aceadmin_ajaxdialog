<?php
use app\models\Permission;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<button class="btn btn-white btn-info btn-bold" onclick="openAjaxDialog('<?= Yii::$app->urlManager->createUrl(['role/create']) ?>')">
    <i class="ace-icon fa fa-plus bigger-120 blue"></i>
    新增
</button>
<button class="btn btn-white btn-info btn-bold" onclick="openAjaxDialog('<?= Yii::$app->urlManager->createUrl(['role/create']) ?>')">
    <i class="ace-icon fa fa-search-plus bigger-120 blue"></i>
    搜索
</button>
<hr/>
<div class="post-search">
    <?php $form = ActiveForm::begin([
        'action' => ['role/index'],
        'method' => 'get',
    ]); ?>
<?= $form->field($model, 'actionName') ?>
    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary btn-sm ']) ?>
        <?= Html::submitButton('Reset', ['class' => 'btn btn-default btn-sm ']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
<hr />
<?php

$query=Permission::find();
$dataProvider = new ActiveDataProvider([
    'query' => $query,
    'pagination' => [
        'pageSize' => 2,
    ],
        ]);
$model->actionName!="" &&  $query->andFilterWhere(['like', 'actionName', $model->actionName]);
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'id',
        'actionID',
        'actionName',
        [
            //动作列yii\grid\ActionColumn 
            //用于显示一些动作按钮，如每一行的更新、删除操作。
            'class' => 'yii\grid\ActionColumn',
            'header' => '操作',
            'template' => '{delete} {update}', //只需要展示删除和更新
            'headerOptions' => ['width' => '240'],
            'buttons' => [
                'delete' => function($url, $model, $key) {
                    return Html::a('', 'javascript:alert(111);', [
                                'class' => 'glyphicon glyphicon-trash',
                                    ]
                    );
                },
                        'update' => function($url, $model, $key) {
                    return Html::a('', 'javascript:alert("'.$url.'");', [
                                'class' => 'glyphicon glyphicon-pencil',
                                    ]
                    );
                },
                    ],
                ],
            ],
        ]);
        