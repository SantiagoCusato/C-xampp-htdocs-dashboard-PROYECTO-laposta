{include file= "Header.tpl"}
{if isset($smarty.session.USER_ID)}
<form action='updatefamilia/{$familia->id}' method='POST'>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">FAMILIA</label>
  <input name='familiaMod' type="text" class="form-control" value="{$familia->familia}">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">INFORMACION</label>
  <input name='informacionMod' type="text" class="form-control" value="{$familia->informacion}">
</div>
  <div class="mb-3"> 
   <button type="submit" class="btn btn-primary btn-lg">Enviar</button> 
</div>
</form>
{/if}
{include file ="footer.tpl"}
