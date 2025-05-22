<x-layout>
  <x-slot name='main'>
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> Password chenge  </strong> {{session('success')}}
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
                <h4 class="text-center f-w-500 mt-4 mb-3">Change password</h4>

                 <form action="{{url('change-password')}}" method="post">
                  @csrf
             
                    <div class="form-group mb-3">
                  <input type="password" class="form-control" name="current_password" placeholder="current password" />
                </div>
                 @error('current_password')
            <div style="color:red">{{ $message }}</div>
        @enderror

                <div class="form-group mb-3">
                  <input type="password" class="form-control" name="new_password" placeholder="Password" />
                </div>
                 @error('new_password')
            <div style="color:red">{{ $message }}</div>
        @enderror
         <div class="form-group mb-3">
                  <input type="password" class="form-control" placeholder="Confirm Password" name="new_password_confirmation" />
                </div>
                <div class="d-flex mt-1 justify-content-between align-items-center">
                 
                </div>
                <div class="text-center mt-4">
                  <button type="submit" class="btn btn-primary shadow px-sm-4"> Change password  </button>
                </div>

                </form>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

  </x-slot>
</x-layout>