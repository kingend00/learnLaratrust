@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <a href="{{route('post.show',Auth::user()->name)}}">All my post</a>
                </div>
            </div>
        </div>
    </div>
</div>
<form action="">
    <input type="text" name="check" id="check" value = "{{old('check') }}">
    <button id="btn" type="button">Click</button>
    <a href="/home1">Go to home</a>
</form>
<script>
    $(document).ready(function(){
        $('#btn').click(function(){
            $('#check').val('hihi');
        });
    });
</script>
@endsection
