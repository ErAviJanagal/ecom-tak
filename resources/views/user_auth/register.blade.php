@extends('layouts.app')

@section('content')

<main>
      <div class="login-wrapper">
          <div class="row">
            <div class="col-md-12">
              <div class="tabslogin">
                <ul>
                  <li><a  href="{{route('user/login')}}">Login</a></li>
                  <li><a class="activea" href="{{route('user/register')}}">Register</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-12">
            <form method="POST" action="{{ route('register') }}" class="loginform" id="registerForm"> 
                @csrf
                <div class="row m-0">
                  <div class="col-md-12">
                    <div class="customformgroup">
                      <input type="text" class="form-control customformfieldsetting" id="" name="first_name" placeholder="First Name" value="{{ old('first_name') }}">
                      @validationErr('first_name') 
                    
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="customformgroup">
                        <input type="text" class="form-control customformfieldsetting" id="" value="{{ old('last_name') }}" name="last_name" placeholder="Last Name">
                        @validationErr('last_name') 
                       
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="customformgroup">
                        <input type="email" class="form-control customformfieldsetting" id="" name="email" placeholder="Email" value="{{ old('email') }}">
                        @validationErr('email') 
                       
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="customformgroup ">
                        <input type="password" class="form-control customformfieldsetting" id="password" name="password" placeholder="Enter Password" value="{{ old('password') }}" >
                        @validationErr('password') 
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="customformgroup">
                      <input class="btn sendmessagebtn" type="submit" value="Register">
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
     $( "#registerForm" ).validate({
	  rules: {
      first_name : {
            required: true,
        },
        last_name : {
            required: true,
        },
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