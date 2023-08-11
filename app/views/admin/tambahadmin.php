
        <div class="container mt-3">
          <h5 class="text-dark"><i class="fa fa-user fa-lg mr-2"></i>Kelola Admin</h5>
          <p class="mt-4" style="color: rgb(15, 194, 134);"><i class="fa fa-plus fa-lg mr-2"></i>Tambah kelola admin</p>
          <!-- Edit Data -->
          <div class="row byg1">
            <div class="col-md-6 col-sm-6 pl-2 pr-2">
              <form action="<?=BASEURL; ?> /Admin/tambah" method="POST" class="ml-3 mb-3 mt-4">
                <div class="form-group mb-3">
                  <label for="label">Nama Admin</label>
                  <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group mb-3">
                  <label for="label">Username</label>
                  <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group mb-3">
                  <label for="label">Password</label>
                  <input type="text" class="form-control" name="password">
                </div>
                <button type="submit" class="btn colornav mr-3 text-light" name="tambah">Simpan</button>
                <a href="tampiladmin.php"><button type="submit" class="btn btn-warning text-light">Batal</button></a>
              </form>

            </div>
            <div class="col-md-6 col-sm-6 pl-2 pr-2">
        
            </div>
          </div>
        </div>
      </div>
    </div>
