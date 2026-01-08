<?php
class pdf extends CI_Controller {

	function index()
 {

			//base variables Here

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
			 $this->load->library('Myfpdf');
			 $pdf = new Myfpdf();
			 $pdf->SetFont('Arial','B',14);
			 $pdf->SetMargins(20, 15, 20);
			 //$pdf->AddPage();
			 //$image = $base."public/img/love_power_reading.jpg";
			 //$pdf->Cell(0, 30, $pdf->Image($image, 0,10,220,267), 0, 0, 'C');

			 //$pdf->centreImage($image);

				//new page; page 2

 			$pdf->AddPage();

			$pdf->subhead("Tarot Reading Daily presents your...",18,'I');
			$pdf->ln();
			$pdf->ln();
			$pdf->mainhead("Tarot Power Report",70,'B',30);
			$pdf->ln();
			$pdf->normal_center("Customized For ".$name." born ".$birthday."",14,'',30);
			$pdf->ln();
			$pdf->normal_center("Your personalized card meanings to unlock new levels of love and romance in your life. ",20,'I',15);

			//new page; page 3

			$pdf->AddPage();
			$pdf->mainhead("How To Use Your Tarot Power Report",25,'B',30);
			$pdf->normal_left("Your profile combines knowledge of astrology and numerology to express your romantic life through Tarot Cards. The reason why is that when you get your tarot cards read, you will know that these cards have special significance to you and only you.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("With this guide, you'll find new meanings and messages you'd otherwise miss from non-power readings. Without this guide, you will not know the advanced signals that the Universe is trying to send you about your love life.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("Start by going through each ARCHETYPE and getting familiar with your cards. You will be given lots of great insights into yourself and how you relate to people in love. Next you can go to the members area and generate profiles for any man you wish to examine. You can read your profile and his as well while you are doing any of the suggested readings at the end of this book.",14,'',10,10);
			$pdf->ln(5);
 			$pdf->normal_left("This means that when you meditate (or at least start into until you gaze and start day dreaming) the cards in your deck, your own subconscious mind will pop up different images that are important to YOUR life.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("Yes - just by studying these cards they will unlock images, memories and intuitions in your own mind that you MUST pay attention to, because that's how Tarot works. At the end of the day, these are just archetypes to trigger your own awakening and play your own piano, because the symphony is you.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("The first part focuses on the personal power inside YOU and unlocks your true nature. The second part presents the secret archetypes to your relationship success. The third reveals the cosmic signs and messages the Universe is sending you in readings whether you know it or not (these have to do with your ultimate fate and destiny in this life.)",14,'',10,10);
		 	$pdf->ln(5);
			$pdf->writethis("NOTE:",14,'B',10);
			$pdf->writethis("You may see the same archetype appear multiple times in your profile. That's OK! And totally normal. Sometimes, the calculations point to the same card. Just make sure to keep reading, because the MEANING is always different. When this happens, realize this archetype is even MORE important for you when it comes to creating your ideal love life. A repeated archetype should be your #1 card to meditate with because it relates to you the most. .",14,'',10,10);


			//Part 1 Page
			$pdf->AddPage();


			$pdf->mainhead("Part 1:",60,'BU',30);
			$pdf->mainhead("Your Personal Archetypes To Self Satisfaction",40,'B',20);
			$pdf->ln(5);
			$pdf->normal_left("Every good relationship begins with yourself. You are unique creature put on this earth for a reason. You deserve every good thing coming to you so by knowing what path you're on and why you are here can help you get aligned with what you truly want in life.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("We want to strip away the \"fake self\" put on us by society. That \"polite and doesn't want to interrupt\" goody two-shoes persona that the world expects of you. This is about getting down to your primal core as the sensual person you really are.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("The good news is that this goddess hood already exists in your heart, soul and spirit. It's just a matter of aligning with what you are truly here to do in this world so you can embrace your powerful nature, become your own master, and share your unique gifts with the world.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("By getting in touch with your raw, true self - you will find women are SO much easier to talk to because they feel they can be their own true selves too. Because we are all beautiful inside. It's just a matter of understanding who you really are and finding the right person who loves and accepts you just as you are.",14,'',10,10);


			//Part 1 Key 1 Page
			$pdf->AddPage();
			$pdf->mainhead("Archetype #1:",40,'B',20);
			$pdf->subhead("True Self Archetype",30,'B');
			$pdf->ln(5);
	 		$pdf->normal_left("A truly desirable human is wanted from the inside out. The more you are in touch with your purpose, the more powerful you become, and everything else begins to work itself out. Your life purpose is the only thing that truly matters to you. It indicates the person you truly are. The frequency you resonate with. The vibe you give off to others.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("The archetype to your personality is determined by performing a numerology calculation based on exact day you were born. It reveals the overall flow of who you've been all your life. Sit with this card and meditate 5 minutes per day to remind yourself of the gifts you are bringing to this world.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("The image on this archetype represents your entire life path rolled into one expression of energy. More specifically, it shows what frequency you are naturally tuned into based on your own energy.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("The energetic vibration of your true nature - just like the archetype of a piano - has a very specific tone. This is the tone of your life path and the opportunities and challenges you will face along the way.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("When this card comes up in a reading, understand that your karmic destiny is at play. It's addressing who you really are, and depending on where it comes up in a spread, it may be giving indications of your true purpose in life.",14,'',10,10);
			$pdf->ln(5);
			$pdf->writethis("Exercise: ",14,'B',10);
			$pdf->writethis("Put this card on your phone, or print it out. Sit and gaze into this card for 5 minutes in the morning before you do anything important. Get in touch with the archetype to your true nature and it won't matter what you look like. You are powerful in love no matter what because you are finally (and truly) \"being yourself.\" ",14,'',10,10);

			//UPDATABLE CONTENT HERE

			//Key 1 Card:

			//Generate Part 1

			$this->load->model("generatedb");
			$part_one=$this->generatedb->get_part_one($added_birthday);

			//Key 1 Title
		 	$pdf->AddPage();
			$pdf->mainhead("Your True Self Archetype Is ".$part_one[0]->life_purpose_card,20,'B',10);
			// //CARD image
			$pdf->card($part_one[0]->life_purpose_image);
			$pdf->normal_left(trim($part_one[0]->life_purpose_introduction),14,'',10);
			//
			// //Key 1 - Description
			$pdf->ln(5);
			$pdf->right_title("Description:");

			$pdf->right_content(trim($part_one[0]->life_purpose_description));
			//
			// //Key 1 - Inner Nature
			$pdf->ln(5);
			$pdf->content("Inner Nature:",trim($part_one[0]->life_purpose_inner_nature));
			$pdf->ln(5);
			// //Key 1 - Blind Spots
			$pdf->content("Blind Spots:",trim($part_one[0]->life_purpose_blind_spots));
			$pdf->ln(5);
			// //Key 1 - Relationship Values


			$pdf->content("Relationship Values:",trim($part_one[0]->life_purpose_relationship_values));
			//
			// //Key 1 - Secret Love Power
			$pdf->ln(5);
			$pdf->content("Secret Love Power:",trim($part_one[0]->life_purpose_secret_love_power));

			//if 19, show 2nd life purpose
			if($added_birthday==19)
			{

				//if 19, there are two life purpose

				$part_one_b=$this->generatedb->get_part_one("19b");

				//Key 1 Title
			 	$pdf->AddPage();
				$pdf->mainhead("Your 2nd True Self Archetype Is ".$part_one_b[0]->life_purpose_card,20,'B',10);
				// //CARD image
				$pdf->card($part_one_b[0]->life_purpose_image);
				$pdf->normal_left(trim($part_one_b[0]->life_purpose_introduction),14,'',10);
				//
				// //Key 1 - Description
				$pdf->ln(5);
				$pdf->right_title("Description:");

				$pdf->right_content(trim($part_one_b[0]->life_purpose_description));
				//
				// //Key 1 - Inner Nature
				$pdf->ln(5);
				$pdf->content("Inner Nature:",trim($part_one_b[0]->life_purpose_inner_nature));
				$pdf->ln(5);
				// //Key 1 - Blind Spots
				$pdf->content("Blind Spots:",trim($part_one_b[0]->life_purpose_blind_spots));
				$pdf->ln(5);

				$pdf->content("Relationship Values:",trim($part_one_b[0]->life_purpose_relationship_values));

				// //Key 1 - Secret Love Power
				$pdf->ln(5);
				$pdf->content("Secret Love Power:",trim($part_one_b[0]->life_purpose_secret_love_power));

			}


			//Part 1 Key 2 Page
			$pdf->AddPage();
			$pdf->mainhead("Archetype #2",40,'B',20);
			$pdf->subhead("Soulmate Archetype",30,'B');
			$pdf->ln(5);
	 		$pdf->normal_left("The archetype to your heart is what fulfils you deeply at a soul level.",14,'',10,10);
	 		$pdf->ln(5);
			$pdf->normal_left("Your soul has a unique purpose that spans over many life times. It's that deep yearning you feel inside to be a part of something. It's the pulling you feel to make something significant out of your life, no matter where you're at today.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("Some lifetimes are spent preparing what you need to fulfil your soul's purpose. Other lifetimes are spent in pursuit of manifesting that purpose into being.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("There are principles that we live by, and if we embody these principles (especially in our romantic relationships) we nurture our souls. If we don't, we feel frustrated and sad and alone, even in a room full of people you know.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("Your Soulmate Archetype is calculated from the archetype to your True Nature. It will help you get in touch with what you truly need in this lifetime. Study the archetype to your soul and ask yourself if your current romantic relationships are helping you fulfil your soul or not?",14,'',10,10);

			//Part 1 Key 2 Card 1
			$pdf->AddPage();
			$pdf->ln(5);
			$pdf->mainhead("Your Soulmate Archetype Is ".trim($part_one[0]->heart_desire_card),20,'B',10);
			$pdf->card($part_one[0]->heart_desire_image);
			//Key 2 Description
			$pdf->right_title("Description:");
			$pdf->right_content(trim($part_one[0]->heart_desire_description));

			$pdf->ln(5);

			//Key 2 Your Soul's Purpose:
			$pdf->content("Your Soul's Purpose:",trim($part_one[0]->heart_desire_soul_purpose));
			$pdf->ln(5);
			//Key 2 What Your Heart Really Wants: :

		 $pdf->AddPage();

			$pdf->content("What Your Heart Really Wants: ",trim($part_one[0]->heart_desire_heart_really_wants));
			$pdf->ln(5);
			//Key 2 EXERCISE:
			if($added_birthday==10)
			{
		 $pdf->ln();
			}
			$pdf->content("EXERCISE: ",trim($part_one[0]->heart_desire_exercise));

			//Part 1 Key 3 Page
			$pdf->AddPage();
			$pdf->mainhead("Archetype #3:",40,'B',20);
			$pdf->subhead("Spirit Archetype",30,'B');
			$pdf->ln(5);
	 		$pdf->normal_left("These 4 archetypes are connected to your Soulmate Archetype. These archetypes are connected to the opportunities that come up in your life, and the lessons you should learn from them.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("When you see these archetypes come up in a reading, realize that they are reminding you of your karmic path. There is something your spirit needs to do or receive in order to continue to grow. It's a message from the universe that your spiritual purpose is involved with whatever question you are asking.",14,'',10,10);
		 	$pdf->ln(5);
			$pdf->normal_left("You'll notice each archetype has the same number. These are all archetypes of the \"Minor Arcana\" which are all specific moments in a storyline based on the suit of the cards.",14,'',10,10);
		 	$pdf->ln(5);
			$pdf->normal_left("In Wands it has to do with growing your willpower and drive.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("In Cups it has to do with growing your emotional capacity for love.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("In Swords it has to do with a spiritual truth you must be willing to accept.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("In Coins it has to do with your financial situation, your body and the practical 'stuff' in your life.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("Keep these in mind when you're going through both windfalls and tough times. If you see them, it's a sign that the reason this is happening is way beyond your control.",14,'',10,10);


		 	$pdf->AddPage();
			$pdf->normal_center("Your 4 Archetypes To Spiritual Connection",20,'B',10);
			$pdf->ln(5);
			$pdf->normal_center(trim($part_one[0]->spiritual_connection_title),15,'B',10);
			$pdf->ln(5);
			$image1 = $base."public/img/minor-arcana/small/wands/".$part_one[0]->spiritual_connection_image_one;
			$image2 = $base."public/img/minor-arcana/small/coins/".$part_one[0]->spiritual_connection_image_two;
			$image3 = $base."public/img/minor-arcana/small/swords/".$part_one[0]->spiritual_connection_image_three;
			$image4 = $base."public/img/minor-arcana/small/cups/".$part_one[0]->spiritual_connection_image_four;
			$pdf->SetX(53);
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

			$pdf->normal_center(trim($part_one[0]->spiritual_connection_subtitle),15,"B",10);
			$pdf->ln(5);
			$pdf->normal_center(trim($part_one[0]->spiritual_lesson),14,"",8);


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


			$pdf->AddPage();
			$pdf->mainhead("Part 2:",60,'BU',30);
			$pdf->mainhead("Your Secret Archetypes To Endless Romance",40,'B',20);
			$pdf->ln(5);
			$pdf->normal_left("Every successful relationship happens because two people naturally \"click\" together and are willing to stay together.",14,'',10, 10);
			$pdf->ln(5);
			$pdf->normal_left("The archetypes in this section come from your personal Astrology natal chart and give you clues on your true nature in relationships and how to best approach them so you experience the love and adoration you desire and deserve. You have three planets in Scorpio, which means you get the Transformation card 3 times. How intense you are!",14,'',10, 10);
			$pdf->ln(5);
			$pdf->normal_left("It also helps you figure out who you are compatible with and who you are not. There are just some red flags that you shouldn't even attempt. Meanwhile, there are other great connections just waiting to be made.",14,'',10, 10);
			$pdf->ln(5);
			$pdf->normal_left("Use this section to understand yourself, then run a your partner (or potential partner) to understand them just as well. Compare the cards and see if there is harmony.",14,'',10, 10);

			//*********************//

			$pdf->AddPage();
			$pdf->mainhead("Archetype #4:",40,'B',20);
			$pdf->subhead("Ego Archetype",30,'B');

	 		$pdf->normal_left("Tired of picking the wrong partner? Does it seem like every time you meet someone new, it doesn't take long to find out that your personalities clash?",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("It's far more common than not. Especially once we stop being so much in our egos, lower our defenses, and show each other our true selves.",14,'',10,10);
		 	$pdf->ln(5);
			$pdf->normal_left("What better way to get ahead of a good (or bad) relationship than to know your OWN natural tendencies and behaviors, then compare them to someone else. It's like reading the cliff notes on whether or not you two will \"get along\" way before you even meet up.",14,'',10,10);
		 	$pdf->ln(5);
			$pdf->normal_left("This is the archetype to how you express yourself and how you interact with others. Who you really are when YOU are being YOU. This is the part of you you are showing to the world whether you know it or not, so the more you get in tune with it's energy, the best you can properly express yourself without fear of being judged. Plus, you'll know what kind of potential partners you're compatible with, even as friends (and which ones to avoid). ",14,'',10,10);
			$pdf->ln(5);
 			$pdf->writethis("Exercise: ",14,'B',10);
			$pdf->writethis("When you run your partner's profile, compare their Ego Archetype with YOUR Ego Archetype and see if there is a conflict. You will see what you are compatible with or conflict with at the bottom of the next page.",14,'',10,10);

			//*********************//



			$pdf->AddPage();
			$pdf->mainhead("\n Your Ego Archetype Is ".$suns[0]['title'],20,'B',10);
			$pdf->card($suns[0]['major-arcana-image']);
			$pdf->normal_left(trim($suns[0]['introduction']),14,'',10);
			$pdf->ln(5);

			$pdf->right_title("Description:");
			$pdf->right_content(trim($suns[0]['description']));
			$pdf->ln(5);
			$pdf->content("What You're All About:",trim($suns[0]['all-about']));
			$pdf->ln(5);
			$pdf->content("What You Look For In Love:",trim($suns[0]['look-for-in-love']));
			$pdf->ln(5);
			$pdf->content("What You Will Not Tolerate:",trim($suns[0]['not-tolerate']));
			$pdf->ln(5);
			$pdf->content("Who You Vibe With:",trim($suns[0]['vibe-with']));
			$pdf->ln(5);
			$pdf->content("Who To Avoid:",trim($suns[0]['avoid']));





			//*********************//

			$pdf->AddPage();
			$pdf->mainhead("Archetype #5: ",40,'B',20);
			$pdf->subhead("Mental Archetype",30,'B');

			$pdf->normal_left("Communication is the cornerstone of all relationships. And when you know how you you naturally communicate, you can know what to expect from yourself and from your partner.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("This is the archetype to unlocking Understanding between you and your partner. Your archetype to Understanding will help you figure out all those tough questions you've been wondering about because it helps you organize the way you think about men completely.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("It's also a reflection of your intellect and how you process information. You learn how you operate on an intellectual level so you can communicate clearly and effectively with the people in your life.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("Through this archetype, you will learn to process your questions and concerns with your partner within a safe container that doesn't drive you mental with endless \"what if's\" and \"if onlys\" that could otherwise haunt you for years. Not to mention, their behavior - especially the way they think, reason, and make decisions - will start to make a lot more sense once you run their profile.",14,'',10,10);
			$pdf->ln(5);
			$pdf->writethis("Exercise: ",14,'B',10);
			$pdf->writethis("Keep this image handy on your phone, or even print it out, and have it around when you are getting into an important conversation. Tuning into its energy will help you communicate your thoughts clearly.",14,'',10,10);

			//*********************//

			$pdf->AddPage();
			$pdf->mainhead("\n Your Mental Archetype ".$mercs[0]['title'],20,'B',10);
			$pdf->card($mercs[0]['major-arcana-image']);
			$pdf->normal_left(trim($mercs[0]['introduction']),14,'',10);
			$pdf->ln(5);

			$pdf->right_title("Description:");
			$pdf->right_content(trim($mercs[0]['description']));
			$pdf->ln(5);
			$pdf->content("How You Think:",trim($mercs[0]['how-you-think']));
			$pdf->AddPage();
			$pdf->content("How You Communicate:",trim($mercs[0]['how-you-communicate']));
			$pdf->content("How You Resolve Conflict:",trim($mercs[0]['how-you-resolve-conflict']));
			//*********************//

			$pdf->AddPage();
			$pdf->mainhead("Archetype #6:",40,'B',20);
			$pdf->subhead("Romance Archetype",30,'B');

			$pdf->normal_left("Everyone has their own unique concept of what love means to them. We each experience love differently as we experience our feelings throughout the day.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("We each express love differently and it determines what kind of lovers we are when involved in an intimate partnership. We each want different things - some to get married, others to never settle down. All of these things are revealed when we unlock your Archetype to Romantic Passion.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("This archetype is about aligning you with your sensual energy - the way you express your love to the world. Naturally, you'll want to understand and align yourself with these instincts so you can manifest a better partnership - with the person you're with now, or with someone new.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("This archetype reveals the way you relate with yourself and with others. It acts as a mirror of love you portray to the world. And the more clear you get with your own inner mirror, the more true the love is that will ultimately find you. For women, this is her feminine side. For men, this is his ideal woman.",14,'',10,10);
			$pdf->ln(5);
			$pdf->writethis("Exercise: ",14,'B',10);
			$pdf->writethis("When you compare profiles, see if a man's Archetype to Romantic Passion is the same as a woman's Archetype to Ego. If it's the same, it indicates a very strong love connection.",14,'',10,10);

			//*********************//

			$pdf->AddPage();
			$pdf->mainhead("\n Your Romance Archetype Is ".$vens[0]['title'],20,'B',10);
			$pdf->card($vens[0]['major-arcana-image']);
			$pdf->normal_left(trim($vens[0]['introduction']),14,'',10);
			$pdf->ln(5);

			$pdf->right_title("Description:");
			$pdf->right_content(trim($vens[0]['description']));
			$pdf->ln(5);
			$pdf->content("What Kind Of Lover You Are:",trim($vens[0]['lover-you-are']));
			$pdf->ln(5);
			$pdf->AddPage();
			$pdf->content("What Kind Of Lover You Need:",trim($vens[0]['lover-you-need']));
			$pdf->ln(5);
			$pdf->content("Your Marriage Potential:",trim($vens[0]['marriage-potential']));

			//*********************//


			$pdf->AddPage();
			$pdf->mainhead("Archetype #7:",40,'B',20);
			$pdf->subhead("Sex Archetype",30,'B');

			$pdf->normal_center("We all have deep sexual desires. Women and men are no different!",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("Yet we are told to suppress those desires so we often forget about what we actually want from sex OURSELVES instead of focusing on what we can do for someone else.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("This archetype unlocks what turns you on, what turns you off, what makes others want you, and what kind of partner drives you wild.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("The type of masculine energy you most closely relate with and how you are in the bedroom. It also relates to your own energy, your willpower and your personal drive to succeed. For women, this is your ideal man. For men, this is your masculine drive.",14,'',10,10);
			$pdf->ln(5);
			$pdf->writethis("Exercise: ",14,'B',10);
			$pdf->writethis("When you compare profiles, see if a woman's Sex Archetype is the same as a man's Ego Archetype. This indicates a very strong sexual connection.",14,'',10,10);

			//*********************//

			$pdf->AddPage();
			$pdf->mainhead("\n Your Sex Archetype Is ".$marss[0]['title'],20,'B',10);
			$pdf->card($marss[0]['major-arcana-image']);
			$pdf->normal_left(trim($marss[0]['introduction']),14,'',10);
			$pdf->ln(5);

			$pdf->right_title("Description:");
			$pdf->right_content(trim($marss[0]['description']));
			$pdf->ln(5);
			$pdf->content("Your Turn Ons:",trim($marss[0]['turn-ons']));
			$pdf->ln(5);
			$pdf->AddPage();
			$pdf->content("Your Turn Offs:",trim($marss[0]['turn-offs']));
			$pdf->ln(5);
			$pdf->content("What Makes You Sexy:",trim($marss[0]['makes-you-sexy']));

			/**********************/
			$pdf->AddPage();
			$pdf->mainhead("Archetype #8:",40,'B',20);
			$pdf->subhead("Marriage Archetype",30,'B');

			$pdf->normal_center("When you are committed to a relationship, you promise to play by the rules you both set out in the beginning, and are expected to live by those rules, even when your partner is nowhere to be found.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("Sometimes, that commitment is a no brainer. Other times, it can be a hard decision. This is because we all commit for different reasons, and it’s not uncommon to find yourself committing to one type of person, but not another.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left('At the same time, what makes one person say "I do" pushes another person away!',14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("This archetype unlocks your commitment style by revealing what makes you commit, and at the same time, what traits make you run for the hills.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("This archetype has a very serious energy and can be confining.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("But at the same time, it can provide you with the structure you need to make the right commitments and avoid getting too involved with someone who will never match your commitment style, no matter how hard they tried.",14,'',10,10);
			$pdf->ln(5);
			$pdf->writethis("Exercise: ",14,'B',10);
			$pdf->writethis("Match your archetype style in love with your archetype style to your profession. You'll find many similarities in the way you operate and handle yourself.",14,'',10,10);

			//*********************//

			$pdf->AddPage();
			$pdf->mainhead("Archetype #8:",40,'B',20);
			$pdf->mainhead("\n Your Marriage Archetype Is ".$sats[0]['title'],20,'B',10);
			$pdf->card($sats[0]['major-arcana-image']);
			$pdf->normal_left(trim($sats[0]['introduction']),14,'',10);
			$pdf->ln(5);

			$pdf->right_title("Description:");
			$pdf->right_content(trim($sats[0]['description']));
			$pdf->ln(5);
			$pdf->content("What Makes You Commit To Someone:",trim($sats[0]['commit_to_someone']));
			$pdf->ln(5);
			$pdf->content("What Makes You Run Away:",trim($sats[0]['run_away']));


			/**********************/
			$pdf->AddPage();
			$pdf->mainhead("Archetype #9:",40,'B',20);
			$pdf->subhead("Fortune Archetype",30,'B');

			$pdf->normal_center("A successful relationship strongly depends on the energy between the two of you, and how that energy flows (or doesn’t flow) in the right direction.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("When that energy is positive, you can grow and expand with each other in new and exciting ways. When there's negative energy, you can both come from a place of fear, scarcity, and desperation, which kills your chances at creating love and prosperity between the two of you.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left('This archetype is your most positive archetype of all. It is where you get your inspiration from, as well as what opens you up to receiving love and abundance from the Universe - not just your partner.',14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("And most of all, it's your archetype to getting lucky, whether that be with finding a new partner, or the luck brought on by your most intimate connection with the partner you currently have.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("This archetypeunlocks new levels of love and abundance in your life, and also reveals how you share that love and abundance with your lover.",14,'',10,10);
			$pdf->ln(5);
			$pdf->normal_left("It's a very positive archetype that focuses on expansion and prosperity. But it can also be your source of laziness and over indulgence if you're not careful!",14,'',10,10);
			$pdf->AddPage();
			$pdf->writethis("Exercise: ",14,'B',10);
			$pdf->writethis("Meditate on this card and focus on your past relationships. What memories come up for you?  These situations are feeding your soul with positive energy.  Try to recreate them, or situations like them, as much as possible.",14,'',10,10);

			//*********************//

			$pdf->AddPage();
			$pdf->mainhead("Archetype #9:",40,'B',20);
			$pdf->mainhead("\n Your Fortune Archetype Is".$jupiters[0]['title'],20,'B',10);
			$pdf->card($jupiters[0]['major-arcana-image']);
			$pdf->normal_left(trim($jupiters[0]['introduction']),14,'',10);
			$pdf->ln(5);

			$pdf->right_title("Description:");
			$pdf->right_content(trim($jupiters[0]['description']));
			$pdf->ln(5);
			$pdf->content("What Inspires You:",trim($jupiters[0]['inspires_you']));
			$pdf->ln(5);
			$pdf->content("What Opens You Up:",trim($jupiters[0]['opens_you_up']));
			$pdf->ln(5);
			$pdf->content("How You Get Lucky In Love:",trim($jupiters[0]['lucky_in_love']));

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

						//Part 3 Page

						$pdf->AddPage();
						$pdf->mainhead("Part 3:",60,'BU',30);
						$pdf->mainhead("The Secret Archetypes To Unlocking Your Destiny",40,'B',20);
						$pdf->ln(5);
						$pdf->normal_left("Up until now, we've only covered the \"Major Arcana\" archetypes ... all which represent higher principles in your life, and how they correspond to your self love, and your love life.",14,'',10,10);
						$pdf->ln(5);
						$pdf->normal_left("Now, we tap into the \"Minor Arcana\" archetypes ... which are just as powerful, yet focus on the specific events, situations or circumstances that exist in your life. These archetypes act as reminders of where we are coming from and how we deal with the dramas in our lives.",14,'',10,10);
						$pdf->ln(5);
						$pdf->normal_left("When these cards come up in a reading, it only means one thing.",14,'',10,10);
						$pdf->ln(5);
						$pdf->normal_left("The universe has a very specific message for you on a deeply karmic level. Depending on where the card comes up in the spread, the significance of the situation will have something to show you, teach you, or someone for you to meet that is part of your romantic destiny.",14,'',10,10);
						$pdf->ln(5);
						$pdf->normal_left("This can, of course, be either good or bad based on your situation. If it's an opportunity, it means it's an act of fate. If it's in a problematic position in the spread, it may mean that the father of time is trying to show you a lesson you need to learn.",14,'',10,10);
						$pdf->ln(5);
						$pdf->normal_left("Either way, PAY ATTENTION when you see these archetypes show up in your readings, both electronic and with a real person. These are the ones that mean something BIG might have happened, is happening, or could be just around the corner.",14,'',10,10);

						//*********************//

					  	$pdf->AddPage();
						$pdf->keypage("Archetype #10:", "Destiny Archetype","");
						$pdf->normal_center("This archetyperepresents the overall fate of your life. This is the \"end result\" lesson you were incarnated here to learn. Keep this in mind when forming new relationships. Do they fit?",14,"I",8);
						$pdf->ln(3);
						$pdf->normal_center($key8[0]['title'],14,"B",10);
						$pdf->card("minor-arcana/big/".$key8[0]['minor-arcana-image']);
						$pdf->key_center_content(trim($key8[0]['attributes']),85,"B",10);
						$pdf->ln(3);
						$pdf->key_right_content(trim($key8[0]['content']),85,"",10);
						$pdf->ln(3);
						$pdf->normal_center(trim($key8[0]['quote']),14,"B",10);

						//*********************//

						$pdf->AddPage();
						$pdf->keypage("Archetype #11:", "Honesty Archetype","");
						$pdf->normal_center("When this archetype comes up in a reading, you must pay attention to your surroundings. There is a message waiting for you. It's hidden for now, but it won't be for long. It means your intuition is talking and you really need to pay attention to the clues the Universe is leaving you.",14,"I",8);
						$pdf->ln(3);
						$pdf->normal_center($key9[0]['title'],14,"B",10);
						$pdf->card("minor-arcana/big/".$key9[0]['minor-arcana-image']);
						$pdf->key_center_content(trim($key9[0]['attributes']),85,"B",10);
						$pdf->ln(3);
						$pdf->key_right_content(trim($key9[0]['content']),85,"",10);
						$pdf->ln(3);
						$pdf->normal_center(trim($key9[0]['quote']),14,"B",10);

						//*********************//

						$pdf->AddPage();
						$pdf->keypage("Archetype #12:", "Pleasure Archetype","");
						$pdf->normal_center("If your Pleasure Archetype is nearby, this card will come up in readings. For women, this archetype acts as a \"soulmate radar\" that will come up if the potential is there, or when the timing is simply just \"right.\" For men, this represents the energy of his ideal woman and what role she plays in his life. When it comes up in a reading, your soulmate is certainly around. ",14,"I",8);
						$pdf->ln(3);
						$pdf->normal_center($key10[0]['title'],14,"B",10);
						$pdf->card("minor-arcana/big/".$key10[0]['minor-arcana-image']);
						$pdf->key_center_content(trim($key10[0]['attributes']),85,"B",10);
						$pdf->ln(3);
						$pdf->key_right_content(trim($key10[0]['content']),85,"",10);
						$pdf->ln(3);
						$pdf->normal_center(trim($key10[0]['quote']),14,"B",10);

						//*********************//

						$pdf->AddPage();
						$pdf->keypage("Archetype #13:", "Lust Archetype","");
						$pdf->normal_center("If this card comes up in your reading, it's a karmic indication that your sex life is directly involved. Or, at least a situation where your will power and action is necessary.. For women, this card represents the masculine qualities that light your fire. For men, it represents his path of becoming a true warrior. If it comes up in readings, your sexual activities are normally involved.",14,"I",8);
						$pdf->ln(3);
						$pdf->normal_center($key11[0]['title'],14,"B",10);
						$pdf->card("minor-arcana/big/".$key11[0]['minor-arcana-image']);
						$pdf->key_center_content(trim($key11[0]['attributes']),85,"B",10);
						$pdf->ln(3);
						$pdf->key_right_content(trim($key11[0]['content']),85,"",10);
						$pdf->ln(3);
						$pdf->normal_center(trim($key11[0]['quote']),14,"B",10);

						//*********************//

						$pdf->AddPage();
						$pdf->keypage("Archetype #14:", "Greed Archetype","");
						$pdf->normal_center("This archetype is your bonus in life. It's the talent you bring to class. It's directly connected to luck and abundance. When this card comes up in a reading, it's a sign that good fortune is at hand. You've worked hard and whatever is coming to you, you surely deserve it!",14,"I",8);
						$pdf->ln(3);
						$pdf->normal_center($key14[0]['title'],14,"B",10);
						$pdf->card("minor-arcana/big/".$key14[0]['minor-arcana-image']);
						$pdf->key_center_content(trim($key14[0]['attributes']),85,"B",10);
						$pdf->ln(3);
						$pdf->key_right_content(trim($key14[0]['content']),85,"",10);
						$pdf->ln(3);
						$pdf->normal_center(trim($key14[0]['quote']),14,"B",10);

						//*********************//

						$pdf->AddPage();
						$pdf->keypage("Archetype #15:", "Divorce Archetype","");
						$pdf->normal_center("The way we build structure in our lives determines our commitments to other people. This includes dealing with all the realities we'd otherwise avoid - rules, boundaries, trust issues and expectations. When this archetype comes up in a reading, it has to do with certain restrictions in your life that are not being met, like commitments that are not being met.",14,"I",8);
						$pdf->ln(3);
						$pdf->normal_center($key13[0]['title'],14,"B",10);
						$pdf->card("minor-arcana/big/".$key13[0]['minor-arcana-image']);
						$pdf->key_center_content(trim($key13[0]['attributes']),85,"B",10);
						$pdf->ln(3);
						$pdf->key_right_content(trim($key13[0]['content']),85,"",10);
						$pdf->ln(3);
						$pdf->normal_center(trim($key13[0]['quote']),14,"B",10);

						//*********************//


						$pdf->AddPage();
						$pdf->subhead("Soulmate Archetype Chart",30,'B');

						$pdf->normal_center("Print out this worksheet in both your profile (and your lover's profile) so you can calculate your soulmate score and see what potential you truly have as a loving couple.",14,"I",8);
						$pdf->ln(5);
						$pdf->SetFont('Arial','B',18);
						$pdf->Cell(85,15,'Soulmate Archetype:',1,0,'C','0');
						$pdf->Cell(85,15,'Tarot Card Name:','TLRB',1,'C',0);  // cell with left and right borders
						$pdf->SetFont('Arial','',16);

						$pdf->Cell(85,15,'Compatibility','LRB',0,'C','0');
						$pdf->Cell(85,15,$suns[0]['title'],'LRB',1,'C',0);  // cell with left and right borders

						$pdf->Cell(85,15,'Understanding','LRB',0,'C','0');
						$pdf->Cell(85,15,$mercs[0]['title'],'LRB',1,'C',0);  // cell with left and right borders

						$pdf->Cell(85,15,'Romance','LRB',0,'C','0');
						$pdf->Cell(85,15,$vens[0]['title'],'LRB',1,'C',0);  // cell with left and right borders

						$pdf->Cell(85,15,'Desire','LRB',0,'C','0');
						$pdf->Cell(85,15,$part_one[0]->heart_desire_card,'LRB',1,'C',0);  // cell with left and right borders

						$pdf->Cell(85,15,'Commitment','LRB',0,'C','0');
						$pdf->Cell(85,15,$sats[0]['title'],'LRB',1,'C',0);  // cell with left and right borders

						$pdf->Cell(85,15,'Success','LRB',0,'C','0');
						$pdf->Cell(85,15,$jupiters[0]['title'],'LRB',1,'C',0);  // cell with left and right borders

						$pdf->Cell(170,15,'','LRB',1,'C',0);  // cell with left and right borders

						$pdf->Cell(85,15,'Life Path','LRB',0,'C','0');
						$pdf->Cell(85,15,$key8[0]['title'],'LRB',1,'C',0);  // cell with left and right borders

						$pdf->Cell(85,15,'Love','LRB',0,'C','0');
						$pdf->Cell(85,15,$key10[0]['title'],'LRB',1,'C',0);  // cell with left and right borders

						$pdf->Cell(85,15,'Sex Drive','LRB',0,'C','0');
						$pdf->Cell(85,15,$key11[0]['title'],'LRB',1,'C',0);  // cell with left and right borders

						$pdf->Cell(85,15,'Abundance','LRB',0,'C','0');
						$pdf->Cell(85,15,$key14[0]['title'],'LRB',1,'C',0);  // cell with left and right borders

						$pdf->Cell(85,15,'Marriage','LRB',0,'C','0');
						$pdf->Cell(85,15,$key13[0]['title'],'LRB',1,'C',0);  // cell with left and right borders


						//*********************//

						$pdf->AddPage();
						$pdf->mainhead("How To Turn Any Tarot Reading Into A Love Power Reading",30,'B',15);
						$pdf->ln(5);
						$pdf->normal_left("The messages you get from tarot - whether it be an online oracle or a live reader - are messages from reading the moment and the path you're set to travel at this moment in time.",14,'',10,10);

						$pdf->normal_left("The results CAN be changed based on your choices now. So don't be afraid to try readings multiple times around the same question to confirm things for yourself (so you don't jump to conclusions).",14,'',10,10);

						$pdf->normal_left("Warning: Avoid treating your readings as absolute rules that will happen whether you like it or not. It doesn't work that way. You have the conscious ability to change the energy so that means you have the power to control your destiny and manifest the love life you really want.",14,'',10,10);

						$pdf->normal_left("If you don't like your outcome, choose the one you WANT and study THAT card. Your energy will shift into the same frequency of that card and your path WILL change.",14,'',10,10);

						//*********************//
						$pdf->ln(5);

						$pdf->normal_left("So here are some steps on what to do, now that you have this information:",14,'',10,10);

						$pdf->normal_left("1. Print out this guide.",14,'B',10,10);

						$pdf->normal_left("At least the cheat sheet in the page above. You'll want to know these cards by heart, but for now it's good to have a cheat sheet to help you sort them out.",14,'',10,10);

						$pdf->normal_left("Also, on the same piece of paper, keep notes on when each of those cards come up for you. That will help you clarify their meaning even more (because what happens in your life is what the cards ultimately mean).",14,'',10,10);

						$pdf->ln(5);

						$pdf->normal_left("2. Use our free online reading software on our site.",14,'B',10,10);

						$pdf->normal_left("Your mind is powerful enough to influence the outcome of computer generated readings. You will get some answers and insights very fast this way.",14,'',10,10);

						$pdf->normal_left("The only problem is you can't ask a follow up question about the same card in the position it's in as you would with a live reading. A live reading always helps clarify things for you further. But that doesn't mean a quick answer from the internet could ever hurt.",14,'',10,10);

						$pdf->ln(5);

						$pdf->normal_left("3. Get a live reading.",14,'B',10,10);

						$pdf->normal_left("You can print out this guide and bring it to a live reading with one of our hand picked readers of Tarot Reading Daily. We only deal with real people we chose on purpose because they are all sharing our same big mission of helping the world.",14,'',10,10);

						$pdf->normal_left("When you take your Tarot Power Profile to our readers, you can tell them and they will use the information to further explain your love situation for you. It will make your live reading hundreds of times more effective, even at the same price.",14,'',10,10);
						$pdf->ln(5);
						$pdf->SetTextColor(0,0,255);
						$pdf->SetFont('Arial','B',14);
						$pdf->Cell(0,10,"Click here to check out what readers are available,",0,0,'C',false, "https://tarotreadingdaily.com/");
						$pdf->ln(10);
						$pdf->Cell(0,10,"and schedule a Love Power Reading for yourself.",0,0,'C',false, "https://tarotreadingdaily.com/");
						$pdf->ln(20);
						$image_link = $base."public/img/click-here-button-orange-2.jpg";
						$pdf->centreImage($image_link, true, false, "https://tarotreadingdaily.com/");


						//*********************//
						$pdf->SetFont('Arial','',14);
						$pdf->SetTextColor(0,0,0);
						$pdf->AddPage();
						$pdf->mainhead("10 Types of Love Tarot Spreads",30,'B',15);
						$pdf->ln(5);
						$pdf->normal_left("We have prepared specific love readings for you based on whatever situation you need insights into.",14,'',10,10);
						$pdf->ln(5);
						$pdf->normal_left("For Singles:",14,'B',10,10);
						$pdf->normal_left("- Love Potential: 3 Card Relationship Reading",14,'',10,10);
						$pdf->normal_left("- Daily Love Meter: Measure your love energy today",14,'',10,10);
						$pdf->ln(5);
						$pdf->normal_left("For New Relationships:",14,'B',10,10);
						$pdf->normal_left("- Daily Flirt Tarot: One Card Love Reading",14,'',10,10);
						$pdf->normal_left("- Does He Love You? - Yes No Relationship Reading",14,'',10,10);
						$pdf->normal_left("- When Will You Find True Love? - 3 Card Relationship Reading (future)",14,'',10,10);
						$pdf->ln(5);
						$pdf->normal_left("For Growing Relationships:",14,'B',10,10);
						$pdf->normal_left("- Is He My Soul Mate? 3 Card Reading - Relationship Destiny",14,'',10,10);
						$pdf->normal_left("- When WIll I Get Married Marry?",14,'',10,10);
						$pdf->normal_left("- Lover's Triangle: Choosing between two men?",14,'',10,10);
						$pdf->ln(5);
						$pdf->normal_left("For Failing Relationships:",14,'B',10,10);
						$pdf->normal_left("- here Did Things Go Wrong? 3 Card Reading",14,'',10,10);
						$pdf->ln(5);
						$pdf->normal_left("For Former Relationships:",14,'B',10,10);
						$pdf->normal_left("- Is it time to let go or is there hope?",14,'',10,10);


	$pdf->Output();

 }

}

?>
