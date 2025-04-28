window.addEventListener('load', function() {
    "use strict";

    function formatDate(raw_date) {
        let formatted = new Date(raw_date);
        return formatted.toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' });
    }

    function timedReviews(fivestars) {
        let i = Math.floor(Math.random() * fivestars.length);
        
        if (fivestars[i].review_content == "") {
            fivestars[i].review_content = "Description not included"
        }

        if (fivestars[i].user.name == "") {
            fivestars[i].user.name = "Anonymous"
        }

        if (fivestars[i].user.location == "") {
            fivestars[i].user.location = "N/A"
        }

        document.getElementById('timed').innerHTML = '<h2>' + fivestars[i].review_title + '</h2>';
        document.getElementById('timed').innerHTML += '<p>' + fivestars[i].review_content + '</p>';
        document.getElementById('timed').innerHTML += '<p> ⭐⭐⭐⭐⭐</p>';
        document.getElementById('timed').innerHTML += '<p>' + fivestars[i].user.name + ' | ' + fivestars[i].user.location + ' | ' + formatDate(fivestars[i].date) + '</p>';
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
                }, 5000);
            }
        )
        .catch(
            //error
        );
    console.log(URL);
});