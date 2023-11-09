@extends('layouts.hotel')

@section('body')
    <table>
        <th>予約ID</th>
        <th>利用者ID</th>
        <th>お名前</th>
        <th>ご住所</th>
        <th>電話番号</th>
        <th>人数</th>
        <th>チェックイン日</th>
        <th>チェックアウト日</th>

        @foreach ($items as $item)
            {{-- 変数items＝コントローラーから渡された値(Reserve::all();)が入っている。そこから各項目を取り出して変数$itemに１つずつ入れている --}}
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
    </table>
@endsection
