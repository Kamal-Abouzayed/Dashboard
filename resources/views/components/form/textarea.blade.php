@props(['name'])

<div class="form-group">
    <x-form.label name="{{ $name }}" />

    <textarea class="form-control" id="{{ $name }}" cols="12" rows="3">{{ old($name) }}</textarea>

    <x-form.error name="{{ $name }}" />
</div>
