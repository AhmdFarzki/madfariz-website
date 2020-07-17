@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Portfolio</h1>

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
            <form action="{{ route('achievement.update', $item->id)}} " method="POST" enctype="multipart/form-data">

                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="photo">Image</label>
                    <input type="file" class="form-control" name="photo" placeholder="Image">
                </div>
                <div class="form-group">
                    <label for="name">Nama Achievement</label>
                    <input type="text" class="form-control" name="name" placeholder="Nama Achievement"
                    value="{{ $item->name }}">
                </div>
                <div class="form-group">
                    <label for="organizer">Penyelenggara</label>
                    <input type="text" class="form-control" name="organizer" placeholder="Penyelenggara"
                    value="{{ $item->organizer }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" rows="10"
                        class="d-block w-100 form-control">{{ $item->description }} </textarea>
                </div>
                <div class="form-group">
                    <label for="date_competition">Tanggal</label>
                    <input type="text" class="form-control" name="date_competition" placeholder="Tanggal"
                    value="{{ $item->date_competition }}">
                </div>
                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" class="form-control" name="link" placeholder="Link"
                    value="{{ $item->link }}">
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
