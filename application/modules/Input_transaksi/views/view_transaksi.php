<?php
$var = 'input_transaksi';
?>
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
<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Transaksi Kandang Ke Gudang</li>
						</ul>

</div>

<div id="idAlert<?php echo $var; ?>"></div>
<div id="idImgLoader" align="middle" style="display:none;">
          <img src='<?php echo base_url('assetsadmin/img/loader.gif'); ?>' />
</div>
<div id="tabelData<?php echo $var; ?>"></div>

</div>

<script>
	var mdl = "<?php echo $var?>";
  	var linke = "<?= base_url()?>";
</script>	

<div class="modal" id="modal-10<?php echo $var; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-lg">
	  		<div class="modal-content">
	    		<div class="modal-header">
	     		 	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	      			<h4 class="modal-title">Input Transaksi Ke Gudang</h4>
	    		</div>
	     		<div class="modal-body" style="overflow:auto;">
	     		<form role="form" id="formAksi<?php echo $var; ?>">
	     			<div class="col-xs-12">
	               		<div class="col-xs-2">
	               			<div class="form-group">
	               				No. Transaksi
	               			</div>
	               		</div>
	               		<div class="col-xs-4">
		               			<div class="form-group">
		    	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
		                        <input type="text" class="form-control" name="fc_notrans" id="fc_notrans<?php echo $var;?>">
		    			           	<!-- </a> -->
		    		           	</div>
		               	</div>
		               	<div class="col-xs-2">
	               			<div class="form-group">
	               				Lokasi Gudang
	               			</div>
	               		</div>
	               		<div class="col-xs-4">
		               			<div class="form-group">
		    	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
		    	           		<select class="form-control" name="fc_kdgudang" id="fc_kdgudang">
		    	           			<option value="">Pilih Gudang</option>
		    	           			<?php foreach($gudang as $row){?>
		    	           			<option value="<?php echo $row['fc_kdgudang']?>"> <?php echo $row['fv_nmgudang']?></option>
		    	           			<?php } ?>
		    	           		</select>	
		    		           	</div>
		               	</div>
               		</div>
               		<div class="col-xs-12">
	               		<div class="col-xs-2">
	               			<div class="form-group">
	               				Input Date
	               			</div>
	               		</div>
	               		<div class="col-xs-4">
		               			<div class="form-group">
		    	           		<?php $date = date('Y-m-d H:i:s')?>
		                        <input type="text" class="form-control" name="fc_date" value="<?php echo $date;?>" id="fc_date">
		    			           	<!-- </a> -->
		    		           	</div>
		               	</div>
		               	<div class="col-xs-2">
	               			<div class="form-group">
	               				Operator
	               			</div>
	               		</div>
	               		<?php $user = $this->session->userdata('admin_username')?>
	               		<div class="col-xs-4">
		               			<div class="form-group">
		    	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
		                        <input type="text" class="form-control" name="fc_user" id="fc_user" value="<?php echo $user;?>">
		    			           	<!-- </a> -->
		    		           	</div>
		               	</div>
               		</div>
               		<div class="col-xs-12">
               			<div class="col-xs-2">
	               			<div class="form-group">
	               				Catatan
	               			</div>
	               		</div>
	               		<div class="col-xs-4">
		               			<div class="form-group">
		               				<textarea class="form-control" id="form-field-8" name="fv_ket" id="fv_ket" placeholder="Catatan"></textarea>
		               			</div>
		               	</div>		
               		</div>
               		<hr />
               		<div class="col-xs-12">
               			<div class="col-xs-2">
               			</div>
               			<div class="col-xs-4">
							<button class="btn btn-app btn-info btn-sm no-radius" type="button" id="btn_save<?php echo $var; ?>" onclick="save()">
											<i class="ace-icon fa fa-pencil-square-o bigger-200"></i>
											Simpan
							</button>
							<button class="btn btn-app btn-danger btn-sm">
											<i class="ace-icon fa fa-trash-o bigger-200"></i>
											Batal
										</button>		
               			</div>	
               		</div>
               		</form>
				</div>
	      		<div class="modal-footer">
	        		<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
	      		</div>
	    	</div>
	  	</div>
</div>

<div class="modal" id="modal-kode<?php echo $var; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-lg">
	  		<div class="modal-content">
	    		<div class="modal-header">
	      			<h4 class="modal-title">No Transaksi</h4>
	    		</div>
	     		<div class="modal-body" style="overflow:auto;">
	     			<div class="alert alert-info">
											<button type="button" class="close" data-dismiss="alert">
												<i class="ace-icon fa fa-times"></i>
											</button>
											<strong><div style="text-align: center;"><h2><span id="nomor_transaksi"></span></h2><br /><span><button type="button" onclick="detail_transaksi()" class="btn btn-danger" id="gritter-error">Tekan Tombol</button></span></div></strong>

											
											<br>
					</div>
	     		</div>
	     	</div>
	    </div>
</div>	    

<div id="FormTransaksi<?php echo $var; ?>" style="display: none;"> 
	<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-check green"></i>

									<strong class="green">
										No Transaksi :
										<small></small>
									</strong>
								</div>
<div class="col-xs-12">
	<div class="col-xs-12">
		<div class="widget-box">
		<div class="widget-header">
		<h5 class="widget-title">
			Recording Harian											
		</h5>
			<div class="widget-toolbar">
				<a href="#" data-action="collapse">
					<i class="ace-icon fa fa-chevron-up"></i>
				</a>

				<a href="#" data-action="close">
					<i class="ace-icon fa fa-times"></i>
				</a>
			</div>
			</div>

		<div class="widget-body">
			<div class="widget-main">
			 <div class="row">
			<div class="col-xs-12">
				<div class="col-xs-2">
	               			<div class="form-group">
	               				Bulan /Tahun
	               			</div>
	               		</div>
	               		<div class="col-xs-4">
		               			<div class="form-group">
		    	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
		                        <input type="text" class="form-control" name="item_nama" id="item_nama">
		    			           	<!-- </a> -->
		    		           	</div>
		               	</div>
		        <div class="col-xs-2">
	               			<div class="form-group">
	               				Kapasitas Kandang
	               			</div>
	               		</div>
	               		<div class="col-xs-4">
		               			<div class="form-group">
		    	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
		                        <input type="text" class="form-control" name="item_nama" id="item_nama">
		    			           	<!-- </a> -->
		    		           	</div>
		               	</div>       	
		    </div>
		    <div class="col-xs-12">
				<div class="col-xs-2">
	               			<div class="form-group">
	               				Kandang / Flock 
	               			</div>
	               		</div>
	               		<div class="col-xs-3">
		               			<div class="form-group">
		    	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
		                        <input type="text" class="form-control" name="item_nama" id="item_nama">
		    			           	<!-- </a> -->
		    		           	</div>
		               	</div>
		               	<div class="col-xs-1">
               			<div class="form-group">
      		           		<button type="button" onclick="cc()" class="btn btn-default btn-sm"><i class="fa fa-search" aria-hidden="true"></i></button>

    		           	</div>

               		</div>
		        <div class="col-xs-2">
	               			<div class="form-group">
	               				Tanggal Masuk DDC   
	               			</div>
	               		</div>
	               		<div class="col-xs-4">
		               			<div class="form-group">
		    	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
		                        <input type="text" class="form-control" name="item_nama" id="item_nama">
		    			           	<!-- </a> -->
		    		           	</div>
		               	</div>       	
		    </div>
		     <div class="col-xs-12">
				<div class="col-xs-2">
	               			<div class="form-group">
	               				Strain DOG
	               			</div>
	               		</div>
	               		<div class="col-xs-4">
		               			<div class="form-group">
		    	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
		                        <input type="text" class="form-control" name="item_nama" id="item_nama">
		    			           	<!-- </a> -->
		    		           	</div>
		               	</div>
		        <div class="col-xs-2">
	               			<div class="form-group">
	               				Rata-rata BB Pullet  
	               			</div>
	               		</div>
	               		<div class="col-xs-4">
		               			<div class="form-group">
		    	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
		                        <input type="text" class="form-control" name="item_nama" id="item_nama">
		    			           	<!-- </a> -->
		    		           	</div>
		               	</div>       	
		    </div>
		    </div>           	
			</div>
		</div>
		</div>	
	</div>
</div>


<div class="col-xs-12">
	<div class="col-xs-12">
		<div class="widget-box">
		<div class="widget-header">
		<h5 class="widget-title">
			Transaksi Harian											
		</h5>
			<div class="widget-toolbar">
				<a href="#" data-action="collapse">
					<i class="ace-icon fa fa-chevron-up"></i>
				</a>

				<a href="#" data-action="close">
					<i class="ace-icon fa fa-times"></i>
				</a>
			</div>
			</div>

		<div class="widget-body">
			<div class="widget-main">
			 <div class="row">
			<div class="col-xs-12">
				<div class="col-xs-2">
	               			<div class="form-group">
	               			 Jumlah Ayam Mati
	               			</div>
	               		</div>
	               		<div class="col-xs-4">
		               			<div class="form-group">
		    	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
		                        <input type="text" class="form-control" name="item_nama" id="item_nama">
		    			           	<!-- </a> -->
		    		           	</div>
		               	</div>
		        <div class="col-xs-2">
	               			<div class="form-group">
	               				Umur Ayam
	               			</div>
	               		</div>
	               		<div class="col-xs-4">
		               			<div class="form-group">
		    	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
		                        <input type="text" class="form-control" name="item_nama" id="item_nama">
		    			           	<!-- </a> -->
		    		           	</div>
		               	</div>       	
		    </div>
		    <div class="col-xs-12">
				<div class="col-xs-2">
	               			<div class="form-group">
	               			Konsumsi Pakan
	               			</div>
	               		</div>
	               		<div class="col-xs-4">
		               			<div class="form-group">
		    	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
		                        <input type="text" class="form-control" name="item_nama" id="item_nama">
		    			           	<!-- </a> -->
		    		           	</div>
		               	</div>
		        <div class="col-xs-2">
	               			<div class="form-group">
	               				Konsumsi Air
	               			</div>
	               		</div>
	               		<div class="col-xs-4">
		               			<div class="form-group">
		    	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
		                      <input type="text" class="form-control" name="item_nama" id="item_nama">
		    			           	<!-- </a> -->
		    		           	</div>
		               	</div>       	
		    </div>
		   <div class="col-xs-12">
		   		<div class="col-xs-2">
	               			<div class="form-group">
	               				Catatan
	               			</div>
	               		</div>
	               		<div class="col-xs-4">
		               			<div class="form-group">
		               				<textarea class="form-control" id="form-field-8" placeholder="Default Text"></textarea>
		               			</div>
		               	</div>	
		   </div>
		    </div>           	
			</div>
		</div>
		</div>	
	</div>
</div>

<div class="col-xs-12">
	<div class="col-xs-12">
		<div class="widget-box">
		<div class="widget-header">
		<h5 class="widget-title">
			Transaksi Harian											
		</h5>
			<div class="widget-toolbar">
				<a href="#" data-action="collapse">
					<i class="ace-icon fa fa-chevron-up"></i>
				</a>

				<a href="#" data-action="close">
					<i class="ace-icon fa fa-times"></i>
				</a>
			</div>
			</div>

		<div class="widget-body">
			<div class="widget-main">
				 <div class="row">
						<div class="col-xs-12">
							<div class="col-xs-2">
			               			<div class="form-group">
			               				Kode Jenis Telur 
			               			</div>
			               		</div>
			               		<div class="col-xs-3">
				               			<div class="form-group">
				    	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
				                        <input type="text" class="form-control" name="item_nama" id="item_nama">
				    			           	<!-- </a> -->
				    		           	</div>
				               	</div>
				               	<div class="col-xs-1">
		               			<div class="form-group">
		      		           		<button type="button" onclick="cc()" class="btn btn-default btn-sm"><i class="fa fa-search" aria-hidden="true"></i></button>

		    		           	</div>

		               		</div>
						</div>
						<div class="col-xs-12">
							<div class="col-xs-2">
			               			<div class="form-group">
			               				Jenis Telur 
			               			</div>
			               	</div>
			               	<div class="col-xs-4">
				               			<div class="form-group">
				    	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
				                        <input type="text" class="form-control" name="item_nama" id="item_nama">
				    			           	<!-- </a> -->
				    		           	</div>
				            </div>
				            <div class="col-xs-2">
			               			<div class="form-group">
			               				Jumlah Telur 
			               			</div>
			               	</div>
			               	<div class="col-xs-4">
				               			<div class="form-group">
				    	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
				                        <input type="text" class="form-control" name="item_nama" id="item_nama">
				    			           	<!-- </a> -->
				    		           	</div>
				            </div>
						</div>
						<div class="col-xs-12">
							<div class="col-xs-2">
			               			<div class="form-group">
			               				Jumlah Berat Telur 
			               			</div>
			               	</div>
			               	<div class="col-xs-4">
				               			<div class="form-group">
				    	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
				                        <input type="text" class="form-control" name="item_nama" id="item_nama">
				    			           	<!-- </a> -->
				    		           	</div>
				            </div>
				            <div class="col-xs-2">
			               			<div class="form-group">
			               				Jumlah EggTray Telur 
			               			</div>
			               	</div>
			               	<div class="col-xs-4">
				               			<div class="form-group">
				    	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
				                        <input type="text" class="form-control" name="item_nama" id="item_nama">
				    			           	<!-- </a> -->
				    		           	</div>
				            </div>
						</div>
			    </div>           	
			</div>
		</div>
		</div>	
	</div>
</div>
<div class="col-xs-12">
	<div class="well">
		<button  class="btn btn-app btn-primary btn-xs no-radius">
			<i class="ace-icon fa fa-pencil-square-o bigger-160"></i>
				Input 
		</button>		

		<a href="#" class="btn btn-app btn-danger btn-xs no-radius">
			<i class="ace-icon fa fa-trash-o bigger-160"></i>
				Hapus
		</a>
		<a href="#" class="btn btn-app btn-danger btn-xs no-radius">
			<i class="ace-icon fa fa-ban bigger-160"></i>
				Batal
		</a>		
</div>
</div>
<div class="col-xs-12">
<div class="widget-box">
<div class="widget-header">

	<div class="widget-toolbar">
		<a href="#" data-action="collapse">
			<i class="ace-icon fa fa-chevron-up"></i>
		</a>

		<a href="#" data-action="close">
			<i class="ace-icon fa fa-times"></i>
		</a>
	</div>
	</div>

<div class="widget-body">
	<div class="widget-main">
			<table id="simple-table" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace">
															<span class="lbl"></span>
														</label>
													</th>
													<th>Kode Jenis Telur</th>
													<th>Jenis Telur</th>
													<th class="hidden-480">Jumlah Telur</th>

													<th>
														Berat Telur
													</th>
													<th>
														Jumlah Eggtray
													</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace">
															<span class="lbl"></span>
														</label>
													</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													
												</tr>

												
											</tbody>
										</table>
	</div>
</div>	
</div>
</div>
</div>		