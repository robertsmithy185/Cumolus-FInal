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
        <div class="main-profil">
            <div class="profil-user">
                  <div class="image-user">
                    <img src="{{ $username !== Auth::user()->username ? ($user->foto ? asset('storage/' . $user->foto) : '/Creator/Creator5.png') : (Auth::user()->foto ? asset('storage/' . Auth::user()->foto) : '/Creator/Creator5.png') }}" alt="Profile Picture">
                  </div>
                  <div class="name-user">
                  <p class="name">
                      @if($username !== Auth::user()->username)
                          {{ $username }}
                      @elseif($user->name)
                          {{ $user->name }}
                      @elseif($username === Auth::user()->username)
                          {{ $username }}
                      @endif
                  </p>
                  <p class="deskripsi">
                      @if($username !== Auth::user()->username)
                          {{ $user->deskripsi ?: 'Deskripsi kosong' }}
                      @else
                          {{ Auth::user()->deskripsi ?: 'Deskripsi kosong' }}
                      @endif
                  </p>

                  </div>
                  @if ($username === Auth::user()->username)
                  <div class="icon-edit">
                    <div class="img-edit-profil">
                      <a href="/edit-profil">
                        <img src="/Item/edit.SVG" alt="">
                        <span>Edit</span>
                      </a>
                    </div>
                  </div>
                  @endif
                </div>
              </div>
            <div class="opsi-profil">
              <div class="opsi-upload">
                  <a href="{{ route('main.show_profile', ['username' => auth()->user()->username]) }}" id="uploadLink">Upload</a>
              </div>
              <div class="opsi-save">
                  <a href="{{ route('main.show_profile_save', ['username' => auth()->user()->username]) }}" id="saveLink">Save</a>
              </div>
          </div>
          <div class="text-save">
              <p>Coming Soon</p>
          </div>
      </div>
    </div>
    @include('footer')
    <script>
      document.addEventListener('DOMContentLoaded', function() {
          const uploadLink = document.getElementById('uploadLink');
          const saveLink = document.getElementById('saveLink');
          saveLink.classList.add('active');
      });
      const menu = document.getElementById("menu-label");
      const sidebar = document.getElementsByClassName("sidebar")[0];
      menu.addEventListener("click", function () {
        sidebar.classList.toggle("hide");
      });
    </script>
  </body>
</html>