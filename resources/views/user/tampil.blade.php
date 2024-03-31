@extends('template')
@section('main')
    <h1>User</h1>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama User</th>
                <th scope="col">Email</th>
                <th scope="col">Hak Akses</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <form action="{{ route('user.update', $item->id) }}" method="POST" class="row">
                            @csrf
                            @method('put')
                            <div class="form-group col-6">
                                <select class="form-control" name="role">
                                    <option value="user" @selected($item->role == 'user')>User</option>
                                    <option value="editor" @selected($item->role == 'editor')>Editor</option>

                                </select>
                            </div>
                            <div class="form-group col-6">
                                <button type="submit" class="btn btn-success ">Simpan</button>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
