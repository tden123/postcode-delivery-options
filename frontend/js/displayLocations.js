(function () {
  /* 
    postcode_data format: [
      town: String, 
      postcode: String, 
      run: String, 
      area: String, 
      days_available: Array
    ] 
  */

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
        <th class="hide-on-mobile">Area</th>
        <th>Delivery day/s</th>
      <tr>`;
    }

    if (e.target.value.length > 1) {
        
      // add data points
      postcode_data.forEach((item) => {
        if (
          (
            item[0] && 
            item[1] &&
            e.target.value.length > 0 &&
            (item[0].toLowerCase().startsWith(e.target.value.toLowerCase()) ||
            item[1].toLowerCase().startsWith(e.target.value.toLowerCase()))) 
        ) {
          displayData.innerHTML += `
      <tr>
        <td>${item[0]}</td>
        <td>${item[1]}</td>
        <td class="hide-on-mobile">${item[2]}</td>
        <td>${item[3].join(', ')}</td>
      </tr>`;
        }
      });
    }
  }
})(document);