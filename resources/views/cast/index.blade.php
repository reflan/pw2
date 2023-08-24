@extends('layout.master')

@section('judul')
	Daftar Cast
@endsection

@section('content')

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Umur</th>
        <th scope="col">Bio</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($cast as $key => $item)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->umur}}</td>
            <td>{{$item->bio}}</td>
            <td>
                &nbsp;
            </td>
        </tr>
        @empty
            <h2>Data tidak ada</h2>
        @endforelse
    </tbody>
  </table>
@endsection
