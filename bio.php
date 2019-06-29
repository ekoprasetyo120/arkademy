<?php
 $hobbies = Array('Badminton', 'Mancing');
// $is_married = False;
 $school = array(
     array(
         'School' => 'SMKN 1 Kab. Tangerang',
         'year_in' => 2016,
         'year_out' => 2019,
         'major' => null
     ),
    );
$skills = array(
     array(
         'skill_name' => 'PHP',
         'Lvl' => "Beginner"
     ),
    );
function bio($name,$age,$address,$hobbies,$is_married,$school,$skills,$interest_in_coding){
    $result = array('nama' => $name, 'age' => $age, 'address' => $address, 'hobbies' => $hobbies, 'is married' => $is_married, 'school' => $school, 'skills' => $skills, 'INterest in coding' => $interest_in_coding);
    echo json_encode($result);
}
bio("Rifki Saputra",17,"Perum Gardenia 1 Nomor 18 Kec Panongan, Kab. Tangerang",$hobbies,False,$school,$skills,True);
?>
