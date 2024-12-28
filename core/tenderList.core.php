<?php

$sql = "SELECT SQL_CALC_FOUND_ROWS T1.ID, T1.TenderTitle, T1.TenderRefrenceNo, T1.ReleaseDate, T1.PreBidMeeting, T1.BidSubmission, T1.TechnicalPresentation, T1.TenderDescription, T1.TenderStatus, T1.BidOpeningPreQualificationCheck, T1.FinancialBidOpening, T1.Active, T1.DateCreated,T1.PreBidSubmissionHead,T1.PreBidMeetingTitle,T1.ReleaseDateTitle, GROUP_CONCAT(T2.FileName SEPARATOR '@@') AS FileName, GROUP_CONCAT(T2.Description SEPARATOR '@@') AS Description, GROUP_CONCAT(T2.Attachment SEPARATOR '@@') AS Attachment, GROUP_CONCAT(T2.Date SEPARATOR '@@') AS Dated
                          FROM bida_tender T1
                          LEFT JOIN bida_tender_attachments T2 ON T2.TenderID = T1.ID
                          WHERE T1.Active = ?
                          AND T1.TenderStatus = ?
                        ";
$sql .= " GROUP BY T1.ID ORDER BY T1.ID DESC";

$i = 1;
$sql = $db->prepare($sql);
$sql->bindValue($i++, 1);
$sql->bindValue($i++, 0);
$sql->execute();
$rs1 = $db->query('SELECT FOUND_ROWS()');
$total_count = (int) $rs1->fetchColumn();
$sql->setFetchMode(PDO::FETCH_ASSOC);