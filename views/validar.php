<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <meta charset="UTF-8">
    <title>ACTIVOS</title>
    <link rel="stylesheet" type="text/css" href="../jquery-easyui-1.10.1/themes/black/easyui.css">
    <link rel="stylesheet" type="text/css" href="../jquery-easyui-1.10.1/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="../jquery-easyui-1.10.1/themes/color.css">
    
    <script type="text/javascript" src="../jquery-easyui-1.10.1/jquery.min.js"></script>
    <script type="text/javascript" src="../jquery-easyui-1.10.1/jquery.easyui.min.js"></script>
    <script type="text/javascript" src="../jquery-easyui-1.10.1/plugins/jquery.form.js"></script>

</head>
<body>
<header>
<img src="../images/logo.png" width="95%"  height="28%">
</header>
Validar
    <nav>
    <ul>
        <li><a href="identif.php">Identificación</a></li>
        <li><a href="validar.php">Validar</a></li>
        <li><a href="valid.php">Validación</a></li>
</ul>
</nav>
<table id="dg" title="ACTIVOS" class="easyui-datagrid" style="width:1500px;height:500px"
            url="../models/cargarValidado.php"
            toolbar="#toolbar" pagination="true"
            rownumbers="true" fitColumns="true" singleSelect="true">
        <thead>
            <tr>
                <th field="id_act" width="10">#</th>
                <th field="nombre_act" width="50">NOMBRE</th>
                <th field="tipo_act" width="40">IDENTIFICACIÓN</th>
                <th field="valoracion_act" width="50">VALIDACIÓN</th>
                
            </tr>
        </thead>
    </table>

</body>
</html>