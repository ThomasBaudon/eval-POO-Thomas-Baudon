<?php
    $title = "Players";
    ob_start()
?>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">

                <h2 class="text-uppercase text-center mt-3 mb-3">Liste des joueurs</h2>

                    <table class="table">
                        <thead>
                            <th class="text-uppercase">id</th>
                            <th class="text-uppercase">email</th>
                            <th class="text-uppercase">nickname</th>
                        </thead>
                        <tbody>
                        <?php 
                        while ($player = $getPlayers->fetch(PDO::FETCH_ASSOC))
                        {
                        ?>
                            <tr>
                                <td><?php echo $player['id']; ?></td>
                                <td><?php echo $player['email']; ?></td>
                                <td><?php echo $player['nickname']; ?></td>
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

                <h2 class="text-uppercase text-center mt-5 mb-3">Ajouter un joueur</h2>

                <form method="POST">

                    <div class="mb-3">
                        <label for="email" class="form-label">eMail du joueur</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="nickname" class="form-label">Nickname</label>
                        <input type="text" class="form-control" id="nickname" name="nickname">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">AJOUTER NOUVEAU JOUEUR</button>
                </form>

                </div>
            </div>
        </div>


   </div>


<?php
    $content = ob_get_clean();
    require_once('./Views/base.php');
?>