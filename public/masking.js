document.addEventListener('DOMContentLoaded', () => {
    const studentInput = document.getElementById('studentID');
    
    if (studentInput) {
        studentInput.addEventListener('input', function (e) {
            let value = e.target.value.replace(/\D/g, ''); 
            if (value.length > 2) {
                value = value.substring(0, 2) + '-' + value.substring(2, 8);
            }
            e.target.value = value;
        });
    }
});