<select id="district" name="district" class="form-select" data-url="{{ route('partials.thana') }}">
    <option selected>Choose...</option>
    @foreach ($data as $item)
        <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
    @endforeach
</select>
