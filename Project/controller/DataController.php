<?php  
function readData(){

    $data = file_get_contents('../controller/data.json');  

    $data = json_decode($data, true);

    return $data;

}

function storeData($data){



    $current_data = file_get_contents('../controller/data.json');  

    $array_data = json_decode($current_data, true);  

     

    $array_data[] = $data;  

    $final_data = json_encode($array_data);  

    return $final_data;

}

function loadData(){
return readData();

}
function addData($data){
	$final_data = storeData($data);
    if(file_put_contents('../controller/data.json', $final_data))  
        {  
            header("location:../view/load.php");
        }  

}
function studentInfo($data){

$all_data = readData();
    foreach($all_data as $row)  {
        if ($row['name']==$data) {
            $d_data = array(
                'name' => $row['name'],
                'e-mail' => $row['e-mail'],
                'username' => $row['username'],
                'gender' => $row['gender'],
				'dob' => $row['dob'],
				'passcode' => $row['pass'],
                
            );
        return $d_data;
        }
    }

}

?>