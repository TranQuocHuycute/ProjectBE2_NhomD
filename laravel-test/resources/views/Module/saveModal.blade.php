<div class="modal fade" id="SaveModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                {!! Form::open(['method' => 'POST', 'route' => 'category.add']) !!}
                @csrf
                {!! Form::label('name', 'Description') !!}
                <div class="mb-3">
                    {!! Form::label('name', 'Name') !!}
                    {{ Form::text('name', '', array_merge(['class' => 'form-control'])) }}
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    {!! Form::label('name', 'Slug') !!}
                    {{ Form::text('slug', '', array_merge(['class' => 'form-control'])) }}
                    @if ($errors->has('slug'))
                        <span class="text-danger">{{ $errors->first('slug') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    {!! Form::label('name', 'Priority') !!}
                    {{ Form::text('priority', '', array_merge(['class' => 'form-control'])) }}
                    @if ($errors->has('prority'))
                        <span class="text-danger">{{ $errors->first('prority') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    {!! Form::label('name', 'Flag') !!}
                    {{ Form::text('flag', '', array_merge(['class' => 'form-control'])) }}
                    @if ($errors->has('flag'))
                        <span class="text-danger">{{ $errors->first('flag') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    {!! Form::label('name', 'Alpha') !!}
                    {{ Form::text('alpha2', '', array_merge(['class' => 'form-control'])) }}
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

        </div>
    </div>
</div>
