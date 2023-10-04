<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syntax Overview</title>
</head>
<body>
    <?php 
        print "This is an overview of the syntax.<br>";
        //This is a single line comment
        /*

        lkasjdlakdsjasdlkajlsdajlsdlkacvbnvcbn
        This is a multi line comment
        lkjsiouvcpxzcvukljshfdopiasudfvcbnvcbf

        */
        /*
        
        Things to remember:
        - PHP is whitespace insensitive */
        $sum = 1 + 1;
        $sum            =       1           +      1 ;
        $sum = 
        1+1;

        /*
        - It is case sensitive
        The variable $sum cannot be called if it is typed in this way:
            $SUM
        */
        $statement = "this is a statement";

        // The following is the same:
        if(TRUE)
            print "This is true<br>";
        if(TRUE){
            print "This is ";
            print "true<br>";
        }
    ?>
</body>
</html>