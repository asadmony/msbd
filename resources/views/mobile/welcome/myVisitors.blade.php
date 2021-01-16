@extends('mobile.layout.base')
@section('body')
    <div class="container pt-2">
        @if ($visitors != null)
    @foreach ($visitors as $user)
    <div class="item">
        <a href="{{url('/', $user->username)}}" class="product-sm">
            <div class="img-wrap"> <img src="{{ asset($user->latestCheckedPP()) }}" alt="{{ $user->username }}"> </div>
            <div class="text-wrap">
                <p class="title text-truncate w3-small">
          {{str_limit($user->name, 16,'..')}}<i class="fa fa-circle {{ $user->isOnline() ? 'w3-text-green' : 'w3-text-light-gray' }} w3-small"></i>
        </p>
                <p class="title text-truncate w3-small"> {{str_limit($user->religion, 20)}},</p>
                <p class="title text-truncate w3-small">{{str_limit($user->gender, 20)}}, {{str_limit($user->height, 20)}}</p>
                <p class="title text-truncate w3-small">{{str_limit($user->marital_status, 20)}}</p>
                <a href="#" class="btn btn-sm btn-light">  <i class="far fa-thumbs-up w3-text-red"></i> </a>
                <a href="#" class="btn btn-sm btn-light">  <i class="fas fa-phone"></i> </a>
                <a href="#" class="btn btn-sm btn-light">  <i class="fas fa-envelope"></i> </a>
                <a href="#" class="btn btn-sm btn-light">  <i class="far fa-id-card"></i> </a>
            </div>
        </a>
    </div>
    @endforeach
    @endif
    @for ($i= 0;$i<10;$i++)
            <section class="scroll-horizontal padding-x">
    <div class="item" style="width: 100%;">
        <a href="" class="product-sm">
            <div class="img-wrap"> <img src="asset($user->latestCheckedPP())" alt="user->username"> </div>
            <div class="row justify-content-center">
                <div class="text-wrap">
                    <p class="title text-truncate w3-small">
              user->name<i class="fa fa-circle  w3-small"></i>
            </p>
                    <p class="title text-truncate w3-small"> ,</p>
                    <p class="title text-truncate w3-small">gender user->height</p>
                    <p class="title text-truncate w3-small">marital_status</p>
                    <a href="#" class="btn btn-sm btn-light">  <i class="far fa-thumbs-up w3-text-red"></i> </a>
                    <a href="#" class="btn btn-sm btn-light">  <i class="fas fa-phone"></i> </a>
                    <a href="#" class="btn btn-sm btn-light">  <i class="fas fa-envelope"></i> </a>
                    <a href="#" class="btn btn-sm btn-light">  <i class="far fa-id-card"></i> </a>
                </div>
            </div>
        </a>
    </div>
    </section>
    @endfor

    </div>
@endsection