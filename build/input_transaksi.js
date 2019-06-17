var save_method;
var link = "<?php echo site_url('Input_transaksi')?>";
var table;
function swal_berhasil() { swal({ title:"SUCCESS", text:"Berhasil", type: "success", closeOnConfirm: true}); }
function swal_error(msg) { swal({ title:"ERROR", text: msg, type: "warning", closeOnConfirm: true});  }
$(document).ready(function(){
      lihatData();
      //getNomor();
      $('#idImgLoader').show();
      
});

$(document).on('click', '#btnTambah'+mdl, function(){
		save_method = 'add'; 
		$("#modal-10"+mdl).modal('show');
		// ckeditor();
		getNomor();
});

// function input_data() {
// 		$("#modal-10"+mdl).modal('show');
// }

function lihatData(){
    	console.log(linke);

    	
	    $("#tabelData"+mdl).fadeOut("slow", function(){

			$.ajax({
				type: "POST",
				url: linke+"Input_transaksi/act_table",
				success:function(html){
					$("#tabelData"+mdl).html(html);
				}
			});
			$('#idImgLoader').hide();
			$("#tabelData"+mdl).fadeIn('slow');
	    });
}

function getNomor(){
        $.get(linke+"Input_transaksi/getNomor", $(this).serialize())
        .done(function(data) {
          $('#fc_notrans'+mdl).val(data);
          // $('#no_bpbne').val(data);
          var nomore = data;
          //  console.log(nomore);
        });
}

function save() {

			var fc_notrans=document.getElementById("fc_notrans"+mdl).value;
			//console.log(fc_notrans);
			
			$('#btn_save'+mdl).text('Saving...');
			$('#btn_save'+mdl).attr('disabled', true);

			var url;
			if (save_method == 'add') {
				url = linke+"Input_transaksi/ajax_add";
			}


			$.ajax({
				url: url,
				type: "POST",
				data: $('#formAksi'+mdl).serialize(),
				dataType: "JSON",
				success: function(result) {
					// if (result.status) {
						//$("#loading").modal('hide');
						
						$('#btn_save'+mdl).text('Simpan');
						$('#btn_save'+mdl).attr('disabled', false);
						

						var nomor_trans = document.getElementById("nomor_transaksi");
			          	nomor_trans.innerHTML = fc_notrans;
			          	nomor_trans.style.display = "block";

			          	$("#modal-kode"+mdl).modal('show');

			          	updateNomor();
				}, error: function(jqXHR, textStatus, errorThrown) {
					 alert('Error adding/update data');
					//$('#bacaData'+mdl).slideUp(500,'swing');$('#panel-data'+mdl).fadeIn(1000); reload_table(); swal_error(response.error);
				}
			});
}

function detail_transaksi(){
	$("#modal-10"+mdl).modal('hide');
	$("#modal-kode"+mdl).modal('hide');

	$("#tabelData"+mdl).fadeOut('slow');
	$("#FormTransaksi"+mdl).fadeIn('slow');
}

function updateNomor(){
        $.get(linke+"Input_transaksi/updateNomor", $(this).serialize())
        .done(function(data) {  });
}