@props(['url', 'method'])

<form {{ $attributes->merge(['class' => '']) }} action="{{ $url }}" method="POST" enctype="multipart/form-data">
    @csrf

    @if (isset($method))
        @method($method)
    @endif

    {{ $slot }}

</form>
