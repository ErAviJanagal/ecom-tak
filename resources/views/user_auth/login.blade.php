@extends('layouts.app')

@section('content')


<main>
      <div class="login-wrapper">
          <div class="row">
            <div class="col-md-12">
              <div class="tabslogin">
                <ul>
                  <li><a class="activea" href="{{route('user/login')}}">Login</a></li>
                  <li><a href="{{route('user/register')}}">Register</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-12">
            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" class="loginform" id="loginForm">
                @csrf
                <div class="row m-0">
                  <div class="col-md-12">
                    <div class="customformgroup">
                      <input type="email"  name="email" class="form-control customformfieldsetting" id="" placeholder="Email" value="{{ old('email') }}">
                      @validationErr('email')
                    
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="customformgroup ">
                      <input type="password" class="form-control customformfieldsetting" id="password" name="password" placeholder="Enter Password" value="{{ old('password') }}">
                      <!-- <div onclick="showHidePassword()">Eye</div> -->
                      <div class="iconbox2">
                        @validationErr('password')
                            
                        </div>
                    </div>
                  </div>
          
                  <div class="col-md-12">
                    <div class="customformgroup">
                      <input class="btn sendmessagebtn" type="submit" value="Login">
                    </div>
                  </div>
                 
                </div>
              </form>
            </div>
          </div>
      </div>
    </main>
    
@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script> 
<script type="text/javascript">
    $( "#loginForm" ).validate({
    rules: {
        email : {
            required: true,
            email:true,
        },
        password : {
            required: true,
        },
    }
    }); 

</script>
<script>
    function showHidePassword() {
        const password = document.getElementById("password");
        const togglePassword = document.getElementById("togglePassword");

        if (password.type === "password") {
            password.type = "text";
        } else {
            password.type = "password";
        }
    }

</script>
@endpush