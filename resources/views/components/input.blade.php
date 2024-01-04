<div>
    <label for="{{ $name }}">{{ $label }}</label>
    <br>
    {{-- @dump($placeholder) --}}
    <input style="width: fit-content;" type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" placeholder="{{ $placeholder }}">
</div>
