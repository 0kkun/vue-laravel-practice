<div class="container border-bottom p-3">
    <div class="row">

        <div class="col-sm-6">
            <a href="/" class="text-left h3">Vue Laravel Practice</a>
        </div>

        <div class="col-sm-6">
            @if(Auth::check())
                <p class="text-right h4">{{ Auth::user()->name }}でログイン中</p>
                <div class="text-right h4">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>


            @else
                <div class="text-right h5">
                    <div><a href="{{ route('login') }}">Login</a></div>
                    <div class="pt-1"><a href="{{ route('register') }}">Register</a></div>
                </div>
            @endif
        </div>

    </div>
</div>
