<?php
require_once APP_ROOT. '/app/services/PatientService.php';
class HomeController{
    public function index(){
        //Goi DL tu PatientService
        $patientService = new PatientService();
        $patients = $patientService->getAllPatients();
        //Render DL  duoc lay ra HomePage
        include APP_ROOT.'/app/views/home/index.php';
    }
}