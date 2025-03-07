document.addEventListener('DOMContentLoaded', () => {
    const closedClinicButton = document.getElementById('closed_clinic');
    const appointmentDiv = document.getElementById('appointmentDiv');
    const clinicClosedDiv = document.getElementById('clinicClosedDiv');

    // if (!closedClinicButton || !appointmentDiv || !clinicClosedDiv) {
    //     console.error('Required elements not found in the DOM.');
    //     return;
    // }

    const updateUI = (isClinicClosed) => {
        if (isClinicClosed) {
            appointmentDiv.style.display = 'none';
            clinicClosedDiv.style.display = 'block';
            closedClinicButton.textContent = 'Open Clinic';
        } else {
            appointmentDiv.style.display = 'block';
            clinicClosedDiv.style.display = 'none';
            closedClinicButton.textContent = 'Close Clinic';
        }
    };

    fetch('functions/get_clinic_status.php')
        .then(response => response.json())
        .then(data => {
            console.log('Fetched status:', data);
            const isClinicClosed = data.status === 'Open Clinic';
            updateUI(isClinicClosed);
        })
        .catch(error => {
            console.error('Error fetching clinic status:', error);
        });

    closedClinicButton.addEventListener('click', () => {
        const isCurrentlyClosed = closedClinicButton.textContent === 'Open Clinic';
        const newStatus = isCurrentlyClosed ? 'false' : 'true';

        fetch('functions/toggle_clinic_status.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams({
                'toggle_clinic_status': true,
                'status': newStatus
            })
        })
        .then(response => response.json())
        .then(data => {
            const isClinicClosed = data.status === 'Open Clinic';
            updateUI(isClinicClosed);
        })
        .catch(error => {
            console.error('Error toggling clinic status:', error);
        });
    });
});
