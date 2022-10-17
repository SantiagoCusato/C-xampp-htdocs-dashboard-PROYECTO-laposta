{if isset($smarty.session.USER_ID)}
<form action='add' method='POST'>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">INSTRUMENTO</label>
  <input name='1' type="text" class="form-control" i placeholder="">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">PRECIO</label>
  <input name='2' type="number" class="form-control" ></input>
</div>
  <div class="mb-3">
   <label for="exampleFormControlTextarea1" class="form-label">DESCRIPCION</label> 
   <input name='3'type = "text"class="form-control" ></input> 
   <div class="mb-3">
   <label for="exampleFormControlTextarea1" class="form-label">FAMILIA</label> 
   <input name='4'type="number"class="form-control" ></input>
   <button type="submit" class="btn btn-primary btn-lg">Enviar</button> 

</div>
</form>
{/if}
