<!DOCTYPE html>
<html>

<head>
    <title><?= $title ?></title>
    <style type="text/css">
        table {
            border: 1px solid #e3e3e3;
            border-collapse: collapse;
            font-family: arial;
            color: #5E5B5C;
            margin: 0 auto;
            width: 100%;
        }

        thead th {
            text-align: left;
            padding: 10px;
        }

        tbody td {
            border-top: 1px solid #e3e3e3;
            padding: 10px;
        }

        tbody tr:nth-child(even) {
            background: #F6F5FA;
        }

        tbody tr:hover {
            background: #EAE9F5;
        }
    </style>
</head>

<body>
    <center>
        <h3>Data Armada</h3>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Bus</th>
                    <th>Mini Bus</th>
                    <th>Hiace</th>
                    <th>Note</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($armada as $ar) : ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $ar->name; ?></td>
                        <td><?= $ar->phone; ?></td>
                        <td><?= $ar->address; ?></td>
                        <td><?= $ar->email; ?></td>
                        <td><?= $ar->bus; ?></td>
                        <td><?= $ar->minibus; ?></td>
                        <td><?= $ar->hiace; ?></td>
                        <td><?= $ar->note; ?></td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </center>
</body>

</html>