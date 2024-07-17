<html>
    <head>
        <title>PHP Test 1</title>
</head>
<body>
    <h1>PHP Test 1</h1>
    <?php
function number_machine($start_number) {
    $result = $start_number + 4;
    $result *= 3;
    $result -= 1;
    $result *= 6;
    $result /= 4;
    $end_number = $result;
    echo "$end_number";

    return $end_number;
}
$start_number = 9;
$end_number = number_machine($start_number);
 
?>
 </body>
</html>
 