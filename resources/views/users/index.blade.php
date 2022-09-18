@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase mb-0">Manage Users</h5>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap user-table mb-0">
                      <thead>
                        <tr>
                          <th scope="col" class="border-0 text-uppercase font-medium pl-4">#</th>
                          <th scope="col" class="border-0 text-uppercase font-medium">Name</th>
                          <th scope="col" class="border-0 text-uppercase font-medium">Added</th>
                          <th scope="col" class="border-0 text-uppercase font-medium">Download CV</th>
                          <th scope="col" class="border-0 text-uppercase font-medium">Action</th>
                          <th scope="col" class="border-0 text-uppercase font-medium">More</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td class="pl-4">{{ $user['id'] }}</td>
                          <td>
                              <h5 class="font-medium mb-0">{{ $user['name'] }}</h5>
                          </td>
                          <td>
                              <h5 class="font-medium mb-0">{{ $user['created_at'] }}</h5>
                          </td>
                          <td>
                              <span class="text-muted"><a class="btn btn-outline-info btn-circle btn-lg btn-circle" href="{{ $user['cv'] }}" target="_">Download CV</a></span><br>
                          </td>
                          <td>
                              <span class="text-muted"><a class="btn btn-outline-info btn-circle btn-lg btn-circle" href="{{ route('users.delete', $user['id']) }}">Delete</a></span><br>
                          </td>
                          <td>
                              <span class="text-muted"><a class="btn btn-outline-info btn-circle btn-lg btn-circle" href={{ route('users.show', $user['id']) }}>Show More</a></span><br>
                          </td>
                          <td>
                            </tr>
                            @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>

    @endsection