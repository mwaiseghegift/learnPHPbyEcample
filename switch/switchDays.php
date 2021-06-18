<?php 

$today = date('D');

switch($today){
    case 'Mon':
        echo "Today is Monday\n";
        break;
    case 'Tue':
        echo "Tuesday\n";
        break;
    case 'Wed':
        echo 'Wednesday\n';
        break;
    case 'Thu':
        echo "Thursday\n";
        break;
    case 'Fri':
        echo "Friday\n";
        break;
    case 'Sat':
        echo "Saturday\n";
        break;
    case 'Sun':
        echo "Sunday\n";
        break;
    default:
        echo "Hello, internal error\n";
}

?>