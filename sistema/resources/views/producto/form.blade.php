<h1>{{$modo}} Producto</h1>
<br>
<label for="Nombre">Nombre:</label>
<input type="text" name="Nombre" value="{{isset($producto->nombre)?$producto->nombre:''}}" id="Nombre">
<br>
<label for="Precio">Precio:</label>
<input type="text" name="Precio" value="{{isset($producto->precio)?$producto->precio:''}}" id="Precio">
<br>
<label for="Stock">Stock:</label>
<input type="text" name="Stock" value="{{isset($producto->stock)?$producto->stock:''}}" id="Stock">
<br>

<input type="submit" value="{{$modo}} Producto">

<a href="{{url('producto/')}}">Regresar</a>
<br>