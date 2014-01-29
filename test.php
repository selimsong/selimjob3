<?php

file_put_contents('a.txt', json_encode($_GET), FILE_APPEND);
file_put_contents('b.txt',json_encode($_POST), FILE_APPEND);