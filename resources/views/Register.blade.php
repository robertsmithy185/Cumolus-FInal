<!DOCTYPE html>
<html lang="en">
  @include ('head')
  <body>
    <header id="header3" class="header3">
      <a class="logoRegister" href="home">
        <img src="/Logo Cumolus/Culombus2.PNG" />
      </a>
      <div class="LogoHome">
        <a href="home">
          <span class="material-symbols-outlined"> home_pin </span>
        </a>
      </div>
    </header>
    <section class="RegisterSection">
      <div class="BorderLogin">
        <div class="logo3">
          <img src="/Logo Cumolus/Culombus2.PNG" />
        </div>
        <div class="textInto">
          <p>Login into Your Account</p>
        </div>
        <form id="RegisterForm" action="/Register" method="POST">
          @csrf
          <div class="inputusername">
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
          <div class="inputemailRegister">
            <input
              type="email"
              name="email"
              id="email"
              class="input-password @error('email') is-invalid @enderror"
              placeholder="Email"
            />
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="inputpswregister">
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
          <div class="buttonRegister" type="submit" name="buttonRegister">
            <button>Register</button>
          </div>
          <div class="or">
            <p>or</p>
          </div>
          <div class="button3">
            <button class="Google">
              <img src="" alt="" />
              Google
            </button>
            <button class="Meta">Meta</button>
          </div>
          <div class="text2">
            <p>
              Already have an account?
              <a href="login"> Login Here </a>
            </p>
          </div>
        </form>
      </div>
    </section>
    @include('footer')
    <script>
      $(document).ready(function () {
        const urlParams = new URLSearchParams(window.location.search);
        const error = urlParams.get("error");

        if (error === "1") {
          $("#Failedusername").text("Username atau Email telah digunakan.");
        }
      });
    </script>
  </body>
</html>
