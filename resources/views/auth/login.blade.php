
<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote-django/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Dec 2021 12:20:00 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Login | RCPDES</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('')}}assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{ asset('')}}assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('')}}assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('')}}assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        @if (session('status'))
                                <div class="alert bg-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                        @endif
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Selamat Datang Kembali !</h5>
                                            <p>Login untuk ke APP RCPDES.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{ asset('')}}assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div class="auth-logo">
                                    <a href="index.html" class="auth-logo-light">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ asset('')}}assets/images/logo-light.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>

                                    <a href="index.html" class="auth-logo-dark">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ asset('')}}assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" action="/login" method="post">

                                        @csrf
        
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" id="username" placeholder="Masukan username">
                                            @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>  
                        
                                            @enderror
                                        </div>
                
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Masukan password" aria-label="Password" aria-describedby="password-addon">
                                                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>  
                            
                                                @enderror
                                                </div>
                                            </div>
                                        
                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                        </div>
        

                                        <div class="mt-4 text-center">
                                            <a href="javascript:void(0)" class="text-muted"><i class="mdi mdi-lock me-1"></i> Lupa Password ?</a>
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            
                            <div>
                                <p>Tidak Punya Akun ? <a href="/register" class="fw-medium text-primary"> Daftar Sekarang </a> </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end account-pages -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('')}}assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('')}}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('')}}assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('')}}assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('')}}assets/libs/node-waves/waves.min.js"></script>
        
        <!-- App js -->
        <script src="{{ asset('')}}assets/js/app.js"></script>
    </body>

<!-- Mirrored from themesbrand.com/skote-django/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Dec 2021 12:20:00 GMT -->
</html>
