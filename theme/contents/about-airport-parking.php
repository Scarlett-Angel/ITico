<?php add_shortcode('dynamic-about-airport-parking', function() {

    ob_start();
    ?><p>
    <?php
    switch(rand(1,2)){
        case 1:
            echo "You have booked your holiday, the hotel is arrange and the flights are set. You're good to go now right? Actually, getting to the airport is the first step of your journey to bliss and relaxation. To ensure that you have a space reserved in the airport you should <a href=\"http://www.airportparking-uk.co.uk/book-now/\">book your airport parking</a> well in advance. Not only will you benefit from peace of mind but you'll have some extra spending money for your holiday when you can save up 60% on the parking cost.";
            break;
        case 2:
            echo "To make sure that your trip to the airport is hassle free you should <a href=\"http://www.airportparking-uk.co.uk/book-now/\">reserve airport parking</a> well in advance in order to save money and give yourself some extra spending money for your well deserved trip. Don't be so naive to beleive that just because you have booked your holiday, the hotel was arrange and the flights are set that you are good to go off on your grand adventure. The airport is the first step of your journey and any delays could bring the whole thing crashing down!";
            break;
    } ?></p>
<h2><strong>Are you looking for secure Airport Parking for any airport in the UK?</strong></h2>
<img class="wp-image-106 size-medium alignright" src="http://www.airportparking-uk.co.uk/wp-content/uploads/2016/03/airport-parking-uk-300x195.jpg" alt="airport parking" width="300" height="195" />

<p>Then look no further, we provide a secure way of comparing and booking airport parking from only approved parking operators. Airport Parking UK has a wide portfolio of parking operators to suit our customers for over 30 airports all over the United Kingdom. We have provide acess to only the best quality airport parking companys and can get you deals at low prices.</p>

<p>Returning back from your holiday can be stressful without the need of finding out your car has been lost by an unapproved parking operator. Even worst your car is then returned only to find out it has done lots of miles and has been damaged. You don’t need the stress and expense, so why choose another operator? We provide quotes and the ability to book through established and official <strong>Airport Parking</strong><em> Operators.</em></p>

<h2>How to use Airport Parking UK</h2>
<p>
<?php
switch (rand(1,3)){
    case 1:
        echo "We want to ensure that you get the best price available to you for airport parking so we urge you to book sooner rather than later so ensure you get access to the best money saving offers. Have you already booked your flight? Then with our quick and easy search you will have your parking booked and confirmed within minutes.";
        break;
    case 2:
        echo "Have you already booked your flight or holiday? We want to make sure that the best price available to you is the one that you will get. We urge you to book sooner rather than later to access these best money saving offers. All you need to do is use our quick are easy search and you will have your parking booked and confirmed immediatly. ";
    case 3:
        echo "ALl you need to do is use our quick and easy search on our booking page and you can having your parking waiting for you within moments. Even if you have already booked your flight or holiday we want to make sure that you book your parking sooner rather than later in order to access the best money saving deals. ";
        break;
}?>
</p>

<p><em>Simply click the big link at the bottom of the page to open up a popup window and simply receive a quote for your dates. If it looks good, simply proceed to booking and you will be redirected to the parking operator of your choice to proceed with your payment securely.</em></p>

<p><em>So why book directly and avoid the disappointment of having your car damaged, simply book through us and get a trusted operator to safely and securely park your car today.</em></p>

&nbsp;
<?
    return ob_get_clean();
});