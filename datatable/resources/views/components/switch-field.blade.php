@php
    $nameAttribute = $attributes->get('name');
    $hasError = $nameAttribute && $errors->has($nameAttribute);
    $inputClass = 'form-check-input' . ($hasError ? ' is-invalid' : '');
@endphp

<div class="row mb-3">
    <label class="col-sm-2 col-form-label">{{ $label }}</label>
    <div class="col-sm-10">
        
        <div class="form-check form-switch">
            <input {{ $attributes->merge([
                'class' => $inputClass,
                'type' => 'checkbox',
                'id' => null,
                'name' => null,
                'role' => 'switch'
            ]) }} />
        </div>

        @if ($hasError)
            <div class="invalid-feedback">
                <small>{{ $errors->first($nameAttribute) }}</small>
            </div>
        @endif
    </div>
</div>
