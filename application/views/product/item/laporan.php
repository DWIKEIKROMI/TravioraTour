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
        <h3>Data Item</h3>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Barcode</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Tour Category</th>
                    <th>Stock</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($item as $it) : ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $it->barcode; ?></td>
                        <td><?= $it->name; ?></td>
                        <td><?= $it->address; ?></td>
                        <td><?= $it->category_id; ?></td>
                        <td><?= $it->stock; ?></td>
                        <td><?= $it->price; ?></td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </center>
</body>

</html>