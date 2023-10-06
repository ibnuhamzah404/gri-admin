<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Proyek</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-md btn-success">Input Excel</button>
                        </div>
                        <form action="<?= base_url('admin/input_pekerjaan') ?>" method="post">
                            <div class="card-body">

                                <label for=""> Scope Pekerjaan</label>

                                <select name="id_scpek" id="" class="form-control">
                                    <?php foreach ($scope_pekerjaan as $sp) : ?>
                                        <option value="<?= $sp['id'] ?>"><?= $sp['nama_scope'] ?></option>
                                    <?php endforeach; ?>

                                </select>

                                <label for=""> Jenis Pekerjaan</label>
                                <input type="text" class="form-control" name="nama">

                                <label for=""> volume (contoh : 49.16)</label>
                                <input type="text" class="form-control" name="volume">

                                <label for=""> persentase (contoh : 0.56)</label>
                                <input type="text" class="form-control" name="persentase">

                                <label for=""> Satuan </label>
                                <select id="" class="form-control" name="id_satuan">
                                    <?php foreach ($satuan as $st) : ?>
                                        <option value="<?= $st['id'] ?>"><?= $st['nama_satuan'] ?></option>
                                    <?php endforeach; ?>

                                </select>

                            </div>

                            <div class="card-footer">
                                <button class="btn btn-md btn-primary float-right" type="submit">
                                    kirim
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>







        </div>
    </section>

</div>