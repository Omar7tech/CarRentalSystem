@php
    $record = $getRecord();
    $type = $record->plate_number_type->value ?? 'white';
    $code = $record->plate_code;
    $number = $record->plate_number;
@endphp

@vite('resources/css/lebanese-plate.css')

<div class="lebanese-plate lebanese-plate-{{ $type }}">
    <div class="lebanese-plate-side">
        <span class="lebanese-plate-side-text-top">لبنان</span>

        <img src="{{ asset('icons/cedar.png') }}" alt="Cedar" class="lebanese-plate-cedar-img">

        <span class="lebanese-plate-side-text-bottom">LIBAN</span>
    </div>

    <div class="lebanese-plate-content">
        <span class="lebanese-plate-code">{{ $code }}</span>
        <span class="lebanese-plate-number">{{ $number }}</span>
    </div>
</div>