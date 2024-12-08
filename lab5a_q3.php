<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
    <style>
        table {
            width: 30%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 5px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        function multiplication($multiplier) {
            $results = [];
            for ($i = 1; $i <= 12; $i++) {
                $results[] = [
                    'no' => $i,
                    'multiplier' => $multiplier,
                    'answer' => $i * $multiplier
                ];
            }
            return $results;
        }

        
        $tableData = multiplication(2);
    ?>
    <table>
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php foreach ($tableData as $row): ?>
            <tr>
                <td><?php echo $row['no']; ?></td>
                <td><?php echo $row['multiplier']; ?></td>
                <td><?php echo $row['answer']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
