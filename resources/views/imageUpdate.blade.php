<html lang="en">
@include('head')
<body>
    <div class="main-page">
        <div class="sidebar">
            <div class="iconImg5">
                <a class="logoCumolus" href="/home">
                    <img src="/Logo Cumolus/Culombus2.PNG" />
                </a>
            </div>
            <div class="line"></div>
            @include('main-list')
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
            @include("main-search")
            <div class="Upload">
                <form id="updateImage" action="{{ route('image.update', ['image_id' => $image->image_id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="inputImage">
                        <div class="imgUpload">
                            <img src="{{ asset('storage/' . $image->image) }}" alt="{{ $image->name }}">
                        </div>
                        <input
                            type="file"
                            name="image"
                            id="image"
                            class="upload-Image @error('image') is-invalid @enderror"
                            accept=".jpg, .jpeg, .png"
                        />
                        <div class="textUpload">
                            <p>Image should not be more than 200 Mb</p>
                        </div>
                        @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-text">
                        <div class="inputName">
                            <input
                                type="text"
                                name="name"
                                id="name"
                                class="input-name @error('name') is-invalid @enderror"
                                placeholder="Name"
                                value="{{ old('name', $image->name) }}"
                            />
                        </div>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="inputDeskripsi">
                            <textarea
                                name="Deskripsi"
                                id="Deskripsi"
                                class="input-Deskripsi @error('Deskripsi') is-invalid @enderror"
                                placeholder="Deskripsi">{{ old('Deskripsi', $image->Deskripsi) }}</textarea>
                        </div>
                        @error('Deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="buttonupload-image">
                            <button type="submit" name="buttonupload-image">Update Your Idea</button>
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
