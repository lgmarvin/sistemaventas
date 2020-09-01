<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de articulos</title>
    <style>
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-size: 0.875rem;
            font-weight: normal;
            line-height: 1.5;
            color: #151b1e;           
        }
        .table {
            display: table;
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
            border-collapse: collapse;
        }
        .table-bordered {
            border: 1px solid #c2cfd6;
        }
        thead {
            display: table-header-group;
            vertical-align: middle;
            border-color: inherit;
        }
        tr {
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        }
        .table th, .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #c2cfd6;
        }
        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #c2cfd6;
        }
        .table-bordered thead th, .table-bordered thead td {
            border-bottom-width: 2px;
        }
        .table-bordered th, .table-bordered td {
            border: 1px solid #c2cfd6;
        }
        th, td {
            display: table-cell;
            vertical-align: inherit;
        }
        th {
            font-weight: bold;
            text-align: -internal-center;
            text-align: left;
        }
        tbody {
            display: table-row-group;
            vertical-align: middle;
            border-color: inherit;
        }
        tr {
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }
        .izquierda{
            float:left;
        }
        .derecha{
            float:right;
        }
    </style>
</head>
<body>
    <div>
        <h3>Reporte de articulos <span class="derecha"> {{ DATE_FORMAT(now(), 'd/m/Y - H:i') }} </span> </h3>
    </div>
    <div>
        <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th>Precio de venta</th>
                    <th>Stock</th>
                    <!--<th>Codigo de barras</th>-->
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articulos as $articulo)
                    <tr>
                        <td> {{ $articulo->codigo }} </td>
                        <td> {{ $articulo->nombre }} </td>
                        <td> {{ $articulo->nombre_categoria }} </td>
                        <td> {{ $articulo->precio_venta }} </td>
                        <td> {{ $articulo->stock }} </td>
                        <!--<td>
                            <barcode :value="$articulo->codigo" :options="{ format: 'EAN-13' }" width="1">
                            </barcode>
                        </td>
                        <td> 
                            <img src="php/barcode.php?text={{$articulo->codigo}}&size=30&codetype=Code39&print=true" alt="Err" />
                        </td>-->
                        <td>
                            {{ $articulo->estado ? 'Alta' : 'Baja' }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="izquierda">
        <p> <strong> Total de registros: {{ $cantidad }} </strong> </p>
    </div>
</body>

<script>
    import VueBarcode from 'vue-barcode';
    
</script>

</html>