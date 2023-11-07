@extends('layouts.app')

@section('content')
<div class="container">
    <a type="button" class="btn btn-primary" href="{{route('create.transaction')}}">Add New</a>
    <div class="row justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Location</th>
                    <th scope="col">Type</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Tool</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $item)
                <tr>
                    <td>{{$item->location}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->amount}}</td>
                    <td>{{$item->date}}</td>
                    <td>{{$item->time}}</td>
                    <td>
                        <a class="btn btn-warning" href="{{route('edit.transaction',['id'=>$item->id])}}">Edit</a>
                        <a class="btn btn-danger" href="{{route('delete.transaction',['id'=>$item->id])}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection