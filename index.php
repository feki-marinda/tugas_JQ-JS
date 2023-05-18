<?php
include "koneksi.php";
$query = mysqli_query($conn,"SELECT*FROM customer");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <title>Document</title>
</head>
<body>
<a href="tambah.php">Tambah data</a>
<table id="example" class="display" style="width:100%">
<thead>
        <tr>
            <th>FirstNama</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php if(mysqli_num_rows($query)>0) {?>
            <?php
               
                while ($data = mysqli_fetch_array($query)) {
                ?>
    <tbody>
        <tr>
            <td><?php echo $data["first_name"];?></td>
            <td><?php echo $data["last_name"]?></td>
            <td><?php echo $data["email"]?></td>
            <td><?php echo $data["phone"]?></td>
            <td><?php echo $data["address"]?></td>
            <td>
                <a href="">delete / </a>
                <a href="">update</a>
            </td>
        </tr>
    </tbody>
                <?php  }?>
        <?php }?>
    </table>
    <script>
        $(document).ready(function () {
    $('#example').DataTable();
});
    </script>
</body>
</html>
