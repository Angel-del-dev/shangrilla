<script src="{{asset('js/sessionNavbar.js')}}" type="module" defer></script>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/" id="logo" style="background-image: url({{asset('img/logo/logo_parcial.jpg')}});"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <li class="navbar-nav ms-auto mb-2 mb-lg-0 profile-menu">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navCollapse">
                    @if (!isset(Auth::user()->id))
                        <input type="hidden" id="check" value="not-logged-in" />
                    @else
                        <input type="hidden" id="userInfo" value="{{Auth::user()->route}}">
                        <input type="hidden" id="check" value="logged-in" />
                        <li class="navbar-nav ms-auto mb-2 mb-lg-0 profile-menu">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Profile
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" id="list">
                                        <li><button type="button" data-bs-toggle="modal" data-bs-target="#newStory" data-target="#exampleModalCenter" class="dropdown-item" id="create"><i class="fas fa-plus"></i></button></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
        </div>
    </div>
</nav>
