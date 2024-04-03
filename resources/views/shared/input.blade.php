@php
$label ??= null;
$type ??='text';
$calss ??= null;
$name ??= '';
@endphp


<div @class(["form-control", $class])>
    <label for="{{ $name }}"></label>
    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}">
</div>