<!--  start content-table-inner ...................................................................... START -->
<div id="content-table-inner">
 
        <!--  start table-content  -->
        <div id="table-content">

{include file="common/table.tpl" table_name="product-table"}

    <table id="product-table"  class="display">
    <thead>
    <tr>
        <th class="list_table_label" style="width: 20%">Kategoria</th>
        <th class="list_table_label" style="width: 20%">Kategoria nadrzędna</th>
        <th class="list_table_label" style="width: 50%">Opis</th>
        <th class="list_table_label narrow" style="width: 7%">Operacje</th> 
    </tr>
    </thead>
    <tbody>
    {foreach from=$data item=item key=key}
        <tr>
            <td class="list_table_data" id_data="{$data[item_id].id}">{$item.kategoria_nazwa}</td>
            <td class="list_table_data">{$item.nadkategoria_nazwa}</td> 
            <td class="list_table_data">{$item.opis}</td> 
            <td class="list_table_data">{$item.action}
                {include file="common/item_actions.tpl" id=$item.id}
            </td>
        </tr>

    {/foreach}
    </tbody>
    </table>

</div>
<!--  end content-table  -->
</div>
