@extends('layouts.app')


@section('content')
    @if(isset($user))
    <form action="{{route('user.update',$user->id)}}" method="POST">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <table border="1">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Handing</th>
            </thead>
            <tbody>
                    <tr>
                    <td>
                        <input type="text" name="name" value="{{$user->name}}">
                    </td>
                    <td>
                        <input type="email" name = "email" value="{{$user->email}}" readonly>
                    </td>
                    <td>
                        <input type="checkbox" name="roles[]" value="super_admin" {{Auth::user()->hasRole('super_admin') ? 'checked' : ''}}>Super Admin
                        <input type="checkbox" name="roles[]" value="user" {{Auth::user()->hasRole('user') ? 'checked' : ''}}> User
                    </td>
                    <td>
                        <button type="submit">Update</button>
                    </td>
                    </tr>
            </tbody>
        </table>
    </form>
    @endif
@endsection
