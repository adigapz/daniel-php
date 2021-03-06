<?php
include 'header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card mb-5">
                <div class="card-body">
                    <h3>Tambah Warga</h3>
                    <p class="text-muted">Tambah Data Warga</p>
                    <hr>
                    <a class="btn btn-primary btn-sm mb-5" href="warga.php">Kembali</a>

                    <form action="warga_tambah_aksi.php" method="post">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama"  class="form-control" placeholder="Nama Warga" required>
                        </div>

                        <div class="form-group">
                            <label>NO.KTP</label>
                            <input type="text" name="ktp"  class="form-control" placeholder="Nomor KTP" required>
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jk" class="form-control" required>
                            <option value="">-Pilih-</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Desa</label>
                            <select name="desa" class="form-control" required>
                            <option value="">-Pilih-</option>

                            <?php
                                $desa = mysqli_query($conn, "SELECT * FROM desa");
                            while ($pecah = mysqli_fetch_array($desa)) {
                            ?>
                            <option value="<?php echo $pecah['desa_id']; ?>"> <?php echo $pecah['desa_nama']; ?> </option>
                            <?php
                            }
                            ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Dusun</label>
                            <select name="dusun" class="form-control" required>
                            <option value="">-Pilih-</option>

                            <?php
                                $desa = mysqli_query($conn, "SELECT * FROM dusun");
                                while ($pecah = mysqli_fetch_array($desa)) {
                            ?>
                            <option value="<?php echo $pecah['dusun_id']; ?>"> <?php echo $pecah['dusun_nama']; ?> </option>
                            <?php
                            }
                            ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>RT</label>
                            <input type="text" name="rt" class="form-control" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label>RW</label>
                            <input type="text" name="rw" class="form-control" placeholder="" required >
                        </div>

                        <div class="form-group">
                            <label>status</label>
                            <select name="status" class="form-control" required>
                            <option value="">-Pilih-</option>
                            <option value="kawin">Kawin</option>
                            <option value="belum kawin">Belum Kawin</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Pendidikan</label>
                            <select name="pendidikan" class="form-control" required>
                            <option>-Pilih-</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Agama</label>
                            <select name="agama" class="form-control" required>
                            <option>-Pilih-</option>
                            <option value="Islam">Islam</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>

                        <input type="submit" name="submit" value="simpan" class="btn btn-success btn-sm">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>
