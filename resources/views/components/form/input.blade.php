@props(['name', 'type' => 'text', 'value' => '', 'required' => 'true'])

<div class="form-group">

    <x-form.label name="{{ $name }}" />

    <input type="{{ $type }}" class="form-control" id="{{ $name }}" name="{{ $name }}"
        value="{{ old($name, $value) }}" {{ $required === 'true' ? 'required' : '' }}>

    <x-form.error name="{{ $name }}" />
</div>
