@extends('layouts.hotel')

@section('body')
    <form action="/reserve/add" method="POST" class="form-group">
        @csrf
        <label for="reserve_id">予約ID</label>
        <input type="text" name="reserve_id" placeholder="予約ID" class="form-control" required autofocus>
        <br>

        <label for="guest_id">利用者ID</label>
        <input type="text" name="guest_id" placeholder="利用者ID" class="form-control" required autofocus>
        <br>

        <label for="number_of_people">予約人数</label>
        <input type="text" name="number_of_people" placeholder="予約人数" class="form-control" required autofocus>
        <br>

        <label for="checkin">Checkin:</label>
        <input type="date" name="checkin" id="checkin">
        <br>

        <label for="end_date">Checkout:</label>
        <input type="date" name="checkout" id="checkout">
        <br>

        <label for="room_name">部屋名</label>
        <select name="room_name">
            <option value="101号室">101号室</option>
            <option value="102号室">102号室</option>
            <option value="103号室">103号室</option>
        </select>
        <br>

        <input type="submit" value="登録" class="form-control-sm">
    </form>
@endsection
