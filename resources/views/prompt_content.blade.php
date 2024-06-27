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
        <div class="view-image">
          <div class="content-image">
            <div class="prompt-conten">
              <p>{{ $prompt->prompt }}</p>
            </div>
            <div class="action-conten">
            @if(auth()->user()->username === $prompt->username || auth()->user()->username === 'admin')
              <form action="{{ route('prompt.delete', ['prompt_id' => $prompt->prompt_id, 'username' => $prompt->username]) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="deleted-konten" type="submit" name="buttonDeleted">
                  <button>Delete</button>
                </div>
              </form>
              @if(auth()->user()->username === $prompt->username)
                <form action="{{ route('prompt.edit', ['prompt_id' => $prompt->prompt_id]) }}" method="GET">
                  <div class="edit-konten">
                    <button type="submit" name="buttonedit">Edit</button>
                  </div>
                </form>
                @endif
              @else
                  <div class="Copy-konten">
                      <button onclick="copyTextToClipboard('{{$prompt->prompt}}')">Copy</button>
                  </div>
              @endif
            </div>
            <div class="name-content">
              <p>{{ $prompt->name }}</p>
            </div>
            <div class="deskripsi-content">
              <p>{{ $prompt->Deskripsi }}</p>
            </div>
            <div class="deskripsi-content">
              <p>Create on {{ \Carbon\Carbon::parse($prompt->update_at)->setTimezone('Asia/Singapore')->format('d M Y, H:i') }}</p>
            </div>
            <div class="cretor-image">
              <p>Creator By
                <span>
                  <a href="{{ route('main.show_profile', ['username' => $prompt->username]) }}">{{$prompt->username}}</a>
                </span></p>
            </div>
            <div class="comment-form">
              <form action="{{ route('commentsPrompt.store', ['prompt_id' => $prompt->prompt_id]) }}" method="POST">
                  @csrf
                  <div class="input-comment">
                      <textarea
                          type="text"
                          name="comment"
                          id="comment"
                          class="input-Deskripsi"
                          placeholder="Leave your thought"></textarea>
                  </div>
                  <div class="buttonComment">
                      <button type="submit" name="buttonComment">Submit</button>
                  </div>
              </form>
            </div>
            <div class="comment-image">
              <p>Comment</p>
            </div>
            @foreach($prompt->comments as $comment)
                <div class="comment-user">
                    <div class="image-user">
                        <p>By <span><a href="{{ route('main.show_profile', ['username' => $comment->user->username]) }}">{{ $comment->user->username }}</a></span> on {{ \Carbon\Carbon::parse($comment->created_at)->setTimezone('Asia/Singapore')->format('d M Y, H:i') }}</p>
                    </div>
                    <div class="comment">
                        <p>{{ $comment->comment }}</p>
                    </div>
                </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    @include('footer')
    <script>
      function copyTextToClipboard(text) {
        var textArea = document.createElement("textarea");
        textArea.value = text;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand('copy');
        document.body.removeChild(textArea);
        alert('Copied to clipboard!');
      }


      const menu = document.getElementById("menu-label");
      const sidebar = document.getElementsByClassName("sidebar")[0];

      menu.addEventListener("click", function () {
        sidebar.classList.toggle("hide");
      });
    </script>
  </body>
</html>
