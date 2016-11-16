<?php add_shortcode('dynamic-airport-parking', function() {

    ob_start();
    ?>
<!--  paragraph 1
<p><strong>Are you looking for secure parking or parking at all major airports in the UK?</strong> Then look no further, we provide a <strong>secure</strong> way of comparing and booking airport parking for both business and leisure travellers from only approved parking operators.</p>  -->
<p>
<?php
echo "<strong>";
    switch(rand(1,2)){
         case 1: 
         echo "Are you looking for secure parking or parking at all major airports in the UK?";
              break;
         case 2:
             echo "Do you want to save time on finding secure parking spaces near major British airports?";
             break;
     }
echo " </strong> ";
    switch(rand(1,4)){
         case 1: 
         echo "Then look no further,";
              break;
         case 2:
             echo "Then don't hesitate,";
             break;
         case 3:
             echo "Come check our premium services,";
             break;
         case 4:
             echo "To make it easier for you,";
             break;
     }
echo " we provide a <strong>secure</strong> way ";
switch(rand(1,3)){
         case 1: 
         echo "of comparing and booking airport parking for both business and leisure travellers from only approved parking operators.";
              break;
         case 2:
             echo "for both business and leisure travellers of comparing and booking airport parking from only approved parking operators.";
             break;
         case 3:
             echo "from only approved parking operators of comparing and booking airport parking for both business and leisure travellers.";
             break;
     }
?>
</p>
<!--  paragraph 2
<p>Returning back from your holiday can be stressful enough without finding out your car has been lost by an unapproved parking operator. Even worse your car is then returned only to find out it has done lots of miles and has been damaged. You don’t need the stress and expense, so why choose another operator? We provide quotes and booking services through established and official <strong><em>Airport Parking</em></strong> operators.</p>  -->
<p>
<?php

function ap_s_1(){
 echo "Returning back from your holiday can be stressful enough without finding out your car has been lost ";
    switch(rand(1,2)){
         case 1: 
         echo "by an unapproved parking operator";
              break;
         case 2:
             echo "from the wasteland of an irresponsible parking company";
             break;
     }
echo " who fail to take care of your vehicle. Even worse your car is then returned only to find out it has done lots of miles and has been damaged. ";
     echo "You don’t ";
    switch(rand(1,3)){
         case 1: 
         echo "need the stress and expense";
              break;
         case 2:
             echo "desearve this stressful losing";
             break;
         case 3:
             echo "have to deal with all of these";
             break;
     }
echo ", so why choose another operator? ";
}
function ap_s_2(){
 return "We provide quotes and booking services through established and official <strong><em>Airport Parking</em></strong> operators. ";
}
  
?>
</p>
<!--  paragraph 3
<p>Simply enter a few brief details on the the front page form and simply receive a quote for your dates. If it looks good, simply proceed to booking and you will be redirected to the parking operator of your choice to proceed with your payment securely. Thousands of people all over the country have already taken advantage of discount airport parking.</p>  -->
<p>
<?php
function ap_s_3(){

echo "Simply enter a few brief details on the the front page form ";
    switch(rand(1,2)){
         case 1: 
         echo "and simply receive a quote for your dates.";
              break;
         case 2:
             echo "and get a quote for your dates immediately.";
             break;
     }
echo " If it looks good, ";
    switch(rand(1,2)){
         case 1: 
         echo "simply proceed";
              break;
         case 2:
             echo "go ahead";
             break;
     }
echo " to booking and you will be ";
    switch(rand(1,2)){
         case 1: 
         echo "redirected to the parking operator of your choice to";
              break;
         case 2:
             echo "taken to the booking page where your chosen parking operator will";
             break;
     }
echo " proceed with your payment securely. ";
}
function ap_s_4(){

         switch(rand(1,3)){
         case 1: 
         echo "Thousands of people all over the country";
              break;
         case 2:
             echo "A growing ammount of people in the UK";
             break;
         case 3:
             echo "More people all over the UK";
             break;
     }
echo " have already ";
switch(rand(1,2)){
         case 1: 
         echo "taken advantage of discount airport parking.";
              break;
         case 2:
             echo "enjoyed our premium airport parking services with a good discount.";
             break;
     }

}

?>
</p>
<!--  paragraph 4
<p>There are a variety of airport parking options, from the ultra convenient Meet &amp; Greet service, on airport parking for rapid transfer, and off airport parking for security and competitive prices. If you book a Meet &amp; Greet service you will be met at the terminal on your departure by a chauffeur who will take your car to an off-site secure compound to be parked for the duration of your stay. It will then be delivered back to you at the terminal upon your return making it a convenient parking option.</p>  -->
<p>
<?php
function ap_s_5(){
     echo "There are a variety of airport parking options, from the ultra convenient Meet &amp; Greet service, on airport parking for rapid transfer, and off airport parking for security and competitive prices. ";
}
function ap_s_6(){
    switch(rand(1,2)){
         case 1: 
         echo "If you book a Meet &amp; Greet service you will be met at the terminal on your departure by a chauffeur";
              break;
         case 2:
             echo "With our Meet &amp; Greet service all you need to do is stop your car at the terminal on your departure and leave it to a chauffeur";
             break;
     }
echo " who will ";
    switch(rand(1,2)){
         case 1: 
         echo "take your car to an off-site secure compound to be parked ";
              break;
         case 2:
             echo "go park your car at an off-site secure place and keep it safe ";
             break;
     }
    switch(rand(1,2)){
         case 1: 
         echo "for the duration of your stay.";
              break;
         case 2:
             echo "when you are away.";
             break;
     }
echo " It will then be delivered back to you at the terminal upon your return making it a convenient parking option.";
}
?>
</p>

<p>So why not book directly and avoid the disappointment of having your car damaged, simply book through us and get a trusted operator to safely and securely park your car today. <a href="http://www.airportparking-uk.co.uk/book-now/">Check and book quickly</a> to avoid missing out on our cheapest airport parking offers.</p>


 
    <?php
    $sentence_array = array('1','2','3','4', '5', '6');
shuffle($sentence_array);
$i = 0;
foreach($sentence_array as $a){
     if($i = 2){
          echo "</p><p>";
     }
     $line = '$output = ap_s_' .$a . '();';
     eval($line);
     echo $output;
     $i++;
}
    return ob_get_clean();
});


