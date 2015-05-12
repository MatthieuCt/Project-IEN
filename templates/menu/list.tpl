<!--  start content-table-inner ...................................................................... START -->
<div id="content-table-inner">

    <!--  start table-content  -->
    <div id="table-content">

        {include file="common/table.tpl" table_name="product-table"}

        <table id="product-table"  class="display">
            <thead>
                <tr>
                    <th class="list_table_label" style="width: 11%">{label get="TXT_MENU_LANG"|default:"Lang"}</th>
                    <th class="list_table_label" style="width: 11%">{label get="TXT_MENU_NAME"|default:"Menu name"}</th>
                    <th class="list_table_label" style="width: 11%">{label get="TXT_PARENT_MENU"|default:"Parent menu"}</th>
                    <th class="list_table_label" style="width: 11%">{label get="TXT_MENU_PUBLISH_START"|default:"Publish start"}</th>
                    <th class="list_table_label" style="width: 11%">{label get="TXT_MENU_PUBLISH_END"|default:"Publish end"}</th>
                    <th class="list_table_label" style="width: 11%">{label get="TXT_MENU_MODULE"|default:"Module"}/{label get="TXT_MENU_ACTION"|default:"Action"}</th>
                    <th class="list_table_label narrow" style="width: 8%">{label get="LABEL_OPERACJE"|default:"Operations"}</th> 
                </tr>
            </thead>
            <tbody>
                {foreach from=$data item=item key=key}
                    <tr>
                        <td class="list_table_data" id_data="{$item.id}">{$item.lang_name}</td> 
                        <td class="list_table_data">{$item.menu_name}</td>
                        <td class="list_table_data">{$item.parent_menu_name}</td>
                        <td class="list_table_data">{$item.publish_start_dt}</td> 
                        <td class="list_table_data">{$item.publish_end_dt}</td>
                        <td class="list_table_data">{$item.module}/{$item.action}</td>
                        {if $item.page_id == ""}{assign var="page_edit" value="0"}
                        {else}{assign var="page_edit" value="1"}{/if}
                        <td class="list_table_data">
                            {if $item.active == 0}
                            {include file="common/item_actions.tpl" id=$item.id enable=1 page_edit=$page_edit page_id="`$item.page_id`" params="&amp;menu_id=`$item.id`"}
                            {else}
                            {include file="common/item_actions.tpl" id=$item.id disable=1 page_edit=$page_edit page_id="`$item.page_id`" params="&amp;menu_id=`$item.id`"}
                            {/if}
                        </td>
                    </tr>

                {/foreach}
            </tbody>
        </table>

    </div>
    <!--  end content-table  -->
</div>
