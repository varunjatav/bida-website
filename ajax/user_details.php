<?php
$id = $_POST['id'];

$user_array = array(
    '1' => array(
        'name' => 'N/A',
        'designation' => 'GM Admin',
        'mobile' => 'N/A',
        'pic'=>""
    ),
    '2' => array(
        'name' => 'N/A',
        'designation' => 'GM Planning',
        'mobile' => 'N/A'
    ),
    '3' => array(
        'name' => 'N/A',
        'designation' => 'CGM Civil',
        'mobile' => 'N/A'
    ),
    '4' => array(
        'name' => 'N/A',
        'designation' => 'GM (E & M)',
        'mobile' => 'N/A'
    ),
    '5' => array(
        'name' => 'N/A',
        'designation' => 'Chief Financial Officer',
        'mobile' => 'N/A'
    ),
    '6' => array(
        'name' => 'Mr. Lal Krishna',
        'designation' => 'Director (Land Acq)',
        'mobile' => 'N/A'
    ),
    '7' => array(
        'name' => 'N/A',
        'designation' => 'AGM System',
        'mobile' => 'N/A'
    ),
    '8' => array(
        'name' => 'N/A',
        'designation' => 'Director Horticulture',
        'mobile' => 'N/A'
    ),
    '9' => array(
        'name' => 'Mr. Lal Krishna',
        'designation' => 'Chief Legal & Compliance Officer',
        'mobile' => 'N/A'
    ),
    '10' => array(
        'name' => 'N/A',
        'designation' => 'GM Industrial Area',
        'mobile' => 'N/A'
    ),
    '11' => array(
        'name' => 'N/A',
        'designation' => 'GM Public Health',
        'mobile' => 'N/A'
    ),
    '12' => array(
        'name' => 'N/A',
        'designation' => 'Police Inspector',
        'mobile' => 'N/A'
    ),
    '13' => array(
        'name' => 'N/A',
        'designation' => 'Store Purch Officer',
        'mobile' => 'N/A'
    ),
    '14' => array(
        'name' => 'N/A',
        'designation' => 'DGM',
        'mobile' => 'N/A'
    ),
    '15' => array(
        'name' => 'N/A',
        'designation' => 'DGM',
        'mobile' => 'N/A'
    ),
    '16' => array(
        'name' => 'N/A',
        'designation' => 'Chief Engineer M&P',
        'mobile' => 'N/A'
    ),
    '17' => array(
        'name' => 'N/A',
        'designation' => 'DGM',
        'mobile' => 'N/A'
    ),
    '18' => array(
        'name' => 'N/A',
        'designation' => 'SR(AO)',
        'mobile' => 'N/A'
    ),
    '19' => array(
        'name' => 'Alok Katiyar',
        'designation' => 'Tehsildar',
        'mobile' => 'N/A',
        'pic'=>'img/alokteh.jpeg'
    ),
    '20' => array(
        'name' => 'N/A',
        'designation' => 'Manager',
        'mobile' => 'N/A'
    ),
    '21' => array(
        'name' => 'N/A',
        'designation' => 'DD Hort',
        'mobile' => 'N/A'
    ),
    '22' => array(
        'name' => 'N/A',
        'designation' => 'Legal Advisor',
        'mobile' => 'N/A'
    ),
    '23' => array(
        'name' => 'N/A',
        'designation' => 'DGM',
        'mobile' => 'N/A'
    ),
    '24' => array(
        'name' => 'N/A',
        'designation' => 'Sr Project Manager',
        'mobile' => 'N/A'
    ),
    '25' => array(
        'name' => 'N/A',
        'designation' => 'Head Constable',
        'mobile' => 'N/A'
    ),
    '26' => array(
        'name' => 'N/A',
        'designation' => 'Ast S&P',
        'mobile' => 'N/A'
    ),
    '27' => array(
        'name' => 'N/A',
        'designation' => 'AGM',
        'mobile' => 'N/A'
    ),
    '28' => array(
        'name' => 'N/A',
        'designation' => 'Senior Manager',
        'mobile' => 'N/A'
    ),
    '29' => array(
        'name' => 'N/A',
        'designation' => 'GM',
        'mobile' => 'N/A'
    ),
    '30' => array(
        'name' => 'N/A',
        'designation' => 'Sr Manager',
        'mobile' => 'N/A'
    ),
    '31' => array(
        'name' => 'N/A',
        'designation' => 'AO',
        'mobile' => 'N/A'
    ),
    '32' => array(
        'name' => 'Ajit Yadav',
        'designation' => 'Naib Tehsildar',
        'mobile' => 'N/A',
        'pic'=>'img/ajitnaib.jpeg'
    ),
    '33' => array(
        'name' => 'N/A',
        'designation' => 'Sr Prog',
        'mobile' => 'N/A'
    ),
    '34' => array(
        'name' => 'N/A',
        'designation' => 'Ast Director',
        'mobile' => 'N/A'
    ),
    '35' => array(
        'name' => 'N/A',
        'designation' => 'Ast Law Officer',
        'mobile' => 'N/A'
    ),
    '36' => array(
        'name' => 'N/A',
        'designation' => 'AGM',
        'mobile' => 'N/A'
    ),
    '37' => array(
        'name' => 'N/A',
        'designation' => 'Project Engg',
        'mobile' => 'N/A'
    ),
    '38' => array(
        'name' => 'N/A',
        'designation' => 'Constable',
        'mobile' => 'N/A'
    ),
    '39' => array(
        'name' => 'N/A',
        'designation' => 'Assistant',
        'mobile' => 'N/A'
    ),
    '40' => array(
        'name' => 'N/A',
        'designation' => 'Manager',
        'mobile' => 'N/A'
    ),
    '41' => array(
        'name' => 'N/A',
        'designation' => 'Manager',
        'mobile' => 'N/A'
    ),
    '42' => array(
        'name' => 'N/A',
        'designation' => 'DGM',
        'mobile' => 'N/A'
    ),
    '43' => array(
        'name' => 'N/A',
        'designation' => 'Manager',
        'mobile' => 'N/A'
    ),
    '44' => array(
        'name' => 'N/A',
        'designation' => 'AAO',
        'mobile' => 'N/A'
    ),
    '45' => array(
        'name' => 'N/A',
        'designation' => 'Sup. Kanungo',
        'mobile' => 'N/A'
    ),
    '46' => array(
        'name' => 'N/A',
        'designation' => 'Programmer',
        'mobile' => 'N/A'
    ),
    '47' => array(
        'name' => 'N/A',
        'designation' => 'Inspector',
        'mobile' => 'N/A'
    ),
    '48' => array(
        'name' => 'N/A',
        'designation' => 'Misistrial Cadre',
        'mobile' => 'N/A'
    ),
    '49' => array(
        'name' => 'N/A',
        'designation' => 'Manager',
        'mobile' => 'N/A'
    ),
    '50' => array(
        'name' => 'N/A',
        'designation' => 'AE',
        'mobile' => 'N/A'
    ),
    '51' => array(
        'name' => 'N/A',
        'designation' => 'Junior Assistant',
        'mobile' => 'N/A'
    ),
    '52' => array(
        'name' => 'N/A',
        'designation' => 'Astt. Manager',
        'mobile' => 'N/A'
    ),
    '53' => array(
        'name' => 'N/A',
        'designation' => 'Ast. Manager',
        'mobile' => 'N/A'
    ),
    '54' => array(
        'name' => 'N/A',
        'designation' => 'Sr Manager',
        'mobile' => 'N/A'
    ),
    '55' => array(
        'name' => 'N/A',
        'designation' => 'Ast Mgr',
        'mobile' => 'N/A'
    ),
    '56' => array(
        'name' => 'N/A',
        'designation' => 'Acct',
        'mobile' => 'N/A'
    ),
    '57' => array(
        'name' => 'N/A',
        'designation' => 'Lekhpal',
        'mobile' => 'N/A'
    ),
    '58' => array(
        'name' => 'N/A',
        'designation' => 'Data Entry Op',
        'mobile' => 'N/A'
    ),
    '59' => array(
        'name' => 'N/A',
        'designation' => 'Ministrial Cadre',
        'mobile' => 'N/A'
    ),
    '60' => array(
        'name' => 'N/A',
        'designation' => 'Grp 4',
        'mobile' => 'N/A'
    ),
    '61' => array(
        'name' => 'N/A',
        'designation' => 'Ministrial Cadre',
        'mobile' => 'N/A'
    ),
    '62' => array(
        'name' => 'N/A',
        'designation' => 'JE',
        'mobile' => 'N/A'
    ),
    '63' => array(
        'name' => 'N/A',
        'designation' => 'Sr. Store Keeper',
        'mobile' => 'N/A'
    ),
    '64' => array(
        'name' => 'N/A',
        'designation' => 'Ministrial Cadre',
        'mobile' => 'N/A'
    ),
    '65' => array(
        'name' => 'N/A',
        'designation' => 'Sr Drftman',
        'mobile' => 'N/A'
    ),
    '66' => array(
        'name' => 'N/A',
        'designation' => 'Manager',
        'mobile' => 'N/A'
    ),
    '67' => array(
        'name' => 'N/A',
        'designation' => 'Ministrial Cadre',
        'mobile' => 'N/A'
    ),
    '68' => array(
        'name' => 'N/A',
        'designation' => 'Ast Acct',
        'mobile' => 'N/A'
    ),
    '69' => array(
        'name' => 'N/A',
        'designation' => 'Ministrial Cadre',
        'mobile' => 'N/A'
    ),
    '70' => array(
        'name' => 'N/A',
        'designation' => 'Computer Ops',
        'mobile' => 'N/A'
    ),
    '71' => array(
        'name' => 'N/A',
        'designation' => 'Grp 4',
        'mobile' => 'N/A'
    ),
    '72' => array(
        'name' => 'N/A',
        'designation' => 'Grp 4',
        'mobile' => 'N/A'
    ),
    '73' => array(
        'name' => 'N/A',
        'designation' => 'Sanitary Insp',
        'mobile' => 'N/A'
    ),
    '74' => array(
        'name' => 'N/A',
        'designation' => 'Store Keeper',
        'mobile' => 'N/A'
    ),
    '75' => array(
        'name' => 'N/A',
        'designation' => 'Grp 4',
        'mobile' => 'N/A'
    ),
    '76' => array(
        'name' => 'N/A',
        'designation' => 'Draftman',
        'mobile' => 'N/A'
    ),
    '77' => array(
        'name' => 'N/A',
        'designation' => 'Ast Manager',
        'mobile' => 'N/A'
    ),
    '78' => array(
        'name' => 'N/A',
        'designation' => 'Project Engg (Chemical)',
        'mobile' => 'N/A'
    ),
    '79' => array(
        'name' => 'N/A',
        'designation' => 'Ministrial Cadre',
        'mobile' => 'N/A'
    ),
    '80' => array(
        'name' => 'N/A',
        'designation' => 'Grp 4',
        'mobile' => 'N/A'
    ),
    '81' => array(
        'name' => 'N/A',
        'designation' => 'Ministrial Cadre',
        'mobile' => 'N/A'
    ),
    '82' => array(
        'name' => 'N/A',
        'designation' => 'Ministrial Cadre',
        'mobile' => 'N/A'
    ),
    '83' => array(
        'name' => 'N/A',
        'designation' => 'Ast Store Keeper',
        'mobile' => 'N/A'
    ),
    '84' => array(
        'name' => 'N/A',
        'designation' => 'Ministrial Cadre',
        'mobile' => 'N/A'
    ),
    '85' => array(
        'name' => 'N/A',
        'designation' => 'Ministrial Cadre',
        'mobile' => 'N/A'
    ),
    '86' => array(
        'name' => 'N/A',
        'designation' => 'Grp 4',
        'mobile' => 'N/A'
    ),
    '87' => array(
        'name' => 'N/A',
        'designation' => 'Grp 4',
        'mobile' => 'N/A'
    ),
    '88' => array(
        'name' => 'N/A',
        'designation' => 'Grp 4',
        'mobile' => 'N/A'
    ),
    '89' => array(
        'name' => 'N/A',
        'designation' => 'Grp 4',
        'mobile' => 'N/A'
    ),
    '90' => array(
        'name' => 'N/A',
        'designation' => 'Ministrial Cadre',
        'mobile' => 'N/A'
    ),
    '91' => array(
        'name' => 'N/A',
        'designation' => 'Grp 4',
        'mobile' => 'N/A'
    ),
    '92' => array(
        'name' => 'N/A',
        'designation' => 'Ministrial Cadre',
        'mobile' => 'N/A'
    ),
    '93' => array(
        'name' => 'N/A',
        'designation' => 'Grp 4',
        'mobile' => 'N/A'
    ),
    '94' => array(
        'name' => 'N/A',
        'designation' => 'Grp 4',
        'mobile' => 'N/A'
    ),
    '95' => array(
        'name' => 'N/A',
        'designation' => 'Grp 4',
        'mobile' => 'N/A'
    ),
    '96' => array(
        'name' => 'N/A',
        'designation' => 'Grp 4',
        'mobile' => 'N/A'
    ),
);
?>
<div class="ppovrly">
    <div class="pp-wrap pp-swid open_popup">
        <div class="pp-hdr">
            <div class="pp-ttl left">Bundelkhand Industrial Development Authority</div>
            <div class="pp-clse right close_popup"><i class="fa-solid fa-circle-xmark" style="color: #e66565;"></i></div>
            <div class="clr"></div>
        </div>
        <div class="pp-bdy pp-shig">
            <div class="ofcr-pic left"><img src="img/dummyimage.jpg" alt="" width="100%;" height="100%;"></div>
            <div class="ofcr-infowrap left">
                <span><p class="left">Name:</p><label class="left"><?php echo $user_array[$id]['name']; ?></label><div class="clr"></div></span>
                <span><p class="left">Designation:</p><label class="left"><?php echo $user_array[$id]['designation']; ?></label><div class="clr"></div></span>
                <!--<span><p class="left">Email:</p><label class="left"><?php echo $user_array[$id]['email']; ?></label><div class="clr"></div></span>-->
                <span><p class="left">Mobile:</p><label class="left"><?php echo $user_array[$id]['mobile']; ?></label><div class="clr"></div></span>
            </div>
            <div class="clr"></div>
        </div>
        <!--<div class="pp-ftr alc lstupdt">Last Updated on 15 March, 2024</div>-->
    </div>
</div>