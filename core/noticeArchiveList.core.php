<?php

$sql = "SELECT SQL_CALC_FOUND_ROWS T1.ID, T1.NoticeTitle, T1.NoticeRefrenceNo, T1.ReleaseDate, T1.NoticeDescription, T1.NoticeStatus, T1.Active, T1.DateCreated,  GROUP_CONCAT(T2.FileName) AS FileName, GROUP_CONCAT(T2.Description SEPARATOR '@@') AS Description, GROUP_CONCAT(T2.Attachment SEPARATOR '@@') AS Attachment, GROUP_CONCAT(T2.Date SEPARATOR '@@') AS Dated 
                          FROM bida_notice T1
                          LEFT JOIN bida_notice_attachments T2 ON T2.NoticeID = T1.ID
                          WHERE T1.Active = ?
                          AND T1.NoticeStatus = ?
                        ";

$sql .= " GROUP BY T1.ID ORDER BY T1.ID DESC";
//echo $sql;

$i = 1;
$sql = $db->prepare($sql);
$sql->bindValue($i++, 1);
$sql->bindValue($i++, 1);
$sql->execute();
$rs1 = $db->query('SELECT FOUND_ROWS()');
$total_count = (int) $rs1->fetchColumn();
$sql->setFetchMode(PDO::FETCH_ASSOC);