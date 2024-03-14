<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>

    <h1>Recommended Books</h1>

    <?php
    $books = [
        [
            "name" => "Do Androids Dream of Electric Sheep?",
            "author" => "Philip K. Dick",
            "buyUrl" => "http://www.example.com",
            "year" => 1968
        ],
        [
            "name" => "To Kill a Mockingbird",
            "author" => "Harper Lee",
            "buyUrl" => "http://www.example.com",
            "year" => 1960
        ],
        [
            "name" => "1984",
            "author" => "George Orwell",
            "buyUrl" => "http://www.example.com",
            "year" => 1949
        ],
        [
            "name" => "The Great Gatsby",
            "author" => "F. Scott Fitzgerald",
            "buyUrl" => "http://www.example.com",
            "year" => 1925
        ]
    ];


    function filterByAuthor() {
        return "Zitis";
    }
    
    filterByAuthor();
    ?>
    <ul>
        <?php foreach ($books as $book) : ?>
               
                        <li>
                <a href="<?= $book['buyUrl'] ?>">
                    <?= $book['name'] ?><br>
                    (<?= $book['year'] ?>)<br>
                    <?= $book['author'] ?><br>
                </a>
            </li>
            
        <?php endforeach ?>
    </ul>
    

</body>

</html>