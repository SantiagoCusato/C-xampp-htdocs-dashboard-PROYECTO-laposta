
{if isset($smarty.session.USER_ID)}
<form action='addfamilia' method='POST'>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">FAMILIA</label>
  <input name='familia' type="text" class="form-control" i placeholder="">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">INFORMACION</label>
  <input name='informacion' type="text" class="form-control" ></input>
</div>
   <button type="submit" class="btn btn-primary btn-lg">Enviar</button> 

</div>
</form>
{/if}
