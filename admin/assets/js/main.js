$(document).ready(function () {
	bsCustomFileInput.init();
	$('.datatables').DataTable();
	$('.selectric').selectric();
});

function customSweetAlert(title, message, icon, classname, redirect) {
	var SweetAlert2Demo = function() {
		var initDemos = function() {
			if(redirect == null) {
				swal(title, message, {
					icon : icon,
					buttons: {
						confirm: {
							className : 'btn btn-'+classname
						}
					},
				});
			}else {
				swal(title, message, {
					icon : icon,
					buttons: {
						confirm: {
							className : 'btn btn-'+classname
						}
					},
				}).then(function() {
					window.location = redirect;
				});
			}
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
}