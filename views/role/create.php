<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<div class="widget-header widget-header-blue widget-header-flat">
    <h4 class="widget-title lighter">新增角色</h4>

    <div class="widget-toolbar">
        <a href="#" data-action="close">
            <i class="ace-icon fa fa-times"></i>
        </a>
    </div>
</div>

<div class="widget-body">
    <div class="widget-main">
        <?php
        // print_r(Yii::$app->permissionManager->permissions);
        $form = ActiveForm::begin([
                    'id' => 'dialog-form',
                    'layout' => 'horizontal',
        ]);
        ?>
        <?= $form->field($model, 'actionName')->textInput() ?>

        <div class="hr hr-16 hr-dotted">实打实打算</div>

        <div class="form-group field-permission-actionname required">
            <label class="control-label col-sm-3" style="padding-top:0;">角色管理:</label>
            <div class="col-sm-6">
                <div id="permission-actionname">
                    <label> <input type="checkbox" name="Permission[actionName][]" value="1"> 列表</label>
                    <label> <input type="checkbox" name="Permission[actionName][]" value="1"> 新增</label>
                    <label> <input type="checkbox" name="Permission[actionName][]" value="1"> 修改</label>
                    <label> <input type="checkbox" name="Permission[actionName][]" value="1"> 删除</label>
                </div>
                <div class="help-block help-block-error "></div>
            </div>

        </div>
        <div class="form-group field-permission-actionname required">
            <label class="control-label col-sm-3" style="padding-top:0;">用户管理:</label>
            <div class="col-sm-6">
                <div id="permission-actionname">
                    <label> <input type="checkbox" name="Permission[actionName][]" value="1"> 列表</label>
                    <label> <input type="checkbox" name="Permission[actionName][]" value="1"> 新增</label>
                    <label> <input type="checkbox" name="Permission[actionName][]" value="1"> 修改</label>
                    <label> <input type="checkbox" name="Permission[actionName][]" value="1"> 删除</label>
                </div>
                <div class="help-block help-block-error "></div>
            </div>
        </div>
         <div class="form-group field-permission-actionname required">
            <label class="control-label col-sm-3" style="padding-top:0;">用户管理:</label>
            <div class="col-sm-6">
                <div id="permission-actionname">
                    <label> <input type="checkbox" name="Permission[actionName][]" value="1"> 列表</label>
                    <label> <input type="checkbox" name="Permission[actionName][]" value="1"> 新增</label>
                    <label> <input type="checkbox" name="Permission[actionName][]" value="1"> 修改</label>
                    <label> <input type="checkbox" name="Permission[actionName][]" value="1"> 删除</label>
                </div>
                <div class="help-block help-block-error "></div>
            </div>
        </div>
         <div class="form-group field-permission-actionname required">
            <label class="control-label col-sm-3" style="padding-top:0;">用户管理:</label>
            <div class="col-sm-6">
                <div id="permission-actionname">
                    <label> <input type="checkbox" name="Permission[actionName][]" value="1"> 列表</label>
                    <label> <input type="checkbox" name="Permission[actionName][]" value="1"> 新增</label>
                    <label> <input type="checkbox" name="Permission[actionName][]" value="1"> 修改</label>
                    <label> <input type="checkbox" name="Permission[actionName][]" value="1"> 删除</label>
                </div>
                <div class="help-block help-block-error "></div>
            </div>
        </div>
         <div class="form-group field-permission-actionname required">
            <label class="control-label col-sm-3" style="padding-top:0;">用户管理:</label>
            <div class="col-sm-6">
                <div id="permission-actionname">
                    <label> <input type="checkbox" name="Permission[actionName][]" value="1"> 列表</label>
                    <label> <input type="checkbox" name="Permission[actionName][]" value="1"> 新增</label>
                    <label> <input type="checkbox" name="Permission[actionName][]" value="1"> 修改</label>
                    <label> <input type="checkbox" name="Permission[actionName][]" value="1"> 删除</label>
                </div>
                <div class="help-block help-block-error "></div>
            </div>
        </div>
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