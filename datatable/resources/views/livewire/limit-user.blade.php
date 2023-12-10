<div class="d-flex gap-1 align-items-center">
    Show
    <select class="form-select form-select-sm" wire:model.live="limit">
        @foreach($limiters as $limiter)
            <option value="{{ $limiter }}">{{ $limiter }}</option>
        @endforeach
    </select>
    entries
 </div>