<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link  href="style.css">
    <title>Document</title>
</head>
<body class="body">
<header>
<nav class="navbar navbar-expand-lg bg-light">
 <div class="container-fluid">
      <a class="navbar-brand" href="home">PENTAGRAMA</a>
  <ul class="nav justify-content-end">
  <li class="nav-item">
  </li>
  <li class="nav-item">
  <a class="navbar-brand" href='home'>Instrumentos</a>
  </li>
  <div class="dropdown">
                <a class="btn dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Familia de Instrumentos</a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li class="nav-item"><a class="nav-link text-black" href='homeFamilia'>TODAS</a></li>
                {foreach from=$familia item=$item}
                    <li><a class="dropdown-item" href="filtro/{$item->id}">{$item->familia}</a></li>
                {/foreach}

                </ul>
                </li>
            
  </div>
  {if !isset($smarty.session.USER_ID)}
    <li class="nav-item">
  <a class="navbar-brand" href='login'>Ingresar</a>
  </li>
  {else}
    <li class="nav-item">
    <a class="navbar-brand" href='logout'>Desconectar</a>
    </li>
  {/if}
  
  
</ul>
</nav> 
</header>

