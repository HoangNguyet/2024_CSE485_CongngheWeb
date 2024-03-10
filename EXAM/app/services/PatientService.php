<?php
require_once APP_ROOT.'/app/models/Patient.php';
class PatientService{
    public function getAllPatients() {
        //Buoc 1: Ket noi Database
        try{
            $conn = new PDO ('mysql:host=localhost;dbname=hms','root','Lanhuong_02');
            //Buoc 2:Truy van DL
            $sql = "SELECT * FROM patients ORDER BY id ASC";
            $stmt = $conn -> query($sql);

            //Buoc 3: Xly kqua tra ve
            $patients = [];
            while($row = $stmt->fetch()){
                //
                $patient = new Patient($row['id'],$row['fullname'],$row['gender'],$row['dateOfBirth'],$row['address'],$row['mobile']);
                $patients[] = $patient;
            }
            return $patients;
        }catch(PDOException $e){
            //$conn = null;
            return  $patients =[];
        }
    }
}
?>