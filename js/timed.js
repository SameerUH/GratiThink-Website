window.addEventListener('load', function() {
    "use strict";


    function timedReviews(fivestars) {
        let i = Math.floor(Math.random() * fivestars.length);

        document.getElementById('timed').innerHTML = '<h2>' + fivestars[i].review_title + '</h2>';
        document.getElementById('timed').innerHTML += '<p>' + fivestars[i].review_content + '</p>';
    }

    const URL = 'data/reviews.json';

    fetch(URL)
        .then(
            function(response) {
                return response.json();
            }
        )
        .then(
            function(json) {
                const fivestars = json.filter(review => review.stars === 5);
                setInterval(function() {
                    timedReviews(fivestars);
                }, 3000);
            }
        )
        .catch(
            //error
        );
    console.log(URL);
});