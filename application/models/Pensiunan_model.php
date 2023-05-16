<?php 

class Pensiunan_model extends CI_model {
    public function getAllPensiunan()
    {
        return $this->db->get('pensiunan')->result_array();
    }

    public function tambahDataPensiunan()
    {
        $data = [
            "nopen" => $this->input->post('nopen', true),
            "nama_pensiunan" => $this->input->post('nama_pensiunan', true),
            "jenis_pensiun" => $this->input->post('jenis_pensiun', true),
            "nik_penerima" => $this->input->post('nik_penerima', true),
            "nama_penerima" => $this->input->post('nama_penerima', true),
            "notelp_penerima" => $this->input->post('notelp_penerima', true)
        ];

        $this->db->insert('pensiunan', $data);
    }

    public function hapusDataPensiunan($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('pensiunan', ['id' => $id]);
    }

    public function getPensiunanById($id)
    {
        return $this->db->get_where('pensiunan', ['id' => $id])->row_array();
    }

    public function ubahDataPensiunan()
    {
        $data = [
            "nopen" => $this->input->post('nopen', true),
            "nama_pensiunan" => $this->input->post('nama_pensiunan', true),
            "jenis_pensiun" => $this->input->post('jenis_pensiun', true),
            "nik_penerima" => $this->input->post('nik_penerima', true),
            "nama_penerima" => $this->input->post('nama_penerima', true),
            "notelp_penerima" => $this->input->post('notelp_penerima', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pensiunan', $data);
    }

    public function cariDataPensiunan()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nopen', $keyword);
        $this->db->or_like('nama_pensiunan', $keyword);
        $this->db->or_like('nik_penerima', $keyword);
        $this->db->or_like('nama_penerima', $keyword);
        $this->db->or_like('notelp_penerima', $keyword);
        return $this->db->get('pensiunan')->result_array();
    }
}