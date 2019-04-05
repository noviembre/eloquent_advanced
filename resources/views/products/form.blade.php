<div class="card-header">Create a new product</div>

<div class="card-body">

    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
        {!! Form::label('title') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}

        @if($errors->has('title'))
            <span class="help-block">
                {{ $errors->first('title') }}
            </span>
        @endif
    </div>

    <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
        {!! Form::label('description') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}

        @if($errors->has('description'))
            <span class="help-block">{{ $errors->first('description') }}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Enter Product Price">
    </div>
    <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="number" class="form-control" id="quantity" name="quantity"
               placeholder="Enter Product Quantity">
    </div>

    <div class="box-footer clearfix">



        <div class="pull-right">
            {!! Form::submit('Publish', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>

</div>