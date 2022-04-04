<script async src="https://cse.google.com/cse.js?cx=009746258167270950796:50nrznan6xq"></script>

<div class="placeholder"></div>

<div class="gcse-search"></div>

<div class="container-fluid vue-navbar">
    <div class="container">
        <div class="row justify-content-between p-15">
            <a class="logo-box" href="/">
                <img src="{{ url('/img/logo.svg') }}" alt="" class="logo">
            </a>

            <div class="d-none d-lg-flex nav-list">
                @include("inc/links", ["class" => "nav-item"])
            </div>

            <div class="d-none d-lg-flex justify-content-center align-items-center search-container">
                <input type="text" placeholder="Введите запрос" name="search" class="search-field">

                <svg class="nav-search search-button"
                     width="16" height="16" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                        <path
                            d="M7.04606 0C3.16097 0 0 3.16097 0 7.04606C0 10.9314 3.16097 14.0921 7.04606 14.0921C10.9314 14.0921 14.0921 10.9314 14.0921 7.04606C14.0921 3.16097 10.9314 0 7.04606 0ZM7.04606 12.7913C3.87816 12.7913 1.30081 10.214 1.30081 7.04609C1.30081 3.87819 3.87816 1.30081 7.04606 1.30081C10.214 1.30081 12.7913 3.87816 12.7913 7.04606C12.7913 10.214 10.214 12.7913 7.04606 12.7913Z"
                            fill="#ffffff"/>
                        <path
                            d="M16.476 15.5558L12.747 11.8268C12.4929 11.5727 12.0814 11.5727 11.8273 11.8268C11.5732 12.0807 11.5732 12.4926 11.8273 12.7465L15.5563 16.4755C15.6833 16.6025 15.8496 16.6661 16.0161 16.6661C16.1824 16.6661 16.3489 16.6025 16.476 16.4755C16.7301 16.2216 16.7301 15.8097 16.476 15.5558Z"
                            fill="#ffffff"/>
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="16" height="16" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </div>

            <div class="burger-menu d-flex d-lg-none">
                <div class="menu-icon-wrapper" onclick="menuIconSwitch()">
                    <div class="menu-icon"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="nav-list-drop">
    <div class="nav-list-drop-box">

        @include("inc/links", ["class" => "nav-item"])

        <br/><br/><br/>

        <div style="width: 60vw; display: flex; justify-content: center;">
            <div class="d-flex justify-content-center align-items-center search-container">
                <input type="text" placeholder="Введите запрос" name="search" class="search-field">

                <svg class="nav-search search-button"
                     width="16" height="16" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                        <path
                            d="M7.04606 0C3.16097 0 0 3.16097 0 7.04606C0 10.9314 3.16097 14.0921 7.04606 14.0921C10.9314 14.0921 14.0921 10.9314 14.0921 7.04606C14.0921 3.16097 10.9314 0 7.04606 0ZM7.04606 12.7913C3.87816 12.7913 1.30081 10.214 1.30081 7.04609C1.30081 3.87819 3.87816 1.30081 7.04606 1.30081C10.214 1.30081 12.7913 3.87816 12.7913 7.04606C12.7913 10.214 10.214 12.7913 7.04606 12.7913Z"
                            fill="#ffffff"/>
                        <path
                            d="M16.476 15.5558L12.747 11.8268C12.4929 11.5727 12.0814 11.5727 11.8273 11.8268C11.5732 12.0807 11.5732 12.4926 11.8273 12.7465L15.5563 16.4755C15.6833 16.6025 15.8496 16.6661 16.0161 16.6661C16.1824 16.6661 16.3489 16.6025 16.476 16.4755C16.7301 16.2216 16.7301 15.8097 16.476 15.5558Z"
                            fill="#ffffff"/>
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="16" height="16" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </div>
    </div>
</div>


@push("scripts")
    <script>
        function menuIconSwitch() {
            document.querySelector('.menu-icon').classList.toggle('menu-icon-active');
            document.querySelector('.nav-list-drop').classList.toggle('visible');
        }


        $(document).ready(() => {
            $(".search-button").click(search);

            // $(".search-field").keydown(() => {
            //     console.log($(this));
            //
            // });

            $(".search-field").on("change paste keyup", function(e) {
                if (e.keyCode == 13)
                    search(e);

                $(".search-field").val($(this).val());
            });

            let isSearchStarted = false;

            function search(e) {
                e.preventDefault();

                $(".search-field")[0].focus();

                if (!isSearchStarted) {
                    $(".search-container").addClass("opened");

                    isSearchStarted = true;
                } else {
                    $(".gsc-input[name='search']").val($(".search-field").val());
                    $(".gsc-search-button-v2").click();

                    $(".search-container").removeClass("opened");
                    isSearchStarted = false;
                }
            }

        });
    </script>
@endpush
