<?php
// The fwrite() function is used to write to a file.

// The first parameter of fwrite() contains the name of the file to write to and the second parameter is the string to be written.

// The example below writes a couple of names into a new file called "newfile.txt":
             $myfile = fopen("webdictionary.txt", "w");
             $txt = "John Doe\n";
             fwrite($myfile, $txt);
             $txt = "Jane Doe\n";
             fwrite($myfile, $txt);
             fclose($myfile);
// ?>