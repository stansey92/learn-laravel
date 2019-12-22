@extends ('layout')

{{-- this file extends the layout file (aka its dropped into the layout file)
we create a section called content to correspond with the section labeled content in the layout file, this is where the content renders --}}

@section ('content')
    <h1>Hello World</h1>
@endsection