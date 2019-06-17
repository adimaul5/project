<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Transfer Telur Ke Kandang Besar</li>
						</ul>

</div>
<div class="well">
		<button onclick="input_data()" class="btn btn-app btn-primary no-radius">
			<i class="ace-icon fa fa-pencil-square-o bigger-230"></i>
				Input Data
		</button>		

		<a href="#" class="btn btn-app btn-danger no-radius">
			<i class="ace-icon fa fa-print bigger-230"></i>
				Print
		</a>		
</div>

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
													<th>No. Transaksi</th>
													<th>Nama Kandang Kecil</th>
													<th class="hidden-480">Nama Kandang Besar</th>

													<th>
														Umur Ayam
													</th>
													<th>
														Jumlah Ayam Mati
													</th>
													<th>
														Jumlah Ayam Afkir
													</th>
													<th>
														Jumlah Ayam Sisa
													</th>
													<th >Produksi Telur(Butir)</th>
													<th >Produksi Telur(%)</th>
													<th >Produksi Telur(kg)</th>
													<th >Pakan Total/Kg</th>
													<th >Pakan Gram/Gram</th>
													<th >Fcr</th>
													<th>Keterangan</th>
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
													<td></td>
													<td></td>
													<td></td>
													<td></td>
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

<div class="modal" id="modal-10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-lg">
	  		<div class="modal-content">
	    		<div class="modal-header">
	     		 	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	      			<h4 class="modal-title">Input Transfer Ke Kandang Besar</h4>
	    		</div>
	     		<div class="modal-body" style="overflow:auto;">
	     			<div class="col-xs-12">
	               		<div class="col-xs-2">
	               			<div class="form-group">
	               				No. Transaksi
	               			</div>
	               		</div>
	               		<div class="col-xs-4">
		               			<div class="form-group">
		    	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
		    			        <input type="hidden" class="form-control" name="kode_item" id="kode_item" >
		                        <input type="text" class="form-control" name="item_nama" id="item_nama">
		    			           	<!-- </a> -->
		    		           	</div>
		               	</div>
		               	<div class="col-xs-2">
	               			<div class="form-group">
	               				Lokasi Kandang Besar
	               			</div>
	               		</div>
	               		<div class="col-xs-4">
		               			<div class="form-group">
		    	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
		    			        <input type="hidden" class="form-control" name="kode_item" id="kode_item" >
		                        <input type="text" class="form-control" name="item_nama" id="item_nama">
		    			           	<!-- </a> -->
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
		                        <input type="text" class="form-control" name="item_nama" value="<?php echo $date;?>" id="item_nama">
		    			           	<!-- </a> -->
		    		           	</div>
		               	</div>
		               	<div class="col-xs-2">
	               			<div class="form-group">
	               				Operator
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
               		<hr />
               		<div class="col-xs-12">
               			<div class="col-xs-2">
               			</div>
               			<div class="col-xs-4">
							<a href="<?php echo base_url('Transfer_telur/detail_kandang_besar')?>" class="btn btn-app btn-info btn-sm no-radius">
											<i class="ace-icon fa fa-pencil-square-o bigger-200"></i>
											Simpan
							</a>
							<button class="btn btn-app btn-danger btn-sm">
											<i class="ace-icon fa fa-trash-o bigger-200"></i>
											Batal
										</button>		
               			</div>	
               		</div>
				</div>
	      		<div class="modal-footer">
	        		<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
	      		</div>
	    	</div>
	  	</div>
</div>
<script>
function input_data() {
		$("#modal-10").modal('show');
	}
</script>	