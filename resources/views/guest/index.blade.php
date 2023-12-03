{{-- @extends('layouts.hotel') --}}
@extends('layouts.base')

@section('body')
    <table>
    <th>お名前</th><th>ご住所</th><th>電話番号</th>
    @foreach($guests as $guest)
    <tr>
        <td>{{$guest->name}}</th>
        <td>{{$guest->address}}</td>
        <td>{{$guest->tel}}</th>
    </tr>
    
    @endforeach
    </table>
@endsection

