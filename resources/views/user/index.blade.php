@extends('layouts.app')


@section('content')
    @if(isset($user))
        <table border="1">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Handing</th>
            </thead>
            <tbody>
                @foreach ($user as $item)
                    <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>
                        @foreach ($item->roles as $value)
                            {{$value->display_name}}
                        @endforeach
                    </td>
                    <td>
                        <a href="{{route('user.edit',$item->id)}}"><button type="button">Edit</button></a>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
