<?php

add_shortcode('scarlett-angel-dynamic-widget', function() {
    include_once ('sa_3.php');
    include_once ('sa_2.php');
    include_once ('sa_1.php');
    include_once ('sa_0.php');
    ob_start();

	$airports = array(
    "Aberdeen",
    "Belfast City (George Best)",
    "Belfast International",
    "Birmingham",
    "Bournemouth",
    "Bristol",
    "Cardiff",
    "Doncaster-Sheffield (Robin Hood)",
    "Dublin",
    "Durham Tees Valley",
    "East Midlands",
    "Edinburgh",
    "Exeter",
    "Glasgow International",
    "Glasgow Prestwick",
    "Heathrow",
    "Humberside",
    "Inverness",
    "Leeds Bradford",
    "Liverpool",
    "London City",
    "London Gatwick",
    "Luton",
    "Manchester",
    "Newcastle",
    "Norwich",
    "Shannon",
    "Southampton",
    "Southend",
    "Stansted",
    "Dover",
    "Southampton",
    "London City Centre"
);

function scarlett_random_number($max) {
    $number = rand(1, $max);
    return $number;
}
	foreach ($airports as $airport) {
        echo "<a href='www.airportparking-uk.co.uk/airport-parking-uk/?airport=" . urlencode($airport) . "'>$airport Airport Parking</a><br />";
    }
				
    $airport = isset($_GET['airport']) ? $_GET['airport'] : '';
    $airport = urldecode($airport);
if($airport == ''){
        $airport='London Gatwick';
}
    echo "<h2>";
    switch (scarlett_random_number(4)) {
        case 1:
            echo word_Secure() . " Airport Parking for $airport Airport";
            break;
        case 2:
            echo word_Secure() . " $airport Airport Parking";
            break;
        case 3:
            echo "Secure, Safe Airport Parking for $airport Airport";
            break;
        case 4:
            echo "Safe, Secure $airport Airport Parking";
            break;
    }
    echo "</h2><p>";
    switch (scarlett_random_number(3)) {
        case 1:
            echo "Why choose Airport Parking UK for $aiport Airport? ";
            break;
        case 2:
            echo "There are " . word_many() . " reasons to choose Airport Parking UK. ";
            break;
        case 3:
            echo "There are " . word_many() . " airport parking website comparison websites and this is what makes us different. ";
            break;
    }
    switch (scarlett_random_number(3)) {
        case 1:
            echo "Booking the " . word_best() . " parking deal at $airport Airport is essential. We compare all legal, approved and official meet and greet parking deals and guarantee you the " . word_best() . " prices, all the time.";
            break;
        case 2:
            echo "A good reason is that picking the " . word_best() . " airport parking deal is essential. We are a Airport Parking Comparison company and will provide all legal, approved and official parking operators and we will strive to find you the cheapest price, 100% of the time";
            break;
        case 3:
            echo "We specialise in find you the cheapest airport parking for $airport Airport and only use legal, approved and official parking operators and we will find you the" . word_best . "price and great parking deals.";
            break;
    }
    echo "</p><h3>";
    switch (scarlett_random_number(4)) {
        case 1:
            echo "Meet and Greet Parking $airport Airport";
            break;
        case 2:
            echo "$airport Airport Meet and Greet Parking";
            break;
        case 3:
            echo word_Cheap() . " Meet and Greet Parking";
            break;
        case 4:
            echo "Meet and Greet Comparison";
            break;
    }
    echo "</h3><p>";
    switch (scarlett_random_number(4)) {
        case 1:
            echo "Meet and Greet for $airport Airport is the " . word_easy() . " way to park whilst away. Be met at the terminal from which you are flying then walk into the flight check-in zone. On return your car is delivered back to you enabling a hasty departure. No bus required.";
            break;

        case 2:
            echo "For the " . word_easy() . " way to park your car while you are away: Our Meet and Greet Service for $airport Airport. Imagine walking into the flight check-in zone immediatly after being met at the terminal. To enable a hasty departure your car is delivered back to you when you return. Never use the bus again.";
            break;
        case 3:
            echo "Imaging the process of parking and collectring your car being as " . word_easy() . " as possible. You will Meet and Greet at $airport Airport right before you check-in for your flight. When you return your car will be delivered back to you at $airport Airport.";
            break;
        case 4:
            echo "No more need for an uncomfortable bus. $airport Airport Meet and Greet parking will collect your car in the airport before you depart. When you return from your trip they will be waiting for you to deliver your car when you get off the plane.";
            break;
    }
    echo "<h3>";
    switch (scarlett_random_number(4)) {
        case 1:
            echo word_Secure() . " Airport Parking";
            break;
        case 2:
            echo word_Secure() . " Airport Parking";
            break;
        case 3:
            echo word_Secure() . " Aiport Parking";
            break;
        case 4:
            echo word_Secure() . " $airport Airport Parking";
            break;
    }
    echo "</h3><p>";
    switch (scarlett_random_number(4)) {
        case 1:
            echo "You can park your car at the airport or close to the airport depending on your budget. All airport car parks include transfers to the airport and then back to your car park.";
            break;
        case 2:
            echo word_Secure() . " parking can be either at $airport Aiport or close the the airport. All airport car parks include transfers to the airport and then back to your car park.";
            break;
        case 3:
            echo "You can park your car in the airport or near the airport depending on your budget.All airport car parks include transfers to the airport and then back to your car park.";
            break;
        case 4:
            echo "All airport car parks include transfers to the airport and then back to your car park. Although you can also find secure parking near the airport.";
            break;
    }
    echo "</p>";
    return ob_get_clean();
});

?>