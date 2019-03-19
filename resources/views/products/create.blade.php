@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    {!! Form::model($item, [
                    'method' => 'POST',
                    'route'  => 'products.store',
                    'id' => 'product-form'
                ]) !!}

                    @include('products.form')

                    {!! Form::close() !!}




                </div>
            </div>
        </div>
    </div>
@endsection
