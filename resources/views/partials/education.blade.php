@php
$key = time();
@endphp
<div class="row mt-2 education_form" id="{{ $key }}">
    <div class="col-md-3">
        <label for="exam" class="form-label">Exam Name</label>
        <select id="exam" name="exam" class="form-select">
            <option selected>Choose...</option>
            @foreach ($exams as $exam)
                <option value="{{ $exam['id'] }}">{{ $exam['name'] }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-3">
        <label for="university" class="form-label">University Name</label>
        <select id="university" name="university" class="form-select">
            <option selected>Choose...</option>
            @foreach ($universities as $university)
                <option value="{{ $university['id'] }}">{{ $university['name'] }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-3">
        <label for="board" class="form-label">Board Name</label>
        <select id="board" name="board" class="form-select">
            <option selected>Choose...</option>
            @foreach ($boards as $board)
                <option value="{{ $board['id'] }}">{{ $board['name'] }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-3">
        <div class="row">
            <div class="col-md-8">
                <label for="result" class="form-label">Result</label>
                <input type="text" class="form-control" name="result">
            </div>
            <div class="col-md-4 mt-4">
                <button type="button" class="mt-2 btn btn-sm btn-danger float-end education-form-btn"
                    data-key="{{ $key }}">X</button>
            </div>
        </div>
    </div>
</div>
