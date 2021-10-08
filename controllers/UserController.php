<?php
namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\DataUser;

class UserController extends Controller
{
  public function actionIndex()
  {
    $query      = DataUser::find();

    $pagination = new Pagination([
        'defaultPageSize' => 5,
        'totalCount'      => $query->count(),
    ]);

    $user  = $query->offset($pagination->offset)->limit($pagination->limit)->all();
    return $this->render('dataUser', [
      'user'       => $user,
      'pagination' => $pagination,
    ]);
  }
}


?>
