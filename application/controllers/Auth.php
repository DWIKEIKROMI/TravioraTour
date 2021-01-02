<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function login()
	{
		check_already_login();
		$this->load->view('login');
	}

	public function proses()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($post['login'])) {
			$this->load->model('user_m');
			$query = $this->user_m->login($post); ?>
			<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/SweetAlert2/sweetalert2.min.css">
			<script src="<?= base_url() ?>assets/plugins/SweetAlert2/sweetalert2.min.js"></script>
			<style>
				body {
					font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
					font-size: 1.124em !important;
					font-weight: normal;
				}
			</style>

			<body></body>
			<?php
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'userid' => $row->user_id,
					'level' => $row->level,
					'status' => $row->status
				);
				$this->session->set_userdata($params);
				if ($params['level'] == "3") { ?>
					<script>
						Swal.fire({
							icon: 'success',
							title: 'Success',
							text: 'Selamat, Anda berhasil login'
						}).then((result) => {
							window.location = '<?= site_url('client/home') ?>';
						})
					</script>
				<?php
				} else {
				?>
					<script>
						Swal.fire({
							icon: 'success',
							title: 'Success',
							text: 'Selamat, Anda berhasil login'
						}).then((result) => {
							window.location = '<?= site_url('dashboard') ?>';
						})
					</script>
				<?php
				}
			} else { ?>
				<script>
					Swal.fire({
						icon: 'error',
						title: 'Failure',
						text: 'Maaf,  belum terkonfirmasi Admin Atau belum terdaftar!'
					}).then((result) => {
						window.location = '<?= site_url('auth/login') ?>';
					})
				</script>
<?php
			}
		}
	}

	public function changePassword()
	{
		$post = $this->input->post(null, TRUE);

		if (isset($post['login'])) {
			$this->load->model('user_m');

			$this->user_m->changepassword($post['password'], $post['username']);

			redirect('auth/login');
		}
	}

	public function logout()
	{
		$params = ['userid', 'level'];
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}
	//
	//	public function _validate()
	//	{
	//		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
	//		$this->form_validation->set_rules('cpassword', 'Password Confirmation', 'required|matches[password]', ['matches' => 'Confirm password does not match with password']);
	//	}
}

/* End of file Controllername.php */
