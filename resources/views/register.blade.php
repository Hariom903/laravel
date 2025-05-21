

<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
<x-layout>
  <x-slot name='main'> 
   <div class="auth-main">
      <div class="auth-wrapper v1">
        <div class="auth-form">
          <div class="position-relative my-5">
            <div class="auth-bg">
              <span class="r"></span>
              <span class="r s"></span>
              <span class="r s"></span>
              <span class="r"></span>
            </div>
            <div class="card mb-0">
              <div class="card-body">
                <div class="text-center">
                  <a href="#"><img src="http://localhost:8000/build/assets/images/logo-dark.svg" alt="img" /></a>
                </div>
                <h4 class="text-center f-w-500 mt-4 mb-3">Sign up</h4>
                <form action="userRegister" method="POST">
                        @csrf
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group mb-3">
                      <input type="text" class="form-control" placeholder="First Name" value="{{ old('firstname')}}"  name="firstname" />
                
                      @error('firstname')
                           <span style="color: red;">{{ $message }}</span >
                        @enderror
                            </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-3">
                      <input type="text" class="form-control" placeholder="Last Name" value="{{ old('lastname')}}" name="lastname" />
                      
                      @error('lastname')
                           <span style="color: red;">{{ $message }}</span >
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3">
                  <input type="email" class="form-control" value="{{ old('email')}}" placeholder="Email Address" name="email" />
                      @error('email')
                           <span style="color: red;">{{ $message }}</span >
                        @enderror
                </div>
                <div class="form-group mb-3">
                  <input type="password" class="form-control" placeholder="Password"  name="password" />
                      @error('password')
                           <span style="color: red;">{{ $message }}</span >
                        @enderror
                </div>
                <div class="form-group mb-3">
                  <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" />
                </div>
                <div class="d-flex mt-1 justify-content-between">
                  <div class="form-check">
                    <input class="form-check-input input-primary" type="checkbox" id="customCheckc1" name="checkbox" checked="" />
                    <label class="form-check-label text-muted" for="customCheckc1">I agree to all the Terms & Condition</label>
                  </div>
                </div>
                <div class="text-center mt-4">
                  <button type="submit" class="btn btn-primary shadow px-sm-4">Sign up</button>
                </div>

                </form>
                <div class="d-flex justify-content-between align-items-end mt-4">
                  <h6 class="f-w-500 mb-0">Already have an Account?</h6>
                  <a href="{{url('login')}}" class="link-primary">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </x-slot>
</x-layout>