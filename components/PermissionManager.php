<?php

namespace app\components;

use Yii;
use yii\base\Component;

class PermissionManager extends Component {
     public $permissions=array(
         'role'=>array('index'),
     );
 
}
