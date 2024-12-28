<?php
include_once 'config.php';
include_once 'dbcon/db_connect.php';
include_once 'functions/common.function.php';
$sql = "SELECT T1.*
                        FROM bida_vacancy T1
                        WHERE T1.Active = ?
                    ";
$sql .= " GROUP BY T1.ID ";

$sql = $db->prepare($sql);
$sql->bindValue(1, 1);
$sql->execute();
$total_count = $sql->rowCount();
$sql->setFetchMode(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Vacancy Table</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f7f7f7;
                margin: 0;
                padding: 0px;
            }

            .container {
                /* max-width: 1200px; */
                margin: 0 auto;
                background-color: white;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            h1 {
                font-size: 24px;
                margin-bottom: 20px;
            }

            .search-box {
                display: flex;
                align-items: center;
                border: 1px solid #000;
                border-radius: 8px;
                padding: 5px 10px;
                width: 300px; /* Adjust the width as needed */
                margin-bottom: 20px;
            }

            .search-icon {
                font-size: 18px;
                margin-right: 8px;
                color: #000;
            }

            .search-input {
                border: none;
                outline: none;
                flex: 1;
                font-size: 16px;
            }

            .search-input::placeholder {
                color: #ccc;
            }

            table {
                width: 100%;
                border-collapse: separate;
                border-spacing: 0 10px;
                margin-bottom: 20px;
            }

            thead {
                background-color: #ffd17f;
            }
            thead th:first-child {
                border-top-left-radius: 10px;
                border-bottom-left-radius: 10px;
            }

            thead th:last-child {
                border-top-right-radius: 10px;
                border-bottom-right-radius: 10px;
            }

            thead th {
                padding: 10px;
                text-align: left;
                font-weight: bold;
            }
            tbody {
                border-radius: 10px;
                -webkit-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75);
                -moz-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75);
                box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75);
            }

            tbody td {
                padding: 10px;
                border-bottom: 1px solid #ddd;
            }

            .closed {
                color: red;
            }
            .open {
                color: green;
            }
            .pagination {
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 10px;
            }

            .pagination button {
                padding: 5px 10px;
                border-radius: 4px;
                border: none;
                background-color: #f4c542;
                cursor: pointer;
                font-size: 16px;
            }

            .pagination span {
                font-size: 16px;
            }
            .header {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 10px 20px;
                background-color: #000;
                position: relative;
            }

            .back-button {
                background-color: #4CAF50;
                color: white;
                border: none;
                padding: 10px 20px;
                font-size: 16px;
                border-radius: 5px;
                cursor: pointer;
                display: flex;
                align-items: center;
                position: absolute;
                left: 20px;
            }

            .back-button span {
                font-size: 18px;
                margin-right: 5px;
            }

            .logo-container {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .logo {
                max-height: 50px;
                margin-bottom: 10px;
            }

            .logo-text h1 {
                color: #FFD700;
                font-size: 24px;
                margin: 0;
            }

            .logo-text p {
                color: white;
                font-size: 14px;
                margin: 0;
            }
            .no-results {
                text-align: center;
                font-size: 18px;
                color: red;
                display: none; /* Initially hidden */
            }
        </style>
    </head>
    <body>
        <div class="header">
            <!-- Your existing header code -->
        </div>
        <div class="container">
            <h1>Vacancy Chart</h1>
            <div class="title" style="padding:8px 30px">
            <div class="bck-img-div left"><a href="index.php" style="display: flex;
    align-items: center;text-decoration:none;color:#000;gap:4px;"><img src="img/back.svg" alt="" style="width:35px;"><span class="title-stt left">Back</span></a></div>
            
            <!-- <div class="clr"></div> -->
        </div>
            <div class="search-box">
                <span class="search-icon">&#128269;</span>
                <input type="text" id="searchInput" onkeyup="searchVacancies()" placeholder="Search Position" class="search-input" />
            </div>
            <div id="noResults" style="display:none; color:red;"></div>
            <table>
                <thead>
                    <tr>
                        <th>S.no.</th>
                        <th>Position</th>
                        <th>Qualification</th>
                        <th>Numbers</th>
                        <th>Institution</th>
                        <th>Monthly Package to be offered (in lakhs)</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <?php if ($total_count > 0) { ?>
                    <tbody>
                        <?php
                        $i = 1;
                        while ($row = $sql->fetch()) {
                            $open_status = '--';
                            $open_status_color = '';
                            if ($row['Status'] == 1) {
                                $open_status = 'Open';
                                $open_status_color = 'open';
                            } elseif ($row['Status'] == 2) {
                                $open_status = 'Closed';
                                $open_status_color = 'closed';
                            }
                            ?>
                            <tr id='noResults'>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row['Position']; ?></td>
                                <td>
                                    <?php echo $row['Qualification']; ?>
                                </td>
                                <td><?php echo $row['NumberOfPostion']; ?></td>
                                <td><?php echo $row['Institution']; ?></td>
                                <td><?php echo $row['PackageRange']; ?></td>
                                <td class="<?php echo $open_status_color; ?>"><?php echo $open_status; ?></td>
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                    </tbody>
<?php } else { ?>
                    <tbody>
                        <tr>
                            <td colspan="7"  style="text-align: center">
    <?php echo 'No Vacancy List Found'; ?>
                            </td>
                        </tr>
                    </tbody>
<?php } ?>
            </table>
            <!--            <div class="pagination">
                            <button>&lt;</button>
                            <span>1</span>
                            <button>&gt;</button>
                        </div>-->
        </div>
    </body>
    <script>
        function searchVacancies() {
            const input = document.getElementById('searchInput').value.trim().toLowerCase();
            const rows = document.querySelectorAll('tbody tr');
            let found = false;

            rows.forEach((row) => {
                const position = row.querySelector('td:nth-child(2)').innerText.toLowerCase();
                if (position.includes(input)) {
                    row.style.display = '';
                    found = true;
                } else {
                    row.style.display = 'none';
                }
            });

            const noResultsMessage = document.getElementById('noResults');
            if (!found) {
                noResultsMessage.innerText = 'No result found';
                noResultsMessage.style.display = 'block';
            } else {
                noResultsMessage.style.display = 'none';
            }
        }
    </script>
</html>