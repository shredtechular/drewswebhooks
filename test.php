<?php 

echo (exec('whoami'));

exec('git pull'); 

$file = fopen( 'testfile.txt', 'w+' );
fwrite($file, 'hey<br/>');
fclose( $file );

echo "hey";?>
