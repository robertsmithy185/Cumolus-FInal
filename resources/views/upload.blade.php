<html lang="en">
  @include ('head')
  <body>
    <div class="main-page">
      <div class="sidebar">
        <div class="iconImg5">
          <a class="logoCumolus" href="home">
            <img src="/Logo Cumolus/Culombus2.PNG" />
          </a>
        </div>
        <div class="line"></div>
        @include ('main-list')
        <div class="main-list">
          <a class="mainImage" href="Logout">
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
        <div class="upload-option-text">
          <p>Pick what you want to Upload</p>
        </div>
        <div class="Upload-option">
          <div class="option-image">
            <a href="/upload/image">Image</a>
          </div>
          <div class="option-prompt">
            <a href="upload/prompt">Prompt</a>
          </div>
          <div class="option-code">
            <a href="/upload/Code">Code</a>
          </div>
        </div>
      </div>
    </div>
    <div id="footer"></div>
    <script>
      const menu = document.getElementById("menu-label");
      const sidebar = document.getElementsByClassName("sidebar")[0];

      menu.addEventListener("click", function () {
        sidebar.classList.toggle("hide");
      });
    </script>
  </body>
</html>
