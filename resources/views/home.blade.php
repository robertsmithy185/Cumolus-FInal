<!DOCTYPE html>
<html lang="en">
  @include ('head')
  <body>
    <header class="headerHome">
      <a class="logo" href="home">
        <img src="/Logo Cumolus/Culombus2.PNG" />
      </a>
      <nav class="halamanAwal">
        <a href="#Home2">Promt</a>
        <a href="#Home3">Image</a>
        <a href="#Home4">Program Code</a>
        <a href="#Home5">Creator</a>
      </nav>
      @auth
      <div class="username-main">
        <a href="/profil/{username}">
          <img src="/item/Profil.svg" alt="">
          <span>
            Hi, {{ auth()->user()->username }}
          </span>
        </a>
      </div>
      <div class="main-home">
        <a href="/dashboard">
          <img src="/item/Home.svg" />
          <span class="maintext1"> Dashboard </span>
        </a>
      </div>
      @else
      <div class="register">
          <a href="Register">Register</a>
        </div>
        <div class="Login">
          <a href="login">Login</a>
      </div>
      @endauth
    </header>
    <section id="Home1" class="animated-section2">
      <div class="halaman1">
        <div class="text3">
          <p class="p1">Craft your Idea in One Platform</p>
          <p class="p2">
            Helping developers and creators build all the ideas that have the
            potential to be the next great thing
          </p>
          <div class="Started">
            <a href="Login.html" class="text4">Get Started </a>
            <a href="Login.html" class="material-symbols-outlined">
              arrow_forward
            </a>
          </div>
        </div>
        <div class="iconImg">
          <img src="/item/item1.PNG" alt="" />
        </div>
      </div>
    </section>
    <section id="Home2" class="animated-section">
      <div class="halaman2">
        <div class="iconImg2">
          <img src="/item/Prom.PNG" alt="" />
        </div>
        <div class="text5">
          <p class="p1">AI is Great but Need Promt to Run.</p>
          <p class="p2">Explore unique Promt</p>
        </div>
      </div>
    </section>
    <section id="Home3" class="animated-section3">
      <div class="halaman3">
        <div class="text6">
          <p class="p1">Everything can Start with Image</p>
          <p class="p2">
            Find the most inspirational Image that might be Help you grow the
            biggest idea that your Ever Think!
          </p>
        </div>
        <div class="iconImg3">
          <img src="/item/image.PNG" alt="" />
        </div>
      </div>
    </section>
    <section id="Home4" class="animated-section4">
      <div class="halaman4">
        <div class="iconImg4">
          <img src="/item/Code.PNG" alt="" />
        </div>
        <div class="text7">
          <p class="p1">Code? Sure we Have!.</p>
          <p class="p2">
            Of course the best way to help you build your project is to provide
            reference code that might (of course) be useful. do everything
            simply and of course easy to understand!
          </p>
        </div>
      </div>
    </section>

    <section id="Home5" class="animated-section5">
      <div class="Scrool-Galeri">
        <div class="text8">
          <p class="p1">Creator are Here!</p>
          <p class="p2">Find the Expert and Collaborate</p>
        </div>
        <span class="material-symbols-outlined" id="arrow_back">
          arrow_back
        </span>
        <div class="galeri">
          <div>
            <span>
              <img src="/Creator/Creator1.png" alt="" />
            </span>
            <span>
              <img src="/Creator/Creator2.png" alt="" />
            </span>
            <span>
              <img src="/Creator/Creator3.png" alt="" />
            </span>
          </div>
          <div>
            <span>
              <img src="/Creator/Creator4.png" alt="" />
            </span>
            <span>
              <img src="/Creator/Creator5.png" alt="" />
            </span>
            <span>
              <img src="/Creator/Creator6.png" alt="" />
            </span>
          </div>
        </div>
        <span class="material-symbols-outlined" id="arrow_forward">
          arrow_forward
        </span>
      </div>
    </section>
    @include('footer')
    <script>
      window.addEventListener("scroll", function () {
        document
          .querySelectorAll(
            ".animated-section2, .animated-section, .animated-section3, .animated-section4, .animated-section5"
          )
          .forEach((section) => {
            const sectionTop = section.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            if (sectionTop < windowHeight) {
              section.classList.add("active");
            } else {
              section.classList.remove("active");
            }
          });
      });

      let scrollContainer = document.querySelector(".galeri");
      let arrow_back = document.getElementById("arrow_back");
      let arrow_forward = document.getElementById("arrow_forward");

      scrollContainer.addEventListener("wheel", (evt) => {
        evt.preventDefault();
        scrollContainer.scrollLeft += evt.deltaY;
      });
      arrow_back.addEventListener("click", () => {
        scrollContainer.style.scrollBehavior = "smooth";
        scrollContainer.scrollLeft -= 900;
      });
      arrow_forward.addEventListener("click", () => {
        scrollContainer.style.scrollBehavior = "smooth";
        scrollContainer.scrollLeft += 900;
      });
    </script>
  </body>
</html>
