@extends('layouts.hotel')

@section('body')
    <table>
        <th>予約明細ID</th>
        <th>予約ID</th>
        <th>部屋ID</th>
        <th>宿泊日（日数？）</th>
        <th>宿泊料</th>

        @foreach ($items as $item)
            {{-- 変数items＝コントローラーから渡された値(Reserve::all();)が入っている。そこから各項目を取り出して変数$itemに１つずつ入れている --}}
            <tr>
                <td>{{ $item->reserve_id }}</td>
                <td>{{ $item->reserve->reserve_id }} </td>
                <td>{{ $item->room->room_id }} </td>
                <td>{{ $item->stay_days }}</td>
                <td>{{ $item->fee }}</td>
            </tr>
        @endforeach
    </table>
@endsection
