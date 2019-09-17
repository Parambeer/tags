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
        function allTags() {
            // get all the tags in the form an array with specific post id and store in variable
            $tags = get_the_tags($post->ID);
            // if $tags variable contains actual tags of the post
            if($tags) :
                // variable to store the result
                $output = "";
                // a separator, put line between values 
                $separator = " | ";
                // loop through an array to grab each value in an array
                foreach ($tags as $tag) :
                    // if array has 'tag1' value then store in $output variable and also attach separator
                    if ($tag->name ===  'tag1') :
                        $output .= $tag->name . $separator;
                    // if array has 'tag2' value then store in $output variable (using concatination operator) and also attach separator
                    elseif ($tag->name === 'tag2') :
                        $output .= $tag->name . $separator;
                    // if array has 'tag3' value then store in $output variable (using concatination operator) and also attach separator
                    elseif ($tag->name === 'tag3') :
                        $output .= $tag->name . $separator;
                    // finally if array doesn't contain relevant value that we want then add nil and also attach separator
                    else :
                        $output .= 'nil' . $separator; // (we can comment out this line if we just want the result with 3 values 'tag1', 'tag2', 'tag3')
                    //end condition checking
                    endif;
                // end loop through    
                endforeach;
            endif;
            // finally return the list of values by eliminating separator from the end of list
            return trim($output, $separator);
        }
        // call the function and prints the result
        print allTags();  
    ?>
</body>
</html>