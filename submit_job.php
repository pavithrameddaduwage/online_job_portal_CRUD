<?php
include 'db_connection.php'; 
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if(isset($_POST['id']) && !empty($_POST['id'])) {
        $id = $_POST['id'];  

        // Retrieve form data
        $jobTitle = $_POST["job_title"];
        $jobLocation = $_POST["job_location"];
        $jobDescription = $_POST["job_description"];
        $jobKeywords = $_POST["job_keywords"];
        $jobCompany = $_POST["job_company"];
        $jobCompanyURL = $_POST["job_company_url"];
        $jobRequirements = $_POST["job_requirements"];
        $jobResponsibilities = $_POST["job_responsibilities"];
        $jobContactEmail = $_POST["job_contact_email"];
        $jobSalaryAmount = $_POST["job_salary_amount"];
        $jobSalaryTimeframe = $_POST["job_salary_timeframe"];
        $jobSalaryAdditionalInfo = $_POST["job_salary_additional_info"];
        $showSalary = isset($_POST["show_salary"]) ? 1 : 0; 

        //Update
        $sql = "UPDATE jobs SET 
            title = '$jobTitle',
            location = '$jobLocation',
            description = '$jobDescription',
            keywords = '$jobKeywords',
            company = '$jobCompany',
            company_url = '$jobCompanyURL',
            requirements = '$jobRequirements',
            responsibilities = '$jobResponsibilities',
            contact_email = '$jobContactEmail',
            salary_amount = '$jobSalaryAmount',
            salary_timeframe = '$jobSalaryTimeframe',
            salary_additional_info = '$jobSalaryAdditionalInfo',
            show_salary = '$showSalary'
            WHERE JobID = '$id'";

        
        if ($conn->query($sql) === TRUE) {
            echo "<script>showNotification('Record updated successfully');</script>";
            header("Location: view_jobs.php");
            exit(); 
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
         

        // Retrieve form data
        $jobTitle = $_POST["job_title"];
        $jobLocation = $_POST["job_location"];
        $jobDescription = $_POST["job_description"];
        $jobKeywords = $_POST["job_keywords"];
        $jobCompany = $_POST["job_company"];
        $jobCompanyURL = $_POST["job_company_url"];
        $jobRequirements = $_POST["job_requirements"];
        $jobResponsibilities = $_POST["job_responsibilities"];
        $jobContactEmail = $_POST["job_contact_email"];
        $jobSalaryAmount = $_POST["job_salary_amount"];
        $jobSalaryTimeframe = $_POST["job_salary_timeframe"];
        $jobSalaryAdditionalInfo = $_POST["job_salary_additional_info"];
        $showSalary = isset($_POST["show_salary"]) ? 1 : 0; 

       
        $sql = "INSERT INTO jobs (title, location, description, keywords, company, company_url, requirements, responsibilities, contact_email, salary_amount, salary_timeframe, salary_additional_info, show_salary)
                VALUES ('$jobTitle', '$jobLocation', '$jobDescription', '$jobKeywords', '$jobCompany', '$jobCompanyURL', '$jobRequirements', '$jobResponsibilities', '$jobContactEmail', '$jobSalaryAmount', '$jobSalaryTimeframe', '$jobSalaryAdditionalInfo', '$showSalary')";

      
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: view_jobs.php");  
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>
