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
							<li class="active">Delivery Order</li>
						</ul>

	</div>

	<div class="widget-box">
		<div class="widget-header">
		<h5 class="widget-title">
			Data Customer Order											
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
															<th>Status</th>
															<th>No Customer Order</th>
															<th class="hidden-480">Tanggal</th>

															<th>
																Id Customer
															</th>
															<th>
																Do Date
															</th>
															<th>
																Top
															</th>
															<th>
																Alamat 
															</th>
															<th >Nama Customer</th>
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

	<div class="col-xs-12" style="text-align: center;">
	<br /><br />
			<button  class="btn btn-app btn-primary btn-xs no-radius">
				<i class="ace-icon fa fa-reply bigger-160"></i>
					CO
			</button>	

			<button  onclick="input_data()" class="btn btn-app btn-success btn-xs no-radius">
				<i class="ace-icon fa fa-share bigger-160"></i>
					Do 
			</button>	
	<br /><br />			
	</div>

	<div class="widget-box">
	<div class="widget-body">
			<div class="widget-main">
			<div class="row">
	
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

<div class="modal" id="modal-10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-lg">
	  		<div class="modal-content">
	    		<div class="modal-header">
	     		 	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	      			<h4 class="modal-title">Armada</h4>
	    		</div>
	     		<div class="modal-body" style="overflow:auto;">
	     			<p>
	     			<button class="btn btn-app btn-primary no-radius">
						<i class="ace-icon fa fa-pencil-square-o bigger-160"></i>
							Pilih
					</button>
	     			</p>
	     				<table id="simple-table" class="table table-striped table-bordered table-hover">
													<thead>
														<tr>
															<th class="center">
																<label class="pos-rel">
																	<input type="checkbox" class="ace">
																	<span class="lbl"></span>
																</label>
															</th>
															<th>No. Polisi</th>
															<th>Nama Kendaraan</th>
															<th class="hidden-480">Nama Sopir</th>
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
															
														</tr>

														
													</tbody>
						</table> 
						<div class="col-xs-12">
										   		<div class="col-xs-2">
									               			<div class="form-group">
									               				Memo
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
</section>	

<script>
function input_data() {
		$("#modal-10").modal('show');
	}
</script>