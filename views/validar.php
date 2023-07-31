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

    <nav>
    <ul>
        <li><a href="identif.php">Identificación</a></li>
        <li><a href="validar.php">Validar</a></li>
        <li><a href="valid.php">Validado</a></li>
</ul>
</nav>
<table id="dg" title="ACTIVOS VALIDADOS" class="easyui-datagrid" style="width:1500px;height:500px"
            url="../models/cargarValidar.php"
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
    <div id="toolbar">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Validar Activo</a>
        <div style="margin-bottom:10px"> 
        </div> 
    </div>
    <div id="dlg" class="easyui-dialog" style="width:400px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
        <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
            <h3>Información del Activo</h3>
            <div style="margin-bottom:10px">
                <input name="id_act" class="easyui-textbox" required="true" label="#:" style="width:100%" readonly>
            </div>
            <div style="margin-bottom:10px">
                <input name="nombre_act" class="easyui-textbox" required="true" label="Nombre:" style="width:100%" readonly>
            </div>
            <div style="margin-bottom:10px">
                <input name="tipo_act" class="easyui-textbox" required="true" label="Identificación:" style="width:100%" readonly>
            </div>
            <div style="margin-bottom:10px">
                <input name="valoracion_act" class="easyui-textbox" required="true" label="Valoración:" style="width:100%">
            </div>
   
        </form>
    </div>
    <div id="dlg-buttons">
        <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Guardar</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancelar</a>
    </div>
    <script type="text/javascript">
        var url;
               

        function editUser(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $('#dlg').dialog('open').dialog('center').dialog('setTitle','Editar Activo');
                $('#fm').form('load', row);
                url = '../models/validar.php';
            }
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
        
    </script>
</body>
</html>