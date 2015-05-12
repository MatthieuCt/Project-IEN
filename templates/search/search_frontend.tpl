<h2>{label get="TXT_SEARCH_RESULTS"}</h2>
    <ul>{foreach  from=$keywords item=v key=k}
        {if $k eq 'type'}
            <h3> {$v}s </h3>
        {else}
                <li>
                    <a class="units-link" href="/index.php?module=page&amp;action=show&amp;page_id={$v}"><strong>{$k}</strong>
                    </a> <br />
                </li>
                <br />
        {/if}
        {/foreach}
    </ul>