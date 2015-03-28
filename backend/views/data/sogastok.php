<?php
$this->title = 'Import stok Soga';
$this->params['breadcrumbs'][] = ['label' => 'Migrasi data'];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box box-warning">    
    <form role="form">
        <div class="box-body">            
            <div class="form-group">
                <label for="exampleInputFile">Silahkan masukan file berisi data stok BSM SOGA</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">[file format *.csv]</p>
            </div>            
        </div><!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-warning">Proses</button>
        </div>
    </form>
</div><!-- /.box -->