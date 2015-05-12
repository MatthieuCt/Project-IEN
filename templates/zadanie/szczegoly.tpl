<!--  start table-content  -->
<div id="table-content">

<h1>Szczegóły zadania</h1>
<table id="product-table"  class="display" style="width: 100%">
<tr>
    <td style="width: 30%"><b>Tytuł zadania</b></td>
    <td class="list_table_label" style="width: 70%">{$data.tytul|default:"<i style='color:red;'>Brak tytułu</i>"}</td>
</tr>
<tr>
    <td style="width: 30%"><b>Treść</b></td>
    <td class="list_table_label" style="width: 70%">{$data.tresc|nl2br|default:"Brak treści"}</td>
</tr>
<tr>
    <td style="width: 30%"><b>Poziom trudności</b></td>
    <td class="list_table_label" style="width: 70%">{$data.poziom}</td>
</tr>
<tr>
    <td style="width: 30%"><b>Kategoria</b></td>
    <td class="list_table_label" style="width: 70%">{$data.kategoria_nazwa}</td>
</tr>
<tr>
    <td style="width: 30%"><b>Kategoria nadrzędna</b></td>
    <td class="list_table_label" style="width: 70%">{$data.nadkategoria_nazwa}</td>
</tr>
<tr>
    <td style="width: 30%"><b>Rozwiązanie</b></td>
    <td class="list_table_label" style="width: 70%">{$data.rozwiazanie|nl2br|default:"<i style='color: red;'>Brak rozwiązania</i>"}
        {if $smarty.session.S_GrupaID eq 1 || $smarty.session.S_GrupaID eq 2 || $smarty.session.S_UserID eq $data.dodano_przez_id}
            <i style="float: right; padding-right: 10px;">
            {if $data.rozwiazanie == ""}
                <a style="color: blue;" href="/index.php?module=zadanie&amp;action=rozwiazanie_dodaj&id={$data.id}">Dodaj rozwiązanie</a>
            {else}
                <a style="color: blue;" href="/index.php?module=zadanie&amp;action=rozwiazanie_edytuj&id={$data.id}">Edytuj rozwiązanie</a>
            {/if}
            </i>
        {/if}
    </td>
</tr>
<tr>
    <td style="width: 30%"><b>Dodano</b></td>
    <td class="list_table_label" style="width: 70%">{$data.dodano_przez}<i style="float: right; padding-right: 10px;">{$data.data_dodania}</i></td>
</tr>
<tr>
    <td style="width: 30%"><b>Zmodyfikowano</b></td>
    <td class="list_table_label" style="width: 70%">{$data.zmodyfikowano_przez}<i style="float: right; padding-right: 10px;">{$data.data_modyfikacji}</i></td>
</tr>
{if $smarty.session.S_GrupaID == 1}
<tr>
    <td style="width: 30%"><b>Usunięto</b></td>
    <td class="list_table_label" style="width: 70%; font-weight: bold; {if $data.usun == 1} color: red;{else} color:green;{/if}">{if $data.usun == 1}Usunięto{else} - {/if}</td>
</tr>
{/if}
{if $smarty.session.S_GrupaID ne 0}
<tr>
    <td style="width: 30%"><b>Zadanie widoczne</b></td>
    <td class="list_table_label" style="width: 70%; font-weight: bold; {if $data.ukryj == 1} color: red;{else} color:green;{/if}">{if $data.ukryj == 1}Prywatnie{else} Publicznie {/if}</td>
</tr>
{/if}
</table>

<h3>Komentarze do zadania</h3>
<table id="product-table"  class="display" style="width: 100%">
{foreach from=$komentarze item=item}
    <tr>
        <td style="width: 30%"><b>{$item.uzytkownik}</b><br /><i>{$item.data_komentarza}</td>
        <td class="list_table_label" style="width: 60%">{$item.komentarz|nl2br}</td>
        {if $smarty.session.S_GrupaID ne 0}<td class="list_table_label" style="width: 10%">
            {if $smarty.session.S_UserID != $item.uzytkownik_id}
                {include file="common/item_actions.tpl" current_module="komentarz" id=$item.id noedit=1 nodelete=1}
            {else}
                {include file="common/item_actions.tpl" current_module="komentarz" id=$item.id}
            {/if}
        </td>{/if}
    </tr>
{foreachelse}
    <tr>
        <td colspan="3"><i>Brak komentarzy do zadania. </i></td>
    </tr>
{/foreach}
{if $smarty.session.S_GrupaID> 0}
<tr>
        <td colspan="3"><i><a style="color: blue;" href="/index.php?module=komentarz&amp;action=dodaj&zadanie_id={$data.id}">Dodaj komentarz</a></i></td>
</tr>
</table>
{/if}

</div>
<!--  end content-table  -->