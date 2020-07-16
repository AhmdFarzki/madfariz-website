@extends('layouts.admin')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Skills</h1>
    
        </div>

        @if  ($errors->any())
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
            <form action="{{ route('skill.update', $item->id)}} " method="POST" enctype="multipart/form-data">

            @method('PUT')
            @csrf
            
            <div class="form-group">
              <label for="photo">Image</label>
              <input type="file" class="form-control" name="photo" placeholder="Image">
            </div>
            <div class="form-group">
              <label for="name">Nama Skill</label>
              <input type="text" class="form-control" name="name" placeholder="Nama Skill" value="{{ $item->name }}">
            </div>
            <div class="form-group">
              <label for="category">Kategori</label>
              <select class="form-control" name="category" id="exampleFormControlSelect1">
                <option>Programming</option>
                <option>Design</option>
              </select>
            </div>
            <div class="form-group">
              <label for="level">Level</label>
              <select class="form-control" name="level" id="exampleFormControlSelect1">
                <option>Basic</option>
                <option>Intermediate</option>
                <option>Advance</option>
              </select>
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