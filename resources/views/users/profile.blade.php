@extends('layouts.app')
@section('content')

<form action="{{route('profile')}}" method="posts">
    <br>
    <input type="text" name="name" placeholder="name"><br><br>
    <input type="text" name="phone" placeholder="phone"><br><br>
    <input type="text" name="city" placeholder="city"><br><br>
    <input type="image" name="personal_picture" placeholder="personal_picture"><br><br>
    <input type="text" name="Bank_name" placeholder="Bank_name"><br><br>
    <input type="text" name="id_bank" placeholder="id_bank"><br><br>
    <input type="image" name="Map_location" placeholder="Map_location"><br><br>
    <input type="image" name="image_residence" placeholder="image_residence"><br><br>
    <button type="sumit">Submit</button>

</form>
@endsection

