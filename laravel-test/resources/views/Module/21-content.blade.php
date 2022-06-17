@if (isset($categories))
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="type-21">
        <div class="category">
            <h5>Category</h5>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#SaveModal"
                data-bs-whatever="@mdo">+</button>
            @include('module/saveModal')
        </div>
        @foreach ($categories as $category)
            <div class="container">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="category-id" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ $category->name }}
                    </button>
                    <a type="button" href="{{ route('category.edit', ['id' => $category->id]) }}"
                        class="btn">Edit</a>
                    <a type="button" href="{{ route('category.delete', ['id' => $category->id]) }}"
                        class="btn">Delete</a>
                </div>
            </div>
    </div>
@endforeach
@endif
