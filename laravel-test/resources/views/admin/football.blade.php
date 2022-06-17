@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <!-- message -->
                <div class="card-body">
                    @if (session('message'))
                    <div class="alert alert-success" role="alert">

                        {{ session('message') }}

                    </div>
                    @endif
                </div>

                <div class="card-body">
                    <div class="update-football">
                        <a href="{{ route('tournaments.update') }}">
                            <button type="button" class="btn btn-success">Cập nhật giải đấu</button>
                        </a>
                        <a href="{{ route('categories.update') }}">
                            <button type="button" class="btn btn-success">Cập nhật quốc gia</button>
                        </a>
                        <a href="{{ route('tournaments.delete-all') }}">
                            <button type="button" class="btn btn-danger">Xoá tất cả giải đấu</button>
                        </a>
                        <a href="#">
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#delete">Xoá một giải đấu</button>
                        </a>
                        <a href="#">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">Thêm giải đấu</button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- <div class="card">
                <ul class="list-group">
                    @if ( isset($categories) )
                    @foreach ($categories[0] as $category)
                    <li class="list-group-item">
                        {{ $category->name }}
                    </li>
                    @endforeach
                    @endif
                </ul>
            </div> -->

            <div class="card">
                <ul class="list-group">
                    @if ( isset($categories) )
                    @foreach ($categories[1] as $tournament)
                    <li class="list-group-item">
                        {{ $tournament->name }} <button type="button" class="btn btn-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#edit-parent">sửa giải đấu</button>
                    </li>
                    <!-- Modal sua -->
                    <div class="modal fade" id="edit-parent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Sửa giải đấu</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ url('tournaments/edit') }}" method="POST" id="edit">
                                        @csrf
                                        @method('PUT')

                                        <div class="form-group mb-3">
                                            <label for="">Tournaments Name</label>
                                            <input type="text" name="name" value="{{$tournament->name}}" class="form-control">
                                            <input type="text" name="cid" value="{{$tournament->category}}" hidden>
                                            <input type="text" name="version" value="{{$tournament->version}}" hidden>
                                            <input type="text" name="id" value="{{$tournament->id}}" hidden>
                                        </div>

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" form="edit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- modal -->
<!-- Button trigger modal -->

<!-- Modal add -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('tournaments.add') }}" method="get">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm giải đấu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="name" class="form-label">Tên</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <select class="form-select" name="cid" multiple aria-label="multiple select example">
                        <option selected value="0">Open this select menu</option>
                        @if ( isset($categories) )
                        @foreach ($categories[0] as $category)
                        <option value="{{ $category->cid }}">{{ $category->name }}</option>
                        @endforeach
                        @endif

                    </select>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal xoá -->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Xoá giải đấu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    @if ( isset($categories) )
                    @foreach ($categories[1] as $tournament)
                    <li class="list-group-item">
                        {{ $tournament->name }}

                        <a href="{{ route('tournaments.delete') }}?id={{ $tournament->id }}">
                            <button type="button" class="btn btn-danger">Xoá giải đấu</button>
                        </a>
                    </li>
                    @endforeach
                    @endif
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

@endsection