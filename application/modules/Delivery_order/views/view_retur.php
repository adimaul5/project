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
							<li class="active">Retur Delivery Order</li>
						</ul>

	</div>
	<div class="widget-box">
		<div class="widget-header">
		<h5 class="widget-title">
			Data Delivery Order											
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
				
				<table id="simple-table" class="table table-striped table-bordered table-hover">
													<thead>
														<tr>
															<th class="center">
																<label class="pos-rel">
																	<input type="checkbox" class="ace">
																	<span class="lbl"></span>
																</label>
															</th>
															<th>No Delivery Order</th>
															<th>No Customer Order</th>
															<th class="hidden-480">Tanggal DO</th>

															<th>
																Tanggal 
															</th>
															<th>
																Do Date
															</th>
															<th>
																Top
															</th>
															<th >Nama Customer</th>
															<th>
																Alamat Kirim
															</th>
															<th >Status</th>
															<th >Total Jumlah Telur</th>
															<th >Total Berat Telur</th>
															<th >Total Eggtray</th>
															<th >Total Pack</th>
															<th >Total </th>
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
		<p>Detail</p>
		<table id="simple-table" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th>Kode Jenis Telur</th>
													<th>Jenis Telur</th>
													<th class="hidden-480">Jumlah Butir Telur</th>

													<th>
														Jumlah Eggtray
													</th>
													<th>
														Berat Telur
													</th>
													<th>
														Jumlah Pack
													</th>
													<th>
														Price
													</th>
													<th >Subtotal</th>
												</tr>
											</thead>

											<tbody>
												<tr>
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

	</div>	
	</div>
	<div class="col-xs-12">
					<div class="well">
						<button  onclick="input_data()"  class="btn btn-app btn-primary btn-xs no-radius">
							<i class="ace-icon fa fa-undo bigger-160"></i>
								Retur 
						</button>	
					</div>
	</div>	

<div class="modal" id="modal-10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-lg">
	  		<div class="modal-content">
	    		<div class="modal-header">
	     		 	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	      			<h4 class="modal-title">Input Retur DO</h4>
	    		</div>
	     		<div class="modal-body" style="overflow:auto;">
	     			<div class="col-xs-12">
	     			 <div class="col-xs-2">
					    <div class="form-group">
					        Berat Telur DO
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
					        Berat Telur Retur
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
					        Berat Telur Kirim
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
               			</div>
               			<div class="col-xs-4">
							<a class="btn btn-app btn-info btn-sm no-radius">
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
</section>	
<script>
function input_data() {
		$("#modal-10").modal('show');
	}
</script>