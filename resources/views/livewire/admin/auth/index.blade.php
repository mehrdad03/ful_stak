<div class="login-container">

    <div class="container-fluid h-100">

        <!-- Row start -->
        <div class="row g-0 h-100">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="login-wrapper">
                    <form wire:submit="adminLogin(Object.fromEntries(new FormData($event.target)))">
                        <div class="login-screen">
                            <div class="login-body">
                                @if (session()->has('message'))
                                    <div class="alert alert-danger" style="text-align: left">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                <h3 class="mb-4 text-center">ADMIN PANEL</h3>
                                <div class="field-wrapper">
                                    <input name="email" type="email" autofocus>
                                    <div class="field-placeholder">Email ID</div>
                                    @foreach ($errors->get('email') as $message)
                                        <span wire:loading.remove
                                              class="text-danger" style="text-align: left;display: block;direction: ltr">{{$message}}</span>
                                    @endforeach
                                </div>
                                <div class="field-wrapper mb-3">
                                    <input style="direction: ltr" name="password" type="password">
                                    <div class="field-placeholder">Password</div>
                                    @foreach ($errors->get('password') as $message)
                                        <span wire:loading.remove
                                              class="text-danger " style="text-align: left;display: block;direction: ltr">{{$message}}</span>
                                    @endforeach
                                </div>
                                <div class="actions">
                                    <button type="submit" class="w-100 btn btn-success">Login</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
