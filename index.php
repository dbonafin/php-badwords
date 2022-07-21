<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>

    <?php 
        // Sample text
        $myText = 'Ipsum lorem ipsum dolor sit amet consectetur lorem elit. Laudantium deserunt explicabo lorem sapiente cumque lorem non hic.';
        
        // Get censored word from the user and replace it with ***
        $badWord = $_GET["badword"];
        $censoredText = str_replace("$badWord","***","$myText");

        // Utilities 
        $textLength = strlen($censoredText);
        $textWordsNumber = str_word_count($censoredText); 
    ?>

    <!-- Print the text -->
    <p> <?php echo $censoredText ?> </p>

    <!-- Print the characters number of the text -->
    <p> Il testo è composto da <?php echo $textLength ?> caratteri. </p>
    <!-- Print the words number of the text -->
    <p> Le parole invece sono <?php echo $textWordsNumber ?>. </p>

</body>
</html>