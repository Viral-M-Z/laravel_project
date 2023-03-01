<x-layout>
    
    <div class="content">

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                   <form action="<?=url('reset-password');?>" method="POST">
                       <input type="hidden" name="token" value="{{ $token }}" >
                       @csrf
                        <div class="card" data-background="color" data-color="blue">
                            @error('main')
                                <p class="error centerize">{{ $message }}</p>    
                            @enderror
                            <div class="card-header">
                                <h3 class="card-title">Reset  Password</h3>
                            </div>
                            <div class="card-content">
                                 <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" placeholder="Enter your email" class="form-control input-no-border">
                                    @if ($errors->any())
                                            <p class="error">@error('email')
                                                {{ $message }}
                                            @enderror </p>@endif
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" placeholder="Enter password" class="form-control input-no-border">
                                    @if ($errors->any())
                                            <p class="error">@error('password')
                                                {{ $message }}
                                            @enderror </p>@endif
                                </div>
                                
                            
                            
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" name="password_confirmation" placeholder="Enter password again" class="form-control input-no-border">
                                    @if ($errors->any())
                                            <p class="error">@error('password_confirmation')
                                                {{ $message }}
                                            @enderror </p>@endif
                                </div>
                                
                            </div>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-fill btn-wd ">Let's go</button>
                                <div class="forgot">
                                    <a href="<?=url('login');?>">Login</a>
                                </div>
                            </div>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>

    
</x-layout>