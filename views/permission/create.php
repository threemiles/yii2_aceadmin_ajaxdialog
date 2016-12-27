<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<div class="widget-header widget-header-blue widget-header-flat">
    <h4 class="widget-title lighter">新增权限</h4>

    <div class="widget-toolbar">
        <a href="#" data-action="close">
            <i class="ace-icon fa fa-times"></i>
        </a>
    </div>
</div>

<div class="widget-body">
    <div class="widget-main">
        <?php
        $form = ActiveForm::begin([
                    'id' => 'dialog-form',
                    'layout' => 'horizontal',
        ]);
        ?>
        <?= $form->field($model, 'actionID')->textInput(['autofocus' => true]) ?>
         <?= $form->field($model, 'actionName')->textInput() ?>
        <hr />
        <div class="wizard-actions">
            <button class="btn btn-success" id="submit">
                保存
            </button>

            <button class="btn" id="close">
                关闭
            </button>
        </div>
        <?php ActiveForm::end(); ?>


    </div><!-- /.widget-main -->
</div><!-- /.widget-body -->