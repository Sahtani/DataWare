<?php
include('connexion.php');
?>
<?php
include('connexion.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DataWare</title>
</head>

<body>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-16 mt-20">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nom de membre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Prénom de membre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Téléphone
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Rol
                    </th>
                    <th scope="col" class="px-6 py-3">
                        statut
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nom d'équipe
                    </th>
                    <th scope="col" class="px-6 py-3 ">
                        Date de céation
                    </th>
                </tr>
            </thead>
            <!-- rows -->
            <tbody>
                <?php
$sql = "SELECT membre.Nom_Membre, membre.Prenom_Membre, membre.email, membre.Tel, membre.Role, membre.statut, equipes.Nom_equipe,equipes.Date_Creation FROM membre inner JOIN equipes ON membre.ID_equipe = equipes.ID_equipe";
$res= mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($res)){

    ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?php echo $row['Nom_Membre']?>
                    </th>
                    <td class=" px-6 py-4">
                        <?php echo $row['Prenom_Membre']?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['email']?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['Tel']?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['Role']?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['statut']?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['Nom_equipe']?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['Date_Creation']?>
                    </td>



                </tr>

                <?php

}

?>
            </tbody>
        </table>
    </div>
    <div class="mt-10 ml-8">
        <a href="equipe.php">
            <button class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">table équipe </button>
        </a>

    </div>
</body>

</html>