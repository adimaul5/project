<?php $title = "<i class='fa fa-users'></i>&nbsp;Customer"; ?>
<?php
$var = 'customer';
?>
<!-- <div id="idImgLoader" style="margin: 0 auto; text-align: center;">
	<img src='<?php echo base_url();?>assetsadmin/img/loader-dark.gif' />
</div> -->

<div class="modal fade bs-example-modal-sm" id="" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <center><img src="<?php echo base_url('assetsadmin/img/loader.gif'); ?>"></center>
    </div>
  </div>
</div>

<div class="modal bs-example-modal-sm" id="loading" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <center>
  <div class="modal-dialog modal-sm" role="document" style="margin-top: 17%;     ">
    <div class="modal-content" style="width: 42%;" >
       <img src="<?php echo base_url('assetsadmin/img/loader.gif'); ?>">
       <p>Loading</p>
    </div>
  </div>
  </center>
</div>

<div id="bacaData<?php echo $var; ?>">

<div class="page-header">
  <h1>
    <?php echo $title;?>
  </h1>
</div><!-- /.page-header -->


<div class="row">
<div class="col-xs-12">

<div id="idAlert<?php echo $var; ?>"></div>
<div id="idImgLoader" align="middle" style="display:none;">
          <img src='<?php echo base_url('assetsadmin/img/loader.gif'); ?>' />
        </div>
        
    <div id="tabelData<?php echo $var; ?>"></div>

</div>
</div>
</div>

<script type="text/javascript">
  var mdl = "<?php echo $var?>";
  var linke = "<?= base_url()?>";
</script>

<div id="form<?php echo $var; ?>" style="display:none;">
<div class="widget-box">
<div class="widget-header">
    <h4 class="widget-title">Form Customer</h4>

  <div class="widget-toolbar">
    <a href="#" data-action="collapse">
      <i class="ace-icon fa fa-chevron-up"></i>
    </a>

    <a onclick="Batal()" data-action="close">
      <i class="ace-icon fa fa-times"></i>
    </a>
  </div>
  </div>

<div class="widget-body">
<div class="widget-main">
<div class="row">
<div class="col-xs-12">
<style type="text/css"> #loader{display: none} #preview{display: none}</style>


<form class="form-horizontal" role="form" id="formAksi<?php echo $var; ?>">
   <input type="hidden" name="fc_id" id="fc_id<?php echo $var; ?>">
  <div class="form-group">
  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Kode Customer </label>
    <div class="col-sm-10">
      <input type="text" id="fc_kdcust<?php echo $var; ?>" name="fc_kdcust" placeholder="Kode Customer" class="col-xs-10 col-sm-5" />
    </div>
  </div>
  <div class="form-group">
  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Nama Customer </label>
    <div class="col-sm-10">
      <input type="text" id="fv_nama<?php echo $var; ?>" name="fv_nama" placeholder="Nama Customer" class="col-xs-10 col-sm-5" />
    </div>
  </div>
  <div class="form-group">
  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Alamat Customer </label>
    <div class="col-sm-10">
      <input type="text" id="fv_alamat<?php echo $var; ?>" name="fv_alamat" placeholder="Alamat Customer" class="col-xs-10 col-sm-5" />
    </div>
  </div>
  <div class="form-group">
  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> No Telepon </label>
    <div class="col-sm-10">
      <input type="text" id="fc_telp<?php echo $var; ?>" name="fc_telp" placeholder="No Telepon" class="col-xs-10 col-sm-5" />
    </div>
  </div>
  <div class="form-group">
  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> No Hp </label>
    <div class="col-sm-10">
      <input type="text" id="fc_hp<?php echo $var; ?>" name="fc_hp" placeholder="No Hp" class="col-xs-10 col-sm-5" />
    </div>
  </div>
   <div class="form-group">
  <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Email </label>
    <div class="col-sm-10">
      <input type="text" id="fv_email<?php echo $var; ?>" name="fv_email" placeholder="Email" class="col-xs-10 col-sm-5" />
    </div>
  </div>
  <div class="col-md-offset-2 col-md-9">
        <button class="btn btn-info" type="button" id="btn_save<?php echo $var; ?>" onclick="save()">
          <i class="ace-icon fa fa-check bigger-110"></i>
          Simpan
        </button>

        &nbsp; &nbsp; &nbsp;
        <button class="btn" type="reset">
        <i class="ace-icon fa fa-undo bigger-110"></i>
          Reset
        </button>
  </div>
</form>
</div>
</div>
</div>          
</div><!-- /.row -->
</div>
</div>