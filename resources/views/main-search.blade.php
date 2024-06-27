<section class="main-header">
  <div class="popular">
    <a href="{{ route('view_populer') }}">Popular</a>
  </div>
  <div class="newest">
    <a href="{{ route('view_newest') }}">Newest</a>
  </div>
  <form action="{{ route('search') }}" method="GET">
    <div class="inputsearch">
        <input
            type="text"
            name="search"
            id="search"
            class="input-search"
            placeholder="Find Your Idea..."
            value="{{ request('search') }}"
        />
    </div>
    <div class="buttonSearch">
        <button type="submit" name="buttonSearch">
            <img src="/item/search.svg" alt="" />
        </button>
    </div>
  </form>
  <div class="main-upload">
    <a href="/upload">
      <img src="/item/upload.svg" alt="" />
      <span>Upload</span>
    </a>
  </div>
  @auth
  <div class="username-main">
    <a href="{{ route('main.show_profile', ['username' => auth()->user()->username]) }}">
        <img src="/item/Profil.svg" alt="">
        <span>
          Hi, {{ auth()->user()->username }}
        </span>
    </a>
  </div>

  @endauth
</section>
