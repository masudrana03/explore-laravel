<div>
    Count: {{ $count }}

    <button wire:click="increment">+</button>
    <button wire:click="decrement">-</button>
</div>

@assets
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js" defer></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
@endassets

@script
    <script>
        new Pikaday({
            field: $wire.$el.querySelector('[data-picker]')
        });


        console.log("Masud Rana ");
    </script>
@endscript
