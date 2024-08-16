document.addEventListener('DOMContentLoaded', function() {
    // Attach event listener to the document to handle clicks on any button
    document.body.addEventListener('click', function(event) {
        if (event.target && event.target.classList.contains('read-more-btn')) {
            const card = event.target.closest('.card');
            const moreText = card.querySelector('.more-text');

            if (moreText.style.display === 'none' || moreText.style.display === '') {
                moreText.style.display = 'inline'; // Show the additional text
                event.target.textContent = 'Read Less'; // Change button text
            } else {
                moreText.style.display = 'none'; // Hide the additional text
                event.target.textContent = 'Read More'; // Change button text back
            }
        }
    });
});