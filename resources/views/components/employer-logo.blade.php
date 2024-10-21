@props(['employer','width' => 94])
<img src="{{ asset($employer->logo) }}" class="rounded-xl" alt="" width="{{ $width }}">

{{-- <img src="{{ Storage::url($employer->logo) }}" class="rounded-xl" alt="" width="{{ $width }}"> --}}



