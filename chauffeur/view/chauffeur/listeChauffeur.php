<?php

$chauffeurs = 
[
    [
        "id" => 1,
        "nom" => "hatake",
        "prenom" => "kakashi",
        "experience" => 12,
        "disponibilite" => "oui"
    ],

    [
        "id" => 2,
        "nom" => "uzumaki",
        "prenom" => "kushina",
        "experience" => 4,
        "disponibilite" => "oui"
    ],

    [
        "id" => 3,
        "nom" => "roronoa",
        "prenom" => "zoro",
        "experience" => 2,
        "disponibilite" => "oui"
    ],

    [
        "id" => 4,
        "nom" => "monkey.d",
        "prenom" => "luffy",
        "experience" => 2,
        "disponibilite" => "oui"
    ],

    [
        "id" => 5,
        "nom" => "uchiha",
        "prenom" => "sasuke",
        "experience" => 6,
        "disponibilite" => "oui"
    ],
];

?>

<div>
    <p>Je suis le meilleur chauffeur</p>

      <table>
        <thead>
          <tr>
              <th>Id</th>
              <th>Nom</th>
              <th>Prenom</th>
              <th>Experience</th>
              <th>Disponibilite</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
            <?php foreach ($chauffeurs as $value) { ?>
            <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['nom']; ?></td>
                <td><?php echo $value['prenom']; ?></td>
                <td><?php echo $value['experience']; ?></td>
                <td><?php echo $value['disponibilite']; ?></td>
                <td><a href="?delete_id=<?= $value['id']; ?>" style="color:red;">Supprimer</a></td>
            </tr>
            <?php } ?>
        </tbody>
      </table>
            
            
</div>