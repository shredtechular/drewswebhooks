<?php 

//echo (exec('whoami'));

$whoami = "you";

exec('git pull'); 

$file = fopen( 'testfile.txt', 'a+' );
fwrite($file, 'hey'.$whoami.PHP_EOL.PHP_EOL);
fclose( $file );

echo "hey";?>
