
            <!-- tampilan data pemasukan -->
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="text-dark"><i class="fa fa-plus fa-lg mr-2"></i>Pemasukan Kas Masjid</h5>
                    </div>
                    <div class="col-md-6">
                        <a href="<?=BASEURL?>/pemasukan/tambah_pemasukan" class="btn warntb float-right text-light btn-sm text-sm-center"><i class="fa fa-plus fa-sm">Tambah data</i></a>
                    </div>
                </div>
                <hr class="bg-secondary">
            </div>
            <!-- Tabel daftar pemasukad kas masjid -->
            <div class="container">
                <h5 class="txtwrn"><i class="fa fa-table fa-xl txtwrn mr-2"></i>Daftar Pemasukan Kas Masjid</h5>
                <div class="row">
                    <div class="col-md-5">
                        <?php foreach($data['total'] as $total):?>
                        <div class="alert alert-success" role="alert">
                            Total Pemasukan=Rp.<?= $total['totalpemasukan']?>,00
                        </div>
                        <?php endforeach?>        
                        <?= Flasher::flash()?>
                    </div>
                </div>
                <table class="table table-striped table-bordered" id="datatables">
                <thead>
                    <tr><?php $nomer = 1;?>
                    <th class="warntb text-center" scope="col" style="width: 20px;">No</th>
                    <th class="warntb text-center" scope="col">Tanggal</th>
                    <th class="warntb text-center" scope="col">Jumlah</th>
                    <th class="warntb text-center" scope="col">Nominal</th>
                    <th class="warntb text-center" scope="col">Uraian</th>
                    <th class="warntb text-center" scope="col" style="width:80px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no=1;
                        foreach ($data['pemasukan'] as $pemasukan):
                    ?>
                    <tr>
                        <td class="table-light text-center"><?=$no++;?></td>
                        <td class="table-light"><?= $pemasukan['tanggal'];?></td>
                        <td class="table-light"><?= $pemasukan['vol_barang'];?></td>
                        <td class="table-light">Rp.<?= $pemasukan['harga_satuan'];?>,00</td>
                        <td class="table-light"><?= $pemasukan['uraian'];?></td>
                        <td class="table-light">
                            <a class="btn-sm btn-danger" href="<?=BASEURL?>/Pemasukan/hapus/<?=$pemasukan['id_kas']?>" onclick="alert('yakin ingin menghapus data')"><i class="fa fa-trash fa-lg"></i></a>
                            <a class="btn-sm btn-warning" href="<?=BASEURL?>/Pemasukan/edit_pemasukan/<?=$pemasukan['id_kas']?>"><i class="fa fa-pencil-square-o fa-lg"></i></a>
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

