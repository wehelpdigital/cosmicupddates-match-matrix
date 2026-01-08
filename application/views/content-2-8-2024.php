

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>public/js/jquery.easing.1.3.js" type="text/javascript"></script>



<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link rel = "stylesheet" type = "text/css"  href = "<?php echo base_url(); ?>public/content.css">

<script>

    function demoFromHTML() {
 
        
        // var pdf = new jsPDF('p', 'pt', 'letter');

        // // source can be HTML-formatted string, or a reference
        // // to an actual DOM element from which the text will be scraped.

        // source = $('#content')[0];

        // // we support special element handlers. Register them with jQuery-style 
        // // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
        // // There is no support for any other type of selectors 
        // // (class, of compound) at this time.

        // specialElementHandlers = {
        //     // element with id of "bypass" - jQuery style selector

        //     '#bypassme': function (element, renderer) {

        //         // true = "handled elsewhere, bypass text extraction"
                
        //         return true
        //     }
        // };
        // margins = {
        //     top: 80,
        //     bottom: 60,
        //     left: 40,
        //     width: 522
        // };
        // // all coords and widths are in jsPDF instance's declared units
        // // 'inches' in this case
        // pdf.fromHTML(
        //     source, // HTML string or DOM elem ref.
        //     margins.left, // x coord
        //     margins.top, { // y coord
        //         'width': margins.width, // max width of content on PDF
        //         'elementHandlers': specialElementHandlers
        //     },

        //     function (dispose) {
        //         // dispose: object with X, Y of the last line add to the PDF 
        //         //          this allow the insertion of new lines after html
        //         pdf.save('UltimateLoveReading.pdf');
        //     }, margins
        // );
        var element = document.getElementById('content');
        var opt = {
        pagebreak: { mode: ['avoid-all', 'css', 'legacy'] },
        margin:       1,
        filename:     'myfile.pdf',
        image:        { type: 'jpg', quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
        };

        // New Promise-based usage:
        html2pdf().set(opt).from(element).save();

        // Old monolithic-style usage:
        html2pdf(element, opt);

        };

</script>



<div class='content-container'>

<!-- <a href="javascript:demoFromHTML()" class="button">Save as PDF</a> -->

<div id="content">

<nav class="floating-menu">
    <ul>
        <ol><a href="#life-path-number">1. Life Path Number</a></ol>
        <ol><a href="#soul-urge-number">2. Soul Urge Number</a></ol>
        <ol><a href="#personality-number">3. Personality Number</a></ol>
        <ol><a href="#personal-power">4. Sun: Personal Power</a></ol>
        <ol><a href="#communication">5. Mercury: Communication</a></ol>
        <ol><a href="#relationships">6. Venus: Relationships</a></ol>
        <ol><a href="#sexuality">7. Mars: Sexuality</a></ol>
        <ol><a href="#luck-and-happiness">8. Jupiter: Luck</a></ol>
        <ol><a href="#commitment">9. Saturn: Commitment</a></ol>
    </ul>
</nav>

   <!-- <h2 class='text-center' ><i>Cosmic Updates presents a...</i></h2> -->

   <div class="image-container">

        <img src="<?php echo base_url(); ?>public/img/cover.jpg"/>

   </div>

   

   <h1 class="text-center" ><strong>Cosmic Love Blueprint</strong></h1>
   
   <p class='text-center'>Prepared For <?php echo $name; ?> born <?php echo $birthday; ?> </p>

   <p class='text-center'><i>Your personalized card meanings to unlock new levels of love and romance in your life.</i></p>

   <div class="chapter" id="welcome" >
        
        <h3>Welcome to your Cosmic Love Blueprint! </h3>

        <div class="container-your-astrology-placements" style="float: right; width:400px; margin-left: 20px; border:1px solid #333; padding:10px;">

                <h2 class="text-center">Your Astrology Placements</h2>

                <hr/>

                <div class="row center">
                    
                        <div class="col-sm-6">
                            <h4>Sun</h4>
                        </div>

                        <div class="col-sm-6">
                            <p><?php echo $major_sun[0]['sign']; ?></p>
                        </div>

                </div>

                <hr/>

                <div class="row center">
                    
                    <div class="col-sm-6">
                        <h4>Mercury</h4>
                    </div>

                    <div class="col-sm-6">
                        <p><?php echo $major_merc[0]['sign']; ?></p>
                    </div>

                </div> 

                <hr/>

                <div class="row center">
                    
                    <div class="col-sm-6">
                        <h4>Venus</h4>
                    </div>

                    <div class="col-sm-6">
                        <p><?php echo $major_ven[0]['sign']; ?></p>
                    </div>

                </div>

                <hr/>

                <div class="row center">
                    
                    <div class="col-sm-6">
                        <h4>Mars</h4>
                    </div>

                    <div class="col-sm-6">
                        <p><?php echo $major_mars[0]['sign']; ?></p>
                    </div>

                </div>

                <hr/>

                <div class="row center">
                    
                    <div class="col-sm-6">
                        <h4>Jupiter</h4>
                    </div>

                    <div class="col-sm-6">
                        <p><?php echo $major_jupiter[0]['sign']; ?></p>
                    </div>

                </div>

                <hr/>

                <div class="row center">
                    
                    <div class="col-sm-6">
                        <h4>Saturn</h4>
                    </div>

                    <div class="col-sm-6">
                        <p><?php echo $major_sat[0]['sign']; ?></p>
                    </div>

                </div>

        </div>

        <!------------>

        <p class="paragraph">This report is written for <?php echo $name; ?>, and will be addressing <?php echo $name; ?> as “you” throughout.</p>

        <p class="paragraph">The following pages are unique to you and have been carefully put together based on your birthdate and birth name, along with the unique positions of the planets on the day you were born. </p>

        <p class="paragraph">This reading combines Numerology, Astrology, and Tarot to provide you with an in-depth and accurate romantic profile. </p>

        <p class="paragraph">The first section is all about Numerology. It reveals how the frequency of your birthdate and birth name shapes your romantic destiny, reveals your deepest desire, and makes you uniquely attractive.</p>

        <p class="paragraph">In the second section, you’ll go even deeper to learn how the 6 most important planets in Astrology affect your unique approach to love and romance. </p>

        <p class="paragraph">You will also discover which Tarot cards are associated with your astrological placements and how the symbolism of these cards provides insight into the hidden depths of your heart.</p>

        <p class="paragraph">This reading is intended to help you understand the cosmic blueprint you were born with so you can navigate your relationships more successfully.</p>

        <p class="paragraph"><strong>IMPORTANT</strong>: Please keep in mind that if this report has been generated for someone else without their full birth name (including middle name if they have one), the Soul Urge and Personality numbers might not be accurate.</p>

        <p>&nbsp;</p>

        <h3>What Is A Decan?</h3>

        <p class="paragraph">Did you know that every zodiac sign has three unique expressions? </p>

        <p class="paragraph">That means there are three kinds of Leos, three kinds of Pisces, etc. </p>

        <p class="paragraph">So while there are only 12 zodiac signs, there are 36 decans!</p>

        <p class="paragraph">Each sign has a first, second, and third decan – and knowing which ones you were born with makes a huge difference when it comes to understanding your true nature in love and relationships. </p>

        <p class="paragraph">Each decan is ruled by a different planet and has a different Tarot card that belongs to it. </p>

        <p class="paragraph">The Tarot cards associated with your decans combine to tell the archetypal story of who you are and can provide you with powerful insights into your romantic gifts and lessons. </p>

        <p class="paragraph">The planets that rule your decans reveal an added dimension of your personality and define what sets you apart from others.</p>

        <p class="paragraph">So keep your eye out for the “Deeper Look” sections in part two of your reading. This is where you will learn all about your personal decans.</p>

        <p>&nbsp;</p>

        <h3>Keep In Mind…</h3>

        <p class="paragraph">Your Cosmic Love Blueprint is timeless. You can return to it anytime and gain deeper insights into yourself. In fact, you might discover that the symbolism in your birth cards and numerology becomes more meaningful over time.</p>

        <p class="paragraph">Some of the imagery on certain cards may look negative, but the truth is, there are no good or bad cards. Each card, whether it looks pleasant or unpleasant, has both positive and negative traits. They are all equal!</p>

        <p class="paragraph">It’s important to embrace the cards you were born with and look for the gift in each one! This is how you will unlock the power of your true self.</p>

        <p class="paragraph">At the end of this report you’ll find out how to apply what you’ve learned to your own Tarot readings so you can get even deeper insight when faced with tough questions.</p>

        <p class="paragraph">There is so much to discover, so let’s get started!</p>

    </div>

    <div id="part-one" class="chapter">

        <div class="sub-main-title-container">

            <h4 class="sub-main-title-firstline"><p><strong>PART I</strong> | NUMEROLOGY</p></h4>
            <h4 class="sub-main-title-secondline"><p>DECODING YOUR ROMANTIC DESTINY</p></h4>

        </div>

        <h4 id="life-path-number" class='content-subtitle-large'>1. LIFE PATH NUMBER | YOUR SOUL’S MISSION</h4>
        
        <p class="paragraph">Your Life Path Number reveals <strong>the path your soul is destined to take</strong> in this life and <strong>the lessons</strong> you’re here to learn. It also provides a glimpse into what kind of relationship will best support you in becoming who you are meant to be.</p>

        <p class="paragraph">If you are out of alignment with your soul’s mission, it might be difficult for you to find lasting success in romance. This is because your Life Path Number represents <strong>the role you must take in order to receive the full support of the Universe</strong>. The more you are in harmony with your life path, the more likely you are to attract an ideal partner to support your personal evolution.</p>

        <p class="paragraph">Surprisingly, even though your Life Path Number defines your unique role in the cosmos, it’s common to experience some resistance toward completely embracing it. The areas of your Life Path Number that you struggle with are of special importance. These places point out exactly where you need to focus to become who you are meant to be.</p>

        <p class="paragraph">By aligning yourself with the qualities of your Life Path Number, everything happening in your life will start to make better sense and fall into place. And the more you develop the skills required to master your Life Path Number, the more you will be able to experience true happiness in life and love.
        </p>
        
        <?php if($added_birthday == 11) {   ?>


        <div class="sub-chapter">

            <div class="content-section">
        
                <h4 class='content-subtitle-larger'>Life Path <?php echo $added_birthday; ?></h4>

            </div>

        <div class='flex'>
            
            <div class='text-left mr-3'>

                <div class="content-section">

                    <h4 class='content-subtitle-masternumber'><p>You have a master number</p></h4>

                    <p><?php echo $part_one[1][0]->master_number; ?></p> 

                </div>

                <div class="content-section">

                    <h4 class='content-subtitle'><p>Your Romantic Destiny</p></h4>
                
                    <p><?php echo $part_one[0][0]->romantic_destiny; ?></p> 

                </div>

                <div class="content-section">

                    <h4 class='content-subtitle'><p>What You’re Here To Learn: Karmic Love Lessons</p></h4>

                    <p><?php echo $part_one[0][0]->karmic_love_lessons; ?></p> 

                </div>
            
            </div>  
        
        </div>


            <?php } else if($added_birthday == 22) { ?>


            <div class="sub-chapter">

                <div class="content-section">
            
                    <h4 class='content-subtitle-larger'>Life Path <?php echo $added_birthday; ?></h4>

                </div>

            <div class='flex'>
                    
                <div class='text-left mr-3'>

                    <div class="content-section">

                        <h4 class='content-subtitle-masternumber'><p>You have a master number.</p></h4>

                        <p><?php echo $part_one[1][0]->master_number; ?></p> 

                    </div>

                    <div class="content-section">

                        <h4 class='content-subtitle'><p>Your Romantic Destiny</p></h4>
                    
                        <p><?php echo $part_one[0][0]->romantic_destiny; ?></p> 

                    </div>

                    <div class="content-section">

                        <h4 class='content-subtitle'><p>What You’re Here To Learn: Karmic Love Lessons</p></h4>

                        <p><?php echo $part_one[0][0]->karmic_love_lessons; ?></p> 
                
                    </div>

                </div>  
                
            </div>

        <?php } else { ?>

        <div class="sub-chapter">
        
        <div class="content-section">

            <h4 class='content-subtitle-larger'>Life Path <?php echo $added_birthday; ?></h2>

        </div>

        <div class='flex'>
            
            <div class='text-left mr-3'>

                <div class="content-section">

                    <h4 class='content-subtitle'><p>Your Romantic Destiny</p></h4>

                    <p><?php echo $part_one[0]->romantic_destiny; ?></p> 

                </div>
            
                <div class="content-section">

                    <h4 class='content-subtitle'><p>What You’re Here To Learn: Karmic Love Lessons</p></h4>
                
                    <p><?php echo $part_one[0]->karmic_love_lessons; ?></p> 

                </div>
            
            </div>  
        
        </div>

        <?php } ?>

        </div>

    </div>

    <div class="chapter">

        <h4 id="soul-urge-number" class='content-subtitle-large'>2. SOUL URGE NUMBER | YOUR HIDDEN DESIRES</h4>

        <p class="paragraph">What do you want more than anything in the world? Your Soul Urge Number, also known as the Heart’s Desire Number, represents your secret, innermost longing. It defines your <strong>dreams</strong>, <strong>ambitions</strong>, and the <strong>experiences you secretly desire</strong> above all else.</p>

        <p class="paragraph">Relationships that resonate with your Soul Urge Number will be powerfully magnetic and carry a “soul mate” energy.</p>

        <p class="paragraph">Your Soul Urge Number reveals what kind of relationship will activate you on the deepest level. At the same time, it shows you what kind of charms will make you so weak in the knees that you’ll even feel tempted to ignore red flags.</p>

        <p class="paragraph">When you experience a connection that resonates with your Soul Urge Number, you will feel a sense of completion, belonging, and fulfillment that makes other relationships pale in comparison.</p>

        <p class="paragraph">Your Soul Urge Number defines what motivates you in life. It also represents your <strong>internal</strong>, <strong>spiritual self</strong> which may be somewhat hidden from the world, including aspects of your shadow.</p>

        <p class="paragraph">Your Soul Urge Number can shed light on your <strong>deep fears</strong> that get in the way of success in love and life. This section will help open your eyes to what you need to look out for so you can invite true love into your life with open arms.</p>
                
        <?php if($vowel_score == 11) {   ?>

            <div class="sub-chapter">

            <div class="content-section">

            <h4 class='content-subtitle-larger'>Soul Urge <?php echo $vowel_score; ?> / 2</h4>

                <p><?php $surge =  $soul_urge[1][0]; echo $surge['quote']; ?></p>

            </div>

            <div class='flex'>
                
                    <div class='text-left mr-3'>

                        <div class="content-section">

                            <h4 class='content-subtitle-masternumber'><p>You Have a Master Number:</p></h4>

                            <p><?php $surge =  $soul_urge[1][0]; echo $surge['master_number']; ?></p>

                        </div>

                        <div class="content-section" style="display:none;" >

                        <h4 class='content-subtitle-larger'><p>SOUL URGE 11 </p></h4> 

                        </div> 

                        <div class="content-section" style="display:none;" >

                            <h4 class='content-subtitle'><p>Your Deepest Desire</p></h4>

                            <p><?php $surge =  $soul_urge[1][0]; echo $surge['deepest_desire']; ?></p> 
                    
                        </div>

                        <div class="content-section" style="display:none;" >

                            <h4 class='content-subtitle'><p>What Makes You Fall In Love </p></h4>
                        
                            <p><?php $surge_fulfill =  $soul_urge[1][0]; echo $surge_fulfill['fulfills_you_in_love']; ?></p> 

                        </div>

                        <div class="content-section" style="display:none;" >

                            <h4 class='content-subtitle'><p>How To Bring More Love Into Your Life </p></h4>
                        
                            <p><?php $surge_bring =  $soul_urge[1][0]; echo $surge_bring['bring_more_love']; ?></p> 

                        </div> 
 
                        <div class="content-section">

                        <h4 class='content-subtitle-larger'><p>SOUL URGE 2 </p></h4> 

                        </div> 

                        <div class="content-section">

                            <h4 class='content-subtitle'><p>Your Deepest Desire</p></h4>

                            <p><?php $surge_three =  $soul_urge[0][0]; echo $surge_three['deepest_desire']; ?></p> 
                    
                        </div>

                        <div class="content-section">

                            <h4 class='content-subtitle'><p>What Makes You Fall In Love </p></h4>
                        
                            <p><?php $surge_fulfill_three =  $soul_urge[0][0]; echo $surge_fulfill_three['fulfills_you_in_love']; ?></p> 

                        </div>

                        <div class="content-section">

                            <h4 class='content-subtitle'><p>How To Bring More Love Into Your Life </p></h4>
                        
                            <p><?php $surge_bring_three =  $soul_urge[0][0]; echo $surge_bring_three['bring_more_love']; ?></p> 

                        </div> 
                    
                    </div> 

            </div>

            </div>

        <?php } else if($vowel_score == 22) { ?>  


            <div class="sub-chapter">

            <div class="content-section">

                <h4 class='content-subtitle-larger'>Soul Urge <?php echo $vowel_score; ?> / 4</h4>

                <p><?php $surge =  $soul_urge[1][0]; echo $surge['quote']; ?></p>

            </div>

            <div class='flex'>
                
                    <div class='text-left mr-3'>

                        <div class="content-section">

                            <h4 class='content-subtitle-masternumber'><p>You Have a Master Number:</p></h4>

                            <p><?php $surge =  $soul_urge[1][0]; echo $surge['master_number']; ?></p> 

                        </div>
 
                        <div class="content-section" style="display:none;">

                            <h4 class='content-subtitle-larger'><p>SOUL URGE 22</p></h4> 

                        </div>

                        <div class="content-section" style="display:none;">

                            <h4 class='content-subtitle'><p>Your Deepest Desire</p></h4>

                            <p><?php $surge =  $soul_urge[1][0]; echo $surge['deepest_desire']; ?></p> 
                    
                        </div>

                        <div class="content-section" style="display:none;">

                            <h4 class='content-subtitle'><p>What Makes You Fall In Love </p></h4>
                        
                            <p><?php $surge_fulfill =  $soul_urge[1][0]; echo $surge_fulfill['fulfills_you_in_love']; ?></p> 

                        </div>

                        <div class="content-section" style="display:none;">

                            <h4 class='content-subtitle'><p>How To Bring More Love Into Your Life </p></h4>
                        
                            <p><?php $surge_bring =  $soul_urge[1][0]; echo $surge_bring['bring_more_love']; ?></p> 

                        </div>

                        <div class="content-section">

                            <h4 class='content-subtitle-larger'><p>SOUL URGE 4</p></h4> 

                        </div>

                        <div class="content-section">

                            <h4 class='content-subtitle'><p>Your Deepest Desire</p></h4>

                            <p><?php $surge_two =  $soul_urge[0][0]; echo $surge_two['deepest_desire']; ?></p> 
                    
                        </div>

                        <div class="content-section">

                            <h4 class='content-subtitle'><p>What Makes You Fall In Love </p></h4>
                        
                            <p><?php $surge_fulfill_two =  $soul_urge[0][0]; echo $surge_fulfill_two['fulfills_you_in_love']; ?></p> 

                        </div>

                        <div class="content-section">

                            <h4 class='content-subtitle'><p>How To Bring More Love Into Your Life </p></h4>
                        
                            <p><?php $surge_bring_two =  $soul_urge[0][0]; echo $surge_bring_two['bring_more_love']; ?></p> 

                        </div>
                    
                    </div>  
            
            </div>

            </div>

        <?php } else { ?>

            <div class="sub-chapter">

            <div class="content-section">

                <h4 class='content-subtitle-larger'>Soul Urge <?php echo $vowel_score; ?></h4>

                <p><?php $surge =  $soul_urge[0]; echo $surge['quote']; ?></p>
                
            </div>

            <div class='flex'>
                
                    <div class='text-left mr-3'>
 
                        <div class="content-section">

                            <h4 class='content-subtitle'><p>Your Deepest Desire</strong></p></h4>

                            <p><?php $surge =  $soul_urge[0]; echo $surge['deepest_desire']; ?></p> 
                    
                        </div>

                        <div class="content-section">

                            <h4 class='content-subtitle'><p>What Makes You Fall In Love </p></h4>
                        
                            <p><?php $surge_fulfill =  $soul_urge[0]; echo $surge_fulfill['fulfills_you_in_love']; ?></p> 

                        </div>

                        <div class="content-section">

                            <h4 class='content-subtitle'><p>How To Bring More Love Into Your Life</p></h4>
                        
                            <p><?php $surge_bring =  $soul_urge[0]; echo $surge_bring['bring_more_love']; ?></p> 

                        </div>
                    
                    </div>  

            </div>

            </div>

        <?php } ?>

    </div>

    <div class="chapter">

        <h4 id="personality-number" class='content-subtitle-large'>3. PERSONALITY NUMBER | YOUR MAGNETISM</h4>

        <p class="paragraph">Ever wonder what people notice about you first when you walk into a room? You have a <strong>unique essence</strong>, and your Personality Number defines the <strong>magnetic aura</strong> that surrounds you.</p>

        <p class="paragraph">Your Personality Number reveals what people are attracted to when they first meet you. It represents the traits that you’ve already mastered, and the unique frequency that you resonate with. It can even provide you with insight into <strong>who you were in a past life</strong>.</p>

        <p class="paragraph">When it comes to courting a partner, your Personality Number can be an ace up your sleeve. Knowing exactly <strong>what makes you attractive</strong> to others will help you embody your best qualities and maximize your strengths.</p>

        <p class="paragraph">Since your Personality Number influences your physical appearance and how you make a first impression, it can also give you clues about your best colors and styles of clothing to wear.</p>
        
        <?php if($consonant_score == 11) {   ?>
 
            <div class="sub-chapter">

            <div class="content-section">

                <h4 class='content-subtitle-larger'>Personality <?php echo $consonant_score; ?> / 2</h4>

            </div>

            <div class='flex'>
                
                    <div class='text-left mr-3'>

                        <div class="content-section">

                            <h4 class='content-subtitle-masternumber'><p>You Have a Master Number</p></h4>

                            <p><?php $surge =  $personality[1][0]; echo $surge['master_number']; ?></p> 
            
                        </div> 

                        <div class="content-section">

                            <h4 class='content-subtitle-larger'><p>PERSONALITY 11</p></h4> 

                        </div> 

                        <div class="content-section">

                            <h4 class='content-subtitle'><p>Your Personal Magnetism</p></h4>

                            <p><?php $surge =  $personality[1][0]; echo $surge['personal_magnetism']; ?></p> 
                    
                        </div>

                        <div class="content-section">

                            <h4 class='content-subtitle'><p>A Glimpse Into Your Past Life</p></h4>
                        
                            <p><?php $surge_fulfill =  $personality[1][0]; echo $surge_fulfill['youve_mastered']; ?></p> 

                        </div>

                        <div class="content-section">

                            <p><strong>Your Secret Weapon Of Attraction:</strong> <?php $surge_bring =  $personality[1][0]; echo $surge_bring['secret_weapon']; ?></p>

                        </div>

                        <div class="content-section">

                            <h4 class='content-subtitle-larger'><p>PERSONALITY 2</p></h4> 

                        </div> 

                        <div class="content-section">

                            <h4 class='content-subtitle'><p>Your Personal Magnetism</p></h4>

                            <p><?php $surge_two =  $personality[0][0]; echo $surge_two['personal_magnetism']; ?></p> 
                    
                        </div>

                        <div class="content-section">

                            <h4 class='content-subtitle'><p>A Glimpse Into Your Past Life</p></h4>
                        
                            <p><?php $surge_fulfill_two =  $personality[0][0]; echo $surge_fulfill_two['youve_mastered']; ?></p> 

                        </div>

                        <div class="content-section">

                            <p><strong>Your Secret Weapon Of Attraction:</strong> <?php $surge_bring_two =  $personality[0][0]; echo $surge_bring_two['secret_weapon']; ?></p>

                        </div>
 
                    </div>  

            </div>

            </div>

        
        <?php } else if($consonant_score == 22) { ?> 


            <div class="sub-chapter">

            <div class="content-section">

                <h4 class='content-subtitle-larger'>Personality <?php echo $consonant_score; ?> / 4</h4>

            </div>

            <div class='flex'>
                
                    <div class='text-left mr-3'>

                        <div class="content-section">

                            <h4 class='content-subtitle-masternumber'><p>You Have a Master Number.</strong></p></h4>

                            <p><?php $surge =  $personality[1][0]; echo $surge['master_number']; ?></p> 

                        </div> 
 
                        <div class="content-section">

                            <h4 class='content-subtitle-larger'><p>PERSONALITY 22 </p></h4> 

                        </div>

                        <div class="content-section">

                            <h4 class='content-subtitle'><p>Your Personal Magnetism</p></h4>

                            <p><?php $surge_two =  $personality[1][0]; echo $surge_two['personal_magnetism']; ?></p> 

                        </div>
                    
                        <div class="content-section">

                            <h4 class='content-subtitle'><p>A Glimpse Into Your Past Life</p></h4>
                        
                            <p><?php $surge_fulfill_two =  $personality[1][0]; echo $surge_fulfill_two['youve_mastered']; ?></p> 

                        </div>

                        <div class="content-section">

                            <p><strong>Your Secret Weapon Of Attraction:</strong> <?php $surge_bring_two =  $personality[1][0]; echo $surge_bring_two['secret_weapon']; ?></p>

                        </div>

                        <div class="content-section">

                            <h4 class='content-subtitle-larger'><p>PERSONALITY 4</p></h4> 

                        </div>

                        <div class="content-section">

                            <h4 class='content-subtitle'><p>Your Personal Magnetism</p></h4>

                            <p><?php $surge =  $personality[0][0]; echo $surge['personal_magnetism']; ?></p> 

                        </div>
                    
                        <div class="content-section">

                            <h4 class='content-subtitle'><p>A Glimpse Into Your Past Life</p></h4>
                        
                            <p><?php $surge_fulfill =  $personality[0][0]; echo $surge_fulfill['youve_mastered']; ?></p> 

                        </div>

                        <div class="content-section">

                            <p><strong>Your Secret Weapon Of Attraction:</strong> <?php $surge_bring =  $personality[0][0]; echo $surge_bring['secret_weapon']; ?></p>

                        </div>

                    
                    </div>  

            </div>

            </div>

        <?php } else { ?>

            
            <div class="sub-chapter">

            <div class="content-section">

                <h4 class='content-subtitle-larger'>Personality <?php echo $consonant_score; ?></h4>
                
            </div>

            <div class='flex'>
                
                    <div class='text-left mr-3'>

                        <div class="content-section">

                            <h4 class='content-subtitle'><p>Your Personal Magnetism</p></h4>
                        
                            <p><?php $surge =  $personality[0]; echo $surge['personal_magnetism']; ?></p> 
                    
                        </div>

                        <div class="content-section">

                            <h4 class='content-subtitle'><p>A Glimpse Into Your Past Life</p></h4>
                        
                            <p><?php $surge_fulfill =  $personality[0]; echo $surge_fulfill['youve_mastered']; ?></p> 

                        </div>

                        <div class="content-section">

                            <p><strong>Your Secret Weapon Of Attraction: </strong> <?php $surge_bring =  $personality[0]; echo $surge_bring['secret_weapon']; ?></p>

                        </div>

                    </div>  

            </div>

            </div>


        <?php } ?>

    </div>


    <div id="part-two" class="chapter">

        <div class="sub-main-title-container">

            <h4 class="sub-main-title-firstline"><p><strong>PART II</strong> | ASTRO-TAROT</p></h4>
            <h4 class="sub-main-title-secondline"><p>YOUR COSMIC LOVE BLUEPRINT</p></h4>

        </div>

        <h4 id="personal-power" class="content-subtitle-large"><p>4. THE SUN | PLANET OF PERSONAL POWER</p></h4>

        <p class="paragraph">Have you ever wanted to impress someone so much that you stopped being yourself and tried to become who you thought they wanted? Or maybe you’ve been told that you’re “not enough” or “too much,” and so you’ve learned to hide your true self from the judgmental gaze of others. </p>

        <p class="paragraph">Doing this may seem like a great way to get love and approval, but actually, it’s exactly what pushes true love AWAY from you. The truth is, if you want to have a deep, meaningful, and lasting connection, you must be yourself to the very core. </p>

        <p class="paragraph">This is why when it comes to love, it’s essential to understand your astrological Sun Sign. The sun is at the center of our solar system, and in astrology, its placement represents the center of your life — which is YOU! </p>

        <p class="paragraph">The exact position of the sun on the day you were born gives you a <strong>unique charisma</strong> and <strong>personality</strong> that makes you who you are. The more you embrace this cosmic blueprint, the more you will attract attention from those who will love you for you.</p>

        <p class="paragraph">Keep in mind, your Sun Sign also casts a shadow. By knowing your blind spots, you’ll be able to turn your weaknesses into strengths and tap into the full potential of your true self.</p>

        <p class="paragraph">There is nothing more lovable to others than when you accept yourself. In fact, the moment you commit to <strong>total self acceptance</strong> is the moment you will access your true inner power and open the door to romantic fulfillment.</p>

        <p class="paragraph"><strong>Sun Sign Keywords:</strong> <i>Identity, Essence, Life Force, Personal Power, What Makes You Radiant, Who You Are.</i></p>

        <p class="paragraph"><strong>Sun Sign Mantra:</strong> I AM</p>

    </div>

    <div class="chapter"> 

        <h4 class="content-subtitle-large"><?php echo $major_sun[0]['title'] ?></h4>

        <div class="major-top-container">   

            <div class='image-left image-card'><img src='public/img/<?php echo $major_sun[0]['major-arcana-image'];?>'></div>

            <?php echo $major_sun[0]['subtitle'] ?>

            <div class="content-section">

                <h4 class='content-subtitle'><p>Meaning Of Sun In <?php echo $major_sun[0]['sign'] ?></p></h4>

                <?php echo $major_sun[0]['meaning'] ?>

            </div>

            <div class="content-section">
        
                <h4 class='content-subtitle'><?php echo $major_sun[0]['symbolism_title'] ?> </h4>

                <p><?php echo $major_sun[0]['symbolism_content']; ?></p>

            </div>

            <div class="content-section">

                <p><strong>Keywords: </strong><?php echo $major_sun[0]['keywords']; ?></p>

            </div>

            <div class="content-section">

                <h4>What Makes People Like You</h4>

                <p><?php echo $major_sun[0]['what_makes_you_shine']; ?></p>

            </div>

            <div class="content-section">

            <h4>What Satisfies Your Soul</h4>

                <p><?php echo $major_sun[0]['what_satisfies_your_soul']; ?></p>

            </div>

            <div class="content-section">

                <h4>Your Deal Breakers</h4>

                <p><?php echo $major_sun[0]['your_deal_breakers']; ?></p>

            </div>

            <div class="content-section">

                <p><strong>Advice from the cosmos: </strong><?php echo $major_sun[0]['advice_from_the_cosmos']; ?></p>
            
            </div>
    
        </div>

        <div class="chapter"> 

            <h4 class="content-subtitle-large"><p>A DEEPER LOOK INTO WHO YOU ARE</p></h4>

            <div class="major-top-container">         

                <div class='image-left image-card'><img src='public/img/minor-arcana/big/<?php echo $minor_sun[0]['minor-arcana-image'];?>'></div>

                <p><?php echo $minor_sun[0]['deeper_look_into_personality'] ?></p>   

                <div class="content-section">

                    <h4 class="content-subtitle">Tarot Symbolism Of Your Birthday: <?php echo $minor_sun[0]['symbolism_of_birthday_title'] ?></h4>

                    <p><?php echo $minor_sun[0]['symbolism_of_birthday_content'] ?></p> 

                </div>

                <div class="content-section">

                    <p><strong>Keywords: </strong> <?php echo $minor_sun[0]['keywords'] ?></p> 

                </div>

                <div class="content-section">

                    <h4>Your Karmic Gifts And Lessons</h4>

                    <p><?php echo $minor_sun[0]['gift_and_lessons'] ?></p>
                    
                </div>

            </div>

        </div>

    <!-------------------------------->

    <div class="chapter">

        <h4 id="communication" class="content-subtitle-large"><p>5. MERCURY | PLANET OF COMMUNICATION</p></h4>

        <p class="paragraph">Have you ever wondered why you can talk to some people for hours, while others leave you struggling to think of a single topic to discuss? Your Mercury Sign plays a big role in how you <strong>think</strong>, <strong>speak</strong>, <strong>solve problems</strong>, and <strong>relate to others</strong>. </p>

        <p class="paragraph">Your Mercury Sign also determines your unique style of intelligence, the kinds of things that interest you, and <strong>how you communicate</strong> your thoughts. It holds the key to <strong>your genius</strong>, defines how you express your love, and reveals what kind of thinkers you’re attracted to.</p>

        <p class="paragraph">When it comes to relationships, knowing your Mercury Sign will help you understand why you’re not always on the same wavelength as others and what you can do to be heard more clearly. </p>

        <p class="paragraph">Your Mercury Sign also influences how you talk about your feelings and resolve conflict with others. </p>

        <p class="paragraph">Knowing your communication style will support you to find your voice so you can express yourself with greater ease.</p>

        <p class="paragraph"><strong>Mercury Sign Keywords:</strong> <i>Intelligence, Speaking, Sharing Ideas, Imagination, Problem Solving, Logic, Perception.</i></p>

        <p class="paragraph"><strong>Mercury Sign Mantra:</strong> I THINK</p>

    </div>

    <div class="chapter"> 
            
        <h4 class="content-subtitle-large"><?php echo $major_merc[0]['main_title']; ?></h4>

        <div class="major-top-container"> 

            <div class='image-left image-card'><img src='public/img/<?php echo $major_merc[0]['major-arcana-image'];?>'></div>

            <p><?php echo $major_merc[0]['main_title_desc']; ?></p>

            <div class="content-section">

                <h4 class='content-subtitle'><?php echo $major_merc[0]['meaning_title']; ?></h4>

                <p><?php echo $major_merc[0]['meaning_desc']; ?></p>

            </div>

            <div class="content-section">

                <h4 class='content-subtitle'><?php echo $major_merc[0]['symbolism_title']; ?></h4>

                <p><?php echo $major_merc[0]['symbolism_desc']; ?></p>

            </div>

            <div class="content-section">

                <p><strong>Keywords: </strong> <?php echo $major_merc[0]['keywords'] ?></p> 

            </div>

            <div class="content-section">

                <h4 class='content-subtitle'><p>The Nature Of Your Mind</p></h4>

                <p><?php echo $major_merc[0]['nature_of_your_mind']; ?></p>

            </div>

            <div class="content-section">

                <h4 class='content-subtitle'><p>How You Express Love</p></h4>

                <p><?php echo $major_merc[0]['how_you_express_love']; ?></p>

            </div>

            <div class="content-section">

                <p><strong>How You Flirt: </strong> <?php echo $major_merc[0]['how_you_flirt'] ?></p> 

            </div>

            <div class="content-section">

                <p><strong>What You'll Never Say: </strong> <?php echo $major_merc[0]['what_youll_never_say'] ?></p> 

            </div>
    
        </div>

    </div>

    <div class="chapter"> 

        <h4 class='content-subtitle-large'><p>A Deeper Look Into Your Communication Style</p></h4>

        <div class="major-top-container"> 

            <div class='image-left image-card'><img src='public/img/minor-arcana/big/<?php echo $minor_merc[0]['minor-arcana-image'];?>'></div>

            <p><?php echo $minor_merc[0]['deeper_look'] ?></p> 

            <div class="content-section">

                <h4 class='content-subtitle'><?php echo $minor_merc[0]['symbolism_title'] ?></h4>

                <p><?php echo $minor_merc[0]['symbolism_description'] ?></p> 

            </div>

            <div class="content-section">

                <p><strong>Keywords: </strong> <?php echo $minor_merc[0]['keywords'] ?></p> 

                <div class="content-section">
            
            </div>

            <h4 class='content-subtitle'><p>Your Mental Gifts And Lessons</p></h4>

                <p><?php echo $minor_merc[0]['gift_and_lessons'] ?></p> 

            </div>

        </div>

    </div>

    <!-------------------------------->

    <div class="chapter">

        <h4 id="relationships" class="content-subtitle-large"><p>6. VENUS | PLANET OF RELATIONSHIPS</p></h4>

        <p class="paragraph">What if you could put your finger on exactly what it is that others find attractive about you? Or if you could truly understand the deeper reason you’re attracted to some people but not others? Well, your Venus Sign holds these answers and more. </p>

        <p class="paragraph">The planet Venus is named after the Roman goddess of love, and it’s unique position at the time of your birth has a big influence on your love life.</p>

        <p class="paragraph">This section outlines what kind of people and environments you enjoy the most and what kind of experiences bring you joy.</p>

        <p class="paragraph">Your Venus Sign also holds the answer to what it is about YOU that other people find irresistibly attractive. By understanding <strong>your unique charm</strong>, you’ll be able to let it shine even more and effortlessly attract the right mate to your side.</p>

        <p class="paragraph">Your Venus Sign determines not only what makes you lovable to others, but what your preferences are when it comes to <strong>pleasure</strong> and <strong>affection</strong>. </p>

        <p class="paragraph">You’ll also get a glimpse of what mistakes you’re prone to make when it comes to courtship, love, and commitment. </p>

        <p class="paragraph">This way, you’ll know what to look out for, and you’ll be able to identify true compatibility with a partner, rather than getting stuck in negative or unhealthy attractions.</p>

        <p class="paragraph">With this knowledge at your fingertips, you’ll get to know your sensual side even better and bring your pleasure in relationships to the next level.</p>

        <p class="paragraph"><strong>Venus Sign Keywords:</strong> <i>Charm, Pleasure, Sensuality, Attraction, Beauty, Style, Affection, Touch.</i></p>

        <p class="paragraph"><strong>Venus Sign Mantra:</strong> I LOVE</p>

    </div>

    <div class="chapter"> 

        <h4 class="content-subtitle-large"><?php echo $major_ven[0]['main_title'] ?></h4>
        
        <div class="major-top-container"> 

            <div class='image-left image-card'><img src='public/img/<?php echo $major_ven[0]['major-arcana-image'];?>'></div>
            
            <p><?php echo $major_ven[0]['main_title_description'] ?></p>

            <div class="content-section">

                <h4 class='content-subtitle'><?php echo $major_ven[0]['meaning_title']; ?></h4>

                <p><?php echo $major_ven[0]['meaning_description']; ?></p>  

            </div>

            <div class="content-section">

                <h4 class='content-subtitle'><?php echo $major_ven[0]['symbolism_title']; ?></h4>

                <p><?php echo $major_ven[0]['symbolism_description']; ?></p>

            </div>

            <div class="content-section">
        
                <p><strong>Keywords: </strong> <?php echo $major_ven[0]['keywords'] ?></p> 

            </div>

            <div class="content-section">

                <h4 class='content-subtitle'>What Brings You Pleasure</h4>

                <p><?php echo $major_ven[0]['what_brings_you_pleasure']; ?></p>

            </div>

            <div class="content-section">

                <h4 class='content-subtitle'>What Love Means To You</h4>

                <p><?php echo $major_ven[0]['what_love_means_to_you']; ?></p>

            </div>

            <div class="content-section">
        
                <p><strong>What Gets You In The Mood: </strong> <?php echo $major_ven[0]['what_gets_you_in_the_mood']; ?></p>

            </div>

        </div>
  
    </div>

    <div class="chapter"> 

        <h4 class='content-subtitle-large'><p>A DEEPER LOOK INTO YOUR LOVE LIFE</p></h4>

        <div class="major-top-container"> 

            <div class='image-left image-card'><img src='public/img/minor-arcana/big/<?php echo $minor_ven[0]['minor-arcana-image'];?>'></div>

            <p><?php echo $minor_ven[0]['a_deeper_look'] ?></p>
 
            <div class="content-section">

                <h4 class='content-subtitle'><?php echo $minor_ven[0]['symbolism_title'] ?></h4>

                <p><?php echo $minor_ven[0]['symbolism_content']; ?></p>

            </div>

            <div class="content-section">

                <p><strong>Keywords: </strong> <?php echo $minor_ven[0]['keywords'] ?></p> 

            </div>

            <div class="content-section">

                <h4 class='content-subtitle'>Your Relationship Gifts And Lessons</h4>

                <p><?php echo $minor_ven[0]['gifts_and_lessons']; ?></p>

            </div>

        </div>    

    </div>

    <!-------------------------------->

    <div class="chapter">

        <h4 id="sexuality" class="content-subtitle-large"><p>7. MARS | PLANET OF SEXUALITY</p></h4>

        <p class="paragraph">What gets you out of bed in the morning and inspires you to take on the world? </p>

        <p class="paragraph">When it comes to understanding your desires, <strong>what motivates you in life</strong>, and how you use your <strong>energy</strong>, look no further than your Mars Sign. The planet Mars is all about action. It’s named after the Roman god of war, but this fiery, red planet also has a softer side.</p>

        <p class="paragraph">When it comes to love, your Mars Sign gives you a clear understanding of what your <strong>passions</strong> and <strong>goals</strong> are, and it even helps you see what you really want out of a relationship.</p>

        <p class="paragraph">Once you know all about your Mars Sign, you’ll be able to recognize when your energy levels and motivations are at odds with a potential partner, so you won’t need to waste time pulling each other in different directions.</p>

        <p class="paragraph">Even better, your Mars Sign defines <strong>what turns you on</strong> in the bedroom and how to get the most out of your romantic encounters.</p>

        <p class="paragraph">It also provides clues about what kind of mistakes you might make when it comes to getting your sexual needs met and how to avoid them in the future. </p>

        <p class="paragraph">This section will help you get in touch with your primal desires, and banish any inhibitions about the kind of touch and connection that really lights your fire.</p>

        <p class="paragraph"><strong>Mars Sign Keywords:</strong> <i>Energy, Intent, Motivation, Passion, Intimacy, Sexual Expression, Willpower.</i></p>

        <p class="paragraph"><strong>Mars Sign Mantra:</strong> I ACT</p>

    </div>


    <div class="chapter"> 

        <h4 class="content-subtitle-large"><?php echo $major_mars[0]['main_title'] ?></h4>

        <div class="major-top-container"> 

            <div class='image-left image-card'><img src='public/img/<?php echo $major_mars[0]['major-arcana-image'];?>'></div>

            <p><?php echo $major_mars[0]['main_title_description']; ?></p>

            <div class="content-section">
            
                <h4 class='content-subtitle'><?php echo $major_mars[0]['meaning_title']; ?></h4>

                <p><?php echo $major_mars[0]['meaning_description']; ?></p>

            </div>

            <div class="content-section">

                <h4 class='content-subtitle'><?php echo $major_mars[0]['symbolism_title']; ?></h4>

                <p><?php echo $major_mars[0]['symbolism_description']; ?></p>

            </div>

            <div class="content-section">
        
                <p><strong>Keywords: </strong> <?php echo $major_mars[0]['keywords'] ?></p> 

            </div>

            <div class="content-section">

                <h4 class='content-subtitle'>What Motivates You</h4>

                <p><?php echo $major_mars[0]['what_motivates_you']; ?></p>

            </div>

            <div class="content-section">

                <h4 class='content-subtitle'>What Turns You On</h4>

                <p><?php echo $major_mars[0]['what_turns_on']; ?></p>

            </div>
            
            <div class="content-section">

                <p><strong>What turns you off: </strong> <?php echo $major_mars[0]['what_turns_off'] ?></p> 

            </div>
     
        </div>

    </div>

    <div class="chapter"> 

        <h4 class="content-subtitle-large"><p>A DEEPER LOOK AT YOUR SEXUALITY</p></h4>

        <div class="major-top-container">

            <div class='image-left image-card'><img src='public/img/minor-arcana/big/<?php echo $minor_mars[0]['minor-arcana-image'];?>'></div>

            <p><?php echo $minor_mars[0]['deeper_look'] ?></p> 

            <div class="content-section">

                <h4 class='content-subtitle'><?php echo $minor_mars[0]['symbolism_title'] ?></h4>

                <p><?php echo $minor_mars[0]['symbolism_description'] ?></p> 

            </div>

            <div class="content-section">

                <p><strong>Keywords: </strong> <?php echo $minor_mars[0]['keywords'] ?></p> 

                </div>

            <div class="content-section">

                <h4 class='content-subtitle'>Your Sexual Gifts And Lessons </h4>

                <p><?php echo $minor_mars[0]['gifts_and_lessons'] ?></p> 

            </div>

        </div>

    </div>

    <!-------------------------------->

    <div class="chapter">

        <h4 id="luck-and-happiness" class="content-subtitle-large"><p>8. JUPITER | PLANET OF LUCK & HAPPINESS</p></h4>

        <p class="paragraph">Have you ever wondered if it’s possible for you to be lucky in love?</p>

        <p class="paragraph">Well, good news! It is! Your Jupiter Sign holds the key to what makes you happy, lucky, and able to experience synchronicity. And as you know, if you’re in the right place at the right time, it can mean meeting the partner of your dreams. </p>

        <p class="paragraph">The planet Jupiter is named after the Roman “king of the gods” and is the biggest, luckiest planet in the solar system. This means it can make all the difference when it comes to relationships. </p>

        <p class="paragraph">With insights about your Jupiter Sign in your back pocket, you’ll learn how to access the <strong>luck</strong> given to you by the Universe to <strong>increase the good fortune around you</strong>.</p>

        <p class="paragraph">In this section, you’ll find out not only what makes you lucky but also what kind of relationship makes you the happiest. The key to any long-lasting relationship is having a strong foundation of friendship, and this is exactly what your Jupiter Sign is about.</p>

        <p class="paragraph">If you’ve ever loved someone but not really liked them, then you understand how important friendship is in a relationship. Your Jupiter Sign holds the key to understanding what kind of people you genuinely like being around and what types of relationships bring you <strong>enjoyment</strong>, <strong>personal growth</strong>, and <strong>expansion</strong>. </p>

        <p class="paragraph"><strong>Jupiter Sign Keywords:</strong> <i>Luck, Abundance, Personal Growth, Expansion, Learning, Discovery, Optimism, Positivity.</i></p>

        <p class="paragraph"><strong>Jupiter Sign Mantra:</strong> I GROW</p>

    </div>

    <div class="chapter"> 

        <h4 class="content-subtitle-large"><?php echo $major_jupiter[0]['main_title'] ?></h4>

        <div class="major-top-container">
            
            <div class='image-left image-card'><img src='public/img/<?php echo $major_jupiter[0]['major-arcana-image'];?>'></div>

            <p><?php echo $major_jupiter[0]['main_title_description'] ?></p>

            <div class="content-section">

                <h4 class='content-subtitle'><?php echo $major_jupiter[0]['meaning_title'] ?></h4>

                <p><?php echo $major_jupiter[0]['meaning_description'] ?></p>

            </div>

            <div class="content-section">

                <h4 class='content-subtitle'><?php echo $major_jupiter[0]['symbolism_title'] ?></h4>

                <p><?php echo $major_jupiter[0]['symbolism_description'] ?></p>

            </div>

            <div class="content-section">

                <p><strong>Keywords: </strong> <?php echo $major_jupiter[0]['keywords'] ?></p> 

            </div>

            <div class="content-section">

                <h4 class='content-subtitle'>How Good Fortune Finds You</h4>

                <p><?php echo $major_jupiter[0]['how_good_fortune_finds_you'] ?></p>

            </div>

            <div class="content-section">

                <h4 class='content-subtitle'>What Keeps Your Relationships Together</h4>

                <p><?php echo $major_jupiter[0]['what_keeps_your_relationships_together'] ?></p>

            </div>

            <div class="content-section">

                <p><strong>How You Cross Paths With A Soulmate: </strong> <?php echo $major_jupiter[0]['how_you_cross_paths'] ?></p>

            </div>

        </div>

    </div>

    <div class="chapter"> 

    <h4 class="content-subtitle-large"><p>A DEEPER LOOK INTO WHAT MAKES YOU HAPPY</p></h4>

        <div class="major-top-container"> 

            <div class='image-left image-card'><img src='public/img/minor-arcana/big/<?php echo $minor_jupiter[0]['minor-arcana-image'];?>'></div>

            <p><?php echo $minor_jupiter[0]['deeper_look'] ?></p>

            <div class="content-section">

                <h4 class='content-subtitle'><?php echo $minor_jupiter[0]['symbolism_title'] ?></h4>

                <p><?php echo $minor_jupiter[0]['symbolism_description'] ?></p>

            </div>

            <div class="content-section">

                <p><strong>Keywords: </strong> <?php echo $minor_jupiter[0]['keywords'] ?></p>

            </div>

            <div class="content-section">

                <h4 class='content-subtitle'>Your Gifts And Lessons</h4>

                <p><?php echo $minor_jupiter[0]['gifts_and_lessons'] ?></p>

            </div>

        </div>

    </div>

    <!-------------------------------->

    <div class="chapter">

        <h4 id="commitment" class="content-subtitle-large"><p>9. SATURN | PLANET OF COMMITMENT</p></h4>

        <p class="paragraph">Have you ever wondered what the secret to a long lasting relationship is? </p>

        <p class="paragraph">When it comes to understanding what turns dating into a <strong>long term commitment</strong>, or even <strong>marriage</strong>, look no further than your Saturn Sign. </p>

        <p class="paragraph">The planet Saturn, named after the Roman god of agriculture, holds powerful insights into what you need in order to feel stable with a partner and deepen your connection over time. </p>

        <p class="paragraph">This section explains what kind of <strong>structure</strong>, <strong>boundaries</strong>, and <strong>values</strong> work best in your life and how you need a partner to show up in order to build a life together. You’ll also get a clearer picture about what doesn’t work for you in a long term relationship. This can save you valuable time and suffering because you’ll be able to see the signs right away.</p>

        <p class="paragraph">Saturn carries a serious energy and represents places in your life where you often feel inhibited or limited. Working through these limitations will bring greater maturity and stability into your life, upon which you can build a solid foundation for romantic fulfillment.</p>

        <p class="paragraph"><strong>Saturn Sign Keywords:</strong> <i>Dedication, Responsibility, Duties, Tradition, Perseverance, Inhibition, Karma, Maturity.</i></p>

        <p class="paragraph"><strong>Saturn Sign Mantra:</strong> I ACHIEVE</p>

    </div>

    <div class="chapter"> 

        <h4 class="content-subtitle-large"><?php echo $major_sat[0]['main_title'] ?></h4>

        <div class="major-top-container"> 

            <div class='image-left image-card'><img src='public/img/<?php echo $major_sat[0]['major-arcana-image'];?>'></div>

            <p><?php echo $major_sat[0]['main_title_description'] ?></p>

            <div class="content-section">

                <h4 class='content-subtitle'><?php echo $major_sat[0]['meaning_title'] ?></h4>

                <p><?php echo $major_sat[0]['meaning_description'] ?></p> 
            
            </div>

            <div class="content-section">

                <h4 class='content-subtitle'><?php echo $major_sat[0]['symbolism_title'] ?></h4>

                <p><?php echo $major_sat[0]['symbolism_description'] ?></p> 

            </div>

            <div class="content-section">

                <p><strong>Keywords: </strong> <?php echo $major_sat[0]['keywords'] ?></p> 
            
            </div>

            <div class="content-section">

                <h4 class='content-subtitle'>What Makes You Commit</h4>

                <p><?php echo $major_sat[0]['what_makes_you_commit'] ?></p>

            </div>

            <div class="content-section">

                <h4 class='content-subtitle'>Your Inhibitions</h4>

                <p><?php echo $major_sat[0]['your_inhibitions'] ?></p>

            </div>

            <div class="content-section">

                <p><strong>What you want more of in life: </strong> <?php echo $major_sat[0]['what_you_want_more_in_life'] ?></p> 

            </div>

        </div>

    </div>

    <div class="chapter"> 

        <h4 class="content-subtitle-large"><p>A DEEPER LOOK INTO YOUR COMMITMENT STYLE</p></h4>

        <div class="major-top-container"> 

            <div class='image-left image-card'><img src='public/img/minor-arcana/big/<?php echo $minor_sat[0]['minor-arcana-image'];?>'></div>

            <p><?php echo $minor_sat[0]['a_deeper_look'] ?></p>

            <div class="content-section">

                <h4 class='content-subtitle'><?php echo $minor_sat[0]['symbolism_title'] ?></h4>

                <p><?php echo $minor_sat[0]['symbolism_description'] ?></p> 

            </div>

            <div class="content-section">

                <p><strong>Keywords: </strong> <?php echo $minor_sat[0]['keywords'] ?></p> 

            </div>

            <div class="content-section">

                <h4 class='content-subtitle'>Your Gifts And Lessons In Commitment</h4>

                <p><?php echo $minor_sat[0]['gift_and_lessons'] ?></p> 

            </div>

        </div>

    </div>

    <div class="chapter">

        <div class="content-section">

            <h4 class="content-subtitle-large"><p>Unlocking The Hidden Meaning In Your Birth Cards</p></h4>
            
            <p class="paragraph">Now that you’ve read your entire report, you’re probably starting to feel familiar with your birth cards.</p>

            <p class="paragraph">Your cards represent your unique personality traits, and now that you know what they are, they will bring you special messages when they appear in your Tarot readings.</p>

            <p class="paragraph">From this point onward, whenever you get a Tarot reading or draw the Tarot for yourself, any card that shows up from this report will hold an added meaning for you. </p>

            <p class="paragraph">And when you see your own cards showing up in a reading, you’ll immediately know which aspect of yourself is playing a part in your issue at hand. </p>

            <p class="paragraph">For example: If you draw the card that represents your Mercury decan, depending on the placement, it could point to karmic communication issues or opportunities.</p>

            <p class="paragraph">If you’ve run a report for someone else and you have one or more of their cards come up in a reading, you’ll understand what the Universe is saying about them, and which part of the relationship you need to pay attention to.</p>

            <p class="paragraph">Lastly, when your cards are drawn in a reading, you can return to this report for guidance on how to proceed.</p>

            <p>The Universe is eager to communicate with you! And now you understand how to speak its language.</p>

        </div>

        <div class="content-section">

            <h4 class="content-subtitle-large"><p>Some Final Thoughts</p></h4>

            <p class="paragraph">You may find it beneficial to read this report more than once. </p>

            <p class="paragraph">Your astrological birth cards and numerology are deeply significant, and you may find that your understanding of their meaning unfolds over time. </p>

            <p class="paragraph">If there is a specific aspect of your life that you’re struggling with, or an energy you want to bring more of into your life, it can be helpful to pull up the card you associate with it and meditate on the image.</p>

            <p class="paragraph">The Tarot has deep symbolism embedded in its images that tell the story of the human experience.</p>

            <p class="paragraph">By understanding your story, and the stories of your loved ones, you are empowered.</p>

            <p class="paragraph">You can recognize the patterns, karma, and tendencies when it comes to relationships and choose the path that serves you best.</p>

            <p class="paragraph">The answers are here for you.</p>

            <p><i>May you fulfill your heart’s deepest desires and experience true happiness!</i></p>
            
        </div>

    </div>

</div>

</div>
