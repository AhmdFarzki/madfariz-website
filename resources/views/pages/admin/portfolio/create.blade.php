@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Portfolio</h1>

    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }} </li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card-shadow">
        <div class="card-body">
            <form action="{{ route('portfolio.store')}} " method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="photo">Image</label>
                    <input type="file" class="form-control" name="photo" placeholder="Image">
                </div>
                <div class="form-group">
                    <label for="name">Nama Portfolio</label>
                    <input type="text" class="form-control" name="name" placeholder="Nama Portfolio"
                        value="{{ old('name')}}">
                </div>
                <div class="form-group">
                    <label for="category">Kategori</label>
                    <select class="form-control" name="category" id="exampleFormControlSelect1">
                        <option>Website</option>
                        <option>Application</option>
                        <option>Design</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" rows="10"
                        class="d-block w-100 form-control">{{ old('description')}} </textarea>
                </div>
                <div class="form-group">
                    <label for="teknologi">Teknologi</label>
                    <input type="text" class="form-control" name="teknologi" placeholder="Teknologi"
                        value="{{ old('teknologi')}}">
                </div>




                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
