<?php add_shortcode('dynamic-airport-parking-uk', function() {

    ob_start();
    ?>
    <p>
        <?php
        function airport_parking_uk_desc(){
            switch(rand(1,2)){
                case 1:
                    echo "is a website that acts as a price comparison to get you the best deals";
                    break;
                case 2:
                    echo "is the new one stop shop for all your airport parking needs in the UK";
                    break;
            }
        }
        switch(rand(1,3)){
            case 1: 
            echo "<strong>Airport Parking UK</strong> ";
            airport_parking_uk_desc();
            echo " for all the major parking operators, for all major airports in the UK.";
                 break;
            case 2:
                echo "For all the major parking operators, for all major airports, <strong>UK Airport Parking UK</strong> ";
                airport_parking_uk_desc();
                break;
            case 3:
                echo "For all major airports, for all the major parking operators, <strong>UK Airport Parking UK</strong> ";
                airport_parking_uk_desc();
                break;
            case 4:
                break;
        } ?>
    
    You can click the banner at the top of every page to go straight there or click here for our <a href="http://www.airportparking-uk.co.uk/book-now/">airport parking price comparison tool</a>.
    
    Our website can help you find the best <strong>Meet and Greet</strong> parking at all major UK airports. With the click of a button and you will be able to see price comparison side by side saving you time and money searching through multiple websites to get a quote.</p><p>
    <?php
    switch(rand(1,3)){
        case 1:
            echo "<strong>Meet &amp; Greet</strong> airport parking (<em>sometimes referred to as Chauffeur or Valet Parking</em>) has grown in popularity with families, business travellers and anyone wanting to avoid the stress of finding an offsite car park or waiting in the rain for a shuttle bus. Living in the UK we all know this all too well! So why let a wait in the rain spoil your holiday before it has already begun?";
            break;
        case 2:
            echo "Sometimes referred to as Chauffer or Valet parking, <strong> Meet &amp; Greet</strong> is popular with anyone wanting to avoid the stress of finding an offsite car park. Favoured by families and business travellers alike who want to avoid a wait in the rain for a shuttle bus that could spoil a holiday or trip before it has even begun!";
            break;
        case 3:
            echo "Do you want to avoid the stress of finding an off site car park or completely bypass a wait in the rain for a shuttle bus? <strong>Meet &amp; Greet</strong> airport parking (<em>sometimes referred to as Chauffeur or Valet Parking</em>) is growing in popularity with families and business travellers alike who are choosing to travel from any of the UK's major airports. ";
            break;
    } ?>

</p>

<p>On your return, you will be met by a chauffeur at the terminal again saving time and helping you get to your final destination in super quick time. We all know after your trip you will be exhausted and just wanting to get home as soon as possible.</p>

<p><strong>Trusted <a href="http://airportparking-uk.co.uk/airport-parking/">Parking</a></strong> Our affiliated companies will find you the most competitive quote amongst reliable, trusted and approved parking operators who will take care of your vehicle whilst you are away.</p>

<p><strong>Trusted <a href="http://airportparking-uk.co.uk/airport-meet-and-greet/">Meet &amp; Greet</a></strong> – your chauffeur will meet you at the airport, drive your car to our car park, and drop it back when you return – no matter what the time. You can rest assured in the knowledge that we are an Approved Meet &amp; Greet operator.</p>
<h2><em><strong>Why use us?</strong></em></h2>
<p>Returning back from your holiday can be stressful without the need of finding out your car has been lost by an unapproved parking operator. Even worst your car is then returned only to find out it has done lots of miles and has been damaged. You don’t need the stress and expense, so why choose another operator? We provide quotes and the ability to book through established and official Gatwick Parking Operators.</p>
    
    <?php
    return ob_get_clean();
});