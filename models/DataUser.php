<?php

namespace app\models;

use yii\db\ActiveRecord;

class DataUser extends ActiveRecord {

  public static function tableName() {
      return 'user';
  }

  public function getUser() {
    return DataUser::find()->all();
  }
}

?>
