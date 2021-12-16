@extends('layouts.master');
@section('content')

<div class="container mt-5">
    <div class="row d-flex ">
        <div class="col-6 m-auto ">
 <table class="table table-dark table-hover">
    <tr>
 
    <th>name</th>
    </tr>

    @foreach($products as $product)
    <tr>
        <td>{{$product}}</td>
    </tr>
    @endforeach
</table>
</div>
</div>
</div>
@endsection