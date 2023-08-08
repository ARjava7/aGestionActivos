<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <meta charset="UTF-8">
    <title>IDENTIFICACIÓN</title>
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

 
<table id="dg" title="IDENTIFICAR ACTIVOS" class="easyui-datagrid" style="width:1500px;height:500px"
            url="../models/cargar.php"
            toolbar="#toolbar" pagination="true"
            rownumbers="true" fitColumns="true" singleSelect="true">
        <thead>
            <tr>
                <th field="id_act" width="10">#</th>
                <th field="ubi_act" width="50">UBICACIÓN</th>
                <th field="depar_act" width="50">DEPARTAMENTO</th>
                <th field="clasif_act" width="50">CLASIFICACIÓN</th>
                <th field="nombre_act" width="50">NOMBRE</th>
                <th field="responsable_act" width="50">RESPONSABLE</th>
                
            </tr>
        </thead>
    </table>
    <div id="toolbar">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">Nuevo Activo</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Borrar Activo</a>
        
        <div style="margin-bottom:10px">
               
        </div>
        
        
    </div>
    
    <div id="dlg" class="easyui-dialog" style="width:500px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
        <form id="fm" method="post" novalidate style="margin:0;padding:20px 80px">
            <h3>Información del Activo</h3>
            <div style="margin-bottom:10px">
                <input name="ubi_act" class="easyui-textbox" required="true" label="Ubicación:" data-options="prompt:'Ej: Oficina, DataCenter '" style="width:100%" maxlength="50">
            </div>
            
            <div style="margin-bottom:10px">
                <input name="depar_act" class="easyui-textbox" required="true" label="Departamento:" data-options="prompt:'Ej: TI, Ventas '" style="width:100%">
            </div>
           
            <div style="margin-bottom:10px">
                <input name="clasif_act" class="easyui-textbox" required="true" label="Clasificación :" data-options="prompt:'Ej: Elemento Prioritario, Elemento de Servicio '" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="nombre_act" class="easyui-textbox" required="true" label="Nombre:" data-options="prompt:'Ej: Laptop, DHCP '" style="width:100%">
            </div>
          
            <div style="margin-bottom:10px">
                <input name="responsable_act" class="easyui-textbox" required="true" label="Responsable:" data-options="prompt:'Ej: Luis Perez, Jorge Romo '" style="width:100%">
            </div>
            <style>
.textbox-label {
  width: 170px; /* Ajusta el ancho según tus necesidades */
  text-align: right; /* Alínea el texto a la derecha */
  padding-right: 5px; /* Agrega un poco de espacio entre el label y el input */
}
</style>
   
        </form>
    </div>
    <div id="dlg-buttons">
        <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Guardar</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancelar</a>
    </div>


    <script type="text/javascript">
        var url;
               

        function newUser(){
            $('#dlg').dialog('open').dialog('center').dialog('setTitle','Nuevo Activo');
            $('#fm').form('clear');
            url = '../models/guardar.php';
        }

        function saveUser(){
            $('#fm').form('submit',{
                url: url,
                iframe: false,
                onSubmit: function(){
                    return $(this).form('validate');
                },
                success: function(result){
                    var result = eval('('+result+')');
                    if (result.errorMsg){
                        $.messager.show({
                            title: 'Error',
                            msg: result.errorMsg
                        });
                    } else {
                        $('#dlg').dialog('close');        // close the dialog
                        $('#dg').datagrid('reload');    // reload the user data
                    }
                }
            });
        }
        function destroyUser(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $.messager.confirm('Confirm','Esta seguro que desea eliminar?',function(r){
                    if (r){
                        $.post('../models/eliminar.php', {id_act: row.id_act},function(result){                         
                                $('#dg').datagrid('reload');// reload the user data
                        },'json');
                    }
                });
            }
        }
    </script>
</body>
</html>