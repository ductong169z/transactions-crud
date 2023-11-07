@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form action="{{route('store.transaction')}}" method="POST">
            @csrf
            <input type="text" name="location" placeholder="Location" class="form-control">
            <input type="text" name="type" placeholder="type" class="form-control">
            <input type="number" name="amount" placeholder="amount" class="form-control">
            <input type="date" name="date" placeholder="date" class="form-control">
            <input type="time" name="time" placeholder="time" class="form-control">
            <button type="submit" class="btn btn-primary">Create</button>
        </form>

    </div>

</div>
@endsection