@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['method' => 'POST', 'route' => 'category.update']) !!}
    @csrf
    <div class="mb-3">
        {!! Form::label('id', 'Id') !!}
        {{ Form::number('id', $category->id, ['class' => 'form-control', 'disabled' => true]) }}
        {{ Form::number('id', $category->id, ['class' => 'form-control', 'hidden' => true]) }}
        @if ($errors->has('id'))
            <span class="text-danger">{{ $errors->first('id') }}</span>
        @endif
    </div>
    <div class="mb-3">
        {!! Form::label('name', 'Name') !!}
        {{ Form::text('name', $category->name, array_merge(['class' => 'form-control'])) }}
        @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
    </div>
    <div class="mb-3">
        {!! Form::label('slug', 'Slug') !!}
        {{ Form::text('slug', $category->slug, array_merge(['class' => 'form-control'])) }}
        @if ($errors->has('slug'))
            <span class="text-danger">{{ $errors->first('slug') }}</span>
        @endif
    </div>
    <div class="mb-3">
        {!! Form::label('priority', 'Priority') !!}
        {{ Form::text('priority', $category->priority, array_merge(['class' => 'form-control'])) }}
        @if ($errors->has('priority'))
            <span class="text-danger">{{ $errors->first('priority') }}</span>
        @endif
    </div>
    <div class="mb-3">
        {!! Form::label('flag', 'Flag') !!}
        {{ Form::text('flag', $category->flag, array_merge(['class' => 'form-control'])) }}
        @if ($errors->has('flag'))
            <span class="text-danger">{{ $errors->first('flag') }}</span>
        @endif
    </div>
    <div class="mb-3">
        {!! Form::label('alpha2', 'Alpha2') !!}
        {{ Form::text('alpha2', $category->alpha2, array_merge(['class' => 'form-control'])) }}
        @if ($errors->has('alpha2'))
            <span class="text-danger">{{ $errors->first('alpha2') }}</span>
        @endif
    </div>
    <div class="modal-footer">
        {!! Form::button('Close', ['class' => 'btn btn-secondary', 'data-bs-dismiss' => 'modal']) !!}
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection
