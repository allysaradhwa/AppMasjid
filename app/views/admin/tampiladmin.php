
            <!-- tampilan data pemasukan -->
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="text-dark"><i class="fa fa-users fa-lg mr-2"></i>Kelola Admin</h5>
                        <?= Flasher::flash()?>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
                <hr class="bg-secondary">
            </div>
            <!-- Tabel daftar pemasukad kas masjid -->
            <div class="container">
                <h6 class="txtwrn"><i class="fa fa-table fa-xl txtwrn mr-2"></i>Daftar Admin Kas Masjid</h6>
                <table class="table table-striped table-bordered" id="datatables">
                <thead>
                    <tr>
                    <th class="warntb text-center" scope="col" style="width: 30px;">No</th>
                    <th class="warntb text-center" scope="col">Nama</th>
                    <th class="warntb text-center" scope="col">Username</th>
                    <th class="warntb text-center" scope="col" style="width:110px;">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $no=1;
                        foreach ($data['admin'] as $row):
                    ?>
                    <tr>
                    <td class="table-light text-center"><?= $no++?></td>
                    <td class="table-light"><?= $row['nama_admin']?></td>
                    <td class="table-light"><?= $row['username']?></td>
                    <td class="table-light text-center">
                        <a class="btn-sm btn-warning" href="<?= BASEURL?>/admin/edit_admin/<?=$row['id_user']?>"><i class="fa fa-pencil-square-o fa-xl
                        "></i></a>
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
