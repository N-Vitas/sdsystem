var editor; 
function filterColumn ( i ) {
    $('#example').DataTable().column( i ).search(
        $('#col'+i+'_filter').val()
    ).draw();
}
function createData(action,argument) {
    $.ajax({
        type:"POST",
        data:{'data':argument},
        url:"/main/"+action,
        dataType:"json"             
        }).done(function (data)
            {                
                if(data.result)
                {
                    $('#example').DataTable().ajax.reload();
                    $(".update, .delete").attr('disabled',true); 
                    $("#dialog").dialog( "close" );
                    //$("#delete").dialog( "close" );
                }
                else
                {
                    if(data.errors.name){
                        $("#name").css('border','1px solid red').find('span').text('sadfsgsdfghsh');
                        $("#error_name").text(data.errors.name);
                    }
                    else{
                        $("#name").css('border','1px solid green');
                        $("#error_name").text("");
                    }
                    if(data.errors.birthday){
                        $("#birthday").css('border','1px solid red');
                        $("#error_birthday").text(data.errors.birthday);
                    }
                    else{
                        $("#birthday").css('border','1px solid green');
                        $("#error_birthday").text("");
                    }
                    if(data.errors.contact){
                        $("#contact").css('border','1px solid red');
                        $("#error_contact").text(data.errors.contact);
                    }
                    else{
                        $("#contact").css('border','1px solid green');
                        $("#error_contact").text("");
                    }
                    if(data.errors.state){
                        $("#state").css('border','1px solid red');
                        $("#error_state").text(data.errors.state);
                    }
                    else{
                        $("#state").css('border','1px solid green');
                        $("#error_state").text("");
                    }
                    if(data.errors.scool){
                        $("#scool").css('border','1px solid red');
                        $("#error_scool").text(data.errors.scool);
                    }
                    else{
                        $("#scool").css('border','1px solid green');
                        $("#error_scool").text("");
                    }
                    if(data.errors.job){
                        $("#job").css('border','1px solid red');
                        $("#error_job").text(data.errors.job);
                    }
                    else{
                        $("#job").css('border','1px solid green');
                        $("#error_job").text("");
                    }
                    if(data.errors.invalid){
                        $("#invalid").css('border','1px solid red');
                        $("#error_invalid").text(data.errors.invalid);
                    }
                    else{
                        $("#invalid").css('border','1px solid green');
                        $("#error_invalid").text("");
                    }
                    if(data.errors.diagnos){
                        $("#diagnos").css('border','1px solid red');
                        $("#error_diagnos").text(data.errors.diagnos);
                    }
                    else{
                        $("#diagnos").css('border','1px solid green');
                        $("#error_diagnos").text("");
                    }
                    if(data.errors.ipr){
                        $("#ipr").css('border','1px solid red');
                        $("#error_ipr").text(data.errors.ipr);
                    }
                    else{
                        $("#ipr").css('border','1px solid green');
                        $("#error_ipr").text("");
                    }
                    if(data.errors.advanset){
                        $("#advanset").css('border','1px solid red');
                        $("#error_advanset").text(data.errors.advanset);
                    }
                    else{
                        $("#advanset").css('border','1px solid green');
                        $("#error_advanset").text("");
                    }
                    if(data.errors.myjob){
                        $("#myjob").css('border','1px solid red');
                        $("#error_myjob").text(data.errors.myjob);
                    }
                    else{
                        $("#myjob").css('border','1px solid green');
                        $("#error_myjob").text("");
                    }
                    $(".span4")
                }                
            });
}
function getDialod(){
    var array = Array({id:$("#id").val(),name:$("#name").val(),birthday:$("#birthday").val(),contact:$("#contact").val(),state:$("#state").val(),scool:$("#scool").val(),job:$("#job").val(),invalid:$("#invalid").val(),diagnos:$("#diagnos").val(),ipr:$("#ipr").val(),advanset:$("#advanset").val(),myjob:$("#myjob").val()});
    return array;
}
$(document).ready(function() {
    $("#birthday").datepicker();
    $("#birthday" ).datepicker( "option", "dateFormat", "yy-mm-dd" );  
    var example = $('#example').DataTable({
        "dom": '<"toolbar">frtip',
        //"dom": 'frtip',
        "ajax": "/main/staff",
        "columns": [
            { "data": "id" },
            { "data": "name" },
            { "data": "birthday" },
            { "data": "contact", "render": $.fn.dataTable.render.number( '-' )},
            { "data": "state" },
            { "data": "scool" },
            { "data": "job" },
            { "data": "invalid" },
            { "data": "diagnos" },
            { "data": "ipr" },
            { "data": "advanset" },
            { "data": "myjob" },
        ],
        /*"columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false,
                "searchable": true
            }
        ],*/
        "scrollY": "300px",
        "scrollX": "100%",
        "scrollCollapse": true,
        "language":{
            "processing": "Подождите...",
            "search": "Поиск:",
            "lengthMenu": "Показать _MENU_ записей",
            "info": "Записи с _START_ до _END_ из _TOTAL_ записей",
            "infoEmpty": "Записи с 0 до 0 из 0 записей",
            "infoFiltered": "(отфильтровано из _MAX_ записей)",
            "infoPostFix": "",
            "loadingRecords": "Загрузка записей...",
            "zeroRecords": "Записи отсутствуют.",
            "emptyTable": "В таблице отсутствуют данные",
            "paginate": {
            "first": "Первая",
            "previous": "Предыдущая",
            "next": "Следующая",
            "last": "Последняя"
            },
            "aria": {
            "sortAscending": ": активировать для сортировки столбца по возрастанию",
            "sortDescending": ": активировать для сортировки столбца по убыванию",
            },
        }
    });
    $("div.toolbar").html("<input type='button' class='create btn' value='Создать'/><input type='button' class='update btn' value='Изменить'/><input type='button' class='delete btn' value='Удалить'/>");
    $('#example tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
            $(".update, .delete").attr('disabled',true);
        }
        else {
            example.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            $(".update, .delete").attr('disabled',false);
        }
    } );
    $(".update, .delete").attr('disabled',true);
    $('input.update').on( 'click', function () {
        var data = $('tr.selected td');
        $("#id").val(      $("#example").dataTable().fnGetData(data[0])).css('border','1px solid green');
        $("#name").val(    $("#example").dataTable().fnGetData(data[1])).css('border','1px solid green');
        $("#birthday").val($("#example").dataTable().fnGetData(data[2])).css('border','1px solid green');
        $("#contact").val( $("#example").dataTable().fnGetData(data[3])).css('border','1px solid green');
        $("#state").val(   $("#example").dataTable().fnGetData(data[4])).css('border','1px solid green');
        $("#scool").val(   $("#example").dataTable().fnGetData(data[5])).css('border','1px solid green');
        $("#job").val(     $("#example").dataTable().fnGetData(data[6])).css('border','1px solid green');
        $("#invalid").val( $("#example").dataTable().fnGetData(data[7])).css('border','1px solid green');
        $("#diagnos").val( $("#example").dataTable().fnGetData(data[8])).css('border','1px solid green');
        $("#ipr").val(     $("#example").dataTable().fnGetData(data[9])).css('border','1px solid green');
        $("#advanset").val($("#example").dataTable().fnGetData(data[10])).css('border','1px solid green');
        $("#myjob").val(   $("#example").dataTable().fnGetData(data[11])).css('border','1px solid green');
        $("#error_name").text("");
        $("#error_birthday").text("");
        $("#error_contact").text("");
        $("#error_state").text("");
        $("#error_scool").text("");
        $("#error_job").text("");
        $("#error_invalid").text("");
        $("#error_diagnos").text("");
        $("#error_ipr").text("");
        $("#error_advanset").text("");
        $("#error_myjob").text("");
        $("#dialog").dialog(
        {
            open:function() {
                $(this).parents(".ui-dialog:first").find(".ui-dialog-titlebar-close").remove();
            },
            resizable: false,
            width:600,
            height:560,
            modal: true,
            title:"Изменение записи",
            buttons: {
              "Сохранить": function() {
                createData("update",getDialod());                
              },
              "Отмена": function() {
                $( this ).dialog( "close" );
              }
            }
        }
        ).each(function(e){$("button").addClass('btn')});        
    } );
    $('input.create').on( 'click', function () {
        $("#dialog input").val("");        
        $("#name").css('border','1px solid grey')
        $("#birthday").css('border','1px solid grey')
        $("#contact").css('border','1px solid grey')
        $("#state").css('border','1px solid grey')
        $("#scool").css('border','1px solid grey')
        $("#job").css('border','1px solid grey')
        $("#invalid").css('border','1px solid grey')
        $("#diagnos").css('border','1px solid grey')
        $("#ipr").css('border','1px solid grey')
        $("#advanset").css('border','1px solid grey')
        $("#myjob").css('border','1px solid grey')        
        $("#error_name").text("");
        $("#error_birthday").text("");
        $("#error_contact").text("");
        $("#error_state").text("");
        $("#error_scool").text("");
        $("#error_job").text("");
        $("#error_invalid").text("");
        $("#error_diagnos").text("");
        $("#error_ipr").text("");
        $("#error_advanset").text("");
        $("#error_myjob").text("");
        $("#dialog").dialog(
        {
            open:function() {
                $(this).parents(".ui-dialog:first").find(".ui-dialog-titlebar-close").remove();
            },
            resizable: false,
            width:600,
            height:560,
            modal: true,
            title:"Создание записи",
            buttons: {
              "Сохранить": function() {
                createData("create",getDialod());
              },
              "Отмена": function() {
                $( this ).dialog( "close" );
              }
            }
        }
        ).each(function(e){$("button").addClass('btn')});
    } );
    $('input.delete').on( 'click', function () {
        $("#dialog input").val("");        
        var data = $('tr.selected td');
        $("#id").val($("#example").dataTable().fnGetData(data[0]));
        $("#delete").dialog(
        {
            open:function() {
                $(this).parents(".ui-dialog:first").find(".ui-dialog-titlebar-close").remove();
            },
            resizable: false,
            width:300,
            height:200,
            modal: true,
            title:"Удаление записи",
            buttons: {
              "Удалить": function() {
                createData("delete",getDialod());
                $( this ).dialog( "close" );
              },
              "Отмена": function() {
                $( this ).dialog( "close" );
              }
            }
        }
        ).each(function(e){$("button").addClass('btn')});;
    } );
    $("#dialog, #delete").hide();
    $('input.column_filter').on( 'keyup click', function () {
        filterColumn( $(this).parents('th').attr('data-column') );
    } );
} );