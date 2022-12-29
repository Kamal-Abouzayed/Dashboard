@props(['name', 'type' => 'text'])

<div class="form-group">

    <x-form.label name="{{ $name }}" />

    <input type="{{ $type }}" class="form-control" id="{{ $name }}" name="{{ $name }}"
        value="{{ old($name) }}" required>

    <x-form.error name="{{ $name }}" />
</div>
