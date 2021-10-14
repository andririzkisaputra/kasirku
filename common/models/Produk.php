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

    public function rules()
    {
        return [
            [['nama_produk', 'harga_produk'], 'required'],
            [['nama_produk'], 'string'],
            [['harga_produk'], 'number'],
        ];
    }


}
