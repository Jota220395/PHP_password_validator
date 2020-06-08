
<?php

require 'PasswordValidator.php';

$pass = '12fs_dfsdfdsfsdf3';

$validator = new PasswordValidator();

if($validator->isValid($pass)) {
    echo "CONTRASEÑA VÁLIDA" . PHP_EOL;
} else {
    echo "CONTRASEÑA INVALIDA" . PHP_EOL;
}























