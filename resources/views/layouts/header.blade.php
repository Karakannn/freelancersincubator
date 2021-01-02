        <header id="header" class="header header-floating">
            <div class="header-nav navbar-sticky navbar-sticky-animated">
                <div class="header-nav-wrapper">
                    <div class="container">
                        <nav id="menuzord-right" class="menuzord default no-bg">
                            <a class="menuzord-brand switchable-logo pull-left flip mb-15" href="{{ url('/') }}">
                                <img class="logo-default" src="{{ asset('uploads/' . $info[0]->image) }}" alt="">
                                <img class="logo-scrolled-to-fixed" src="{{ asset('uploads/' . $info[0]->image) }}" alt="">
                            </a>
                            <ul class="menuzord-menu sm-padding">
                                <li @if(Route::currentRouteName() === '/') class="active" @endif><a href="{{ url('/') }}">@lang('global.menu.home')</a></li>
                                <li @if(Route::currentRouteName() === 'webinar') class="active" @endif><a href="{{ route('webinar') }}">@lang('global.menu.webinars')</a></li>
                                <li @if(Route::currentRouteName() === 'blogs') class="active" @endif><a href="{{ route('blogs') }}">@lang('global.menu.blog')</a></li>
                               {{-- <li @if(Route::currentRouteName() === 'video_courses') class="active" @endif><a href="{{ route('video_courses') }}">@lang('global.menu.video_courses')</a></li> --}}
                                <li @if(Route::currentRouteName() === 'about') class="active" @endif><a href="{{ route('about') }}">@lang('global.menu.about')</a>
                                    <ul class="dropdown">
                                        <li @if(Route::currentRouteName() === 'contact') class="active" @endif><a href="{{ route('contact') }}">@lang('global.menu.contact')</a></li>
                                    </ul>
                                </li>
                                <li @if(Route::currentRouteName() === 'lecturer') class="active" @endif><a href="{{ route('lecturer') }}">@lang('global.menu.lecturer')</a></li>
                                <li @if(Route::currentRouteName() === 'auth.login') class="active" @endif>
                                    @if (Auth::check())
                                    <a href="{{ route('account') }}"> @lang('global.menu.my_profile')</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('edit.index') }}">Edit Profile</a></li>
                                        <li><a href="#logout" onclick="$('#logout').submit();">Logout</a></li>
                                    </ul>
                                    @else
                                    <a href="{{ route('auth.login') }}"> @lang('global.menu.my_profile')</a>
                                    @endif
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
