<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Data User</h1>
<ul>
  <?php foreach ($user as $value):?>
    <li>
      <? Html::encode("{value->nama}") ?>
    </li>
  <?php endforeach; ?>
</ul>

<? LinkPager::widget(['pagination' => $pagination]) ?>
