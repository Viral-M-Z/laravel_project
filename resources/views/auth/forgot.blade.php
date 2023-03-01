<x-layout>
            <div class="content">

                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                           <form action="" method="POST">
                               @csrf
                                <div class="card" data-background="color" data-color="blue">
                                    @error('main')
                                    <p class="error centerize">{{ $message }}</p>    
                                    @enderror

                                    <div class="card-header">
                                        <h3 class="card-title">Forgot Password</h3>
                                    </div>
                                    <div class="card-content">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" placeholder="Enter email" class="form-control input-no-border">
                                            @if ($errors->any())
                                            <p class="error">@error('email')
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