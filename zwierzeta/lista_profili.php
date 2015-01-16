<div>
    <?php
        $zwierzeta = pobierz_wszystkie_zwierzeta();

        foreach ($zwierzeta as $zwierze) {
    ?>
        <div style="display: inline-block; width:150px; margin:5px">
            <a href="profile.php?id=<?php echo $zwierze['id_zwierz']; ?>">
                <img src="http://placehold.it/150x150" />
                <?php echo "{$zwierze['nazwa']} {$zwierze['gatunek']}"; ?>
            </a>
        </div>
    <?
        }
    ?>
</div>
