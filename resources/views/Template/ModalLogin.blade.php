<div class="modal fade" id="ModalLogin" tabindex="-1" data-bs-focus="true"  role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content rounded-0">
        <div class="modal-header p-4" style="text-align: center;display:inline;">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <h5 class="modal-title  text-uppercase">Masuk</h5>
        </div>
        <div class="modal-body p-4">
          <div class="row">
            <div class="col-md-6">

              <h5 class="separator mb-4 text-muted"><span>Gunakan Akun Media Sosial Anda</span></h5>

              <div class="d-grid">
                <a href="" class="btn btn-block btn-facebook mb-3">
                  <i class="fa-brands fa-facebook-f"></i> Facebook
                </a>
              </div>

              <div class="d-grid">
                <a href="" class="btn btn-block btn-twitter mb-3">
                  <i class="fa-brands fa-x-twitter"></i> Twitter
                </a>
              </div>
    
              <div class="d-grid mb-3">
                <a href="" class="btn btn-block btn-google">
                  <i class="fa-brands fa-google"></i> Google
                </a>
              </div>

            </div>
            <div class="col-md-6">

              <form action="" method="post">
                <h5 class="separator mb-4 text-muted"><span>Atau dengan Email Anda</span></h5>
    
                <div class="mb-3">
                  <label class="form-label">Email, No. telp, atau username</label>
                  <input type="text" class="form-control rounded-0" required>
                </div>
      
                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input type="text" class="form-control rounded-0" required>
                </div>

                <div class="d-grid mb-3">
                  <button type="submit" class="btn btn-block btn-warning">Masuk</button>
                </div>
              </form>

            </div>
          </div>
              
    
              
        </div>
        <div class="modal-footer clearfix" style="text-align: center;display:inline;">
          Anda belum memiliki akun?<br>
          <a href="{{ url('account/register') }}">Daftar Sekarang</a>
        </div>
      </div>
    </div>
  </div>