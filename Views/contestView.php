<?php
    $title = "Contests";
    // $nickname = $getPlayerContests->fetch(PDO::FETCH_ASSOC);
    // $gameTitle = $getGameContests->fetch(PDO::FETCH_ASSOC);
    ob_start()
?>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">

                <h2 class="text-uppercase text-center mt-3 mb-3">Liste des Tournois</h2>

                    <table class="table">
                        <thead>
                            <th class="text-uppercase"># Game</th>
                            <th class="text-uppercase">Game Title</th>
                            <th class="text-uppercase text-center">Start Date</th>
                            <th class="text-uppercase text-center">Winner</th>
                        </thead>
                        <tbody>
                        <?php 
                        // var_dump($nickname);
                        // var_dump($gameTitle);
                        while ($contest = $getContests->fetch(PDO::FETCH_ASSOC))
                        {
                        ?>
                            <tr>
                                <td><?php echo $contest['game_id']; ?></td>
                                <td class=""><?php echo $contest['title']; ?></td>
                                <td class="text-center"><?php echo $contest['start_date']; ?></td>
                                <td class="text-center"><?php echo $contest['nickname']; ?></td>
                            </tr>

                        <?php 
                        }   
                        ?>
                        </tbody>

                    </table>

                </div>
            </div>
        </div>


   </div>


<?php
    $content = ob_get_clean();
    require_once('./Views/base.php');
?>