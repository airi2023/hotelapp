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
            opacity: 0.8;
            padding:1.5rem 1.5rem 1.5rem 2.5rem;
        }
        
        
        .navbar-collapse{
            text-align: center;
            /* スマホメニュー文字中央揃え */
        }


        /* 全体共通 ------------------------------------------ */
        body {
            color: #333333;
            background-color: #fff9e4;
            font-size: 100%;
            line-height: 1.7;
            margin: 0 auto;
            /*中央揃え*/
            width: 100%;
            -webkit-text-size-adjust: 100%;
            font-family: "游明朝";
        }

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
              <a class="nav-link" href="#">Top <span class="sr-only">(current)</span></a>
            </li>

            <!-- ドロップダウンタイプ -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Reserve
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">予約明細</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <!-- ドロップダウンタイプここまで -->

            <li class="nav-item active">
                <a class="nav-link" href="#">Concept</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Restaurant&Bar</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Room</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Access</a>
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


    <!-- 子bladeを挿入する部分 -->
    @yield('body')

    <!-- ここから下記３行が抜けていた汗 -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>