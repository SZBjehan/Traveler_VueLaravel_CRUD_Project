@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<!--  <table class="table table-bordered">
            <tr>
                <td>id</td>
                <td>name</td>
                <td>email</td>
                <td>update</td>
                <td>delete</td>
            </tr>
            @foreach($showList as $list)
            <tr>
                <td>{{$list['id']}}</td>
                <td>{{$list['name']}}</td>
                <td>{{$list['email']}}</td>
                <td><a href="/edtravellers/{{$list['id']}}">edit</a></td>

                <td><a href="/deltravellers/{{$list['id']}}">delete</a></td>   
            </tr>
            @endforeach
        </table> -->
