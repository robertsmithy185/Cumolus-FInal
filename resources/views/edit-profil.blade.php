<html lang="en">
@include ('head')
  <body>
    <div class="main-page">
      <div class="sidebar">
        <div class="iconImg5">
          <a class="logoCumolus" href="/home">
            <img src="/Logo Cumolus/Culombus2.PNG" />
          </a>
        </div>
        <div class="line"></div>
        @include ('main-list')
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
        <div class="Upload">
          <form id="uploadImage" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="inputCode">
              <div class="imgUpload">
                <img src="/item/upload.svg" alt="">
              </div>
              <input
                type="file"
                name="foto"
                id="foto"
                class="upload-foto"
                accept=".jpg, .jpeg, .png"
              />
              <div class="textUpload">
                <p>Click to change profile</p>
              </div>
            </div>
            <div class="input-text">
              <div class="inputName">
                <input
                  type="text"
                  name="name"
                  id="name"
                  class="input-name"
                  placeholder="Name"
                  value="{{ old('name', $user->name ?? '') }}"
                />
              </div>
              <div class="inputDeskripsi">
                <textarea
                name="deskripsi"
                id="deskripsi"
                class="input-Deskripsi"
                placeholder="Deskripsi">{{ old('deskripsi', $user->deskripsi ?? '') }}</textarea>
              </div>
              <div class="buttonupload-code" type="submit" name="buttonupload-code">
                <button>Change Profile</button>
              </div>
            </div>
          </form>
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
