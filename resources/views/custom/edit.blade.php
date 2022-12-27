@extends('layouts.main')

@section('title','База - Изменить')

@section('content')
<div class="row">
  <div class="card card-warning col-sm-12">
    <div class="card-header">
      <h3 class="card-title">Изменить запись</h3>
    </div>

    <div class="card-body col-sm">
      <form method="POST" action="{{ route('custom.update', $item->id) }}">
        @method('PUT')
        @csrf
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
             
              <label>Название базы</label>
              @error('name')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <textarea name="name" class="form-control">{{$item->name}}</textarea>
            </div>
          </div>
        </div>
        <button class="btn btn-success" type="submit">Edit запись</button>
      </form>
    </div>
    
    </div>
</div>
<!-- /.row -->
@endsection