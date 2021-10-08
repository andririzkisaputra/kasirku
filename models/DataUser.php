<?php

namespace app\models;

use yii\db\ActiveRecord;

class DataUser extends ActiveRecord
{

  $sql = 'SELECT * FROM user';
  $data_user = DataUser::find($sql)->all();
  echo $data_user;
  $data_user->save();
}

?>
