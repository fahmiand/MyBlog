@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Item {{ auth()->user()->name }}</h1>
</div>

<div class="table-responsive col-lg-10">
    @can('admin')
    <a href="/items/create" class="btn btn-primary">Create new items</a>
    @endcan
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">nama</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>
                        <a href="/items/{{ $item->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                        <form action="/items/{{ $item->slug }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Apakah kamu yakin?')"><span data-feather="x-circle"></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection