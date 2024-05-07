<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ebe9e1;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            color: #ec4074;
        }

        header {
            background-color: #dfdac8;
            color: whitesmoke;
            padding: 20px 0;
            text-align: center;
        }

        .main-content {
            display: block;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .table-container {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            color: black; /* Change font color to black */
        }

        th {
            background-color: #f2f2f2;
        }

        footer {
            background-color: #ec4074;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Team Data</h1>
        </div>
    </header>
    <section class="main-content">
        <div class="container table-container">
            <?php
            $connect = mysqli_connect(
                'db', # service name
                'php_docker', # username
                '123456', # password
                'php_docker' # db table
            );

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                exit();
            }

            $table_name = "docker_php_table";
            $query = "SELECT * FROM $table_name";
            $response = mysqli_query($connect, $query);

            if (!$response) {
                die('Error: ' . mysqli_error($connect));
            }

            echo "<h2><strong><span style='color: black; font-weight: bold;'>$table_name</span></strong></h2>";

            echo "<table>";
            echo "<tr>";
            echo "<th>Student Number</th>";
            echo "<th>Student Name</th>";
            echo "<th>Student ID</th>";
            echo "<th>Age</th>";
            echo "<th>CGPA</th>";
            echo "</tr>";

            while ($row = mysqli_fetch_assoc($response)) {
                echo "<tr>";
                echo "<td>".$row['std_num']."</td>";
                echo "<td>".$row['std_name']."</td>";
                echo "<td>".$row['std_id']."</td>";
                echo "<td>".$row['age']."</td>";
                echo "<td>".$row['cgpa']."</td>";
                echo "</tr>";
            }

            echo "</table>";

            mysqli_close($connect);
            ?>
        </div>
    </section>
    <footer>
        <div class="container">
            <button id="backBtn" class="btn">Back to Home</button>
        </div>
    </footer>
    <script>
        document.getElementById('backBtn').addEventListener('click', function() {
            window.location.href = 'index.html'; // Redirect to home page
        });
    </script>
</body>
</html>

