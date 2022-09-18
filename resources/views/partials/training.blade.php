@php
$key = time();
@endphp
<div class="row mt-2 training_form" id="{{ $key }}">
    <div class="col-md-6">
        <label for="result" class="form-label">Name</label>
        <input type="result" class="form-control" name="result">
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-8">
                <label for="result" class="form-label">Details</label>
                <input type="text" class="form-control" name="result">
            </div>
            <div class="col-md-4 mt-4">
                <button type="button" class="mt-2 btn btn-sm btn-danger float-end training-form-btn"
                    data-key="{{ $key }}">X</button>
            </div>
        </div>
    </div>
</div>
