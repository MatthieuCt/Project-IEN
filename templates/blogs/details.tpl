<table id="product-table"  class="display">

<a href="/index.php?module=editor&amp;action=page&amp;page_id={$item.id}&amp;blog_id={php}echo $_COOKIE['blogslistproduct-tableid'];{/php}&amp;return_module={$current_module}&amp;return_action=list{$params}">Add a page to this blog</a>    
    
<tbody>
{foreach from=$data_blog item=item key=key}
    <thead>
        <tr>
            <th>{$item.page_name}</th>
        <th><a href="/index.php?module=editor&amp;action=page&amp;page_id={$item.id}&amp;return_module={$current_module}&amp;return_action=list{$params}">edit content</a></th>
        <th><a href="/index.php?module=blogs&amp;action=deletepage&amp;page_id={$item.id}&amp;return_module={$current_module}&amp;return_action=list{$params}">delete the page of the blog</a></th>
        </tr>
   </thead>
    
    
   <tr>

       <td class="list_table_data">
            {$item.page_content}
        </td>

    </tr>

{/foreach}
</tbody>
</table>

