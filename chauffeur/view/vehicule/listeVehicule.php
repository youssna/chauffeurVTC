<div>
    <p>Les meilleurs véhicules</p>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Id</th>
                <th>Modèle</th>
                <th>Immatriculation</th>
                <th>Couleur</th>
                <th>Nb places</th>
                <th>Action</th> 
            </tr>
        </thead>

        <tbody>
            <?php foreach ($vehicules as $value) { ?>
                <tr>
                    <td><?php echo $value['id']; ?></td>
                    <td><?php echo $value['model']; ?></td>
                    <td><?php echo $value['immatriculation']; ?></td>
                    <td><?php echo $value['couleur']; ?></td>
                    <td><?php echo $value['nbplace']; ?></td>
                    <td>
                        <a href="../../controller/vehicule/supprimerVehicule.php?id=<?php echo $value['id']; ?>" 
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>