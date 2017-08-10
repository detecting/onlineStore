@extends('admin.layout.admin')
@section('content')
    <h3>Add Product</h3>
    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            {{--file=true 为了保证文件能估上传--}}
            {{ Form::open(['route'=>'product.store','method'=>'post','file'=>true]) }}

            <div class="form-group">
                {{form::label('name','Name')}}
                {{ form::text('name',null,array('class'=>'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('description','Description') }}
                {{ Form::text('description', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('size', 'Size') }}
                {{ Form::select('size', ['small'=>'Small','medium'=>'Medium','large'=>'Large'], null,array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('category_id', 'Categories') }}
                {{ Form::select('category_id', $categories, null,array('class' => 'form-control','placeholder'=>'Select Categories')) }}
            </div>

            <div class="form-group">
                {{ form::label('image','Image') }}
                {{ form::file('image',array('class'=>'form-control')) }}
            </div>

            {{ form::submit('Create',array('class'=>'btn btn-default')) }}
            {!! Form::close() !!}

        </div>
    </div>

@endsection