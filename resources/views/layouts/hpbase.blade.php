<!-- bootstrapでナビだけ書く！ -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- リセットCSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <!-- BootStrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Crystal Resort</title>
    <style>
        /* bootstrapのデフォルトCSS変更 */
        .navbar-expand-lg .navbar-nav .nav-link {
            /* ナビ間の余白 */
            padding-right: 1.5rem;
            padding-left: 1.5rem;
            color: rgba(255, 255, 255, 0.7); /* ナビ文字色 */
        }

        /* ナビホバー時*/
        .navbar-expand-lg .navbar-nav .nav-link:hover {
            color: #fffcf2;
            transition : all 0.5s;
        }
        /* 中央から下線 */
        .navbar-expand-lg .navbar-nav .nav-link {
            position: relative;
            text-align: center;
            display: inline-block;
        }
        .navbar-expand-lg .navbar-nav .nav-link::before {
            content: "";
            position: absolute;
            left: 100%;
            right: 100%;
            bottom: 0;
            height: 1px;
            /* background-color: #30a9de; */
            background-color: #fff;
            -webkit-transition: left 0.3s ease, right 0.3s ease;
            -moz-transition: left 0.3s ease, right 0.3s ease;
            -o-transition: left 0.3s ease, right 0.3s ease;
            transition: left 0.3s ease, right 0.3s ease;
        }
        .navbar-expand-lg .navbar-nav .nav-link:hover::before {
            left: 0;
            right: 0;
        }


        .navbar{
            /* ナビ背景色 */
            background-color: #0d0b24!important;
            opacity: 0.9;
            padding:1.5rem 1.5rem 1.5rem 2.5rem;
        }
        
        
        .navbar-collapse{
            text-align: center;
            /* スマホメニュー文字中央揃え */
        }


        /* 全体共通 ------------------------------------------ */
        body {
            color: #333333;
            background-color: #d0d1de;/*#fff9e4*/
            /* font-size: 100%; */
            font-size: 18px;
            line-height: 1.7;
            margin: 0 auto;
            /*中央揃え*/
            width: 100%;
            /* font-family: "游明朝体", "Yu Mincho", YuMincho, "ヒラギノ明朝 Pro", "Hiragino Mincho Pro", "MS P明朝", "MS PMincho", serif; */
            font-family: "游ゴシック体", YuGothic, "游ゴシック", "Yu Gothic", sans-serif;
            min-height: 200vw;
            position: relative;
        }

        /* .contents{
            margin-top: 70px;
        } */

        /* メイン画像 静止画の場合 */
        .top{
            background-image: url(http://127.0.0.1:8001/images/2.jpg);
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: center top 14%;
            height: 44vw;
            width: 100%;
            margin-bottom: 70px;
        }

        .top:before {
            content: '';
            width: 100%;
            height: 100%;
            display: block;
            background: center top /100%;
            background-color: rgba(13, 11, 36, 0.2);
        }

        /* スライダー */
        #carousel-2:before {
            content: '';
            width: 100%;
            height: 100%;
            display: block;
            background: center top /100%;
            background-color: rgba(13, 11, 36, 0.2);
            position: absolute;
            z-index: 2;
        }

        .carousel-item{
            transition: transform 2s ease, opacity .5s ease-out;
        }


        /* スライダー上の文字 */
        .slider-text{
            position: absolute;
            top: 50%;left: 50%;
            -ms-transform: translate(-50%,-50%);
            -webkit-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
            z-index: 150;
            color: #fff;
            line-height: 2.5;
        }
        .slider-text h2{
            margin: 0;
            padding: 0;
            /* font-size: 2rem; */
            font-size: 2.5vw;
            color: #fff; 
            text-align: center;
            /* 游明朝体 */
            font-family: "游明朝体", "Yu Mincho", YuMincho, "ヒラギノ明朝 Pro", "Hiragino Mincho Pro", "MS P明朝", "MS PMincho", serif;
            line-height: 1.6;
}
        .slider-text p{margin: 0;padding: 0;font-size: 1vw;text-align: center;font-family: "游明朝体";}


        /* スクロールダウン */
        .scrolldown {
            position: absolute;
            width: 24px;
            height: 24px;
            bottom: calc(27% - 28px);
            left: 0;
            right: 0;
            margin: auto;
            z-index: 1000;
        }

        .chevron {
        position: absolute;
        width: 28px;
        height: 8px;
        opacity: 0;
        transform: scale3d(0.5, 0.5, 0.5);
        animation: move 3s ease-out infinite;
        }

        .chevron:first-child {
        animation: move 3s ease-out 1s infinite;
        }

        .chevron:nth-child(2) {
        animation: move 3s ease-out 2s infinite;
        }

        .chevron:before,
        .chevron:after {
        content: ' ';
        position: absolute;
        top: 0;
        height: 100%;
        width: 51%;
        background: #fff;
        }

        .chevron:before {
        left: 0;
        transform: skew(0deg, 30deg);
        }

        .chevron:after {
        right: 0;
        width: 50%;
        transform: skew(0deg, -30deg);
        }

        @keyframes move {
        25% {
            opacity: 1;

        }
        33% {
            opacity: 1;
            transform: translateY(30px);
        }
        67% {
            opacity: 1;
            transform: translateY(40px);
        }
        100% {
            opacity: 0;
            transform: translateY(55px) scale3d(0.5, 0.5, 0.5);
        }
        }

        .text {
        display: block;
        margin-top: 75px;
        margin-left: -30px;
        font-family: "Helvetica Neue", "Helvetica", Arial, sans-serif;
        font-size: 12px;
        color: #fff;
        text-transform: uppercase;
        white-space: nowrap;
        opacity: .25;
        animation: pulse 2s linear alternate infinite;
        }

        .text a{
            color: #fff;
        }

        @keyframes pulse {
        to {
            opacity: 1;
        }
        }


        /* コンテンツ ------------------------------*/
        /* 見出し */
        .contents h2,.contents h3,.contents h4{
            background-color: #0d0b24!important;
            color: #fff;
            text-align: center;
            padding: 10px;
            font-family: "游明朝体", "Yu Mincho", YuMincho, "ヒラギノ明朝 Pro", "Hiragino Mincho Pro", "MS P明朝", "MS PMincho", serif;
        }
        .contents h3{
            font-size: 30px;
        }

        /* フッター */
        footer {
            color: #fff;
            background-color: #0d0b24;
            position: absolute;
            bottom: -420px;
            width: 100%;
            height: 420px;
            text-align: center;
            padding: 30px 0 0;
        }

        .footer p{
            margin-top: 20px;
            font-size: 14px;
        }

        footer .nav-item {
            width: 20%;
            min-width: 150px;
            margin: 0 auto;
        }

        footer .nav-item a {
            color: #fff;
        }

        footer .nav-item a:hover {
            opacity: 0.7;
        }

        footer address{
            font-size: 12px;
        }


        /* 予約ぼかし */
        .blurBg{
        background: url(/images/1.jpg) no-repeat center;
        background-size: cover;
        position: relative;
        z-index: 0;
        overflow: hidden;
        text-align: center;
        padding-top: 70px;
        min-height: 280px;
        height: 18vw;
        }
        .blurBg:before{
        content: '';
        background: inherit;
        -webkit-filter: blur(5px);
        -moz-filter: blur(5px);
        -o-filter: blur(5px);
        -ms-filter: blur(5px);
        filter: blur(5px);
        position: absolute;
        top: -5px;
        left: -5px;
        right: -5px;
        bottom: -5px;
        z-index: -1;
        }

        .blurBg:after{
            content: '';
            background: rgba(0,0,0,0.6);
            position: absolute;
            top: 0px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            z-index: -1;
        }

        .blurBg h3{
            text-align: center;
            margin: 0 auto;
            max-width: 270px;
            height: 60px;
            border-bottom: solid 2px #fff;
            background: none!important;
        }

        .blurBg .btn{margin-top: 50px;}

        /* ボタン共通 */
        .btn{
            color: #fff;
            background: #b49859;
            max-height: 70px;
            max-width: 200px;
        }

        /* フェードイン--------------- */
        /* .fadeIn {
            transition: 1s;
            opacity: 0;
        }

        .fadeIn.animated {
            opacity: 1;
        } */
        .fadeIn {
            transform: translate3d(0, 50px, 0);
            transition: 1s;
            opacity: 0;
        }
        .fadeIn.animated {
            transform: translate3d(0, 0, 0);
            opacity: 1;
        }

        /* グリッド -----------------*/
        .grid {
            /* スマホのとき */
        display: grid;
        grid-template-areas:
            "head"
            "txt"
            "img";
        grid-template-columns: 1fr;
        grid-template-rows: auto 1fr;
        grid-gap: 1em 32px;
        margin-top: 5vw;
        }

        .head {
        grid-area: head;
        }

        .img {
        grid-area: img;
        }

        .grid img{
        width: 100%;
        }

        .txt {
        grid-area: txt;
        }

        /* PC表示 */
        @media screen and ( min-width: 991px ) {
        .grid {
            grid-template-areas:
            /* ↓画像左 */
            "img head"
            "img txt";
            /* ↓画像右 */
            /* "head img"
            "txt img"; */
            /* grid-template-columns: calc(55% - 25px) calc(45% - 25px);
            grid-template-rows: auto 1fr;
            grid-gap: 1em 50px; */
            grid-template-columns: calc(50% - 0px) calc(40% - 0px);
            grid-template-rows: auto 1fr;
            grid-gap: 1em 5%;
        }

        .grid2 {
            grid-template-areas:
            /* ↓画像右 */
            "head img"
            "txt img";
            grid-template-columns: calc(40% - 0px) calc(50% - 0px);
        }

        .grid h3{
            /* margin-top: 7vw; */
        }
        }

        /* ページ内リンク調整 */
        /* :target::before {
        content: "";
        display: block;
        height: 500px; 
        margin-top: -500px;
        visibility: hidden,
        } */
        /* section[id]::before {
        content: "";
        display: block;
        height: 100px;
        margin-top: -100px;
        visibility: hidden,
        } */
        section{
            padding-top: 100px;
        }

/* タブレットサイズ */
@media screen and (max-width:991px) {
            .top{
                background-position: center top 14%;
                height: 60vw;
            }
        }

/* スマホサイズ */
        @media screen and (max-width:768px) {
            .navbar{
                padding:0.5rem 0.5rem 0.5rem 1.5rem;
            }
            .scrolldown{
                display: none;
            }

        }



    </style>
</head>
<body>

    <header>
        <!-- ナビ -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Crystal Resort</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          
        {{-- <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent"> --}}
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/">Top <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="#reserve">Reserve</a>
            </li>

            <!-- ドロップダウンタイプ -->
            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Reserve
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">予約明細</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li> --}}
              <!-- ドロップダウンタイプここまで -->

            <li class="nav-item active">
                <a class="nav-link" href="#concept">Concept</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#restaurant">Restaurant</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#room">Room</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#access">Access</a>
            </li>


          </ul>
        </div>
      </nav>
    </header>

    {{-- トップページ --}}
    {{-- <img src="{{ asset('images/1.jpg')}}"> --}}
    {{-- <div class="top"></div> --}}

    <!--スライダー-->
    <div id="carousel-2" class="carousel slide carousel-fade" data-interval="10000" data-ride="carousel" data-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active data-interval='10000'">
                <img class="d-block w-100" src="images/2.jpg" alt="First slide">
            </div>
            <div class="carousel-item data-interval='10000'">
                <img class="d-block w-100" src="images/3.jpg" alt="Second slide">
            </div>
            <div class="carousel-item data-interval='10000'">
                <img class="d-block w-100" src="images/4.jpg" alt="Third slide">
            </div>
        </div>

        <div class="slider-text">
            <h2>極上のリゾート体験、究極のくつろぎ。</h2>
            <h2>最高峰のおもてなしを</h2>
            <p>Crystal Resort</p>
        </div>
        
        <div class="scrolldown">
            <div class="chevron"></div>
            <div class="chevron"></div>
            <div class="chevron"></div>
            <span class="text"><a>Scroll down</a></span>
        </div>
    </div>



    <div class="contents">
    @yield('body')   <!-- 子bladeを挿入する部分 -->

    <section class="blurBg" id="reserve">
        <h3>ご予約はこちら</h3>
        <a class="btn" href="/" role="button">ご予約 &raquo;</a>
    </section>

    <section class="grid grid1" id="concept">
        <h3 class="head">Concept</h3>
        <div class="txt">
          <p>Crystal Resortは、極上のリゾート体験と究極のくつろぎが交差する魔法の場所です。<br>輝くクリスタルのような美しさと、最上級のおもてなしに包まれた、まさに極上のステイをお約束します。</p>
          {{-- <a href="" class="btn">More Detail</a> --}}
        </div>
        <figure class="img">
          <img src="/images/1.jpg" alt="">
        </figure>
      </section>


      <section class="grid grid2" id="restaurant">
        <h3 class="head">Restaurant</h3>
        <div class="txt">
          <p>私たちのレストランでは、世界中から厳選された新鮮で贅沢な食材を使用し、シェフたちが織りなす美食のアートが広がります。<br>極上の味わいと上質なサービスが調和し、ひと口ごとに幸福感に満ちた食の旅へ誘います。</p>
          {{-- <a href="" class="btn">More Detail</a> --}}
        </div>
        <figure class="img">
          <img src="/images/food2.jpg" alt="">
        </figure>
      </section>
      

        <section class="top1" id="room">
            <div class="container">
             <h2 class="display-6">Room</h2>
             <img class="d-block w-100" src="/images/1.jpg">
             <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
            </div> 
         </section>
           
         <section class="top2">      
           <div class="container sisya">
           <div class="row">
             <div class="col-md-6">
               <h3>部屋1</h3>
                 <img class="d-block w-100" src="/files/top3-1.png">
               <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
               <a class="btn" href="/" role="button">詳しくはこちら &raquo;</a>
             </div>
             <div class="col-md-6">
               <h3>部屋2</h3>
                 <img class="d-block w-100" src="/files/top3-2.png">
               <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
             </div>
            </div>    
         </div> <!-- /container -->
         </section>

         <div class="google-maps container-fluid" id="access">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d104994.77058365803!2d135.4160245997024!3d34.677764242137584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6553406e2e1%3A0xc55bc16ee46a2fe7!2z5aSn6Ziq5bqc5aSn6Ziq5biC!5e0!3m2!1sja!2sjp!4v1582540954527!5m2!1sja!2sjp" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>


    <footer>
        <div class="container footer">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Top</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/">Reserve</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/">Concept</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/">Restaurant&Bar</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/">Room</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/">Access</a>
                </li>
              </ul>
            <p>〒000-0000 大阪府大阪市000-00<br>
                TEL：0000-00-0000 / FAX：0000-00-0000</p>
       </div>

      <div class="container">
        <address>&copy; Crystal Resort 2023 All Rights Reserved.</address>
      </div>
  </footer>

    <!-- ここから下記３行が抜けていた汗 -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    
    <script>
        	jQuery(function($) {
                $('section').addClass('fadeIn');
                $(window).on('load scroll', function (){
                
                var box = $('.fadeIn');
                var animated = 'animated';
                
                box.each(function(){
                
                    var boxOffset = $(this).offset().top;
                    var scrollPos = $(window).scrollTop();
                    var wh = $(window).height();
                
                    if(scrollPos > boxOffset - wh + 100 ){
                    $(this).addClass(animated);
                    }
                });
                });
            })



            // jQuery(function(){
            //     var windowWidth = $(window).width();
            //     var headerHight = 100; 
            //     jQuery('a[href^=#]').click(function() {
            //     var speed = 1000;
            //     var href= jQuery(this).attr("href");
            //     var target = jQuery(href == "#" || href == "" ? 'html' : href);
            //     var position = target.offset().top-headerHight;
            //     jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
            //     return false;
            // });
            // });
    </script>
</body>
</html>