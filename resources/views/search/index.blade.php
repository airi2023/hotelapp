@extends('layouts.hotel') <!-- もしレイアウトを使用する場合 -->

@section('body')
    <div class="container">
        <h2>空き状況照会</h2>

        {{-- フォームを使って checkAvailability アクションにデータを送信 --}}
        <form action="{{ route('checkAvailability') }}" method="post">
            @csrf

            <div class="inner">
                <input type="text" name="input_name">
            </div>

        </form>
    </div>
@endsection
