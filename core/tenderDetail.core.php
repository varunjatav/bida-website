<?php

$user_id = $_SESSION['UserID'];
$user_type = $_SESSION['UserType'];
$tender_id = myUrlEncode(decryptIt($_REQUEST['id']));

$sql = "SELECT T1.ID, T1.TenderTitle, T1.TenderRefrenceNo, T1.ReleaseDate, T1.PreBidMeeting, T1.BidSubmission, T1.TechnicalPresentation, T1.TenderDescription, T1.TenderStatus, T1.BidOpeningPreQualificationCheck, T1.FinancialBidOpening, T1.Active, T1.DateCreated, T1.DateEdited, T1.EditedBY, T1.CreatedBy, T2.Name
                        FROM bida_tender T1
                        LEFT JOIN bida_admin_user_details T2 ON T2.UserID = T1.CreatedBy
                        WHERE T1.ID = ?
                        ";

$sql .= " GROUP BY T1.ID ";

$sql = $db->prepare($sql);
$sql->bindParam(1, $tender_id);
$sql->execute();
$total_count = $sql->rowCount();
$sql->setFetchMode(PDO::FETCH_ASSOC);
$row = $sql->fetch();

$meet_type = '--';
$status = '--';
if ($row['TenderStatus'] == '0') {
    $meet_type = 'Latest Tender';
} else if ($row['TenderStatus'] == '1') {
    $meet_type = 'Archives';
}

if ($row['Active'] == '1') {
    $status = 'Active';
} else if ($row['Status'] == '0') {
    $status = 'Deactive';
}

$attachment = $db->prepare("SELECT * FROM bida_tender_attachments WHERE TenderID = ?");
$attachment->bindParam(1, $tender_id);
$attachment->execute();
$attachment_info = $attachment->fetchAll();
$attachment_count = $attachment->rowCount();
