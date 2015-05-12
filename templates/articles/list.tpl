<!--  start content-table-inner ...................................................................... START -->
<div id="content-table-inner">
 
        <!--  start table-content  -->
    <div id="table-content">

        {include file="common/table.tpl" table_name="product-table"}

            <table id="product-table"  class="display">
                <thead>
                    <tr>

                        <th class="list_table_label" style="width: 11%">{label get="TXT_ARTICLE_LANG"|default:"Lang"}</th>
                        <th class="list_table_label" style="width: 11%">{label get="TXT_ARTICLE_NAME"|default:"Article name"}</th>
                        <th class="list_table_label" style="width: 11%">{label get="TXT_ARTICLE_PAGE"|default:"Page"}</th>
                        <th class="list_table_label" style="width: 11%">{label get="TXT_ARTICLE_PUBLISH"|default:"Publish"}</th>
                        <th class="list_table_label narrow" style="width: 7%">{label get="LABEL_OPERACJE"|default:"Operations"}</th>
                </tr>
                </thead>
                <tbody>
                    {foreach from=$data item=item key=key}
                        <tr>
                            <td class="list_table_data" id_data="{$item.id}">{$item.langname}</td>
                            <td class="list_table_data">{$item.article_name}</td> 
                            <td class="list_table_data">{$item.page_id}</td>
                            <td class="list_table_data">{$item.article_publish}</td>
                            {if $item.visible_flag == ""}{assign var="page_edit" value="0"}
                            {else}{assign var="page_edit" value="1"}{/if}
                            <td class="list_table_data">
                            {if $item.visible_flag == 0}
                                {include file="common/item_actions.tpl" id=$item.id enable=1 page_edit=$page_edit page_id="`$item.page_id`" params="&amp;article_id=`$item.id`"}
                            {else}
                                {include file="common/item_actions.tpl" id=$item.id disable=1 page_edit=$page_edit page_id="`$item.page_id`" params="&amp;article_id=`$item.id`"}
                            {/if}
                            </td>
                        </tr>

                    {/foreach}
                </tbody>
            </table>

    </div>
<!--  end content-table  -->
</div>