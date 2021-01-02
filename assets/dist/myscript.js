const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal.fire({
		title: 'Data Karyawan',
		text: 'Berhasil ' + flashData,
		type: 'success'
	});
}

//hapus
$('.tombol-hapus').on('click', function (e) {
	e.preverentDefault();
	const href = $(this).attr('href');
	Swal.fire({
		title: 'Apakah anda yakin?',
		text: "Ingin menghapus data karyawan ini!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, Hapus!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
});
