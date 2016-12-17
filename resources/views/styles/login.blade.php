<style>
    .login-card{
        max-width:350px;
        padding:40px 40px;
        background-color:#F7F7F7;
        margin:0 auto 25px;
        margin-top:50px;
        border-radius:2px;
        box-shadow:0px 2px 2px rgba(0, 0, 0, 0.3);
    }

    .login-card .profile-img-card{
        width:96px;
        height:96px;
        margin:0 auto 10px;
        display:block;
        border-radius:50%;
    }

    .login-card .profile-name-card{
        font-size:16px;
        font-weight:bold;
        text-align:center;
        margin:10px 0 0;
        min-height:1em;
    }

    .login-card .reauth-email{
        display:block;
        color:#404040;
        line-height:2;
        margin-bottom:10px;
        font-size:14px;
        text-align:center;
        overflow:hidden;
        text-overflow:ellipsis;
        white-space:nowrap;
        box-sizing:border-box;
    }

    .login-card .form-signin input[type=email], .login-card .form-signin input[type=password], .login-card .form-signin input[type=text], .login-card .form-signin button{
        height:44px;
        font-size:16px;
        width:100%;
        display:block;
        margin-bottom:10px;
        z-index:1;
        position:relative;
        box-sizing:border-box;
    }

    .login-card label{
        color:#000000;
    }

    .login-card .form-signin .form-control:focus{
        border-color:rgb(104, 145, 162);
        outline:0;
        -webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
        box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
    }

    .login-card .btn.btn-signin{
        font-weight:700;
        height:36px;
        line-height:36px;
        font-size:14px;
        background:rgb(104, 145, 162);
        border-radius:3px;
        border:none;
        transition:all 0.218s;
        padding:0;
    }

    .login-card .btn.btn-signin:hover, .login-card .btn.btn-signin:active, .login-card .btn.btn-signin:focus{
        background:rgb(12, 97, 33);
    }

    .login-card .forgot-password{
        color:rgb(104, 145, 162);
    }

    .login-card .forgot-password:hover, .login-card .forgot-password:active, .login-card .forgot-password:focus{
        color:rgb(12, 97, 33);
    }

</style>