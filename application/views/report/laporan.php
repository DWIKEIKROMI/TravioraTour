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
        <h3>Data Penjualan</h3>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Invoice</th>
                    <th>Date</th>
                    <th>Customer</th>
                    <th>Total</th>
                    <th>Discount</th>
                    <th>Grand Total</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($sale as $ar) : ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $ar->invoice; ?></td>
                        <td><?= $ar->date; ?></td>
                        <td><?= $ar->customer_id; ?></td>
                        <td><?= $ar->total_price; ?></td>
                        <td><?= $ar->discount; ?></td>
                        <td><?= $ar->final_price; ?></td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </center>
</body>

</html>