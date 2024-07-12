<div>
<h2>Crear Vehículo</h2>

    <form wire:submit.prevent="mostrar">
        <label>Marca:</label>
        <select wire:model="marca_id">
            @foreach($marcas as $marca)
                <option value="{{ $marca->id }}">{{ $marca->descripcion }}</option>
            @endforeach
        </select>

        <label>Modelo:</label>
        <select wire:model="modelo_id">
            @foreach($modelos as $modelo)
                <option value="{{ $modelo->id }}">{{ $modelo->descripcion }}</option>
            @endforeach
        </select>

        <label>Color:</label>
        <select wire:model="color_id">
            @foreach($colores as $color)
                <option value="{{ $color->id }}">{{ $color->descripcion }}</option>
            @endforeach
        </select>

        <button type="submit">Mostrar</button>
    </form>

    <h2>Vehículos</h2>
    <table>
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Color</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehiculos as $vehiculo)
                <tr>
                    <td>{{ $vehiculo->marca->descripcion }}</td>
                    <td>{{ $vehiculo->modelo->descripcion }}</td>
                    <td>{{ $vehiculo->color->descripcion }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
