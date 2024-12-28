<?php

$sql = $db->prepare("SELECT T1.*
                        FROM bida_sector_global_info T1
                        WHERE T1.Active = ?
                ");
$sql->bindValue(1, 1);
$sql->execute();
$sql->setFetchMode(PDO::FETCH_ASSOC);
$SectorInfo = $sql->fetchAll();