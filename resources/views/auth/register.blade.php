@include('layouts/navbar')
<div class="container mx-auto h-100vh">
  <div class="row align-items-center justify-content-center h-100">
    <div class="col w-320px">
      <a href="index.html" class="d-flex no-underline back">
        <i class='bx bx-left-arrow-alt bx-md'></i>
        <span class="mt-2">Kembali</span>
      </a>
      <h1 class="sign-in h3 font-weight-bold mt-4 pt-1">
        Register
      </h1>
      <p class="text secondary h8 mt-1 mb-1">Learn or Create to Make Money.</p>
      <form>
        <div class="form-group mt-3">
          <label>Nama</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class='bx bxs-user'></i></i></div>
            </div>
            <input type="text" class="form-control" placeholder="Nama lengkap">
          </div>
        </div>
        <div class="form-group mt-3">
          <label>Email</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class='bx bxs-bookmark-alt'></i></div>
            </div>
            <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email Address">
          </div>
        </div>
        <div class="form-group mt-3">
          <label>Password</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class='bx bxs-lock-alt'></i></div>
            </div>
            <input type="password" class="form-control" placeholder="Password">
          </div>
        </div>
        <button type="submit" class="btn login-btn m-0 btn-block">Register</button>
        <p class="mt-3">Sudah Punya akun? <a href="login.html">Login</a></p>
      </form>
    </div>
  </div>
</div>