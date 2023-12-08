@php
    $nameAttribute = $attributes->get('name');
    $hasError = $nameAttribute && $errors->has($nameAttribute);
    $inputClass = 'form-control' . ($hasError ? ' is-invalid' : '');
@endphp

<div class="row mb-3">
    <label class="col-sm-2 col-form-label">{{ $label }}</label>
    <div class="col-sm-10">
        <input {{ $attributes->merge([
            'class' => $inputClass,
            'type' => 'text',
            'id' => null,
            'name' => null,
            'placeholder' => null,
        ]) }} />

        @if ($hasError)
            <div class="invalid-feedback">
                <small>{{ $errors->first($nameAttribute) }}</small>
            </div>
        @endif
    </div>
</div>
