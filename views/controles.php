<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <meta charset="UTF-8">
    <title>VALIDADOS</title>
    <link rel="stylesheet" type="text/css" href="../jquery-easyui-1.10.1/themes/black/easyui.css">
    <link rel="stylesheet" type="text/css" href="../jquery-easyui-1.10.1/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="../jquery-easyui-1.10.1/themes/color.css">
    
    <script type="text/javascript" src="../jquery-easyui-1.10.1/jquery.min.js"></script>
    <script type="text/javascript" src="../jquery-easyui-1.10.1/jquery.easyui.min.js"></script>
    <script type="text/javascript" src="../jquery-easyui-1.10.1/plugins/jquery.form.js"></script>

</head>
<body>


<nav>
<ul>
        <li><button class="button" name="button" onclick="window.location.href='identif.php'">Identificación Activos</button></li>
        <li><button class="button" name="button" onclick="window.location.href='validar.php'">Valorar Activos</button></li>
        <li><button class="button" name="button" onclick="window.location.href='valid.php'">Activos Valorados</button></li>
        <li><button class="button" name="button" onclick="window.location.href='identifAmenazas.php'">Identificación Amenazas</button></li>
        <li><button class="button" name="button" onclick="window.location.href='controles.php'">Controles</button></li>
        <li><button class="button" name="button" onclick="window.location.href='afectaciones.php'">Riesgos</button></li>
        <li><button class="button" name="button" onclick="window.location.href='riesgos.php'">Controles Mitigación</button></li>
    </ul>
</nav>
<table id="dg" title="CONTROLES" class="easyui-datagrid" style="width:1500px;height:500px"
            url="../models/auxx/controles.php"
            toolbar="#toolbar" pagination="true"
            rownumbers="true" fitColumns="true" singleSelect="true">
        <thead>
            <tr>
                <th field="id" width="10">#</th>
                <th field="nombre_cont" width="50">NOMBRE</th>
                <th field="descripcion_cont" width="40">DESCRIPCIÓN</th>
                <th field="relacionados_cont" width="50">CONTROLES RELACIONADOS</th>
                <th field="tipo_cont" width="50">TIPO DE CONTROL</th>
            </tr>
        </thead>
    </table>

</body>
</html>