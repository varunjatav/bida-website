<?php

$user_id = $_SESSION['UserID'];
$user_type = $_SESSION['UserType'];
$notice_id = myUrlEncode(decryptIt($_REQUEST['id']));

$sql = "SELECT T1.ID, T1.NoticeTitle, T1.NoticeRefrenceNo, T1.ReleaseDate, T1.NoticeDescription, T1.NoticeStatus, T1.Active, T1.DateCreated, T1.DateEdited, T1.EditedBY, T1.CreatedBy, T2.Name
                        FROM bida_notice T1
                        LEFT JOIN bida_admin_user_details T2 ON T2.UserID = T1.CreatedBy
                        WHERE T1.ID = ?
                        ";

$sql .= " GROUP BY T1.ID ";

$sql = $db->prepare($sql);
$sql->bindParam(1, $notice_id);
$sql->execute();
$total_count = $sql->rowCount();
$sql->setFetchMode(PDO::FETCH_ASSOC);
$row = $sql->fetch();

$meet_type = '--';
$status = '--';
if ($row['NoticeStatus'] == '0') {
    $meet_type = 'Latest Notice';
} else if ($row['NoticeStatus'] == '1') {
    $meet_type = 'Archives';
}

if ($row['Active'] == '1') {
    $status = 'Active';
} else if ($row['Status'] == '0') {
    $status = 'Deactive';
}

$attachment = $db->prepare("SELECT * FROM bida_notice_attachments WHERE NoticeID = ?");
$attachment->bindParam(1, $notice_id);
$attachment->execute();
$attachment_info = $attachment->fetchAll();
$attachment_count = $attachment->rowCount();
