@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form action="{{route('update.transaction',['id'=>$transaction->id])}}" method="POST">
            @csrf
            <input type="text" name="location" placeholder="Location" value="{{$transaction->location}}" class="form-control">
            <input type="text" name="type" placeholder="type" value="{{$transaction->type}}" class="form-control">
            <input type="number" name="amount" placeholder="amount" value="{{$transaction->amount}}" class="form-control">
            <input type="date" name="date" placeholder="date" value="{{$transaction->date}}" class="form-control">
            <input type="time" name="time" placeholder="time" value="{{$transaction->time}}" class="form-control">
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>

</div>
@endsection