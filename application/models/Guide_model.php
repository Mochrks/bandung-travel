<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guide_model extends CI_Model
{
    private $table = 'guide';

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'Nama',
                'label' => 'Nama',
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'JenisKelamin',
                'label' => 'Jenis Kelamin',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'NoHp',
                'label' => 'No Hp',
                'rules' => 'trim|required|numeric|min_length[9]|max_length[15]'
            ],
            [
                'field' => 'Email',
                'label' => 'Email',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Paket',
                'label' => 'Paket',
                'rules' => 'trim|required'
            ]
        ];
    }

    //menampilkan data guide berdasarkan id guide
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["IdUser" => $id])->row();
    }

    //menampilkan semua data guide
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("IdUser", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    //menyimpan data guide
    public function save()
    {
        $data = array(
            "Nama" => $this->input->post('Nama'),
            "JenisKelamin" => $this->input->post('JenisKelamin'),
            "NoHp" => $this->input->post('NoHp'),
            "Email" => $this->input->post('Email'),
            "Paket" => $this->input->post('Paket')
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data guide
    public function update()
    {
        $data = array(
            "Nama" => $this->input->post('Nama'),
            "JenisKelamin" => $this->input->post('JenisKelamin'),
            "NoHp" => $this->input->post('NoHp'),
            "Email" => $this->input->post('Email'),
            "Paket" => $this->input->post('Paket')
        );
        return $this->db->update($this->table, $data, array('IdUser' => $this->input->post('IdUser')));
    }

    //hapus data guide
    public function delete($id)
    {
        return $this->db->delete($this->table, array("IdUser" => $id));
    }
}
