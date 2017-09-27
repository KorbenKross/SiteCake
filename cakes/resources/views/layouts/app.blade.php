<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link rel="stylesheet" href="libs/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="libs/owl-carousel/owl.theme.default.min.css">

    <link rel="stylesheet" href="http://bootstraptema.ru/plugins/2015/bootstrap3/bootstrap.min.css" />
    <!-- <link rel="stylesheet" href="../css/mystyle.css" type="text/css"/> --> 
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
    <meta charset="utf-8"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body{
            background: url(../images/fon3.jpg); 
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 100% 100%;
        }
        li {
            list-style-type: none;
        }
        ul {
            margin-left: 0;
            padding-left: 0;
        }
         #header{
            -moz-transition: all 0.4s; 
            -webkit-transition: all 0.4s;  
            -ms-transition: all 0.4s;  
            -o-transition: all 0.4s;  
            transition: all 0.4s; 
            opacity:0.8;
            filter:alpha(opacity=100);
            }
             
        #header:hover {
            opacity:1;
            filter:alpha(opacity=100);
        }
           #navmenu {
        background-color: #FFFFFF;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#FFE4C4', endColorstr='#e9eaea',GradientType=0 );
        height: 55px;
        width: 100%
        padding-top: 1px;
        position: relative;
        z-index: 1;
        justify-content: space-between;
    }
    #menu {
        margin: 10px;
        margin-right: 100px;
        float: right;  
    }
    #menu a {
        text-decoration: none;
    }
    #menu ul {
        list-style: none;
        
    }
    #menu > ul > li {
        float: left;
        padding-bottom: 12px;
    }
    #menu ul li a {
        border-color: #D1D1D1;
        border-image: none;
        border-style: solid;
        border-width: 0 1px 0 0;
        box-shadow: -1px 0 0 rgba(255, 255, 255, 0.8) inset, 1px 0 0 rgba(255, 255, 255, 0.8) inset;
        color: #333333;
        font-size: 14px;
        height: 30px;
        line-height: 30px;
        padding: 11px 15px 10px;
        text-shadow: 0 1px 0 #FFFFFF;
    }
    #menu ul li a:hover {
        background: -webkit-linear-gradient(#efefef, #e9eaea) repeat scroll 0 0 transparent;
        background: -moz-linear-gradient(#efefef, #e9eaea) repeat scroll 0 0 transparent;
        background: linear-gradient(#efefef, #e9eaea) repeat scroll 0 0 transparent;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#efefef', endColorstr='#e9eaea',GradientType=0 );
    }
    #menu > ul > li.active > a {
        background: -webkit-linear-gradient(#55A6F1, #3F96E5) repeat scroll 0 0 transparent;
        background: -moz-linear-gradient(#55A6F1, #3F96E5) repeat scroll 0 0 transparent;
        background: linear-gradient(#55A6F1, #3F96E5) repeat scroll 0 0 transparent;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#55A6F1', endColorstr='#3F96E5',GradientType=0 );
        border-bottom: 1px solid #2D81CC;
        border-top: 1px solid #4791D6;
        box-shadow: -1px 0 0 #55A6F1 inset, 1px 0 0 #55A6F1 inset;
        color: #FFFFFF;
        margin: -1px 0 -1px -1px;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.3);
    }
    #menu > ul > li.active > a:hover {
        background: -webkit-linear-gradient(#499FEE, #3F96E5) repeat scroll 0 0 transparent;
        background: -moz-linear-gradient(#499FEE, #3F96E5) repeat scroll 0 0 transparent;
        background: linear-gradient(#499FEE, #3F96E5) repeat scroll 0 0 transparent;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#499FEE', endColorstr='#3F96E5',GradientType=0 );
    }
    </style>
</head>
<body>
<div id="app">
<div id="header" align="middle" >
    <!-- меню -->
    <div id="navmenu" >
        <!-- логотип -->
        <a href="index.php"><img class="logo" height="100%" src="images/logo_cake1.png"></a>
        <!-- форма поиска -->
        <div id="search">
            <form role="search" method="get">
                <input style="margin: 10px;" type="text" placeholder="Поиск по названию..." name="s" value="">
                <button type="submit" style="background-image: url(images/s2.png);"></button>
            </form>
        </div>
        <nav id="menu">
            <ul>
                <li><a href="#">Отзывы</a></li>
                <li><a href="#">Помощь</a></li>
                <li><a href="#">Контакты</a></li>
                <li><a href="login">Вход</a></li>
                <li><a href="register">Регистрация</a></li>
        
            </ul>
        </nav>

    </div>
</div>

@yield('content')

<div style="margin-top: 10%;" class = "container-fluid" style="background-color:#4d4d4d; opacity: 0.7">
     <div class = "container">
     <br>
     <div>
        <div class="item col-xs-4 col-lg-4">         
            <p id="mycolor11">
             +7 (495) 967-99-41
            <br>+7 (965) 243-92-39
            <br>Москва, Нагатинский бульвар 6 а
            <br>Ежедневно с 10.00 до 20.00
            </p>
                <div class="col-xs-12 col-md-6">
                    <div class="col-xs-12 col-md-6">                     
                    </div>
                </div>
        </div>

        <div class="item col-xs-4 col-lg-4">     
            
            <p id="mycolor11">
                <br>
                 <span style='padding-left:20px;'> </span>
                <a href="" style="color: white" id="footer"> О нас </a>
                <span style='padding-left:20px;'> </span>
                <a href="" style="color: white" id="footer"> Как заказать? </a>
                <span style='padding-left:20px;'> </span>
                 <a href="" style="color: white" id="footer"> Доставка </a>
                <span style='padding-left:20px;'> </span>
                 <a href="" style="color: white" id="footer"> Отзывы </a>
                <span style='padding-left:20px;'> </span>
            
            </p>
                 
                <div class="col-xs-12 col-md-6">                           
                    <div class="col-xs-12 col-md-6">                         
                    </div>
                </div>
        </div>

        <div class="item col-xs-4 col-lg-4">                      
            <p align="right"> 

            <a href="lorem.html"><img src="images/fb.png" 
              width="35" height="35" alt="lorem"></a>
              <a href="lorem.html"><img src="images/vk.png" 
              width="35" height="35" alt="lorem"></a>

            <a href="lorem.html"><img src="images/yt.png" 
              width="35" height="35" alt="lorem"></a>
            <a href="lorem.html"><img src="images/ig.png" 
              width="35" height="35" alt="lorem"></a>
             <p align="right" style="color: white" id="mycolor"> 
             ©2017 Тортики на заказ
        </div>
</div>
</div>
</div>
</div>

    <script src="{{ asset('js/app.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#list').click(function(event){event.preventDefault();
            $('#products .item').addClass('list-group-item');});
        $('#grid').click(function(event){event.preventDefault();
            $('#products .item').removeClass('list-group-item');
            $('#products .item').addClass('grid-group-item');});
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="libs/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript">
            $(function() {
                $(".owl-carousel").owlCarousel();
            });
    </script>
    <script type="text/javascript">
        $(".owl-carousel").owlCarousel({
            loop:true,
            center:true,
            autoWidth:true,
        });
    </script>
</body>
</html>