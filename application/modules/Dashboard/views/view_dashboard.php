<?php $title = "<i class='fa fa-home'></i>&nbsp;Home"; ?>
<?php
$var = 'dashboard';
?>
<div id="idImgLoader" style="margin: 0 auto; text-align: center;">
	<img src='assetsadmin/img/loader-dark.gif' />
</div>
<div id="data<?php echo $var; ?>" style="display:none;">
<section class="content">
<div class="page-header">
	<h1>
		<?php echo $title;?>
	</h1>
</div><!-- /.page-header -->

<div class='alert alert-success' id='berhasil' ><i class='fa fa-home'>&nbsp;</i>Selamat Datang Di Admin Web PT. Bukit Kapur</div>
</section>
</div>
<script type="text/javascript">
	var mdl = "<?php echo $var?>";
	var linke = "<?= base_url()?>";
</script>