@extends('frontend.master')
<!-- main-slider -->
@section('home')

@include('frontend.home.slider')
<!-- //main-slider -->
<!-- //top-header and slider -->
<!-- top-brands -->
<div class="top-brands">
    <div class="container">
        <h2>Top selling offers</h2>
        <div class="grid_3 grid_5">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">Advertised offers</a></li>
                    <li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">Today Offers</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                   @include('frontend.home.new-offer')
                    @include('frontend.home.today-offer')
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //top-brands -->
@endsection