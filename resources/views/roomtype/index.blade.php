@extends('layouts.hotel')

@section('body')
    <table>
        <th>部屋種別ID</th>
        <th>部屋種別名称</th>
        <th>宿泊可能人数</th>

        @foreach ($items as $item)
            {{-- 変数items＝コントローラーから渡された値(Room::all();)が入っている。そこから各項目を取り出して変数$itemに１つずつ入れている --}}
            <tr>
                <td>{{ $item->roomtype_id }}</td>
                <td>{{ $item->roomtype_name }}</td>
                <td>{{ $item->number_of_guests }}</td>
            </tr>
        @endforeach
    </table>
@endsection
