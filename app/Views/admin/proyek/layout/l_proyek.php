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
                            <h3 class="card-title">Striped Full Width Table</h3>
                        </div>

                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Kode Proyek</th>
                                        <th>Nama Proyek</th>
                                        <th>Lokasi</th>
                                        <th>Progress</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>KLHK TAHAP 2</td>
                                        <td> Dodokan Moyosari </td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="btn btn-sm btn-warning">detail</div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h2> PEKERJAAN TANAH
                            </h2>
                        </div>
                        <div class="card-body">
                            <div id="ganttChart" class="container-fluid"></div>
                            <br /><br />
                            <div id="eventMessage"></div>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h2> PEKERJAAN STRUKTUR PONDASI
                            </h2>
                        </div>
                        <div class="card-body">
                            <div id="ganttChart2" class="container-fluid" style="box-sizing: unset !important;"></div>
                            <br /><br />
                            <div id="eventMessage"></div>
                        </div>

                    </div>
                </div>
            </div>







        </div>
    </section>

</div>