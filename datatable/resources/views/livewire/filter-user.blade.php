<div class="col-md-3">
    <label class="form-label fw-bold">{{ $label }}</label>
    <select class="form-select form-select-sm" wire:model.live="selectedOption">
       @foreach($options as $option)
        <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
       @endforeach
    </select>
 </div>