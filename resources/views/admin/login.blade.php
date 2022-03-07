@extends('master.login')

@section('main')
<div id="app">
	<br>
	<br>
    <section class="section">
      <div class="container mt-5">
        <div class="row">
			
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
				@if (session('loginError'))
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				{{ session ('loginError') }}
			  </div>
			  @endif
              <div class="card-header"><h4>Login</h4></div>
              <div class="card-body">
                <form method="POST" action="/adminn" class="needs-validation">
					@csrf
					@method('POST')
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="name" tabindex="1" required autofocus>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <input type="hidden" class="form-control" name="role" value="admin" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
				</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection