<?php
use yii\helpers\Html;
?>
<style>
    tr {
        text-align: center;
    }

    th {
        text-align: center;
    }
</style>
<h1>Daftar User</h1>
<div class="container">
    <div class="row">
        <?= Html::a('Tambah Buku', ['create'], $options = ['class' => 'btn btn-primary pull-right']) ?>
    </div>
    <br />
    <h1>Tambah User</h1>
    <?php
    ?>
    <div class="row">
        <?php
        $i = 1;
        echo "<table class='table table-bordered table-striped'>";
        echo "<tr>";
        echo "<th>NO</th>";
        echo "<th>Username</th>";
        echo "<th>Password</th>";
        echo "<th colspan='2'>AKSI</th>";
        echo "</tr>";
        foreach ($register as $value) {
            echo "<tr>";
            echo "<td>" . $i++ . "</td>";
            echo "<td>" . $value->username . "</td>";
            echo "<td>" . $value->password . "</td>";
            echo "<td>" .  Html::a('<i class="glyphicon glyphicon-pencil"></i>', ['buku/update', 'id' => $bukus->kode_buku]) . "</td>";
            echo "<td>" .  Html::a(
                '<i class="glyphicon glyphicon-trash"></i>',
                ['buku/delete', 'id' => $value->username],
                ['onclick' => 'return (confirm("Apakah data mau di hapus?")?true:false);']
            ) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>
</div>
