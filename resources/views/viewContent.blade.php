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
        <div class="view-image">
          <div class="content-image">
            <img src="/Image/Image-view.svg" alt="">
            <form action="">
              <div class="Download-konten" type="submit" name="buttonDeleted">
                <button>Download</button>
              </div>
            </form>
            <div class="name-content">
              <p>Meteor below Village
            </div>
            <div class="deskripsi-content">
              <p>he village houses stand silently, their windows adorned with warm, flickering lights. As you gaze up at the sky, you're greeted by a mesmerizing display of twinkling stars, painting the darkness with their brilliance. Every now and then, a shooting star streaks across the heavens, leaving a trail of wonder in its wake. It's a serene night, filled with the enchanting magic of the cosmos, where time seems to stand still, and the beauty of the universe captivates all who witness it.</p>
            </div>
            <div class="cretor-image">
              <p>Creator By
                <span>
                  <a href="">Robert Smith Y</a>
                </span></p>
            </div>
            <div class="comment-form">
              <form action="">
                <div class="input-comment">
                  <textarea
                    type="text"
                    name="Deskripsi"
                    id="Deskripsi"
                    class="input-Deskripsi"
                    placeholder="Leave your thougt"></textarea>
                </div>
                <div class="buttonComment" type="submit" name="buttonComment">
                  <button>Submit</button>
                </div>
              </form>
            </div>
            <div class="comment-image">
              <p>Comment</p>
            </div>
            <div class="comment-user">
              <div class="image-user">
                <p>By <span>
                  <a href="">Michael Y</a>
                </span></p>
              </div>
              <div class="comment">
                <p>You guys can use it as windows background or any artwork design</p>
              </div>
            </div>
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

