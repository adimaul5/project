<?php
$var = 'kandang';
?>
<style type="text/css">
    
    td.details-control {
        background: url('https://cdn.rawgit.com/DataTables/DataTables/6c7ada53ebc228ea9bc28b1b216e793b1825d188/examples/resources/details_open.png') no-repeat center center;
        cursor: pointer;
    }
    tr.shown td.details-control {
        background: url('https://cdn.rawgit.com/DataTables/DataTables/6c7ada53ebc228ea9bc28b1b216e793b1825d188/examples/resources/details_close.png') no-repeat center center;
    }
 </style>
<div class="widget-box">
<div class="widget-header">
        <h4 class="widget-title">Kandang Kecil</h4>

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
<div class="box-header">
    <button class="btn btn-default" onclick="reload_table()"><i class="fa fa-refresh"></i> Reload</button>
    <button type="submit" class="btn btn-primary pull-left mb" id="btnTambah<?php echo $var; ?>" name="btnTambah" style="margin-left:1%;">
                    <i class="fa fa-plus"></i> Tambah Data
                </button>
</div><br />    
<table id="example" class="display responsive nowrap" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Kandang Kecil</th>
			<th>Jumlah Ayam</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>
    </div>
</div>  
</div>

<script>
var table;

$(document).ready(function() {
        table = $('#example').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "bDestroy": true,
        "serverSide": true, 
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('M_kandang_kecil/ajax_list')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
         responsive: {
            details: {
                type: 'column'
            }
        },
        columnDefs: [ {
            className: 'control',
            orderable: false,
            targets:   0
        } ],
        order: [ 1, 'asc' ]

    });
    
    }).fnDestroy();

    function reload_table() {
        table.ajax.reload(null, false);
    }
</script>