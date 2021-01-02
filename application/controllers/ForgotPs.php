<?php defined('BASEPATH') or exit('No direct script access allowed');

class ForgotPs extends CI_Controller
{

    public function index()
    {
        $this->load->view('forgotPs');
    }

    public function resetLink()
    {
		$this->load->model('user_m');

		$mail = $this->input->post(null, TRUE);
		$result = $this->user_m->mail($mail['email']);

        if ($result) {
        	$this->sender($result);
			echo "<script>alert('Reset link sended')</script>";
        } else {
            $this->session->set_flashdata('message', 'Email tidak terdaftar');
            redirect(base_url('forgotPs'));
        }

		echo "<script>window.location='" . site_url('forgotPs') . "'</script>";
    }

	public function verification($username, $token)
	{
		$this->load->model('user_m');

		$doverif = $this->user_m->verif($username, $token);

		if (!$doverif) {
			echo('Token expired');
		} else {
			$this->load->view('reset', ['username' => $username]);
		}
	}

	private function sender($user)
	{
		$config = [
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://mail.open-projects.online',
			'smtp_user' => 'noreply@open-projects.online',
			'smtp_pass' => '212Noreply',
			'smtp_port' => 465,
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		];

		$this->email->initialize($config);

		$this->email->from('noreply@open-projects.online', 'Traviora ID');

		$data = array(
			'email' => $user->email,
			'name' => $user->name,
			'token' => $user->token,
			'username' => $user->username,
		);

		$this->email->to($user->email);
		$this->email->subject('Reset Link');
		$body = $this->load->view('email/reset', $data, TRUE);
		$this->email->message($body);

		if ($this->email->send()) {
			return true;
		} else {
			$this->email->print_debugger();

			die;
		}
	}
}

/* End of file Controllername.php */
