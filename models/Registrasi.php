<?php
namespace app\models;

use yii\db\ActiveRecord;

class Registrasi extends ActiveRecord
{
    public static function tableName()
    {
        return 'user';
    }

    public function rules()
    {
        return [
            [['username', 'password'], 'required']
        ];
    }
}
