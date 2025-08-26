<?php
$linkedList = [];
$head = null;

function getId()
{
    return hrtime(true);
}

function addData($data)
{
    global $head, $linkedList;
    $id = getId();
    $node = [
        "id" => $id,
        "data" => $data,
        "next" => null
    ];
    if ($head === null) {
        $head = $id;
        $linkedList[$id] = $node;
        return;
    }

    $current = $head;
    while ($linkedList[$current]['next'] !== null) {
        $current = $linkedList[$current]['next'];
    }

    $linkedList[$current]['next'] = $id;
    $linkedList[$id] = $node;
}


function display()
{
    global $linkedList, $head;

    if ($head === null) {
        echo "No data\n";
        return;
    }

     $current = $head;
    while ($current !== null) {
        $node = $linkedList[$current];
        echo $node['data'] . "\n";
        $current = $node['next'];
    }
}


addData('Abhijeet');
addData('pradeep');
addData('rahul');

display();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" name="hj" id="hj" value="dfdsjfdhsgfj">
</body>
</html>