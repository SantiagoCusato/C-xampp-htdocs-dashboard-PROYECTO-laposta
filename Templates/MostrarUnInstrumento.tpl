{include file = "Header.tpl"}
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
      <th scope="row">1</th>
      <td>{$instrumento->instrumento}</td>
      <td>{$instrumento->precio}</td>
      <td>{$instrumento->descripcion}</td>
    </tr>
  
    </tr>
  </tbody>
</table>
{include file = "Footer.tpl"}