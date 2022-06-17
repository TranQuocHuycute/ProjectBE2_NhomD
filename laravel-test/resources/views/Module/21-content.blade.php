
@if (isset($categories))
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="type-21">
        <div class="category" style="display: flex">
            <h5>Category</h5>
            <button type="button" class="create" data-bs-toggle="modal" data-bs-target="#SaveModal"
                data-bs-whatever="@mdo"><i class="fa-solid fa-plus"></i></button>
            @include('module/saveModal')
        </div>
        @foreach ($categories as $category)
            <div class="item me-2">
                <div class="dropdown">
                    <div class="category-name">
                        <button class="btn dropdown-toggle fs-7" type="button" id="category-id" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ $category->name }}
                        </button>
                    </div>
                    <div class="edit-delete">
                        <a type="button" href="{{ route('category.edit', ['id' => $category->id]) }}"
                            class="btn btn-outline-primary fs-7"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a type="button" href="{{ route('category.delete', ['id' => $category->id]) }}"
                            class="btn btn-outline-danger ms-3 fs-7"><i class="fa-solid fa-trash-can"></i></a>
                    </div>

                </div>
            </div>
        @endforeach
    </div>

@endif
