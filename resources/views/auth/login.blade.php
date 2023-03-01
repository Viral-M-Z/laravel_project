<x-layout>
    
<div class="content">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
              
                    <div class="card" data-background="color" data-color="blue">
                        <form action="<?=url('/login');?>" method="POST" class="login-form">
                        @csrf                        

                        <div class="card-header">
                            <h3 class="card-title">Login</h3>
                        </div>
                        <div class="card-content">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter email" class="form-control input-no-border">
                               @if ($errors->any())
                                <p class="error">@error('email')
                                    {{ $message }}
                                @enderror </p>@endif
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="Password" class="form-control input-no-border">
                                @if ($errors->any())
                                <p class="error">@error('password')
                                    {{ $message }}
                                @enderror</p>
                                @endif
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-fill btn-wd ">Let's go</button>
                            <div class="forgot">
                                <a href=" <?=url('/forgot-password');?>">Forgot your password?</a>
                            </div>
                        </div>
                    </form>
                    </div>
                
            </div>
        </div>
    </div>
</div>


</x-layout>