@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Create New User
        </div>
        <div class="card-body">
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <form class="row g-3" method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <label for="name" class="form-label">Name</label>
                    <input type="name" class="form-control" name="name" id="name">
                </div>
                <div class="col-md-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="col-md-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="col-12">
                    <label for="address" class="form-label">Mailing Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St">
                </div>
                <div class="col-md-4">
                    <label for="division" class="form-label">Division</label>
                    <select id="division" name="division" class="form-select" data-url="{{ route('partials.district') }}">
                        <option selected>Choose...</option>
                        @foreach ($data as $item)
                            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="district" class="form-label">District</label>
                    <select id="district" name="district" class="form-select" data-url="null">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="thana" class="form-label">Thana</label>
                    <select id="thana" name="thana" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="details" class="form-label">Details</label>
                    <input name="details" type="text" class="form-control" id="details" placeholder="Tell us about your self">
                </div>
                <div class="col-md-12">
                    <p class="mr-3">Language </p>
                    <div class="form-check-inline">
                        <input class="form-check-input" name="language[]" type="checkbox" value="bangla" id="bangla">
                        <label class="form-check-label" for="bangla">
                            Bangla
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="checkbox" name="language[]" value="english" id="english"
                            checked>
                        <label class="form-check-label" for="english">
                            English
                        </label>
                    </div>
                </div>
                <div class="card p-0">
                    <div class="card-header">
                        Education Qualifiaction
                        <button type="button" id="add_education_btn" class="btn btn-sm btn-primary float-end"
                            data-url="{{ route('partials.education') }}">Add</button>

                    </div>
                    <div class="card-body" id="education_body">
                        <span id="education_body_no"> No Education </span>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="picture" class="form-label">Photo</label>
                    <input class="form-control" name="picture" type="file" id="picture">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="cv" class="form-label">CV</label>
                    <input class="form-control" name="cv" type="file" id="cv">
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" id="training_check" name="language" type="checkbox" value="bangla"
                        id="bangla">
                    <label class="form-check-label" for="bangla">
                        Has Training?
                    </label>
                </div>
                <div class="card p-0 d-none" id="training_card_base">
                    <div class="card-header">
                        Training Information
                        <button type="button" id="add_training_btn" class="btn btn-sm btn-primary float-end"
                            data-url="{{ route('partials.training') }}">Add</button>

                    </div>
                    <div class="card-body" id="training_body">
                        <span id="training_body_no"> No Training </span>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" id="submit_data" class="btn btn-primary float-end">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection
