
        <div class="container mt-3">
          <h5 class="text-dark"><i class="fa fa-user fa-lg mr-2"></i>Kelola Admin</h5>
          <p class="mt-4" style="color: rgb(15, 194, 134);"><i class="fa fa-plus fa-lg mr-2"></i>Edit kelola admin</p>
          <!-- Edit Data -->
          <div class="row byg1">
            <div class="col-md-6 col-sm-6 pl-2 pr-2">
              <form action="<?=BASEURL; ?> /Admin/edit" method="POST" class="ml-3 mb-3 mt-4">
                <div class="form-group mb-3">
                  <input name="id" type="hidden" class="form-control" value="<?=$data['rows']['id_user']?>">
                  <label for="label">Nama Admin</label>
                  <input name="nama1" type="text" class="form-control" value="<?=$data['rows']['nama_admin']?>">
                </div>
                <div class="form-group mb-3">
                  <label for="label">Username</label>
                  <input name="username1" type="text" class="form-control" value="<?=$data['rows']['username']?>">
                </div>
                <div class="form-group mb-3">
                  <label for="label">Password</label>
                  <input name="password1" type="text" class="form-control" value="<?=$data['rows']['password']?>">
                </div>
                <button type="submit" class="btn colornav mr-3 text-light" name="ubah" >Ubah</button>
                <a href="<?= BASEURL?>/admin" class="btn btn-warning text-light">batal</a>
              </form>


            </div>
            <div class="col-md-6 col-sm-6 pl-2 pr-2">
        
            </div>
          </div>
        </div>
      </div>
    </div>
