<?php


$name = $_GET['name'];
$map_data = get_map_data();
$array = array(
   // 'desc' => $map_data[$name]['desc'],
   'map_url' => $map_data[$name]['map_url'],
   'title' => $map_data[$name]['title'],
   'gram_panchayat' => $map_data[$name]['gram_panchayat'],
   'district' => $map_data[$name]['district'],
   'area' => $map_data[$name]['area'],
   'total_population' => $map_data[$name]['total_population'],
);
echo json_encode($array);


function get_map_data() {
    $map_array = array(
        'jhansi' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115325.54221242554!2d78.2648408743714!3d25.407381435869468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.412443099999997!2d78.3474995!5e0!3m2!1sen!2sin!4v1707576069970!5m2!1sen!2sin',
            'title' => 'About Jhansi',
            'gram_panchayat' => 'Jhansi',
            'district' => 'Pratapgarh',
            'area' => '819.71 hectares',
            'total_population' => '5,709',
            'desc' => 'jhansi ke bare me'
        ),
        'rajapur' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115325.54221242554!2d78.2648408743714!3d25.407381435869468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.412443099999997!2d78.3474995!5e0!3m2!1sen!2sin!4v1707576069970!5m2!1sen!2sin',
            'title' => 'About Rajapur',
            'gram_panchayat' => 'Rajapur',
            'district' => 'Rajapur',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'rajapur ke bare me'
        ),
        'rajapur' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115325.54221242554!2d78.2648408743714!3d25.407381435869468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.412443099999997!2d78.3474995!5e0!3m2!1sen!2sin!4v1707576069970!5m2!1sen!2sin',
            'title' => 'About Rajapur',
            'gram_panchayat' => 'Rajapur',
            'district' => 'Rajapur',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'rajapur ke bare me'
        ),
        'chamaraua' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115385.97463291786!2d78.38710957217499!3d25.344098677274737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.3448735!2d78.46957739999999!5e0!3m2!1sen!2sin!4v1707807908680!5m2!1sen!2sin',
            'title' => 'About chamaraua',
            'gram_panchayat' => 'Chamaraua',
            'district' => 'Chamaraua',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'chamaraua ke bare me'
        )
        ,
        'kot khera' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115260.55704307748!2d78.38426777673322!3d25.475267891576635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.4782542!2d78.4654474!5e0!3m2!1sen!2sin!4v1707808878773!5m2!1sen!2sin',
            'title' => 'About kot khera',
            'gram_panchayat' => 'kot khera',
            'district' => 'kot khera',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'kot khera ke bare me'
        ),
        'Sarmau' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115207.9968980246!2d78.37574187864347!3d25.53005135592712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.531944199999998!2d78.46008859999999!5e0!3m2!1sen!2sin!4v1707809452595!5m2!1sen!2sin',
            'title' => 'About Sarmau',
            'gram_panchayat' => 'Sarmau',
            'district' => 'Sarmau',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Sarmau ke bare me'
        ),
        'Punawali Kalan' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115230.41213444207!2d78.37574187782883!3d25.506701371111475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.5085896!2d78.4632048!5e0!3m2!1sen!2sin!4v1707809858048!5m2!1sen!2sin',
            'title' => 'About Punawali Kalan',
            'gram_panchayat' => 'Punawali Kalan',
            'district' => 'Punawali Kalan',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Punawali Kalan ke bare me'
        ) ,
        'Domagor' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115237.32234106805!2d78.34020967757768!3d25.499498975798243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.5026355!2d78.4228009!5e0!3m2!1sen!2sin!4v1707810107564!5m2!1sen!2sin',
            'title' => 'About Domagor',
            'gram_panchayat' => 'Domagor',
            'district' => 'Domagor',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Domagor ke bare me'
        ),
        'Simra' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115198.52011007608!2d78.35300267898788!3d25.53991734951592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.5429554!2d78.43546099999999!5e0!3m2!1sen!2sin!4v1707810602186!5m2!1sen!2sin',
            'title' => 'About Simra',
            'gram_panchayat' => 'Simra',
            'district' => 'Simra',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Simra ke bare me'
        ),
        'Gobara' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115213.18731937512!2d78.34447427845481!3d25.52464625944066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.5277173!2d78.42704959999999!5e0!3m2!1sen!2sin!4v1707810841264!5m2!1sen!2sin',
            'title' => 'About Gobara',
            'gram_panchayat' => 'Gobara',
            'district' => 'Gobara',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Gobara ke bare me'
        ),
        'Dagarwaha' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115301.87417970465!2d78.31888447523163!3d25.432125719710005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.438338599999998!2d78.4014033!5e0!3m2!1sen!2sin!4v1707811369853!5m2!1sen!2sin',
            'title' => 'About Dagarwaha',
            'gram_panchayat' => 'Dagarwaha',
            'district' => 'Dagarwaha',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Dagarwaha ke bare me'
        ),
        'Bamair' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115315.18916796584!2d78.32741517474767!3d25.418208028796958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.421745899999998!2d78.4082677!5e0!3m2!1sen!2sin!4v1707811793326!5m2!1sen!2sin',
            'title' => 'About Bamair',
            'gram_panchayat' => 'Bamair',
            'district' => 'Bamair',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Bamair ke bare me'
        ),
        'Bajna' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115333.64899490974!2d78.34163127407678!3d25.398900841411734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.4031397!2d78.4201123!5e0!3m2!1sen!2sin!4v1707811634268!5m2!1sen!2sin',
            'title' => 'About Bajna',
            'gram_panchayat' => 'Bajna',
            'district' => 'Bajna',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Bajna ke bare me'
        ),
        'Dongri' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115329.34737888887!2d78.3984759742331!3d25.403401138470432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.3986172!2d78.47416179999999!5e0!3m2!1sen!2sin!4v1707812020035!5m2!1sen!2sin',
            'title' => 'About Dongri',
            'gram_panchayat' => 'Dongri',
            'district' => 'Dongri',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Dongri ke bare me'
        ),
        'Baruapur' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115369.15334105212!2d78.3398669727864!3d25.36172816572869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.361152399999998!2d78.42108979999999!5e0!3m2!1sen!2sin!4v1707812204996!5m2!1sen!2sin',
            'title' => 'About Baruapur',
            'gram_panchayat' => 'Baruapur',
            'district' => 'Baruapur',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Baruapur ke bare me'
        ),
        'Math' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115340.08188187033!2d78.36721527384297!3d25.392169445812296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.3932517!2d78.4456699!5e0!3m2!1sen!2sin!4v1707812410024!5m2!1sen!2sin',
            'title' => 'About Math',
            'gram_panchayat' => 'Math',
            'district' => 'Math',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Math ke bare me'
        ),
        'Badanpur' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115361.61883938951!2d78.23069357306024!3d25.369620960562287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.372136899999997!2d78.31347579999999!5e0!3m2!1sen!2sin!4v1707812673113!5m2!1sen!2sin',
            'title' => 'About Badanpur',
            'gram_panchayat' => 'Badanpur',
            'district' => 'Badanpur',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Badanpur ke bare me'
        ),
        'Kichalwara khurd' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115400.11344555659!2d78.38426777166111!3d25.329271686992065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.3308952!2d78.4663714!5e0!3m2!1sen!2sin!4v1707814157843!5m2!1sen!2sin',
            'title' => 'About Kichalwara khurd',
            'gram_panchayat' => 'Kichalwara khurd',
            'district' => 'Kichalwara khurd',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Kichalwara khurd ke bare me'
        ),
        'Khajuraha Bujurg' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115421.0993284833!2d78.4013173708984!3d25.307249401436383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.308712399999997!2d78.4845668!5e0!3m2!1sen!2sin!4v1707817647436!5m2!1sen!2sin',
            'title' => 'About Khajuraha Bujurg',
            'gram_panchayat' => 'Khajuraha Bujurg',
            'district' => 'Khajuraha Bujurg',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Khajuraha Bujurg ke bare me'
        ),
        'Khajuraha khurd' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115421.0993284833!2d78.4013173708984!3d25.307249401436383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.308712399999997!2d78.4845668!5e0!3m2!1sen!2sin!4v1707817647436!5m2!1sen!2sin',
            'title' => 'About Khajuraha khurd',
            'gram_panchayat' => 'Khajuraha khurd',
            'district' => 'Khajuraha khurd',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Khajuraha khurd ke bare me'
        ),
        'Dhikoli' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115257.12248523245!2d78.35584537685807!3d25.478851089242358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.4821283!2d78.4395265!5e0!3m2!1sen!2sin!4v1707818737381!5m2!1sen!2sin',
            'title' => 'About Dhikoli',
            'gram_panchayat' => 'Dhikoli',
            'district' => 'Dhikoli',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Dhikoli ke bare me'
        ),
        'Kalothara' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115195.70619323573!2d78.37147867909015!3d25.542846147613233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.5408834!2d78.4529704!5e0!3m2!1sen!2sin!4v1707818959144!5m2!1sen!2sin',
            'title' => 'About Kalothara',
            'gram_panchayat' => 'Kalothara',
            'district' => 'Kalothara',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Kalothara ke bare me'
        ),
        'Basai' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115383.52270696704!2d78.25203552490622!3d25.346669121494223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m3!3m2!1d25.3491218!2d78.3343747!4m0!5e0!3m2!1sen!2sin!4v1707814673505!5m2!1sen!2sin',
            'title' => 'About Basai',
            'gram_panchayat' => 'Basai',
            'district' => 'Basai',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Basai ke bare me'
        ),
        'Khaira' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115370.59320804592!2d78.25915047273405!3d25.360219566716374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.362860899999998!2d78.3399908!5e0!3m2!1sen!2sin!4v1707814855004!5m2!1sen!2sin',
            'title' => 'About Khaira',
            'gram_panchayat' => 'Khaira',
            'district' => 'Khaira',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Khaira ke bare me'
        ),
        'Parasai' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115351.73393358894!2d78.25061417341948!3d25.379972453789136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.380828899999997!2d78.3326553!5e0!3m2!1sen!2sin!4v1707815084799!5m2!1sen!2sin',
            'title' => 'About Parasai',
            'gram_panchayat' => 'Parasai',
            'district' => 'Parasai',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Parasai ke bare me'
        ),
        'Imiliya' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115361.14881510747!2d78.27337597307732!3d25.370113260240107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.3732087!2d78.3590009!5e0!3m2!1sen!2sin!4v1707815217381!5m2!1sen!2sin',
            'title' => 'About Imiliya',
            'gram_panchayat' => 'Imiliya',
            'district' => 'Imiliya',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Imiliya ke bare me'
        ),
        'Amarpur' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115369.70167580862!2d78.30750927276644!3d25.361153666104805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.3621959!2d78.384439!5e0!3m2!1sen!2sin!4v1707815432449!5m2!1sen!2sin',
            'title' => 'About Amarpur',
            'gram_panchayat' => 'Amarpur',
            'district' => 'Amarpur',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Amarpur ke bare me'
        ),
        'Bachhauni' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115325.54221242554!2d78.2648408743714!3d25.407381435869468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.412443099999997!2d78.3474995!5e0!3m2!1sen!2sin!4v1707816012328!5m2!1sen!2sin',
            'title' => 'About Bachhauni',
            'gram_panchayat' => 'Bachhauni',
            'district' => 'Bachhauni',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Bachhauni ke bare me'
        ),
        'Gagauni' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115354.68495046842!2d78.32172817331224!3d25.376882555810603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.3786836!2d78.4036608!5e0!3m2!1sen!2sin!4v1707816284805!5m2!1sen!2sin',
            'title' => 'About Gagauni',
            'gram_panchayat' => 'Gagauni',
            'district' => 'Gagauni',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Gagauni ke bare me'
        ),
        'Baidora' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115402.26186468598!2d78.31888447158306!3d25.327017988469635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.3315405!2d78.39860829999999!5e0!3m2!1sen!2sin!4v1707816773797!5m2!1sen!2sin',
            'title' => 'About Baidora',
            'gram_panchayat' => 'Baidora',
            'district' => 'Baidora',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Baidora ke bare me'
        ),
        'Murari' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115389.0652913291!2d78.3550148720627!3d25.3408582793979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.3431325!2d78.4351508!5e0!3m2!1sen!2sin!4v1707816904150!5m2!1sen!2sin',
            'title' => 'About Murari',
            'gram_panchayat' => 'Murari',
            'district' => 'Murari',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Murari ke bare me'
        ),
        'Murari' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115389.0652913291!2d78.3550148720627!3d25.3408582793979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.3431325!2d78.4351508!5e0!3m2!1sen!2sin!4v1707816904150!5m2!1sen!2sin',
            'title' => 'About Murari',
            'gram_panchayat' => 'Murari',
            'district' => 'Murari',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Murari ke bare me'
        ),
        'Ambabai' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115389.0652913291!2d78.3550148720627!3d25.3408582793979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.3431325!2d78.4351508!5e0!3m2!1sen!2sin!4v1707816904150!5m2!1sen!2sin',
            'title' => 'About Ambabai',
            'gram_panchayat' => 'Ambabai',
            'district' => 'Ambabai',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Ambabai ke bare me'
        ),
        'Rampura' => array(
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d115389.0652913291!2d78.3550148720627!3d25.3408582793979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d25.3431325!2d78.4351508!5e0!3m2!1sen!2sin!4v1707816904150!5m2!1sen!2sin',
            'title' => 'About Rampura',
            'gram_panchayat' => 'Rampura',
            'district' => 'Rampura',
            'area' => '8219.71 hectares',
            'total_population' => '2,709',
            'desc' => 'Rampura ke bare me'
        ),
    );
    return $map_array;
}
