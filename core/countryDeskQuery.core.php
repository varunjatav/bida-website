<?php

$sql = $db->prepare("SELECT T1.*
                        FROM bida_country_global_info T1
                        WHERE T1.Active = ?
                ");
$sql->bindValue(1, 1);
$sql->execute();
$sql->setFetchMode(PDO::FETCH_ASSOC);
$CountryInfo = $sql->fetchAll();
$sql1 = $db->prepare("SELECT T1.*
                        FROM bida_sector_global_info T1
                        WHERE T1.Active = ?
                ");
$sql1->bindValue(1, 1);
$sql1->execute();
$sql1->setFetchMode(PDO::FETCH_ASSOC);
$SectorInfo = $sql1->fetchAll();