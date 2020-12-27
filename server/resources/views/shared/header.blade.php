<div class="container border-bottom p-3">
    <div class="row">

        <div class="col-sm-6">
            <p class="text-left h3">Vue Laravel Practice</p>
        </div>

        <div class="col-sm-6">
            @if(Auth::check())
                <p class="text-right h4">ログインしてます</p>
            @else
                <div class="text-right h5">
                    <div><a href="{{ route('login') }}">Login</a></div>
                    <div class="pt-1"><a href="{{ route('register') }}">Register</a></div>
                </div>
            @endif
        </div>

    </div>
</div>
