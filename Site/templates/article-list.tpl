{include file="header.tpl"}
<div class="content">
  <p>&nbsp;</p>
  <ul class="article">
    {foreach from=$Articles item="Article"}
    <li><a href="{$SiteRoot}article.php?id={$Article.id}"><strong>{$Article.title}</strong>, <span class="author">by {$Article.title}</span></a></li>
    {/foreach}
  </ul>
  <p>&nbsp;</p>
  <div class="pager">
	<ul>
	  {foreach from=$Pages item="Page"}
	  <li><a href="{$SiteRoot}index.php?pageno={$Page}&pagesize=10"{if $Page eq $PageNo} class="act"{/if}>{$Page}</a></li>
	  {/foreach}
	</ul>
  </div>
</div>
{include file="footer.tpl"}