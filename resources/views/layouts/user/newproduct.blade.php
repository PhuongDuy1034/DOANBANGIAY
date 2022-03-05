@extends('layouts.app')
@section('title') New Product @endsection
@section('content')
 <!-- new collection section start -->
 <div class="layout_padding collection_section">
    <div class="container">
        <h1 class="new_text"><strong>New  Collection</strong></h1>
        <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        <div class="collection_section_2">
            <div class="row">
            @foreach ($data as $item )
                <div class="col-md-6">
                    <div class="about-img2">
                        <div class="shoes-img2"><img style="max-width: 350px; height: 245px;" src= "/assets/user/img/product/{{$item->image }}"></div>
                        <p class="sport_text">{{ $item->name }}</p>
                        <div class="dolar_text">{{ $item->price }}<strong style="color: #f12a47;">VND</strong> </div>
                        <div class="star_icon">
                            <ul>
                                <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{ asset('frontend/images/star-icon.png')}}"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        </div>
    </div>
</div>
@endsection