<?php

// 'r'	Open for reading only; place the file pointer at the 
// beginning of the file.
// 'r+'	Open for reading and writing; place the file pointer at 
// the beginning of the file.

// 'w'	Open for writing only; place the file pointer at the 
// beginning of the file and truncate the file to zero length. 
// If the file does not exist, attempt to create it.
// 'w+'	Open for reading and writing; place the file pointer 
// at the beginning of the file and truncate the file to zero 
// length. If the file does not exist, attempt to create it.

// 'a'  Open for writing only; place the file pointer at the 
// end of the file. If the file does not exist, attempt to 
// create it. In this mode, fseek() has no effect, writes are 
// always appended.
// 'a+'	Open for reading and writing; place the file pointer at 
// the end of the file. If the file does not exist, attempt to 
// create it. In this mode, fseek() only affects the reading 
// position, writes are always appended.

$h = fopen('data.txt', 'w+'); // handle

// fwrite() returns a Boolean
//if (fwrite($h, 'Text to insert')) {
//  echo "Successfully written.";
//}

fwrite($h, 'Text to insert');




