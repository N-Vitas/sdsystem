
$(document).ready(function() {
    $("#birthday").datepicker();
    $("#birthday" ).datepicker( "option", "dateFormat", "yy-mm-dd" );  
    var example = $('#example').DataTable({
        // "dom": '<"toolbar">frtip',
        "dom": 'frtip',
        "ajax": "/public/sdsystem/main/staff",
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
    
    $("#dialog, #delete").hide();
    $('input.column_filter').on( 'keyup click', function () {
        filterColumn( $(this).parents('th').attr('data-column') );
    } );
} );
function filterColumn ( i ) {
    $('#example').DataTable().column( i ).search(
        $('#col'+i+'_filter').val()
    ).draw();
}