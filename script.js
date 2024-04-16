document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('crime-report-form');
  const crimeList = document.getElementById('records-list');

  form.addEventListener('submit', function(event) {
    event.preventDefault();

    const crimeType = document.getElementById('crime-type').value;
    const location = document.getElementById('location').value;
    const date = document.getElementById('date').value;

    // Create list item with crime details
    const listItem = document.createElement('li');
    listItem.innerHTML = `
      <strong>Type of Crime:</strong> ${crimeType}<br>
      <strong>Location:</strong> ${location}<br>
      <strong>Date:</strong> ${date}
    `;
    crimeList.appendChild(listItem);

    // Reset form fields
    form.reset();
  });
});
