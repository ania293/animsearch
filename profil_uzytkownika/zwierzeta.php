

<table>
    <thead>
        <th>gatunek</th>
        <th>rasa</th>
        <th>plec</th>
        <th>historia</th>
        
    </thead>
    <tbody>
    <?php
        $zwierzeta = pobierz_zwierzeta_dla_schroniska([ 'id' => 1 ]);

        foreach($zwierzeta as $zwierze) {
    ?>
        <tr>
            <td>
                <a href="profile.php?id=<?php echo $zwierze['id_zwierz']; ?>">
                    <?php echo $zwierze['gatunek']; ?>
                </a>
            </td>
            <td>
                
                    <?php echo $zwierze['rasa']; ?>
                
            </td>
            <td>
                
                    <?php echo $zwierze['plec']; ?>
                
            </td>
            
            <td>
                
                    <?php echo $zwierze['historia']; ?>
                
            </td>
            
        </tr>
    <?
        }
    ?>
    </tbody>
<table>
