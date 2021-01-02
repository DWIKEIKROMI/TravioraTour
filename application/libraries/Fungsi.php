<?php
class Fungsi
{
    protected $CI;

    function __construct()
    {
        $this->CI = &get_instance();
    }

    function user_login()
    {
        $this->CI->load->model('user_m');
        $user_id = $this->CI->session->userdata('userid');
        $user_data = $this->CI->user_m->get($user_id)->row();
        return $user_data;
    }
    public function count_armada()
    {
        $this->CI->load->model('Armada_m');
        return $this->CI->Armada_m->get()->num_rows();
    }
    public function count_customer()
    {
        $this->CI->load->model('Customer_m');
        return $this->CI->Customer_m->get()->num_rows();
    }
    public function count_item()
    {
        $this->CI->load->model('Item_m');
        return $this->CI->Item_m->get()->num_rows();
    }
    public function count_user()
    {
        $this->CI->load->model('User_m');
        return $this->CI->User_m->get()->num_rows();
    }
    public function count_sale()
    {
        $this->CI->load->model('Sale_m');
        return $this->CI->Sale_m->get_sale()->num_rows();
    }
    public function count_sale_new()
    {
        $this->CI->load->model('Sale_m');
        return $this->CI->Sale_m->get_sale_new()->num_rows();
    }
    public function count_user2()
    {
        $this->CI->load->model('UserNonAktif_m');
        return $this->CI->UserNonAktif_m->get()->num_rows();
    }
    public function PdfGenerator($html, $filename, $paper, $orientatiton)
    {
        // instantiate and use the dompdf class
        $dompdf = new Dompdf\Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper($paper, $orientatiton);

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream($filename, array('Attachment' => 0));
    }
}
