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
                        Equipe
                    </th>


                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <!-- rows -->
            <tbody>
                <?php
$query = "SELECT * FROM membre";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_row($result)){

    ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?php echo $row[0]?>
                    </th>
                    <td class=" px-6 py-4">
                        <?php echo $row[1]?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row[2]?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row[3]?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row[4]?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row[5]?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row[6]?>
                    </td>

                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>

                <?php

}

?>
            </tbody>
        </table>
    </div>

</body>

</html>