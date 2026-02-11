<!-- File Functions from the lab task -->

<?php
echo "<h3>File Functions</h3>";
//File open and close
// $file=fopen("test.txt","r");
// echo "File opened successfully!<br/><br/>";
// fclose($file);
// echo "File closed successfully!<br/>";

//fwrite
// $file = fopen("test.txt", "w");
// fwrite($file, "Hello Bhargav");
// echo "Text written into file";
// fclose($file);

//fread()
// $file = fopen("test.txt","r");
// $content = fread($file, filesize("test.txt"));
// echo "$content <br><br>";
// $content2 = file_get_contents("test.txt");
// echo $content2;
// file_put_contents("test.txt","Welcome to techbridge . All services available");
// fclose($file);

//file()
// $lines = file("test.txt");
// foreach($lines as $line){
//     echo "$line.<br><br>";
// }

//file_exists()
// if(file_exists("uploads/assignment.pdf")){
//     echo "File exists";
// }else{
//     echo "File Doesnt exists";
// }

//filesize() , filetype()
// echo "File size is:" .filesize("uploads/assignment.pdf"). "<br><br>";
// echo "Filetype is:" .filetype("uploads/assignment.pdf"). "<br><br>";

//last access time 
// echo fileatime("test.txt")."<br><br>";
// echo date("Y-m-d H:i:s", fileatime("test.txt"))."<br><br>";
// echo date("Y-m-d H:i:s", filemtime("test.txt"))."<br><br>";

//used for system details
// echo fileowner("test.txt")."<br><br>";
// echo filegroup("test.txt")."<br><br>";
// echo fileinode("test.txt")."<br><br>";


//copy 
//copy("test.txt","copy.txt");

//rename
// rename("test.txt","testing.txt");

//unlink delete
//unlink("copy.txt");

//folder creation and deletion
//mkdir("new");
//rmdir("new");

//checking type
// if(is_file("testing.txt")){
//     echo "This is a file";
// }
// if(is_dir("uploads")){
//     echo "This is a folder";
// }


//scandir
// $files = scandir("uploads");
// foreach($files as $file){
//     echo $file."<br>";
// }

//opend directory and read directoru
// $dir = opendir("uploads");
// while(($file = readdir($dir)) !== false){
//     echo $file."<br>";
// }
// closedir($dir);

// echo getcwd();


//lock and unclock file
// $file = fopen("test.txt", "w");
// if(flock($file, LOCK_EX)){
//     fwrite($file, "Safe writing");
//     flock($file, LOCK_UN);
// }
// fclose($file);



//File Modes

//r mode
// $file = fopen("testing.txt", "a");
// fwrite($file, "User logged in\n");
// fclose($file);

//r+ mode
// $file = fopen("testing.txt", "r+");
// $content = fread($file, filesize("testing.txt"));
// echo $content;
// fwrite($file, "Hi hello welcome");
// fclose($file);


// a+ mode
// $file = fopen("testing.txt", "a+");
// $content = fread($file, filesize("testing.txt"));
// echo $content;
// fwrite($file, "Added through a+");
// fclose($file);







