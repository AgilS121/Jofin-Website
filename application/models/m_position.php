<?php
class M_position extends CI_Model
{

    function getAll()
    {
        $hsl = $this->db->query("SELECT * FROM tb_lowongan");
        return $hsl;
    }

    function simpan_file($id, $file, $nama, $link, $skil, $skil1, $skil2, $total, $buka, $tutup, $gender)
    {
        $hsl = $this->db->query("INSERT INTO tb_lowongan(id,logo, nama, link, skill, skill1, skill2, total, buka, tutup, gender) VALUES ('$id','$file',' $nama',' $link', '$skil', '$skil1',' $skil2',' $total',' $buka', '$tutup', '$gender')");
        return $hsl;
    }
    function hapus_file($kode)
    {
        $hsl = $this->db->query("DELETE FROM tb_lowongan WHERE id='$kode'");
        return $hsl;
    }
    function update($kode, $img, $nama, $link, $skil, $skil1, $skil2, $total, $buka, $tutup, $gender)
    {
        $hsl = $this->db->query("UPDATE tb_lowongan SET logo='$img', nama='$nama', link='$link', skill='$skil', skill1='$skil1', skill2='$skil2', total='$total', buka='$buka', tutup='$tutup', gender='$gender' WHERE id='$kode'");
        return $hsl;
    }
}
