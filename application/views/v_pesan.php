<?php
$servername = "localhost";
$database = "bkk";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
$query = $conn->query("SELECT * FROM tb_pendaftaran");

$jml_pendaftar = mysqli_num_rows($query);
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Pendaftaran(<?= $jml_pendaftar ?>)</h6>
        </div>
        <div class="card-body">
            <?= $this->session->flashdata('msg'); ?>
            <div class="table-responsive">
                <table class="table table-bordered table-sm" id="example" style="width:100%" cellspacing="0">
                    <thead class="table-active">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Subjek</th>
                            <th>Pesan</th>
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
                            $sbj = $i['subjek'];
                            $pesan = $i['pesan'];
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $nama; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $sbj; ?></td>
                                <td><?php echo $pesan; ?></td>
                                <td>
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
    $sbj = $i['subjek'];
    $pesan = $i['pesan'];
?>
    <!-- Modal -->
    <div class="modal fade" id="ModalHapus<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?= $sbj ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url() . 'pesan/hapus_file' ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="kode" value="<?php echo $id; ?>" />

                        <p>Apakah Anda yakin mau menghapus Pesan <b><?php echo $nama; ?></b> ?</p>

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