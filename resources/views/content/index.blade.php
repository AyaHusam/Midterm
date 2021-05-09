@extends('layouts.app');
@extends('layouts.layout')
@section('header')
<div class="container">

    <div>
        <h3>Please enter you name: </h3>
        <form class="form-inline" method="post" action="my_name">
            <input type="hidden" name="_token" value="ZTp076smOAQZQcLjplDuaAjj9PukkjH4VJYbJlbZ" />

            <div class="form-group">
                <input type="text" class="form-control" name="name" />
            </div>
            <button type="submit" class="btn btn-primary" >Submit</button>
        </form>
        <hr>
        <h3>Hello, nobody!</h3>
    </div>
</div>
@endsection
@section('content')
<div class="container">
    <div class="row" style="margin-bottom: 20px;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h3>Products</h3>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th width="280px">Actions</th>
        </tr>
        @foreach ($contacts as $contact)
        <tr>
            <td>1</td>
            <td>{{$contact->name}}</td>
            <td>{{$contact->price}}</td>
            <td>{{$contact->Quantity}}</td>
            <td>
                <a class="btn btn-info" href="edit/{{$contact->id}}">Edit</a>

                <a class="btn btn-danger" href="delete/{{$contact->id}}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
