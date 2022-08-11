<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guide extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Guide_model"); //load model Guide
    }

    //method pertama yang akan di eksekusi
    public function index()
    {

        $data["title"] = "List Data Guide";
        //ambil fungsi getAll untuk menampilkan semua data Guide
        $data["data_guide"] = $this->Guide_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');

        $this->load->view('guide/index', $data);
        $this->load->view('templates/footer');
    }

    //method add digunakan untuk menampilkan form tambah data Guide
    public function add()
    {
        $Guide = $this->Guide_model; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($Guide->rules()); //menerapkan rules validasi pada Guide_model

        if ($validation->run()) {
            $Guide->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Guide berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("guide");
        }
        $data["title"] = "Tambah Data Guide";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('guide/add', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('guide');

        $Guide = $this->Guide_model;
        $validation = $this->form_validation;
        $validation->set_rules($Guide->rules());

        if ($validation->run()) {
            $Guide->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Guide berhasil disimpan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("guide");
        }
        $data["title"] = "Edit Data Guide";
        $data["data_guide"] = $Guide->getById($id);
        if (!$data["data_guide"]) show_404();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('guide/edit', $data);
        $this->load->view('templates/footer');
    }

    public function delete()
    {
        $id = $this->input->get('id');
        if (!isset($id)) show_404();
        $this->Guide_model->delete($id);
        $msg['success'] = true;
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Guide berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
        $this->output->set_output(json_encode($msg));
    }
}
