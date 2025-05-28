<x-layout>
  <x-slot name='main'>
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong></strong> {{session('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div>
   <div class="auth-main">
      <div class="auth-wrapper v1">
        <div class="auth-form">
          <div class="position-relative my-5">
            <div class="auth-bg">
              <span class="r"></span>
              <span class="r s"></span>
              <span class="r s"></span>
              <span class="r"></span>
                  <span class="r s r"></span>
              <span class="r s"></span>
              <span class="r s"></span>
              <span class="r"></span>
            </div>
            <div class="card mb-0">
              <div class="card-body">
                <div class="text-center">
                  <a href="#"><img src="http://localhost:8000/build/assets/images/logo-dark.svg" alt="img" /></a>
                </div>
                <h4 class="text-center f-w-500 mt-4 mb-3">Login</h4>

                 <form action="{{url('login')}}" method="post">
                  @csrf
                <div class="form-group mb-3">
                  <input type="email" class="form-control" name="email"  placeholder="Email Address" />
                </div>
                   @error('email')
            <div style="color:red">{{ $message }}</div>
        @enderror
                <div class="form-group mb-3">
                  <input type="password" class="form-control" name="password" placeholder="Password" />
                </div>
                 @error('password')
            <div style="color:red">{{ $message }}</div>
        @enderror
                <div class="d-flex mt-1 justify-content-between align-items-center">
                  <div class="form-check">
                    <input class="form-check-input input-primary"  type="checkbox" id="customCheckc1" checked="" />
                    <label class="form-check-label text-muted" for="customCheckc1">Remember me?</label>
                  </div>
                  <h6 class="text-secondary f-w-400 mb-0">Forgot Password?</h6>
                </div>
                <div class="text-center mt-4">
                  <button type="submit" class="btn btn-primary shadow px-sm-4">Login</button>
                </div>
           
                </form>
                <div class="d-flex justify-content-between align-items-end mt-4">
                  <h6 class="f-w-500 mb-0">Don't have an Account?</h6>
                  <a href="register" class="link-primary">Create Account</a>
                  <a href="{{ route('login.google') }}" class="link-primary">Create Account Google  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

  </x-slot>
</x-layout>