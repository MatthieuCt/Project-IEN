<!--  start content-table-inner ...................................................................... START -->
<div id="content-table-inner">
<table width="100%">
    <tr>
        <td style="width: 60%;" valign="top">
            <!--  start table-content  -->
            <div id="table-content">

            {include file="common/table.tpl" table_name="product-table" detail="szczegoly"}

            <table id="product-table"  class="display">
            <thead>
            <tr>
                <th class="list_table_label sorting" style="width: 30%">Zadania</th>
                <th class="list_table_label sorting" style="width: 15%">Kategoria</th>
                <th class="list_table_label sorting" style="width: 15%">Poziom</th>
                <th class="list_table_label sorting" style="width: 15%">Data dodania</th>
                <th class="list_table_label sorting" style="width: 15%">Data modyfikacji</th>
                {if $smarty.session.S_GrupaID ne 0}<th class="list_table_label narrow" style="width: 7%">Akcje</th>{/if}
            </tr>
            </thead>
            <tbody>
            {foreach from=$data item=item key=key}
            {assign var="short" value=$item.tresc|truncate:30:"...":true}
                <tr>
                    <td class="list_table_data" id_data="{$item.id}">
                        <div style="float: left; font-weight: bold; font-size: 14px;"><i>{$item.tytul|default:$short}</div>
                    </td>
                    <td class="list_table_data">{$item.kategoria_nazwa}</td>
                    <td class="list_table_data">{$item.poziom_trudnosci_nazwa}</td>
                    <td class="list_table_data">{$item.data_dodania}</td>
                    <td class="list_table_data">{$item.data_modyfikacji}</td>
                    {if $smarty.session.S_GrupaID ne 0}<td class="list_table_data" style="width: 100px;">
                        {if $smarty.session.S_UserID != $item.uzytkownik_id && $smarty.session.S_GrupaID ne 1 && $smarty.session.S_GrupaID ne 2}
                            {include file="common/item_actions.tpl" id=$item.id noedit=1 nodelete=1}
                        {else}
                            {include file="common/item_actions.tpl" id=$item.id}
                        {/if}
                    </td>{/if}
                </tr>

            {/foreach}
            </tbody>
            </table>

            </div>
            <!--  end content-table  -->
        </td>
        <td  valign="top">
            <div id="szczegoly" style="width: 100%; border-left: 1px solid grey;"></div>
        </td>
    </tr>
</table>
</div>
