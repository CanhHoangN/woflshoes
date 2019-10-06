<div class="box"><!-- box Begin -->

    <div class="box-header"><!-- box-header Begin -->

        <center><!-- center Begin -->

            <h1> Login </h1>

            <p class="lead"> Already have our account..? </p>

        </center><!-- center Finish -->

    </div><!-- box-header Finish -->

    <form method="post" action="{!! url('login') !!}"><!-- form Begin -->
        <input type= "hidden" name= "_token" value= "{!! csrf_token() !!}" />

        @if(Session::has('flag'))
            <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
        @endif

        <div class="form-group"><!-- form-group Begin -->

            <label> Email </label>

            <input name="email" type="text" class="form-control" required>

        </div><!-- form-group Finish -->

        <div class="form-group"><!-- form-group Begin -->

            <label> Password </label>

            <input name="password" type="password" class="form-control" required>

        </div><!-- form-group Finish -->

        <div class="text-center"><!-- text-center Begin -->

            <button name="login" value="Login" class="btn btn-primary">

                <i class="fa fa-sign-in"></i> Login

            </button>

        </div><!-- text-center Finish -->

    </form><!-- form Finish -->

</div><!-- box Finish -->