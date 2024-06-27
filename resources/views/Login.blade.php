<!DOCTYPE html>
<html lang="en">
  @include ('head')
  <body>
    <header class="header2" id="headerLogin">
      <a class="logoLogin" href="home">
        <img src="/Logo Cumolus/Culombus2.PNG" />
      </a>
      <div class="LogoHome">
        <a href="home">
          <span class="material-symbols-outlined"> home_pin </span>
        </a>
      </div>
    </header>
    <section class="LoginSection">
      <div class="BorderLogin">
        <div class="logo2">
          <img src="/Logo Cumolus/Culombus2.PNG" />
        </div>
        <div class="text1">
          <p>Login into Your Account</p>
        </div>
        <form id="LoginForm" action="/login" method="post">
        @csrf
          <div class="inputusernameLogin">
            <input
              type="text"
              name="username"
              id="username"
              class="input-username @error('username') is-invalid @enderror"
              placeholder="Username"
            />
            @error('username')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="inputpsw">
            <input
              type="password"
              name="password"
              id="password"
              class="input-password @error('password') is-invalid @enderror"
              placeholder="Password"
            />
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="buttonLogin" type="submit" name="buttonLogin">
            <button>Login</button>
          </div>
          <div class="or">
            <p>or</p>
          </div>
          <div class="button2">
            <button class="Google">
              <img src="" alt="" />
              Google
            </button>
            <button class="Meta">Meta</button>
          </div>
          <div class="text2">
            <p>
              Don’t have account?
              <a href="Register">Join us</a>
            </p>
          </div>
        </form>
      </div>
    </section>
    @include('footer')
    <script>
    </script>
  </body>
</html>
