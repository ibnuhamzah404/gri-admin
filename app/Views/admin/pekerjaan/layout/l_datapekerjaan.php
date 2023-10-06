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
                            <a class="btn btn-md btn-primary" href="<?= base_url('admin/inputpekerjaan') ?>">Input Manual</a>
                        </div>
                        <form action="<?= base_url('admin/input_pekerjaan') ?>" method="post">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <?php $no = 1; ?>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Volume</th>
                                            <th>Persentase</th>
                                            <th>satuan</th>
                                            <th>scope pekerjaan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($pekerjaan as $pk) : ?>
                                            <tr>
                                                <td> <?= $no++; ?></td>
                                                <td> <?= $pk['nama_pekerjaan'] ?></td>
                                                <td> <?= $pk['volume'] ?></td>
                                                <td> <?= $pk['persentase'] ?></td>
                                                <td> <?= $pk['nama_satuan'] ?></td>
                                                <td> <?= $pk['nama_scope'] ?></td>
                                                <td>
                                                    <a href="" class="btn btn-sm btn-warning text-white">
                                                        <i class="fas fa-pencil-alt"> </i>
                                                    </a>
                                                    <a href="" class="btn btn-sm btn-danger">
                                                        <i class="fas fa-trash-alt"> </i>
                                                    </a>
                                                </td>

                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>


                            </div>

                            <div class="card-footer">

                            </div>
                        </form>
                    </div>
                </div>
            </div>







        </div>
    </section>

</div>