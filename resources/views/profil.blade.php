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
          <div class="main-konten">
            <div class="image-profil">
                <div class="row-profil">

                <!-- Image View Profil -->
                @foreach ($images as $image)
                  @if($image->image)
                    <span class="image-container">
                    <a href="{{ route('image.view_content', ['name' => $image->name, 'image_id' => $image->image_id]) }}">
                            <img src="{{ asset('storage/' . $image->image) }}" alt="{{ $image->name }}" />
                            <span class="text-span">
                                <p>{{ $image->name }}</p>
                            </span>
                        </a>
                    </span>
                  @endif
                @endforeach
                @foreach ($prompts as $prompt)
                    <span class="image-container">
                        <a href="{{ route('prompt.view_content', ['name' => $prompt->name, 'prompt_id' => $prompt->prompt_id]) }}">
                            <img src="/Prompt/Prompt.png" alt="{{ $prompt->name }}" />
                            <span class="text-span">
                                <p>{{ $prompt->name }}</p>
                            </span>
                        </a>
                    </span>
                @endforeach
                @foreach ($codes as $code)
                    <span class="image-container">
                        <a href="{{ route('code.view_content', ['name' => $code->name, 'code_id' => $code->code_id]) }}">
                            <img src="/Code/Code.png" alt="{{ $code->name }}" />
                            <span class="text-span">
                                <p>{{ $code->name }}</p>
                            </span>
                        </a>
                    </span>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    @include('footer')
    <script>
      document.addEventListener('DOMContentLoaded', function() {
          const uploadLink = document.getElementById('uploadLink');
          const saveLink = document.getElementById('saveLink');

          uploadLink.classList.add('active');
      });


      const menu = document.getElementById("menu-label");
      const sidebar = document.getElementsByClassName("sidebar")[0];

      menu.addEventListener("click", function () {
        sidebar.classList.toggle("hide");
      });
    </script>
  </body>
</html>

