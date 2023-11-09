<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- リセットCSS -->
    <link rel="stylesheet" href="https://unpkg.com/destyle.css@3.0.2/destyle.min.css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css"> --}}

    <title>福楼(ﾌｸﾛｳ)|老舗旅館</title>
    <style>
        /* 全体共通 ------------------------------------------ */
        body {
            color: #333333;
            background-color: #FFFFFF;
            font-size: 100%;
            line-height: 1.7;
            margin: 30px auto;
            /*中央揃え*/
            width: 90%;
            -webkit-text-size-adjust: 100%;
        }

        .logo {
            font-family: "游明朝";
            font-size: 33px;
            font-weight: bold;
        }

        a {
            text-decoration: none;
        }

        table {
            margin: auto;
        }

        th {
            /*予約一覧のテーブルのth幅調整のため*/
            min-width: 140px;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            border-spacing: 0;
        }

        table th,
        table td {
            padding: 10px 0;
            text-align: center;
        }

        table tr:nth-child(odd) {
            background-color: #eee;
        }

        /* ナビ ----------------------------------------- */
        .gnavi {
            margin-bottom: 50px;
        }

        /* 全体　ナビ横並びにする */
        nav ul {
            display: flex;
            /*横並び*/
            justify-content: center;
            /*中央寄せ*/
            list-style: none;
            /*不要な装飾を削除*/
        }

        .gnavi>.inner>ul>li {
            min-width: 150px;
        }

        /* サブナビ------------------------------------- */
        /* ２階層目以降（プルダウン）は縦並び */
        nav ul ul {
            display: block;
        }

        /* liを下層メニューのulの基点にする */
        nav ul li {
            position: relative;
        }

        /* ２層目以下 共通設定 */
        nav li.parent ul {
            position: absolute;
            left: 0;
            top: 100%;
            /*親ナビの高さ分、下にずらす*/
            padding: 0;
            background-color: #3577ca;
            width: 100%;

            /* 最初は非表示 */
            visibility: hidden;
            opacity: 0;
            /* アニメーション */
            transition: all 0.3s;
        }


        /* メニューリンクの設定 */
        nav ul li a {
            display: block;
            color: #999;
            padding: 20px 35px;
            transition: all 0.3s;
            /* アニメーションの動きの速度 */
        }

        nav ul li li a {
            padding: 10px 35px;
        }

        /* nav ul li a:hover {
            color: #fff;
        } */

        /* hoverしたら表示する */
        nav li.parent:hover>ul,
        nav li.parent ul li:hover>ul,
        nav li.parent:active>ul,
        nav li.parent ul li:active>ul {
            visibility: visible;
            opacity: 1;
        }


        /* 下層メニューのaタグのデザイン */
        nav li.parent ul li a {
            color: #fff;
            border-bottom: solid 1px rgba(255, 255, 255, 0.6);
        }

        nav li.parent ul li:last-child>a {
            border-bottom: none;
        }

        nav li.parent ul li a:hover,
        nav li.parent ul li a:active {
            background-color: #3577ca;
        }
    </style>
</head>

<body>
    <header>
        <h1 class="logo">老舗旅館 福楼</h1>

        <!-- ナビ -->
        <nav class="gnavi">
            <div class="inner">
                <ul>
                    <li><a href="#">TOP(管理者ログイン)</a></li>

                    <li class="parent"> <!-- parent クラスを付与する -->
                        <a href="/guest">利用者管理</a>
                        <ul> <!-- 「li」タグの中に「ul」タグを更に追加しておく。ここは２層目 -->
                            <li><a href="/guest">一覧表示</a></li>
                            <li><a href="/guest/add">追加</a></li>
                        </ul>
                    </li>

                    <li class="parent"> <!-- parent クラスを付与する -->
                        <a href="/reserve">予約管理</a>
                        <ul> <!-- 「li」タグの中に「ul」タグを更に追加しておく。ここは２層目 -->
                            <li><a href="/reserve">一覧表示</a></li>
                            <li><a href="/reserve/add">追加</a></li>
                        </ul>
                    </li>

                    <li class="parent"> <!-- parent クラスを付与する -->
                        <a href="/room">部屋管理</a>
                        <ul> <!-- 「li」タグの中に「ul」タグを更に追加しておく。ここは２層目 -->
                            <li><a href="/room">一覧表示</a></li>
                            <li><a href="/room/add">追加</a></li>
                        </ul>
                    </li>

                    <li class="parent"> <!-- parent クラスを付与する -->
                        <a href="/roomtype">部屋種別</a>
                        <ul> <!-- 「li」タグの中に「ul」タグを更に追加しておく。ここは２層目 -->
                            <li><a href="/roomtype">一覧表示</a></li>
                            <li><a href="/roomtype/add">追加</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>

    </header>

    <body>
        @yield('body')
    </body>
</body>

</html>
