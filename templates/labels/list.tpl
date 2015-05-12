<!--  start content-table-inner ...................................................................... START -->
<div id="content-table-inner">
 
        <!--  start table-content  -->
        <div id="table-content">

{include file="common/table.tpl" table_name="product-table"}

    <table id="product-table"  class="display">
    <thead>
    <tr>
        <th class="list_table_label" style="width: 33%">langue</th>
        <th class="list_table_label" style="width: 33%">label name</th>
        <th class="list_table_label" style="width: 15%">label value</th>
        <th class="list_table_label narrow" style="width: 7%">Operacje</th>
    </tr>
    </thead>
    <tbody>
    {foreach from=$data item=item key=key}
        <tr>
            <td class="list_table_data" id_data="{$item.id}">{$item.langname}</td>
            <td class="list_table_data">{$item.label_name}</td> 
            <td class="list_table_data">{$item.label_value}</td> 
            <td class="list_table_data">
                {include file="common/item_actions.tpl" id=$item.id}
            </td>
        </tr>

    {/foreach}
    </tbody>
    </table>

</div>
<!--  end content-table  -->
</div>
