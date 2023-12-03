<?php
$servername = "localhost";
$database = "bkk";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
$query = $conn->query("SELECT * FROM tb_admin");

$jml_admin = mysqli_num_rows($query);
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Admin(<?= $jml_admin ?>)</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-sm" id="example" style="width:100%" cellspacing="0">
                    <thead class="table-active">
                        <tr>
                            <th>#</th>
                            <th>Profil</th>
                            <th>Nama</th>
                            <th>Posisi</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($data->result_array() as $i) :
                            $no++;
                            $id = $i['id'];
                            $nama = $i['name'];
                            $email = $i['email'];
                            $img = $i['image'];
                            $active = $i['is_active'];
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td>
                                    <?php if ($img != "") { ?>
                                        <img src="<?php echo base_url('assets/img/profile/' . $img); ?>" class="img" width="90" alt="">
                                    <?php } else {
                                        echo "Tidak Ada";
                                    } ?></td>
                                <td><?php echo $nama; ?></td>
                                <?php if ($active != "Tidak Aktif") { ?>
                                    <td style="color: white;">
                                        <button type="button" class="btn btn-success btn-block btn-sm" data-toggle="modal" data-target="#ModalEdit<?php echo $id; ?>">
                                            Aktif
                                        </button>
                                    </td>

                                <?php } else { ?>
                                    <td style="color: white;">
                                        <button type="button" class="btn btn-danger btn-block btn-sm" data-toggle="modal" data-target="#ModalEdit<?php echo $id; ?>">
                                            Tidak Aktif
                                        </button>
                                    </td>
                                <?php } ?>
                                <td><?php echo $email; ?></td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalHapus<?php echo $id; ?>">
                                        <i class="fa fa-trash"></i> Hapus
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- Modal delete perusahaan -->
<?php foreach ($data->result_array() as $i) :
    $id = $i['id'];
    $nama = $i['name'];
?>
    <!-- Modal -->
    <div class="modal fade" id="ModalHapus<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?= $email ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url() . 'vadmin/hapus_file' ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="kode" value="<?php echo $id; ?>" />

                        <p>Apakah Anda yakin mau menghapus file <b><?php echo $nama; ?></b> ?</p>

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
    $no++;
    $id = $i['id'];
    $nama = $i['name'];
    $email = $i['email'];
    $img = $i['image'];
    $active = $i['is_active'];
?>
    <!-- Modal edit perusahaan -->
    <div class="modal fade" id="ModalEdit<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Status <b><?= $nama ?></b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url() . 'vadmin/update_file' ?>" method="post">

                        <div class="input-group mb-3">
                            <input type="hidden" name="kode" value="<?php echo $id; ?>">
                            <input type="hidden" name="name" value="<?php echo $nama; ?>" readonly>
                            <input type="hidden" name="email" value="<?php echo $email; ?>" readonly>
                            <select class="form-control" name="status">
                                <option <?php if ($is_active = 1) echo 'selected'; ?>> Aktif</option>
                                <option <?php if ($is_active = 0) echo 'selected'; ?>>Tidak Aktif</option>
                            </select>
                            <div class="input-group-append">
                                <button style="color: white;" class="btn btn-outline-secondary btn-primary" typ>Button</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>