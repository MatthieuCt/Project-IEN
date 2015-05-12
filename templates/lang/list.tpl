<!--  start content-table-inner ...................................................................... START -->
<div id="content-table-inner">

        <!--  start table-content  -->
        <div id="table-content">

{include file="common/table.tpl" table_name="product-table"}

    <table id="product-table"  class="display">
    <thead>
    <tr>
        <th class="list_table_label" style="width: 33%">{label get="TXT_LANG_LANGUAGE"|default:"Language flag"}</th>
        <th class="list_table_label" style="width: 33%">{label get="TXT_LANG_SHORT"|default:"Language"}</th>
        <th class="list_table_label narrow" style="width: 33%">{label get="LABEL_OPERACJE"|default:"Operations"}</th>
    </tr>
    </thead>
    <tbody>
    {foreach from=$data item=item key=key}
        <tr>
            <td class="list_table_data" id_data="{$item.id}">
                <img src="../../images/icons/{if $item.id == 1}pl{elseif $item.id == 2}gb{else}fr{/if}.png" 
                     alt="{if $item.id == 1}polish flag{elseif $item.id == 2}english flag{else}french flag{/if}"
                />
            </td>
            <td class="list_table_data">{$item.lang_short}</td>
            <td class="list_table_data">
                {if $item.active == 0}
                {include file="common/item_actions.tpl" id=$item.id enable=1}
                {else}
                {include file="common/item_actions.tpl" id=$item.id disable=1}
                {/if}
            </td>
        </tr>

    {/foreach}
    </tbody>
    </table>

</div>
<!--  end content-table  -->
</div>
