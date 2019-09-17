# tags
Finding tags


I have added a file named 'tags.php' having all the functionality required and also put comments on each line that how this code with function.

Explanation:

1. First we call a function allTags().
2. Now we grab all the tags (in the form an array) of a specific post by sending post id with the query and store in variable.
3. If that variable has value then loop through each array value using foreach.
4. Now where the relevant tags (that we want) match, it will be stored in output variable (by using cancat operator) with separator to keep them apart or look them nice.
5. If our relevant tags do not match it will store the value 'nil' into the variable.
6. Finally, after looping through all the array values, it will return us result which we print on screen.
