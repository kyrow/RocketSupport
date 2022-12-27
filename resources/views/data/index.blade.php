@extends('layouts.main')

@section('title', 'Свое поле ' . $item->name)



@section('content')
    <div class="row">
        @if (session('message'))
            <div class="alert alert-success col-12">
                {{ session('message') }}
            </div>
        @endif
        <div class="col-6">
            <a href="{{ route('data.create', $id) }}" class="btn btn-success">Добавить поле</a>
        </div>

        <div class="row col-sm-12 mt-4">

            @foreach ($datas as $data)
                @if ($data->type == 1)
                    <div
                        class="
            @if ($data->size == 'S') col-sm-4
            @elseif($data->size == 'M')
            col-sm-6
            @elseif($data->size == 'L')
            col-sm-8
            @elseif($data->size == 'XL')
            col-sm-12 @endif
          ">
                        <div class="card card-outline card-warning">
                            <div class="card-header">
                                <h3 class="card-title">{{ $data->name }}</h3>
                                <div class="card-tools">
                                    <form style="display: inline" action="{{ route('data.destroy', $data->id) }}"
                                        method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-delete"><i
                                                class="far fa-trash-alt"></i></button>
                                    </form>
                                </div>
                            </div>

                            <div class="card-body">
                                <p>{{ $data->value }}</p>
                            </div>

                        </div>
                    </div>
                @else
                    <div
                        class="
          @if ($data->size == 'S') col-sm-4
          @elseif($data->size == 'M')
          col-sm-6
          @elseif($data->size == 'L')
          col-sm-8
          @elseif($data->size == 'XL')
          col-sm-12 @endif
          ">
                        <div class="card card-outline card-warning">
                            <div class="card-header">
                                <h3 class="card-title">{{ $data->name }}</h3>
                                <div class="card-tools">
                                    <form style="display: inline" action="{{ route('data.destroy', $data->id) }}"
                                        method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-delete"><i
                                                class="far fa-trash-alt"></i></button>
                                    </form>
                                </div>
                            </div>


                            <div class="card-body">

                                <input name="date-range" value="{{ $data->date_range }}" type="text"
                                    class="form-control">
                            </div>

                        </div>
                    </div>
                @endif
            @endforeach





        </div>
    </div>
    <!-- /.row -->
@endsection
