<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brussels Website - Database Setup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #1a1a1a 0%, #c8102e 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .install-card {
            background: white;
            border-radius: 15px;
            padding: 3rem;
            box-shadow: 0 10px 40px rgba(0,0,0,0.3);
            max-width: 600px;
            width: 100%;
        }
        .logo {
            font-size: 3rem;
            color: #d4af37;
            text-align: center;
            margin-bottom: 1rem;
        }
        h1 {
            color: #1a1a1a;
            text-align: center;
            margin-bottom: 2rem;
        }
        .btn-gold {
            background: linear-gradient(135deg, #d4af37 0%, #ffd700 100%);
            color: #1a1a1a;
            font-weight: 600;
            border: none;
            padding: 0.8rem 2rem;
        }
        .btn-gold:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.4);
        }
    </style>
</head>
<body>
    <div class="install-card">
        <div class="logo">🏛️</div>
        <h1>Brussels Website Setup</h1>
        
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $db_host = $_POST['db_host'] ?? 'localhost';
            $db_user = $_POST['db_user'] ?? 'root';
            $db_pass = $_POST['db_pass'] ?? '';
            
            // Connect to MySQL server (without database)
            $conn = new mysqli($db_host, $db_user, $db_pass);
            
            if ($conn->connect_error) {
                echo '<div class="alert alert-danger"><strong>Error:</strong> Could not connect to MySQL. ' . $conn->connect_error . '</div>';
            } else {
                // Read and execute SQL file
                $sql = file_get_contents('database.sql');
                
                // Execute multiple queries
                if ($conn->multi_query($sql)) {
                    do {
                        if ($result = $conn->store_result()) {
                            $result->free();
                        }
                    } while ($conn->more_results() && $conn->next_result());
                    
                    echo '<div class="alert alert-success">
                        <h4>✅ Installation Successful!</h4>
                        <p>The database has been created and populated with sample data.</p>
                        <hr>
                        <p class="mb-0">You can now <a href="index.php" class="alert-link">visit the website</a>.</p>
                    </div>';
                } else {
                    echo '<div class="alert alert-warning"><strong>Note:</strong> ' . $conn->error . '</div>';
                }
                
                $conn->close();
            }
        } else {
        ?>
        
        <p class="text-muted text-center mb-4">This installer will create the database and tables needed for the Brussels website.</p>
        
        <form method="POST">
            <div class="mb-3">
                <label for="db_host" class="form-label">Database Host</label>
                <input type="text" class="form-control" id="db_host" name="db_host" value="localhost" required>
                <small class="text-muted">Usually "localhost" for XAMPP</small>
            </div>
            
            <div class="mb-3">
                <label for="db_user" class="form-label">Database Username</label>
                <input type="text" class="form-control" id="db_user" name="db_user" value="root" required>
                <small class="text-muted">Default XAMPP username is "root"</small>
            </div>
            
            <div class="mb-3">
                <label for="db_pass" class="form-label">Database Password</label>
                <input type="password" class="form-control" id="db_pass" name="db_pass" value="">
                <small class="text-muted">Default XAMPP password is empty (leave blank)</small>
            </div>
            
            <div class="alert alert-info">
                <strong>Note:</strong> Make sure XAMPP's Apache and MySQL services are running before proceeding.
            </div>
            
            <div class="text-center">
                <button type="submit" class="btn btn-gold btn-lg">Install Database</button>
            </div>
        </form>
        
        <?php } ?>
    </div>
</body>
</html>
