<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
</head>

<body>
    <div class="container-fluid mt-5" style="max-width: 700px;">
        <div class="card">
            <div class="card-header bg-dark">
                <div class="d-flex align-items-center justify-content-between">

                    <h1 class="text-white"> Nizam</h1>
                    <h4 class="text-white"> Nizam</h4>

                </div>
            </div>
            <div class="card-body">

                <div class="d-flex align-items-center justify-content-center ">
                    <form action="<?= base_url('siswa') ?>" method="POST">
                        <div class="row">
                            <div class="col-md-4 text-center mt-2"> Nama Siswa:</div>
                            <div class="col-md-8"><input type="text" name="nama" id="" class="form-control">
                                <?php echo form_error('nama', '<small class="text-danger">', '</small>'); ?>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4 text-center mt-2"> Nis:</div>
                            <div class="col-md-8">
                                <input type="text" name="nis" id="" class="form-control">

                                <?php echo form_error('nis', '<small class="text-danger">', '</small>'); ?>


                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 text-center mt-2"> Kelas:</div>
                            <div class="col-md-8">
                                <input type="text" name="kelas" id="" class="form-control">

                                <?php echo form_error('kelas', '<small class="text-danger">', '</small>'); ?>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-center mt-2"> Tanggal Lahir:</div>
                            <div class="col-md-8">
                                <input type="date" name="tanggal_lahir" id="" class="form-control">

                                <?php echo form_error('tanggal_lahir', '<small class="text-danger">', '</small>'); ?>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-center mt-2"> Tempat Lahir:</div>
                            <div class="col-md-8">
                                <input type="text" name="tempat_lahir" id="" class="form-control">

                                <?php echo form_error('tempat_lahir', '<small class="text-danger">', '</small>'); ?>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-center mt-2"> Alamat:</div>
                            <div class="col-md-8">
                                <textarea name="alamat" class="form-control" id="" cols="30" rows="3"></textarea>

                                <?php echo form_error('alamat', '<small class="text-danger">', '</small>'); ?>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-center mt-2"> Jenis Kelamin:</div>
                            <div class="col-md-8">
                                <div class="d-flex " style="gap:16px">

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Pria" checked>
                                        <label class="form-check-label" for="jenis_kelamin1">
                                            Laki Laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="Perempuan">
                                        <label class="form-check-label" for="jenis_kelamin2">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                                <?php echo form_error('jenis_kelamin', '<small class="text-danger">', '</small>'); ?>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-center mt-2"> Agama:</div>
                            <div class="col-md-8">
                                <select name="agama" id="" class="form-control select2">
                                    <option value="">Select Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katholik">Katholik</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Khonghucu">Khonghucu</option>




                                </select>

                                <?php echo form_error('agama', '<small class="text-danger">', '</small>'); ?>


                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nis</label>
                                    <input type="text" name="nama" id="" class="form-control">
                                    <?php echo form_error('nama', '<small class="text-danger">', '</small>'); ?>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nis</label>
                                    <input type="text" name="nis" id="" class="form-control">
                                    <?php echo form_error('nis', '<small class="text-danger">', '</small>'); ?>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Kelas</label>
                                    <input type="text" name="kelas" id="" class="form-control">
                                    <?php echo form_error('kelas', '<small class="text-danger">', '</small>'); ?>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" id="" class="form-control">
                                    <?php echo form_error('tanggal_lahir', '<small class="text-danger">', '</small>'); ?>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <div class="d-flex " style="gap:16px">

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Pria" checked>
                                            <label class="form-check-label" for="jenis_kelamin1">
                                                Laki Laki
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="Perempuan">
                                            <label class="form-check-label" for="jenis_kelamin2">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                    <?php echo form_error('jenis_kelamin', '<small class="text-danger">', '</small>'); ?>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Agama</label>
                                    <select name="agama" id="" class="form-control select2">
                                        <option value="">Select Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katholik">Katholik</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Khonghucu">Khonghucu</option>




                                    </select>
                                    <?php echo form_error('agama', '<small class="text-danger">', '</small>'); ?>

                                </div>
                            </div>
                        </div> -->
                        <div class="d-flex justify-content-end" style="gap:16px">
                            <button class="btn btn-dark">Cancel</button>

                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-footer bg-dark">
                <div class="d-flex align-items-center">

                    <h4 class="text-white">Nizam</h4>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- <script>
        $(".select2").select2({
            theme: 'bootstrap-5'
        });
    </script> -->
</body>

</html>