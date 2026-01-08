<style>
body { 
	margin: 0 !important; 
    background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(35, 24, 82, 0.22) 10%, rgba(138, 114, 76, 0) 40%), linear-gradient(to bottom, rgba(57, 173, 219, 0.25) 0%, rgba(42, 60, 87, 0.4) 100%), linear-gradient(
92deg
, #670d10 -17%, #092756 80%);
}
.container{ 
	width: 100%; 
	max-width: 900px; 
	margin: 0px auto;
	padding: 30px 25px;
    background: #fff;
    border-radius: 20px;
    margin-top: 50px;
    padding-bottom: 10px;
    margin-bottom: 50px; 
	box-sizing: border-box;
}

.center { text-align:center; }
.left { text-align:left; }
.indent { text-indent:50px; }

h1,h2,h3,p { font-family:"Times New Roman" !important; }
p { font-size:20px; line-height: 1.6; text-align: justify; }
.mainhead { font-size:84px; }
.topic_head { font-size:31px; }
.topic_head_larger { font-size:50px; margin-bottom:0; }

.flex { display:flex; }
.image-left{ width:30%; padding-right: 15px; padding-left: 15px; }
.image-left img{ width:100%;max-width: 250px; }
.text-right{ width:70%; padding-right: 15px; padding-left: 15px; }
hr{ border-top: 1px solid #888 !important; margin-top: 20px; margin-bottom: 20px; border: 0; }

/** Floating Menu */

body{margin:0px; padding:0px;}
#fl_menu{position:absolute; top:50px; left:0px; z-index:9999; width:150px; height:50px;}
#fl_menu .label{padding-left:20px; line-height:50px; font-family:"Arial Black", Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; background:#000; color:#fff; letter-spacing:7px;}
#fl_menu .menu{display:none;}
#fl_menu .menu .menu_item{display:block; background:#000; color:#bbb; border-top:1px solid #333; padding:10px 20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; text-decoration:none;}
#fl_menu .menu a.menu_item:hover{background:#333; color:#fff;}

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script>

<script src="public/js/jquery.easing.1.3.js" type="text/javascript"></script>

<?php

class Pdf extends CI_Controller {

function index()
{

            //base variables Here
        ?>
            
            <div id="fl_menu">
            <div class="label">MENU</div>
            <div class="menu">
                <a href="#anchor0" class="menu_item scrollLink">How To Use This Report</a>
                <a href="#anchor1" class="menu_item scrollLink">Part One: Decoding Your Romantic Destiny</a>
                <a href="#anchor2" class="menu_item scrollLink">Chapter I: Life Path</a>                
                <a href="#anchor3" class="menu_item scrollLink">Your Birth Cards of Romantic Destiny</a>
                <a href="#anchor4" class="menu_item scrollLink">Tarot Birth Card Chart</a>
                <a href="#anchor5" class="menu_item scrollLink">How To Turn Any Tarot Reading Into A Love Power Reading</a>
            </div>
         </div>


        <?php
           

            $name=$this->input->get('name');
            
			$birthday=$this->input->get('month')."/".$digit=$this->input->get('day')."/".$this->input->get('year');

			//Day ones digit

			$digit=$this->input->get('day') + $this->input->get('month') + $this->input->get('year');

			//Get 4 digits of digit

			$dgone=intval($digit/1000);
			$dgone_var=$digit % 1000;

			$dgtwo=intval($dgone_var/100);
			$dgtwo_var=$dgone_var % 100;

			$dgthree=intval($dgtwo_var / 10);
			$dgfour=$dgtwo_var % 10;

			$added_birthday=$dgone + $dgtwo + $dgthree + $dgfour;

			if($added_birthday>22)
			{
				$added_birthday=(intval($added_birthday / 10))+($added_birthday % 10);
			}

			 //echo $added_birthday;

			 $base=base_url();
			//  $this->load->library('Myfpdf');
			//  $pdf = new Myfpdf();
			//  $pdf->SetFont('Arial','B',14);
			//  $pdf->SetMargins(20, 15, 20);
			 //$pdf->AddPage();
			 //$image = $base."public/img/love_power_reading.jpg";
			 //$pdf->Cell(0, 30, $pdf->Image($image, 0,10,220,267), 0, 0, 'C');

			 //$pdf->centreImage($image);

				//new page; page 2
			
 			// $pdf->AddPage();
			echo "<div>";
			echo "<div class='container'>";
				echo "<h2 class='center' style='font-size:28px;'><i>Cosmic Updates presents a...</i></h2>";
				echo "<br/>";
				echo "<h1 class='mainhead center'><strong>Ultimate Love<br/>Reading</strong></h1>";
				echo "<br/>";
				echo "<p class='center'>Prepared For ".$name." born ".$birthday."</p>";
				echo "<br/>";
				echo "<br/>";
                echo "<p class='center' style='font-size:34px;'><i>Your personalized card meanings to unlock new levels of love and romance in your life.</i></p>";
                echo "<div id='anchor0'></div>";

			//new page; page 3
				echo "<hr>";
				echo "<h2 class='center topic_head'>How To Use This Report</h2>";
				echo "<p class='indent'>Your Love Power Reading combines knowledge of astrology and numerology to express your romantic life through the Tarot.</p>";
				echo "<p class='indent'>The reason why is that when you get your tarot cards read, you will know that these cards have special significance to you and only you.</p>";
				echo "<p class='indent'>With this guide, you'll find new meanings and messages you'd otherwise miss from non-power readings.</p>";
				echo "<p class='indent'>Without this guide, you will not know the advanced signals that the Universe is trying to send you about your love life.</p>";
				echo "<p class='indent'>Start by going through each birth card and getting familiar with your cards. You will be given lots of great insights into yourself and how you relate to people in love.</p>";
				echo "<p class='indent'>Next you can go to the members area and generate profiles for any man you wish to examine. You can read your profile and his as well while you are doing any of the suggested readings at the end of this book.</p>";
				echo "<p class='indent'>This means that when you meditate (or at least start into until you gaze and start daydreaming) the cards in your deck, your own subconscious mind will pop up different images that are important to YOUR life.</p>";
				echo "<p class='indent'>Yes - just by studying these cards they will unlock images, memories and intuitions in your own mind that you MUST pay attention to, because that's how Tarot works.</p>";
				echo "<p class='indent'>At the end of the day, these are more than just cards.</p>";
				echo "<p class='indent'>Each card is a subconscious archetype that already lives in your mind. When you work with a card, you are accessing - what psychologist Carl Jung calls - the original archetypes of transformation.</p>";
				echo "<p class='indent'>These symbols and images work with your intuition to trigger thoughts and images from your subconscious mind, to make them conscious.</p>";
				echo "<p class='indent'>The first part focuses on the personal power inside YOU and unlocks your true nature.)</p>";
				echo "<p class='indent'>The second part presents the birth card archetypes to your relationship success. The third reveals the cosmic signs and messages the Universe is sending you in readings whether you know it or not (these have to do with your ultimate fate and destiny in this life.)</p>";
				echo "<p class='indent'>At the end of this profile, you will find numerous printouts that you will take with you to your readings.</p>";
				echo "<p class='indent'>If and when these cards arise, you will have way more insight and clarity into what they really mean for YOU than any other way to interpret the cards.</p>";
                echo "<p><strong>NOTE:</strong> You may see the same birth card appear multiple times in your profile. That's OK! And totally normal. Just make sure to keep reading, because the MEANING is always different. When this happens, realize this tarot card is even MORE important for you when it comes to creating your ideal life. A repeated card should be your #1 card to meditate with because it relates to you the most, and when it comes up in readings, it has the most to say.</p>";
                echo "<div id='anchor1'></div>";
				echo "<br/>";
                
			//Part 1 Page
				echo "<hr >";
				echo "<h2 class='center topic_head_larger'><u>Part 1:</u></h2>";
				echo "<h2 class='center topic_head'>Numerology: Decoding Your Romantic Destiny</h2>";
				echo "<p class='indent'>Every good relationship begins with yourself. You are unique creature put on this earth for a reason. You deserve every good thing coming to you so by knowing what path you're on and why you are here can help you get aligned with what you truly want in life.</p>";
				echo "<p class='indent'>We want to strip away the \"fake self\" put on us by society. That \"polite and doesn't want to interrupt\" goody two-shoes persona that the world expects of you. This is about getting down to your primal core as the sensual person you really are.</p>";
				echo "<p class='indent'>The good news is that this goddess hood already exists in your heart, soul and spirit. It's just a matter of aligning with what you are truly here to do in this world so you can embrace your powerful nature, become your own master, and share your unique gifts with the world.</p>";
                echo "<p class='indent'>By getting in touch with your raw, true self - you will find women are SO much easier to talk to because they feel they can be their own true selves too. Because we are all beautiful inside. It's just a matter of understanding for who you really are and finding the right person who loves and accepts you just as you are.</p>";
                echo "<div id='anchor2'></div>";
				echo "<br/>";

			//Part 1 Key 1 Page
				echo "<hr>";
				echo "<h2 class='center topic_head_larger'>Chapter #1:</h2>";
				echo "<h2 class='center topic_head'>Life Path</h2>";
				echo "<p class='indent'>A truly desirable human is wanted from the inside out. The more you are in touch with your purpose, the more powerful you become, and everything else begins to work itself out. Your life purpose is the only thing that truly matters to you. It indicates the person you truly are. The frequency you resonate with. The vibe you give off to others.</p>";
				echo "<p class='indent'>This card is the archetype of your personality, and is determined by performing a numerology calculation based on exact day you were born. It reveals the overall flow of who you've been all your life. Sit with this card and meditate 5 minutes per day to remind yourself of the gifts you are bringing to this world.</p>";
				echo "<p class='indent'>The image on this card represents your entire life path rolled into one expression of energy. More specifically, it shows what frequency you are naturally tuned into based on your own energy.</p>";
				echo "<p class='indent'>The energetic vibration of your purpose on earth - just like the keys of a piano - has a very specific tone. This is the tone of your life path and the opportunities and challenges you will face along the way.</p>";
				echo "<p class='indent'>When this card comes up in a reading, understand that your karmic destiny is at play. It's addressing who you really are, and depending on where it comes up in a spread, it may be giving indications of your true purpose in life.</p>";
				echo "<p><strong>Exercise: </strong>Put this card on your phone, or print it out. Sit and gaze into this card for 5 minutes in the morning before you do anything important. Get in touch with the archetype of this card and it won't matter what you look like. You are powerful in love no matter what because you are finally (and truly) \"being yourself.\" </p>";
                echo "<br/>";
                
    //UPDATABLE CONTENT HERE

			//Key 1 Card:

			//Generate Part 1

            $this->load->model("generatedb");
            
			$part_one=$this->generatedb->get_part_one($added_birthday);

            //Key 1 Title
            
            echo "<hr>";
            
			echo "<h2 class='center topic_head'>Your Life Path Card Is ".$part_one[0]->life_purpose_card."</h2>";
			
			// //CARD image
			echo "<div class='flex'>";
				echo "<div class='image-left'><img src='public/img/".$part_one[0]->life_purpose_image."'></div>";
				
				echo "<div class='text-right'>
					<p style='margin:0;'>".$part_one[0]->life_purpose_introduction."</p>";
					// 
					//Key 1 - Description
					echo "<p><strong>Description:</strong></p>";
					echo "<p>".$part_one[0]->life_purpose_description."</p>";
					
				echo "</div>";
			echo "</div>";

			// 
			//Key 1 - Inner Nature
			echo "<p><strong>Inner Nature:</strong></p>";
			echo "<p>".$part_one[0]->life_purpose_inner_nature."</p>";
			echo "<br/>";
			// 
			//Key 1 - Blind Spots
			echo "<p><strong>Blind Spots:</strong></p>";
			echo "<p>".$part_one[0]->life_purpose_blind_spots."</p>";
			echo "<br/>";
			//
			// //Key 1 - Relationship Values
			echo "<p><strong>Relationship Values:</strong></p>";
			echo "<p>".$part_one[0]->life_purpose_relationship_values."</p>";
			echo "<br/>";
			//
			// //Key 1 - Secret Love Power
			echo "<p><strong>Secret Love Power:</strong></p>";
			echo "<p>".$part_one[0]->life_purpose_secret_love_power."</p>";
			echo "<br/>";

			//if 19, show 2nd life purpose
			if($added_birthday==19)
			{

				//if 19, there are two life purpose

				$part_one_b=$this->generatedb->get_part_one("19b");

				//Key 1 Title
				echo "<hr>";
				echo "<h2 class='center topic_head'>".$part_one_b[0]->life_purpose_card."</h2>";
				echo "<div class='flex'>";
					echo "<div class='image-left'><img src='public/img/".$part_one_b[0]->life_purpose_image."'></div>";
					echo "<div class='text-right'>
						<p style='margin:0;'>".$part_one_b[0]->life_purpose_introduction."</p>";
						// 
						//Key 1 - Description
						echo "<p><strong>Description:</strong></p>";
						echo "<p>".$part_one_b[0]->life_purpose_description."</p>";
						//
						// Key 1 - Inner Nature
						echo "<p><strong>Inner Nature:</strong></p>";
						echo "<p>".$part_one_b[0]->life_purpose_inner_nature."</p>";
					echo "</div>";	
				echo "</div>";			
				// 
				//Key 1 - Blind Spots
				echo "<p><strong>Blind Spots:</strong></p>";
				echo "<p>".$part_one_b[0]->life_purpose_blind_spots."</p>";
				echo "<br/>";
				// 
				//Key 1 - Relationship Values
				echo "<p><strong>Relationship Values:</strong></p>";
				echo "<p>".$part_one_b[0]->life_purpose_relationship_values."</p>";
				echo "<br/>";
				// 
				//Key 1 - Secret Love Power
				echo "<p><strong>Secret Love Power:</strong></p>";
				echo "<p>".$part_one_b[0]->life_purpose_secret_love_power."</p>";
				echo "<br/>";
			}

			//Part 1 Key 2 Page
			echo "<hr>";
			echo "<h2 class='center topic_head_larger'>Chapter 2</h2>";
			echo "<h2 class='center topic_head'>Soul Urge Number</h2>";
			echo "<p>The card to your heart is what fulfills you deeply at a soul level.</p>";
			echo "<p class='indent'>Your soul has a unique purpose that spans over many lifetimes. It's that deep yearning you feel inside to be a part of something. It's the spiritual \"Pull\" you feel to make something significant out of your life, no matter where you're at today.</p>";
			echo "<p class='indent'>Some lifetimes are spent preparing what you need to fulfil your soul's purpose. Other lifetimes are spent in pursuit of manifesting that purpose into being.</p>";
			echo "<p class='indent'>There are principles that we live by, and if we embody these principles (especially in our romantic relationships) we nurture our souls. If we don't, we feel frustrated and sad and alone, even in a room full of people you know.</p>";
			echo "<p class='indent'>Your Soul's Purpose card  will help you get in touch with what you truly need in this lifetime. Study the card to your soul and ask yourself if your current romantic relationships are helping you fulfil your soul or not?</p>";
			echo "<br/>";
			echo "<p><strong>Exercise:</strong></p>";
			echo "<p>When your Life Path card is the same as your Soul's Purpose card, it means that this lifetime you are now living is dedicated to fulfilling your soul's unique purpose.  You have quite a job to do in this lifetime!  Everything has been preparing you for this life, and now your soul is ready to manifest its most dearest goals.</p>";
			echo "<p>When your Life Path card is NOT the same as your Soul's Purpose card, it means this lifetime is to prepare you to fulfil your soul's purpose in another life.</p>";
			echo "<p>Both are equally important.  If the keys are the same, you have a lot of work to do this lifetime!  If not, you have a lot of learning to do.  Match up your Life Path card and \Soul\'s Purpose card to see what this lifetime means for you.</p>";
	 	
			//Part 1 Key 2 Card 1
			echo "<hr>";
			echo "<h2 class='center topic_head'>".$part_one[0]->heart_desire_card."</h2>";
			echo "<div class='flex'>";
				echo "<div class='image-left'><img src='public/img/".$part_one[0]->heart_desire_image."'></div>";
				
				echo "<div class='text-right'>";
					// 
					//Key 2 Description
					echo "<p><strong>Description:</strong></p>";
					echo "<p>".$part_one[0]->heart_desire_description."</p>";

					//Key 2 Your Soul's Purpose:
					echo "<p><strong>Your Soul's Purpose:</strong></p>";
					echo "<p>".$part_one[0]->heart_desire_soul_purpose."</p>";
				echo "</div>";
			echo "</div>";

			//Key 2 What Your Heart Really Wants: :
			echo "<p><strong>What Your Heart Really Wants:</strong></p>";
			echo "<p>".$part_one[0]->heart_desire_heart_really_wants."</p>";
			echo "<br/>";

			//Key 2 EXERCISE:
			if($added_birthday==10)
			{
		 		$pdf->ln();
				echo "<br/>";
			}
			echo "<p><strong>EXERCISE:</strong></p>";
			echo "<p>".$part_one[0]->heart_desire_exercise."</p>";
			echo "<br/>";

			//Part 1 Key 3 Page
			echo "<hr/>";
			echo "<h2 class='center topic_head_larger'>Birth Card #3:</h2>";
			echo "<h2 class='center topic_head'>Spirit Ascension Cards</h2>";	
			$image1 = $base."public/img/minor-arcana/small/wands/".$part_one[0]->spiritual_connection_image_one;
			$image2 = $base."public/img/minor-arcana/small/coins/".$part_one[0]->spiritual_connection_image_two;
			$image3 = $base."public/img/minor-arcana/small/swords/".$part_one[0]->spiritual_connection_image_three;
			$image4 = $base."public/img/minor-arcana/small/cups/".$part_one[0]->spiritual_connection_image_four;
			echo "<div class='flex' style='max-width:600px;margin:auto;'>";
				echo "<div style='width:50%;text-align:center;'><img style='width:100%;max-width:225px;' src='".$image1."'></div>";
				echo "<div style='width:50%;text-align:center;'><img style='width:100%;max-width:225px;' src='".$image2."'></div>";
			echo "</div>";
			echo "<div class='flex' style='max-width:600px;margin:auto;'>";
				echo "<div style='width:50%;text-align:center;'><img style='width:100%;max-width:225px;' src='".$image3."'></div>";
				echo "<div style='width:50%;text-align:center;'><img style='width:100%;max-width:225px;' src='".$image4."'></div>";
			echo "</div>";
			$pdf->floatingImage($image1, 320);
			$pdf->SetX(108);
			$pdf->floatingImage($image2, 320);
			$pdf->ln();
			$pdf->SetX(53);

			//adjust value here if 10

			if($added_birthday==10 || $added_birthday==1)
			{
		 $pdf->SetY(145);
			}
			else
			{
			$pdf->SetY(135);
			}

			$pdf->SetX(53);
			$pdf->floatingImage($image3, 320);
			$pdf->SetX(108);
			$pdf->floatingImage($image4, 320);

			if($added_birthday==10 || $added_birthday==1)
			{
		 $pdf->SetY(225);
			}
			else
			{
			$pdf->SetY(215);
			}

			$pdf->ln(10);

			echo "<p class='center' style='font-size:22px;'><strong>".$part_one[0]->spiritual_connection_subtitle."</strong></p>";
			echo "<p class='center' style='font-size:19px;'><strong>".$part_one[0]->spiritual_connection_title."</strong></p>";
			echo "<p class='center'>".$part_one[0]->spiritual_lesson."</p>";
			//================================================ START OF PART 2 =================================================//

			//Calculate based on birthday

			$month=$this->input->get('month');
			$day=$this->input->get('day');
			$year=$this->input->get('year');
			$reading=$this->generatedb->get_reading($month,$day,$year);


			//Get Keys Part 2

			$suns=$this->generatedb->get_suns($reading[0]->SunS);
			$mercs=$this->generatedb->get_mercs($reading[0]->MercS);
			$vens=$this->generatedb->get_vens($reading[0]->VenS);
			$marss=$this->generatedb->get_marss($reading[0]->MarsS);
			$sats=$this->generatedb->get_saturns($reading[0]->SatS);
			$jupiters=$this->generatedb->get_jupiters($reading[0]->JupS);

			echo "<p class='indent'>These 4 cards are connected to your Soul's purpose. These cards are connected to the opportunities that come up in your life, and the lessons you should learn from them.</p>";
		   	echo "<p class='indent'>When you see these cards come up in a reading, realize that they are reminding you of your karmic path. There is something your spirit needs to do or receive in order to continue to grow. It's a message from the universe that your spiritual purpose is involved with whatever question you are asking.</p>";
			echo "<p class='indent'>You'll notice each card has the same number. These are all cards of the \"Minor Arcana\" which are all specific moments in a storyline based on the suit of the cards.</p>";
			echo "<p class='indent'>In Wands it has to do with growing your willpower and drive.</p>";
			echo "<p class='indent'>In Cups it has to do with growing your emotional capacity for love.</p>";
			echo "<p class='indent'>In Swords it has to do with a spiritual truth you must be willing to accept.</p>";
			echo "<p class='indent'>In Coins it has to do with your financial situation, your body and the practical \"stuff\" in your life.</p>";
			echo "<p class='indent'>Keep these in mind when you're going through both windfalls and tough times. If you see them, it's a sign that the reason this is happening is way beyond your control.</p>";
			echo "<br/>";
			echo "<p><strong>Exercise: </strong></p>";
			echo "<p>The symbols of this key speak to your subconscious mind.  Meditate on this key once a day for at least 5 minutes if not more!  You'll tune into its energy just by looking at it.  See what comes up in your mind.  Write a journal entry each time.</p>";
			echo "<br/>";

			//*********************//

			echo "<hr>";
			echo "<h2 class='center topic_head_larger'><u>Part 2:</u></h2>";
			echo "<h2 class='center topic_head'>Your Birth Cards of Personal Connection</h2>";
			echo "<p class='indent'>Every successful relationship happens because two people naturally \"click\" together and are willing to stay together.</p>";
			echo "<p class='indent'>The archetypes in this section come from your personal Astrology natal chart and give you clues on your true nature in relationships and how to best approach them so you experience the love and adoration you desire and deserve.</p>";
			echo "<p class='indent'>It also helps you figure out who you are compatible with and who you are not. There are just some red flags that you shouldn't even attempt. Meanwhile, there are other great connections just waiting to be made.</p>";
			echo "<p class='indent'>Use this section to understand yourself, then run a your partner (or potential partner) to understand them just as well. Compare the cards and see if there is harmony.</p>";
			echo "<br/>";

			//*********************//

			echo "<hr>";
			echo "<h2 class='center topic_head_larger'>Birth Card #4:</h2>";
			echo "<h2 class='center topic_head'>Personality</h2>";
			echo "<p class='indent'>Tired of picking the wrong partner? Does it seem like every time you meet someone new, it doesn't take long to find out that your personalities clash?</p>";
			echo "<p class='indent'>It's far more common than not. Especially once we stop being so much in our egos, lower our defenses, and show each other our true selves.</p>";
			echo "<p class='indent'>What better way to get ahead of a good (or bad) relationship than to know your OWN natural tendencies and behaviors, then compare them to someone else. It's like reading the cliff notes on whether or not you two will \"get along\" way before you even meet up.</p>";
			echo "<p class='indent'>This is the archetype to how you express yourself and how you interact with others. Who you really are when YOU are being YOU. This is the part of you you are showing to the world whether you know it or not, so the more you get in tune with it's energy, the best you can properly express yourself without fear of being judged. Plus, you'll know what kind of potential partners you're compatible with, even as friends (and which ones to avoid).</p>";
			echo "<br/>";
			echo "<p><strong>Exercise: </strong></p>";
			echo "<p>When you run your partner's profile, compare your Personality Card with their personality card, and see if there is a conflict. You will see what you are compatible with or conflict with at the bottom of the next page.</p>";
			echo "<br/>";

			//*********************//

			echo "<hr>";
			echo "<h2 class='center topic_head'>Your Personality Card Is ".$suns[0]['title']."</h2>";
			echo "<div class='flex'>";
				echo "<div class='image-left'><img src='public/img/".$suns[0]['major-arcana-image']."'></div>";

				echo "<div class='text-right'><p style='margin:0;'>".$suns[0]['introduction']."</p>";
					echo "<p><strong>Description:</strong></p>";
					echo "<p>".$suns[0]['description']."</p>";
				echo "</div>";
			echo "</div>";

			echo "<p><strong>What You're All About:</strong></p>";
			echo "<p>".$suns[0]['all-about']."</p>";
			echo "<br/>";

			echo "<p><strong>What You Look For In Love:</strong></p>";
			echo "<p>".$suns[0]['look-for-in-love']."</p>";
			echo "<br/>";

			echo "<p><strong>What You Will Not Tolerate:</strong></p>";
			echo "<p>".$suns[0]['not-tolerate']."</p>";
			echo "<br/>";

			echo "<p><strong>Who You Vibe With:</strong></p>";
			echo "<p>".$suns[0]['vibe-with']."</p>";
			echo "<br/>";

			echo "<p><strong>Who To Avoid:</strong></p>";
			echo "<p>".$suns[0]['avoid']."</p>";
			echo "<br/>";

			//*********************//

			echo "<hr>";
			echo "<h2 class='center topic_head_larger'>Birth Card #5:</h2>";
			echo "<h2 class='center topic_head'>Communication</h2>";
		
			echo "<p class='indent'>Communication is the cornerstone of all relationships. And when you know how you you naturally communicate, you can know what to expect from yourself and from your partner.</p>";
			echo "<p class='indent'>This is the card of Understanding between you and your partner. It can help you find a real bridge of communication between each other, by communicating in the tone it presents. It's your natural way to talking and exressing information, so the more you get in tune with it, the more clear your communication will become.</p>";
			echo "<p class='indent'>It's also a reflection of your intellect and how you process information. You learn how you operate on an intellectual level so you can communicate clearly and effectively with the people in your life.</p>";
			echo "<p class='indent'>Through this archetype, you will learn to process your questions and concerns with your partner within a safe container that doesn't drive you mental with endless \"what if's\" and \"if onlys\" that could otherwise haunt you for years. Not to mention, their behavior - especially the way they think, reason, and make decisions - will start to make a lot more sense once you run their profile.</p>";
			echo "<br/>";
			echo "<p><strong>Exercise:</strong></p>";
			echo "<p>Keep this image handy on your phone, or even print it out, and have it around when you are getting into an important conversation. Tuning into its energy will help you communicate your thoughts clearly.</p>";
			echo "<br/>";

			//*********************//

			echo "<hr>";
			echo "<h2 class='center topic_head'>Your Communication Card ".$mercs[0]['title']."</h2>";
			echo "<div class='flex'>";
				echo "<div class='image-left'><img src='public/img/".$mercs[0]['major-arcana-image']."'></div>";
				
				echo "<div class='text-right'><p style='margin:0;'>".$mercs[0]['introduction']."</p>";
					// 
					//Key 1 - Description
					echo "<p><strong>Description:</strong></p>";
					echo "<p>".$mercs[0]['description']."</p>";
				echo "</div>";
			echo "</div>";

			echo "<p><strong>How You Think:</strong></p>";
			echo "<p>".$mercs[0]['how-you-think']."</p>";
			echo "<br/>";

			echo "<p><strong>How You Communicate:</strong></p>";
			echo "<p>".$mercs[0]['how-you-communicate']."</p>";
			echo "<br/>";

			echo "<p><strong>How You Resolve Conflict:</strong></p>";
			echo "<p>".$mercs[0]['how-you-resolve-conflict']."</p>";
			echo "<br/>";

			//*********************//

			echo "<hr>";
			echo "<h2 class='center topic_head_larger'>Birth Card #6:</h2>";
			echo "<h2 class='center topic_head'>Relationships</h2>";

			echo "<p class='indent'>Everyone has their own unique concept of what love means to them. We each experience love differently as we experience our feelings throughout the day.</p>";
			echo "<p class='indent'>We each express love differently and it determines what kind of lovers we are when involved in an intimate partnership. We each want different things - some to get married, others to never settle down. These preferences and natural pretilictions are expressed in your Relationship Card.</p>";
			echo "<p class='indent'>The archetype of this card is about aligning you with your sensual energy - the way you express your love to the world. Naturally, you'll want to understand and align yourself with these instincts so you can manifest a better partnership - with the person you're with now, or with someone new.</p>";
			echo "<p class='indent'>This card reveals the way you relate with yourself and with others. It acts as a mirror of love you portray to the world. And the more clear you get with your own inner mirror, the more authentic of a relationship you will find. For women, this is her feminine side. For men, this is his ideal woman.</p>";
			echo "<br/>";
			echo "<p><strong>Exercise:</strong></p>";
			echo "<p>When you compare profiles, see if a man's Relationship Card is the same as a woman's Personality Card. If it's the same, it indicates a very strong love connection, and vice versa. Compare yours with a partner or potential partner to see if you have this special connection.</p>";
			echo "<br/>";
	
			//*********************//

			echo "<hr>";
			echo "<h2 class='center topic_head'>Your Relationship Card Is ".$vens[0]['title']."</h2>";
			echo "<div class='flex'>";
				echo "<div class='image-left'><img src='public/img/".$vens[0]['major-arcana-image']."'></div>";
				
				echo "<div class='text-right'><p style='margin:0;'>".$vens[0]['introduction']."</p>";
				// 
				//Key 1 - Description
				echo "<p><strong>Description:</strong></p>";
				echo "<p>".$vens[0]['description']."</p>";
				echo "</div>";
			echo "</div>";

			echo "<p><strong>What Kind Of Lover You Are:</strong></p>";
			echo "<p>".$vens[0]['lover-you-are']."</p>";
			echo "<br/>";

			echo "<p><strong>What Kind Of Lover You Need:</strong></p>";
			echo "<p>".$vens[0]['lover-you-need']."</p>";
			echo "<br/>";

			echo "<p><strong>Your Marriage Potential:</strong></p>";
			echo "<p>".$vens[0]['marriage-potential']."</p>";
			echo "<br/>";

			//*********************//

			echo "<hr>";
			echo "<h2 class='center topic_head_larger'>Birth Card #7:</h2>";
			echo "<h2 class='center topic_head'>Willpower</h2>";

			echo "<p class='center'>We all have deep sexual desires. Women and men are no different!</p>";
			echo "<p class='indent'>Yet we are told to suppress those desires so we often forget about what we actually want from sex OURSELVES instead of focusing on what we can do for someone else.</p>";
			echo "<p class='indent'>This card unlocks what turns you on, what turns you off, what makes others want you, and what kind of partner drives you wild.</p>";
			echo "<p class='indent'>The type of masculine energy you most closely relate with and how you are in the bedroom. It also relates to your own energy, your willpower and your personal drive to succeed. For women, this is your ideal man. For men, this is your masculine drive.</p>";
			echo "<p class='indent'>It also relates to your own energy, your willpower and your personal drive to succeed (basically your masculine side).</p>";
			echo "<p class='indent'>Men whose Compatibility key match your key of Sexual Desire are RIGHT up your alley.</p>";
			echo "<br/>";
			echo "<p><strong>Exercise:</strong></p>";
			echo "<p>When you compare profiles, see if a woman's Relationship Card is the same as a man's Willpower Card. This indicates a very strong sexual connection.</p>";
			echo "<br/>";

			//*********************//

			echo "<hr>";
			echo "<h2 class='center topic_head'>Your Willpower Card Is ".$marss[0]['title']."</h2>";
			echo "<div class='flex'>";
				echo "<div class='image-left'><img src='public/img/".$marss[0]['major-arcana-image']."'></div>";
				
				echo "<div class='text-right'><p style='margin:0;'>".$marss[0]['introduction']."</p>";
					// 
					//Key 1 - Description
					echo "<p><strong>Description:</strong></p>";
					echo "<p>".$marss[0]['description']."</p>";
				echo "</div>";
			echo "</div>";

			echo "<p><strong>Your Turn Ons:</strong></p>";
			echo "<p>".$marss[0]['turn-ons']."</p>";	
			echo "<br/>";

			echo "<p><strong>Your Turn Offs:</strong></p>";
			echo "<p>".$marss[0]['turn-offs']."</p>";
			echo "<br/>";

			echo "<p><strong>What Makes You Sexy:</strong></p>";
			echo "<p>".$marss[0]['makes-you-sexy']."</p>";
			echo "<br/>";

			/**********************/

			echo "<hr>";
			echo "<h2 class='center topic_head_larger'>Birth Card #8:</h2>";
			echo "<h2 class='center topic_head'>Commitment</h2>";

			echo "<p class='center'>When you are committed to a relationship, you promise to play by the rules you both set out in the beginning, and are expected to live by those rules, even when your partner is nowhere to be found.</p>";
			echo "<p class='indent'>Sometimes, that commitment is a no brainer. Other times, it can be a hard decision. This is because we all commit for different reasons, and it's not uncommon to find yourself committing to one type of person, but not another.</p>";
			echo "<p class='indent'>At the same time, what makes one person say \"I do\" pushes another person away!</p>";
			echo "<p class='indent'>This birth card unlocks your commitment style by revealing what makes you commit, and at the same time, what traits make you run for the hills. For you, this card has a very serious energy and can be confining, but also supportive and provides structure, depending on how you allow it to manifest in your life.</p>";
			echo "<p class='indent'>But at the same time, it can provide you with the guidelines you need to make the right commitments and avoid getting too involved with someone who will never match your commitment style, no matter how hard they tried.</p>";
			echo "<br/>";
			echo "<p><strong>Exercise: </strong>Apply the principles of this card to your profession. It represents how you deal with rules and authority. Learn to master this card and you'll find yourself getting ahead at work. Just be prepared to accept your limitations so you don't overdo it.</p>";

			//*********************//

			echo "<hr>";
			echo "<h2 class='center topic_head'>Your Commitment Card Is ".$sats[0]['title']."</h2>";
			echo "<div class='flex'>";
				echo "<div class='image-left'><img src='public/img/".$sats[0]['major-arcana-image']."'></div>";
				
				echo "<div class='text-right'><p style='margin:0;'>".$sats[0]['introduction']."</p>";
					// 
					//Key 1 - Description
					echo "<p><strong>Description:</strong></p>";
					echo "<p>".$sats[0]['description']."</p>";
				echo "</div>";
			echo "</div>";

			echo "<p><strong>What Makes You Commit To Someone:</strong></p>";
			echo "<p>".$sats[0]['commit_to_someone']."</p>";
			echo "<br/>";	

			echo "<p><strong>What Makes You Run Away:</strong></p>";
			echo "<p>".$sats[0]['run_away']."</p>";
			echo "<br/>";

			/**********************/

			echo "<hr>";
			echo "<h2 class='center topic_head_larger'>Birth Card #9:</h2>";
			echo "<h2 class='center topic_head'>Abundance</h2>";

			echo "<p class='center'>A successful relationship strongly depends on the energy between the two of you, and how that energy flows (or doesn't flow) in the right direction.</p>";
			echo "<p class='indent'>When that energy is positive, you can grow and expand with each other in new and exciting ways. When there's negative energy, you can both come from a place of fear, scarcity, and desperation, which kills your chances at creating love and prosperity between the two of you.</p>";
			echo "<p class='indent'>This birth card is your most positive card of all. It is where you get your inspiration from, as well as what opens you up to receiving love and abundance from the Universe - not just your partner.</p>";
			echo "<p class='indent'>And most of all, it's your \"lucky card\", whether that be with finding a new partner, or the luck brought on by your most intimate connection with the partner you currently have.</p>";
			echo "<p class='indent'>This card archetype unlocks new levels of love and abundance in your life, and also reveals how you share that love and abundance with your lover.</p>";
			echo "<p class='indent'>It's a very positive card that focuses on expansion and prosperity. But it can also be your source of laziness and over indulgence if you're not careful!</p>";
			echo "<br/>";
			echo "<p><strong>Exercise: </strong></p>";
			echo "<p>Meditate on this card and focus on your past relationships. What memories come up for you?  These situations are feeding your soul with positive energy.  Try to recreate them, or situations like them, as much as possible.</p>";
			echo "<br/>";

			//*********************//

			echo "<hr>";
			echo "<h2 class='center topic_head'>Your Abundance Card Is ".$jupiters[0]['title']."</h2>";
			echo "<div class='flex'>";
				echo "<div class='image-left'><img src='public/img/".$jupiters[0]['major-arcana-image']."'></div>";
				
				echo "<div class='text-right'><p style='margin:0;'>".$jupiters[0]['introduction']."</p>";
				// 
				//Key 1 - Description
				echo "<p><strong>Description:</strong></p>";
				echo "<p>".$jupiters[0]['description']."</p>";
				echo "</div>";
			echo "</div>";

			echo "<p><strong>What Inspires You:</strong></p>";
			echo "<p>".$jupiters[0]['inspires_you']."</p>";
			echo "<br/>";

			echo "<p><strong>What Opens You Up:</strong></p>";
			echo "<p>".$jupiters[0]['opens_you_up']."</p>";
			echo "<br/>";

			echo "<p><strong>How You Get Lucky In Love:</strong></p>";
			echo "<p>".$jupiters[0]['lucky_in_love']."</p>";
			echo "<br/>";

			//*********************//

						//================================================ START OF PART 3 =================================================//

						//calculate part 3

						//get the sign and degree

						//key8
						$part_three_SunS=$reading[0]->SunS;
						$part_three_SunD=$reading[0]->SunD;
						$key8=$this->generatedb->get_part_three($part_three_SunD,$part_three_SunS);

						//key9
						$part_three_MercS=$reading[0]->MercS;
						$part_three_MercD=$reading[0]->MercD;
						$key9=$this->generatedb->get_part_three($part_three_MercD,$part_three_MercS);

						//key10
						$part_three_VenS=$reading[0]->VenS;
						$part_three_VenD=$reading[0]->VenD;
						$key10=$this->generatedb->get_part_three($part_three_VenD,$part_three_VenS);

						//key11

						$part_three_MarsS=$reading[0]->MarsS;
						$part_three_MarsD=$reading[0]->MarsD;
						$key11=$this->generatedb->get_part_three($part_three_MarsD,$part_three_MarsS);

						//key14

						$part_three_JupS=$reading[0]->JupS;
						$part_three_JupD=$reading[0]->JupD;
						$key14=$this->generatedb->get_part_three($part_three_JupD,$part_three_JupS);

						//key13

						$part_three_SatS=$reading[0]->SatS;
						$part_three_SatD=$reading[0]->SatD;
						$key13=$this->generatedb->get_part_three($part_three_SatD,$part_three_SatS);
                        echo "<div id='anchor3'></div>";
						//Part 3 Page

						echo "<hr/>";
						echo "<h2 class='center topic_head_larger'><u>Part 3:</u></h2>";
						echo "<h2 class='center topic_head'>Your Birth Cards of Romantic Destiny</h2>";

						echo "<p class='indent'>Up until now, we've only covered the \"Major Arcana\" cards ... all which represent higher principles in your life, and how they correspond to your self love, and your love life.</p>";
						echo "<p class='indent'>Now, we tap into the \"Minor Arcana\" cards ... which are just as powerful, yet focus on the specific events, situations or circumstances that exist in your life. These archetypes act as reminders of where we are coming from and how we deal with the dramas in our lives.</p>";
						echo "<p class='indent'>When these cards come up in a reading, it only means one thing.</p>";
						echo "<p class='indent'>The universe has a very specific message for you on a deeply karmic level. Depending on where the card comes up in the spread, the significance of the situation will have something to show you, teach you, or someone you meet that is part of your romantic destiny.</p>";
						echo "<p class='indent'>This can, of course, be either good or bad based on your situation. If it's an opportunity, it means it's an act of fate. If it's in a problematic position in the spread, it may mean that the father of time is trying to show you a lesson you need to learn.</p>";
						echo "<p class='indent'>Either way, PAY ATTENTION when you see these archetypes show up in your readings, both electronic and with a real person. These are the ones that mean something BIG might have happened, is happening, or could be just around the corner.</p>";
						echo "<br/>";
	
						//*********************//

						echo "<hr/>";
						echo "<h2 class='center topic_head_larger'>Birth Card #10:</h2>";
						echo "<h2 class='center topic_head'>Fate</h2>";
						echo "<p class='center'><i>This card represents the overall fate of your life. This is the \"end result\" lesson you were incarnated here to learn. Keep this in mind when forming new relationships. Do they fit?</i></p>";
						echo "<p class='center'><strong>".$key8[0]['title']."</strong></p>";
						
						echo "<div class='flex'>";
							echo "<div class='image-left'>
								<img src='public/img/minor-arcana/big/".$key8[0]['minor-arcana-image']."'>
							</div>";
							echo "<div class='text-right'>
								<p class='center' style='margin:0;'><strong>".$key8[0]['attributes']."</strong></p>
								<p>".$key8[0]['content']."</p>
							</div>";
						echo "</div>";
						echo "<br/>";
						echo "<h3 class='center'><strong>".$key8[0]['quote']."</strong></h3>";
						echo "<br/>";
						
						//*********************//

						echo "<hr/>";
						echo "<h2 class='center topic_head_larger'>Birth Card #11:</h2>";
						echo "<h2 class='center topic_head'>Intuition</h2>";
						echo "<p class='center'><i>When this card comes up in a reading, you must pay attention to your surroundings. There is a message waiting for you. It's hidden for now, but it won't be for long. It means your intuition is talking and you really need to pay attention to the clues the Universe is leaving you.</i></p>";
						echo "<p class='center'><strong>".$key9[0]['title']."</strong></p>";

						echo "<div class='flex'>";
							echo "<div class='image-left'>
							<img style='width:100%;max-width:225px;' src='public/img/minor-arcana/big/".$key9[0]['minor-arcana-image']."'>
							</div>";
							echo "<div class='text-right'>
								<p class='center' style='margin:0;'><strong>".$key9[0]['attributes']."</strong></p>
								<p>".$key9[0]['content']."</p>
							</div>";
						echo "</div>";
						echo "<br/>";
						echo "<h3 class='center'><strong>".$key9[0]['quote']."</strong></h3>";
						echo "<br/>";
			
						//*********************//

						echo "<hr/>";
						echo "<h2 class='center topic_head_larger'>Birth Card #12:</h2>";
						echo "<h2 class='center topic_head'>Romance</h2>";
						echo "<p class='center'><i>If your romance card is nearby, this card will come up in readings. For women, this archetype acts as a \"soulmate radar\" that will come up if the potential is there, or when the timing is simply just \"right.\" For men, this represents the energy of his ideal woman and what role she plays in his life. When it comes up in a reading, your soulmate is certainly around. </i></p>";
						echo "<p class='center'><strong>".$key10[0]['title']."</strong></p>";

						echo "<div class='flex'>";
							echo "<div class='image-left'>
								<img src='public/img/minor-arcana/big/".$key10[0]['minor-arcana-image']."'>
							</div>";
							echo "<div class='text-right'>
								<p class='center' style='margin:0;'><strong>".$key10[0]['attributes']."</strong></p>
								<p>".$key10[0]['content']."</p>
							</div>";
						echo "</div>";
						echo "<br/>";
						echo "<h3 class='center'><strong>".$key10[0]['quote']."</strong></h3>";
						echo "<br/>";
	
						//*********************//

						echo "<hr/>";
						echo "<h2 class='center topic_head_larger'>Birth Card #13:</h2>";
						echo "<h2 class='center topic_head'>Sex</h2>";
						echo "<p class='center'><i>If this card comes up in your reading, it's a karmic indication that your sex life is directly involved. Or, at least a situation where your will power and action is necessary.. For women, this card represents the masculine qualities that light your fire. For men, it represents his path of becoming a true warrior. If it comes up in readings, your sexual activities are normally involved.</i></p>";
						echo "<p class='center'><strong>".$key11[0]['title']."</strong></p>";

						echo "<div class='flex'>";
							echo "<div class='image-left'>
							<img style='width:100%;max-width:225px;' src='public/img/minor-arcana/big/".$key11[0]['minor-arcana-image']."'>
							</div>";
							echo "<div class='text-right'>
								<p class='center' style='margin:0;'><strong>".$key11[0]['attributes']."</strong></p>
								<p>".$key11[0]['content']."</p>
							</div>";
						echo "</div>";
						echo "<br/>";
						echo "<h3 class='center'><strong>".$key11[0]['quote']."</strong></h3>";
						echo "<br/>";

						//*********************//

						echo "<hr/>";
						echo "<h2 class='center topic_head_larger'>Birth Card #14:</h2>";
						echo "<h2 class='center topic_head'>Wealth</h2>";
						echo "<p class='center'><i>This card is your bonus in life. It's the talent you bring to class. It's directly connected to luck and abundance. When this card comes up in a reading, it's a sign that good fortune is at hand. You've worked hard and whatever is coming to you, you surely deserve it!</i></p>";
						echo "<p class='center'><strong>".$key14[0]['title']."</strong></p>";

						echo "<div class='flex'>";
							echo "<div class='image-left'>
							<img src='public/img/minor-arcana/big/".$key14[0]['minor-arcana-image']."'>
							</div>";
							echo "<div class='text-right'>
								<p class='center' style='margin:0;'><strong>".$key14[0]['attributes']."</strong></p>
								<p>".$key14[0]['content']."</p>
							</div>";
						echo "</div>";
						echo "<br/>";
						echo "<h3 class='center'><strong>".$key14[0]['quote']."</strong></h3>";
						echo "<br/>";

						//*********************//

						echo "<hr/>";
						echo "<h2 class='center topic_head_larger'>Birth Card #15:</h2>";
						echo "<h2 class='center topic_head'>Boundaries</h2>";
						echo "<p class='center'><i>The way we build structure in our lives determines our commitments to other people. This includes dealing with all the realities we'd otherwise avoid - rules, boundaries, trust issues and expectations. When this archetype comes up in a reading, it has to do with certain restrictions in your life that are not being met, like commitments that are not being met.</i></p>";
						echo "<p class='center'><strong>".$key13[0]['title']."</strong></p>";

						echo "<div class='flex'>";
							echo "<div class='image-left'>
							<img src='public/img/minor-arcana/big/".$key13[0]['minor-arcana-image']."'>
							</div>";
							echo "<div class='text-right'>
								<p class='center' style='margin:0;'><strong>".$key13[0]['attributes']."</strong></p>
								<p>".$key13[0]['content']."</p>
							</div>";
						echo "</div>";
						echo "<br/>";
                        echo "<h3 class='center'><strong>".$key13[0]['quote']."</strong></h3>";
                        echo "<div id='anchor4'></div>";
						echo "<br/>";

						//*********************//

						echo "<hr/>";
						echo "<h2 class='center topic_head'>Tarot Birth Card Chart</h2>";

						echo "<p class='center'><i>Print out this worksheet in both your profile (and your lover's profile) so you can calculate your soulmate score and see what potential you truly have as a loving couple.</p></i>";

						echo "<table style='font-family: Arial, Helvetica, sans-serif; border-collapse: collapse; width:100%; max-width:600px; margin:auto;'>";
							echo "<tr>
									<th style='border: 1px solid #000; padding: 8px;'><h3 style='margin:0;'>Birth Card:</h3></th>
									<th style='border: 1px solid #000; padding: 8px;'><h3 style='margin:0;'>Card Name:</h3></th>
								</tr>";
							echo "<tr>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>Life Path</p></td>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>".$part_one[0]->life_purpose_card."</p></td>
								</tr>";
							echo "<tr>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>Souls Purpose</p></td>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>".$part_one[0]->heart_desire_card."</p></td>
							</tr>";
							echo "<tr>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>Spirit Ascension</p></td>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>".$part_one[0]->spiritual_connection_subtitle."</p></td>
							</tr>";
							echo "<tr>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>Personality</p></td>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>".$suns[0]['title']."</p></td>
							</tr>";
							echo "<tr>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>Communication</p></td>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>".$mercs[0]['title']."</p></td>
							</tr>";
							echo "<tr>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>Relationship</p></td>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>".$vens[0]['title']."</p></td>
							</tr>";
							echo "<tr>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>Willpower</p></td>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>".$marss[0]['title']."</p></td>
							</tr>";
							echo "<tr>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>Commitment</p></td>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>".$sats[0]['title']."</p></td>
							</tr>";
							echo "<tr>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>Abundance</p></td>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>".$jupiters[0]['title']."</p></td>
							</tr>";
							echo "<tr>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>Fate</p></td>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>".$key8[0]['title']."</p></td>
							</tr>";
							echo "<tr>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>Fate</p></td>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>".$key9[0]['title']."</p></td>
							</tr>";
							echo "<tr>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>Romance</p></td>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>".$key10[0]['title']."</p></td>
							</tr>";
							echo "<tr>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>Sex</p></td>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>".$key11[0]['title']."</p></td>
							</tr>";
							echo "<tr>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>Wealth</p></td>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>".$key14[0]['title']."</p></td>
							</tr>";
							echo "<tr>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>Boundaries</p></td>
								<td style='border: 1px solid #000; padding: 8px; width: 50%;'><p class='center'>".$key13[0]['title']."</p></td>
							</tr>";
                        echo "</table>";
                        echo "<div id='anchor5'></div>";
						echo "<br/>";

						//*********************//

						echo "<hr/>";
						echo "<h2 class='center topic_head'>How To Turn Any Tarot Reading Into A Love Power Reading</h2>";

						echo "<p class='indent'>The messages you get from tarot - whether it be an online oracle or a live reader - are messages from reading the moment and the path you're set to travel at this moment in time.</p>";

						echo "<p class='indent'>The results CAN be changed based on your choices now. So don't be afraid to try readings multiple times around the same question to confirm things for yourself (so you don't jump to conclusions).</p>";

						echo "<p class='indent'><strong>Warning: </strong>Avoid treating your readings as absolute rules that will happen whether you like it or not. It doesn't work that way. You have the conscious ability to change the energy so that means you have the power to control your destiny and manifest the love life you really want.</p>";

						echo "<p class='indent'>If you don't like your outcome, choose the one you WANT and study THAT card. Your energy will shift into the same frequency of that card and your path WILL change.</p>";

						//*********************//

						echo "<p class='center'>So here are some steps on what to do, now that you have this information:</p>";

						echo "<p><strong>1. Print out this guide.</strong></p>";

						echo "<p class='indent'>At least the cheat sheet in the page above. You'll want to know these cards by heart, but for now it's good to have a cheat sheet to help you sort them out.</p>";

						echo "<p class='indent'>Also, on the same piece of paper, keep notes on when each of those cards come up for you. That will help you clarify their meaning even more (because what happens in your life is what the cards ultimately mean).</p>";

						echo "<p><strong>2. Use our free online reading software on our site.</strong></p>";

						echo "<p class='indent'>Your mind is powerful enough to influence the outcome of computer generated readings. You will get some answers and insights very fast this way.</p>";

						echo "<p class='indent'>The only problem is you can't ask a follow up question about the same card in the position it's in as you would with a live reading. A live reading always helps clarify things for you further. But that doesn't mean a quick answer from the internet could ever hurt.</p>";

						echo "<p><strong>3. Get a live reading.</strong></p>";

						echo "<p class='indent'>You can print out this guide and bring it to a live reading with one of our hand picked readers of Tarot Reading Daily inside our Secret Inner Circle Facebook Group. We only deal with real people we chose on purpose because they are all sharing our same big mission of helping the world.</p>";

						echo "<p class='indent'>If you have any questions about your Love Power Reading, our readers are always inside our Secret Inner Circle, where you can get your questions answered.  Click the link below to enter The Secret Inner Circle now.</p>";

						echo "<p class='center' style='margin-top:15px;'><a style='text-decoration:none;font-size:30px;' href='https://thesecretinnercircle.com/join-now32500473/' target='_blank'><strong>Enter The Secret Inner Circle.</strong></a></p>";

						$pdf->normal_left("",14,'',10,10);
						$pdf->ln(5);
						$pdf->SetTextColor(0,0,255);
						$pdf->SetFont('Arial','B',14);
						$pdf->Cell(0,10,"Enter The Secret Inner Circle.",0,0,'C',false, "https://thesecretinnercircle.com/join-now32500473/");
						$pdf->ln(20);
						// $pdf->Cell(0,10,"Click here to check out what readers are available,",0,0,'C',false, "https://tarotreadingdaily.com/");
						// $pdf->ln(10);
						// $pdf->Cell(0,10,"and schedule a Love Power Reading for yourself.",0,0,'C',false, "https://tarotreadingdaily.com/");
						// $pdf->ln(20);
						// $image_link = $base."public/img/click-here-button-orange-2.jpg";
						// $pdf->centreImage($image_link, true, false, "https://tarotreadingdaily.com/");


						//*********************//
						// $pdf->SetFont('Arial','',14);
						// $pdf->SetTextColor(0,0,0);
						// $pdf->AddPage();
						// $pdf->mainhead("10 Types of Love Tarot Spreads",30,'B',15);
						// $pdf->ln(5);
						// $pdf->normal_left("We have prepared specific love readings for you based on whatever situation you need insights into.",14,'',10,10);
						// $pdf->ln(5);
						// $pdf->normal_left("For Singles:",14,'B',10,10);
						// $pdf->normal_left("- Love Potential: 3 Card Relationship Reading",14,'',10,10);
						// $pdf->normal_left("- Daily Love Meter: Measure your love energy today",14,'',10,10);
						// $pdf->ln(5);
						// $pdf->normal_left("For New Relationships:",14,'B',10,10);
						// $pdf->normal_left("- Daily Flirt Tarot: One Card Love Reading",14,'',10,10);
						// $pdf->normal_left("- Does He Love You? - Yes No Relationship Reading",14,'',10,10);
						// $pdf->normal_left("- When Will You Find True Love? - 3 Card Relationship Reading (future)",14,'',10,10);
						// $pdf->ln(5);
						// $pdf->normal_left("For Growing Relationships:",14,'B',10,10);
						// $pdf->normal_left("- Is He My Soul Mate? 3 Card Reading - Relationship Destiny",14,'',10,10);
						// $pdf->normal_left("- When WIll I Get Married Marry?",14,'',10,10);
						// $pdf->normal_left("- Lover's Triangle: Choosing between two men?",14,'',10,10);
						// $pdf->ln(5);
						// $pdf->normal_left("For Failing Relationships:",14,'B',10,10);
						// $pdf->normal_left("- here Did Things Go Wrong? 3 Card Reading",14,'',10,10);
						// $pdf->ln(5);
						// $pdf->normal_left("For Former Relationships:",14,'B',10,10);
						// $pdf->normal_left("- Is it time to let go or is there hope?",14,'',10,10);
            echo "</div>";
                            
?>
            
            
<script>

$(document).ready(function(){
    $( "a.scrollLink" ).click(function( event ) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
    });
});

//config
$float_speed=1500; //milliseconds
$float_easing="easeOutQuint";
$menu_fade_speed=500; //milliseconds
$closed_menu_opacity=0.75;
 
//cache vars
$fl_menu=$("#fl_menu");
$fl_menu_menu=$("#fl_menu .menu");
$fl_menu_label=$("#fl_menu .label");
 
$(window).load(function() {
    menuPosition=$('#fl_menu').position().top;
    FloatMenu();
    $fl_menu.hover(
        function(){ //mouse over
            $fl_menu_label.fadeTo($menu_fade_speed, 1);
            $fl_menu_menu.fadeIn($menu_fade_speed);
        },
        function(){ //mouse out
            $fl_menu_label.fadeTo($menu_fade_speed, $closed_menu_opacity);
            $fl_menu_menu.fadeOut($menu_fade_speed);
        }
    );
});
 
$(window).scroll(function () {
    FloatMenu();
});
 
function FloatMenu(){
    var scrollAmount=$(document).scrollTop();
    var newPosition=menuPosition+scrollAmount;
    if($(window).height()<$fl_menu.height()+$fl_menu_menu.height()){
        $fl_menu.css("top",menuPosition);
    } else {
        $fl_menu.stop().animate({top: newPosition}, $float_speed, $float_easing);
    }
}
</script>


<?php 

	// $pdf->Output();
 }

}

?>
