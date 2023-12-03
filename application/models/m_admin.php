<?php
class M_admin extends CI_Model
{
    function getAll()
    {
        $hsl = $this->db->query("SELECT * FROM tb_admin");
        return $hsl;
    }
    function hapus_file($kode)
    {
        $hsl = $this->db->query("DELETE FROM tb_admin WHERE id='$kode'");
        return $hsl;
    }
    function update($kode, $active)
    {
        $hsl = $this->db->query("UPDATE tb_admin SET is_active='$active' WHERE id='$kode'");
        return $hsl;
    }
}
