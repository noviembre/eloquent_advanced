@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                    <tr>

                        <td width="120">Product Name</td>
                        <td width="120">Description</td>
                        <td width="200">Product + description</td>
                        <td>price * quatity</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)

                        <tr>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->full_name }}</td>
                            <td>{{ $product->total_cost }}</td>

                        </tr>

                    @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
@endsection
