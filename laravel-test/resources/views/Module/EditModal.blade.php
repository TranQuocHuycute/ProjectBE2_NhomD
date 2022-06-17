<div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                {!! Form::open(['method' => 'POST', 'route' => 'name.add']) !!}
                @csrf
                {!! Form::label('name', 'Description') !!}
                <div class="mb-3">
                    {!! Form::label('name', 'Id') !!}
                    {{ Form::text('name', $category->id, array_merge(['class' => 'form-control']))}}
                </div>
                <div class="mb-3">
                    {!! Form::label('name', 'Name') !!}
                    {{ Form::text('name', '', array_merge(['class' => 'form-control'])) }}
                    
                </div>
                <div class="mb-3">
                    {!! Form::label('name', 'Slug') !!}
                    {{ Form::text('slug', '', array_merge(['class' => 'form-control'])) }}
                    
                </div>
                <div class="mb-3">
                    {!! Form::label('name', 'Priority') !!}
                    {{ Form::text('priority', '', array_merge(['class' => 'form-control'])) }}
                    
                </div>
                <div class="mb-3">
                    {!! Form::label('name', 'Flag') !!}
                    {{ Form::text('flag', '', array_merge(['class' => 'form-control'])) }}
                    
                </div>
                <div class="mb-3">
                    {!! Form::label('name', 'Alpha') !!}
                    {{ Form::text('alpha2', '', array_merge(['class' => 'form-control'])) }}
                    
                </div>
                <div class="modal-footer">
                    {!! Form::button('Close', ['class' => 'btn btn-secondary', 'data-bs-dismiss' => 'modal']) !!}
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
