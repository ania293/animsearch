<div>
    <?php
        $schroniska = pobierz_wszystkie_schroniska();

        foreach ($schroniska as $schronisko) {
    ?>
        <div style="display: inline-block; width:150px;">
            <a href="schroniska.php?id=<?php echo $schronisko['id_schro']; ?>">
                <img src="http://placehold.it/150x150" />
                <?php echo "{$schronisko['nazwa']} {$schronisko['miasto']}"; ?>
            </a>
        </div>
    <?
        }
    ?>
</div>