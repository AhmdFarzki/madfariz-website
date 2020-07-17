@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Achievement</h1>
        <a href="{{ route('achievement.create')}} " class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"> Tambah Achievement</i>
        </a>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" collspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Gambar</th>
                            <th>Nama Prestasi</th>
                            <th>Penyelenggara</th>
                            <th>Tanggal</th>
                            <th>Deskripsi</th>
                            <th>Link</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                        <tr>
                            <td>{{ $item->id }} </td>
                            <td>
                                <img src="{{ Storage::url($item->photo) }} " alt="" style="width: 150px"
                                    class="img-thumbnail" />
                            </td>
                            <td>{{ $item->name }} </td>
                            <td>{{ $item->organizer }} </td>
                            <td>{{ $item->date_competition }} </td>
                            <td>{{ $item->description }} </td>
                            <td>{{ $item->link }}</td>
                            <td>
                                <a href="{{ route('achievement.edit', $item->id) }} " class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('achievement.destroy', $item->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>

                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                Data Kosong
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->
@endsection
