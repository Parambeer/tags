# tags
Finding tags: (If we have post tags like 'code', 'tag1', 'php', 'wordpress', 'tag2', 'tag3', 'javascript')


I have added 2 files named 'tags.php' (main solution) and 'tags2.php'.
'tags.php' file is having all the functionality required and also put comments on each line that how this code with function.
'tags2.php' file is an alternate solution that shows whether a post contains the relevant tags. Also added comments on this file.

Explanation for file tags.php (main):

1. First we call a function all_tags().
2. Now we grab all the tags (in the form an array) of a specific post by sending post id with the query and store in variable.
3. If that variable has value then loop through each array value using foreach.
4. Now where the relevant tags (that we want) match, it will be stored in output variable (by using cancat operator) with separator to keep them apart or look them nice.
5. If our relevant tags do not match it will store the value 'nil' into the variable.
6. Finally, after looping through all the array values, it will return us result which we print on screen.


Explanation for file tags2.php (alternate):

1. First we call a function all_tags().
2. Now we would check if that specific post contains those relevant tags by using php in-built function 'has_tag'.
3. If relevant tags match from the tags list then we store the result in the variable and return it which finally displays on the screen.
4. Otherwise (if relevant post tags are not present), we store 'nil' in the variable, return it, and print it on screen.
