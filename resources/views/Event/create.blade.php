@extends('app')
@section('content')

		
		<h1> Add Picture</h1>
        <form action="addPicture" method="post" enctype="multipart/form-data">
            <input type="text" name="title" />
            <input type="file" name="filefield">
            <input type="submit">
        </form>


@endsection