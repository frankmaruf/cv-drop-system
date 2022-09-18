<select id="thana" name="thana" class="form-select">
    <option selected>Choose...</option>
    @foreach ($data as $item)
        <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
    @endforeach
</select>
