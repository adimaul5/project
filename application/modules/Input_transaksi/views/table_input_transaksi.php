<?php
$var = 'input_transaksi';
?>


<div class="well">
		

		<button type="submit" id="btnTambah<?php echo $var; ?>"  class="btn btn-app btn-info btn-sm no-radius">
			<i class="ace-icon fa fa-pencil-square-o bigger-200"></i>
				Input Data
		</button>		
	
		<a href="#" class="btn btn-app btn-danger btn-sm">
			<i class="ace-icon fa fa-print bigger-200"></i>
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
			<table id="example" class="display" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th>
												
													</th>
													<th>No. Transaksi</th>
													<th>Nama Kandang</th>

													<th>
														Umur Ayam
													</th>
													<th>
														Jumlah Ayam Mati
													</th>
													<th>
														Jumlah Ayam Sisa
													</th>
													<th >Produksi Telur(Butir)</th>
													<th >Produksi Telur(%)</th>
													<th >Produksi Telur(kg)</th>
													<th >Pakan Total/Kg</th>
													<th >Pakan Konsumsi Air</th>
													<th >Fcr</th>
													<th>Keterangan</th>
												</tr>
											</thead>

											<tbody>
												
												
											</tbody>
										</table>
	</div>
</div>	
</div>

<script type="text/javascript">
	$(document).ready(function() {
		 table = $('#example').DataTable({
        'ajax': '<?php echo base_url()."input_transaksi/ajax_list" ?>',
        // "type": "POST",
        'columns': [
            {
                'className':      'details-control',
                'orderable':      false,
                'data':           null,
                'defaultContent': '',
                 // 'render': function (data, type, full, meta){
                 //     return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '" style="width:50px;margin-left:-20px">&nbsp&nbsp';
                 // }
            },
            { 'data': 'fc_notrans' },
            { 'data': 'fc_kdkandang' },
            { 'data': 'fc_total_umur' },
            { 'data': 'fc_total_ayam_mati' },
            { 'data': 'fc_total_sisa_ayam_hidup' },
            { 'data': 'fc_total_jumlah_telur' },
            { 'data': 'fc_total_persen_produksi' },
            { 'data': 'fc_total_berat_telur' },
            { 'data': 'fc_total_konsumsi_pakan' },
            { 'data': 'fc_total_konsumsi_air' },
            { 'data': 'fc_total_fcr' },
            { 'data': 'fv_ket' }
        ],
		"pageLength": 10,
        'order': [[1, 'DESC']],
        "initComplete": function (oSettings) { //changed line

            var oTable = this;
            oTable.fnPageChange(<?php echo @$halaman ?>);
        }
    } );
    $('#example').on( 'page.dt', function () {
        var info = table.page.info();
        $('#pageInfo').html( 
            console.log('Showing page: '+info.page+' of '+info.pages) );
            document.getElementById('halaman').value = info.page;
        } );
    // Add event listener for opening and closing details
    $('#example tbody').on('click', 'td.details-control', function(){
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    });
	
    // Handle click on "Expand All" button
    $('#btn-show-all-children').on('click', function(){
        // Enumerate all rows
        table.rows().every(function(){
            // If row has details collapsed
            if(!this.child.isShown()){
                // Open this row
                this.child(format(this.data())).show();
                $(this.node()).addClass('shown');
            }
        });
    });

    // Handle click on "Collapse All" button
    $('#btn-hide-all-children').on('click', function(){
        // Enumerate all rows
        table.rows().every(function(){
            // If row has details expanded
            if(this.child.isShown()){
                // Collapse row details
                this.child.hide();
                $(this.node()).removeClass('shown');
            }
        });
    });
	//var allpage = table.fnPageChange();
	//console.log()
    // Handle click on "Select all" control
   $('#example-select-all').on('click', function(){
      // Get all rows with search applied
      var rows = table.rows({ 'search': 'applied' }).nodes();
      // Check/uncheck checkboxes for all rows in the table
      $('input[type="checkbox"]', rows).prop('checked', this.checked);
   });

   // Handle click on checkbox to set state of "Select all" control
   $('#example tbody').on('change', 'input[type="checkbox"]', function(){
      // If checkbox is not checked
      if(!this.checked){
         var el = $('#example-select-all').get(0);
         // If "Select all" control is checked and has 'indeterminate' property
         if(el && el.checked && ('indeterminate' in el)){
            // Set visual state of "Select all" control
            // as 'indeterminate'
            el.indeterminate = true;
         }
      }
   });
   // Handle form submission event
   $('#frm-example').on('submit', function(e){
      var form = this;

      // Iterate over all checkboxes in the table
      table.$('input[type="checkbox"]').each(function(){
         // If checkbox doesn't exist in DOM
         if(!$.contains(document, this)){
            // If checkbox is checked
            if(this.checked){
               // Create a hidden element
               $(form).append(
                  $('<input>')
                     .attr('type', 'hidden')
                     .attr('name', this.name)
                     .val(this.value)
               );
            }
         }
      });
      });

    });

	 function format ( d ) {
	    // `d` is the original data object for the row
	    console.log(d);
	   var parah='';
        $.getJSON('<?php echo base_url('input_transaksi/ajax_list_Det') ?>/' + d.fc_notrans, {
            format: "json"
        })
        .done(function (data) {
        	// console.log(data);
            var no = 1; 
            var atas = '<table class="table table-striped" cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;"><tr><th>No Transaksi</th><th>Jenis Telur</th><th>Jumlah Berat Eggtray</th><th>Jumlah Telur</th></tr>';
            var tengah = '';
            var gabung = '';
            var total = parseInt(0);
            $.each(data, function (key, val) {
                tengah+='<tr><td>' + val.fc_notrans +'</td><td>' + val.fv_jenis_telur + '</td><td>'+val.fn_jumlah_eggtray+'</td><td>'+val.fc_berat_telur+'</td><td>'+val.fn_jumlah_telur+'</td></tr>';
                no++;
               // total+=parseInt(val.jumlah_komisi_ambil);
            });
                // console.log('tengah222: '+tengah);
            if (tengah!="") {
                parah = atas+tengah;
            }else{
                parah = "Tidak Ada Data";
            }
                 document.getElementById('cuks['+d.fc_notrans+']').innerHTML = parah;

            })
        return '<div id="cuks['+d.fc_notrans+']"></div>';
	}

	
</script>