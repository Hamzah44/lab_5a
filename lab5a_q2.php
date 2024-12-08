<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        table, th, td {
            border: 2px solid black;
        }

        th, td {
            padding: 10px;
        }

        th {
            font-weight: bold;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <?php
        $students = [
            [
                'name' => 'Hamzah',
                'program' => 'BIP',
                'age' => 22,
            ],
            [
                'name' => 'Ahmad',
                'program' => 'BIP',
                'age' => 20,
            ],
            [
                'name' => 'Abdulqader',
                'program' => 'BIS',
                'age' => 22,
            ]
        ];
    ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['program']; ?></td>
                <td><?php echo $student['age']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
