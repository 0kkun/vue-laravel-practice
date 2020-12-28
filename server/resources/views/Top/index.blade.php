@extends('layouts.layout')

@section('content')

    <div class="container">

        <div class="bg-dark text-center text-white h5">You access from {{ $devise_judge }} !</div>

        <div class="row">
            <div class="col-sm-8">
                <div class="m-3" style="display: flex;">
                    <button class="action-btn">空調を適度にOFFにする</button>
                    <action-count-component></action-count-component>
                </div>

                <div class="m-3" style="display: flex">
                    <button class="action-btn">換気をする</button>
                    <action-count-component></action-count-component>
                </div>

                <div class="m-3" style="display: flex">
                    <button class="action-btn">湿度を一定に保つ</button>
                    <action-count-component></action-count-component>
                </div>
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