<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@if(app()->getLocale() == 'ar')
        
 
				           {{$Settings->where('key','site_name')->first()->value}}
				            @else
				             {{$Settings->where('key','site_name_en')->first()->value}}
				              
				                   @endif</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/menuCss/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/menuCss/all.min.css')}}"/>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet"/>

    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/css/bootstrap-switch-button.min.css"
          rel="stylesheet">
    <script
        src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/dist/bootstrap-switch-button.min.js"></script>

    <style>
        @if( app()->getLocale() == 'ar')
        body {
            direction: rtl;
        }

        @endif

        body {
            overflow-x: hidden;
        }

        #blackout span {
            display: block;
            color: #000;
            padding: 5px;
        }

        #blackout .close {
            position: absolute;
            top: 0px;
            left: 30px;
        }

        #blackout #box {
            overflow-y: auto;
        }
    </style>
</head>
<body>

<div class="container logo">

    <div class="row">
        <div class="col-8"><img src="{{asset('images/logo.png')}}" alt="" style="width: 168px;height: 49px;"></div>
        <div class="col-2">  
        <a href="{{route('ContactUs')}}">
        <button type="button" class="btn btn-success"> @lang('site.contactus') </button></a></div> 
        <div class="col-2">
            <input type="checkbox" id="switchLangId" data-toggle="switchbutton"
                   @if(app('request')->input('lang') != 'ar')checked @endif data-onlabel="EN" data-offlabel="ع"
                   data-onstyle="light" data-offstyle="danger" onchange="switchLang()">
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="scrolling-wrapper row flex-row flex-nowrap mt-4 pb-4 pt-2 nav nav-tabs" id="nav-tab" role="tablist">
        @foreach($categories as $index => $category)
            <button class="nav-link @if($index == 0) active @endif" id="nav-tab-{{ $category->id }}"
                    data-bs-toggle="tab"
                    data-bs-target="#tab-{{ $category->id }}"
                    type="button"
                    role="tab" aria-controls="nav-{{ $category->id }}" aria-selected="true" style="width:auto">
                {{ app()->getLocale() == 'ar' ? $category->name_ar : $category->name }}
            </button>
        @endforeach
    </div>
    <div class="tab-content" id="nav-tabContent">
        @foreach($categories as $index => $category)
            <div class="tab-pane fade @if($index == 0) show active @endif" id="tab-{{ $category->id }}" role="tabpanel"
                 aria-labelledby="nav-{{ $category->id }}"
                 tabindex="0">
                <div style="height :900px; margin-top: 65px;">
                    @foreach($category->products as $product)
                        <div class="aligned"
                             style="width: 27.33rem;   display:inline-flex;     background-color: black;border-bottom: solid gray 1px; margin: 0px; padding: 0px; border-radius: 0; "
                             onclick="showPopup({{ $product }}, '{{ asset('storage/'.$product->image) }}')">
                            <a href="#blackout"><img src="{{ asset('storage/'.$product->image) }}" class="card-img-top"
                                                     alt="{{$product->name}}"
                                                     style="  width: 200px;height: 195px;">
                                <div>
                                    <h4>{{ app()->getLocale() == 'ar' ?  $product->name_ar : $product->name }}</h4>
                                    <P class="aligned">{{  app()->getLocale() == 'ar' ? $product->description_ar : $product->description }}</P>
                                    <span class="price">{{ $product->price }}</span>
                                                  <span class="heart"><i class="fas fa-heart fa-2x"></i></span>

                            </a>
                        </div>
                </div>
                @endforeach
            </div>
    </div>
    @endforeach
</div>
</div>
 <div class="icon-bar">
      <a href="#like" class="facebook"> <i class="fas fa-heart fa-2x"></i></a>

    </div>
<div id="blackout">
    <div id="box">
        <img src="" id="popupImage" class="card-img-top" alt="..." style="  width: 200px;height: 195px;">
        <span class="name" id="popupName"></span>
        <span class="text" id="popupText"></span>
        <span class="price" id="popupPrice" style="font-weight: bold"></span>
        <a href="#" class="close" id="close">X</a>
    </div>
</div>
<div class="footer">
    <div class="container-fulide">
        <p class="copyright">All rights reserved for <a href="https://www.facebook.com/mosaic4ad">Mosaic4ad</a></p>
    </div>
</div>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script>
    function showPopup(product, imageUrl) {
        var lang = '';
        @if(app()->getLocale() == 'ar')
            lang = '_ar';
        @endif
        document.getElementById("popupName").innerHTML = product["name" + lang];
        document.getElementById("popupText").innerHTML = product["description" + lang] + product["description" + lang];
        document.getElementById("popupPrice").innerHTML = product.price + '$';
        document.getElementById("popupImage").src = imageUrl;
    }

    function switchLang() {
        console.log('sas')
        if (document.getElementById('switchLangId').checked) {
            window.location.href = '{{ route('menu') }}';
        } else {
            window.location.href = '{{ route('menu', ['lang' => 'ar']) }}';
        }
    }

    (function () {
        document.getElementById('close').click()
    })();
</script>
</body>
</html>
