@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                    <tr>

                        <th width="120">Product Name</th>
                        <th width="120">Description</th>
                        <th width="200">Product + description</th>
                        <th>price * quatity</th>
                        <th>Date</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)

                        <tr>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->full_name }}</td>
                            <td>{{ $product->total_cost }}</td>
                            <td>{{ $product->reporting_date }}</td>

                        </tr>

                    @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
@endsection
