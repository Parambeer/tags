<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Find tags</title>
</head>
<body>
    <?php 
        function all_tags() {
            // declare variable to store the result
            $output = "";
                // now if a post contains specific tags the store in the vaiable. We are also concatinating the strings
                if (has_tag('tag1') && has_tag('tag2') && has_tag('tag3')) :
                    $output .= $tag->name . " ";
                    $output .= "All relevant tags found";
                else :
                    // if relevant tags do not match then add 'nil' to the output varibale
                    $output .= "nil";
                endif;
            //returns the result
            return $output;
        }
        // calls a function and prints result
        print all_tags();
    ?>
</body>
</html>