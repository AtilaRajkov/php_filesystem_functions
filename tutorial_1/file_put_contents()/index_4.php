<?php

// fopen, fwrite, fclose
file_put_contents("demo.txt", "You can put\rAny Text Here.");

//echo str_replace("\r", "<br>", file_get_contents("demo.txt"));

echo nl2br(file_get_contents("demo.txt"));