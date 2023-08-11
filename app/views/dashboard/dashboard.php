
            <!-- tampilan data -->
            <div class="container mt-2">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Selamat datang admin
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <h5 class="text-dark"><i class="fa fa-tachometer fa-2x mr-2"></i>Dashboard</h5><hr class="bg-secondary">
            </div>
            <?php
            foreach ($data['pemasukan'] as $row) {
                $pemasukan= $row['totalpemasukan'];
            }
            foreach ($data['pengeluaran'] as $row) {
                $pengeluaran = $row['totalpengeluaran'];
            }
            $total = $pemasukan-$pengeluaran;
            ?>
            <div class="container">
                <div class="row">
                    <div class="card ml-3" style="width: 18rem;">
                        <div class="garisku bg-warning"></div>
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-usd fa-2x"></i>
                            </div>
                            <h6 class="card-subtitle mb-2 text-warning">Total Kas Masjid</h6>
                            <h4 class="card-text">Rp.<?= $total?>,00</h4>
                        </div>
                    </div>
                    <div class="card ml-4" style="width: 18rem;">
                        <div class="garisku bg-primary"></div>
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-users fa-2x"></i>
                            </div>
                            <?php foreach ($data['admin'] as $row):?>
                            <h6 class="card-subtitle mb-2 text-primary">Jumlah Admin</h6>
                            <h4 class="card-text"><?= $row['total']?> users</h4>
                            <?php endforeach?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


