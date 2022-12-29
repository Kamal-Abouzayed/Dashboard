@props(['url', 'method'])

<form class="card shadow mb-4" action="{{ $url }}" method="POST" enctype="multipart/form-data">
    @csrf

    @if (isset($method))
        @method($method)
    @endif

    {{ $slot }}

</form>
