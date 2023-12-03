<?php
$servername = "localhost";
$database = "bkk";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
$query = $conn->query("SELECT * FROM tb_lowongan");

$jml_posisi = mysqli_num_rows($query);
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <h3>Data Lowongan</h3>
    <hr>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Posisi Lowongan(<?= $jml_posisi ?>)</h6>
        </div>
        <div class="card-body">
            <?= $this->session->flashdata('msg'); ?>
            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalTambah">
                Tambah Data
            </button>
            <br><br>

            <div class="table-responsive">
                <table style="font-size: 15px;" class="table table-bordered  table-sm" id="example" style="width:100%" cellspacing="0">
                    <thead class="table-active">
                        <tr>
                            <th>#</th>
                            <th>Kode(L)</th>
                            <th>Logo</th>
                            <th>Nama</th>
                            <th>Link</th>
                            <th>Deskripsi</th>
                            <th>Skill 1</th>
                            <th>Skill 2</th>
                            <th>Total</th>
                            <th>Buka</th>
                            <th>Tutup</th>
                            <th>Gender</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <skil2ody>
                        <?php
                        $no = 0;
                        foreach ($data->result_array() as $i) :
                            $no++;
                            $id = $i['id'];
                            $img = $i['logo'];
                            $nama = $i['nama'];
                            $link = $i['link'];
                            $skil = $i['skill'];
                            $skil1 = $i['skill1'];
                            $skil2 = $i['skill2'];
                            $total = $i['total'];
                            $buka = $i['buka'];
                            $tutup = $i['tutup'];
                            $gender = $i['gender'];
                            $created = $i['created_at'];

                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $id; ?></td>
                                <td>
                                    <?php if ($img != "") { ?>
                                        <img src="<?php echo base_url('assets/logo/' . $img); ?>" class="img" width="90" alt="">
                                    <?php } else {
                                        echo "Tidak Ada";
                                    } ?>
                                </td>
                                <td><?php echo $nama; ?></td>
                                <td><?php echo $link; ?></td>
                                <td><?php echo $skil; ?></td>
                                <td><?php echo $skil1; ?></td>
                                <td><?php echo $skil2; ?></td>
                                <td><?php echo $total; ?></td>
                                <td><?php echo $buka; ?></td>
                                <td><?php echo $tutup; ?></td>
                                <td><?php echo $gender; ?></td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ModalEdit<?php echo $id; ?>">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalHapus<?php echo $id; ?>">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </skil2ody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- Modal add posisi lowongan -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah data posisi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'position/tambah' ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-form-label">Deskripsi</label>
                        <textarea type="text" name="skil" class="form-control" required></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label">Kode Lowongan</label>
                                <input type="text" class="form-control" name="id_lowongan">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Logo Perusahaan</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="image">
                                    <label for="image" class="custom-file-label">Choose File</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Nama Perusahaan</label>
                                <input type="text" class="form-control" name="nama" id="nama">
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label">link</label>
                                <input type="text" class="form-control" name="link">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Skill 1</label>
                                <input type="text" class="form-control" name="skil1">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Skill 2</label>
                                <input type="text" class="form-control" name="skil2">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Total</label>
                                <input type="text" class="form-control" name="total">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label">Buka</label>
                                <input type="date" class="form-control" name="buka">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Tutup</label>
                                <input type="date" class="form-control" name="tutup">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Gender</label>
                                <select class="form-control" name="gender">
                                    <option <?php if ($gender == 'Laki-laki') echo 'selected'; ?>> Laki-laki</option>
                                    <option <?php if ($gender == 'Perempuan') echo 'selected'; ?>> Perempuan</option>
                                    <option <?php if ($gender == 'Semua') echo 'selected'; ?>>Semua</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Modal hapus lowongan -->
<?php foreach ($data->result_array() as $i) :
    $id = $i['id'];
    $img = $i['logo'];
    $nama = $i['nama'];
    $link = $i['link'];
    $skil = $i['skill'];
    $skil1 = $i['skill1'];
    $skil2 = $i['skill2'];
    $total = $i['total'];
    $buka = $i['buka'];
    $tutup = $i['tutup'];
    $gender = $i['gender'];
    $created = $i['created_at'];
?>
    <!-- Modal Hapus-->
    <div class="modal fade" id="ModalHapus<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?= $nama ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url() . 'position/hapus_file' ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="kode" value="<?php echo $id; ?>" />
                        <input type="hidden" name="image" value="<?php echo $img; ?>">
                        <p>Apakah Anda yakin mau menghapus Lowongan <b><?php echo $nama; ?></b> ?</p>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

<?php endforeach; ?>

<?php foreach ($data->result_array() as $i) :
    $id = $i['id'];
    $img = $i['logo'];
    $nama = $i['nama'];
    $link = $i['link'];
    $skil = $i['skill'];
    $skil1 = $i['skill1'];
    $skil2 = $i['skill2'];
    $total = $i['total'];
    $buka = $i['buka'];
    $tutup = $i['tutup'];
    $gender = $i['gender'];
    $created = $i['created_at'];
?>
    <!-- Modal edit perusahaan -->
    <!-- Modal -->
    <div class="modal fade" id="ModalEdit<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Perusahaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url() . 'position/update_file' ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-form-label">Skill</label>
                            <textarea type="text" name="skil" class="form-control" value="<?= $skil ?>"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="hidden" name="kode" value="<?php echo $id; ?>">
                                    <label class="col-form-label">Id Informasi</label>
                                    <input type="text" class="form-control" name="img" value="<?= $img ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama" value="<?= $nama ?>">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">link</label>
                                    <input type="text" class="form-control" name="link" value="<?= $link ?>" required>
                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="form-group">
                                    <label class="col-form-label">Skill 1</label>
                                    <input type="text" class="form-control" name="skil1" value="<?= $skil1 ?>">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Skill 2</label>
                                    <input type="text" class="form-control" name="skil2" value="<?= $skil2 ?>">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Total</label>
                                    <input type="text" class="form-control" name="total" value="<?= $total ?>" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Buka</label>
                                    <input type="date" class="form-control" name="buka" value="<?= $buka ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Tutup</label>
                                    <input type="date" class="form-control" name="tutup" value="<?= $tutup ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Gender</label>
                                    <select class="form-control" name="gender">
                                        <option <?php if ($gender == 'Laki-laki') echo 'selected'; ?>> Laki-laki</option>
                                        <option <?php if ($gender == 'Perempuan') echo 'selected'; ?>> Perempuan</option>
                                        <option <?php if ($gender == 'Semua') echo 'selected'; ?>>Semua</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>