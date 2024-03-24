<?php
    $league = 207;
    require __DIR__ . '/../connections.php';
?>

<h1 class="my-4">Serie A</h1>
<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr class="text-center">
                <th scope="col">Position</th>
                <th scope="col">Team</th>
                <th scope="col">Points</th>
                <th scope="col">Play</th>
                <th scope="col">Win</th>
                <th scope="col">Draw</th>
                <th scope="col">Lose</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($response as $country): ?>
                    <tr>
                        <td class="text-center"><?php echo $country['overall_league_position']; ?></td>
                        <td>
                            <img src="<?php echo $country['team_badge']; ?>" alt="Logo team" width="50px">
                            <?php echo $country['team_name']; ?>
                        
                        </td>
                        <td class="text-center"><?php echo $country['overall_league_payed']; ?></td>
                        <td class="text-center"><?php echo $country['overall_league_W']; ?></td>
                        <td class="text-center"><?php echo $country['overall_league_D']; ?></td>
                        <td class="text-center"><?php echo $country['overall_league_L']; ?></td>
                        <td class="text-center"><?php echo $country['overall_league_PTS']; ?></td>
                    </tr>
                <?php endforeach; ?> 
            </tbody>
        </table>
    </div>
</div>