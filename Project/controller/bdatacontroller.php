<?php  
function readData(){

    $data = file_get_contents('../controller/bdata.json');  

    $data = json_decode($data, true);

    return $data;

}

function storeData($data){



    $current_data = file_get_contents('../controller/bdata.json');  

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
    if(file_put_contents('../controller/bdata.json', $final_data))  
        {  
            header("location:../view/list.php");
        }  

}
function studentInfo($data){

$all_data = readData();
    foreach($all_data as $row)  {
        if ($row['product']==$data) {
            $d_data = array(
                'product' => $row['product'],
                'quantity' => $row['quantity'],
                
                
            );
        return $d_data;
        }
    }

}

?>