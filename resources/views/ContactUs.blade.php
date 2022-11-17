<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
<style>
    .link:hover i{
    color:#fff;
    transform:rotate(-20deg);
}
.link:hover i.linkedin{
    color:#1da1f2;
}
.link:hover i.instagram{
    color:#ad24ec;
}
.link:hover i.twitter{
    color:#0a66c2;
}
.link:nth-child(1)::before{
    background:#eca624;
}
.link:nth-child(2)::before{
    background:#1da1f2;
}
.link:nth-child(3)::before{
    background:#0a66c2;
}
.link i{
    font-size:1.7em;
    transition:all 0.6s;
    color:#f1f1f1;
    padding:12px;
    border-radius:4px;
    margin:15px;
}
</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>     @if(app()->getLocale() == 'ar')
        
 
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
        <a href="{{route('menu')}}">
        <button type="button" class="btn btn-success">{{trans('site.menu')}} </button></a></div> 
        <div class="col-2">
            <input type="checkbox" id="switchLangId" data-toggle="switchbutton"
                   @if(app('request')->input('lang') != 'ar')checked @endif data-onlabel="EN" data-offlabel="ع"
                   data-onstyle="light" data-offstyle="danger" onchange="switchLang()">
        </div>
    </div>
</div>
<div class="container-fluid">
    <br>    <br>
    <br>
    <br>
    <br>

	<div class="row d-flex justify-content-center text-center ">
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-map-marker" style="background: black;"></span>
			        		</div>
			        		<div class="text">
				            <p>
				              @if(app()->getLocale() == 'ar')
        
 
				           {{$Settings->where('key','address_ar')->first()->value}}
				            @else
				             {{$Settings->where('key','address_en')->first()->value}}
				              
				                   @endif
				            
				            </p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-phone" style="background: black;"></span>
			        		</div>
			        		<div class="text">
				            <p> <a href="tel:// {{$Settings->where('key','mobile')->first()->value}}"> {{$Settings->where('key','mobile')->first()->value}}</a></p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-paper-plane" style="background: black;"></span>
			        		</div>
			        		<div class="text">
				            <p><a href="mailto:{{$Settings->where('key','email')->first()->value}}">{{$Settings->where('key','email')->first()->value}}</a></p>
				          </div>
			          </div>
							</div>
					<div class="col-md-4 h-100 d-flex align-items-center justify-content-center">
                    <div>
<a href="{{@$Settings->where('key','facebook')->first()->value}}" class="link">
    <i class="fab fa-facebook-f"></i>
</a>
<a href="{{@$Settings->where('key','twitter')->first()->value}}" class="link">
    <i class="fa-brands fab fa-twitter"></i>
</a>
<a href="{{@$Settings->where('key','youtube')->first()->value}}" class="link">
    <i class="fab fa-youtube"></i>
</a>

<a href="{{@$Settings->where('key','instagram')->first()->value}}" class="link">
    <i class="fab fa-instagram"></i>
</a>

<a href="{{@$Settings->where('key','whatsapp')->first()->value}}" class="link">
    <i class="fab fa-whatsapp"></i>
</a>
</div>
                </div>
						</div>
 
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
            window.location.href = '{{ route('ContactUs') }}';
        } else {
            window.location.href = '{{ route('ContactUs', ['lang' => 'ar']) }}';
        }
    }

    (function () {
        document.getElementById('close').click()
    })();
</script>
</body>
</html>
