@extends('layouts.app')

@section('content')
    @if (count($users)>0)
    <table>
        <tr>
            <th>User ID</th>
            <th>User Image</th>
            <th>User Name</th>
            <th>Download CV</th>
            <th>Action</th>
            <th>More</th>
        </tr>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th>{{ $user['id'] }}</th>
                <th><img width="50px" src="{{ $user['picture'] }}"/></th>
                <th>{{ $user['name'] }}</th>
                <th><a href="{{ $user['cv'] }}">CV</a></th>
                <th><a href="{{ route('users.delete', $user['id']) }}" class="btn btn-info" id="confirm_delete">
                    Delete
                </a></th>
                <th><a href="{{ route('users.show', $user['id']) }}">Show More</a></th>
                </tr>
                @endforeach
        </tbody>
    </table>
    @else
        We don't have any records !
    @endif
@endsection
