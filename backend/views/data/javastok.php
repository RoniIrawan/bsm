<?php
$this->title = 'Import stok Java';
$this->params['breadcrumbs'][] = ['label' => 'Migrasi data'];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box box-danger">    
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
</div><!-- /.box -->