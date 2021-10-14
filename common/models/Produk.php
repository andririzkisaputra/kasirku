<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

class Produk extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%produk}}';
    }


}
