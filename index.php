<?php
session_start();

$file = simplexml_load_file('files/members.xml');
$search = isset($_POST['search']) ? $_POST['search'] : '';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRUD_PHP_XML</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <style>
          body {
            margin: 0;
            padding: 0;
            background-image: url('background1.jpg');
            background-size: cover;
            background-position: center; 
            background-attachment: fixed; 
            font-family: Arial, sans-serif;
            
        }
        table {
    background-color: white;
    border-collapse: collapse;
    margin: auto; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);/
}

table th, table td {
    border: 1px solid #ddd;
    padding: 8px;
}

table th {
    background-color: #f4f4f4; 
    text-align: center;
}
h1{
    color:blue;
    font-weight: bold;
}
    </style>
</head>
<body>
<div class="container">
    <h1 class="page-header text-center">CRUD_PHP_XML</h1>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> ajouter </a> 
            <?php 
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert alert-info text-center" style="margin-top:20px;">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php
                    unset($_SESSION['message']);
                }
            ?>
          <form method="POST" action="" style="display: flex; align-items: center; gap: 10px;">
    <input 
        type="text" 
        name="search" 
        placeholder="Rechercher..." 
        value="<?php echo $search; ?>" 
        style="width: 600px; padding: 10px;margin: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 4px;"
    >
    <button type="submit" class="btn btn-primary">
        <span class="glyphicon glyphicon-search"></span> Rechercher
    </button>
</form>


            </form>
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th style="width: 10%; text-align: center;">ID</th>
                    <th style="width: 15%;">Prénom</th>
                    <th style="width:15%;">Nom</th>
                    <th style="width: 32%;">Club</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    foreach($file->user as $row){
                        if ($search == '' || stripos($row->firstname, $search) !== false || stripos($row->lastname, $search) !== false || stripos($row->address, $search) !== false) {
                            ?>
                            <tr>
                                <td style="text-align: center;"><?php echo $row->id; ?></td>
                                <td><?php echo $row->firstname; ?></td>
                                <td><?php echo $row->lastname; ?></td>
                                <td><?php echo $row->address; ?></td>
                                <td>
                                    <a href="#edit_<?php echo $row->id; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span> Modifier</a>
                                    <a href="#delete_<?php echo $row->id; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Supprimer</a>
                                </td>
                                <?php include('edit_delete_modal.php'); ?>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('add_modal.php'); ?>
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>