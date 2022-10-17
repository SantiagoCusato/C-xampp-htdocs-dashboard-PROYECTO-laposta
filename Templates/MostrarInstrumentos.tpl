{include file="Header.tpl"}
{include file="FormularioAgregar.tpl"}
 <table>
    {foreach from=$instrumentos item=$item}
      <table class="table">
  <thead>
    <tr>
     <th scope="col"></th>
      <th scope="col">INSTRUMENTO</th>
      <th scope="col">PRECIO</th>
      <th scope="col">DESCRIPCION</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <th scope="row">*</th>
      <td><a href="instrumento/{$item->id}"> {$item->instrumento}.</td>
      <td>{$item->precio}</td>
      <td>{$item->descripcion}</td>
    </tr>
  
    </tr>
  </tbody>
</table>
{if isset($smarty.session.USER_ID)}
    <a href='delete/{$item->id}' type='button' class='btn btn-danger'>Borrar</a>
    <a href='edit/{$item->id}' type='button' class='btn btn-danger'>Modificar</a>
    {/if}
    {/foreach}
     </table>
     
  {include file= "Footer.tpl"}