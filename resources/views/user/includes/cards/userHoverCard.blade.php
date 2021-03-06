<div class="card-container mb-0" style="margin-top: -30px;height: 220px;">
                <div class="card" style="padding: 0px 10px 0px;">
                    <div class="front" style="height: 220px;">
                        <div class="cover" style="height: 60px;">
                            <img src="{{ asset('img/cpf2.jpg') }}"/>



                        </div>


                        <div class="user">
                            <img class="img-circle" src="{{ asset($user->latestCheckedPP()) }}" alt="{{ $user->username }}" />
                        </div>

                        <a style="margin-top: -86px;margin-right: 6px;" href="" class="btn btn-round btn-fab w3-right {{$user->isMale() ? 'btn-info' : 'btn-rose'}}">{{ $user->age() }}</a>

                        <div class="" style="min-height: 50px;padding: 0px 10px 0px;line-height: 1.2;"> 
                            <div class="" style="min-height: 50px;">
                                <span class="w3-small m-0">{{Str::limit($user->name, 16,'..')}}


                                    <i class="fa fa-circle {{ $user->isOnline() ? 'w3-text-green' : 'w3-text-light-gray' }} w3-small"></i>

                                </span> <br>
                                <span class="w3-small mb-0 w3-text-gray">
                                    
                                    {{Str::limit($user->profession, 15)}}
                                    

                                </span> <br>

                                

                                <span class="w3-tiny p-0 m-0 w3-text-gray">
                                    
                                    {{Str::limit($user->education_level, 18)}}
                                    

                                </span> <br>

                                <span class="w3-small p-0 m-0 text-muted">
                                    
                                    {{Str::limit($user->gender, 20)}}, {{Str::limit($user->height, 20)}}
                                    

                                </span> <br>

                                <span class="w3-tiny p-0 m-0 text-muted">
                                    
                                    {{Str::limit($user->religion, 20)}},
                                    {{Str::limit($user->marital_status, 20)}}
                                    

                                </span> <br>

                                <span class="w3-tiny p-0 m-0 text-muted">
                                    
                                    {{Str::limit($user->location, 20)}}
                                    

                                </span>

                                {{-- 
                                <p class="text-center">

                                   <b>{{$user->location}} {{$user->country}}</b> <br>

                                    {{$user->about ? str_limit($user->about->about_me, '50', '..') : ''}}</p> --}}
                            </div>

                        </div>
                    </div> <!-- end front panel -->


                    <div class="back" style="height: 220px;">
                        <div class="headers w3-padding">
                            {{-- <h5 class="motto"></h5> --}}

            
                                

                <div class="text-center">
                    <a class="w3-btn w3-small w3-round w3-border w3-border-purple p-1" href="{{url('/', $user->username)}}"><i class="fa fa-user fa-fw"></i> {{ __('See Details') }}</a>
                    @auth
                    
                    {{-- @include('user.includes.others.btnRightArea') --}}

                    @endauth
                    
                </div>

                            
                        </div>

                        

                        {{-- <div class="footer">
                            <div class="social-links text-center">
                                <a href="" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                <a href="" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                <a href=""><i class="fa fa-twitter fa-fw"></i></a>

                                <a href="{{route('welcome.username', $user->username)}}"><i class="fa fa-user fa-fw"></i> See Details</a>
                            </div>
                        </div> --}}
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container --> 