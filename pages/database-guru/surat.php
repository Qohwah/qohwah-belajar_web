<?php 
    $koneksi = new mysqli("localhost","root","","mydatabase");
                        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>

    <div class="panel panel-default">
        <div class="panel-heading">
                
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Induk</th>
                            <th>Nama Guru</th>
                            <th>TTL</th>
                            <th>Jenis Kelamin</th>
                            <th>Status</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 

                            $no = 1;
                            $sql = $koneksi->query("select * from data_guru");
                            while ($data = $sql->fetch_assoc()) {
            
                            ?>
                            <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['induk']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['ttl']; ?></td>
                            <td><?php echo $data['kelamin']; ?></td>
                            <td><?php echo $data['STATUS']; ?></td>
                            <td>
                                <a href="" class="btn btn-info">Edit Data</a>
                                <a href="" class="btn btn-danger">Mutasi</a>
                            </td>
                            </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>