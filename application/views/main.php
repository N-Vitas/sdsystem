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
<div id="dialog" title="Basic dialog">
  <table cellpadding='0' cellspacing='0' border='0' id='formdialog' width='100%'>
    <tr><td colspan="2" class="error"></td></tr>
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
   </table>
</div>
<div id="delete" title="Basic dialog">
  <p>Вы действительно хотите удалить запись?</p>
</div>
