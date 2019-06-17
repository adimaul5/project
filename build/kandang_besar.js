var save_method;
var link = "<?php echo site_url('M_kandang_besar')?>";
var table;
function swal_berhasil() { swal({ title:"SUCCESS", text:"Berhasil", type: "success", closeOnConfirm: true}); }
function swal_error(msg) { swal({ title:"ERROR", text: msg, type: "warning", closeOnConfirm: true});  }
$(document).ready(function(){
      lihatData();

      $('#idImgLoader').show();
      
});

function alertForm(data) {
		$('#idAlert'+mdl).html(data).fadeIn(function(){$('#idAlert'+mdl).fadeOut(5000);});
}

function reset() {
		document.getElementById("fv_nama_kandang"+mdl).value = '';
		document.getElementById("fc_jumlah_ayam"+mdl).value = '';
		//document.getElementById("kategori_informasi_deskripsi_meta"+mdl).value = '';
	}

function lihatData(){
    	console.log(linke);

    	
	    $("#tabelData"+mdl).fadeOut("slow", function(){

			$.ajax({
				type: "POST",
				url: linke+"M_kandang_besar/act_table",
				success:function(html){
					$("#tabelData"+mdl).html(html);
				}
			});
			$('#idImgLoader').hide();
			$("#tabelData"+mdl).fadeIn('slow');
	    });
}

$(document).on('click', '#btnTambah'+mdl, function(){
		save_method = 'add'; 
		$('#form'+mdl).slideUp();
		reset();
		//document.getElementsByTagName("form")[0].setAttribute("id", "formInput"+mdl);
		$('#form'+mdl).fadeIn(1000);
		$('#btnTambah'+mdl).hide();
		$('#bacaData'+mdl).hide();
		// ckeditor();
});

function save() {
			$('#btn_save'+mdl).text('Saving...');
			$('#btn_save'+mdl).attr('disabled', true);

			var url;
			if (save_method == 'add') {
				url = linke+"M_kandang_besar/ajax_add";
			} else {
				url = linke+"M_kandang_besar/ajax_update"; 
			}

			$.ajax({
				url: url,
				type: "POST",
				data: $('#formAksi'+mdl).serialize(),
				dataType: "JSON",
				success: function(result) {
					// if (result.status) {
						//$("#loading").modal('hide');
						swal_berhasil();
						$('#form'+mdl).slideUp(500, 'swing');
						//alertForm(data);
						$('#bacaData'+mdl).show();
						$('#btnTambah'+mdl).fadeIn(1000);
						lihatData();
						$('#btn_save'+mdl).text('Simpan');
						$('#btn_save'+mdl).attr('disabled', false);
				}, error: function(jqXHR, textStatus, errorThrown) {
					 alert('Error adding/update data');
					//$('#bacaData'+mdl).slideUp(500,'swing');$('#panel-data'+mdl).fadeIn(1000); reload_table(); swal_error(response.error);
				}
			});
}

function reload_table() {
    table.ajax.reload(null, false);
}	

function edit(id) {
			save_method = 'update';
			$('#bacaData'+mdl).hide();
			$('#form'+mdl).slideUp(500, 'swing');
            $('#form'+mdl).slideDown(500);
			$.ajax({
				url : linke+"M_kandang_besar/ajax_edit/"+id,
				type: "GET",
				dataType: "JSON",
				success: function(result) {  
					//document.getElementById('fc_kdbahan').setAttribute('readonly','readonly');
					$('[name="fc_kdkandang"]').val(result.fc_kdkandang);
					$('[name="fv_nama_kandang"]').val(result.fv_nama_kandang);
					$('[name="fc_jumlah_ayam"]').val(result.fc_jumlah_ayam);

				}, error: function (jqXHR, textStatus, errorThrown) {
					alert('Error get data from ajax');
				}
			});
}
	
function hapus(id) {
		if (confirm('Are you sure delete this data?')) {
			$.ajax ({
				url : linke+"M_kandang_besar/ajax_delete/"+id,
				type: "POST",
				dataType: "JSON",
				success: function(data) {
					
					setTimeout(function(){
                        reload_table();
					}, 1000);
					swal_berhasil(); 
				}, error: function (jqXHR, textStatus, errorThrown) {
					swal({ title:"ERROR", text:"Error delete data", type: "warning", closeOnConfirm: true}); 
					//$('#btnSave').text('save'); $('#btnSave').attr('disabled',false); 
				}
			});
		}
}
