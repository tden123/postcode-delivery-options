(function () {
  // postcodes returns a 2D array
  // array format: [town, postcode, run, area, days_available]
  console.log(postcode_data);

  if (!postcode_data) return;

  let input_box = document.getElementById('postcode-input');
  let input_data = document.getElementById('postcode-data');

  input_box.oninput = handleInput;

  function handleInput(e) {
    input_data.innerHTML = '';

    postcode_data.forEach((item) => {
      if (
        (item[0].toLowerCase().includes(e.target.value.toLowerCase()) ||
          item[1].toLowerCase().includes(e.target.value.toLowerCase())) &&
        e.target.value.length > 0
      ) {
        input_data.innerHTML += `
          <div class="data_point">
            <span>${item[0]}</span>
            <span>${item[1]}</span>
            <span>${item[2]}</span>
            <span>${item[3]}</span>
            <span>${item[4].join()}</span>
          </div>`;
      }
    });

    console.log(e.target.value);
  }
})(document);
