<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Registrasi;

class UserController extends Controller
{

    public function actionIndex()
    {
        $register = Registrasi::find()->all();
        return $this->render('index', [
            'register' => $register,
        ]);
    }

    public function actionCreate()
    {
        $model = new Registrasi();
        if (Yii::$app->request->post()) {
            $model->load(Yii::$app->request->post());
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Data berhasil disimpan');
            } else {
                Yii::$app->session->setFlash('error', 'Data gagal disimpan');
            }
            return $this->refresh();
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionDelete($id)
    {
        $model = Registrasi::findOne($id);
        $model->delete();
        return $this->redirect(['index']);
    }

    public function actionUpdate($id)
    {
        $model = Registrasi::findOne($id);

        if (Yii::$app->request->post()) {
            $model->load(Yii::$app->request->post());
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Data berhasil disimpan');
            } else {
                Yii::$app->session->setFlash('error', 'Data gagal disimpan');
            }
            return $this->refresh();
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
}
