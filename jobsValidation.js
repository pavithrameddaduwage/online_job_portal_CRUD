document.addEventListener('DOMContentLoaded', function() {
    const jobForm = document.getElementById('jobForm');
    jobForm.addEventListener('submit', function(event) {

        event.preventDefault();
  
        // Validate job title (alphabets only)
        const jobTitle = document.getElementById('job_title').value.trim();
        if (!isValidAlphabets(jobTitle)) {
            alert('Please enter a valid job title (only alphabets allowed).');
            return;
        }
  
        // Validate job description (at least 20 characters)
        const jobDescription = document.getElementById('job_description').value.trim();
        if (jobDescription.length < 20) {
            alert('Please enter a job description with at least 20 characters.');
            return;
        }
  
        // Validate job company
        const jobCompany = document.getElementById('job_company').value.trim();
        if (!isValidAlphabets(jobCompany)) {
            alert('Please enter a valid company name (only alphabets allowed).');
            return;
        }
  
        // Validate job contact email
        const jobContactEmail = document.getElementById('job_contact').value.trim();
        if (jobContactEmail === '') {
            alert('Please enter a contact email.');
            return;
        } else if (!isValidEmail(jobContactEmail)) {
            alert('Please enter a valid email address.');
            return;
        }

        // Validate salary amount
        const jobSalaryAmount = document.querySelector('input[name="job_salary_amount"]').value.trim();
        if (!isValidSalaryAmount(jobSalaryAmount)) {
            alert('Please enter a valid salary amount.');
            return;
        }
  
        // If all validations pass, you can submit the form
        this.submit();
    });
});
  
// Function to validate if a string contains only alphabets
function isValidAlphabets(value) {
    const alphabetsRegex = /^[A-Za-z\s]+$/;
    return alphabetsRegex.test(value);
}
  
// Function to validate email format
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Function to validate salary amount 
function isValidSalaryAmount(amount) {
    const salaryRegex = /^\d+(\.\d{1,2})?$/; 
    return salaryRegex.test(amount) && parseFloat(amount) > 0;
}
