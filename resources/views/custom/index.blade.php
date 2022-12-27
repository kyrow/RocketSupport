@extends('layouts.main')

@section('title', 'Свои поля')



@section('content')
    <div class="row">
        @if (session('message'))
            <div class="alert alert-success col-12">
                {{ session('message') }}
            </div>
        @endif
        <div class="col-6">
            <a href="{{ route('custom.create') }}" class="btn btn-success">Добавить запись</a>
        </div>

        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Таблица с базами</h3>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-head-fixed ">
                        <thead>
                            <tr>
                                <th>Название</th>

                                <th>Изменить/Удалить</th>
                            </tr>
                        </thead>
                        <tbody class="sites-table">
                            @foreach ($customs as $custom)
                                <tr>
                                    <td>{{ $custom->name }}</td>

                                    <td>
                                        <a class="btn btn-success" href="{{ route('custom.edit', $custom->id) }}"><i
                                                class="fas fa-pen"></i></a>
                                        <form style="display: inline" action="{{ route('custom.destroy', $custom->id) }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-delete"><i
                                                    class="far fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
    <!-- /.row -->
@endsection
