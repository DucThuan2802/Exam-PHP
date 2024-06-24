<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button><a href="http://localhost/examPHP/user/execute">Add New</a></button>
    <table border="1" style="width: 700px;">
        <tr>
            <th>Id</th>
            <th>Item Code</th>
            <th>Item Name</th>
            <th>Quantity</th>
            <th>Expried Date</th>
            <th>Note</th>
        </tr>
        <?php $listData = $data["listData"]; ?>
        <?php foreach ($listData as $key => $value) : ?>
            <tr>
                <td><?php echo $value->id ?></td>
                <td><?php echo $value->item_code ?></td>
                <td><?php echo $value->item_name ?></td>
                <td><?php echo $value->quantity ?></td>
                <td><?php echo $value->expried_date ?></td>
                <td><?php echo $value->note ?></td>
                <td>
                    <a href="http://localhost/examPHP/user/execute/<?php echo $value->id ?>">Edit</a> 
                    ||
                    <a href="http://localhost/examPHP/user/delete/<?php echo $value->id ?>"> Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>