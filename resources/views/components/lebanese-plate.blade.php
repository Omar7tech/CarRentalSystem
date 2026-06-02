@php
    $record = $getRecord();
    $type = $record->plate_number_type->value ?? 'white';
    $code = $record->plate_code;
    $number = $record->plate_number;

    // Accurate Lebanese plate colors
    $colors = [
        'white'  => ['bg' => '#FFFFFF', 'text' => '#1A1A1A', 'border' => '#A3A3A3'], // Private
        'red'    => ['bg' => '#DC2626', 'text' => '#FFFFFF', 'border' => '#991B1B'], // Public/Rental
        'green'  => ['bg' => '#15803D', 'text' => '#FFFFFF', 'border' => '#14532D'], // Diplomatic
        'yellow' => ['bg' => '#FACC15', 'text' => '#1A1A1A', 'border' => '#A16207'], // Dealers/Customs
        'blue'   => ['bg' => '#1D4ED8', 'text' => '#FFFFFF', 'border' => '#1E3A8A'], // Government/Judiciary
    ];

    $colorScheme = $colors[$type] ?? $colors['white'];
@endphp

<div style="
    display: inline-flex;
    align-items: stretch;
    background: {{ $colorScheme['bg'] }};
    border: 2px solid {{ $colorScheme['border'] }};
    border-radius: 6px;
    font-family: 'Arial', 'Helvetica', sans-serif;
    box-shadow: inset 0 0 5px rgba(0,0,0,0.2), 0 4px 6px -1px rgba(0,0,0,0.1);
    height: 50px;
    min-width: 240px;
    overflow: hidden;
    user-select: none;
">
    <div style="
        background: #0F4C81;
        width: 38px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        padding: 4px 2px;
        box-sizing: border-box;
        border-right: 2px solid rgba(0,0,0,0.1);
    ">
        <span style="
            font-size: 7px;
            font-weight: bold;
            color: #FFFFFF;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        ">لبنان</span>

        <div style="
            width: 0;
            height: 0;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-bottom: 10px solid #22C55E;
            position: relative;
            margin: 1px 0;
        ">
            <div style="
                position: absolute;
                top: 8px;
                left: -2px;
                width: 4px;
                height: 5px;
                background: #78350F;
            "></div>
        </div>

        <span style="
            font-size: 6px;
            font-weight: 800;
            color: #FFFFFF;
            letter-spacing: 0.3px;
        ">LIBAN</span>
    </div>

    <div style="
        flex-grow: 1;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 16px;
        color: {{ $colorScheme['text'] }};
    ">
        <span style="
            font-size: 26px;
            font-family: 'Arial', 'Helvetica', sans-serif;
            font-weight: 700;
            text-transform: uppercase;
            transform: scaleY(1.1);
        ">{{ $code }}</span>

        <span style="
            font-size: 28px;
            font-family: 'Arial', 'Helvetica', sans-serif;
            font-weight: 700;
            letter-spacing: 2px;
            transform: scaleY(1.1);
        ">{{ $number }}</span>
    </div>
</div>