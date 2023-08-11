
            <!-- tampilan data pemasukan -->
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="text-dark"><i class="fa fa-server fa-lg mr-2"></i>Rekap Kas Masjid</h5>
                    </div>
                    <div class="col-md-6">
                        <a href="<?=BASEURL?>/laporan/cetak_semua"><button class="btn-primary float-right text-light btn-sm text-sm-center"><i class="fa fa-print fa-sm">  Cetak</i></button></a>
                    </div>
                </div>
                <hr class="bg-secondary">
            </div>
            <!-- Tabel daftar pemasukad kas masjid -->
            <div class="container">
                <h6 class="text-danger"><i class="fa fa-table fa-xl txtwrn mr-2"></i>Rekap Kas Masjid</h6>
                <table class="table table-striped table-bordered" id="datatables">
                <thead>
                    <tr>
                    <th class="warntb text-center" scope="col" style="width: 20px;">No</th>
                    <th class="warntb text-center" scope="col" style="width: 60px;">Tanggal</th>
                    <th class="warntb text-center" scope="col">Jumlah</th>
                    <th class="warntb text-center" scope="col">Nominal</th>
                    <th class="warntb text-center" scope="col">Total</th>
                    <th class="warntb text-center" scope="col">Uraian</th>
                    <th class="warntb text-center" scope="col">Kategori</th>
                    <th class="warntb text-center" scope="col" style="width: 100px;">Nama Admin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no=1;
                    foreach ($data['rekap'] as $row):?>
                    <tr>
                        <td class="table-light text-center"><?=$no++?></td>
                        <td class="table-light"><?=$row['tanggal'] ?></td>
                        <td class="table-light"><?=$row['vol_barang'] ?></td>
                        <td class="table-light">Rp.<?=$row['harga_satuan'] ?>,00</td>
                        <td class="table-light">Rp.<?=$row['Total'] ?>,00</td>
                        <td class="table-light"><?=$row['uraian'] ?></td>
                        <td class="table-light"><?=$row['nama_kategori'] ?></td>
                        <?php if($row['id_admin']==1):?>
                            <td class="table-light">Sabila Nafisah Amallia</td>
                        <?php else:?>
                            <td class="table-light">Andi Almaarif Arrozi</td>
                        <?php endif?>
                    </tr>
                    <?php endforeach ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
