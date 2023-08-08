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

 
<table id="dg" title="IDENTIFICAR AMENAZAS" class="easyui-datagrid" style="width:1500px;height:500px"
            url="../models/auxx/cargar.php"
            toolbar="#toolbar" pagination="true"
            rownumbers="true" fitColumns="true" singleSelect="true">
        <thead>
            <tr>
                <th field="id" width="5">#</th>
                <th field="origen_ame" width="30">ORIGEN</th>
                <th field="categoria_ame" width="40">CATEGORÍA</th>
                <th field="nombre_ame" width="50">NOMBRE</th>
                <th field="valor_ame" width="20">VALOR</th>
                <th field="descripcion_ame" width="50">DESCRIPCION</th>
                
                
            </tr>
        </thead>
    </table>
    <div id="toolbar">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">Nueva Amenaza</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Borrar Amenaza</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Agregar Control</a>

        
        <div style="margin-bottom:10px">
               
        </div>
        
        
    </div>
    
    <div id="dlg" class="easyui-dialog" style="width:500px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
        <form id="fm" method="post" novalidate style="margin:0;padding:20px 80px">
            <h3>Información de la Amenaza</h3>
            <div style="margin-bottom:10px">
                <input name="origen_ame" class="easyui-textbox" required="true" label="Origen:" data-options="prompt:'Ej: Error Humano '" style="width:100%" maxlength="50">
            </div>
            
            <div style="margin-bottom:10px">
                <input name="categoria_ame" class="easyui-textbox" required="true" label="Categoría:" data-options="prompt:'Ej: Hardware '" style="width:100%">
            </div>
           
            <div style="margin-bottom:10px">
                <input name="nombre_ame" class="easyui-textbox" required="true" label="Amenaza :" data-options="prompt:'Ej: Avería Física '" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="valor_ame" class="easyui-textbox" required="true" label="Valor:" data-options="prompt:'Ej: Baja, Media,Alta '" style="width:100%">
            </div>
          
            <div style="margin-bottom:10px">
                <input name="descripcion_ame" class="easyui-textbox" required="true" label="Descripción:" data-options="prompt:'Ej: Mala Instalación '" style="width:100%">
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



    <div id="dlgg" class="easyui-dialog" style="width:500px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
        <form id="fmm" method="post" novalidate style="margin:0;padding:20px 80px">
            <h3>Información del Control</h3>
            <div style="margin-bottom:10px">
                <input name="id" class="easyui-textbox" required="true" label="ID:" data-options="prompt:'1 '" style="width:100%" maxlength="50">
            </div>
            
            <div style="margin-bottom:10px">
                <input name="nombre_cont" class="easyui-textbox" required="true" label="Nombre : " data-options="prompt:'Ej: Firewall '" style="width:100%">
            </div>
           
            <div style="margin-bottom:10px">
                <input name="descripcion_cont" class="easyui-textbox" required="true" label="Descripción :" data-options="prompt:'Ej: Ataques '" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="relacionados_cont" class="easyui-textbox" required="true" label="Cont. Relacionados:" data-options="prompt:'Ej: ------ '" style="width:100%">
            </div>
          
            <div style="margin-bottom:10px">
                <input name="tipo_cont" class="easyui-textbox" required="true" label="Tipo: " data-options="prompt:'Ej: Técnico '" style="width:100%">
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
        <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUserr()" style="width:90px">Guardar</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlgg').dialog('close')" style="width:90px">Cancelar</a>
    </div>


    <script type="text/javascript">
        var url;
               

        function editUser(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $('#dlgg').dialog('open').dialog('center').dialog('setTitle','Editar Activo');
                $('#fmm').form('load', row);
                url = '../models/auxx/agregarControl.php';
            }
        }


        function newUser(){
            $('#dlg').dialog('open').dialog('center').dialog('setTitle','Nuevo Activo');
            $('#fm').form('clear');
            url = '../models/auxx/guardar.php';
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
        function saveUserr(){
            $('#fmm').form('submit',{
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
                        $('#dlgg').dialog('close');        // close the dialog
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
                        $.post('../models/auxx/eliminar.php', {id: row.id},function(result){                         
                                $('#dg').datagrid('reload');// reload the user data
                        },'json');
                    }
                });
            }
        }
    </script>
</body>
</html>