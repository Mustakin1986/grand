<!DOCTYPE html>
<html lang="en">
@include('includes.Style')
  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="{{ url('login') }}" method="POST">
                @csrf
              <h1>Login Form</h1>
              <div>
                <input type="text"  name="email" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password"  name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-default submit">Login</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />
              </div>
            </form>
          </section>
        </div>

        {{-- <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="{{ url('login') }}" method="POST">
              <h1>Create Account</h1>
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
                @error('name')
                        <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" name="email" class="form-control" id="email" placeholder="Enter your Email">
                @error('email')
                <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
                @error('password')
                <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                @enderror
            </div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />
              </div>
            </form>
          </section>
        </div> --}}
      </div>
    </div>
  </body>
</html>
