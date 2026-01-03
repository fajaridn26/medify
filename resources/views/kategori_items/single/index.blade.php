@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-group mb-2">
                    <a href="{{ url('kategori-items') }}" class="btn btn-secondary">Kembali ke Daftar Item</a>
                </div>
                <div class="card">
                    <div class="card-header">Kategori Item</div>

                    <div class="card-body">
                        <table>
                            <tr>
                                <th>Kode</th>
                                <td>:</td>
                                <td>{{ $data->kode }}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>:</td>
                                <td>{{ $data->nama }}</td>
                            </tr>
                        </table>
                        <a class="btn btn-info" href="{{ url('kategori-items/form/edit') }}/{{ $data->id }}">Edit</a>
                        <a class="btn btn-danger" href="{{ url('kategori-items/delete') }}/{{ $data->id }}"
                            onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                        <a class="btn btn-success" href="{{ route('kategori-items.export.pdf', $data->kode) }}">
                            Export PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
