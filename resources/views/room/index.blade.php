@extends('layouts.hotel')

@section('body')
    <table>
        <th>部屋ID</th>
        <th>部屋種別ID</th>
        <th>部屋種別名称</th>
        <th>部屋番号</th>

        @foreach ($items as $item)
            {{-- 変数items＝コントローラーから渡された値(Room::all();)が入っている。そこから各項目を取り出して変数$itemに１つずつ入れている --}}
            <tr>
                <td>{{ $item->room_id }}</td>
                <td>{{ $item->roomtype->roomtype_id }}</td>
                <td>{{ $item->roomtype->roomtype_name }}</td>
                <td>{{ $item->room_name }}</td>
            </tr>
        @endforeach
    </table>
@endsection
