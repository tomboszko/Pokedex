<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?> - Pokedex</title>
    <link rel="stylesheet" href="<?=(isset($url['path'])) ? '../' : ''?>dist/style.css" type="text/css">
</head>
<body>
    <header class="flex flex-col items-center gap-4 p-y-5 border-y-2">
        <img class="" src="<?=(isset($url['path'])) ? '../' : ''?>public/img/pokemon-logo.png" width="250" alt="Logo pokémon">
        <nav class="w-full flex justify-center gap-4 border-y-2 border-slate-400 py-2">
            <a class="" href="/Pokedex/">Pokemon</a>
            <a href="/Pokedex/index.php/login">My account</a>
            <a href="/Pokedex/index.php/register">Register</a>
            <a href="/Pokedex/index.php/addpokemon">Add Pokémon</a>
        </nav>
    </header>
    
