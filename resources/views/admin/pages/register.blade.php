@extends('admin.layouts.demo')
@section('title')
<title>SB Admin 2 - Registration</title>
@endsection
@section('pqr')
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                    <form method="post" action="{{ url('register-store') }}" class="user">
                        {{ csrf_field() }}
                        @if(Session::has('err'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('err') }}
                        </div>
                        @endif
                        <div class="form-group">
                            <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName"
                                placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control form-control-user"
                                id="exampleInputEmail" placeholder="Email Address">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" name="password" class="form-control form-control-user"
                                    id="exampleInputPassword" placeholder="Password">
                            </div>
                            <div class="col-sm-6">
                                <input type="password" name="repeat" class="form-control form-control-user"
                                    id="exampleRepeatPassword" placeholder="Repeat Password">
                            </div>
                        </div>
                        <a href="" class="btn btn-primary btn-user btn-block">
                            Register Account
                        </a>
                        <hr>
                        <a href="#" class="btn btn-google btn-user btn-block">
                            <i class="fab fa-google fa-fw"></i> Register with Google
                        </a>
                        <a href="#" class="btn btn-facebook btn-user btn-block">
                            <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                        </a>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="{{url('admin-forgotPass') }}">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="{{ url('admin-login') }}">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
