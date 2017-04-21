@extends('layouts.app')

@section('content')
    <hello></hello>

    <div class="row">
        <img src="{{ Storage::url($photo->image) }}" alt="" width="400px" height="400px">
    </div>




@endsection

