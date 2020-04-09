(function () {
  // postcodes returns a 2D array
  // array format: [town, postcode, run, area, days_available]

  if (!postcode_data) return;

  let inputField = document.getElementById('postcodes__input');

  let displayData = document.getElementById('postcodes__data');

  inputField.oninput = handleInput;

  function handleInput(e) {
    displayData.innerHTML = '';

    // add table header
    if (postcode_data.length > 0 && e.target.value.length > 1) {
      displayData.innerHTML += `
      <tr id='postcodes__data-header'>
        <th>Town</th>
        <th>Postcode</th>
        <th>Run</th>
        <th>Area</th>
        <th>Delivery day/s</th>
      <tr>`;
    }

    if (e.target.value.length > 1) {
      // add data points
      postcode_data.forEach((item) => {
        if (
          (item[0].toLowerCase().includes(e.target.value.toLowerCase()) ||
            item[1].toLowerCase().includes(e.target.value.toLowerCase())) &&
          e.target.value.length > 0
        ) {
          displayData.innerHTML += `
      <tr>
        <td>${item[0]}</td>
        <td>${item[1]}</td>
        <td>${item[2]}</td>
        <td>${item[3]}</td>
        <td>${item[4].join(', ')}</td>
      </tr>`;
        }
      });
    }
  }
})(document);
