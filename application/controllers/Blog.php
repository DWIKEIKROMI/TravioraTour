<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    check_not_login();
    $this->load->model('Blog_m');
    $this->load->model('Cetak_m');
  }

  public function index()
  {
    $data['row'] = $this->Blog_m->get();
    $this->template->load('template', 'blog/blog_data', $data);
  }

  public function proses()
  {
    $config['upload_path']      = './assets/img/blog/';
    $config['allowed_types']    = 'gif|jpg|jpeg|png';
    $config['max_size']         = 5120;
    $config['file_name']        = 'blog-' . date('dmy') . '-' . substr(md5(rand()), 0, 10);
    $this->load->library('upload', $config);

    $post = $this->input->post(null, TRUE);

    if (isset($_POST['add'])) {
      if (@$_FILES['image']['name'] != null) {
        if ($this->upload->do_upload('image')) {
          $post['image']  =   $this->upload->data('file_name');
          $this->Blog_m->add($post);
          if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data has been successfully saved!!');
          }
          redirect('blog');
        } else {
          $error = $this->upload->display_errors();
          $this->session->set_flashdata('error', $error);
          redirect('Blog/add');
        }
      } else {
        $post['image']  = null;
        $this->Blog_m->add($post);
        if ($this->db->affected_rows() > 0) {
          $this->session->set_flashdata('success', 'Data has been successfully saved!!');
        }
        redirect('blog');
      }
    } else if (isset($_POST['edit'])) {
      if (@$_FILES['image']['name'] != null) {
        if ($this->upload->do_upload('image')) {
          $blog = $this->Blog_m->get($post['id'])->row();
          if ($blog->image != null) {
            $target_file = './assets/img/blog/' . $blog->image;
            unlink($target_file);
          }
          $post['image']  =   $this->upload->data('file_name');
          $this->Blog_m->edit($post);
          if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data has been successfully saved!!');
          }
          redirect('blog');
        } else {
          $error = $this->upload->display_errors();
          $this->session->set_flashdata('error', $error);
          redirect('blog/add');
        }
      } else {
        $post['image'] = $post['oldImage'];
        $this->Blog_m->edit($post);
        if ($this->db->affected_rows() > 0) {
          $this->session->set_flashdata('success', 'Data has been successfully saved!!');
        }
        redirect('blog');
      }
    }
  }

  public function add()
  {
    $blog = new stdClass();
    $blog->blog_id = null;
    $blog->title = null;
    $blog->image = null;
    $blog->content = null;
    $blog->writer = null;
    $data = [
      'page' => 'add',
      'row' => $blog
    ];
    $this->template->load('template', 'blog/blog_form', $data);
  }

  public function edit($id)
  {
    $query = $this->Blog_m->get($id);
    if ($query->num_rows() > 0) {
      $blog = $query->row();
      $data = [
        'page' => 'edit',
        'row' => $blog
      ];
      $this->template->load('template', 'blog/blog_form', $data);
    } else {
      echo "<script>alert('Data tidak ditemukan');";
      $this->session->set_flashdata('success', 'Data Not Found!!');
      echo "window.location='" . site_url('blog') . "'</script>";
    }
  }

  public function delete()
  {
    $id = $this->input->post('blog_id');
    $blog = $this->Blog_m->get($id)->row();
    if ($blog->image != null) {
      $target_file = './assets/img/blog/' . $blog->image;
      unlink($target_file);
    }

    $this->Blog_m->del($id);

    if ($this->db->affected_rows() > 0) {
      echo "<script>alert('Data Berhasil di Hapus')</script>";
    }
    echo "<script>window.location='" . site_url('blog') . "'</script>";
  }
}
