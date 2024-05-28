<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cotización || GMNCGROUP</title>
    <style>
        img,
        h5,
        h4,
        p {
            margin: 3;
            padding: 0px;
        }

        body {
            font-family: 'Rosario', sans-serif !important;
            margin-top: 0;
        }

        .title {
            color: #000000;
            padding: 8px 10px;
            box-sizing: border-box;
        }

        table {

            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #ccc;
            margin: 0;
            vertical-align: middle;
            font-size: 13px;
            padding: 0px 10px;
            text-align: left;
            box-sizing: border-box;


        }

        table th {

            border-top: 1px solid transparent;
            border-right: 1px solid transparent;
            border-left: 1px solid transparent;
        }

        table td h5 {
            border: 1px solid transparent;
            color: #7d6666;
            display: block;
            margin-left: -10px;
            margin-right: -10px;
            padding: 3px 10px;
            color: #000000;

        }

        table td p {
            font-size: 12px;
            margin: 2px 1px;
        }

        #invoice {
            text-align: center;
            width: 100%;

        }

        #invoice .logo,
        #invoice .logo-title {
            display: block;
        }

        #invoice .logo {

            width: 100%;
            text-align: left;
        }

        #invoice .logo img {

            width: 250px;
        }

        #invoice .logo-title {

            width: 100%;
            text-align: center;
        }

        #invoice p {

            text-align: justify;
            font-size: 12px;
            margin: 10px 0px;
            color: #9a9797;
        }

        .emisor {
            margin: 40px 0px;
            color: #9a9797;
            text-align: center;
        }

        .logo {

            margin: 0px 0px 2px 0px;
        }

        .texto {
            text-align: justify;

        }

        .texto p {

            margin: 5px;
        }

    </style>
</head>

<body>

    <main>
        <div id="details" class="clearfix">
            <div id="invoice">
                <div class="logo">
                    <img src="{{ $logo }}" alt="Logo" class="logo" />
                </div>
                <div class="logo-title">
                    <h4>CONDICIONES PARTICULARES</h4>
                    <h4>CLAUSULA INTEGRAL DE TRANSPORTE POR TRAYECTOS</h4>
                </div>
            </div>
        </div>
        <table style="width:100%;">
            <tr>
                <th colspan="2" class="title">1. DATOS TRAYECTO ASEGURADO</th>
                <th colspan="2" class="title">NUMERO DE INCLUSIÓN: {{ $data->id }}</th>
            </tr>
            <tr>
                <td colspan="2">
                    <h5><strong>1.1</strong> N° Poliza</h5>
                    <p>Solicitante:
                        {{ $data->contracts->people->firstname . ' ' . $data->contracts->people->lastname }}
                    </p>
                </td>
                <td colspan="2">
                    <h5>N° Certificado</h5>
                    <p>Ruc: {{ $data->contracts->people->nit }}</p>
                </td>


            </tr>
            <tr>
                <td colspan="2">
                    <p>Asegurado: {{ $data->person->firstname . ' ' . $data->person->lastname }}</p>
                </td>
                <td colspan="2">
                    <p>Ruc: {{ $data->person->nit }}</p>
                </td>
            </tr>

            <tr>

                <th colspan="4" class="title">1.2 DATOS DEL VEHICULO - TRAYECTO ASEGURADO</th>
            </tr>
            <tr>
                <td colspan="2">
                    <h5>RUC Conductor</h5>
                    <p>{{ $data->id_driver }}</p>
                </td>
                <td colspan="2">
                    <h5>Nombre del Conductor</h5>
                    <p>{{ $data->name_driver }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h5>Placa</h5>
                    <p>{{ $data->car[0]->placa }}</p>
                </td>
                <td>
                    <h5>Clase</h5>
                    <p>{{ $data->car[0]->classes->name }}</p>
                </td>
                <td>
                    <h5>Marca</h5>
                    <p>{{ $data->car[0]->brand->name }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h5>Modelo</h5>
                    <p>{{ $data->car[0]->modelo }}</p>
                </td>
                <td colspan="2">
                    <h5>Año de fabricación</h5>
                    <p>{{ $data->car[0]->fabricacion }}</p>
                </td>
            </tr>
            <tr>

                <th colspan="4" class="title">1.3 TRAYECTO ASEGURADO</th>
            </tr>
            <tr>
                <td colspan="2">
                    <h5>RUC Generador de Carga</h5>
                    <p>{{ $data->ruc_load }}</p>
                </td>
                <td colspan="2">
                    <h5>Nombre Generador de Carga</h5>
                    <p>{{ $data->name_generator_load }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h5>Desde (Ciudad)</h5>
                    <p>{{ $data->exit_city->name }}</p>
                </td>
                <td colspan="2">
                    <h5>Dirección partida</h5>
                    <p>{{ $data->street_load }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h5>Hasta (ciudad)</h5>
                    <p>{{ $data->arrival_city->name }}</p>
                </td>
                <td colspan="2">
                    <h5>Dirección destino</h5>
                    <p>{{ $data->street_destination }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h5>Fecha y Hora de Inicio</h5>
                    <p>{{ $data->data_journey }}</p>
                </td>
                <td colspan="2">
                    <h5>Fecha y Hora Fin</h5>
                    <p>{{ $data->data_cellar }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <h5>Número De Guía O Manifiesto De Carga</h5>
                    <p>{{ $data->manifest_load }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <h5>Observación</h5>
                    <p>{{ $data->observations }}</p>
                </td>
            </tr>
            <tr>

                <th colspan="4" class="title">2. COBERTURAS Y SUMAS ASEGURADAS POR TRAYECTO</th>
            </tr>
            <tr>
                <td>
                    <h5>Reponsabilidad Civil Extracontractual</h5>
                </td>
                <td colspan="2">
                    <h5>Suma Aseguradora</h5>
                </td>
                <td>
                    <h5>Deducibles</h5>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Daños a Bienes de Terceros</p>
                </td>
                <td colspan="2">
                    <p>{{ trim(explode(':', explode(',', $data->contracts->coverage->rce)[0])[1], '"') }}</p>
                </td>
                <td>10% Min 1 RBU</td>
            </tr>
            <tr>
                <td>
                    <p>Lesiones o Muerte a 1 Persona</p>
                </td>
                <td colspan="2" id="ls1">
                    <p>{{ trim(explode(':', explode(',', $data->contracts->coverage->rce)[1])[1], '"') }}</p>
                </td>
                <td rowspan="4">
                    <p>0%</p>
                </td>
            </tr>
            <tr>
                <td id="" ls2>
                    <p>Lesiones o Muerte a 2 o Más Personas</p>
                </td>
                <td colspan="2">
                    <p>{{ trim(explode(':', explode(',', $data->contracts->coverage->rce)[2])[1], '"') }}</p>
                </td>
            </tr>
            <tr>
                <td>
                    <th5>Amparo Patrimonial</th5>
                </td>
                <td colspan="2">
                    <p>{{ trim(explode(',', explode(':', $data->contracts->coverage->rce)[5])[0], '"') == 1? 'Si Ampara': 'No Ampara' }}
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Asistencia Jurídica(En Proceso Penal, Civil y Administrativo de Tránsito)</p>
                </td>
                <td>
                    <p>{{ trim(explode(',', explode(':', $data->contracts->coverage->rce)[6])[0], '"') == 1? 'Si Ampara': 'No Ampara' }}
                    </p>
                </td>
                <td>
                    {{ trim(trim(explode(',', explode(':', $data->contracts->coverage->rce)[7])[0], '"'), '"}') }}
                </td>
            </tr>
            <tr>
                <th colspan="4" class="title">RESPONSABILIDAD CIVIL CONTRACTUAL</th>
            </tr>
            <tr>
                <td>
                    <p>Limite Unico</p>
                </td>
                <td colspan="2">
                    {{ trim(explode(',', explode(':', $data->contracts->coverage->rcc)[3])[0], '"') }}
                </td>
                <td>
                    <p>0%</p>
                </td>
            </tr>
            <tr>
                <th colspan="4" class="title">RESPONSABILIDAD CIVIL PATRONAL</th>
            </tr>
            <tr>
                <td>
                    <p>Muerte Accidental</p>
                </td>
                <td colspan="2">
                    {{ trim(explode(',', explode(':', $data->contracts->coverage->ap)[3])[0], '"') }}
                </td>
                <td rowspan="7">0%</td>
            </tr>
            <tr>
                <td>
                    <p>Incapacidad Total y Permanente</p>
                </td>
                <td colspan="2">
                    {{ trim(explode(',', explode(':', $data->contracts->coverage->ap)[4])[0], '"') }}
                </td>
            </tr>
            <tr>
                <td>
                    <p>Desmembración e Incapacidad Funcional Permanente</p>
                </td>
                <td>
                    <p>Si ampara</p>
                </td>
                <td>
                    {{ trim(explode(',', explode(':', $data->contracts->coverage->ap)[5])[0], '"') }}
                </td>
            </tr>
            <tr>
                <td>
                    <p>Atención Medica (Gastos Médicos Por Accidente)</p>
                </td>
                <td>
                    <p>Si ampara</p>
                </td>
                <td>
                    {{ trim(explode(',', explode(':', $data->contracts->coverage->ap)[6])[0], '"') }}
                </td>
            </tr>
            <tr>
                <td>
                    <p>Auxilio Funerario</p>
                </td>
                <td>
                    <p>Si ampara</p>
                </td>
                <td>
                    {{ trim(explode(',', explode(':', $data->contracts->coverage->ap)[7])[0], '"') }}
                </td>
            </tr>
            <tr style="width: 55%;">
                <td>
                    <p>Gastos Canasta Familiar Por Fallecimiento Hasta 3 Meses</p>
                </td>
                <td>
                    <p>Si ampara</p>
                </td>
                <td>
                    {{ trim(explode(',', explode(':', $data->contracts->coverage->ap)[8])[0], '"') }}
                </td>
            </tr>
            <tr>
                <td>
                    <p>Gastos de Adecuación Del Vehículo o Vivienda En Caso de ITP</p>
                </td>
                <td>
                    <p>Si ampara</p>
                </td>
                <td>
                    {{ trim(explode(',', explode(':', $data->contracts->coverage->ap)[9])[0], '"') }}
                </td>
            </tr>
            <tr>
                <th colspan="4" class="title">GASTOS DE WINCHA</th>
            </tr>
            <tr>
                <td>
                    <p>En Accidente De Tránsito Cubierto por la Poliza Unicamente</p>
                </td>
                <td>
                    <p>{{ trim(explode(',', explode(':', $data->contracts->coverage->gw)[1])[0], '"') == '1'? 'Si Ampara': 'No Ampara' }}
                    </p>

                </td>
                <td>
                    @if (trim(explode(',', explode(':', $data->contracts->coverage->gw)[1])[0], '"') == '1')
                        <p>{{ trim(trim(explode(',', explode(':', $data->contracts->coverage->gw)[2])[0], '"'), '"}') }}
                        </p>
                    @else
                        <p>$0</p>
                    @endif
                </td>
                <td>
                    <p>0%</p>
                </td>
            </tr>
            <tr>
                <th colspan="4" class="title">GASTOS LIBERACIÓN VEHICULO RETENIDO</th>
            </tr>
            <tr>
                <td>
                    <p>En Accidente De Tránsito Cubierto por la Poliza Unicamente</p>
                </td>
                <td>
                    <p>{{ trim(explode(',', explode(':', $data->contracts->coverage->glvr)[1])[0], '"') == '1'? 'Si Ampara': 'No Ampara' }}
                    </p>
                </td>
                <td>
                    {{ trim(trim(explode(',', explode(':', $data->contracts->coverage->glvr)[2])[0], '"'), '"}') }}
                </td>
                <td>
                    <p>0%</p>
                </td>
            </tr>
            <tr>
                <th colspan="4" class="title">PRIMA A PAGAR POR TRAYECTO</th>
            </tr>

            <tr>
                <td colspan="4">
                    <p>{{ $data->contracts->coverage->total }}</p>
                </td>
            <tr>
                <th colspan="4" class="title">4. TERRITORIO</th>
            </tr>
            <tr>
                <td colspan="4">
                    <p>Todo el territorio Ecuatoriano</p>
                </td>
            </tr>
            <tr>
                <th colspan="4" class="title">5. CLÁUSULAS ADICIONALES</th>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="texto">
                        <p><strong>5.1</strong> Adhesión</p>
                        <p><strong>5.2</strong> Anexo Aclaratorio</p>
                        <p><strong>5.3</strong> Cláusula de garantía de Transporte Terrestre: en caso de incumplimiento
                            de
                            las garantías de la Cláusula Terrestre, se duplicará el deducible, según el
                            evento afectado. </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th colspan="4" class="title">6. GARANTIAS DE LA POLIZA</th>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="texto">
                        <p>Para que el asegurado cuente con la debida cobertura, deberá cumplir con las siguientes
                            obligaciones:</p>
                        <p><strong>6.1</strong> Dispositivo de Localización Satelital GPS: Para tener cobertura de
                            siniestro
                            en cualquiera de las coberturas descritas en el Numeral 2., el Vehículo
                            Asegurado y/o Siniestrado - en caso de transbordo, deberá tener instalado,
                            activo y en funcionamiento, un dispositivo de localización satelital en
                            plataforma GPRS (la que deja registro histórico).</p>
                        <p><strong>6.2</strong> El asegurado autoriza a la Compañía de Seguros para que en cualquier
                            momento, de manera directa o a través de sus peritos de seguros, solicite
                            reportes de localización satelital que cubran el (los) trayecto(s) asegurado(s). </p>
                        <p><strong>6.3</strong> La movilización en transporte interno debe ser siempre con empresas
                            legalmente constituidas, se excluye cualquier daño, robo y/o hurto si el
                            servicio es subcontratado. </p>
                        <p>El incumplimiento de cualquiera de estas garantías, liberará a la
                            Compañía de toda responsabilidad en caso de siniestro.</p>

                        <p>Y las demás que constan en las condiciones generales de la póliza
                            entregadas al solicitante </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th colspan="4" class="title">7. EXCLUSIONES</th>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="texto">
                        <p>En adición a las exclusiones establecidas en las condiciones generales de la póliza, se
                            establecen las siguientes:</p>
                        <p><strong>7.1</strong> Daños debido a un mal empaque y/o embalaje; no cubre daños ocasionados
                            por un mal estibaje, en carga y/o descarga.</p>
                        <p><strong>7.2</strong> Hurto simple, desaparición misteriosa.</p>
                        <p><strong>7.3</strong> Internación temporal</p>
                        <p><strong>7.4</strong> Mercadería en bodegas o predios del transportista</p>
                        <p><strong>7.5</strong> Errores de despacho</p>
                        <p><strong>7.6</strong> Acumulación para cualquiera de los embarques.</p>
                        <p><strong>7.7</strong> Excluye averías mecánicas, eléctricas o electrónicas,
                            desbalance,descalibración.</p>
                        <p><strong>7.8</strong> Excluye los daños y pérdidas causados por guerrilla, sabotaje,
                            terrorismo Y las demás que constan en las condiciones generales de la póliza entregadas al
                            solicitante. </p>

                    </div>
                </td>
            </tr>
        </table>

</body>

</html>
