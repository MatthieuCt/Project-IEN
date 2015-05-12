<!--  start content-table-inner ...................................................................... START -->
<div id="content-table-inner">

        <!--  start table-content  -->
        <div id="table-content">

{include file="common/table.tpl" table_name="product-table"}

    <table id="product-table"  class="display">
    <thead>
    <tr>
       <!--  <th class="list_table_label" style="width: 15%">ID</th>
        <th class="list_table_label" style="width: 15%">{label get="TXT_EMPLOYEE_LANG"|default:"Language"}</th>-->
        <th class="list_table_label" style="width: 15%">{label get="TXT_EMPLOYEE_NAME"|default:"Name"}</th>
        <th class="list_table_label" style="width: 15%">{label get="TXT_EMPLOYEE_SURNAME"|default:"Surname"}</th>
        <th class="list_table_label" style="width: 15%">{label get="TXT_EMPLOYEE_EMAIL"|default:"Email"}</th> 
        <th class="list_table_label" style="width: 15%">{label get="TXT_EMPLOYEE_TITLE"|default:"Title"}</th>
        <th class="list_table_label" style="width: 15%">{label get="TXT_EMPLOYEE_BRANCH"|default:"Branch"}</th>
        <th class="list_table_label" style="width: 15%">{label get="TXT_EMPLOYEE_FUNCTION"|default:"Function"}</th>
       <th class="list_table_label" style="width: 15%">{label get="TXT_EMPLOYEE_PHONE"|default:"Phone Number"} </th> 
      <!--   <th class="list_table_label" style="width: 15%"> page </th>-->
        <th class="list_table_label narrow" style="width: 7%">{label get="LABEL_OPERACJE"|default:"Operations"}</th>
    </tr>
    </thead>
    <tbody>
    {foreach from=$data item=item key=key}
        <tr>
            <!--<td class="list_table_data" id_data="{$item.id}">{$item.user_id}</td>
            <td class="list_table_data">{$item.lang_name}</td>    too much information -->
            <td class="list_table_data">{$item.user_name}</td>
            <td class="list_table_data">{$item.user_surname}</td>
            <td class="list_table_data">{$item.user_email}</td>            
            <td class="list_table_data">{$item.title}</td>
            <td class="list_table_data">{$item.branch_name}</td>
            <td class="list_table_data">{$item.function_name}</td>
            <td class="list_table_data">{$item.phone}</td>
          <!--   <td class="list_table_data">{$item.page_id}</td>-->
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
