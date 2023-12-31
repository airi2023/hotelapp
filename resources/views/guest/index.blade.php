{{-- @extends('layouts.hotel') --}}
@extends('layouts.base')
{{-- @extends('layouts.hpbase') --}}


@section('body')
    <form action="/guest/add" method="POST" class="form-group addform">
        @csrf
        <label for="name">お名前</label>
        <input type="text" name="name" placeholder="お名前" class="form-control" required autofocus>
        <br>
        <label for="address">ご住所</label>
        <input type="text" name="address" placeholder="ご住所" class="form-control" required>
        <br>
        <label for="tel">電話番号</label>
        <input type="tel" name="tel" placeholder="電話番号" class="form-control" required>
        <br>
        <input type="submit" value="登録" class="form-control-sm">
    </form>

    <div class="table-wrap">
        <table>
            <th>お名前</th>
            <th>ご住所</th>
            <th>電話番号</th>
            @foreach ($guests as $guest)
                <tr>
                    <td>{{ $guest->name }}</td>
                    <td>{{ $guest->address }}</td>
                    <td>{{ $guest->tel }}</td>

                    <!--  更新ボタン -->
                    <td>
                        <form action="/guest/edit?id={{$guest ->id}}" method="get">
                            {{-- <a href="/guest/edit?id={{$guest ->id}}">更新</a> --}}
                            <input type="hidden" name="id" value="{{ $guest->id }}">
                            <input type="submit" value="更新">
                        </form>
                    </td>

                    <!--  削除ボタン -->
                    <td>
                        <form action="{{ url('guest/' . $guest->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">
                                削除
                            </button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </table>
    </div>

@endsection

<style>
    /* テーブル */
    @media screen and (max-width: 991px) {
        .table-wrap {
            overflow-x: scroll;
        }
    }

    table {
        width: 80%;
        border-collapse: collapse;
        border-spacing: 0;
        white-space: nowrap;
        margin: auto;
    }

    table th {
        /*テーブルのth幅調整*/
        min-width: 140px;
    }

    table th,
    table td {
        padding: 10px 0;
        text-align: center;
        border: solid 1px #333;
    }


    /* table tr:nth-child(odd) {
            background-color: #eee;
        } */

    table th {
        background-color: #eee;
    }


    .addform {
        margin: auto auto 3vw;
        max-width: 80%;
    }

    form {
        margin: auto;
    }
</style>