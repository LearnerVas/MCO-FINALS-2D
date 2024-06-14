document.addEventListener('DOMContentLoaded', function() {
    // Get modal elements
    const modal = document.getElementById('add-patient-modal');
    const openModalButton = document.getElementById('open-modal-button');
    const closeModalButton = document.getElementsByClassName('close-button')[0];

    // Open modal
    openModalButton.onclick = function() {
        modal.style.display = 'flex';
    };

    // Close modal
    closeModalButton.onclick = function() {
        modal.style.display = 'none';
    };

    // Close modal when clicking outside of the modal content
    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    };
});