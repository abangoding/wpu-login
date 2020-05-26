const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal.fire({
		title: 'Success',
		text: 'Data has been ' + flashData,
		type: 'success'
	});
}

// tombol-hapus
$('.button-delete').on('click', function(e) {
	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
	  title: 'Are you sure?',
	  text: "You wonn't be able revert this!",
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Yes, delete it',
	  cancelButtonText: 'Cancel'
	}).then((result) => {
	  if (result.value) {
	    document.location.href = href;
	  }
	})
});