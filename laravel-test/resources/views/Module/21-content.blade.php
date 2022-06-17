<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

     @if (isset($categories))
     <div class="type-21">
        <div class="category">
            <h5>Category</h5>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#SaveModal" data-bs-whatever="@mdo">+</button>
            @include('module/saveModal')
        </div>
        @foreach ($categories as $item)
        <div class="container">
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="category-id" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ $item->name}}
                </button>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#EditModal" data-bs-whatever="@mdo">Edit</button>
                @include('module/EditModal')
                {{-- <ul class="dropdown-menu" aria-labelledby="category-id">
                    <li><button class="dropdown-item" type="button">Action</button></li>
                    <li><button class="dropdown-item" type="button">Another action</button></li>
                    <li><button class="dropdown-item" type="button">Something else here</button></li>
                </ul> --}}
            </div>
        </div>
    </div>
     @endforeach
    @endif
    

