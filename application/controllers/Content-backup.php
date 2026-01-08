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
        
        //Defaults

        $name = $this->input->get('name');


        $birthday=$this->input->get('month')."/".$digit=$this->input->get('day')."/".$this->input->get('year');

        //Chapter 1

        $this->load->model("generatedb"); 
        
        //Day ones digit

			$digit=$this->input->get('day') + $this->input->get('month') + $this->input->get('year');

			//Get 4 digits of digit

            $dgone=intval($digit/1000);
            
			$dgone_var=$digit % 1000;

            $dgtwo=intval($dgone_var/100);
            
			$dgtwo_var=$dgone_var % 100;

            $dgthree=intval($dgtwo_var / 10);
            
			$dgfour=$dgtwo_var % 10;

            $added_birthday = $dgone + $dgtwo + $dgthree + $dgfour;
 
            
            if($added_birthday > 22)
			{
				
                while($added_birthday > 22) {

                    $added_birthday=(intval($added_birthday / 10))+($added_birthday % 10);

                } 

                while($added_birthday > 9) {

                    $added_birthday=(intval($added_birthday / 10))+($added_birthday % 10);

                }
               
            }
            else if($added_birthday < 22) { 

                if($added_birthday > 9) {

                     if($added_birthday == 11) {

                        $added_birthday = 11;

                     } else {
                        
                        while($added_birthday > 9) {

                            $added_birthday=(intval($added_birthday / 10))+($added_birthday % 10);
 
                        }

                     }

                }                

            } else if($added_birthday == 22) {

                    $added_birthday = 22; 

            }
  

            if($added_birthday == 11) {

                $part_one = [

                    $part_one=$this->generatedb->get_part_one(2),
                    $part_one=$this->generatedb->get_part_one(11) 

                ];

            } else if ($added_birthday == 22) {

                $part_one = [

                    $part_one=$this->generatedb->get_part_one(4),
                    $part_one=$this->generatedb->get_part_one(22) 

                ];

            } else {

                $part_one=$this->generatedb->get_part_one($added_birthday); 

            }
              

        /** Part 2 Calculation */

        $calc_result = getCalculator($name); 

        // $soul_urge = DB::table('soul_urge')
        // ->where('score', '=', ''.int($calc_result["vowel_score"]).'')
        // ->get()->toArray();

        // $personality_number = DB::table('personality_number')
        // ->where('score', '=', ''.int($calc_result["consonant_score"]).'')
        // ->get()->toArray(); 
        
        $vowel_score_check = $calc_result["vowel_score"];

        if($vowel_score_check == 11) {

            
            $soul_urge = [

                $this->generatedb->get_soul_urge(2),
                $this->generatedb->get_soul_urge(11)

            ];


        } else if ($vowel_score_check == 22) {

            
            $soul_urge = [

                $this->generatedb->get_soul_urge(4),
                $this->generatedb->get_soul_urge(22)

            ];


        } else {


            $soul_urge = $this->generatedb->get_soul_urge($vowel_score_check);


        }
 
        //PERSONALITY NUMBER 

        $consonant_score_check = $calc_result["consonant_score"];

        //echo $consonant_score_check;
          
        if($consonant_score_check == 11) {

            
            $personality_number  = [

                $this->generatedb->get_personality(2),
                $this->generatedb->get_personality(11) 

            ];


        } else if ($consonant_score_check == 22) {

            
            $personality_number = [

                $this->generatedb->get_personality(4),
                $this->generatedb->get_personality(22)

            ];


        } else {


            $personality_number = $this->generatedb->get_personality($consonant_score_check); 


        }


        
        
        
    
        //Generate Chapter 2 Content 

        $month=$this->input->get('month');

		$day=$this->input->get('day');

		$year=$this->input->get('year');

		$reading=$this->generatedb->get_reading($month,$day,$year);

        $major_sun=$this->generatedb->get_major_suns($reading[0]->SunS);        

        $major_merc=$this->generatedb->get_major_mercs($reading[0]->MercS);   

        $major_ven=$this->generatedb->get_major_vens($reading[0]->VenS);             

        $major_mars=$this->generatedb->get_major_marss($reading[0]->MarsS);           

        $major_sat=$this->generatedb->get_major_saturns($reading[0]->SatS);       

        $major_jupiter=$this->generatedb->get_major_jupiters($reading[0]->JupS);           

        //Minor Arcana 
  
						//get the sign and degree

						//key8

						$part_three_SunS=$reading[0]->SunS;
						$part_three_SunD=$reading[0]->SunD; 
                        $minor_sun=$this->generatedb->get_minor_sund($part_three_SunD,$part_three_SunS);

						//key9

						$part_three_MercS=$reading[0]->MercS;
						$part_three_MercD=$reading[0]->MercD;                        
                        $minor_merc=$this->generatedb->get_minor_mercd($part_three_MercD,$part_three_MercS);     
						//key10

						$part_three_VenS=$reading[0]->VenS;
						$part_three_VenD=$reading[0]->VenD;
                        $minor_ven=$this->generatedb->get_minor_vend($part_three_VenD, $part_three_VenS);
                        
						//key11

						$part_three_MarsS=$reading[0]->MarsS;
						$part_three_MarsD=$reading[0]->MarsD;
                        $minor_mars=$this->generatedb->get_minor_marsd($part_three_MarsD,$part_three_MarsS);  

						//key14

						$part_three_JupS=$reading[0]->JupS;
						$part_three_JupD=$reading[0]->JupD; 
                        $minor_jupiter=$this->generatedb->get_minor_jupiterd($part_three_JupD,$part_three_JupS);    

						//key13

						$part_three_SatS=$reading[0]->SatS;
						$part_three_SatD=$reading[0]->SatD;
                        $minor_sat=$this->generatedb->get_minor_saturnd($part_three_SatD,$part_three_SatS);  
        

        $data = [       

            'name' => $name,

            'birthday' => $birthday,

            'added_birthday' => $added_birthday,

            'part_one' => $part_one, 

            "consonant_score" => $consonant_score_check,

            "vowel_score" =>  $vowel_score_check,

            "soul_urge" => $soul_urge,

            "personality" => $personality_number,

            "major_sun" => $major_sun,
            "minor_sun" => $minor_sun,

            "major_merc" => $major_merc,
            "minor_merc" => $minor_merc,

            "major_ven" => $major_ven,
            "minor_ven" => $minor_ven,
            
            "major_mars" => $major_mars,
            "minor_mars" => $minor_mars,
            
            "major_sat" => $major_sat,
            "minor_sat" => $minor_sat,
            
            "major_jupiter" => $major_jupiter,
            "minor_jupiter" => $minor_jupiter,
     
             
        ];

        //var_dump($major_sun[0]);
        
        //echo $added_birthday;

            $this->load->view('header');
            $this->load->view('content', $data);
            $this->load->view('footer');
    }
}
?>
