<nav style="display: table; margin: auto">
    <ul class="pagination">
        {if isset($result->toStart)}
            <li><a href="{$BASE_URL}{$METHOD}?page={$result->toStart+1}">В начало</a></li>
        {/if}
        {if $result->prev == true}
            <li><a href="{$BASE_URL}{$METHOD}?page={$result->currentPage-1}" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
        {/if}
        {foreach from=$result->pages item=page}
            {if !isset($page->active)}
                <li><a href="{$BASE_URL}{$METHOD}?page={$page->value}">{$page->value}<span class="sr-only">(current)</span></a>
                </li>
            {else}
                <li class="active"><a href="{$BASE_URL}{$METHOD}?page={$page->value}">{$page->value}<span class="sr-only">(current)</span></a>
                </li>
            {/if}
        {/foreach}
        {if $result->next == true}
            <li><a href="{$BASE_URL}{$METHOD}?page={$result->currentPage+1}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        {/if}
        {if isset($result->toEnd)}
            <li><a href="{$BASE_URL}{$METHOD}?page={$result->toEnd}">В конец</a></li>
        {/if}
    </ul>
</nav>