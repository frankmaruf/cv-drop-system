@extends('layouts.app')

@section('content')
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Divisioin</th>
            <th>district</th>
            <th>thana</th>
            <th>university</th>
            <th>board</th>
            <th>result</th>
            <th>languages</th>
            <th>Image</th>
            <th>CV</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            
            <th>{{ $user['name'] }}</th>
            <th>{{ $division }}</th>
            <th>{{ $district }}</th>
            <th>{{ $thana }}</th>
            <th>{{ $exam }}</th>
            <th>{{ $university }}</th>
            <th>{{ $board }}</th>
            <th>{{ $result }}</th>
            <th><select>
        @foreach ($user_language as $language)
                <option>{{ $language }}</option>
            @endforeach   
            </select></th>
            <th>
                <img src="http://{{ $hostname }}/{{ $user['picture'] }}" width="50px"/>
            </th>
            <th>
                <a target="_" href="http://{{ $hostname }}/{{ $user['cv'] }}">Download</a>
            </th>
        </tr>
    </tbody>
</table>
@endsection