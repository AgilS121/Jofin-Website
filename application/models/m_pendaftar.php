<?php
class M_pendaftar extends CI_Model
{
    function getAll()
    {
        $hsl = $this->db->query("SELECT * FROM tb_pendaftaran");
        return $hsl;
    }
    function hapus_file($kode)
    {
        $hsl = $this->db->query("DELETE FROM tb_pendaftaran WHERE id='$kode'");
        return $hsl;
    }

    function update($kode, $namea, $email, $no, $form, $statuss)
    {
        $hsl = $this->db->query("UPDATE tb_pendaftaran SET name='$namea',email='$email',no='$no',file='$form',status='$statuss' WHERE id='$kode'");
        return $hsl;
    }
    function download($params = array())
    {
        $this->db->select('*');
        $this->db->from('tb_pendaftaran');
        if (array_key_exists('id', $params) && !empty($params['id'])) {
            $this->db->where('id', $params['id']);
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0) ? $query->row_array() : FALSE;
        } else {
            //set start and limit
            if (array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                $this->db->limit($params['limit'], $params['start']);
            } elseif (!array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                $this->db->limit($params['limit']);
            }
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0) ? $query->result_array() : FALSE;
        }
        //return fetched data
        return $result;
    }
}
