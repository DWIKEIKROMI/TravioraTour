<?php
class Template
{
    var $template_data = array();

    function set($name, $value)
    {
        $this->template_data[$name] = $value;
    }

    function load($template = '', $view = '', $view_data = array(), $return = FALSE)
    {
        $this->CI = &get_instance();
        if ($this->CI->session->userdata("userid")){
			$this->CI->load->model('cart_m');
			$view_data['cart_count'] = $this->CI->cart_m->get($this->CI->session->userdata("userid"))->result();
		}

        $this->set('contents', $this->CI->load->view($view, $view_data, TRUE));
        return $this->CI->load->view($template, $this->template_data, $return);
    }
}
