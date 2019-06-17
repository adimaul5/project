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
							<li class="active">Payment</li>
						</ul>

	</div>
	<div class="col-sm-7">
	<div class="well">
		<a href="#" class="btn btn-app btn-yellow btn-xs">
			<i class="ace-icon fa fa-shopping-cart bigger-160"></i>
			Bayar
		</a>
		<a href="<?php echo base_url('Payment/list_payment'); ?>" class="btn btn-app btn-info btn-xs">
			<i class="ace-icon fa fa-envelope bigger-160"></i>
			View
		</a>
	</div>
	<table id="simple-table" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th></th>
													<th>Status</th>
													<th>No. DO</th>
													<th>No. CO</th>
													<th class="hidden-480">Email</th>

													<th>
														Tgl Co
													</th>
													<th>
														Do Date
													</th>
													<th>
														Top
													</th>
													<th>
														ID Customer
													</th>
													<th>
														Alamat Kirim
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
													<th>Nama Customer</th>
													<th>Alamat Customer</th>
													<th>Kota Customer</th>
													<th class="hidden-480">Telp</th>
													<th>Email</th>
													<th class="hidden-480">Total</th>
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
													
												</tr>

												
											</tbody>
										</table>
	</div>
	<div class="col-sm-5">
	<div class="col-xs-12">
	<form class="form-horizontal" role="form" id="formAksi">
	<div class="well">
		<button class="btn btn-app btn-grey btn-xs radius-4">
			<i class="ace-icon fa fa-floppy-o bigger-160"></i>

			Simpan
		</button>

		<button class="btn btn-app btn-danger btn-xs radius-4">
			<i class="ace-icon fa fa-trash-o bigger-160"></i>

			Batal
		</button>
	</div>
		<div class="widget-box">
			<div class="widget-body">
				<div class="widget-main">
					<div class="row">
					<div class="form-group">
					    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> CO Date </label>

							<div class="col-sm-10">

								<input type="text" id="no_rekening" name="no_rekening" placeholder="CO Date" class="col-xs-10 col-sm-5" />

							</div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Due Date </label>

							<div class="col-sm-10">

								<input type="text" id="no_rekening" name="no_rekening" placeholder="CO Date" class="col-xs-10 col-sm-5" />

							</div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> No. Customer Order </label>

							<div class="col-sm-10">

								<input type="text" id="no_rekening" name="no_rekening" placeholder="No. Customer Order" class="col-xs-10 col-sm-5" />

							</div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Customer </label>

							<div class="col-sm-10">

								<input type="text" id="no_rekening" name="no_rekening" placeholder="No. Customer Order" class="col-xs-10 col-sm-5" />

							</div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Bill Date </label>

							<div class="col-sm-10">

								<input type="text" id="no_rekening" name="no_rekening" placeholder="Bill Date" class="col-xs-10 col-sm-5" />

							</div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Collector </label>

							<div class="col-sm-10">

								<input type="text" id="no_rekening" name="no_rekening" placeholder="Bill Date" class="col-xs-10 col-sm-5" />

							</div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Cara Bayar </label>

							<div class="col-sm-10">

								<input type="text" id="no_rekening" name="no_rekening" placeholder="Bill Date" class="col-xs-10 col-sm-5" />

							</div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Kredit Rekening </label>

							<div class="col-sm-10">

								<input type="text" id="no_rekening" name="no_rekening" placeholder="Bill Date" class="col-xs-10 col-sm-5" />

							</div>
					</div>
					<hr />
					<div class="form-group">
					    <label class="col-sm-2 control-label no-padding-right" for="form-field-1" style="background-color: green;color: #fff;">Jumlah Piutang Rp. </label>

							<div class="col-sm-10">

								<input type="text" id="no_rekening" name="no_rekening" placeholder="Jumlah Piutang Rp." class="col-xs-10 col-sm-5" style="background-color: red;color: #fff;"/>

							</div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label no-padding-right" for="form-field-1" style="background-color: green;color: #fff;">Bayar Rp. </label>

							<div class="col-sm-10">

								<input type="text" id="no_rekening" name="no_rekening" placeholder="Bayar Rp." class="col-xs-10 col-sm-5" style="background-color: red;color: #fff;" />

							</div>
					</div>
						               	
					</div>
				</div>
			</div>				
		</div>
	</div>
	</div>
	</form>
</section>	