@extends('layouts.main')

@section('content')
    
    
<div class="container">
<div class="card">
  <div class="card-body p">
    <p class="card-text">Yakin mau hapus data dari <b> {{ $users->nama }} </b></p>
    <form style="display: inline-block" action="/pengguna/{{ $users->id }}/destroy" method="post">
      @csrf
      @method('delete')
      <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
    <a href="/pengguna" class="btn btn-success">Batal</a>
  </div>
</div>
</div>


@endsection
