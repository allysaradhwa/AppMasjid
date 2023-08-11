
            <!-- tampilan data pengeluaran -->
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="text-dark"><i class="fa fa-plus fa-lg mr-2"></i>Pengeluaran Kas Masjid</h5>
                    </div>
                    <div class="col-md-6">
                        <a href="<?=BASEURL?>/pengeluaran/tambah_pengeluaran" class="btn warntb float-right text-light btn-sm text-sm-center"><i class="fa fa-plus fa-sm">Tambah data</i></a>
                    </div>
                </div>
                <hr class="bg-secondary">
            </div>
            <!-- Tabel daftar pengeluaran kas masjid -->
            <div class="container">
                <h6 class="txtwrn"><i class="fa fa-table fa-xl txtwrn mr-2"></i>Daftar Pengeluaran Kas Masjid</h6>
                <div class="row">
                    <div class="col-md-5">
                        <?= Flasher::flash()?>
                    </div>
                </div>
                <table class="table table-striped table-bordered" id="datatables">
                <thead>
                    <tr><?php $nomer = 1;?>
                    <th class="warntb text-center" scope="col" style="width: 20px;">No</th>
                    <th class="warntb text-center" scope="col">Tanggal</th>
                    <th class="warntb text-center" scope="col">Volume Barang</th>
                    <th class="warntb text-center" scope="col">Harga Satuan</th>
                    <th class="warntb text-center" scope="col">Total</th>
                    <th class="warntb text-center" scope="col">Uraian</th>
                    <th class="warntb text-center" scope="col" style="width:80px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no=1;
                        foreach ($data['pengeluaran'] as $pengeluaran):
                    ?>
                    <tr>
                        <td class="table-light text-center"><?=$no++;?></td>
                        <td class="table-light"><?= $pengeluaran['tanggal'];?></td>
                        <td class="table-light"><?= $pengeluaran['vol_barang'];?></td>
                        <td class="table-light">Rp.<?= $pengeluaran['harga_satuan'];?>,00</td>
                        <td class="table-light">Rp.<?= $pengeluaran['Total'];?>,00</td>
                        <td class="table-light"><?= $pengeluaran['uraian'];?></td>
                        <td class="table-light">
                            <a class="btn-sm btn-danger" href="<?=BASEURL?>/Pengeluaran/hapus/<?=$pengeluaran['id_kas']?>" onclick="alert('yakin ingin menghapus data')"><i class="fa fa-trash fa-lg"></i></a>
                            <a class="btn-sm btn-warning" href="<?=BASEURL?>/Pengeluaran/edit_pengeluaran/<?=$pengeluaran['id_kas']?>"><i class="fa fa-pencil-square-o fa-lg"></i></a>
                        </td>
                    </tr> 
                    <?php 
                        endforeach
                    ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>

