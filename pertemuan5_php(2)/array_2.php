<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        table {
            border-collapse: collapse;
            width: 500px;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
        th {
            text-align: center;
            background-color: #f0f0f0; 
        }
    </style>
</head>
<body>
    <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];
    ?>
    <table>
        <tr>
            <th>Nama</th>
            <th>Domisili</th>
            <th>Jenis Kelamin</th>
        </tr>
        <tr>
            <td><?php echo $Dosen['nama']; ?></td>
            <td><?php echo $Dosen['domisili']; ?></td>
            <td><?php echo $Dosen['jenis_kelamin']; ?></td>
        </tr>
    </table>
</body>
</html>
