@php
    $nameAttribute = $attributes->get('name');
    $hasError = $nameAttribute && $errors->has($nameAttribute);
    $inputClass = 'form-select' . ($hasError ? ' is-invalid' : '');
@endphp

<div class="row mb-3">
    <label class="col-sm-2 col-form-label">{{ $label }}</label>
    <div class="col-sm-10">
        <select {{ $attributes->merge([
            'class' => $inputClass,
            'id' => null,
            'name' => null,
        ]) }}>
            <option selected>{{ $placeholder }}</option>
            @foreach ($options as $option)
                <option value="{{ $option['value'] }}" @if($option['selected']) selected @endif>{{ $option['label'] }}</option>
            @endforeach
        </select>

        @if ($hasError)
            <div class="invalid-feedback">
                <small>{{ $errors->first($nameAttribute) }}</small>
            </div>
        @endif
    </div>
</div>
