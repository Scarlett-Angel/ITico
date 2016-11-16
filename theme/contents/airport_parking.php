<?php

/*
 * Copyright (C) Itico Ltd. - All Rights Reserved
 * Unauthorised copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Stephen Mclaughlin <admin@scarlett-angel.co.uk>
 */
add_shortcode('dynamic-airport-page', function() {
    $airport_string = isset($_GET['location']) ? $_GET['location'] : '';
    $airport = urldecode($airport_string);

    function apuk_s_1($airport) {
        switch (rand(1, 4)) {
            case 1:
                echo "There are so many on-the-go airport parking close to $airport airport but not all of them can provide high quality services as we do, to give you peace of mind during your holiday. ";
                break;
            case 2:
                echo "Close to $airport airport there are so many on-the-go airport parking operators but not all of them can provide high quality services as we do, to let you feel at ease while you are on holiday. ";
                break;
            case 3:
                echo "Not many parking operators can provide high quality on-the-go airport parking service close to $airport airport, to ensure you have a relaxing holiday. ";
                break;
            case 4:
                echo " To make sure everything if stress free during your holiday we ensure we can provide high quality on-the-go airport parking close to $airport airport, which is not so many parking operators can do. ";
                break;
        }
    }

    function apuk_s_2($airport) {
        switch (rand(1, 2)) {
            case 1:
                echo "Recently Dailymail reported over 1,000 cars were found unattended in a muddy wasteland near Gatwick airport in London while the companies who offered that service promised to take care of their vehicles. ";
                break;
            case 2:
                echo "1,000 cars were found unattended in a muddy wasteland near Gatwick airport in London, reported the Dailymail, all the while the companies who had offered this service had promised to take care of the vehicles. ";
                break;
            case 3:
                echo "In a muddy wasteland near Gatwick airport in London, the Dailymail reported that over 1,000 cars were found unattended even though the company which had offered that service had promised to take care of the vehicles. ";
                break;
            case 4:
                echo "Although the other companies who had promised to take care of their clients vehicles, the Dailymail reported finding over 1,000 cars in a muddy wasteland near Gatwick airport in London. ";
                break;
        }
    }

    function apuk_s_3($airport) {
        switch (rand(1, 4)) {
            case 1:
                echo "So why not book directly and avoid the worries of knowing your car is uncared-for, simply book through us and get a trusted operator to safely and securely park your car near the $airport airport on the day out. ";
                break;
            case 2:
                echo "We strongly recommend you to book now through this website so you can save your worries on your car by having a trusted operator near $airport airport taking care of it while you are away for holiday. ";
                break;
            case 3:
                echo "You can simply book your airport parking via this website and save your worries on the journey by handing over your car to our trusted operator near the $airport airport who will keep your car safe and secure while you are away. ";
                break;
            case 4:
                echo "Our experienced and trusted operator near $airport airport provide premium meet and greet services and take care of your vehicles while you are away. Book now to guarentee your parking space close to $airport airport and save your worries during holiday. ";
                break;
        }
    }

    function apuk_s_4($airport) {
        switch (rand(1, 3)) {
            case 1:
                echo "Using our website will allow you to simply go through the booking process and help you plan other things beforehand (hotel locations etc). ";
                break;
            case 2:
                echo "Our online booking system is easy to use and you can make your booking within 5 mins. Booking your parking space can also help you plan your driving route on the day out. ";
                break;
            case 3:
                echo "You can make your booking with us through our simple booking system within 5 mins. Don't hesitate! You can plan your driving route now on the day out once you have done this. ";
                break;
        }
    }

    function apuk_s_5($airport) {
        switch (rand(1, 3)) {
            case 1:
                echo "All airport parking on our list of trusted operators are able to be booked online . ";
                break;
            case 2:
                echo "There is a list of our trusted operators with satisfying meet and greet services. You can book any of them via our website. ";
                break;
            case 3:
                echo " Our listed trustworthy operators can all be booked online through this website.'";
                break;
        }
    }

    function apuk_s_6($airport) {
        switch (rand(1, 3)) {
            case 1:
                echo "We guarantee you with secure, careful airport parking; all served with our ethos of customer satisfaction that we afford to all of our meet and greet services. ";
                break;
            case 2:
                echo "What we offer you is guaranteed secure airport parking; we afford all of our meet and greet services with our ethos of customer satisfaction and ensure you have a good experience with us. ";
                break;
            case 3:
                echo "Our secure, careful airport parking is served with our ethos of customer satisfaction; we guarentee you with our premium services for having a good experience with us. ";
                break;
        }
    }

    function apuk_s_7($airport) {

        switch (rand(1, 4)) {
            case 1:
                echo "The staff will provide premium services will treat you like family and take care your vehicles as family belongings. ";
                break;
            case 2:
                echo "Providing a pemium service, the staff will treat you like family and take care of your vehicle. ";
                break;
            case 3:
                echo 'Treating you like family and taking care of your belongings is the premium service you can expect from the staff. ';
                break;
            case 4:
                echo"Taking care of your belongings and treating you like family is the premium service you can expect from the staff. ";
                break;
        }
    }

    function apuk_s_8($airport) {
        switch (rand(1, 4)) {
            case 1:
                echo "We ensure your vehicles' safety by providing 24/7 all year round secure services and only collaborating with trusted parking operators.";
                break;
            case 2:
                echo "By providing 24/7 all year round secure services and only collaborating with trusted parking operator to ensure your vehicles safety. Our online booking system is also secured with the latest security measures. ";
                break;
            case 3:
                echo "By only collaborating with trusted parking operators we ensure your vehicles safetry all year round with 24/7 secure services. Our online booking system is also secured with the latest security measures. ";
                break;
            case 4:
                echo "All year round 24/7 secure services in collaboration with trusted parking operators, we ensure your vehicles safety. Our online booking system is also secured with the latest security measures.";
                break;
        }
    }

    function apuk_s_9($airport) {
        switch (rand(1, 3)) {
            case 1:
                echo "If you are looking for a low cost airport parking solution or meet and greet services near $airport airport to also make sure you get your vehicles parked safely then why not visit our site and start booking now. We won't let you down with our premium services. ";
                break;
            case 2:
                echo " To make sure you get your vehicle parked safely and for a low cost aiport parking solution or meet and greet services near $airport airport then start booking now. We wont' let you down with our premium services. ";
                break;
            case 3:
                echo "Start booking now to ensure you get your vehicle parked safely with a low cost airport parking solution or meet and greet services near $airport airport then start booking now. Out premium services won't let you down. ";
                break;
        }
    }

    function apuk_s_10($airport) {
        switch (rand(1, 2)) {
            case 1:
                echo "Don't fancy car park queues or transfer buses? Try Meet and Greet parking.  ";
                break;
            case 2:
                echo "Meet and Greet parking is for those who don't fancy car park queues or transfer buses. ";
                break;
        }
        switch (rand(1, 2)) {
            case 1:
                echo "Drive to the terminal, meet your driver and your car will be parked for you, on your return your car will be dropped back to the terminal. ";
                break;
            case 2:
                echo "Drive your car to the terminal, meet your driver and it will be parked for you, on your return your car will be brought back to you at the terminal. ";
                break;
        }
        echo "Airport parking can be that easy. ";
    }

    function apuk_s_11($airport) {
        switch (rand(1, 2)) {
            case 1:
                echo "You'll feel like a VIP with this luxury service. ";
                break;
            case 2:
                echo "With this luxury service you'll feel like a VIP. ";
                break;
        }
        switch (rand(1, 2)) {
            case 1:
                echo "Drive straight to the terminal and have a chauffeur park your car for you. ";
                break;
            case 2:
                echo "Have a chauffeur park your car for you after you drove straight to the terminal. ";
                break;
        }
        switch (rand(1, 2)) {
            case 1:
                echo "Whether you have a plush convertible, family saloon, or an older model, the Meet and Greet chauffeur will be happy to whisk your car to a secured car park to make your transfer smoother. ";
                break;
            case 2:
                echo "To make your transfer smoother the Meet and Greet chauffeur will be happy to whisk your car to a secured car park whether you have a plush convertible, family saloon, or an older model. ";
                break;
        }
    }

    function apuk_s_12($airport) {
        switch (rand(1, 2)) {
            case 1:
                echo "We take the hassle out of comparing prices for Meet and Greet parking. ";
                break;
            case 2:
                echo "When comparing prices for Meet and Greet parking we take out the hassle. ";
                break;
        }

        switch (rand(1, 2)) {
            case 1:
                echo "We also guarantee to give you the lowest prices with our Price Check Promise, ";
                break;
            case 2:
                echo "With our Price Check Promise, we also guarantee to give you the lowest prices. ";
                break;
        }
    }

    function apuk_s_13($airport) {
        switch (rand(1, 2)) {
            case 1:
                echo "We compare Meet and Greet Parking services across the UK and all major airports including Heathrow, Gatwick, Manchester, Birmingham, Luton, Stansted, East Midlands, Leeds Bradford, Newcastle, Bristol and Edinburgh. ";
                break;
            case 2:
                echo "With services all across the UK in all major airport including Heathrow, Gatwick, Manchester, Birmingham, Luton, Stansted, East Midlands, Leeds Bradford, Newcastle, Bristol and Edinburgh we compare Meet and Greet Parking. ";
                break;
        }
    }

    $apuk_s_a = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12','13');
    shuffle($apuk_s_a);
    ob_start();

    /*
     * Page with airports list
     */
    $airports_array = array(
        'Aberdeen' => 'Aberdeen',
        'Belfast' => 'Belfast International',
        'Birmingham' => 'Birmingham',
        'Bournemouth' => 'Bournemouth',
        'Bristol' => 'Bristol',
        'Cardiff' => 'Cardiff',
        'Doncaster' => 'Doncaster-Sheffield (Robin Hood)',
        'Dublin' => 'Dublin',
        'Durham' => 'Durham Tees Valley',
        'Nottingham' => 'East Midlands',
        'Edinburgh' => 'Edinburgh',
        'Exeter' => 'Exeter',
        'Glasgow' => 'Glasgow International',
        'London' => 'Heathrow',
        'Grimsby' => 'Humberside',
        'Inverness' => 'Inverness',
        'Leeds' => 'Leeds Bradford',
        'Liverpool' => 'Liverpool',
        'London' => 'London Gatwick',
        'Luton' => 'Luton',
        'Manchester' => 'Manchester',
        'Newcastle' => 'Newcastle',
        'Norwich' => 'Norwich',
        'Shannon' => 'Shannon',
        'Southampton' => 'Southampton',
    );
    echo "<h2>";
    switch (rand(1, 10)) {
        case 1:
            echo "Secure Airport Parking for $airport Airport";
            break;
        case 2:
            echo " Secure $airport Airport Parking";
            break;
        case 3:
            echo "Secure, Safe Airport Parking for $airport Airport";
            break;
        case 4:
            echo "Safe, Secure $airport Airport Parking";
            break;
        case 5:
            echo "$airport Airport Car Parking At UK Airport";
            break;
        case 6:
            echo "Compare Airport Meet and Greet Rates for Secure $airport Parking";
            break;
        case 7:
            echo "$airport Parking - $airport Airport Parking";
            break;
        case 8:
            echo "$airport Airport Parking | Compare 24 $airport car park prices";
            break;
        case 9:
            echo "Secure Parking at $airport Airport- On Airport Parking $airport";
            break;
        case 10:
            echo "$airport Parking";
            break;
    }
    echo "</h2>";

    shuffle($apuk_s_a);
    if ($airport == '') {

        $apuk_s_a = array_chunk($apuk_s_a, 3);
        echo "<p>";
        foreach ($apuk_s_a[0] as $s) {
            $line = "apuk_s_$s(\$airport);";
            eval($line);
        }
        echo "</p>";

        $con_location_list = new controller_location_list;
        switch (rand(1, 2)) {
            case 1:
                $con_location_list->set_location_list(array_flip($airports_array));
                break;
            case 2:
                $con_location_list->set_location_list($airports_array);
        }
        $con_location_list->set_visbility(50);
        echo $con_location_list->view_location_list();
    } else {

        $apuk_s_a = array_chunk($apuk_s_a, 3);
        echo "<p>";
        foreach ($apuk_s_a[0] as $s) {
            $line = "apuk_s_$s(\$airport);";
            eval($line);
        }
        echo "</p><p ><div style='width:50%; float:left;'><h5 class='sidebar-h' style='margin:40px 40px 40px 0px;'>";
        foreach ($apuk_s_a[1] as $s) {
            $line = "apuk_s_$s(\$airport);";
            eval($line);
        }
        echo "</h5></div>";
        foreach ($apuk_s_a[2] as $s) {
            $line = "apuk_s_$s(\$airport);";
            eval($line);
        }

        echo "</p><p>";
        foreach ($apuk_s_a[3] as $s) {
            $line = "apuk_s_$s(\$aiport);";
            eval($line);
        }
        echo "</p>";
    }
    return ob_get_clean();
});
