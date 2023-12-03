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
    <title>福楼(ﾌｸﾛｳ)|老舗旅館</title>
    <style>
        /* bootstrapのデフォルトCSS変更 */
        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: 1.5rem;
            padding-left: 1.5rem;
        }

        /* css */
        header{
            margin-bottom: 110px;/* ナビ下の余白 */
        }

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

        th {
            /*予約一覧のテーブルのth幅調整のため*/
            min-width: 140px;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            border-spacing: 0;
            margin: auto;
        }

        table th,
        table td {
            padding: 10px 0;
            text-align: center;
        }

        table tr:nth-child(odd) {
            background-color: #eee;
        }


        form{
            margin: auto;
        }


    </style>
</head>
<body>

    <header>
        <!-- ナビ -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Top <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/guest">利用者管理</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/guest/add">利用者追加</a>
              </li>

            <!-- ドロップダウンタイプ -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  予約管理
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">予約明細</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <!-- ドロップダウンタイプここまで -->

            <li class="nav-item">
                <a class="nav-link" href="#">部屋管理</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">部屋種別</a>
            </li>



          </ul>
        </div>
      </nav>
    </header>

    <!-- 子bladeを挿入する部分 -->
    @yield('body')


    <!-- ここから下記３行が抜けていた汗 -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>