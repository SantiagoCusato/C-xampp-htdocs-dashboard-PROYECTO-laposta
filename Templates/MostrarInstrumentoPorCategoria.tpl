{include file = "Header.tpl"}
<h1 class="display-6"></h1>
  <ul class="list-group list-group-numbered">
  {foreach from=$instrumentoCategoria item=$item}
      
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <p>{$item->instrumento}:</p> 
          <span> - Precio {$item->precio} - Descripcion {$item->descripcion}</span>
        
    </li>
  {/foreach}
  </ul>
  {include file= "footer.tpl"}
