<?php

$town = isset($_GET['town']) ? $_GET['town'] : '';
$town = urldecode($town);
if ($town == '') {
    global $wpdb;
    $towns = $wpdb->get_col("SELECT Town from uk_towns where County='Glasgow City'");
    echo "<div align='center' >";
    echo "<p><img src='http://iconicbeautystudio.com/wp-content/uploads/2016/08/nail-salon-glasgow.png' width='80%'/></p></div>";

    echo "<p>";
    switch (rand(1, 3)) {
        case 1:
            echo "Iconic Beauty and Salon's Nail Salon in Glasgow is more than just a place to <strong>get your nails done</strong>. ";
            break;
        case 2:
            echo "Looking for a place that is more than just a place to <strong>get your nails done</strong>? Iconic Beauty and Salons Nail Salon in Glasgow is a popular new luxurious nail salon close to Glasgow Central. ";
            break;
        case 3:
            echo "Close to the center of Glasgow Iconic Beauty and Salon's Nail Salon in Glasgow is a luxurious place that is more than just a place to <strong>get your nails done</strong>. ";
            break;
        case 4:
            echo "Enjoy the luxurious surroundings at our Iconic Beauty Studio in close to Glasgow city center which is more than just a place to <strong>get your nails done.</strong>";
    }
    switch (rand(1, 5)) {
        case 1:
            echo "In order to make sure important things are done, 'If you don't do it today you probably won't do it at all.'";
            break;
        case 2:
            echo "'If you don't do it today you probably won't do it at all,' ";
            break;
        case 3:
            echo "It could never be easier to have your nails done at a convenient location in Glasgow. ";
            break;
        case 4:
            echo "With a convenient location in Glasgow it could never be easier to have your nails done. ";
            break;
        case 5:
            echo "Just pop into our studio near argyle street, it could never be easier to have your nails done. ";
    }
    echo "</p>";
?>
    <?php

    echo "<p>";
    switch (rand(1, 3)) {
        case 1:
            echo "When your hands have been enhanced by one of our beauty technicians there are literally <strong>unlimitted possibilities of the styles</strong> you can create. ";
            break;
        case 2:
            echo "There are <strong>countless possibilities of the styles</strong> you can create when your hands have been enhanced by one of our beauty technicians. ";
            break;
        case 3:
            "Our beauty technicians are there to help you enhance your hands with a limitless potential of styles. ";
            break;
    }
    echo "</p><p>";
    switch (rand(1, 4)) {
        case 1:
            echo "Providing a sevrice that embodies the Iconic Beauty and Salon ethos of high quality, stylish and perfect beauty treatments, we offer Manicures, Pedicures and a full range of other services including Eyelash extensions, Waxing, Threading, and Tinting. ";
            break;
        case 2:
            echo "Iconic Beauty and Studio provides the service that embodies our ethos of high quality, iconic and stylish beauty treatments, we offer Manicures, Pedicures and a full range of other services including Eyelash extensions, Waxing, Threading, and Tinting. ";
            break;
        case 3:
            echo "An ethos of high quality is what our Salon provides when we do our beauty treatments, we offer Manicures, Pedicures and a full range of other services including Eyelash extensions, Waxing, Threading, and Tinting. ";
            break;
        case 4:
            echo "We offer Manicures, Pedicures and a full range of other services including Eyelash extensions, Waxing, Threading, and Tinting; all served with our ehtos of high quality that we afford to all of our beauty treatments. ";
            break;
    }
    echo "</p>
				 <p class='linksers'>";

    foreach ($towns as $town) {
        switch (rand(1, 15)) {
            case 1:
                echo "<strong><a class='hvr-grow' href='?town=" . urlencode($town) . "'>$town</a></strong>";
                break;
        }
    }
    echo "</p>";
} else {


    echo "<h2>";
    echo "Nail Salon $town - ";
    switch (rand(1, 17)) {
        case 1:
            echo "Style It The Iconic Beauty Way";
            break;
        case 2:
            echo "Best Service In A Luxurious Environment";
            break;
        case 3:
            echo "Close To Central Railway Station";
            break;
        case 4:
            echo "Close To Argyle Street Railway Station";
            break;
        case 5:
            echo "Close To Queens Street Railway Station";
            break;
        case 6:
            echo "Value For Money, Iconic Beauty.";
            break;
        case 7:
            echo "Professional Service From Trained Staff";
            break;
        case 8:
            echo "Acrylic Nails In Glasgow";
            break;
        case 9:
            echo "Gel Nails In Glasgow";
            break;
        case 10:
            echo "Nail Extensions In Glasgow";
            break;
        case 11:
            echo "Manicure In Glasgow";
            break;
        case 12:
            echo "Spa Pedicure In Glasgow";
            break;
        case 13:
            echo "Acrylic Nails In $town";
            break;
        case 14:
            echo "Gel Nails In $town";
            break;
        case 15:
            echo "Nail Extensions In $town";
            break;
        case 16:
            echo "Manicure In $town";
            break;
        case 17:
            echo "Spa Pedicure In $town";
            break;
    }
    echo "</h2><p>";
    echo "<p>";

    function nsg_s_1() {
        switch (rand(1, 3)) {
            case 1:
                echo "Iconic Beauty and Salon's Nail Salon in Glasgow is more than just a place to <strong>get your nails done</strong>. ";
                break;
            case 2:
                echo "Looking for a place that is more than just a place to <strong>get your nails done</strong>? Iconic Beauty and Salons Nail Salon in Glasgow is a popular new luxurious nail salon close to Glasgow Central. ";
                break;
            case 3:
                echo "Close to the center of Glasgow Iconic Beauty and Salon's Nail Salon in Glasgow is a luxurious place that is more than just a place to <strong>get your nails done</strong>. ";
                break;
        }
        switch (rand(1, 3)) {
            case 1:
                echo "When you consider the overall benefit of trusting us with your hands AND your confidence a short journey from $town to <strong>Stockwell St, Glasgow G1 4RZ</strong> is nothing at all. ";
                break;
            case 2:
                echo "A short journey from $town to <strong>Stockwell St, Glasgow G1 4RZ</strong>, when you consider the overal benefit of trusting us with your hands AND your confidence, is nothing at all. ";
                break;
            case 3:
                echo "It will feel like nothing at all, when you consider the overal benefit of trusting us with your hands AND your confidence, taking a short journey from town to <strong>Stockwell St, Glasgow G1 4RZ</strong>. ";
                break;
        }
    }

    function nsg_s_2() {
        switch (rand(1, 5)) {
            case 1:
                echo "In our stylish make-up studio you can have all of the services you could find in any other place in $town except we have taken extra care and steps to ensure your visit to our salon will keep you refreshed. ";
                break;
            case 2:
                echo "In all of the other places you could find in $town, we provide all of the services that they do except in our stylish make-up studio we have taken extra care and steps to ensure that your visit to our salon will leave you refereshed. ";
                break;
            case 3:
                echo "You can have all the services that you could find in places in $town but you will also find more with us as we have taken extra care and steps to ensure you are refreshed after your visit to our make-up studio. ";
                break;
            case 4:
                echo "We have taken extra care to provide more than all the services you could find in other places in $town as in our stylish make-up studio will leave you refreshed after every visit. ";
                break;
            case 5:
                echo "We want to make sure you are refreshed after every visit so we have taken extra care to provide all the services you could in in other places in $town and more in our stylish make-up studio. ";
                break;
        }
        switch (rand(1, 4)) {
            case 1:
                echo "It might be the cool real fruit water we provide free for our customers, the vibrant atmostphere of everyone working and playing or even the sit down and a nice chat - away from the noisy street outside is why our clients keep coming back. ";
                break;
            case 2:
                echo "It might be the vibrant atmosphere of the studio, the fresh real fruit water we provide for our clients or even a nice sit down and a wee chat - away from the noisy street outside is why our clients keep coming back. ";
                break;
            case 3:
                echo "It might be a well deserved sit down and a friendly conversation after a long day of work or shopping, the vibrant and friendly staff or even the freshly prepared real fruit water we provide our customers is why they keep coming back. ";
                break;
            case 4: "We are not sure why our clientelle keep coming back; it maight be our friendly and vibrant staff, a well deserved sit down and a chat or even the real fruit water we freshly prepare for our customers. ";
                break;
        }
    }

    function nsg_s_3() {
        switch (rand(1, 3)) {
            case 1:
                echo "When you can be sure your hands have been enhanced by one of our beauty technicians there are literally unlimitted possibilities of the styles you can create. ";
                break;
            case 2:
                echo "There are countless variations of the styles you can create when your hands have been enhanced by one of our beauty technicians. ";
                break;
            case 3:
                "Our beauty technicians are there to help you enhance your hands with a limitless potential of styles. ";
                break;
        }
    }

    function nsg_s_4() {
        switch (rand(1, 2)) {
            case 1:
                echo "It could never be easier to have your nails done at a convenient location in Glasgow. ";
                break;
            case 2:
                echo "With a convenient location in Glasgow it could never be easier to have your nails done. ";
                break;
        }
    }

    function nsg_s_5() {
        switch (rand(1, 2)) {
            case 1:
                echo "We have a saying around here in order to make sure important things are done, 'If you don't do it today you probably won't do it at all.'";
                break;
            case 2:
                echo "'If you don't do it today you probably won't do it at all,' why procrastinate when you know what things are important? ";
                break;
        }
        switch (rand(1, 2)) {
            case 1:
                echo "Take a pop into our store its across from Argos near the St. Enoch Centre to talk with us or <a href='https://www.facebook.com/iconicbeautyandstudio/'>message us on our facebook page</a> and find out how we can attend to all of your beauty needs. ";
                break;
            case 2:
                echo "To find out how we can sort out all of your beauty needs take a pop into our store its across from Argos near the St. Enoch Centre to talk with us or <a href='https://www.facebook.com/iconicbeautyandstudio/'>message us on our facebook page</a>. ";
                break;
        }
    }

    function nsg_s_6() {
        switch (rand(1, 3)) {
            case 1:
                echo "Using our website will allow you explore and learn about our ethos and philosophy when it comes to beauty. ";
                break;
            case 2:
                echo "To learn more about our ethos and philosophy about beauty you can explore our website further. ";
                break;
            case 3:
                echo "When it comes to all things beauty, you lean explore our website further to learn more about our ethos and philosophy. ";
                break;
        }
    }

    function nsg_s_7() {
        switch (rand(1, 3)) {
            case 1:
                echo "People from all walks of life come into our store and we've been there with them with the good times on special occasions and the bad times fixing a dreaded chipped nail. ";
                break;
            case 2:
                echo "We've been there through the good times preparing for special occasions and the bad times repairing a chipped nail with the customers who come to our store. ";
                break;
            case 3:
                echo "Whether its an emmergency appointment to fix a chipped nail or good times preparing for a special ocassion  we've been through it all with the people who pass through our store. ";
                break;
        }
    }

    function nsg_s_8() {
        switch (rand(1, 3)) {
            case 1:
                echo "Our technicians are true experts in nail enhancements and will often do any design you ask for, their creative input is definitely a bonus too. ";
                break;
            case 2:
                echo "Our technicians will often do any design you ask for and are true experts, don't miss out on their creative input also. ";
                break;
            case 3:
                echo "Don't miss out on the creative input of our technicians, although they will often do any design you ask for with true expertise. ";
                break;
        }
    }

    function nsg_s_9() {
        switch (rand(1, 4)) {
            case 1:
                echo "Our friendly, licensed professionals provide a wide selection of nail enhancements
in a carefully maintained hygenic environment. ";
                break;
            case 2:
                echo "Our licensed professionals are friendly and provide a wide selection of nail enhancements in a carefull mantained hygenic environment. ";
                break;
            case 3:
                echo "Providing a wide selection of nail enhancement our friendly licensed professionals maintain a carefully hygenic environment. ";
                break;
            case 4:
                echo "In a carefully maintained hygenic environment our friendly nail staff are licensed professionals and provide a wide selection of nail enhancements. ";
                break;
        }
    }

    function nsg_s_10() {
        //Ever wanted to achieve that model and celebrity look? Is a special occasion coming up and want to feel your best? A wedding? A party? Maybe you want an extra special style or would just like to sit back and be pampered?
//The Nail & Beauty Salon is the place for you.
        switch (rand(1, 3)) {
            case 1:
                echo "Ever wanted to acheive that model and celebrity look? ";
                break;
            case 2:
                echo "Everyone wants to aceheive that model and celebrity look. ";
                break;
            case 3:
                echo "Do you need to acheive that model and celebrity look? ";
                break;
        }
        switch (rand(1, 3)) {
            case 1:
                echo "Is a special occasion coming up and you want to feel your best? A wedding? a party? ";
                break;
            case 2:
                echo "Weddings, parties, there are many kinds of special occasions that you will want to feel your best. ";
                break;
            case 3:
                echo "Do you want to feel your best for an up an coming wedding, party or any other kind of special occasion? ";
                break;
        }
        switch (rand(1, 2)) {
            case 1:
                echo "Maybe you just want a bit of our iconic style and to sit back and feel pampered? ";
                break;
            case 2:
                echo "Maybe you just want to site back and feel pampered a get a bit of our iconic style? ";
                break;
        }
        echo "Iconic Beauty and Studio is the place for you. ";
    }

    function nsg_s_11() {
        switch (rand(1, 2)) {
            case 1:
                echo "If you live or work in the Glasgow area (or are just visiting for some shopping), why not drop in to the Iconic Beauty and Salon for a manicure or pedicure. ";
                break;
            case 2:
                echo "Why not drop in to the Iconic Beauty and Salon for a manicure or pedicure, if you live or work in the Glasgow area. ";
                break;
        }
    }

    function nsg_s_12() {
        switch (rand(1, 4)) {
            case 1:
                echo "Treat your nails to a lick of Chat Me Up Nail Paint. Polish and preen your nails with our range of superb colours! ";
                break;
            case 2:
                echo "Get chatted up after you treat your nails. Polish and preen your nails with a range of superb colours! ";
                break;
            case 3:
                echo "Polish and preen your nails with a range of superb colours that will garauntee you get chatted up! ";
                break;
            case 4:
                echo "With a superb range of colours to polish and preen your nails, it's a treat that will get you chatted up! ";
                break;
        }
    }

    function nsg_s_13() {
        //Sometimes, it’s the little treats in life that can lift our spirits and make us feel like ourselves again. For some gals (and guys!), it might be getting a foot massage or buying yourself a new lipstick that is the ultimate small indulgence. But for me, sitting down with a friendly face and getting myself a magical manicure is a surefire way for me to feel pampered! 
        switch (rand(1, 3)) {
            case 1:
                echo "Sometimes, it’s the little treats in life that can lift our spirits and make us feel like ourselves again. ";
                break;
            case 2:
                echo "Sometimes, in order to feel like ourselves again it's the little treats in life that can lift our spirits. ";
                break;
            case 3:
                echo "Sometimes, in order to lift our spirits and make us feel like ourselves again, we take the little treats that life has to offer us. ";
                break;
        }
        switch (rand(1, 3)) {
            case 1:
                echo "For some girls (and guys!), it might be getting a massage or having your feet carefully pedicured that is the ultimate small indulgence. ";
                break;
            case 2:
                echo "It might be getting a massage or having your feet carefully pedicured, for some girls (and guys!), that is the ultimate small indulgence. ";
                break;
            case 3: "The ultimate small indulgence, for most girls (and guys!), might be getting a massage or having your feet carefully pedicured. ";
                break;
        }
        switch (rand(1, 3)) {
            case 1:
                echo "It surely is sitting down with a friendly face and getting a magical manicure that is a surefire way to feel pampered! ";
                break;
            case 2:
                echo "It is surely getting a magical manicure and sitting down with a friendly face that is a surefire way to feel pampered! ";
                break;
            case 3:
                echo "A surefire way to feel pampered is to site down with a friendly face and get a magical manicure! ";
                break;
        }
    }

    function nsg_s_14() {
        switch (rand(1, 4)) {
            case 1:
                echo "Our Salon manicure tables are all fitted with the latest facilities to enable ourselves to give you the finest nail manicure and to make your stay as comfortable as possible. ";
                break;
            case 2:
                echo "Fitted with the latest facilities, our salon manicure tables enable us to give you the finest nail manicure and to make your stay as comfortable as possible. ";
                break;
            case 3:
                echo "To enable us to give you the finest nail manicure our salon tables are all fitted with the latest facilities to enable ourselves to give you the finest nail manicure and to make your stay as comfortable as possible. ";
                break;
            case 4:
                echo "To make your stay as comfortable as possible, our salon tables are fitted with the latest facilities to enable us to give you the finest manicure. ";
                break;
        }
    }

    function nsg_s_15() {
        //There are so many on-the-go nail bars in the city. A quick dash to the salon for a speedy manicure seems to fit the busy London lifestyle. London Grace turns the traditional in-and-out concept on its head. The salon urges London mums to unwind in a place where they can while away the afternoon, eat, drink, be pampered, and relax, knowing that their little ones are being taken care of.
        switch (rand(1, 2)) {
            case 1:
                echo "There are so many on-the-go nail bars in $town and even more in Glasgow city. ";
                break;
            case 2:
                echo "In $town and even in Glasgow city there are so many on-the-go nail bars. ";
                break;
        }
        switch (rand(1, 3)) {
            case 1:
                echo "A quick dash to the salon for a speedy manicure seems to fit the busy Glasgow lifestyle. ";
                break;
            case 2:
                echo "For a speedy manicure a quick trip to the salon seems to fit the busy Glasgow lifestyle. ";
                break;
            case 3:
                echo "Fitting of the busy Glasgow lifestyle you might go for a speedy manicure with a quick trip to the salon. ";
                break;
        }
        switch (rand(1, 2)) {
            case 1:
                echo "Iconic Beauty and Salon turns the traditional in-and-out concept on its head. ";
                break;
            case 2:
                echo "Turning this concept on its head is what we have aimed to do. ";
                break;
        }
        switch (rand(1, 2)) {
            case 1:
                echo "Our salon urges you to unwind in a place where they can while away the afternoon in a luxurious enviroment. ";
                break;
            case 2:
                echo "Unwind, we urge you, in a place where you can while away the afternoon in a luxurious environment. ";
                break;
        }
    }

    function nsg_s_16() {

        //Providing a service that embodies the Nailberry ethos of high quality, stylish and perfect beauty treatments, we offer Manicures, Pedicures and a full range of other services including Eyelash extensions, Waxing, Threading, and Tinting.
        switch (rand(1, 4)) {
            case 1:
                echo "Providing a service that embodies the Iconic Beauty and Salon ethos of high quality, stylish and perfect beauty treatments, we offer Manicures, Pedicures and a full range of other services including Eyelash extensions, Waxing, Threading, and Tinting. ";
                break;
            case 2:
                echo "Iconic Beauty and Studio provides the service that embodies our ethos of high quality, iconic and stylish beauty treatments, we offer Manicures, Pedicures and a full range of other services including Eyelash extensions, Waxing, Threading, and Tinting. ";
                break;
            case 3:
                echo "An ethos of high quality is what our Salon provides when we do our beauty treatments, we offer Manicures, Pedicures and a full range of other services including Eyelash extensions, Waxing, Threading, and Tinting. ";
                break;
            case 4:
                echo "We offer Manicures, Pedicures and a full range of other services including Eyelash extensions, Waxing, Threading, and Tinting; all served with our ehtos of high quality that we afford to all of our beauty treatments. ";
                break;
        }
    }

    $nsg_s_a = array('1',
        '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16');
    shuffle($nsg_s_a);
    $nsg_s_a = array_chunk($nsg_s_a, 3);
    echo "<p>";
    foreach ($nsg_s_a[0] as $s) {
        $line = "nsg_s_$s();";
        eval($line);
    }
    echo "</p><p ><div style='width:50%; float:left;'><h5 class='sidebar-h' style='margin:40px 40px 40px 0px;'>";
    foreach ($nsg_s_a[1] as $s) {
        $line = "nsg_s_$s();";
        eval($line);
    }
    echo "</h5></div>";
    foreach ($nsg_s_a[2] as $s) {
        $line = "nsg_s_$s();";
        eval($line);
    }

    echo "</p><p>";
    foreach ($nsg_s_a[3] as $s) {
        $line = "nsg_s_$s();";
        eval($line);
    }
    echo "</p>";
    echo "<div align='center'>";
    echo "<p><img src='http://iconicbeautystudio.com/wp-content/uploads/2016/08/nail-salon-glasgow.png' width='80%'/></p></div>";
}
echo "";
echo "<style>
        .linksers {
            text-align:center;
        }
        .hvr-grow {
  
            padding: 20px;
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -moz-osx-font-smoothing: grayscale;
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-property: transform;
            transition-property: transform;
      }
      .hvr-grow:hover, .hvr-grow:focus, .hvr-grow:active {
            -webkit-transform: scale(2.5);
            transform: scale(1.5);
            z-index:999;
      }
    </style>";
    ?>