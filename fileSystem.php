<?php

// basename — Returns trailing name component of path
echo basename('C:\xampp\htdocs\PHP-Learning\shaayarLyircs.txt');
echo '<br>' ;
echo basename('https://dsbmalg.com/uploadphoto/Gallary/SWARAJ%20EXHIBITION/IMG-20181116-WA0350.jpg');
echo '<br>' ;

// chgrp — Changes file group
echo chgrp('fileSystem.php', 1);
echo '<br>' ;
// chmod — Changes file mode
// chown — Changes file owner
// clearstatcache — Clears file status cache
// copy — Copies file
copy('shaayarLyircs.txt','shyaarcopy.txt');
// delete — See unlink or unset
// There is no delete keyword or function in the PHP language. If you arrived at this page seeking to delete a file, try unlink(). To delete a variable from the local scope, check out unset()
unlink('shyaarcopy.txt');
// dirname — Returns a parent directory's path
echo dirname('https://dsbmalg.com/uploadphoto/Gallary/SWARAJ%20EXHIBITION/IMG-20181116-WA0350.jpg');
echo '<br>' ;
// disk_free_space — Returns available space on filesystem or disk partition
echo disk_free_space("D:/");
echo '<br>' ;
// disk_total_space — Returns the total size of a filesystem or disk partition
echo disk_total_space("D:/");
echo '<br>' ;
// diskfreespace — Alias of disk_free_space
echo diskfreespace("D:/");
echo '<br>' ;

//Notes : here if we use D:/ drive the sapce will keep changing on every reloading cz windos keep updation the files .

// fclose — Closes an open file pointer
// fdatasync — Synchronizes data (but not meta-data) to the file
// feof — Tests for end-of-file on a file pointer
// fflush — Flushes the output to a file
// fgetc — Gets character from file pointer
// fgetcsv — Gets line from file pointer and parse for CSV fields
// fgets — Gets line from file pointer
// fgetss — Gets line from file pointer and strip HTML tags
// file — Reads entire file into an array
// print_r(file('shaayarLyircs.txt'));
echo '<br>';
// file_exists — Checks whether a file or directory exists
echo file_exists('shaayarLyircs.txt');
echo '<br>';
// file_get_contents — Reads entire file into a string
// echo file_get_contents('shaayarLyircs.txt');
echo '<br>';
// file_put_contents — Write data to a file
file_put_contents('filePutContent.txt',"I am Lakshya Sharma");
// fileatime — Gets last access time of file
echo fileatime('save.php');
echo '<br>';
// filectime — Gets inode change time of file
// filegroup — Gets file group
// echo filegroup('PHP.docx');
echo '<br>';
// echo filegroup('shaayarLyrics.txt');
echo '<br>';


// fileinode — Gets file inode
// filemtime — Gets file modification time
// fileowner — Gets file owner
// fileperms — Gets file permissions
// filesize — Gets file size
// filetype — Gets file type
// flock — Portable advisory file locking
// fnmatch — Match filename against a pattern
// fopen — Opens file or URL
echo fopen('https://dsbmalg.com/uploadphoto/Gallary/SWARAJ%20EXHIBITION/IMG-20181116-WA0350.jpg','r');
// fpassthru — Output all remaining data on a file pointer
// fputcsv — Format line as CSV and write to file pointer
// fputs — Alias of fwrite
// fread — Binary-safe file read
// fscanf — Parses input from a file according to a format
// fseek — Seeks on a file pointer
// fstat — Gets information about a file using an open file pointer
// fsync — Synchronizes changes to the file (including meta-data)
// ftell — Returns the current position of the file read/write pointer
// ftruncate — Truncates a file to a given length
// fwrite — Binary-safe file write
// glob — Find pathnames matching a pattern
// is_dir — Tells whether the filename is a directory
// is_executable — Tells whether the filename is executable
// is_file — Tells whether the filename is a regular file
// is_link — Tells whether the filename is a symbolic link
// is_readable — Tells whether a file exists and is readable
// is_uploaded_file — Tells whether the file was uploaded via HTTP POST
// is_writable — Tells whether the filename is writable
// is_writeable — Alias of is_writable
// lchgrp — Changes group ownership of symlink
// lchown — Changes user ownership of symlink
// link — Create a hard link
// linkinfo — Gets information about a link
// lstat — Gives information about a file or symbolic link
// mkdir — Makes directory
// move_uploaded_file — Moves an uploaded file to a new location
// parse_ini_file — Parse a configuration file
// parse_ini_string — Parse a configuration string
// pathinfo — Returns information about a file path
print_r( pathinfo('https://dsbmalg.com/uploadphoto/Gallary/SWARAJ%20EXHIBITION/IMG-20181116-WA0350.jpg'));
// pclose — Closes process file pointer
// popen — Opens process file pointer
// readfile — Outputs a file
// readlink — Returns the target of a symbolic link
// realpath — Returns canonicalized absolute pathname
// realpath_cache_get — Get realpath cache entries
// realpath_cache_size — Get realpath cache size
// rename — Renames a file or directory
// rewind — Rewind the position of a file pointer
// rmdir — Removes directory
// set_file_buffer — Alias of stream_set_write_buffer
// stat — Gives information about a file
// symlink — Creates a symbolic link
// tempnam — Create file with unique file name
// tmpfile — Creates a temporary file
tmpfile()
// touch — Sets access and modification time of file
// umask — Changes the current umask
// unlink — Deletes a file

?>