<script src="admin/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="admin/assets/js/core/popper.min.js"></script>
<script src="admin/assets/js/core/bootstrap.min.js"></script>
<script src="admin/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="admin/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<script src="admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="admin/assets/js/plugin/moment/moment.min.js"></script>
<script src="admin/assets/js/plugin/chart.js/chart.min.js"></script>
<script src="admin/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>
<script src="admin/assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="admin/assets/js/plugin/datatables/datatables.min.js"></script>
<script src="admin/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="admin/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="admin/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="admin/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>
<script src="admin/assets/js/plugin/gmaps/gmaps.js"></script>
<script src="admin/assets/js/plugin/dropzone/dropzone.min.js"></script>
<script src="admin/assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>
<script src="admin/assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>
<script src="admin/assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script src="admin/assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>
<script src="admin/assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>
<script src="admin/assets/js/plugin/summernote/summernote-bs4.min.js"></script>
<script src="admin/assets/js/plugin/select2/select2.full.min.js"></script>
<script src="admin/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
<script src="admin/assets/js/plugin/owl-carousel/owl.carousel.min.js"></script>
<script src="admin/assets/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="admin/assets/js/atlantis.min.js"></script>
<script src="admin/assets/js/bs-custom-file-input.min.js"></script>
<script src="admin/assets/plugins/selectric/public/jquery.selectric.min.js"></script>
<script src="<?= clearCacheFile('admin/assets/js/main.js');?>"></script>
<script type="text/javascript">
	$(document).on('click','#user-logout', function(e) {
		e.preventDefault();
		var kode = $(this).data('kode');
		var SweetAlert2Demo = function() {
			var initDemos = function() {
				swal({
					title: 'Peringatan',
					text: "Apakah Anda yakin ingin keluar dari aplikasi??",
					type: 'warning',
					icon: 'warning',
					buttons:{
						cancel: {
							visible: true,
							text : 'Tidak!',
							className: 'btn btn-danger'
						},
						confirm: {
							text : 'Ya, Keluar!',
							className : 'btn btn-success'
						}
					}
				}).then((willDelete) => {
					if (willDelete) {
						$.ajax({
							type: "POST",
							url: "proses/logout.php",
							data: {'kode':kode},
							success: function(result) {
								var response = JSON.parse(result);
								if(response.status == "1") {
									customSweetAlert('Pemberitahuan', response.message, 'success', 'success', '<?= getBaseURL();?>');
								}
							}
						});
					} else {
						customSweetAlert('Pemberitahuan', 'Tidak jadi keluar', 'success', 'success', null);
					}
				});

			};
			return {
				init: function() {
					initDemos();
				},
			};
		}();
		jQuery(document).ready(function() {
			SweetAlert2Demo.init();
		});
	});
</script>
<script type="text/javascript">
	function hanyahuruf(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
		if ((charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) && charCode > 32)
			return false;
		return true;
	}
	function hanyaAngka(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode > 57))
			return false;
		return true;
	}
</script>