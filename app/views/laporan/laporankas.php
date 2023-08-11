
            <!-- tampilan data pemasukan -->
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="text-dark"><i class="fa fa-window-maximize fa-lg mr-2"></i>Laporan keuangan kas masjid</h5>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
                <hr class="bg-secondary">
            </div>
            <!-- Cetak priode laporan -->
            <div class="container">
                <h6 class="text-primary mt-3 mb-3"><i class="text-primary fa fa-print fa-lg mr-3"></i>Cetak laporan keuangan Masjid</h6>
                <div class="row">
                <form action="<?= BASEURL?>/laporan/cetak" method="POST" class="form-inline mb-2">
                    <div class="col md-4">
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Cari Data</span>
                        </div>
                        <input name="dari" type="date" class="form-control" placeholder="dari" aria-label="Cari" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col md-4">
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Cari Data</span>
                        </div>
                        <input name="sampai" type="date" class="form-control" placeholder="sampai" aria-label="Cari" aria-describedby="basic-addon1">
                        </div>
                        
                    </div>
                    <div class="col md-4">
                        <button type="submit" name="cetak" class="btn btn-primary"><i class="fa fa-print fa-lg mr-3"></i>Cetak laporan</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
