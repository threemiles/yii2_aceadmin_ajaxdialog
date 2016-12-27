<?php

namespace app\models;

use yii\db\ActiveRecord;

class Permission extends ActiveRecord {

    /**
     * @return string the name of the table associated with this ActiveRecord class.
     */
    public static function tableName() {
        return '{{permission}}';
    }

    public function rules() {
        return [
            // username and password are both required
            [['actionName','actionID'], 'required']
        ];
    }

    public function attributeLabels() {
        return [
            'actionID' => '操作ID',
            'actionName' => '操作名称',
        ];
    }

}
