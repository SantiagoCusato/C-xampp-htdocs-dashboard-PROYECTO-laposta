{include file="Header.tpl" }
{if isset($smarty.session.USER_ID)}
<form action='update/{$id}' method='POST'>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">INSTRUMENTO</label>
  <input name='InstrumentoMod' type="text" class="form-control" i placeholder="" value="{$instrumento->instrumento}">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">PRECIO</label>
  <input name='PrecioMod' type="numero" class="form-control" value="{$instrumento->precio}" >
</div>
  <div class="mb-3">
   <label for="exampleFormControlTextarea1" class="form-label">DESCRIPCION</label> 
   <input name='DescripcionMod'type = "text"class="form-control" value="{$instrumento->descripcion}">
   <label for="exampleFormControlTextarea1" class="form-label">FAMILIA</label> 
   {foreach from=$familia item=$item}
   <input name='familiaMod'type = "checkbox/{$item->familia}" class="form-control" value="{$instrumento->id_fk}"> 
   {/foreach}
   <button type="submit" class="btn btn-primary btn-lg">Enviar</button> 


</div>
</form>
{/if}

