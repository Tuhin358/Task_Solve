<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->


<style>

    .login-container{
        margin-top: 5%;
        margin-bottom: 5%;
    }
    .login-logo{
        position: relative;
        margin-left: -41.5%;
    }
    .login-logo img{
        position: absolute;
        width: 20%;
        margin-top: 19%;
        background: #282726;
        border-radius: 4.5rem;
        padding: 5%;
    }
    .login-form-1{
        padding: 9%;
        background:#282726;
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    }
    .login-form-1 h3{
        text-align: center;
        margin-bottom:12%;
        color:#fff;
    }
    .login-form-2{
        padding: 9%;
        background: #f05837;
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    }
    .login-form-2 h3{
        text-align: center;
        margin-bottom:12%;
        color: #fff;
    }
    .btnSubmit{
        font-weight: 600;
        width: 50%;
        color: #282726;
        background-color: #fff;
        border: none;
        border-radius: 1.5rem;
        padding:2%;
    }
    .btnForgetPwd{
        color: #fff;
        font-weight: 600;
        text-decoration: none;
    }
    .btnForgetPwd:hover{
        text-decoration:none;
        color:#fff;
    }
</style>


<div class="col-md-4 container login-container">
    <form id="contactForm" method="POST" action="{{ route('login') }}" >
        @csrf

        <div class="row align-items-stretch mb-5">
                <div class="col-md-12 login-form-2">

          <h3>Login</h3>
        <div class="form-group">
            <label class="text-start float-start p-2">E-mail</label>
            <input type="text" class="form-control" type="email" placeholder="Your Email *" name="email" required value="" />
        </div>
        <div class="form-group">
            <label class="text-start float-start p-2">Password</label>
            <input type="password" class="form-control" id="phone" type="password" placeholder="Your password *" name="password" required value="" />
        </div>

                <!-- Submit Button-->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>


                </div>
            </form>


            </div>

