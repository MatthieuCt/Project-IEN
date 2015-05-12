<div class="content1">Wyszukiwarka</div>
<div class="content2">wprowadź frazę, aby odnależć interesujący rekord</div>


<div id="searchDescs" style="display: block;">
	<br />
	<form method="post" id="searchForm"> 
	<table class="mainTable">
	<tr>
		<td colspan="2" class="gridHeader">SZUKAJ OPISÓW</td>
	</tr>
	<tr>
		<td class="gridRow1" style="text-align: center; font-weight: bold;">fraza</td>
		<td class="gridRow1">
			<input type="text" id="phrase" name="phrase" style="width: 350px;" />
			<input type="button" onclick="javascript:searchForm($('phrase').value)" value="Szukaj" />
		</td>
	</tr>
	</table>
	</form>

</div>
<br />
<div id="descsDiv" style="display: none;">
<form action="./inc/ajax/user/descVote.php" method="post" id="descVote">
<input type="hidden" name="descID" id="descID" />
<input type="hidden" name="type" id="type" />
<table class="mainTable">
  <thead>
    <tr>
      <!--<td class="gridHeader" style="width: 20px; text-align: center;"></td>-->
      <td class="gridHeader" style="width: 400px;">OPIS</td>
      <td class="gridHeader" style="width: 20px;"></td>
      <td class="gridHeader" style="width: 20px;"></td>
    </tr>
  </thead>
  <tbody id="dataTable">
  </tbody>
  <tfoot>
    <tr>
      <td colspan="5">
        <span id="dataStats" style="float: left; margin-top: 2px"></span>
        <span style="float: right">
          <a id="btnFirst" href="javascript:changePage(-currentPage)" title="Pierwsza strona">&laquo;&laquo;</a>
          <a id="btnPrev" href="javascript:changePage(-1)" title="Poprzednia strona">&laquo;</a>
          <a id="btnNext" href="javascript:changePage(1)" title="Następna strona">&raquo;</a>
          <a id="btnLast" href="javascript:changePage(maxPage-currentPage-1)" title="Ostatnia strona">&raquo;&raquo;</a>
        </span>
      </td>
    </tr>
  </tfoot>
</table>
</form>
</div>
