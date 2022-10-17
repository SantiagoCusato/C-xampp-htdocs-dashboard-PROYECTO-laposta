{include file="Header.tpl"}
{include file="FormularioAgregarFamilia.tpl"}
<ul class="list-group list-group-horizontal">
{foreach from=$familia item=$item}
  <li class="list-group-item">{$item->familia}</li>
  <li class="list-group-item">{$item->informacion}</li>
  {if isset($smarty.session.USER_ID)}
  <a href='deleteFamilia/{$item->id}' type='button' class='btn btn-danger'>Borrar</a>
  <a href='editFamilia/{$item->id}' type='button' class='btn btn-danger'>Modificar</a>
  {/if}
{/foreach}
</ul>
{include file="Footer.tpl"}
