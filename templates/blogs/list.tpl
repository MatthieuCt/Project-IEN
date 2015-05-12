<!--  start content-table-inner ...................................................................... START -->

<div id="content-table-inner">
            
    
            
            <div id="table-content" style="width: 35%;float:left;">
           
            {include file="common/table.tpl" table_name="product-table" detail="details"}

                <table id="product-table"  class="display">
                    <thead>
                        <tr>
                            <th class="list_table_label sorting" style="width: 30%">Blog ID</th>
                            <th class="list_table_label sorting" style="width: 15%">{label get="TXT_BLOG_EMPLOYEE"|default:"Employee ID"}</th>
                            <th class="list_table_label sorting" style="width: 15%">{label get="TXT_BLOG_NAME"|default:"Blog name"}</th>
                            <th class="list_table_label narrow" style="width: 7%">{label get="LABEL_OPERACJE"|default:"Operations"}</th>
                        </tr>
                    </thead>
                    <tbody>
                    {foreach from=$data item=item key=key}
                        <tr>
                            <td class="list_table_data" id_data="{$item.id}">{$item.id}</td>
                            <td class="list_table_data" id_data="{$item.id}">{$item.employee_id}</td>
                            <td class="list_table_data" id_data="{$item.id}">{$item.blog_name}</td>
                            <td class="list_table_data" id_data="{$item.id}">{include file="common/item_actions.tpl" id=$item.id}</td>
                        </tr>

                    {/foreach}
                   
                </tbody>
                         
                        </table>
        
             
            </div>
                    
                           
</div>
                    
    <div id="details" style="width: 63%;float:right;">
    </div>
