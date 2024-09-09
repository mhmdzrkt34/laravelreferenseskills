@extends("layouts.applayout")
@section("scripts")


@endsection
@section("styles")


@endsection


@section("content")


@foreach($posts as $post)


<x-post-component :post="$post"/>

@endforeach


@endsection