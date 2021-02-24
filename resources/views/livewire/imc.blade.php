<div>
    
    <div>
        <x-label for="weight">Peso (kg)</x-label>
        <x-input name="weight" class="block mt-1 w-full" wire:model="weight" type="number" />
    </div>
    <div>
        <x-label for="height" class="mt-1"> Altura (cm)</x-label>
        <x-input name="height" class="block mt-1 w-full" wire:model="height" type="number" />
    </div>
    <div>
        <h1>{{ $weight }} kg / ({{ $height }}mts) ^2 = {{ $imc }} (IMC)</h1>
    </div>
</div>