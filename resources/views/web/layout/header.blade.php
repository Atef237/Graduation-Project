<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light  bg-white  shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('webAssets/images/logo.png')}}" alt="Logo"  class="logo_img"/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{auth()->check() ? route('logout') : '' }}">{{auth()->check() ? 'تسجيل الخروج' : ''}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{auth()->check() ? route('profile') : route('showLoginForm')}}">{{auth()->check() ? auth()->user()->name : ''}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home')}}">الصفحة الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sr1">الخدمات الالكترونية</a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>


</header>
