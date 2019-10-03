@extends('layouts.app')

@section('content')
@if(Laratrust::canAndOwns('destroy-post', $category))
	<h2>Can destroy this post</h2>
@endif
<form action="{{route('category.update',$category->category_id)}}" method="POST">
	{{method_field('PUT')}}
	{{csrf_field()}}
	<table border="1">
		<thead>
			<th>Title</th>
			<th>Content</th>
			<th>Handing</th>
		</thead>
		<tbody>
				<tr>
					<td>
						<input type="text" name="title" value = "{{$category->title}}">
					</td>
					<td>
						<input type="text" name="content" value = "{{$category->content}}">
					</td>
					<td>
						<button type="submit">Update</button>
					</td>
				</tr>
		</tbody>
	</table>
</form>
@stop
