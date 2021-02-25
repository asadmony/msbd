<div class="">
    <style>
        .gallery-image{
            border-radius:  20px 0px 0px 20px ;
        }
        .gallery-text{
            border-radius: 0px 20px 20px 0px;
            /* margin-top: 15%; */
            position: relative;
        }
        .gallery-width{
            width: 50%;
        }
        @media screen and (max-width: 600px){
            .gallery-image{
                border-radius:  15px 15px 15px 15px ;
            }
            .gallery-text{
                border-radius: 15px 15px 15px 15px;
                margin: 0;
            }
            .gallery-width{
                width: 100%;
            }
        }
    </style>
    @foreach ($galleries as $gallery)
    {{-- <div class="w3-cell-row">
        <div class="w3-col- w3-cell w3-cell-top gallery-width w3-mobile">
            <img class="w3-card w-100 w3-round-xlarge -gallery-image" src="{{ $gallery->items[0]->img_url }}" alt="">
        </div>
        <div class="w3-col- w3-cell w3-cell-middle gallery-width w3-mobile">
            <div class="text-center w3-white w3-card ml-0 pl-0 gallery-text">
                <div class="w3-tag w3-purple w3-round-xlarge py-2 mb-2 mt-n5 w3-card">{{ $gallery->title }}</div>
                <div class="w3-container">
                    <p>
                        {{ Str::limit($gallery->description, 300, '...') }}
                    </p>
                </div>
            </div>
        </div>
    </div> --}}
    
    <div class="w3-animate-zoom text-center">
        <img class="w3-card" style="max-width:100%; max-height:500px; border-radius: 5% 5% 0 0;" src="{{ $gallery->items[0]->img_url }}" style="width: 100%;">
    </div>
    <div class="text-center">
        <div class="text-center w3-large p-2 w3-text-black" style="background: url(https://marriagesolutionbd.com/img/bg-ribon.jpg) repeat;min-height: 20px;width: 100%;font-weight:bold ">Marriage Solution BD: The Largest Matrimony Organization in Bangladesh</div>
    </div>
    <div class="w3-animate-bottom" style="background: #0b0b0b url(/img/back2.png) no-repeat center top; background-size: 100%;"> 
        <div class="prod-ops text-center py-5" style="background: url(/img/bg-boxleft.png) no-repeat left top, url(/img/bg-boxright.png) no-repeat  right top, url(/img/bg-boxbottomleft.png) no-repeat  left bottom, url(/img/bg-boxbottomright.png) no-repeat  right bottom;">
            <h4 class="m-0 px-3" style="color: gold; font-family: 'Lobster Two', cursive; font-style: italic;">
                {{ $gallery->title }}
            </h4>
            <div style="width:100%; height: 30px; background: url(/img/leaf.png) no-repeat center bottom;">
            </div> 
            <div class="total-single-service-area"> 
                <div class="single-services-area">  
                    <div class="service-icon w3-text-white w3-text-medium container text-center text-justify px-md-4">{{ $gallery->description }} 
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="text-center pt-5">
        {{ $galleries->render() }}
    </div>
</div>
