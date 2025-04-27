window.addEventListener('load', function() {
    "use strict";

    let reviews = []

    document.getElementById('1 star').addEventListener('click', function(){
        displayReviews(reviews, 1);
    })
    document.getElementById('2 star').addEventListener('click', function(){
        displayReviews(reviews, 2);
    })
    document.getElementById('3 star').addEventListener('click', function(){
        displayReviews(reviews, 3);
    })
    document.getElementById('4 star').addEventListener('click', function(){
        displayReviews(reviews, 4);
    })
    document.getElementById('5 star').addEventListener('click', function(){
        displayReviews(reviews, 5);
    })
    document.getElementById('All').addEventListener('click', function(){
        displayReviews(reviews);
    })
    
    function displayReviews(json, stars) {
        if (stars) {
            json = json.filter(function(review) {
                return review.stars === stars;
            });
        }
        
        let reviews = json.map(function(review) {
            let numofstars = '';
            for (let i = 0; i < review.stars; i++) {
                numofstars += '⭐';
            }
            return '<div class = "box">' + '<h2><u>' + review.review_title + '</u></h2>' + '<p>' + review.review_content + '<p></p>' + numofstars + '</p>' + '</div>';
        });

        document.getElementById('reviews').innerHTML = reviews.join('');
    }

    const URL = "data/reviews.json";

    fetch(URL)
        .then(
            function(response){
                return response.json();
            }
        )
        .then(
            function(json){
                console.log(json);
                reviews = json;
                displayReviews(reviews);
            }
        )
        .catch(
            function(error){
                console.log("Something went wrong!", error);
            }
        );

    console.log(URL);
});