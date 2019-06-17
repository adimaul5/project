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
							<li class="active">Mutasi Antar Gudang</li>
						</ul>

	</div>

	<div class="col-xs-12">
						<div class="widget-box">
						<div class="widget-header">
						<h5 class="widget-title">
							Mutasi Antar Gudang											
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
								 	<div id="panel-data">	
									<div class="box-header">

										<button class="btn btn-danger" onclick="Tambah()"><i class="fa fa-plus"></i> Tambah Barang</button>

									</div><br />

									<table id="simple-table" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th>No</th>
													<th>Asal</th>
													<th>Tujuan</th>
													<th>Jenis Telur</th>
													<th>Jumlah Telur</th>

													<th>
														Berat Telur
													</th>
													<th>
														Jumlah Eggtray
													</th>
													<th>
														Aksi
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
												</tr>

												
											</tbody>
									</table>
									<br />
									<div class="box-header" style="text-align: right;">

										<button class="btn btn-primary" onclick="Tambah()"><i class="fa fa-plus"></i> Simpan Permintaan</button>

									</div><br />
									</div>

									<!-- form -->
									<div id="form-data" style="display:none;">

									<div class="widget-box">



									<div class="widget-body">

									<div class="widget-main">

									<div class="row">

									<div class="col-xs-12">

									<form class="form-horizontal" role="form" id="formAksi">

										 <input type="hidden" name="id_data">

										<div class="form-group">

										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Asal Permintaan </label>

											<div class="col-sm-6">

												<select class="form-control">
														<option>Gudang 1</option>
														<option>Gudang 2</option>
												</select>

											</div>

										</div>

										<div class="form-group">

										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Tujuan Permintaan </label>

											<div class="col-sm-6">

												<select class="form-control">
														<option>Gudang 1</option>
														<option>Gudang 2</option>
												</select>

											</div>

										</div>

										<div class="form-group">
					               		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Jenis Telur </label>
					               		<div class="col-sm-4">
						               			<div class="form-group">
						    	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
						                        <input type="text" class="form-control" name="item_nama" id="item_nama">
						    			           	<!-- </a> -->
						    		           	</div>
						               	</div>
						               	<div class="col-sm-1">
					               			<div class="form-group">
					      		           		<button type="button" onclick="cc()" class="btn btn-default btn-sm"><i class="fa fa-search" aria-hidden="true"></i></button>

					    		           	</div>

					               		</div>
					               		</div>
					               		<div class="form-group">
					               		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Jumlah Telur </label>

										<div class="col-sm-8">

											<input type="text" id="no_rekening" name="no_rekening" placeholder="Jumlah Telur" class="col-xs-10 col-sm-5" />

										</div>
					               		</div>
					               		<div class="form-group">
					               		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Berat Telur </label>

										<div class="col-sm-8">

											<input type="text" id="no_rekening" name="no_rekening" placeholder="Berat Telur" class="col-xs-10 col-sm-5" />

										</div>
					               		</div>
					               		<div class="form-group">
					               		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Jumlah Eggtray </label>

										<div class="col-sm-8">

											<input type="text" id="no_rekening" name="no_rekening" placeholder="Jumlah Eggtray" class="col-xs-10 col-sm-5" />

										</div>
					               		</div>
										<div class="col-md-offset-2 col-md-9">

													<button class="btn btn-info" type="button" id="btn_save">

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

									</div><!-- /.row -->

								 </div>
							</div>
						</div>
					</div>
					</div>	

					<div class="widget-box">
						<div class="widget-header">
						<h5 class="widget-title">
							History Mutasi Antar Gudang											
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
								 	<div class="form-group">
								 		<div class="col-sm-9">
											<!-- #section:elements.form.input-icon -->
											<span class="input-icon">
												<input type="text" id="form-field-icon-1">
											</span>

											<span class="input-icon input-icon-right">
												<input type="text" id="form-field-icon-2">
											</span>
											<span class="input-icon">
												<button class="btn btn-info" type="button" id="btn_save">

														Tampilkan

													</button>
											</span>
											<!-- /section:elements.form.input-icon -->
										</div>
								 	</div><br /><br />
								 	<table id="simple-table" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th>No</th>
													<th>Asal</th>
													<th>Tujuan</th>
													<th>Jenis Telur</th>
													<th>Jumlah Telur</th>

													<th>
														Berat Telur
													</th>
													<th>
														Jumlah Eggtray
													</th>
													<th>
														Aksi
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
												</tr>

												
											</tbody>
									</table>
								 </div>
							</div>
						</div>
					</div>			 		 

	     			</div>
</section>	

<script type="text/javascript">
	function Tambah() {

		save_method = 'add'; 

		$('#panel-data').fadeOut('slow');

		$('#form-data').fadeIn('slow'); 

		//document.getElementById('formAksi').reset();

	}
</script>