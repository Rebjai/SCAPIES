<div>
    <input type="text" name="nombre" placeholder="IEBO" value="{{$plantel->nombre}}" class="@error('nombre') border-red-500 @enderror" >
    @error('nombre')
    <div class="text-red-500 mt2 text-sm">{{ $message }}</div>
    @enderror
    <br>
    <button>Guardar</button>
</div>