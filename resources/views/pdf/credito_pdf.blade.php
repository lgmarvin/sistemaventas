<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de crédito</title>
    <style>
        body {
        /*position: relative;*/
        /*width: 16cm;  */
        /*height: 29.7cm; */
        /*margin: 0 auto; */
        /*color: #555555;*/
        /*background: #FFFFFF; */
        font-family: Arial, sans-serif; 
        font-size: 14px;
        /*font-family: SourceSansPro;*/
        }

        #logo{
        width: 40%;
        text-align: center;
        float: center;
        margin-top: 0%;
        margin-left: 0%;
        margin-right: 0%;
        }

        #imagen{
        width: 225px;
        }

        #datos{
        float: left;
        margin-top: 0%;
        margin-left: 2%;
        margin-right: 2%;
        /*text-align: justify;*/
        }

        #encabezado{
        width: 40%;
        text-align: center;
        margin-left: 0%;
        margin-right: 0%;
        }

        section{
        clear: left;
        }

        #cliente{
        text-align: left;
        }

        #facliente{
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
        }

        #fac, #fv, #fa{
        color: #FFFFFF;
        font-size: 15px;
        }

        #facliente thead{
        padding: 20px;
        background: #d2121f;
        text-align: left;
        border-bottom: 1px solid #FFFFFF;  
        }

        #facvendedor{
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
        }

        #facvendedor thead{
        padding: 20px;
        background: #d2121f;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;  
        }

        #facarticulo{
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
        }

        #facarticulo thead{
        padding: 20px;
        background: #d2121f;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;  
        }

        #gracias{
        text-align: center; 
        }
    </style>
 </head>
 <body>
     @foreach ($venta as $item)
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td id="encabezado">
                        <div>
                            <b style="font-size: 16px;">Distribuidora del Pueblo</b><br>
                            <b style="font-size: 12px;">Chiquimulilla, Santa rosa</b><br>
                            <span style="font-size: 9px;">Representante: Héctor Antonio Arriaza Alvarez</span><br>
                            <span style="font-size: 9px;">Tels. 5414-5647, 5044-5788, 5558-9668, 7885-0018</span>
                        </div>
                    </td>
                    <td  id="logo">
                        <div>
                            <img src="img/samboro.png" alt="Logo" id="imagen">
                        </div>
                    </td>
                    <td>
                        
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        
        <section>
            <div>
                <table style="width: 100%;">
                    <td style="width: 50%;">
                        <table id="facliente">
                            <thead>
                                <tr>
                                    <td id="fac"><b>Cliente</b></td>
                                </tr>
                            </thead>
                            <tbody >
                                <tr>
                                    <th style=" font-weight: normal;">
                                        <p>
                                            <b>CLIENTE: </b>{{ $item->nombre }} <br>
                                            <b>NIT: </b>{{ $item->numero_documento }} <br>
                                            <b>DIRECCIÓN: </b>{{ $item->direccion }} <br>
                                        </p>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td style="width: 25%;"></td>
                    <td style="text-align:center;">
                        <div style="text-align:center;">
                            <b style="font-size: 10px;">DOCUMENTO</b><br>
                            <span  style="font-size: 16px; color: #d2121f;">{{ $documento }}</span> 
                        </div>
                    </td>
                </table>
            </div>
            
        </section>
        <br>
        <section>
        
            <div>
                <table id="facvendedor">
                    <thead>
                        <tr id="fv">
                            <th>Vendedor</th>
                            <th>Fecha Venta</th>
                            <th>Total</th>
                            <th>Saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:center;"> {{ $item->vendedor }} </td>
                            <td style="text-align:center;"> {{ $item->fecha_hora }}</td>
                            <td style="text-align:center;"> {{ $item->total }}</td>
                            <td style="text-align:center;"> {{ $item->saldo }}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
            </div>
        </section>
    @endforeach
        <br>
    <section>
        <div>
            <table id="facarticulo">
                <thead>
                    <tr id="fa">
                        <th>No.</th>
                        <th>Fecha</th>
                        <th>Abono</th>
                        <th>Saldo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($abonos as $item)
                        <tr>    
                            <td style="text-align:center;"> {{$loop->index+1}} </td>
                            <td style="text-align:center;"> {{ $item->fecha_hora }} </td>
                            <td style="text-align:right;"> {{ $item->abono }} </td>
                            <td style="text-align:right;"> {{$item->saldo}} </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                </tfoot>
            </table>
            <hr>
        </div>
    </section>    
    <br>
    <br>
    <footer>
        <div id="gracias">
            <p><b></b></p>
        </div>
    </footer>
 </body>
 </html>