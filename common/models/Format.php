<?php

namespace common\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class Format extends Model
{
    public function formatHarga($value)
    {
      return number_format($value,0,',','.');
    }
}
