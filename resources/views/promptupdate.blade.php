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
            <form id="updatePrompt" action="{{ route('prompt.update', ['prompt_id' => $prompt->prompt_id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="input-text-prompt">
                        <div class="inputType-prompt">
                            <textarea
                                type="text"
                                name="prompt"
                                id="prompt"
                                class="input-prompt @error('prompt') is-invalid @enderror"
                                placeholder="Type your prompt">{{ old('prompt', $prompt->prompt) }}</textarea>
                        </div>
                        @error('prompt')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="inputName-prompt">
                            <input
                                type="text"
                                name="name"
                                id="name"
                                class="input-name @error('name') is-invalid @enderror"
                                placeholder="Name"
                                value="{{ old('name', $prompt->name) }}"
                            />
                        </div>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="inputDeskripsi-prompt">
                            <textarea
                                type="text"
                                name="Deskripsi"
                                id="Deskripsi"
                                class="input-Deskripsi @error('Deskripsi') is-invalid @enderror"
                                placeholder="Deskripsi">{{ old('Deskripsi', $prompt->Deskripsi) }}</textarea>
                        </div>
                        @error('Deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="buttonupload-prompt">
                            <button type="submit" name="buttonupload-prompt">Update Your Idea</button>
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
