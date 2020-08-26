<!--JS-->
<script src="<?= base_url()?>assets/js/polyfill.min.js"></script>
<script src="<?= base_url()?>assets/js/jquery.min.js"></script>
<script src="<?= base_url()?>assets/js/jquery.viewport.min.js"></script>
<script src="<?= base_url()?>assets/js/jQuerySimpleCounter.min.js"></script>
<script src="<?= base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url()?>assets/js/isotope.pkgd.min.js"></script>
<script src="<?= base_url()?>assets/js/animsition.min.js"></script>
<script src="<?= base_url()?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url()?>assets/js/rellax.min.js"></script>
<script src="<?= base_url()?>assets/js/swiper.min.js"></script>
<script src="<?= base_url()?>assets/js/smoothscroll.js"></script>
<script src="<?= base_url()?>assets/js/svg4everybody.legacy.min.js"></script>
<script src="<?= base_url()?>assets/js/TweenMax.min.js"></script>
<script src="<?= base_url()?>assets/js/TimelineLite.min.js"></script>
<script src="<?= base_url()?>assets/js/typed.min.js"></script>
<script src="<?= base_url()?>assets/js/vivus.min.js"></script>

<!--Revolution JS-->
<script src="<?= base_url()?>assets/js/revolution/jquery.themepunch.tools.min.js"></script>
<script src="<?= base_url()?>assets/js/revolution/jquery.themepunch.revolution.min.js"></script>
<!--Revolution Panorama Add-On JS-->
<script src="<?= base_url()?>assets/js/revolution-addons/panorama/three.min.js"></script>
<script src="<?= base_url()?>assets/js/revolution-addons/panorama/revolution.addon.panorama.min.js"></script><!-- Revolution Slicey Add-On JS-->
<script src="<?= base_url()?>assets/js/revolution-addons/slicey/revolution.addon.slicey.min.js"></script>
<!-- Revolution Panorama extensions JS (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading)-->
<script src="<?= base_url()?>assets/js/revolution/extensions/revolution.extension.actions.min.js"></script>
<script src="<?= base_url()?>assets/js/revolution/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?= base_url()?>assets/js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?= base_url()?>assets/js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?= base_url()?>assets/js/revolution/extensions/revolution.extension.migration.min.js"></script>
<script src="<?= base_url()?>assets/js/revolution/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?= base_url()?>assets/js/revolution/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?= base_url()?>assets/js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?= base_url()?>assets/js/revolution/extensions/revolution.extension.video.min.js"></script>
<!--Theme JS-->
<script src="<?= base_url()?>assets/js/theme.js"></script>
<!-- Jquery Toast -->
<script src="<?= base_url()?>node_modules/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
<!-- Datatables -->
<script src="<?= base_url()?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Jquery Confirm -->
<script src="<?= base_url()?>vendor/jquery-confirm/jquery-confirm.min.js"></script>
<!-- Jquery- FileInput -->
<script src="<?= base_url()?>vendor/jquery-fileinput/js/plugins/piexif.js" type="text/javascript"></script>
<script src="<?= base_url()?>vendor/jquery-fileinput/js/plugins/sortable.js" type="text/javascript"></script>
<script src="<?= base_url()?>vendor/jquery-fileinput/js/fileinput.js" type="text/javascript"></script>
<script src="<?= base_url()?>vendor/jquery-fileinput/js/locales/id.js" type="text/javascript"></script>
<script src="<?= base_url()?>vendor/jquery-fileinput/js/locales/es.js" type="text/javascript"></script>
<script src="<?= base_url()?>vendor/jquery-fileinput/themes/fas/theme.js" type="text/javascript"></script>
<script src="<?= base_url()?>vendor/jquery-fileinput/themes/explorer-fas/theme.js" type="text/javascript"></script>
<!-- select2 -->
<script src="<?= base_url()?>vendor/select2/select2.min.js" type="text/javascript"></script>



<script type="text/javascript" >
if (typeof $ == 'undefined') { var $ = jQuery; }
$(document).ready(function() {
	const thisMenu = "<?=$container?>";

	$('#select2MailTo').select2({
		dropdownAutoWidth : true,
    width: '100%'
	});

  if(thisMenu=="create-event"){
  	$("#Lampiran").fileinput({
        showUpload: false,
        dropZoneEnabled: true,
        maxFileCount: 1,
        mainClass: "input-group-md",
        'theme': 'explorer-fas',
    }); 
  }

	// ALERT NEW MEMBER -------------------------------------------------------------------------------
    let msgnewmember = "<?= $this->session->flashdata('msgnewmember')?>";
	if(msgnewmember=="Registrasi Sukses"){
	  $.toast({
	      heading: 'Success',
	      text: 'Registrasi member berhasil, data anda terlebih dahulu akan di verifikasi oleh admin.',
	      showHideTransition: 'slide',
	      icon: 'success',
	      position: 'bottom-right',
	      hideAfter: 10000
	  })
	}
	// --------------------------------------------------------------------------------------------------

	// ALERT LOGIN SUCCESS
	let loginsuccess = "<?= $this->session->flashdata('loginsuccess')?>";
	if(loginsuccess=="1"){
	  $.toast({
	      heading: 'Success',
	      text: 'Login Berhasil',
	      showHideTransition: 'slide',
	      icon: 'success',
	      position: 'bottom-right',
	      hideAfter: 5000
	  })
	}	

	// ALERT LOGOUT SUCCESS
	let logoutsuccess = "<?= $this->session->flashdata('logoutsuccess')?>";
	if(logoutsuccess=="1"){
	  $.toast({
	      heading: 'Success',
	      text: 'Logout Berhasil',
	      showHideTransition: 'slide',
	      icon: 'success',
	      position: 'bottom-right',
	      hideAfter: 5000
	  })
	}

	if(thisMenu=="my-event"){
		// ALERT NEW EVENT -------------------------------------------------------------------------------
	  let msgnewevent = "<?= $this->session->flashdata('msgnewevent')?>";
		if(msgnewevent=="1"){
		  $.toast({
		      heading: 'Success',
		      text: 'Event Berhasil Dibuat.',
		      showHideTransition: 'slide',
		      icon: 'success',
		      position: 'bottom-right',
		      hideAfter: 7000
		  });
		} else if(msgnewevent=="0"){
			$.toast({
	      heading: 'Error',
	      text: "Event Gagal Dibuat.",
	      showHideTransition: 'slide',
	      icon: 'error',
	      position: 'top-right',
	      hideAfter: 3000
	  	});
		}
		// --------------------------------------------------------------------------------------------------

		// ALERT UPDATE EVENT -------------------------------------------------------------------------------
		let msgupdateevent = "<?= $this->session->flashdata('msgupdateevent')?>";
		if(msgupdateevent=="1"){
		  $.toast({
		      heading: 'Success',
		      text: 'Event Berhasil Diupdate.',
		      showHideTransition: 'slide',
		      icon: 'success',
		      position: 'bottom-right',
		      hideAfter: 7000
		  });
		} else if(msgupdateevent=="0"){
			$.toast({
	      heading: 'Error',
	      text: "Event Gagal Diupdate.",
	      showHideTransition: 'slide',
	      icon: 'error',
	      position: 'top-right',
	      hideAfter: 3000
	  	});
		}
		// ALERT UPDATE EVENT -------------------------------------------------------------------------------
	}

	// ALERT UPDATE MEMBER -------------------------------------------------------------------------------
  let msgupdatemember = "<?= $this->session->flashdata('msgupdatemember')?>";
	if(msgupdatemember=="1"){
	  $.toast({
	      heading: 'Success',
	      text: 'Update Profile Berhasil',
	      showHideTransition: 'slide',
	      icon: 'success',
	      position: 'bottom-right',
	      hideAfter: 7000
	  });
	} else if(msgupdatemember=="0"){
		$.toast({
      heading: 'Error',
      text: "Update Profile Gagal",
      showHideTransition: 'slide',
      icon: 'error',
      position: 'top-right',
      hideAfter: 3000
  	});
	}
	// --------------------------------------------------------------------------------------------------


	// Datatables Member
	$.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
	{
	    return {
	        "iStart": oSettings._iDisplayStart,
	        "iEnd": oSettings.fnDisplayEnd(),
	        "iLength": oSettings._iDisplayLength,
	        "iTotal": oSettings.fnRecordsTotal(),
	        "iFilteredTotal": oSettings.fnRecordsDisplay(),
	        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
	        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
	    };
	};
 
	var tablememberlisting = $("#member-listing").DataTable({
	  initComplete: function() {
	    var api = this.api();
	    $('#mytable_filter input')
	        .off('.DT')
	        .on('input.DT', function() {
	            api.search(this.value).draw();
	    });
	  },
	  oLanguage: {
	    sProcessing: "loading..."
	  },
	  processing: true,
	  serverSide: true,
	  ajax: {"url": "<?php echo base_url().'admin/get_member_json'?>", "type": "POST"},
		columns: [
		    {"data": "RunNo"},
		    {"data": "Nama"},
		    {"data": "Username"},
		    {"data": "Email"},
		    {"data": "VerifyYN"},
		    {"data": "view",className: "text-right"}
		],
	  order: [[1, 'asc']],
    rowCallback: function(row, data, iDisplayIndex) {
    		if(data['VerifyYN'] == '1'){
		      $(row).find('td:eq(4)').html('Verified');
		      $(row).find('td:eq(4)').css('color', '#008000');
		    } else {
		      $(row).find('td:eq(4)').html('Unverified');
		      $(row).find('td:eq(4)').css('color', '#ff0000');	
		    }

        var info = this.fnPagingInfo();
        var page = info.iPage;
        var length = info.iLength;
        $('td:eq(0)', row).html();
    }
	});
	// Increment
	tablememberlisting.on( 'order.dt search.dt', function () {
      tablememberlisting.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
          cell.innerHTML = i+1;
      } );
  } ).draw();

	// VEIFIKASI MEMBER
	$('#member-listing').on('click','.verifikasi_record',function(){
		var RunNo = $(this).data('runno');
		$.ajax({
			url  : "<?= base_url().'admin/get_member_detail'?>",
			type : "POST",
			data : {RunNo : RunNo},
			dataType : "html",
			success : function(data){
				$('.modal-body-member-detail').html(data);
        // show modal
        $('#modalMemberDetail').appendTo("body").modal('show');
			}
		})
	});

	$('#btnVerifikasiMember').on('click', function(){
		var RunNo = $("#RunNoVerifyMember").val();
		$.ajax({
			url  : "<?= base_url().'admin/verify_member'?>",
			type : "POST",
			data : {RunNo : RunNo},
			success : function(data){
        $('#modalMemberDetail').modal('hide');
        tablememberlisting.ajax.reload();
				if(data=="1"){
					$.toast({
				      heading: 'Success',
				      text: 'Verifikasi Member Berhasil',
				      showHideTransition: 'slide',
				      icon: 'success',
				      position: 'bottom-right',
				      hideAfter: 5000
				  });
				} else {
					$.toast({
			      heading: 'Error',
			      text: "Gagal Verifikasi.",
			      showHideTransition: 'slide',
			      icon: 'error',
			      position: 'bottom-right',
			      hideAfter: 3000
			  	});
				}
			}
		});
	});

	$('#member-listing').on('click','.lihat_member',function(){
		var RunNo = $(this).data('runno');
		$.ajax({
			url  : "<?= base_url().'admin/get_member_detail'?>",
			type : "POST",
			data : {RunNo : RunNo},
			dataType : "html",
			success : function(data){
				$("#btnVerifikasiMember").hide();
				$('.modal-body-member-detail').html(data);
        // show modal
        $('#modalMemberDetail').appendTo("body").modal('show');
			}
		})
	});

  // DELETE MEMBER
  $('#member-listing').on('click','.delete_member',function(){
  	var RunNo = $(this).data('runno');
		$.confirm({
		    title: 'Hapus Member',
		    content: 'Anda yakin akan menghapus data member?',
		    type: 'red',
		    typeAnimated: true,
		    buttons: {
		        tryAgain: {
		            text: 'Hapus',
		            btnClass: 'btn-red',
		            action: function(){
		            	$.ajax({
										url  : "<?= base_url().'admin/hapus_member'?>",
										type : "POST",
										data : {RunNo : RunNo},
										success : function(data){
							        tablememberlisting.ajax.reload();
											if(data=="1"){
												$.toast({
											      heading: 'Success',
											      text: 'Hapus Member Berhasil',
											      showHideTransition: 'slide',
											      icon: 'success',
											      position: 'bottom-right',
											      hideAfter: 5000
											  });
											} else {
												$.toast({
										      heading: 'Error',
										      text: "Gagal Hapus Member",
										      showHideTransition: 'slide',
										      icon: 'error',
										      position: 'bottom-right',
										      hideAfter: 3000
										  	});
											}
										}
									});
		            }
		        },
		        close: {
		            text: 'Tidak',
		            action: function(){
		            }
		        }
		    }
		});
	});


  // MENU EVENT SCROLL
  if(thisMenu=="event"){
    var getEvents = function(page){
        $("#loader").show();
        $.ajax({
            url:"<?php echo base_url() ?>event/fetch_event",
            type:'GET',
            data: {page:page}
        }).done(function(response){
            $("#load_data").append(response);
            $("#loader").hide();
            $('#load_more').data('val', ($('#load_more').data('val')+1));
            if(response==""){
            	$("#load_more").hide();
            }
        });
    };
  	getEvents(0);

    $("#load_more").click(function(e){
        e.preventDefault();
        var page = $(this).data('val');
        getEvents(page);
    });
  }

  // MENU MEMBER SCROLL
  if(thisMenu=="member"){
    var getMembers = function(page){
        $("#loader_member").show();
        $.ajax({
            url:"<?php echo base_url() ?>member/fetch_member",
            type:'GET',
            data: {page:page}
        }).done(function(response){
            $("#load_data_member").append(response);
            $("#loader_member").hide();
            $('#load_more_member').data('val', ($('#load_more_member').data('val')+1));
            if(response==""){
            	$("#load_more_member").hide();
            }
        });
    };
  	getMembers(0);

    $("#load_more_member").click(function(e){
        e.preventDefault();
        var page = $(this).data('val');
        getMembers(page);
    });
  }

  // MENU EVENT MEMBER
  if(thisMenu=="my-event"){
    window.getEventsMember = function(page){
        $("#loader_event_member").show();
        $.ajax({
            url:"<?php echo base_url() ?>event/fetch_event_member",
            type:'GET',
            data: {page:page}
        }).done(function(response){
        		if(response==""){
        			$("#load_more_event_member").hide();
        		}
            $(response).hide().appendTo("#load_data_event_member").slideDown(500);
            $("#loader_event_member").hide();
            $('#load_more_event_member').data('val', ($('#load_more_event_member').data('val')+1));
        });
    };
  	getEventsMember(0);

    $("#load_more_event_member").click(function(e){
        e.preventDefault();
        var page = $(this).data('val');
        getEventsMember(page);
    });
  }

});

// SHOW DETAIL MEMBER FROM HOME
function fnShowDetailMemberFromHome(RunNo){
	$.ajax({
		url  : "<?= base_url().'home/get_member_detail_home'?>",
		type : "POST",
		data : {RunNo : RunNo},
		dataType : "html",
		success : function(data){
			$('.modal-body-member-detail-home').html(data);
      $('#modalMemberDetailHome').appendTo("body").modal('show');
		}
	});
}

// DELETE EVENT 
function fnDeleteEvent(RunNo){
	$.confirm({
	    title: 'Hapus Event',
	    content: 'Anda yakin akan menghapus event?',
	    type: 'red',
	    typeAnimated: true,
	    buttons: {
	        tryAgain: {
	            text: 'Hapus',
	            btnClass: 'btn-red',
	            action: function(){
	            	$.ajax({
									url  : "<?= base_url().'event/hapus_event'?>",
									type : "POST",
									data : {RunNo : RunNo},
									success : function(data){
										if(data=="1"){
											$("#load_data_event_member").html("");
											$('#load_more_event_member').data('val', 0);
											getEventsMember(0);
											$.toast({
										      heading: 'Success',
										      text: 'Hapus Member Berhasil',
										      showHideTransition: 'slide',
										      icon: 'success',
										      position: 'bottom-right',
										      hideAfter: 5000
										  });
										} else {
											$("#load_data_event_member").html("");
											$('#load_more_event_member').data('val', 0);
											getEventsMember(0);
											$.toast({
									      heading: 'Error',
									      text: "Gagal Hapus Member",
									      showHideTransition: 'slide',
									      icon: 'error',
									      position: 'bottom-right',
									      hideAfter: 3000
									  	});
										}
									}
								});
	            }
	        },
	        close: {
	            text: 'Tidak',
	            action: function(){
	            }
	        }
	    }
	});
}

function fnSendMailTo(RunNo){
	$("#ModalRunNoEventValue").val(RunNo);
	$("#modalSendMailTo").appendTo("body").modal('show');
}


function fnSendingEmail(){
	let RunNo = $("#ModalRunNoEventValue").val();
	let arrMailTo = $("#select2MailTo").val();
	if(arrMailTo==null || arrMailTo==""){
		alert("Silahkan pilih penerima."); return;
	}
	$.ajax({
		url  : "<?php echo base_url().'event/send_mail_direct'?>",
		type : "POST",
		data : {
			RunNo : RunNo,
			arrMailTo : arrMailTo
		},
		success : function(data){
			$("#modalSendMailTo").modal('hide');
			if(data=="1"){
				$.toast({
			      heading: 'Success',
			      text: 'Email Berhasil Terkirim',
			      showHideTransition: 'slide',
			      icon: 'success',
			      position: 'bottom-right',
			      hideAfter: 5000
			  });
			} else {
				$.toast({
		      heading: 'Error',
		      text: "Email Gagal Terkirim",
		      showHideTransition: 'slide',
		      icon: 'error',
		      position: 'bottom-right',
		      hideAfter: 3000
		  	});
			}
		}

	});
}

function fnKirimPesanKeAdmin(){
	let Nama    = $("#contactNama").val();
	let Subject = $("#contactSubject").val();
	let Pesan   = $("#contactPesan").val();

	if(Nama==""){
		$("#contactNama").focus();
		return false;
	}
	if(Subject==""){
		$("#contactSubject").focus();
		return false;
	}
	if(Pesan==""){
		$("#contactPesan").focus();
		return false;
	}

	$.ajax({
		url  : "<?php echo base_url().'about/send_mail_to_admin'?>",
		type : "POST",
		data : {
			Nama    : Nama,
			Subject : Subject,
			Pesan   : Pesan
		},
		success : function(data){
			$("#contactNama").val("");
			$("#contactSubject").val("");
			$("#contactPesan").val("");
			if(data=="1"){
				$.toast({
			      heading: 'Success',
			      text: 'Pesan Terkirim',
			      showHideTransition: 'slide',
			      icon: 'success',
			      position: 'bottom-right',
			      hideAfter: 5000
			  });
			} else {
				$.toast({
			      heading: 'Error',
			      text: "Gagal Kirim Pesan",
			      showHideTransition: 'slide',
			      icon: 'error',
			      position: 'bottom-right',
			      hideAfter: 3000
			  	});
			}
		}

	});
}
</script>

