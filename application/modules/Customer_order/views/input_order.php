<?php
$var = 'customer_order';
?>
<section>
	<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Customer Order</li>
						</ul>

	</div>
	<div class="well">
		<button onclick="input_data()" class="btn btn-app btn-primary no-radius btn-sm">
			<i class="ace-icon fa fa-pencil-square-o bigger-200"></i>
				Input Data
		</button>	
	</div>
	<div class="alert alert-info">
											<button type="button" class="close" data-dismiss="alert">
												<i class="ace-icon fa fa-times"></i>
											</button>
											<strong>Master Customer Order</strong>

											<br>
										</div>
	<table id="simple-table" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th>No</th>
													<th>No. Customer Order</th>
													<th>Tanggal Input</th>
													<th>ID Customer</th>
													<th class="hidden-480">Email</th>

													<th>
														No. Telp
													</th>
													<th>
														Top
													</th>
													<th>
														Operator
													</th>
													<th>
														Disc
													</th>
													<th>
														Subtotal
													</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td class="center">
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
												</tr>

												
											</tbody>
										</table>
										<p><b>Detail :</b></p>
										<table id="simple-table" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th>No</th>
													<th>Kode Jenis Telur</th>
													<th>Jenis Telur</th>
													<th class="hidden-480">Jumlah Telur</th>
													<th>Berat Telur</th>
													<th class="hidden-480">Jumlah Eggtray</th>

													<th>
														Jumlah Pack
													</th>
													<th>
														Harga
													</th>
													<th>
														Subtotal
													</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td class="center">
													</td>
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
<div class="modal" id="modal-10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-lg">
	  		<div class="modal-content">
	    		<div class="modal-header">
	     		 	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	      			<h4 class="modal-title">Input Transaksi Customer Order</h4>
	    		</div>
	     		<div class="modal-body" style="overflow:auto;">
	     			
					<div class="col-xs-12">
						<div class="widget-box">
						<div class="widget-header">
						<h5 class="widget-title">
							Data Customer											
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
								 	<div class="col-xs-2">
					               			<div class="form-group">
					               				Id Customer
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
					               				Nama Customer
					               			</div>
					               		</div>
					               		<div class="col-xs-4">
						               			<div class="form-group">
						    	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
						                        <input type="text" class="form-control" name="item_nama" id="item_nama">
						    			           	<!-- </a> -->
						    		           	</div>
						               	</div> 
						               	  <div class="col-xs-12">
										   		<div class="col-xs-2">
									               			<div class="form-group">
									               				Alamat
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

					<div class="col-xs-12">
					<div class="widget-box">
						<div class="widget-header">
						<h5 class="widget-title">
							Data Transaksi Customer	Order										
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
	               				No. Customer Order
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
	               				Date
	               			</div>
	               		</div>
	               		<div class="col-xs-3">
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
	               				Top
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
							<a href="<?php echo base_url('Customer_order/detail_data')?>" class="btn btn-app btn-info btn-sm no-radius">
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
							</div>
						</div>
					</div>			 		 

	     			</div>
				</div>
	      		<div class="modal-footer">
	        		<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
	      		</div>
	    	</div>
	  	</div>
</div>																			
</section>

<script>
function input_data() {
		$("#modal-10").modal('show');
	}
</script>

<!-- <script type="text/javascript">
	var mdl = "<?php echo $var?>";
	var linke = "<?= base_url()?>";
</script> -->