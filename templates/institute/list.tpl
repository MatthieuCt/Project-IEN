<!--  start content-table-inner ...................................................................... START -->
<div id="content-table-inner">

        <!--  start table-content  -->
        <div id="table-content">

{include file="common/table.tpl" table_name="product-table"}

    <table id="product-table"  class="display">
    <thead>
    <tr>
        <th class="list_table_label" style="width: 33%">{label get="TXT_INSTITUTE_NAME"|default:"Institute name"}</th>
        <th class="list_table_label" style="width: 33%">{label get="TXT_INSTITUTE_SYMBOL"|default:"Symbol"}</th>
        <th class="list_table_label" style="width: 15%">{label get="TXT_INSTITUTE_LANGUAGE"|default:"Language"} </th>
        <th class="list_table_label narrow" style="width: 7%">{label get="LABEL_OPERACJE"|default:"Operations"}</th>
    </tr>
    </thead>
    <tbody>
    {foreach from=$data item=item key=key}
        <tr>
            <td class="list_table_data" id_data="{$item.id}">{$item.branch_name}</td>
            <td class="list_table_data">{$item.symbol}</td> 
            <td class="list_table_data">{$item.lang_name}</td>
            {if $item.page_id == ""}{assign var="page_edit" value="0"}
            {else}{assign var="page_edit" value="1"}{/if}
            <td class="list_table_data">
                {if $item.active == 0}
                {include file="common/item_actions.tpl" id=$item.id enable=1 page_edit=$page_edit page_id="`$item.page_id`"}
                {else}
                {include file="common/item_actions.tpl" id=$item.id disable=1 page_edit=$page_edit page_id="`$item.page_id`"}
                {/if}
            </td>
        </tr>

    {/foreach}
    </tbody>
    </table>

</div>
<!--  end content-table  -->
</div>
