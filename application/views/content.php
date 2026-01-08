

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>public/js/jquery.easing.1.3.js" type="text/javascript"></script>
 
<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

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

<script>
    $(document).ready(function() {
        $('p.paragraph .purple-text').each(function() {
            var text = $(this).text();
            var regex = /(\d+)\s*Points/;
            var match = text.match(regex);
            
            if (match) {
                var number = parseInt(match[1]);
                if (number === 1) {
                    $(this).text(text.replace('Points', 'Point'));
                } else {
                }
            }
        });
    });
</script>

<div class='content-container'>

<!-- <a href="javascript:demoFromHTML()" class="button">Save as PDF</a> -->

<div id="content">

<nav class="floating-menu">
    <!-- <ul>
        <ol><a href="#astrology-planet-meanings">Astrology Planet Meanings</a></ol>
        <ol><a href="#your-and-their-signs">Your and Their Signs</a></ol>
        <ol><a href="#about-your-sign-compatibilities">About Your Sign Compatibilities</a></ol>
        <ol><a href="#types-of-relationship-energies">7 Types of Relationship Energies</a></ol>
        <ol><a href="#match-matrix-personality">Match Matrix - Personality</a></ol>
        <ol><a href="#match-matrix-communication">Match Matrix - Communication</a></ol>
        <ol><a href="#match-matrix-pleasure">Match Matrix - Pleasure</a></ol>
        <ol><a href="#match-matrix-desire">Match Matrix - Desire</a></ol>
        <ol><a href="#match-matrix-growthkarma">Match Matrix - Growth & Karma</a></ol>
        <ol><a href="#match-matrix-score">Match Matrix Score</a></ol>
    </ul> -->
    <ul>
        <ol><a href="#match-matrix-score">Total Match Matrix Score</a></ol>
        <ol><a href="#match-matrix-personality">Your Personality Score</a></ol>
        <ol><a href="#match-matrix-communication">Your Communication Score</a></ol>
        <ol><a href="#match-matrix-pleasure">Your Pleasure Score</a></ol>
        <ol><a href="#match-matrix-desire">Your Sexuality Score</a></ol>
        <ol><a href="#match-matrix-growthkarma">Your Personal Growth Score</a></ol>
        <ol><a href="#conclusion">Conclusion</a></ol>
    </ul>
</nav>

   <!-- <h2 class='text-center' ><i>Cosmic Updates presents a...</i></h2> -->

    <div class="image-container">

            <img src="<?php echo base_url(); ?>public/img/MatchMatrix-CA.webp"/>

    </div>

    <div id="welcome" class="chapter chapter m-auto p-0">

        <!-- <h1 class="text-center" style="margin-bottom:15px;"><strong>THE COSMIC LOVE BLUEPRINT:</strong></h1>

        <h1 class="text-center" style="margin-top:0;"><strong>MATCH MATRIX UPGRADE</strong></h1> -->

        <h1 class="text-center mt-4 mb-3" style="margin-top:0; font-size: 65px;"><strong>MATCH MATRIX</strong></h1>

        <h3 class="center mb-4 pb-3" style="font-size:39px;">COMPATIBILITY APP</h3>

        <p class='text-center paragraph'>Prepared For <?php echo $first_name; ?> born <?php echo $first_birthday; ?> and <?php echo $second_name; ?> born <?php echo $second_birthday; ?></p>

    </div>

    <div class="chapter" id="match-matrix-score">

        <div class="container-matrix-compatibility">

            <h3 class="center m-auto pb-3">YOUR LOVE COMPATIBILITY SCORE:</h3>

            <div class="sub-main-title-container mb-0" id="match-matrix-score" style="margin-top:0;">

                <h4 class="sub-main-title-firstline mb-4"><p><strong><?php echo $total_matrix_compatibility_score; ?></strong></p></h4>

            </div>

            <?php if($total_matrix_compatibility_score >= 90){ // SOULMATES ?> 

                <h3 class="center" style="font-size:39px;"><?php echo $love_meter; ?></h3>

                <p class="paragraph">This is literally a match made in heaven. You have a high level of compatibility with this person and are likely destined to be in each other’s lives  – whether for a reason, a season, or a lifetime! However, keep in mind that even excellent compatibility doesn’t come with any guarantees. You both have to want the relationship to work and put time into making things last.</p>

                <p class="paragraph">Does it feel like this connection is meant to be?</p>

            <?php } elseif($total_matrix_compatibility_score >= 76 && $total_matrix_compatibility_score <= 89){ // MARRIAGE MATERIAL?>

                <h3 class="center" style="font-size:39px;"><?php echo $love_meter; ?></h3>

                <p class="paragraph">What a great match! You both have enough in common to make things last in the long run. However, it’s important to not take your connection for granted. There could still be some aspects of your relationship that feel challenging and difficult. Thankfully, you will likely enjoy a solid foundation of respect and care with each other.</p>

                <p class="paragraph">The stars are aligned in your favor with this connection.</p>

            <?php } elseif($total_matrix_compatibility_score >= 62 && $total_matrix_compatibility_score <= 75){ // A LEARNING EXPERIENCE?>

                <h3 class="center" style="font-size:39px;">A LEARNING EXPERIENCE</h3>

                <p class="paragraph">This love match has its highs and lows. There may be a strong, magnetic energy pulling you together, yet unexpected conflicts that are difficult to navigate. It’s possible you have unresolved karma with this person from past lives. Take your time getting to know them so you can discover the true nature of your attraction. If you move too quickly, you may regret it later.</p>

                <p class="paragraph">This love match could be challenging but it has room to grow. It’s possible to make things work if both people really want it.</p>

            <?php } else { // INCOMPATIBLE ?>

                <h3 class="center" style="font-weight:39px;"><?php echo $love_meter; ?></h3>

                <p class="paragraph">Proceed with caution. While you might have a few strong elements of compatibility with this person, there will likely be more conflict than is healthy. Frustration, misunderstandings, and power struggles could keep you from being able to secure a solid foundation with each other. It’s quite possible that this person has entered your life to teach you valuable yet painful lessons about love and self-worth.</p>

                <p class="paragraph">While it is possible to make this connection work, it is extremely unlikely.</p>

            <?php } ?>


            <p class="paragraph">Continue reading to discover the details of your compatibility together…</p>

        </div>

    </div>

    <div class="chapter" id="welcome" >
        
        <h3>Welcome to your Match Matrix Upgrade!</h3>
  
        <!------------>

        <p class="paragraph">Learning about your astrological compatibility can give you a lot of insight into the true nature of your connection with someone.</p>

        <p class="paragraph">This upgrade is designed to help you calculate your romantic compatibility with your love interest so you can understand the true nature of your connection.</p>

        <p class="paragraph">The Match Matrix uses an astrological technique called synastry to determine how well you match, and what specifically makes you compatible (or not!)</p>

        <!-- <div class="chapter" id="astrology-planet-meanings">

            <h3>Astrology Planet Meanings</h3>
            
            <p class="paragraph">
            First, let's quickly review each Planet and Relationship Energy type:
            </p>

            <p class="paragraph">
                <strong>Sun: </strong> Personality
            </p>

            <p class="paragraph">
                <strong>Mercury: </strong> Communication
            </p>

            <p class="paragraph">
                <strong>Venus: </strong> Pleasure
            </p>

            <p class="paragraph">
                <strong>Mars: </strong> Desire
            </p>

            <p class="paragraph">
                <strong>Jupiter: </strong> Personal Growth
            </p>

            <p class="paragraph">
                <strong>Saturn: </strong> Karma
            </p>

        </div> -->
        
        <div class="chapter" id="your-and-their-signs">

            <h3>Your and Their Signs</h3>
 
            <div class="row">
                <div class="col-6">
                    <p class="paragraph">
                        <strong>Your Sun Sign:</strong> <?php echo $first_sun ?></strong> 
                    </p>
                </div>
                <div class="col-6">
                    <p class="paragraph">
                        <strong>Their Sun Sign:</strong> <?php echo $second_sun ?></strong> 
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <p class="paragraph">
                        <strong>Your Mercury Sign:</strong> <?php echo $first_merc ?></strong> 
                    </p>
                </div>
                <div class="col-6">
                    <p class="paragraph">
                        <strong>Their Mercury Sign:</strong> <?php echo $second_merc ?></strong> 
                    </p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-6">
                    <p class="paragraph">
                        <strong>Your Venus Sign:</strong> <?php echo $first_ven ?></strong> 
                    </p>
                </div>
                <div class="col-6">
                    <p class="paragraph">
                        <strong>Their Venus Sign:</strong> <?php echo $second_ven ?></strong> 
                    </p>
                </div>
            </div>
                
            <div class="row">
                <div class="col-6">
                    <p class="paragraph">
                        <strong>Your Mars Sign:</strong> <?php echo $first_mars ?></strong> 
                    </p>
                </div>
                <div class="col-6">
                    <p class="paragraph">
                        <strong>Their Mars Sign:</strong> <?php echo $second_mars ?></strong> 
                    </p>
                </div>
            </div>
                
            <div class="row">
                <div class="col-6">
                    <p class="paragraph">
                        <strong>Your Saturn Sign:</strong> <?php echo $first_sat ?></strong> 
                    </p>
                </div>
                <div class="col-6">
                    <p class="paragraph">
                        <strong>Their Saturn Sign:</strong> <?php echo $second_sat ?></strong> 
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <p class="paragraph">
                        <strong>Your Jupiter Sign:</strong> <?php echo $first_jupiter ?></strong> 
                    </p>
                </div>
                <div class="col-6">
                    <p class="paragraph">
                        <strong>Their Jupiter Sign:</strong> <?php echo $second_jupiter ?></strong> 
                    </p>
                </div>
            </div>    
            
    </div>

    <div class="chapter" id="about-your-sign-compatibilities">

    <h3>About Your Sign Compatibilities</h3>

        <div class="row align-items-center mb-4">

            <div class="col-md-3 center">
                <img src="<?php echo base_url(); ?>public/<?php echo $first_sun ?>.webp" style="width:100%; max-width:190px;" />
            </div>
            <div class="col-md-9">

                <?php foreach($result_compatibility as $description) {  ?>

                    <?php if($description[2] == $first_sun){ ?>

                        <h3 class="pb-0">Your Sun In <?php echo $description[2] ?></h3> 

                        <p class="paragraph"><?php echo $description[1] ?></p> 

                    <?php } else { } ?>

                <?php } ?>

            </div>

        </div>

        <div class="row align-items-center">

            <div class="col-md-3 center">
                <img src="<?php echo base_url(); ?>public/<?php echo $second_sun ?>.webp" style="width:100%; max-width:190px;" />
            </div>
            <div class="col-md-9">

                <?php foreach($result_compatibility as $descriptions) {  ?>

                    <?php if($descriptions[2] == $second_sun){ ?>

                        <h3 class="pb-0">Their Sun In <?php echo $descriptions[2] ?></h3> 

                        <p class="paragraph"><?php echo $descriptions[1] ?></p> 

                    <?php } else { } ?>

                <?php } ?>
                
            </div>

        </div>

    </div>
  
    <div class="chapter" id="types-of-relationship-energies">

        <h4 id="soul-urge-number" class='content-subtitle-large'>The 7 Types of Relationship Energies</h4>

        <!-- <p class="paragraph">
            There are seven fundamental relationship energies in all human interactions. While energies are always working between people, different relationships tend towards some more than others.  
        </p> -->

        <p class="paragraph">
            The Match Matrix uses an astrological method called synastry to determine your 36 factors of compatibility with someone. Each of your birth planets relates to each of their planets in one of seven ways. These are:
        </p>

        <p class="paragraph">
            <strong>1. UNITY</strong> | Called a conjunction in astrology, this aspect blends your individual energies together. Depending on the planets involved, it can be beneficial or challenging.
            
        </p>
        
        <p class="paragraph">
            <strong>2. HELPFUL</strong> | Called a semi-sextile in astrology, this aspect creates a slightly positive energy that can help your relationship grow and evolve.
        </p>

        <p class="paragraph">
            <strong>3. LOVING</strong> | Called a sextile in astrology, this aspect creates a positive energy that promotes a sense of ease, comfort, and support in your relationship.
        </p>

        <p class="paragraph">
            <strong>4. BLISSFUL</strong> | Called a trine in astrology, this aspect has a powerfully harmonious energy that creates a sense of intimacy, creativity, and deep compatibility in your relationship.
        </p>

        <p class="paragraph">
            <strong>5. FRICTION</strong> | Called a square in astrology, this aspect causes tension and a need for compromise. Depending on the planets involved, it can also create attraction and sexual chemistry.
        </p>

        <p class="paragraph">
           <strong>6. CLASHING</strong> | Called a quincunx in astrology, this aspect makes it hard to relate to one another and will require adjustments or work-arounds.
        </p>

        <p class="paragraph">
        <strong>7. MAGNETIC</strong> | Called an opposition in astrology, this aspect has an intense energy that can create strong attraction or repulsion. Depending on the planets involved it can be very good or very difficult.
        </p>

    </div>

    <!-- <div class="chapter">

        <h4 id="personality-number" class='content-subtitle-large'>Understanding Relationship Energies</h4>

        <p class="paragraph">This is where things get interesting!  Because, when most people think of “compatible signs” they are referring to their Sun sign.</p>

        <p class="paragraph">Since the Sun represents your personality, it’s the easiest thing to relate to! So people who don’t know about deeper astrology can identify with it.</p>

        <p class="paragraph">But that's just the tip of the iceberg!</p>

        <p class="paragraph">The relationship between your Sun signs is one of dozens of relationships energies interacting between your Astrology charts.</p>
        
        <p class="paragraph">Hint: This can be VERY complicated and VERY confusing, which is why we created this Match Matrix system!</p>

        <p class="paragraph">Each energy affects your relationship in different ways based on the planets involved.</p>

        <p class="paragraph">So as you go through this next section, keep in mind that the relationship energies are between signs, and the planets add extra context.</p>

        <p class="paragraph">You’ll see exactly which parts of your relationship these energies exist in, and how they are shaping the connection between you and your person.</p>

    </div> -->


    <div id="part-two" class="chapter">

        <div class="sub-main-title-container">

            <h4 class="sub-main-title-firstline"><p><strong>YOUR MATCH MATRIX</strong></p></h4>

        </div>

        <h4 id="match-matrix-communication" class="content-subtitle-large text-center mb-3"><p class="text-center mb-2" style="font-family: 'Roboto', sans-serif; font-size: 38px; font-weight:400;">PART ONE: THE SUN</p></h4>

        <h3 class="purple-text text-center mb-5" style="font-family: 'Roboto', sans-serif; font-weight: 300 !important;"><strong>YOUR PERSONALITY SCORE</strong></h3>      

        <h3>DO YOU LIKE EACH OTHER?</h3>

        <p class="paragraph">This section reveals how much you and your partner feel loved, seen, and supported by each other. It also shows how your partner makes you feel when you’re with them.</p>

        <p class="paragraph">A high personality score means that your individual identities are compatible with each other. Understanding and acceptance of each other comes easily.</p>

        <p class="paragraph">A low personality score can mean frustration, misunderstanding, power struggles, and ego battles will be present in this relationship.</p>
        
        <hr/>

        <p class="paragraph">
            <strong>Your Sun in <?php echo $first_sun ?> / Their Sun in <?php echo $second_sun ?>:</strong> How you relate to one another.
        </p>
  
        <p class="paragraph test">
            <strong><span class="text-uppercase"><?php echo $personality_sun_sun[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $personality_sun_sun[1][0]['key_points'] ?> Points</span></span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $personality_sun_sun[0][0]['content'] ?>
        </p>

        <hr/>

        <p class="paragraph test">
            <strong>Your Sun in <?php echo $first_sun ?> / Their Mercury in <?php echo $second_merc ?>:</strong> How well they understand you.
        </p>
   
        <p class="paragraph">
            <strong>
                <span class="text-uppercase"><?php echo $personality_sun_mercury[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $personality_sun_mercury[1][0]['key_points'] ?> Points</span></span>
            </strong> 
        </p>

        <p class="paragraph">
            <?php echo $personality_sun_mercury[0][0]['content'] ?>
        </p>

        <hr/>

        <p class="paragraph">
            <strong>Your Mercury in <?php echo $first_merc ?> / Their Sun in <?php echo $second_sun ?>:</strong> How well you understand them.
        </p>
 
        <p class="paragraph">
            <strong>
                <span class="text-uppercase"><?php echo $personality_mercury_sun[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $personality_mercury_sun[1][0]['key_points'] ?> Points</span></span>
            </strong> 
        </p>

        <p class="paragraph">
            <?php echo $personality_mercury_sun[0][0]['content'] ?>
        </p>
 
        <hr/>

        <p class="paragraph">
            <strong>Your Sun in <?php echo $first_sun ?> / Their Venus in <?php echo $second_ven ?>:</strong> What kind of affection they feel for you.
        </p>

        <p class="paragraph">
            <strong>
                <span class="text-uppercase"><?php echo $personality_sun_venus[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $personality_sun_venus[1][0]['key_points'] ?> Points</span></span>
            </strong> 
        </p>

        <p class="paragraph">
            <?php echo $personality_sun_venus[0][0]['content'] ?>
        </p>

        <hr/>

        <p class="paragraph">
            <strong>Your Venus in <?php echo $first_ven ?> / Their Sun in <?php echo $second_sun ?>:</strong> What kind of affection you feel for them.
        </p>

        <p class="paragraph">
            <strong>
                <span class="text-uppercase"><?php echo $personality_venus_sun[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $personality_venus_sun[1][0]['key_points'] ?> Points</span></span>
            </strong> 
        </p>

        <p class="paragraph">
            <?php echo $personality_venus_sun[0][0]['content'] ?>
        </p>

        <hr/>

        <p class="paragraph">
            <strong>Your Sun in <?php echo $first_sun ?> / Their Mars in <?php echo $second_mars ?>:</strong> How well they get along with you (low score can mean fighting.)
        </p>

        <p class="paragraph">
            <strong>
                <span class="text-uppercase"><?php echo $personality_sun_mars[1][0]['key_name'] ?>  | <span class="purple-text"><?php echo $personality_sun_mars[1][0]['key_points'] ?> Points</span></span>
            </strong> 
        </p>

        <p class="paragraph">
            <?php echo $personality_sun_mars[0][0]['content'] ?>
        </p>

        <hr/>

        <p class="paragraph">
            <strong>Your Mars in <?php echo $first_mars ?> / Their Sun in <?php echo $second_sun ?>:</strong> How well you get along with them (low score can mean fighting.)
        </p>
  
        <p class="paragraph">
            <strong>
                <span class="text-uppercase"><?php echo $personality_mars_sun[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $personality_mars_sun[1][0]['key_points'] ?> Points</span></span>
            </strong> 
        </p>

        <p class="paragraph">
            <?php echo $personality_mars_sun[0][0]['content'] ?>
        </p>

        <hr/>

        <p class="paragraph">
            <strong>Your Sun in <?php echo $first_sun ?> / Their Jupiter in <?php echo $second_jupiter ?>:</strong> How happy they make you.
        </p>
  
        <p class="paragraph">
            <strong>
                <span class="text-uppercase"><?php echo $personality_sun_jupiter[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $personality_sun_jupiter[1][0]['key_points'] ?> Points</span></span>
            </strong> 
        </p>

        <p class="paragraph">
            <?php echo $personality_sun_jupiter[0][0]['content'] ?>
        </p>

        <hr/>

        <p class="paragraph">
            <strong>Your Jupiter in <?php echo $first_jupiter ?> / Their Sun in <?php echo $second_sun ?>:</strong> How happy you make them.
        </p>
  
        <p class="paragraph">
            <strong>
                <span class="text-uppercase"><?php echo $personality_jupiter_sun[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $personality_jupiter_sun[1][0]['key_points'] ?> Points</span></span>
            </strong> 
        </p>

        <p class="paragraph">
            <?php echo $personality_jupiter_sun[0][0]['content'] ?>
        </p>

        <hr/>

        <p class="paragraph">
            <strong>Your Sun in <?php echo $first_sun ?> / Their Saturn in <?php echo $second_sat ?>:</strong> How supportive they are of you (low score can mean controlling.) 
        </p>
   
        <p class="paragraph">
            <strong>
                <span class="text-uppercase"><?php echo $personality_sun_saturn[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $personality_sun_saturn[1][0]['key_points'] ?> Points</span></span>
            </strong> 
        </p>

        <p class="paragraph">
            <?php echo $personality_sun_saturn[0][0]['content'] ?>
        </p>

        <hr/>

        <p class="paragraph">
            <strong>Your Saturn in <?php echo $first_sat ?> / Their Sun in <?php echo $second_sun ?>:</strong> How supportive you are of them (low score can mean controlling.) 
        </p>
  
        <p class="paragraph">
            <strong>
                <span class="text-uppercase"><?php echo $personality_saturn_sun[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $personality_saturn_sun[1][0]['key_points'] ?> Points</span></span>
            </strong> 
        </p>

        <p class="paragraph">
            <?php echo $personality_saturn_sun[0][0]['content'] ?>
        </p>

        <!-- <h3 class="purple-text"><strong>TOTAL PERSONALITY SCORE: <?php echo $total_personality_score; ?></strong></h3> -->

        <hr/>

        <!------------------------> 

        <!-- <h4 id="match-matrix-communication" class="content-subtitle-large center"><p>2. COMMUNICATION:</p></h4> -->

        <h4 id="match-matrix-communication" class="content-subtitle-large text-center mb-3"><p class="text-center mb-2" style="font-family: 'Roboto', sans-serif; font-size: 38px; font-weight:400;">PART TWO: MERCURY</p></h4>

        <h3 class="purple-text text-center mb-5" style="font-family: 'Roboto', sans-serif; font-weight: 300 !important;"><strong>YOUR COMMUNICATION SCORE</strong></h3>
        
        <h3>DO YOU SPEAK THE SAME LANGUAGE?</h3>

        <p class="paragraph">This section determines how well you communicate with one another.</p>

        <p class="paragraph">A high communication score means that your approaches to self expression are compatible with each other. Conversations and understanding come easily.</p>

        <p class="paragraph">A low communication score can mean confusion, conflict, and misunderstanding will be present in this relationship.</p>

        <p class="paragraph">In addition to this section, you can read the planet Mercury’s combinations from the previous section to get even more insight into your communication energy.</p>

         
        <hr/>

        <p class="paragraph">
            <strong>Your Mercury in <?php echo $first_merc ?> / Their Mercury in <?php echo $second_merc ?>:</strong> How you communicate together.
        </p>
  
        <p class="paragraph">
            <strong><span class="text-uppercase"><?php echo $communication_mercury_mercury[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $communication_mercury_mercury[1][0]['key_points'] ?> Points</span></span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $communication_mercury_mercury[0][0]['content'] ?>
        </p>

        <hr/>

        <p class="paragraph">
            <strong>Your Mercury in <?php echo $first_merc ?> / Their Venus in <?php echo $second_ven ?>:</strong> How comfortable they feel expressing their affection to you.
        </p>
  
        <p class="paragraph">
            <strong><span class="text-uppercase"><?php echo $communication_mercury_venus[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $communication_mercury_venus[1][0]['key_points'] ?> Points</span></span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $communication_mercury_venus[0][0]['content'] ?>
        </p>

        <hr/>

        <p class="paragraph">
            <strong>Your Venus in <?php echo $first_ven ?> / Their Mercury in <?php echo $second_merc ?>:</strong> How comfortable you feel expressing your affection to them.
        </p>
  
        <p class="paragraph">
            <strong><span class="text-uppercase"><?php echo $communication_venus_mercury[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $communication_venus_mercury[1][0]['key_points'] ?> Points</span></span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $communication_venus_mercury[0][0]['content'] ?>
        </p>

        <hr/>

        <p class="paragraph">
            <strong>Your Mercury in <?php echo $first_merc ?> / Their Mars in <?php echo $second_mars ?>:</strong> How they stimulate your intellect.
        </p>
  
        <p class="paragraph">
            <strong><span class="text-uppercase"><?php echo $communication_mercury_mars[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $communication_mercury_mars[1][0]['key_points'] ?> Points</span></span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $communication_mercury_mars[0][0]['content'] ?>
        </p>

        <hr/>

        <p class="paragraph">
            <strong>Your Mars in <?php echo $first_mars ?> / Their Mercury in <?php echo $second_merc ?>:</strong> How you stimulate their intellect.
        </p>
  
        <p class="paragraph">
            <strong><span class="text-uppercase"><?php echo $communication_mars_mercury[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $communication_mars_mercury[1][0]['key_points'] ?> Points</span></span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $communication_mars_mercury[0][0]['content'] ?>
        </p>

        <hr/>

        <p class="paragraph">
            <strong>Your Mercury in <?php echo $first_merc ?> / Their Jupiter in <?php echo $second_jupiter ?>:</strong> How they inspire you to grow and learn new things.
        </p>
  
        <p class="paragraph">
            <strong><span class="text-uppercase"><?php echo $communication_mercury_jupiter[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $communication_mercury_jupiter[1][0]['key_points'] ?> Points</span></span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $communication_mercury_jupiter[0][0]['content'] ?>
        </p>

        <hr/>
        
        <p class="paragraph">
            <strong>Your Jupiter in <?php echo $first_jupiter ?> / Their Mercury in <?php echo $second_merc ?>:</strong> How you inspire them to grow and learn new things.
        </p>
  
        <p class="paragraph">
            <strong><span class="text-uppercase"><?php echo $communication_jupiter_mercury[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $communication_jupiter_mercury[1][0]['key_points'] ?> Points</span></span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $communication_jupiter_mercury[0][0]['content'] ?>
        </p>

        <hr/>

        <p class="paragraph">
            <strong>Your Mercury in <?php echo $first_merc ?> / Their Saturn in <?php echo $second_sat ?>:</strong> How they communicate serious things to you (low score can mean you feel inhibited by them.)
        </p>
  
        <p class="paragraph">
            <strong><span class="text-uppercase"><?php echo $communication_mercury_saturn[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $communication_mercury_saturn[1][0]['key_points'] ?> Points</span></span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $communication_mercury_saturn[0][0]['content'] ?>
        </p>

        <hr/>

        <p class="paragraph">
            <strong>Your Saturn in <?php echo $first_sat ?> / Their Mercury in <?php echo $second_merc ?>:</strong> How you communicate serious things to them (low score can mean they feel inhibited by you.)
        </p>
  
        <p class="paragraph">
            <strong><span class="text-uppercase"><?php echo $communication_saturn_mercury[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $communication_saturn_mercury[1][0]['key_points'] ?> Points</span></span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $communication_saturn_mercury[0][0]['content'] ?>
        </p>

        <!-- <h3 class="purple-text"><strong>TOTAL COMMUNICATION SCORE: <?php echo $total_communication_score; ?></strong></h3> -->

        <hr/>
        

        <h4 id="match-matrix-communication" class="content-subtitle-large text-center mb-3"><p class="text-center mb-2" style="font-family: 'Roboto', sans-serif; font-size: 38px; font-weight:400;">PART THREE: VENUS</p></h4>

        <h3 class="purple-text text-center mb-5" style="font-family: 'Roboto', sans-serif; font-weight: 300 !important;"><strong>YOUR PLEASURE SCORE</strong></h3>
        
        <h3>DO YOU FEEL GOOD TOGETHER?</h3>

        <p class="paragraph">This section reveals how you experience pleasure with one another.</p>

        <p class="paragraph">A high pleasure score means that you share similar values and feel good in each other’s company. Enjoyment and good times flow naturally.</p>

        <p class="paragraph">A low pleasure score can mean one or both of you are just not feeling it, and might not be warm or affectionate with each other.</p>

        <p class="paragraph">In addition to this section, you can read the planet Venus’ combinations from previous sections to get even more insight into your romantic compatibility.</p>

         
        <hr/>

        <p class="paragraph">
            <strong>Your Venus in <?php echo $first_ven ?> / Their Venus in <?php echo $second_ven ?>:</strong> How you experience pleasure together.
        </p>
  
        <p class="paragraph">
            <strong><span class="text-uppercase"><?php echo $pleasure_venus_venus[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $pleasure_venus_venus[1][0]['key_points'] ?> Points</span></span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $pleasure_venus_venus[0][0]['content'] ?>
        </p>

        <hr/>

        <p class="paragraph">
            <strong>Your Venus in <?php echo $first_ven ?> / Their Mars in <?php echo $second_mars ?>:</strong> Their sexual desire for you, and your attraction to them.

        </p>
  
        <p class="paragraph">
            <strong><span class="text-uppercase"><?php echo $pleasure_venus_mars[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $pleasure_venus_mars[1][0]['key_points'] ?> Points</span></span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $pleasure_venus_mars[0][0]['content'] ?>
        </p>

        <hr/>

        <p class="paragraph">
            <strong>Your Mars in <?php echo $first_mars ?> / Their Venus in <?php echo $second_ven ?>:</strong> Your sexual desire for them, and their attraction to you.

        </p>

        <p class="paragraph">
            <strong><span class="text-uppercase"><?php echo $pleasure_mars_venus[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $pleasure_mars_venus[1][0]['key_points'] ?> Points</span></span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $pleasure_mars_venus[0][0]['content'] ?>
        </p>

        <hr/>

        <p class="paragraph">
            <strong>Your Venus in <?php echo $first_ven ?> / Their Jupiter in <?php echo $second_jupiter ?>:</strong> How they contribute to your sense of pleasure and enjoyment.

        </p>

        <p class="paragraph">
            <strong><span class="text-uppercase"><?php echo $pleasure_venus_jupiter[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $pleasure_venus_jupiter[1][0]['key_points'] ?> Points</span></span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $pleasure_venus_jupiter[0][0]['content'] ?>
        </p>

        <hr/>

        <p class="paragraph">
            <strong>Your Jupiter in <?php echo $first_jupiter ?> / Their Venus in <?php echo $second_ven ?>:</strong> How you contribute to their sense of pleasure and enjoyment.

        </p>

        <p class="paragraph">
            <strong><span class="text-uppercase"><?php echo $pleasure_jupiter_venus[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $pleasure_jupiter_venus[1][0]['key_points'] ?> Points</span></span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $pleasure_jupiter_venus[0][0]['content'] ?>
        </p>

        <hr/>

        <p class="paragraph">
            <strong>Your Venus in <?php echo $first_ven ?> / Their Saturn in <?php echo $second_sat ?>:</strong> How responsible they are with your heart (low score can mean cold or emotionally unavailable.)

        </p>

        <p class="paragraph">
            <strong><span class="text-uppercase"><?php echo $pleasure_venus_saturn[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $pleasure_venus_saturn[1][0]['key_points'] ?> Points</span></span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $pleasure_venus_saturn[0][0]['content'] ?>
        </p>

        <hr/>

        <p class="paragraph">
            <strong>Your Saturn in <?php echo $first_sat ?> / Their Venus in <?php echo $second_ven ?>:</strong> How responsible they are with your heart (low score can mean cold or emotionally unavailable.)

        </p>

        <p class="paragraph">
            <strong><span class="text-uppercase"><?php echo $pleasure_venus_saturn[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $pleasure_venus_saturn[1][0]['key_points'] ?> Points</span></span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $pleasure_venus_saturn[0][0]['content'] ?>
        </p>

        <!-- <h3 class="purple-text"><strong>TOTAL PLEASURE SCORE: <?php echo $total_pleasure_score; ?></strong></h3> -->

        <hr/>
        
        <h4 id="match-matrix-communication" class="content-subtitle-large text-center mb-3"><p class="text-center mb-2" style="font-family: 'Roboto', sans-serif; font-size: 38px; font-weight:400;">PART FOUR: MARS</p></h4>

        <h3 class="purple-text text-center mb-5" style="font-family: 'Roboto', sans-serif; font-weight: 300 !important;"><strong>YOUR SEXUALITY SCORE</strong></h3>
        
        <h3>ARE YOU SEXUALLY COMPATIBLE?</h3>

        <p class="paragraph">This section reveals what kind of passion you have for each other. </p>

        <p class="paragraph">A high desire score means that you have what it takes to set off fireworks in the bedroom. Good energy and sexual fulfillment is abundant.</p>

        <p class="paragraph">A low pleasure score can mean one or both of you aren’t feeling attraction for the other, or the timing could just be off. Frustration, obstacles, or fiery tempers could result.</p>

        <p class="paragraph">In addition to this section, you can read the planet Mars’ combinations from previous sections to get even more insight into your sexual compatibility.</p>
  
        <hr/>
        
        <p class="paragraph">
            <strong>Your Mars in <?php echo $first_mars ?> / Their Mars in <?php echo $second_mars ?>:</strong> How your energy flows together.

        </p>

        <p class="paragraph">
            <strong><span class="text-uppercase"><?php echo $desire_mars_mars[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $desire_mars_mars[1][0]['key_points'] ?> Points</span></span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $desire_mars_mars[0][0]['content'] ?>
        </p>

        <hr/>
        
        <p class="paragraph">
            <strong>Your Mars in <?php echo $first_mars ?> / Their Jupiter in <?php echo $second_jupiter ?>:</strong> How you fuel their imagination.

        </p>

        <p class="paragraph">
            <strong><span class="text-uppercase"><?php echo $desire_mars_jupiter[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $desire_mars_jupiter[1][0]['key_points'] ?> Points</span></span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $desire_mars_jupiter[0][0]['content'] ?>
        </p>

        <hr/>
        
        <p class="paragraph">
            <strong>Your Jupiter in <?php echo $first_jupiter ?> / Their Mars in <?php echo $second_mars ?>:</strong> How they fuel your imagination.

        </p>

        <p class="paragraph">
            <strong><span class="text-uppercase"><?php echo $desire_jupiter_mars[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $desire_jupiter_mars[1][0]['key_points'] ?> Points</span></span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $desire_jupiter_mars[0][0]['content'] ?>
        </p>

        <hr/>
        
        <p class="paragraph">
            <strong>Your Mars in <?php echo $first_mars ?> / Their Saturn in <?php echo $second_sat ?>:</strong> How steady their desire is for you (low score can mean sexual obstacles.)

        </p>

        <p class="paragraph">
            <strong><span class="text-uppercase"><?php echo $desire_mars_saturn[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $desire_mars_saturn[1][0]['key_points'] ?> Points</span></span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $desire_mars_saturn[0][0]['content'] ?>
        </p>

        <hr/>
        
        <p class="paragraph">
            <strong>Your Saturn in <?php echo $first_sat ?> / Their Mars in <?php echo $second_mars ?>:</strong> How steady your desire is for them (low score can mean sexual obstacles.)
        </p>

        <p class="paragraph">
            <strong><span class="text-uppercase"><?php echo $desire_saturn_mars[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $desire_saturn_mars[1][0]['key_points'] ?> Points</span></span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $desire_saturn_mars[0][0]['content'] ?>
        </p>

        <!-- <h3 class="purple-text"><strong>TOTAL DESIRE SCORE: <?php echo $total_desire_score; ?></strong></h3> -->

        <hr/>

        <h4 id="match-matrix-communication" class="content-subtitle-large text-center mb-3"><p class="text-center mb-2" style="font-family: 'Roboto', sans-serif; font-size: 38px; font-weight:400;">PART FIVE: JUPITER & SATURN</p></h4>

        <h3 class="purple-text text-center mb-5" style="font-family: 'Roboto', sans-serif; font-weight: 300 !important;"><strong>YOUR PERSONAL GROWTH AND KARMA SCORE</strong></h3>

        
        <h3>ARE YOU MEANT TO BE TOGETHER?</h3>

        <p class="paragraph">This section reveals what kind of personal growth you will experience with each other, and provides clues about your karma together.</p>

        <p class="paragraph">A high personal growth and karma score means that you fulfill each other on a spiritual level. You can both grow as individuals and expand your horizons.</p>

        <p class="paragraph">A low personal growth and karma score can indicate difficult karma, or even that you’re not meant to be together. You could end up feeling like two ships passing each other in the night.</p>

        <p class="paragraph">In addition to this section, you can read Jupiter and Saturn’s combinations from previous sections to get even more insight into your relationship potential and karma together.</p>
  
        <hr/>
        
        <p class="paragraph">
            <strong>Your Jupiter in <?php echo $first_jupiter ?> / Their Jupiter in <?php echo $second_jupiter ?>:</strong> How lucky you are together and how your belief systems align.

        </p>

        <p class="paragraph">
            <strong><span class="text-uppercase"><?php echo $growth_karma_jupiter_jupiter[1][0]['key_name'] ?></span> | <span class="purple-text"><?php echo $growth_karma_jupiter_jupiter[1][0]['key_points'] ?> Points</span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $growth_karma_jupiter_jupiter[0][0]['content'] ?>
        </p>

        <hr/>
        
        <p class="paragraph">
            <strong>Your Jupiter in <?php echo $first_jupiter ?> / Their Saturn in <?php echo $second_sat ?>:</strong> How they help you mature and grow.
        </p>

        <p class="paragraph">
            <strong><span class="text-uppercase"><?php echo $growth_karma_jupiter_saturn[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $growth_karma_jupiter_saturn[1][0]['key_points'] ?> Points</span></span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $growth_karma_jupiter_saturn[0][0]['content'] ?>
        </p>

        <hr/>
        
        <p class="paragraph">
            <strong>Your Saturn in <?php echo $first_sat ?> / Their Jupiter in <?php echo $second_jupiter ?>:</strong> How you help them mature and grow.
        </p>

        <p class="paragraph">
            <strong><span class="text-uppercase"><?php echo $growth_karma_saturn_jupiter[1][0]['key_name'] ?> |<span class="purple-text"> <?php echo $growth_karma_saturn_jupiter[1][0]['key_points'] ?> Points</span></span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $growth_karma_saturn_jupiter[0][0]['content'] ?>
        </p>

        <hr/>
        
        <p class="paragraph">
            <strong>Your Saturn in <?php echo $first_sat ?> / Their Saturn in <?php echo $second_sat ?>:</strong> What kind of karma you have together.
        </p>

        <p class="paragraph">
            <strong><span class="text-uppercase"><?php echo $growth_karma_saturn_saturn[1][0]['key_name'] ?> | <span class="purple-text"><?php echo $growth_karma_saturn_saturn[1][0]['key_points'] ?> Points</span></span></strong> 
        </p>

        <p class="paragraph">
            <?php echo $growth_karma_saturn_saturn[0][0]['content'] ?>
        </p>

        <!-- <h3 class="purple-text"><strong>TOTAL PERSONAL GROWTH AND KARMA SCORE: <?php echo $total_growth_karma_score; ?></strong></h3> -->

    </div>

    <div id="conclusion" class="chapter">

        <div class="sub-main-title-container">

            <h4 class="sub-main-title-firstline"><p><strong>Some Final Thoughts</strong></p></h4>

        </div>

        <p class="paragraph">
            Any good relationship takes work. So if your compatibility score was lower than you hoped, don’t be discouraged.
        </p>

        <p class="paragraph">
            The most important factor in a relationship is that both people care about each other and are willing to put in the effort to create a happy connection. 
        </p>

        <p class="paragraph">
            On the other hand, if your compatibility score was high, it’s important not to think that nothing will ever go wrong. 
        </p>

        <p class="paragraph">
            You will still have to work at making your relationship thrive.
        </p>

        <p class="paragraph">
            Keep in mind that a little bit of challenge or tension in your astrological synastry can make a relationship exciting, dynamic and growth oriented.
        </p>

        <p class="paragraph">
            However, too many problems can be overwhelming and extinguish the romance.
        </p>

        <p class="paragraph">
            You can return to this guide anytime you have questions about your relationship to help you make conscious decisions in matters of the heart.
        </p>

        <p class="paragraph">
            Above all, trust your intuition and step forward in love with an open heart, and open eyes.
        </p>

        <p class="paragraph">
        Wishing you the happiness and fulfillment your heart desires!
        </p>

    </div>

</div>

</div>
