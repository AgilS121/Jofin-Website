<?php
$servername = "localhost";
$database = "bkk";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
$query = $conn->query("SELECT * FROM tb_pendaftaran");

$pendaftar = mysqli_num_rows($query);
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Pendaftaran(<?= $pendaftar ?>)</h6>
        </div>
        <div class="card-body">
            <?= $this->session->flashdata('msg'); ?>
            <div class="table-responsive">
                <table class="table table-bordered table-sm" id="example" style="width:100%" cellspacing="0">
                    <thead class="table-active">
                        <tr>
                            <th>#</th>
                            <th>Nama Perusahaan</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No Hp</th>
                            <th>Form Daftar</th>
                            <th>Status</th>
                            <th>Created at</th>
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
                            $nama_perusahaan = $i['nama_perusahaan'];
                            $email = $i['email'];
                            $no_hp = $i['no'];
                            $form = $i['file'];
                            $status = $i['status'];
                            $create = $i['created_at']
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $nama_perusahaan; ?></td>
                            <td><?php echo $nama; ?></td>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $no_hp; ?></td>
                            <td><?php echo $form; ?></td>
                            <?php if ($status === "Terima") { ?>
                            <td style="color: white;">
                                <button type="button" class="btn btn-success btn-block btn-sm" data-toggle="modal" data-target="#ModalEdit<?php echo $id; ?>">
                                    <?php echo $status; ?>
                                </button>
                            </td>

                            <?php } else if ($status === "Tolak") { ?>
                            <td style="color: white;">
                                <button type="button" class="btn btn-danger btn-block btn-sm" data-toggle="modal" data-target="#ModalEdit<?php echo $id; ?>">
                                    <?php echo $status; ?>
                                </button>
                            </td>
                            <?php } else { ?>
                            <td style="color: white;">
                                <button type="button" class="btn btn-primary btn-block btn-sm" data-toggle="modal" data-target="#ModalEdit<?php echo $id; ?>">
                                    <?php echo $status; ?>
                                </button>
                            </td>
                            <?php } ?>
                            <td><?php echo $create; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>perusahaan/unduh/<?= $id; ?>" class="btn btn-primary btn-sm"><i class="fa fa-download"></i></a>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalHapus<?php echo $id; ?>">
                                    <i class="fa fa-trash"></i>
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
    $email = $i['email'];
    $no_hp = $i['no'];
    $form = $i['file'];
    $create = $i['created_at']
?>
<!-- Modal -->
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
                <form action="<?php echo base_url() . 'pendaftar/hapus_file' ?>" method="post" enctype="multipart/form-data">
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
    $id = $i['id'];
    $nama = $i['name'];
    $email = $i['email'];
    $no_hp = $i['no'];
    $form = $i['file'];
    $status = $i['status'];
    $create = $i['created_at']
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
                <form action="<?php echo base_url() . 'pendaftar/update_file' ?>" method="post">

                    <div class="input-group mb-3">
                        <input type="hidden" name="kode" value="<?php echo $id; ?>">
                        <input type="hidden" name="name" value="<?php echo $nama; ?>" readonly>
                        <input type="hidden" name="email" value="<?php echo $email; ?>" readonly>
                        <input type="hidden" name="no" value="<?php echo $no_hp; ?>" readonly>
                        <input type="hidden" name="form" value="<?php echo $form; ?>" readonly>
                        <select class="form-control" name="status">
                            <option <?php if ($status == 'Terima') echo 'selected'; ?>> Terima</option>
                            <option <?php if ($status == 'Tolak') echo 'selected'; ?>> Tolak</option>
                            <option <?php if ($status == 'Menunggu') echo 'selected'; ?>> Menunggu</option>
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
