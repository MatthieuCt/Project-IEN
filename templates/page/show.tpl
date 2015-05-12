{if $smarty.get.c eq 'search'}
    {include file="search/search_frontend.tpl"}
{else}
{include file="common/page_article.tpl"}
{/if}