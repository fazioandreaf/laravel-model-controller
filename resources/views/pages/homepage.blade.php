@extends('layouts.main_layout')
@section('content_movies')
@foreach ($movies as $item)
<div>

    {{$item['id']}}
    {{$item['title']}}
</div>
@endforeach
    {{-- {{$movies[]}} --}}
@endsection
