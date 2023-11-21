@extends('layouts.hotel')

@section('body')
    {{-- <table>
        <th>予約ID</th>
        <th>利用者ID</th>
        <th>お名前</th>
        <th>ご住所</th>
        <th>電話番号</th>
        <th>人数</th>
        <th>チェックイン日</th>
        <th>チェックアウト日</th>

        @foreach ($items as $item)
            変数items＝コントローラーから渡された値(Reserve::all();)が入っている。そこから各項目を取り出して変数$itemに１つずつ入れている
            <tr>
                <td>{{ $item->reserve_id }}</td>
                <td>{{ $item->guest_id }}</td>
                <td>{{ $item->guest->name }} 様</td>
                <td>{{ $item->guest->address }}</td>
                <td>{{ $item->guest->tel }}</td>
                <td>{{ $item->number_of_people }}名</td>
                <td>{{ $item->checkin }}</td>
                <td>{{ $item->checkout }}</td>
            </tr>
        @endforeach
    </table> --}}


    <table>
        <th>予約モデルのroom()メソッド実行によって取得した情報を表示</th>
        {{-- <th>予約ID</th>
        <th>お名前</th>
        <th>ご住所</th>
        <th>電話番号</th>
        <th>人数</th>
        <th>チェックイン日</th>
        <th>チェックアウト日</th>
        <th>料金</th> --}}
        @foreach ($items as $item)
        {{-- $items = Reserve::all();（予約コントローラーに記載）。予約テーブルの全項目が入ってる --}}
            <tr>
                <!-- 予約モデルのroom()メソッド呼び出し→1個目だけ表示→中間テーブル「予約明細」の外部キー「room_id」を介して？roomsテーブルのroom_idに紐づくroom_nameのみ取得 -->
                <!-- room_nameがnonオブジェクトでエラーになる→【解決】予約明細テーブルの投稿を2つに増やしたらエラー出なくなった-->
                {{-- <td>{{ $item->room}}<hr></td> --}}
                <td>{{ $item->room->first()->room_name }}<hr></td>
            </tr>

            {{-- <tr>
                <td>{{$item->room->first()->pivot->fee}}</td>
            </tr> --}}
        @endforeach
    </table>
@endsection
