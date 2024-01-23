<div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $destino->nombre ?? '') }}">
    @error('nombre')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
