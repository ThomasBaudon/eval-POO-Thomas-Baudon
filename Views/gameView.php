<?php
    $title = "Games";
    ob_start();
?>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">

                <h2 class="text-uppercase text-center mt-3 mb-3">Liste des Jeux</h2>

                    <table class="table">
                        <thead>
                            <th class="text-uppercase">id</th>
                            <th class="text-uppercase">title</th>
                            <th class="text-uppercase text-center">Min. Players</th>
                            <th class="text-uppercase text-center">Max. Players</th>
                        </thead>
                        <tbody>
                        <?php 
                        while ($game = $getGames->fetch(PDO::FETCH_ASSOC))
                        {
                        ?>
                            <tr>
                                <td><?php echo $game['id']; ?></td>
                                <td><?php echo $game['title']; ?></td>
                                <td class="text-center"><?php echo $game['min_players']; ?></td>
                                <td class="text-center"><?php echo $game['max_players']; ?></td>
                            </tr>
                        <?php 
                        }   
                        ?>
                        </tbody>

                    </table>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                <hr class="mt-3 mb-3">

                <h2 class="text-uppercase text-center mt-5 mb-3">Ajouter un jeu</h2>

                <form method="POST">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titre du jeu</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="minPlayer" class="form-label">Min. Player</label>
                        <input type="text" class="form-control" id="minPlayer" name="minPlayer">
                    </div>
                    <div class="mb-3">
                        <label for="maxPlayer" class="form-label">Max. Player</label>
                        <input type="text" class="form-control" id="maxPlayer" name="maxPlayer">
                    </div>
                    <button type="submit" class="btn btn-primary">AJOUTER NOUVEAU JEU</button>
                </form>

                </div>
            </div>
        </div>


   </div>


<?php
    $content = ob_get_clean();
    require_once('./Views/base.php');
?>