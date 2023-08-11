
            <div class="container mt-3">
                <h5 class="text-dark"><i class="fa fa-plus fa-lg mr-2"></i>Pengeluaran Kas Masjid</h5>
                    <p class="mt-4" style="color: rgb(15, 194, 134);"><i class="fa fa-pencil fa-lg mr-2"></i>Edit Pengeluaran Kas Masjid</p>
                <!-- Edit Data -->
                <div class="row byg1">
                    <div class="col-md-6 col-sm-6 pl-2 pr-2">
                        <form action="<?=BASEURL; ?>/Pengeluaran/edit" method="POST" class="ml-3 mb-3 mt-4">
                            <input name="id_kategori" value="2" type="hidden"></input>
                            <input name="id_admin" value="2" type="hidden"></input>
                            <div class="form-group mb-3">
                            <input type="hidden" name="id" class="form-control" value="<?=$data['rows']['id_kas']?>">
                                <label for="label">Tanggal Pengeluaran</label>
                            <input type="date" name="tgl_km" class="form-control" value="<?=$data['rows']['tanggal']?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="label">Volume Barang</label>
                            <input type="number" name="volume" class="form-control" value="<?=$data['rows']['vol_barang']?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="label">Harga Satuan</label>
                                <input type="number" name="harga" class="form-control" value="<?=$data['rows']['harga_satuan']?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="label">Uraian</label>
                                <input type="text" name="uraian_km" class="form-control" value="<?=$data['rows']['uraian']?>">
                            </div>
                            <button type="submit" class="btn colornav mr-3 text-light" name="update">Ubah</button>
                            <a href="tampilpengeluaran.php"><button type="submit" class="btn btn-warning text-light">Batal</button></a>
                        </form>


                </div>
                    <div class="col-md-6 col-sm-6 pl-2 pr-2">
            </div>
        </div>
    </div>
