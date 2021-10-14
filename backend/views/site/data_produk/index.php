<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'Data Produk';
?>
<div class="site-index">
  <div class="row">
        <?= Html::a('Tambah Buku', ['create'], $options = ['class' => 'btn btn-primary pull-right btn-sm']) ?>
    </div>
    <br />
    <h1>Data Produk</h1>
    <?php
    ?>
    <div class="row">
        <?php
        $i = 1;
        echo "<table class='table table-bordered text-center'>";
        echo "<tr>";
        echo "<th scope='col'>NO</th>";
        echo "<th scope='col'>Nama Produk</th>";
        echo "<th scope='col'>Harga Produk</th>";
        // echo "<th scope='col'>Gambar</th>";
        echo "<th scope='col'>AKSI</th>";
        echo "</tr>";
        foreach ($produk as $value) {
            echo "<tr>";
            echo "<td>".$i++."</td>";
            echo "<td>".$value->nama_produk."</td>";
            echo "<td> Rp ".$value->harga_produk.".-</td>";
            // echo "<td>" . Html::img('@upload/all/'.$value->gambar, [
            //   'width' => '200px',
            //   'height' => '200px',
            // ]) . "</td>";
            // echo "<td>" .  Html::a('Ubah', ['site/update', 'id' => $value->produk_id],['class' => 'btn btn-outline-success btn-sm']) . "</td>";
            echo "<td>".
            Html::a('Detail', ['site/update', 'id' => $value->produk_id],['class' => 'btn btn-info btn-sm']).' '.
            Html::a('Ubah', ['site/updateproduk', 'id' => $value->produk_id],['class' => 'btn btn-success btn-sm']).' '.
            Html::a(
                  'Hapus',
                  ['site/delete', 'id' => $value->produk_id],
                  ['class' => 'btn btn-danger btn-sm'],
                  ['onclick' => 'return (confirm("Apakah data mau di hapus?")?true:false);'],
            ) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>
</div>
