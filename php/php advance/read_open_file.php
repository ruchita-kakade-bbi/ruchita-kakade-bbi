<?php
//---------------fread() reading data from file--------
            // echo readfile("webdictionary.txt");
// //The readfile() function reads a file and writes it to the output buffer.
// //he readfile() function is useful if all you want to do is open up a file and read its contents.


//-------------------fopen()-----PHP File Open/Read/Close----
//A better method to open files is with the fopen() function. This function gives you more options than the readfile() function.
            //  $myfile =fopen("webdictionary.txt","r") or die("file not found");
            // echo fread($myfile,filesize("webdictionary.txt"));
            // //The fclose() function is used to close an open file.
            // fclose($myfile);


//     The file may be opened in one of the following modes:
            // Modes	                Description
// r	Open a file for read only. File pointer starts at the beginning of the file
// w	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
// a	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
// x	Creates a new file for write only. Returns FALSE and an error if file already exists
// r+	Open a file for read/write. File pointer starts at the beginning of the file
// w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
// a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
// x+	Creates a new file for read/write. Returns FALSE and an error if file already exists

//-----------------PHP Read Single Line - fgets()------------------
//The fgets() function is used to read a single line from a file.
            // $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
            // echo fgets($myfile);
            // fclose($myfile);
//Note: After a call to the fgets() function, the file pointer has moved to the next line.


//------------PHP Check End-Of-File - feof()-----------------------
//The feof() function checks if the "end-of-file" (EOF) has been reached.
//The feof() function is useful for looping through data of unknown length.
            // $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
            // // Output one line until end-of-file
            // while(!feof($myfile)) {
            // echo fgets($myfile) . "<br>";
            // }
            // fclose($myfile);        


//-----------------PHP Read Single Character - fgetc()-------
//The fgetc() function is used to read a single character from a file.
            $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
            // Output one character until end-of-file
            echo fgetc($myfile);
            fclose($myfile);

?>