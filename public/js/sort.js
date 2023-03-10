    document.getElementById('sort-select').addEventListener('change', function () {
    var sortValue = this.value;
    // make the AJAX request to the server
    axios.post('/reservations/sort', {
    sortValue: sortValue
})
    .then(function (response) {
    // handle the response from the server and update the HTML content
})
    .catch(function (error) {
    console.log(error);
});
});
