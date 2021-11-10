<?php
function saveData($data){
    $dataJson = json_encode($data);
    file_put_contents("data.json",$dataJson);
}

function loadData(){
    $dataJson = file_get_contents("data.json");
    $data = json_decode($dataJson);
    return $data;
}

function addNewLists($request){
    $lists = loadData();
    $list = array(
        "name"=>$request["name"],
        "age"=>$request["age"],
        "address"=>$request["address"],
        "department"=>$request["department"],
        "phone"=>$request["phone"]
    );
    array_push($lists,$list);
    savedata($lists);
}


function deleteLists($index){
    $lists = loadData();
    array_splice($lists,$index,1);
    saveData($lists);
}

function editLists($request){
    $id = $request["id"];
    $lists = loadData();
    $lists[$id] = array(
        "name"=>$request["name"],
        "age"=>$request["age"],
        "address"=>$request["address"],
        "department"=>$request["department"],
        "phone"=>$request["phone"]
    );
    saveData($lists);
}

function getById($id){
    $lists = loadData();
    return $lists[$id];
}