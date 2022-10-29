<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Delfosti</title>
</head>
<body>
    <h1>Ejercicio Práctico</h1>
    <h2>Productos en Oferta</h2>
    <table >
    <?php
    $products = [
        [
            '_id' => 'Fruta',
            'name' => 'Manzana',
            'slug' => 'Kg',
        ],
        [
            '_id' => 'Verdura',
            'name' => 'Espinaca',
            'slug' => 'Kg',
        ],
        [
            '_id' => 'Fruta',
            'name' => 'Plátano',
            'slug' => 'Kg',
        ],
        [
            '_id' => 'Verdura',
            'name' => 'Zanhoria',
            'slug' => 'Kg',
        ],
        [
            '_id' => 'Fruta',
            'name' => 'Naranja',
            'slug' => 'Kg',
        ],
        [
            '_id' => 'Verdura',
            'name' => 'Papa',
            'slug' => 'Kg',
        ],
        [
            '_id' => 'Fruta',
            'name' => 'Pera',
            'slug' => 'Kg',
        ],
        [
            '_id' => 'Verdura',
            'name' => 'Coliflor',
            'slug' => 'Kg',
        ],
        [
            '_id' => 'Fruta',
            'name' => 'Mango',
            'slug' => 'Kg',
        ],
        [
            '_id' => 'Verdura',
            'name' => 'Vainita',
            'slug' => 'Kg',
        ],
        [
            '_id' => 'Abarrote',
            'name' => 'Aceite',
            'slug' => 'l',
        ],
        [
            '_id' => 'Abarrote',
            'name' => 'Leche',
            'slug' => 'l',
        ],
        [
            '_id' => 'Menestra',
            'name' => 'Lenteja',
            'slug' => 'kg',
        ],
        [
            '_id' => 'Abarrote',
            'name' => 'Arroz',
            'slug' => 'kg',
        ],
        [
            '_id' => 'Menestra',
            'name' => 'Pallar',
            'slug' => 'kg',
        ],
        [
            '_id' => 'Abarrote',
            'name' => 'Azucar',
            'slug' => 'kg',
        ],
        [
            '_id' => 'Otros',
            'name' => 'Franela',
            'slug' => 'm',
        ],
        [
            '_id' => 'Carnes',
            'name' => 'Pescado',
            'slug' => 'kg',
        ],
        [
            '_id' => 'Carnes',
            'name' => 'Res',
            'slug' => 'kg',
        ],
        [
            '_id' => 'Carnes',
            'name' => 'Pavita',
            'slug' => 'kg',
        ],
    ];

    
    foreach ($products as $item) {
        
      
        echo $item['_id'] . '<br>';
        echo $item['name'] . '<br>';
        echo $item['slug'] . '<br>';
        
        

        echo '<hr>';
    }
 
    ?>
    </table>
</body>
</html>