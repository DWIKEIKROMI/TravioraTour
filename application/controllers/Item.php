<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Item extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['Item_m', 'category_m', 'type_m', 'unit_m']);
        $this->load->model('Cetak_m');
    }

    public function index()
    {
        $data['row'] = $this->Item_m->get();
        $this->template->load('template', 'product/item/item_data', $data);
    }

    public function proses()
    {
        $config['upload_path']      = './assets/img/item/';
        $config['allowed_types']    = 'gif|jpg|jpeg|png';
        $config['max_size']         = 5120;
        $config['file_name']        = 'item-' . date('dmy') . '-' . substr(md5(rand()), 0, 10);
        $this->load->library('upload', $config);

        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            //validasi barcode
            if ($this->Item_m->check_barcode($post['barcode'])->num_rows() > 0) {
                $this->session->set_flashdata('error', "Barcode $post[barcode] already used!!");
                redirect('item/add');
            } else {
                // gambar
                if (@$_FILES['image']['name'] != null) {
                    if ($this->upload->do_upload('image')) {
                        $post['image']  =   $this->upload->data('file_name');
                    } else {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('error', $error);
                        redirect('item/add');
                    }
                } else {
                    $post['image']  = null;
                }
                // gambar 2
                if (@$_FILES['image2']['name'] != null) {
                    if ($this->upload->do_upload('image2')) {
                        $post['image2']  =   $this->upload->data('file_name');
                    } else {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('error', $error);
                        redirect('item/add');
                    }
                } else {
                    $post['image2']  = null;
                }
                // gambar 3
                if (@$_FILES['image3']['name'] != null) {
                    if ($this->upload->do_upload('image3')) {
                        $post['image3']  =   $this->upload->data('file_name');
                    } else {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('error', $error);
                        redirect('item/add');
                    }
                } else {
                    $post['image3']  = null;
                }
                $this->Item_m->add($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data has been successfully saved!!');
                }
                redirect('item');
            }
        } else if (isset($_POST['edit'])) {

            // barcode
            if ($this->Item_m->check_barcode($post['barcode'], $post['id'])->num_rows() > 0) {
                $this->session->set_flashdata('error', "Barcode $post[barcode] already used!!");
                redirect('item/edit/' . $post['id']);
            } else {
                // gambar 1
                if (@$_FILES['image']['name'] != null) {
                    if ($this->upload->do_upload('image')) {
                        $item = $this->Item_m->get($post['id'])->row();
                        if ($item->image != null) {
                            $target_file = './assets/img/item/' . $item->image;
                            unlink($target_file);
                        }
                        $post['image']  =   $this->upload->data('file_name');
                    } else {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('error', $error);
                        redirect('item/add');
                    }
                } else {
                    $post['image']  = null;
                }

                // gambar 2 
                if (@$_FILES['image2']['name'] != null) {
                    if ($this->upload->do_upload('image2')) {
                        $item = $this->Item_m->get($post['id'])->row();
                        if ($item->image2 != null) {
                            $target_file = './assets/img/item/' . $item->image2;
                            unlink($target_file);
                        }
                        $post['image2']  =   $this->upload->data('file_name');
                    } else {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('error', $error);
                        redirect('item/add');
                    }
                } else {
                    $post['image2']  = null;
                }

                // gambar 3 
                if (@$_FILES['image3']['name'] != null) {
                    if ($this->upload->do_upload('image3')) {
                        $item = $this->Item_m->get($post['id'])->row();
                        if ($item->image3 != null) {
                            $target_file = './assets/img/item/' . $item->image3;
                            unlink($target_file);
                        }
                        $post['image3']  =   $this->upload->data('file_name');
                    } else {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('error', $error);
                        redirect('item/add');
                    }
                } else {
                    $post['image3']  = null;
                }
                $this->Item_m->edit($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data has been successfully saved!!');
                }
                redirect('item');
            }
        }
    }

    public function add()
    {
        $item = new stdClass();
        $item->item_id      = null;
        $item->barcode      = null;
        $item->name         = null;
        $item->address      = null;
        $item->image        = null;
        $item->image2       = null;
        $item->image3       = null;
        $item->duration     = null;
        $item->groupsize    = null;
        $item->overview     = null;
        $item->language     = null;
        $item->type_id      = null;
        $item->category_id  = null;
        $item->unit_id      = null;
        $item->price        = null;
        $item->stock        = null;

        $query_category     = $this->category_m->get();
        $query_type         = $this->type_m->get();
        $query_unit         = $this->unit_m->get();
        $type[null]         = '- Choose -';
        foreach ($query_type->result() as $typ) {
            $type[$typ->type_id] = $typ->name;
        }
        $data = [
            'page'          => 'add',
            'row'           => $item,
            'category'      =>  $query_category,
            'unit'          =>  $query_unit,
            'type'          =>  $type, 'selectedtype' => null
        ];
        $this->template->load('template', 'product/item/item_form', $data);
    }

    public function edit($id)
    {
        $query = $this->Item_m->get($id);
        if ($query->num_rows() > 0) {
            $item = $query->row();
            $query_category = $this->category_m->get();
            $query_type     = $this->type_m->get();
            $query_unit     = $this->unit_m->get();
            $type[null]     = '- Choose -';
            foreach ($query_type->result() as $typ) {
                $type[$typ->type_id] = $typ->name;
            }
            $data = [
                'page'      => 'edit',
                'row'       => $item,
                'category'  =>  $query_category,
                'unit'      =>  $query_unit,
                'type'      =>  $type, 'selectedtype' => $item->type_id
            ];
            $this->template->load('template', 'product/item/item_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            $this->session->set_flashdata('success', 'data not found');
            redirect('item');
        }
    }

    public function delete($id)
    {
        $item = $this->Item_m->get($id)->row();
        if ($item->image != null) {
            $target_file = '../assets/img/item/' . $item->image;
            unlink($target_file);
        }
        $this->Item_m->del($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data has been successfully deleted!!');
        }
        redirect('item');
    }

    public function laporan_pdf()
    {
        $data['title']          = 'Report item';
        $data['item']           = $this->Cetak_m->viewItem();
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename    = "laporan_item.pdf";
        $this->pdf->load_view('product/item/laporan', $data);
    }

    public function barcode_qrcode($id)
    {
        $data['row']    = $this->Item_m->get($id)->row();
        $this->template->load('template', 'product/item/barcode_qrcode', $data);
    }

    public function barcode_print($id)
    {
        $data['row']    = $this->Item_m->get($id)->row();
        $html           = $this->load->view('product/item/barcode_print', $data, true);
        $this->fungsi->PdfGenerator($html, 'barcode-' . $data['row']->barcode, 'A4', 'landscape');
    }

    public function qrcode_print($id)
    {
        $data['row']    = $this->Item_m->get($id)->row();
        $html           = $this->load->view('product/item/qrcode_print', $data, true);
        $this->fungsi->PdfGenerator($html, 'qrcode-' . $data['row']->barcode, 'A4', 'portrait');
    }
}
