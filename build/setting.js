var link = "<?= site_url('BiayaTambahan')?>";

function swal_berhasil() {
 	swal({ 
 		title:"BERHASIL", 
 		text:"Berhasil Mengubah Data Biaya Tambahan",
 		type: "success", 
 		closeOnConfirm: true}); 
}

function swal_error(msg) { 
	swal({ 
		title:"ERROR", 
		text: msg, 
		type: "warning", 
		closeOnConfirm: true});
}

$(document).ready(function(){
	$.ajax({
			url : linke+"BiayaTambahan/ajax_edit1/",
			type: "GET",
			dataType: "JSON",
			success: function(result) {  
				//document.getElementById('fc_kdbahan').setAttribute('readonly','readonly');
				$('[name="biayatran"]').val(result.biayatran);
				$('[name="biayapack"]').val(result.biayapack);
				$('[name="biayaegg"]').val(result.biayaegg);

			}, error: function (jqXHR, textStatus, errorThrown) {
				alert('Error get data from ajax');
			}
		});
	});