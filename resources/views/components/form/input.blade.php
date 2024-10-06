@if($label)
<label for="{{ $name }}">
    {{ $label }}
</label>
@endif

<input
    type="{{ $type }}"
    class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}"
    name="{{ $name }}"
/>
@error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror