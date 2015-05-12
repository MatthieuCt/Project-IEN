<!--  start content-table-inner ...................................................................... START -->
<div id="content-table-inner">

        <!--  start table-content  -->
        <div id="table-content">

{include file="common/table.tpl" table_name="product-table"}

    <table id="product-table"  class="display">
    <thead>
    <tr>
        <th class="list_table_label" style="width: 50%">Uzytkownik</th>
        <th class="list_table_label" style="width: 20%">Login</th>
        <th class="list_table_label">Email</th>
        <th class="list_table_label">Description</th>
        <th class="list_table_label" >Group</th>
        <th class="list_table_label narrow" style="width: 7%">Akcje</th> 
    </tr>
    </thead>
    <tbody>
    {foreach from=$data item=item key=key}
        <tr>
            <td class="list_table_data" id_data="{$data[item_id].id}">{$item.user_name}</td>
            <td class="list_table_data">{$item.user_login}</td>
            <td class="list_table_data">{$item.user_email}</td>
            <td class="list_table_data">{$item.user_description}</td>
            <td class="list_table_data">{$item.name}</td>     
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
