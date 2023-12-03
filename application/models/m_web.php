<?php
class M_web extends CI_Model
{
    function getAll()
    {
        $hsl = $this->db->query("SELECT * FROM tb_message");
        return $hsl;
    }
    function hapus_file($kode)
    {
        $hsl = $this->db->query("DELETE FROM tb_message WHERE id='$kode'");
        return $hsl;
    }
    function simpan_file($nama, $email, $sbj, $msg)
    {
        $hsl = $this->db->query("INSERT INTO tb_message(name,email,subjek,pesan) VALUES ('$nama','$email','$sbj','$msg')");
        return $hsl;
    }
}
