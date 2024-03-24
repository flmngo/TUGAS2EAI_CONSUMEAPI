<?php
    require 'connections.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classement Football</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .wrapper {
            display: flex;
            height: 100%;
            background-color: #DEF4FA;
        }

        .sidebar {
            flex: 0 0 250px;
            min-height: 100%;
        }

        .content {
            flex: 1;
            background-color: #ffffff;
            height: 100%;
        }

        .btn-active {
            background-color: #53CCEC;
        }

        .btn-outline-primary {
            color: #53CCEC;
            border-color: #53CCEC;
        }

        .container {
            height: 100%;
            overflow-y: auto;
        }

    </style>
</head>
<body>
    <div class="wrapper">
        <nav class="sidebar">
            <h3 class="p-4">Classement Football</h3>
            <ul class="nav flex-column align-items-center">
                <li class="nav-item">
                    <a class="mb-4 nav-link btn <?php echo (isset($_GET['league']) && $_GET['league'] == 'premier') ? 'btn-active text-white' : 'btn-outline-primary'; ?>" href="index.php?league=premier">Premier League</a>
                </li>
                <li class="nav-item">
                    <a class="mb-4 nav-link btn <?php echo (isset($_GET['league']) && $_GET['league'] == 'EuropanChampionship') ? 'btn-active text-white' : 'btn-outline-primary'; ?>" href="index.php?league=EuropanChampionship">Europan Championship</a>
                </li>
                <li class="nav-item">
                    <a class="mb-4 nav-link btn <?php echo (isset($_GET['league']) && $_GET['league'] == 'liga1') ? 'btn-active text-white' : 'btn-outline-primary'; ?>" href="index.php?league=liga1">Liga 1</a>
                </li>
                <li class="nav-item">
                    <a class="mb-4 nav-link btn <?php echo (isset($_GET['league']) && $_GET['league'] == 'laLiga') ? 'btn-active text-white' : 'btn-outline-primary'; ?>" href="index.php?league=laLiga">LaLiga</a>
                </li>
                <li class="nav-item">
                    <a class="mb-4 nav-link btn <?php echo (isset($_GET['league']) && $_GET['league'] == 'serieA') ? 'btn-active text-white' : 'btn-outline-primary'; ?>" href="index.php?league=serieA">Serie A</a>
                </li>
            </ul>
        </nav>

        <div class="content">
            <div class="container">
                <?php
                    if(isset($_GET['league'])) {
                        $league = $_GET['league'];

                        if($league === 'premier') {
                            include 'pages/PremierLeague.php';
                        } elseif ($league === 'EuropanChampionship') {
                            include 'pages/EuropanChampionship.php';
                        } elseif ($league === 'liga1') {
                            include 'pages/Liga1.php';
                        } elseif ($league === 'laLiga') {
                            include 'pages/LaLiga.php';
                        } elseif ($league === 'serieA') {
                            include 'pages/serieA.php';
                        }
                    } else {
                        include 'pages/PremierLeague.php'; 
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
