
<html>
    <head>
        <link rel="stylesheet" href="{{ asset('Theme/css/style.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <section class="vh-100">
            <div class="container-fluid h-custom">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                    class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                    <x-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="form-outline mb-4">
                            <input type="email" id="email" class="form-control form-control-lg" name="email" value="{{ $request->email }}" required autofocus autocomplete="username"/>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password"  placeholder="Password" id="password" class="form-control form-control-lg" name="password" :value="old('password')" required  autocomplete="new-password"/>
                        </div>

                        
                        <div class="form-outline mb-4">
                            <input type="password"  placeholder="re-enter Password" id="password_confirmation" class="form-control form-control-lg" name="password_confirmation" required  autocomplete="new-password"/>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <input type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="{{ __('Reset Password') }}">                            
                        </div>
                    </form>
                    </div>
              </div>
            </div>
          </section>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
