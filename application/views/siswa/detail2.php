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
    <div class="container-fluid" style="max-width: 1000px;">
        <h1 class="text-center"> Tambah Siswa</h1>
        <div class="d-flex align-items-center justify-content-center flex-column shadow p-3">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nama Siswa</label>
                        <h5><?= $this->session->userdata('nama'); ?></h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nis</label>
                        <h5><?= $this->session->userdata('nis'); ?></h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Kelas</label>
                        <h5><?= $this->session->userdata('kelas'); ?></h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <h5><?= $this->session->userdata('tanggal_lahir'); ?></h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <div class="d-flex " style="gap:16px">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" <?= $this->session->userdata('jenis_kelamin') == 'Pria' ? 'checked' : ''; ?> disabled>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Laki Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" <?= $this->session->userdata('jenis_kelamin') == 'Perempuan' ? 'checked' : ''; ?> disabled>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Agama</label>
                        <select name="" id="" class="form-control select2" disabled>
                            <option value="" selected>Select Agama</option>
                            <option value="" <?= $this->session->userdata('agama') == 'Islam' ? 'selected' : ''; ?>>Islam</option>
                            <option value="" <?= $this->session->userdata('agama') == 'Kristen' ? 'selected' : ''; ?>>Kristen</option>
                            <option value="" <?= $this->session->userdata('agama') == 'Katholik' ? 'selected' : ''; ?>>Katholik</option>
                            <option value="" <?= $this->session->userdata('agama') == 'Budha' ? 'selected' : ''; ?>>Budha</option>
                            <option value="" <?= $this->session->userdata('agama') == 'Hindu' ? 'selected' : ''; ?>>Hindu</option>
                            <option value="<?= $this->session->userdata('agama') == 'Protestan' ? 'selected' : ''; ?>">Protestan</option>
                            <option value="" <?= $this->session->userdata('agama') == 'Khonghucu' ? 'selected' : ''; ?>>Khonghucu</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end" style="gap:16px">
                <a href="<?= base_url('siswa') ?>" class="btn btn-dark">Back</a>

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