@props(['type' => 'button', 'cor' => 'primary', 'texto' => 'Enviar'])

<button type="{{ $type }}" class="btn btn-{{ $cor }}">
    {{ $texto }}
</button>
