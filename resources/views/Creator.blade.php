<html lang="en">
@include ('head')
  <body>
    <div class="main-page">
      <div class="sidebar hide">
        <div class="iconImg5">
          <a class="logoCumolus" href="/home">
            <img src="/Logo Cumolus/Culombus2.PNG" />
          </a>
        </div>
        <div class="line"></div>
        <div class="main-list">
          <a class="mainImage" href="/dashboard">
            <img src="/item/Home.svg" />
            <span class="maintext1"> Home </span>
          </a>
        </div>
        <div class="main-list">
          <a class="mainImage" href="/dashboard/image">
            <img src="/item/mainImg.svg" />
            <span class="maintext1">Image</span>
          </a>
        </div>
        <div class="main-list">
          <a class="mainImage" href="/dashboard/prompt">
            <img src="/item/MainPrompt.svg" />
            <span class="maintext1">Prompt</span>
          </a>
        </div>
        <div class="main-list">
          <a class="mainImage" href="/dashboard/Code">
            <img src="/item/MainCode.svg" />
            <span class="maintext1"> Code </span>
          </a>
        </div>
        <div class="main-list-home">
          <a class="mainImage" href="/dashboard/Creator">
            <img src="/item/MainCreator.svg" />
            <span class="maintext1"> Creator</span>
          </a>
        </div>
        <div class="main-list">
          <a class="mainImage" href="/Logout">
            <img src="/item/Logout.PNG" />
            <span class="maintext1">Logout</span>
          </a>
        </div>
      </div>
      <div class="main-bar">
        <div class="main-menu">
          <div id="menu-button">
            <input type="checkbox" id="menu-checkbox" />
            <label for="menu-checkbox" id="menu-label">
              <div id="hamburger"></div>
            </label>
          </div>
        </div>
        @include ("main-search")
        <div class="Code">
          <div class="row">
          @foreach ($users as $user)
            @if ($user->role !== 'admin')
            <span class="image-container">
              <a href="{{ route('main.show_profile', ['username' => $user->username]) }}">
                <img src="/item/account.png" alt="{{ $user->username }}" />
                <span class="text-span">
                  <p>{{ $user->username }}</p>
                </span>
              </a>
            </span>
            @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
    @include('footer')
    <script>
      const menu = document.getElementById("menu-label");
      const sidebar = document.getElementsByClassName("sidebar")[0];

      menu.addEventListener("click", function () {
        sidebar.classList.toggle("hide");
      });
    </script>
  </body>
</html>

