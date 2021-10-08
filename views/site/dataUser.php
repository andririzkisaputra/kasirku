<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Data User</h1>
<ul>
  <?php foreach ($user as $key => $value):?>
    <li>
      <? echo $value; ?>
    </li>
  <?php endforeach; ?>
</ul>
