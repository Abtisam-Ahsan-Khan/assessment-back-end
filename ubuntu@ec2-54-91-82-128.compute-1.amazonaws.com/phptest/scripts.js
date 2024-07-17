document.addEventListener('DOMContentLoaded', function() {
    // Fetch and display classes
    fetch('get_classes.php')
        .then(response => response.json())
        .then(data => {
            const classesList = document.getElementById('classesList');
            classesList.innerHTML = data.map(cls => `
                <div>
                    <h3>${cls.ClassName} (Capacity: ${cls.Capacity})</h3>
                </div>
            `).join('');
        })
        .catch(error => console.error('Error fetching classes:', error));

    // Fetch and display pupils
    fetch('get_pupils.php')
        .then(response => response.json())
        .then(data => {
            const pupilsList = document.getElementById('pupilsList');
            pupilsList.innerHTML = data.map(pupil => `
                <div>
                    <h3>${pupil.Name}</h3>
                    <p>Address: ${pupil.Address}</p>
                    <p>Medical Info: ${pupil.MedicalInfo}</p>
                    <p>Class ID: ${pupil.ClassID}</p>
                </div>
            `).join('');
        })
        .catch(error => console.error('Error fetching pupils:', error));

    // Fetch and display teachers
    fetch('get_teachers.php')
        .then(response => response.json())
        .then(data => {
            const teachersList = document.getElementById('teachersList');
            teachersList.innerHTML = data.map(teacher => `
                <div>
                    <h3>${teacher.Name}</h3>
                    <p>Address: ${teacher.Address}</p>
                    <p>Phone: ${teacher.PhoneNumber}</p>
                    <p>Salary: ${teacher.AnnualSalary}</p>
                    <p>Background Check: ${teacher.BackgroundCheck}</p>
                </div>
            `).join('');
        })
        .catch(error => console.error('Error fetching teachers:', error));

    // Fetch and display parents
    fetch('get_parents.php')
        .then(response => response.json())
        .then(data => {
            const parentsList = document.getElementById('parentsList');
            parentsList.innerHTML = data.map(parent => `
                <div>
                    <h3>${parent.Name}</h3>
                    <p>Address: ${parent.Address}</p>
                    <p>Email: ${parent.Email}</p>
                    <p>Phone: ${parent.PhoneNumber}</p>
                </div>
            `).join('');
        })
        .catch(error => console.error('Error fetching parents:', error));
});
