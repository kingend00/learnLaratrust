@extends('layouts.app')

@section('content')

	<table border="1">
		<thead>
			<th>Title</th>
			<th>Content</th>
			<th>User_id</th>
			<th>Handing</th>
		</thead>
		<tbody>
			@foreach($category as $item)
				<tr>
					<td>{{$item->title}}</td>
					<td>{{$item->content}}</td>
					<td>{{$item->user_id}}</td>
					<td>
						<a href="{{route('category.edit',$item->category_id)}}"><button>Edit</button></a>
						<a href="{{route('category.sharePer',$item->category_id)}}"><button>SharePer for User02</button></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop
