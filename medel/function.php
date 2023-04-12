<?php
class mobile {

        public function getting()
        {
            $filename = 'medel/mobile.json';
            $dataJSON = file_get_contents($filename);
            $decode = json_decode($dataJSON);
            if($dataJSON){
                return $decode;
            }else{
                include "alertInput.php";

            }
        }
}
?>