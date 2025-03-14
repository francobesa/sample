<!-- content.blade.php -->
@extends('template.main')

@section('content')

<!-- rounded rectangle style -->
<style>
    .rounded-header {
        border-radius: 10px;
        background-color: #351F0C;
        padding: 10px;
        color: #F5F4F3;
    }
</style>

<!-- Header Row -->
<div class="row d-flex justify-content-center">
    <div class="col-md-9 col-lg-12 col-xl-12 text-center grid-item fw-bold fs-3 rounded-header">
        Things
    </div>
</div>

<!-- Table for category -->
<table class="table">
    <thead>
        <tr>
            <th>Item Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($things as $thing)
        
        <tr>
            <td>{{$thing->thing_name}}</td>
            <td>{{$thing->asset->asset_name}}</td> 
            <td>${{ number_format($thing->price, 2) }}</td>
            <td>{{$thing->qty}}</td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection
