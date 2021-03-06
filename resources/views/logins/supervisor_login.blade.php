@extends('layouts.layout')

@section('style')

    @include('styles.login')

    @include('styles.admin')

@endsection

@section('content')

    @if($status!=null)

        <script>
            alert("{{$status}}");
            window.location = 'http://localhost:8000/supervisor_login';
        </script>

    @endif

    @include('logins.components.navbar')

    <div id="login">

        <div class="row">
            <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="login-card">
                    <h2 class="text-center"><strong>EXACUTOR</strong> </h2>
                    <h4 class="text-center">Supervisor - Login</h4>
                    <form class="form-signin" method="post" action="{{ route('supervisor_login') }}">
                        <input class="form-control" type="text" required="" placeholder="Username" autofocus="" id="inputEmail" name="username">
                        <input class="form-control" type="password" required="" placeholder="Password" id="inputPassword" name="password">
                        <div class="checkbox">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember">Remember me</label>
                            </div>
                        </div>
                        {{ csrf_field() }}
                        <input class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Sign in</input>
                    </form><a href="#" class="forgot-password">Forgot your password?</a></div>
            </div>
        </div>

    </div>

    <div id="register" style="display: none;">

        @include('logins.components.supervisorRegistration')

    </div>

    <script>

        function switchTab1() {
            document.getElementById("login").style.display = "block";
            document.getElementById("register").style.display = "none";
        }

        function switchTab2() {
            document.getElementById("login").style.display = "none";
            document.getElementById("register").style.display = "block";
        }

    </script>


@endsection
