@extends('layouts.app')
@section('content')
    @if(isset($result))
        <ul>
            @foreach($result as $value)
                {{-- <li>
                    @foreach ($value as $item)
                    <ul>
                        <li>{{$item->name}}</li>
                        <li>{{$item->content}}</li>
                        <li>{{$item->username}}</li>
                    </ul>
                    @endforeach
                </li> --}}
                        <li><h2>{{$value->name}}</h2></li>
                        <li>{{$value->content}}</li>
                        <li>{{$value->username}}</li>
            @endforeach
        </ul>
    @else
        <h1>404 Not Found</h1>
    @endif

@stop