<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Fashion</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <h1 class="text-center text-2xl font-400 bg-teal-300 p-4">Bienvenido a nuestra Página de Fashion😘</h1><br><br>

    <form action="boleta.php" method="post" class="max-w-sm mx-auto">
    <div class="mb-5">
        <label for="cliente" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cliente</label>
        <input id="cliente" type="text" name="cliente" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
    </div>
    <div class="mb-5">
        <label for="dni" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DNI</label>
        <input id="dni" name="dni"  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
    </div>
    <div class="mb-5">
        <label for="producto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prenda</label>
        <select id="producto" name="producto" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" name="prenda" required>
            <option value="Pantalon de Lana|45.00">Pantalon de Lana - Precio $45.00</option>
            <option value="Sueter de camisir|100.00">Sueter de camisir - Precio $100.00</option>
            <option value="Blusa de seda|14.00">Blusa de seda - Precio $14.00</option>
            <option value="Camisola de seda|10.00">Camisola de seda - Precio $10.00</option>
            <option value="Falda recta|40.00">Falda Recta - Precio $40.00</option>
            <option value="Saco de Lana|120.00">Saco de Lana - Precio $120.00</option>
        </select>
    </div>
    <div class="mb-5">
        <label for="cantidad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cantidad</label>
        <input type="cantidad" id="cantidad" name="cantidad" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
    </div>
    <div class="mb-5">
        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha</label>
        <input id="fecha" name="fecha"  type="date" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
    </div>
    <button type="submit" class="text-white bg-teal-300 hover:bg-teal-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 align-center text-center">Calcular</button>
    </form>

</body>
</html>