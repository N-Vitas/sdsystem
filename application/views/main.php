<table cellpadding="0" cellspacing="0" border="0" id="example">
	<thead>
		<tr>
        	<th class="hiden"></th>
			<th>Ф.И.О.</th>
			<th>Дата рождения</th>
			<th>Контактный телефон</th>
			<th>Район проживания</th>
			<th>Образование</th>
			<th>Специальность</th>
			<th>Группа инвалидности</th>
			<th>Диагноз</th>
			<th>ИПР</th>
			<th>Дополнительно</th>
			<th>Желаемая должность</th>
		</tr>
	</thead>
	<tfoot>
        <tr>
        	<th class="hiden"></th>
			<th id="filter_col1"  data-column="0"><input type="text"  class="column_filter" id="col0_filter"></th>
			<th id="filter_col2"  data-column="1"><input type="text"  class="column_filter" id="col1_filter"></th>
			<th id="filter_col3"  data-column="2"><input type="text"  class="column_filter" id="col2_filter"></th>
			<th id="filter_col4"  data-column="3"><input type="text"  class="column_filter" id="col3_filter"></th>
			<th id="filter_col5"  data-column="4"><input type="text"  class="column_filter" id="col4_filter"></th>
			<th id="filter_col6"  data-column="5"><input type="text"  class="column_filter" id="col5_filter"></th>
			<th id="filter_col7"  data-column="6"><input type="text"  class="column_filter" id="col6_filter"></th>
			<th id="filter_col8"  data-column="7"><input type="text"  class="column_filter" id="col7_filter"></th>
			<th id="filter_col9"  data-column="8"><input type="text"  class="column_filter" id="col8_filter"></th>
			<th id="filter_col10" data-column="9"><input type="text"  class="column_filter" id="col9_filter"></th>
			<th id="filter_col11" data-column="10"><input type="text" class="column_filter" id="col10_filter"></th>
        </tr>
    </tfoot>
</table>
<div id="dialog" class="container" title="Basic dialog">
	<div class="row-fluid">
    <div class="span12"><input type='hidden' id='id'/></td></tr>
    <div class="span5">Ф.И.О.</div>				<div class="span5"><span class="label label-important" data-alertid="example" id="error_name"></span><input type='text' id='name'/>	</div>
    <div class="span5">Дата рождения</div>		<div class="span5"><span class="label label-important" data-alertid="example" id="error_birthday"></span><input type='text' id='birthday'/></div>	
    <div class="span5">Контактный телефон</div>	<div class="span5"><span class="label label-important" data-alertid="example" id="error_contact"></span><input type='text' id='contact'/>	</div>	
    <div class="span5">Район проживания</div>	<div class="span5"><span class="label label-important" data-alertid="example" id="error_state"></span><input type='text' id='state'/>	</div>	
    <div class="span5">Образование</div>		<div class="span5"><span class="label label-important" data-alertid="example" id="error_scool"></span><input type='text' id='scool'/>	</div>	
    <div class="span5">Специальность</div>		<div class="span5"><span class="label label-important" data-alertid="example" id="error_job"></span><input type='text' id='job'/>		</div>
    <div class="span5">Группа инвалидности</div><div class="span5"><span class="label label-important" data-alertid="example" id="error_invalid"></span><input type='text' id='invalid'/>	</div>	
    <div class="span5">Диагноз</div>			<div class="span5"><span class="label label-important" data-alertid="example" id="error_diagnos"></span><input type='text' id='diagnos'/>	</div>	
    <div class="span5">ИПР</div>				<div class="span5"><span class="label label-important" data-alertid="example" id="error_ipr"></span><input type='text' id='ipr'/>		</div>
    <div class="span5">Дополнительно</div>		<div class="span5"><span class="label label-important" data-alertid="example" id="error_advanset"></span><input type='text' id='advanset'/></div>	
    <div class="span5">Желаемая должность</div>	<div class="span5"><span class="label label-important" data-alertid="example" id="error_myjob"></span><input type='text' id='myjob'/>	</div>	
   	</div>
  <!-- <table cellpadding='0' cellspacing='0' border='0' id='formdialog' width='100%'>
    <tr><td colspan="2" class="hiden"><input type='hidden' id='id'/></td></tr>
    <tr><td>Ф.И.О.</td><td><input type='text' id='name'/></td></tr>
    <tr><td>Дата рождения</td><td><input  type='text' id='birthday'/></td></tr>
    <tr><td>Контактный телефон</td><td><input type='text' id='contact'/></td></tr>
    <tr><td>Район проживания</td><td><input type='text' id='state'/></td></tr>
    <tr><td>Образование</td><td><input type='text' id='scool'/></td></tr>
    <tr><td>Специальность</td><td><input type='text' id='job'/></td></tr>
    <tr><td>Группа инвалидности</td><td><input type='text' id='invalid'/></td></tr>
    <tr><td>Диагноз</td><td><input type='text' id='diagnos'/></td></tr>
    <tr><td>ИПР</td><td><input type='text' id='ipr'/></td></tr>
    <tr><td>Дополнительно</td><td><input type='text' id='advanset'/></td></tr>
    <tr><td>Желаемая должность</td><td><input type='text' id='myjob'/></td></tr>
   </table> -->
</div>
<div id="delete" title="Basic dialog">
  <p>Вы действительно хотите удалить запись?</p>
</div>
