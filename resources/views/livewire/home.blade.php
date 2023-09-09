<div>
    <h1>Hello Word!!!</h1>

    <h3>{{ $teste }}</h3>

    <input type="text" wire:model="novo" style="border: 1px solid black;">
    <button wire:click="buscar">pesquisar</button>

    <h3>{{$outro}}</h3>
    <input type="text" name="outro" id="outro" wire:model="outro" style="border: 1px solid red;">


    <h1>{{ $count }}</h1>
 
    <button wire:click="increment">+</button>
 
    <button wire:click="decrement">-</button>
</div>
