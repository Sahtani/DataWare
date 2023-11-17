<?php
include('connexion.php');
?>





<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DataWare</title>
</head>

<body>

    <div class="relative overflow-x-auto mx-16 mt-20">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 rounded-s-lg">
                        ID Equipe
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nom d'équipe
                    </th>
                    <th scope="col" class="px-6 py-3 rounded-e-lg">
                        Date de céation
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
$query = "SELECT * FROM equipes";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_row($result)){

    ?>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?php echo $row[0]?>
                    </th>
                    <td class="px-6 py-4">
                        <?php echo $row[1]?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row[2]?>
                    </td>
                </tr>
                <?php

}

?>
                </tfoot>
        </table>
    </div>
    </div>
    <div class="mt-10 ml-8">
        <a href="index.php">
            <button class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">table membre</button>
        </a>

    </div>
</body>


</html