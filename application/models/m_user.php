<?php
class M_user extends CI_Model
{
    function getAll()
    {
        $hsl = $this->db->query("SELECT * FROM tb_users");
        return $hsl;
    }
    function hapus_file($kode)
    {
        $hsl = $this->db->query("DELETE FROM tb_users WHERE id_user='$kode'");
        return $hsl;
    }
}
