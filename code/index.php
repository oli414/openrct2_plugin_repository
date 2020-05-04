<?php
session_start();

require_once "lib/functions.php";
require_once "lib/db/db_conn.php";

// loads envs to a friendlier array
$config = array(
    'TLD' => $_ENV['TLD'],
    'version' => $_ENV['VERSION'],
);

// fallbacks for the above
$config['TLD'] = $config['TLD'] ? $config['TLD'] : 'com';
$config['version'] = $config['version'] ? $config['version'] : '1.0.0';

switch ($_GET['q1']) {
    case 'submit':
        # code...
        break;

    case 'home':
    default:

        // if a plugin was submitted
        if (isset($_POST['githubUrl'])) {
            include_once "./lib/db/submit.php";
        }

        require_once("./features/home/index.php");

        break;
}



?>

<!-- 
<?php
if ($_ENV['DEBUG']) {
    echo "DB status: " . $db_status;
    echo "\n\n_GET: \n";
    print_r($_GET);
    echo "\n\n_POST: \n";
    print_r($_POST);
    echo "\n\n_COOKIE: \n";
    print_r($_COOKIE);
    echo "\n\n_ENV: \n";
    print_r($_ENV);
}
?>
-->