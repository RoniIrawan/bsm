<?php
use yii\helpers\Html;
$this->title = 'Import stok Java';
$this->params['breadcrumbs'][] = ['label' => 'Migrasi data'];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box box-danger">
    <div class="panel panel-content">            
    <?php if(isset($data['error'])):?>
        <p class="danger"><?= $data['error'] ?></p>
    <?php endif; ?>
    <?php if(isset($data['success'])):?>
        <p class="success"><?= $data['success'] ?></p>
    <?php endif; ?>
    <form role="form">
        <div class="box-body">            
            <div class="form-group">
                <label for="exampleInputFile">Silahkan masukan file berisi data stok JAVA SEVEN</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">[file format *.csv]</p>
            </div>            
        </div><!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-danger">Proses</button>
        </div>
    </form>
    </div>
</div><!-- /.box --> 