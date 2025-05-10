window.addEventListener('load', function() {
    "use strict";

    function average(json) {
        let average_rating = 0;
        for (let i = 0; i < json.length; i++) {
            average_rating += json[i].stars;
        }

        average_rating = (average_rating / json.length).toFixed(2);
        
        document.getElementById('average').innerHTML = '<p><strong> Average Rating: ' + average_rating + '</strong></p>';
    }

    const URL = "data/reviews.json";

    fetch(URL)
        .then(
            function(response) {
                return response.json();
            }
        )
        .then(
            function(json){
                console.log(json);
                average(json);
            }
        )
        .catch(
            function(error){
                console.log("Something went wrong!", error);
            }
        );

    console.log(URL);
});