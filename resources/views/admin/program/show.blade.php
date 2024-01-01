@extends('admin.admin')
@section('conten')

<h2>{{ $program->nama }}</h2>

<h2>{{ $program->deskripsi }}</h2>
{!! $program->tujuan !!}
<img src=" {{ asset('storage/' . $program->cover) }} " alt="">
@foreach($program->img as $b)
<img src=" {{ asset('storage/' . $b) }} " alt="">
@endforeach
@foreach($jadwal as $j)
<h2> {{ $j->hari }} </h2>
<h2> {{ $j->jam_mulai }} - {{ $j->jam_selesai }} </h2>
<h2> {{ $j->lokasi }} </h2>

@endforeach
@endsection