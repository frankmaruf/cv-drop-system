@extends('layouts.app')

@section('content')
<div class="container">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="http://{{ $hostname }}/{{ $user['picture'] }}" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{ $user['name'] }}</h4>
                      <p class="text-muted font-size-sm">{{ $user['details'] }}</p>
                      <a href="mailto:{{ $user['email'] }}" class="btn btn-primary">{{ $user['email'] }}</a>
                      <a class="btn btn-outline-primary" target="_" href="http://{{ $hostname }}/{{ $user['cv'] }}">Download CV</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $user['name'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Divisioin</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $division }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">District</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $district }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Thana</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $thana }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Exam</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $exam }}
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">University</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $university }}
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Board</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $board }}
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Result</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $result }}
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Language</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <select class="form-control category-select">
                      @foreach ($user_language as $language)
                      <option>{{ $language }}</option>
                  @endforeach   
                    </select>
                  </div>
                  </div>
                  <hr>
                  
                </div>
              </div>

            

            </div>
          </div>

        </div>
    </div>
    @endsection