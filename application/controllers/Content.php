<?php

class content extends CI_Controller
{


    

    function index()
    {   

        
        function getCalculator($name) {

                    $data = array('name' => $name, );

                    $data_string = json_encode($data);

                    $curl = curl_init('https://namecalculator.cosmicupdates.com/api/check');

                    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");

                    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($data_string))
                    );

                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);  // Make it so the data coming back is put into a string

                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);  // Insert the data

                    // Send the request
                    $result = curl_exec($curl);

                    // Free up the resources $curl is using
                    curl_close($curl);

                    $response = json_decode($result, true);

                    return $response;

            }
       
        $name_first = $this->input->get('name_first');

        $name_second = $this->input->get('name_second');

        $this->load->model("generatedb"); 
  
        /** Part 2 Calculation */
 
        //Generate Chapter 2 Content 

        $month_first=$this->input->get('month_first');

		$day_first=$this->input->get('day_first');

		$year_first=$this->input->get('year_first'); 

        $first_birthday = $month_first."/".$day_first."/".$year_first;

		$reading_first = $this->generatedb->get_reading($month_first,$day_first,$year_first);
 
        $month_second=$this->input->get('month_second');

		$day_second=$this->input->get('day_second');

		$year_second=$this->input->get('year_second');

        $second_birthday = $month_second."/".$day_second."/".$year_second;

        $reading_second = $this->generatedb->get_reading($month_second,$day_second,$year_second);
  
        $first_sun = $reading_first[0]->SunS; 
        $first_merc = $reading_first[0]->MercS; 
        $first_ven = $reading_first[0]->VenS; 
        $first_mars = $reading_first[0]->MarsS; 
        $first_sat = $reading_first[0]->SatS; 
        $first_jupiter = $reading_first[0]->JupS; 

        $second_sun = $reading_second[0]->SunS; 
        $second_merc = $reading_second[0]->MercS; 
        $second_ven = $reading_second[0]->VenS; 
        $second_mars = $reading_second[0]->MarsS; 
        $second_sat = $reading_second[0]->SatS; 
        $second_jupiter = $reading_second[0]->JupS; 

        //$sun_second = $reading_second[0]->SunS;

        //PERSONALITY

        $personality_sun_sun = $this->calculate_keys($first_sun, $second_sun, 'personality', 'sun-sun');

        $personality_sun_mercury = $this->calculate_keys($first_sun, $second_merc, 'personality', 'sun-mercury');
        
        $personality_mercury_sun = $this->calculate_keys($first_merc, $second_sun, 'personality', 'mercury-sun');

        $personality_sun_venus = $this->calculate_keys($first_sun, $second_ven, 'personality', 'sun-venus');

        $personality_venus_sun = $this->calculate_keys($first_ven, $second_sun, 'personality', 'venus-sun');

        $personality_sun_mars = $this->calculate_keys($first_sun, $second_mars, 'personality', 'sun-mars');

        $personality_mars_sun = $this->calculate_keys($first_mars, $second_sun, 'personality', 'mars-sun');

        $personality_sun_jupiter = $this->calculate_keys($first_sun, $second_jupiter, 'personality', 'sun-jupiter');

        $personality_jupiter_sun = $this->calculate_keys($first_jupiter, $second_sun, 'personality', 'jupiter-sun');

        $personality_sun_saturn = $this->calculate_keys($first_sun, $second_sat, 'personality', 'sun-saturn');

        $personality_saturn_sun = $this->calculate_keys($first_sat, $second_sun, 'personality', 'saturn-sun');
 
        $total_personality_score = 
        $personality_sun_sun[1][0]["key_points"] 
        + $personality_sun_mercury[1][0]["key_points"] 
        + $personality_mercury_sun[1][0]["key_points"]
        + $personality_sun_venus[1][0]["key_points"]
        + $personality_venus_sun[1][0]["key_points"]
        + $personality_sun_mars[1][0]["key_points"]
        + $personality_mars_sun[1][0]["key_points"]
        + $personality_sun_jupiter[1][0]["key_points"]
        + $personality_jupiter_sun[1][0]["key_points"]
        + $personality_sun_saturn[1][0]["key_points"]
        + $personality_saturn_sun[1][0]["key_points"]
        ;
  
        //COMMUNICATION 

        $communication_mercury_mercury = $this->calculate_keys($first_merc, $second_merc, 'communication', 'mercury-mercury');

        $communication_mercury_venus = $this->calculate_keys($first_merc, $second_ven, 'communication', 'mercury-venus');

        $communication_venus_mercury = $this->calculate_keys($first_ven, $second_merc, 'communication', 'venus-mercury');

        $communication_mercury_mars = $this->calculate_keys($first_merc, $second_mars, 'communication', 'mercury-mars');

        $communication_mars_mercury = $this->calculate_keys($first_mars, $second_merc, 'communication', 'mars-mercury');

        $communication_mercury_jupiter = $this->calculate_keys($first_merc, $second_jupiter, 'communication', 'mercury-jupiter');

        $communication_jupiter_mercury = $this->calculate_keys($first_jupiter, $second_merc, 'communication', 'jupiter-mercury');

        $communication_mercury_saturn = $this->calculate_keys($first_merc, $second_sat, 'communication', 'mercury-saturn');

        $communication_saturn_mercury = $this->calculate_keys($first_sat, $second_merc, 'communication', 'saturn-mercury');

        $total_communication_score = 
        
        $communication_mercury_mercury[1][0]["key_points"] +
        $communication_mercury_venus[1][0]["key_points"] +
        $communication_venus_mercury[1][0]["key_points"] +
        $communication_mercury_mars[1][0]["key_points"] +
        $communication_mars_mercury[1][0]["key_points"] +
        $communication_mercury_jupiter[1][0]["key_points"] +
        $communication_jupiter_mercury[1][0]["key_points"] +
        $communication_mercury_saturn[1][0]["key_points"] +
        $communication_saturn_mercury[1][0]["key_points"];
 
        //PLEASURE 

        $pleasure_venus_venus = $this->calculate_keys($first_ven, $second_ven, 'pleasure', 'venus-venus');

        $pleasure_venus_mars = $this->calculate_keys($first_ven, $second_mars, 'pleasure', 'venus-mars');

        $pleasure_mars_venus = $this->calculate_keys($first_mars, $second_ven, 'pleasure', 'mars-venus');

        $pleasure_venus_jupiter = $this->calculate_keys($first_ven, $second_jupiter, 'pleasure', 'venus-jupiter');

        $pleasure_jupiter_venus = $this->calculate_keys($first_jupiter, $second_ven, 'pleasure', 'jupiter-venus');

        $pleasure_venus_saturn = $this->calculate_keys($first_ven, $second_sat, 'pleasure', 'venus-saturn');

        $pleasure_saturn_venus = $this->calculate_keys($first_sat, $second_ven, 'pleasure', 'saturn-venus');

        $total_pleasure_score = 
        $pleasure_venus_venus[1][0]["key_points"] +
        $pleasure_venus_mars[1][0]["key_points"] +
        $pleasure_mars_venus[1][0]["key_points"] +
        $pleasure_venus_jupiter[1][0]["key_points"] +
        $pleasure_jupiter_venus[1][0]["key_points"] +
        $pleasure_venus_saturn[1][0]["key_points"] +
        $pleasure_saturn_venus[1][0]["key_points"]; 

        //DESIRE 

        $desire_mars_mars = $this->calculate_keys($first_mars, $second_mars, 'desire', 'mars-mars');

        $desire_mars_jupiter = $this->calculate_keys($first_mars, $second_jupiter, 'desire', 'mars-jupiter');

        $desire_jupiter_mars = $this->calculate_keys($first_jupiter, $second_mars, 'desire', 'jupiter-mars');

        $desire_mars_saturn = $this->calculate_keys($first_mars, $second_sat, 'desire', 'mars-saturn');

        $desire_saturn_mars = $this->calculate_keys($first_sat, $second_mars, 'desire', 'saturn-mars');
        
        $total_desire_score = 
        $desire_mars_mars[1][0]["key_points"] +
        $desire_mars_jupiter[1][0]["key_points"] +
        $desire_jupiter_mars[1][0]["key_points"] +
        $desire_mars_saturn[1][0]["key_points"] +
        $desire_saturn_mars[1][0]["key_points"]
        ;
 
        //PERSONAL GROWTH AND KARMA

        $growth_karma_jupiter_jupiter = $this->calculate_keys($first_jupiter, $second_jupiter, 'personal-growth-karma', 'jupiter-jupiter');

        $growth_karma_jupiter_saturn = $this->calculate_keys($first_jupiter, $second_sat, 'personal-growth-karma', 'jupiter-saturn');
        
        $growth_karma_saturn_jupiter = $this->calculate_keys($first_sat, $second_jupiter, 'personal-growth-karma', 'saturn-jupiter');

        $growth_karma_saturn_saturn = $this->calculate_keys($first_sat, $second_sat, 'personal-growth-karma', 'saturn-saturn');

        $total_growth_karma_score = 
        
        $growth_karma_jupiter_jupiter[1][0]["key_points"] +
        $growth_karma_jupiter_saturn[1][0]["key_points"] +
        $growth_karma_saturn_jupiter[1][0]["key_points"] +
        $growth_karma_saturn_saturn[1][0]["key_points"];
 
        //MATCH MATRIX SCORE- Total Match Matrix Compatibility:

        $total_matrix_compatibility_score = $total_growth_karma_score + $total_desire_score + $total_pleasure_score + $total_communication_score + $total_personality_score;
        
         //Check and Input Compatibilities 

         $compat = [];
  
         if (!in_array($reading_first[0]->SunS, $compat)) {
 
             array_push($compat, $reading_first[0]->SunS);
         
         }
 
         if (!in_array($reading_first[0]->MercS, $compat)) {
 
             array_push($compat, $reading_first[0]->MercS);
         
         }
 
         if (!in_array($reading_first[0]->VenS, $compat)) {
 
             array_push($compat, $reading_first[0]->VenS);
         
         }
 
         if (!in_array($reading_first[0]->MarsS, $compat)) {
 
             array_push($compat, $reading_first[0]->MarsS);
         
         }
 
         if (!in_array($reading_first[0]->SatS, $compat)) {
 
             array_push($compat, $reading_first[0]->SatS);
         
         }
 
         if (!in_array($reading_first[0]->JupS, $compat)) {
 
             array_push($compat, $reading_first[0]->JupS);
         
         }

         /** Compatibility for Second */

         $compat_second = [];
  
         if (!in_array($reading_second[0]->SunS, $compat_second)) {
 
             array_push($compat_second, $reading_second[0]->SunS);
         
         }
 
         if (!in_array($reading_second[0]->MercS, $compat_second)) {
 
             array_push($compat_second, $reading_second[0]->MercS);
         
         }
 
         if (!in_array($reading_second[0]->VenS, $compat_second)) {
 
             array_push($compat_second, $reading_second[0]->VenS);
         
         }
 
         if (!in_array($reading_second[0]->MarsS, $compat_second)) {
 
             array_push($compat_second, $reading_second[0]->MarsS);
         
         }
 
         if (!in_array($reading_second[0]->SatS, $compat_second)) {
 
             array_push($compat_second, $reading_second[0]->SatS);
         
         }
 
         if (!in_array($reading_second[0]->JupS, $compat_second)) {
 
             array_push($compat_second, $reading_second[0]->JupS);
         
         }

        
         $result_sign_desc = [];

         foreach($compat as $comp) {

            $data = $this->generatedb->get_sign_description($comp); 
            
            $include = [$comp.' Compatibility', $data[0]['sign_content'], $comp];

            array_push($result_sign_desc,$include);

         }

         $result_compatibility = [];

         $compat_data = [
            'Aries',
            'Taurus',
            'Gemini',
            'Cancer',
            'Leo',
            'Virgo',
            'Libra',
            'Scorpio',
            'Sagittarius',
            'Capricorn',
            'Aquarius',
            'Pisces',
        ];

         foreach($compat_data as $comp2) {

            $data = $this->generatedb->get_sign_description($comp2); 
            
            $include2 = [$comp2, $data[0]['sign_content'], $comp2];

            array_push($result_compatibility,$include2);

         }

         //RESULT SCORE LOVE METER
        
             $meter = "";

         if($total_matrix_compatibility_score >=  90 && $total_matrix_compatibility_score <= 125) {

            $meter = "SOULMATES";

         } else if ($total_matrix_compatibility_score >= 76 && $total_matrix_compatibility_score <= 89) {

            $meter = "MARRIAGE MATERIAL";

         } else if ($total_matrix_compatibility_score >= 62 && $total_matrix_compatibility_score <= 75) {

            $meter = "LEARNING EXPERIENCE";

         } else if ($total_matrix_compatibility_score >= 25 && $total_matrix_compatibility_score <= 49) {

            $meter = "INCOMPATIBLE";

         } else if ($total_matrix_compatibility_score >= 0 && $total_matrix_compatibility_score <= 24) {

            $meter = "INCOMPATIBLE";

         } else {

            $meter = "INCOMPATIBLE";

         }

        $data = [

            'first_name' => $name_first,
            'first_birthday' => $first_birthday,
            'second_name' => $name_second,
            'second_birthday' => $second_birthday,

            //YOUR SIGN

            'first_sun' => $reading_first[0]->SunS,
            'first_merc' => $reading_first[0]->MercS,
            'first_ven' => $reading_first[0]->VenS,
            'first_mars' => $reading_first[0]->MarsS,
            'first_sat' => $reading_first[0]->SatS,
            'first_jupiter' => $reading_first[0]->JupS,

            //THEIR SIGN 

            'second_sun' => $reading_second[0]->SunS,
            'second_merc' => $reading_second[0]->MercS,
            'second_ven' => $reading_second[0]->VenS,
            'second_mars' => $reading_second[0]->MarsS,
            'second_sat' => $reading_second[0]->SatS,
            'second_jupiter' => $reading_second[0]->JupS,

            //Result Sign Comp Description

            'sign_descriptions' => $result_sign_desc,
            'compat_second' => $compat_second,

            'result_compatibility' => $result_compatibility,
  
            //PERSONALITY 

            'personality_sun_sun' => $personality_sun_sun,
            'personality_sun_mercury' => $personality_sun_mercury,
            'personality_mercury_sun' => $personality_mercury_sun,
            'personality_sun_venus' => $personality_sun_venus,
            'personality_venus_sun' => $personality_venus_sun,
            'personality_sun_mars' => $personality_sun_mars, 
            'personality_mars_sun'  => $personality_mars_sun, 
            'personality_sun_jupiter'  => $personality_sun_jupiter, 
            'personality_jupiter_sun'  => $personality_jupiter_sun, 
            'personality_sun_saturn'  => $personality_sun_saturn, 
            'personality_saturn_sun'  => $personality_saturn_sun, 
            'total_personality_score' => $total_personality_score,

            //COMMUNICATION
            
            'communication_mercury_mercury' => $communication_mercury_mercury,
            'communication_mercury_venus' => $communication_mercury_venus,
            'communication_venus_mercury' => $communication_venus_mercury,
            'communication_mercury_mars' => $communication_mercury_mars,
            'communication_mars_mercury' => $communication_mars_mercury,
            'communication_mercury_jupiter' => $communication_mercury_jupiter,
            'communication_jupiter_mercury' => $communication_jupiter_mercury, 
            'communication_mercury_saturn'  => $communication_mercury_saturn, 
            'communication_saturn_mercury'  => $communication_saturn_mercury, 
            'total_communication_score' => $total_communication_score,
            //PLEASURE 

            'pleasure_venus_venus' => $pleasure_venus_venus,
            'pleasure_venus_mars' => $pleasure_venus_mars, 
            'pleasure_mars_venus' => $pleasure_mars_venus,
            'pleasure_venus_jupiter' => $pleasure_venus_jupiter,
            'pleasure_jupiter_venus' => $pleasure_jupiter_venus,
            'pleasure_venus_saturn' => $pleasure_venus_saturn, 
            'pleasure_saturn_venus'  => $pleasure_saturn_venus,  
            'total_pleasure_score' => $total_pleasure_score,

            //DESIRE

            'desire_mars_mars' => $desire_mars_mars,
            'desire_mars_jupiter' => $desire_mars_jupiter, 
            'desire_jupiter_mars' => $desire_jupiter_mars,
            'desire_mars_saturn' => $desire_mars_saturn,
            'desire_saturn_mars' => $desire_saturn_mars, 
            'total_desire_score' => $total_desire_score,

            //KARMA

            'growth_karma_jupiter_jupiter' => $growth_karma_jupiter_jupiter,
            'growth_karma_jupiter_saturn' => $growth_karma_jupiter_saturn, 
            'growth_karma_saturn_jupiter' => $growth_karma_saturn_jupiter,
            'growth_karma_saturn_saturn' => $growth_karma_saturn_saturn, 
            'total_growth_karma_score' => $total_growth_karma_score,

            //TOTAL MATRIX SCORE 

            'total_matrix_compatibility_score' => $total_matrix_compatibility_score,
            'love_meter' => $meter

        ];     

        // echo "<pre>";
        // var_dump($personality_sun_sun); 
        // echo "</pre>";
        //echo $added_birthday;

            $this->load->view('header');
            $this->load->view('content', $data);
            $this->load->view('footer');
    }

    function calculate_keys($first, $second, $key_type, $placement) {

        //Personality Key

        $key = $this->generatedb->get_compatibility_key($first, $second);
    
        $computation = $this->generatedb->get_key_computation($key_type, $placement, $key[0]['key_name']);
        
        $sign_description = $this->generatedb->get_sign_description($key[0]['sign_one']);

        return [$key,$computation, $sign_description];

    }

}
?>
