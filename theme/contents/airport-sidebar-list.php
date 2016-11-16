<?php
add_shortcode('sidebar-list', function(){
    $list_pointers = array(0,1,2,3,4);
    shuffle($list_pointers);
    ob_start();
    echo '<ul>';
    foreach($list_pointers as $key){
        switch($key){
            case 0:
                side_list_0();
                break;
            case 1:
                side_list_1();
                break;
            case 2:
                side_list_2();
                break;
            case 3:
                side_list_3();
                break;
            case 4:
                side_list_4();
                break;
        }
    }
    echo "</ul>";
    return ob_get_clean();

});
function side_list_0(){
    echo '<li>';
    switch(rand(1,4)){
        case 1:
            echo "Inclusive of Airport Access Charge imposed by the Airport";
            break;
        case 2:
            echo "No need to pay the Airport Access Charge imposed by the Airport";
            break;
        case 3:
            echo "Airport Access Charge is included in the price";
            break;
        case 4:
            echo "Price is all inclusive, no hidden charges";
            break;
    }
    echo '</li>';
}
function side_list_1(){
    echo '<li>';
    switch(rand(1,3)){
        case 1:
            echo "Ease of access &amp; and convenience! ";
            switch(rand(1,2)){
                case 1:
                    echo "No shuttle buses and definately no waiting around.";
                    break;
                case 2:
                    echo "Definately no waiting around and no shuttle buses.";
                    break;
            }
            break;
        case 2:
            echo "No Shuttle buses! ";
            switch(rand(1,2)){
                case 1:
                    echo "Ease of access and definately no waiting around.";
                    break;
                case 2:
                    echo "Definately no waiting around and complete ease of access.";
                    break;
            }
            break;
        case 3:
            echo "No waiting around! ";
            switch(rand(1,2)){
                case 1:
                    echo "No shuttle buses and definately complete ease of access.";
                    break;
                case 2:
                    echo "Complete ease of access and definately no shuttle buses.";
                    break;
            }
            break;
    }
    echo '</li>';
}
function side_list_2(){
    echo '<li>';
    switch(rand(1,4)){
        case 1:
            echo "24/7 365 days a year service, no matter the weather";
            break;
        case 2:
            echo "No matter the weather, 24/7 365 days a year service";
            break;
        case 3:
            echo "All hours, every day of the year service; no matter the weather";
            break;
        case 4:
            echo "No matter the weather; all hours, every day of the year service";
            break;
    }
    echo '</li>';
}
function side_list_3(){
    echo '<li>';
    switch(rand(1,4)){
        case 1:
            echo "We only recommend trusted parking operators";
            break;
        case 2:
            echo "Airport Parking UK only recommend trusted parking operators";
            break;
        case 3:
            echo "Only trusted parking operators are recommended by us";
            break;
        case 4:
            echo "Only trusted parking operators are recommended by us";
            break;
    }
    echo '</li>';
}
function side_list_4(){
    echo '<li>';
    switch(rand(1,4)){
        case 1:
            echo "Secure online booking";
            break;
        case 2:
            echo "Online booking is secure";
            break;
        case 3:
            echo "Online booking is secured with the latest security measures";
            break;
        case 4:
            echo "Your payment information is protected with a secure connection";
            break;
    }
    echo '</li>';
}
