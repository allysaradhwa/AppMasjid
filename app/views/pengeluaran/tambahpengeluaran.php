<div class="container mt-3">
                <h5 class="text-dark"><i class="fa fa-plus fa-lg mr-2"></i>Pengeluaran Kas Masjid</h5>
                    <p class="mt-4" style="color: rgb(15, 194, 134);"><i class="fa fa-plus fa-lg mr-2"></i>Tambah Pengeluaran Kas Masjid</p>
                <!-- Edit Data -->
                <div class="row byg1">
                    <div class="col-md-6 col-sm-6 pl-2 pr-2">
                        <form action="<?=BASEURL?> /Pengeluaran/tambah" method="POST" class="ml-3 mb-3 mt-4">
                            <div class="form-group mb-3">
                                <label for="label">Tanggal Pengeluaran</label>
                            <input type="date" class="form-control" name="tanggal">
                            </div>
                            <div class="form-group mb-3">
                                <label for="label">Volume Barang</label>
                            <input type="number" class="form-control" name="volume_barang">
                            </div>
                            <div class="form-group mb-3">
                                <label for="label">Harga Satuan</label>
                                <input type="number" class="form-control" name="harga_satuan">
                            </div>
                            <div class="form-group mb-3">
                                <label for="label">Uraian</label>
                                <input type="text" class="form-control" name="uraian">
                            </div>
                            <input name="id_kategori" value="2" type="hidden"></input>
                            <input name="id_admin" value="2" type="hidden"></input>
                            <button type="submit" class="btn colornav mr-3 text-light" name="simpan">Simpan</button>
                            <a href="tampilpengeluaran.php" class="btn btn-warning text-light">Batal</a>
                        </form>

                </div>
                    <div class="col-md-6 col-sm-6 pl-2 pr-2">
            </div>
        </div>
    </div>

