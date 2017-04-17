<?php

   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('test.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully<br/>";
   }

//-----------------------------------------
//-----------------------------------------
function createIngredientTable() {

    $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully<br/>";
   }

   $sql =<<<EOF
      CREATE TABLE INGREDIENT
      (ID INT PRIMARY   KEY         NOT NULL,
      NAME              CHAR(50)    NOT NULL,
      TEXT1             TEXT,
      TEXT2             TEXT,
      TEXT3             TEXT);
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Table created successfully<br/>";
   }
   $db->close();
}

//-----------------------------------------
//-----------------------------------------
function insertIngredient($id, $name, $text1, $text2, $text3) {

    $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {

   }
   
$sql =<<<EOF
      INSERT INTO INGREDIENT (ID,NAME,TEXT1,TEXT2,TEXT3)
      VALUES ($id, '$name', '$text1', '$text2', '$text3' );
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Ingredient created successfully<br/>";
   }
   $db->close();
}

//-----------------------------------------
//-----------------------------------------
function getIngredient($var, $id) {

    $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {

   }
   
   $sql =<<<EOF
      SELECT * from INGREDIENT where ID = $id;
EOF;

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo $row[$var];
   }

   $db->close();
}
//-----------------------------------------
//-----------------------------------------
function getRows() {

    $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {

   }

$sql =<<<EOF
      SELECT COUNT(*) from INGREDIENT;
EOF;

   $ret = $db->query($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "1";
   }
   $db->close();
}

//-----------------------------------------
//-----------------------------------------
function getAll() {

    $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Current Ingredients: <br/><br/><br/>";
   }

$sql =<<<EOF
      SELECT * from INGREDIENT;
EOF;
   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo "<b>ID:</b> ". $row['ID'] . "<br/><br/>";
      echo "<b>Name:</b> ". $row['NAME'] ."<br/><br/>";
      echo "<b>Left Side Text:</b> <br/><br/>". $row['TEXT1'] ."<br/><br/>";
      echo "<b>Middle Text:</b> <br/><br/>".$row['TEXT2'] ."<br/><br/>";
      echo "<b>Right Side Text:</b> <br/><br/>".$row['TEXT3'] ."<br/><br/><br/><br/>";
   }
   $db->close();
}
//-----------------------------------------
//-----------------------------------------
function updateIngredient($id, $var, $info) {

    $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {

   }
   
   $sql =<<<EOF
        UPDATE INGREDIENT set $var = '$info' where ID = $id;
EOF;
   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Ingredient variable updated successfully:<br/>";
   }

   $db->close();
}

//-----------------------------------------
//-----------------------------------------
function deleteIngredient($id) {

    $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {

   }
   
$sql =<<<EOF
      DELETE from INGREDIENT where ID=$id;
EOF;
   $ret = $db->exec($sql);
   if(!$ret){
     echo $db->lastErrorMsg();
   } else {
      echo "<br/>",$db->changes(), " Ingredient deleted successfully<br/>";
   }

   $db->close();
}

?>
