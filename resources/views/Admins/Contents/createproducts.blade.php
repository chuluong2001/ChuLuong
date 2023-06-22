<!-- header -->
@INCLUDE('Admins.Layouts.header')

<!-- Sidebar -->
@INCLUDE('Admins.Layouts.sidebar')

<!-- Topbar -->
@INCLUDE('Admins.Layouts.topbar')

{{-- @section('content_index') --}}
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Manage Products</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Create Products</li>
            </ol>
            @if (session('msg'))
                <div class="alert alert-success">{{session('msg')}}</div>
            @endif
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for=""> Name Proudct </label>
                    <input type="text" class="form-control" name="name" placeholder="Name Proudct ...">
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Description ..." >
                </div>
                <div class="mb-3">
                    <label for=""> Price </label>
                    <input type="text" class="form-control" name="price" placeholder="Price ...">
                </div>
                <div class="mb-3">
                    <label for="imageInput">Image</label>
                    <div class="input-group">
                        <label class="input-group-text" for="imageInput"><input type="file" id="imageInput" name="image" accept="image/*"></label>
                    </div>
                </div>                
                <div class="mb-3">
                    <label for=""> Quantity </label>
                    <input type="text" class="form-control" name="quantity" placeholder="Quantity ...">
                </div>
                {{-- <div class="mb-3">
                    <label for=""> Category ID </label>
                    <input type="text" class="form-control" name="category_id" placeholder="Category ID ...">
                </div> --}}
                <button type="submit" class="btn btn-info"> Create </button>
                <a href="{{asset('Admins/Products/manageproducts')}}" class="btn btn-warning">back</a>

            </form>
        </div>
    </main>
</div>
{{-- @endsection --}}

<!-- footer -->
@INCLUDE('Admins.Layouts.footer')

<!-- back to top -->
@INCLUDE('Admins.Layouts.back_to_top')

<!-- logout -->
@INCLUDE('Admins.Layouts.logout')

<!-- JS -->
@INCLUDE('Admins.Layouts.js')