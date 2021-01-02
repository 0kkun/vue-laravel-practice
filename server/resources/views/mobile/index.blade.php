@extends('layouts.layout')

@section('content')

    <div class="container">
        @if (!empty($devise_judge))
            <div class="bg-dark text-center text-white h5">You access from {{ $devise_judge }} !</div>
        @endif

        <div class="row">
            <div class="col-sm-8">
                @if  (!empty($actions))
                @foreach ( $actions as $action )
                    <div class="m-3" style="display: flex;">
                        <button class="action-btn">{{ $action['content'] }}</button>
                        <action-count-component></action-count-component>
                    </div>
                @endforeach
                @endif
            </div>

            <div class="col-sm-4">
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">活動回数ランキング</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection