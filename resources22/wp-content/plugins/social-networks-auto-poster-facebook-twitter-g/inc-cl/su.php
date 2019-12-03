<?php    
//## NextScripts Diigo Connection Class
$nxs_snapAvNts[] = array('code'=>'SU', 'lcode'=>'su', 'name'=>'StumbleUpon', 'type'=>'Link Sharing/Boormarks', 'ptype'=>'F', 'status'=>'A', 'desc'=>'Auto-submit bookmark to your account');

if (!class_exists("nxs_snapClassSU")) { class nxs_snapClassSU extends nxs_snapClassNT { 
  var $ntInfo = array('code'=>'SU', 'lcode'=>'su', 'name'=>'StumbleUpon', 'defNName'=>'uName', 'tstReq' => false, 'instrURL'=>'http://www.nextscripts.com/setup-installation-stumbleupon-social-networks-auto-poster-wordpress/');    
  
  function toLatestVer($ntOpts){ if( !empty($ntOpts['v'])) $v = $ntOpts['v']; else $v = 340; $ntOptsOut = '';  switch ($v) {
      case 340: $ntOptsOut = $this->toLatestVerNTGen($ntOpts); $ntOptsOut['do'] = $ntOpts['do'.$this->ntInfo['code']]; $ntOptsOut['nName'] = $ntOpts['nName'];  
        $ntOptsOut['inclTags'] = $ntOpts['suInclTags']; $ntOptsOut['nsfw'] = $ntOpts['nsfw']; $ntOptsOut['suCat'] = $ntOpts['suCat'];
        $ntOptsOut['msgTFormat'] = $ntOpts['suMsgTFormat']; $ntOptsOut['msgFormat'] = $ntOpts['suMsgFormat'];  $ntOptsOut['uName'] = $ntOpts['suUName'];  $ntOptsOut['uPass'] = $ntOpts['suPass']; $ntOptsOut['apiKey'] = $ntOpts['suAPIKey']; 
      break;
    }
    return !empty($ntOptsOut)?$ntOptsOut:$ntOpts; 
  } 
  
  function suCats() { return '<option value="A.I.">A.I.</option><option value="AIDS">AIDS</option><option value="Accounting">Accounting</option><option value="Acting">Acting</option><option value="Action Movies">Action Movies</option><option value="Activism">Activism</option><option value="Adult Humor">Adult Humor</option><option value="Advertising">Advertising</option><option value="Africa">Africa</option><option value="African Americans">African Americans</option><option value="Aging">Aging</option><option value="Agriculture">Agriculture</option><option value="Alcoholic Drinks">Alcoholic Drinks</option><option value="Alternative Energy">Alternative Energy</option><option value="Alternative Health">Alternative Health</option><option value="Alternative News">Alternative News</option><option value="Alternative Rock">Alternative Rock</option><option value="Amateur Radio">Amateur Radio</option><option value="Ambient Music">Ambient Music</option><option value="American Football">American Football</option><option value="American History">American History</option><option value="American Lit.">American Lit.</option><option value="Anarchism">Anarchism</option><option value="Anatomy">Anatomy</option><option value="Ancient History">Ancient History</option><option value="Animals">Animals</option><option value="Animation">Animation</option><option value="Anime">Anime</option><option value="Anthropology">Anthropology</option><option value="Antiaging">Antiaging</option><option value="Antiques">Antiques</option><option value="Archaeology">Archaeology</option><option value="Architecture">Architecture</option><option value="Art History">Art History</option><option value="Arthritis">Arthritis</option><option value="Arts">Arts</option><option value="Asia">Asia</option><option value="Asthma">Asthma</option><option value="Astrology/Psychics">Astrology/Psychics</option><option value="Astronomy">Astronomy</option><option value="Atheist/Agnostic">Atheist/Agnostic</option><option value="Audio Equipment">Audio Equipment</option><option value="Australia">Australia</option><option value="Aviation/Aerospace">Aviation/Aerospace</option><option value="BDSM">BDSM</option><option value="Babes">Babes</option><option value="Babies">Babies</option><option value="Badminton">Badminton</option><option value="Ballet">Ballet</option><option value="Banking">Banking</option><option value="Bargains/Coupons">Bargains/Coupons</option><option value="Baseball">Baseball</option><option value="Basketball">Basketball</option><option value="Beauty">Beauty</option><option value="Beer">Beer</option><option value="Beverages">Beverages</option><option value="Bicycling">Bicycling</option><option value="Billiards">Billiards</option><option value="Biographies">Biographies</option><option value="Biology">Biology</option><option value="Biomechanics">Biomechanics</option><option value="Biotech">Biotech</option><option value="Bird Watching">Bird Watching</option><option value="Birds">Birds</option><option value="Bisexual Culture">Bisexual Culture</option><option value="Bisexual Sex">Bisexual Sex</option><option value="Bizarre/Oddities">Bizarre/Oddities</option><option value="Blues music">Blues music</option><option value="Board Games">Board Games</option><option value="Boating">Boating</option><option value="Bodybuilding">Bodybuilding</option><option value="Books">Books</option><option value="Botany">Botany</option><option value="Bowling">Bowling</option><option value="Boxing">Boxing</option><option value="Brain Disorders">Brain Disorders</option><option value="Brazil">Brazil</option><option value="British Literature">British Literature</option><option value="Britpop">Britpop</option><option value="Buddhism">Buddhism</option><option value="Business">Business</option><option value="C.A.D.">C.A.D.</option><option value="Camping">Camping</option><option value="Canada">Canada</option><option value="Cancer">Cancer</option><option value="Canoeing/Kayaking">Canoeing/Kayaking</option><option value="Capitalism">Capitalism</option><option value="Car Parts">Car Parts</option><option value="Card Games">Card Games</option><option value="Career planning">Career planning</option><option value="Caribbean">Caribbean</option><option value="Cars">Cars</option><option value="Cartoons">Cartoons</option><option value="Catholic">Catholic</option><option value="Cats">Cats</option><option value="Celebrities">Celebrities</option><option value="Cell Phones">Cell Phones</option><option value="Celtic Music">Celtic Music</option><option value="Central America">Central America</option><option value="Chaos/Complexity">Chaos/Complexity</option><option value="Cheerleading">Cheerleading</option><option value="Chemical Eng.">Chemical Eng.</option><option value="Chemistry">Chemistry</option><option value="Chess">Chess</option><option value="Children\'s Books">Children\'s Books</option><option value="China">China</option><option value="Christian Music">Christian Music</option><option value="Christianity">Christianity</option><option value="Christmas">Christmas</option><option value="Cigars">Cigars</option><option value="Civil Engineering">Civil Engineering</option><option value="Classic Films">Classic Films</option><option value="Classic Rock">Classic Rock</option><option value="Classical Music">Classical Music</option><option value="Classical Studies">Classical Studies</option><option value="Climbing">Climbing</option><option value="Clothing">Clothing</option><option value="Coffee">Coffee</option><option value="Cognitive Science">Cognitive Science</option><option value="Cold War">Cold War</option><option value="Collecting">Collecting</option><option value="Comedy Movies">Comedy Movies</option><option value="Comic Books">Comic Books</option><option value="Communism">Communism</option><option value="Computer Graphics">Computer Graphics</option><option value="Computer Hardware">Computer Hardware</option><option value="Computer Science">Computer Science</option><option value="Computer Security">Computer Security</option><option value="Computers">Computers</option><option value="Conservative Politics">Conservative Politics</option><option value="Conspiracies">Conspiracies</option><option value="Construction">Construction</option><option value="Consumer Info">Consumer Info</option><option value="Continuing Education">Continuing Education</option><option value="Counterculture">Counterculture</option><option value="Country music">Country music</option><option value="Crafts">Crafts</option><option value="Cricket">Cricket</option><option value="Crime">Crime</option><option value="Crochet">Crochet</option><option value="Cult Films">Cult Films</option><option value="Culture/Ethnicity">Culture/Ethnicity</option><option value="Cyberculture">Cyberculture</option><option value="DJ\'s/Mixing">DJ\'s/Mixing</option><option value="Dance Music">Dance Music</option><option value="Dancing">Dancing</option><option value="Databases">Databases</option><option value="Dating Tips">Dating Tips</option><option value="Daytrading">Daytrading</option><option value="Dentistry">Dentistry</option><option value="Design">Design</option><option value="Desktop Publishing">Desktop Publishing</option><option value="Diabetes">Diabetes</option><option value="Disabilities">Disabilities</option><option value="Disco">Disco</option><option value="Divorce">Divorce</option><option value="Doctors/Surgeons">Doctors/Surgeons</option><option value="Dogs">Dogs</option><option value="Dolls/Puppets">Dolls/Puppets</option><option value="Drama Movies">Drama Movies</option><option value="Drawing">Drawing</option><option value="Drugs">Drugs</option><option value="Drum\'n\'Bass">Drum\'n\'Bass</option><option value="Eastern Studies">Eastern Studies</option><option value="Eating Disorders">Eating Disorders</option><option value="Ecology">Ecology</option><option value="Ecommerce">Ecommerce</option><option value="Economics">Economics</option><option value="Education">Education</option><option value="Electrical Eng.">Electrical Eng.</option><option value="Electronic Devices">Electronic Devices</option><option value="Electronic Parts">Electronic Parts</option><option value="Electronica/IDM">Electronica/IDM</option><option value="Embedded Systems">Embedded Systems</option><option value="Encryption">Encryption</option><option value="Energy Industry">Energy Industry</option><option value="Entertaining Guests">Entertaining Guests</option><option value="Entrepreneurship">Entrepreneurship</option><option value="Environment">Environment</option><option value="Equestrian/Horses">Equestrian/Horses</option><option value="Ergonomics">Ergonomics</option><option value="Erotic Literature">Erotic Literature</option><option value="Ethics">Ethics</option><option value="Ethnic Music">Ethnic Music</option><option value="Europe">Europe</option><option value="Evolution">Evolution</option><option value="Exotic Pets">Exotic Pets</option><option value="Extreme Sports">Extreme Sports</option><option value="Facebook">Facebook</option><option value="Family">Family</option><option value="Fantasy Books">Fantasy Books</option><option value="Fashion">Fashion</option><option value="Feminism">Feminism</option><option value="Fetish Sexuality">Fetish Sexuality</option><option value="Figure Skating">Figure Skating</option><option value="Film Noir">Film Noir</option><option value="Filmmaking">Filmmaking</option><option value="Financial planning">Financial planning</option><option value="Fine Arts">Fine Arts</option><option value="Firefox">Firefox</option><option value="Fish">Fish</option><option value="Fishing">Fishing</option><option value="Fitness">Fitness</option><option value="Flyfishing">Flyfishing</option><option value="Folk music">Folk music</option><option value="Food/Cooking">Food/Cooking</option><option value="For Kids">For Kids</option><option value="Foreign Films">Foreign Films</option><option value="Forensics">Forensics</option><option value="Forestry">Forestry</option><option value="Forums">Forums</option><option value="France">France</option><option value="Funk">Funk</option><option value="Futurism">Futurism</option><option value="Gadgets">Gadgets</option><option value="Gambling">Gambling</option><option value="Gardening">Gardening</option><option value="Gay Culture">Gay Culture</option><option value="Gay Sex">Gay Sex</option><option value="Genealogy">Genealogy</option><option value="Genetics">Genetics</option><option value="Geography">Geography</option><option value="Geoscience">Geoscience</option><option value="Germany">Germany</option><option value="Glaucoma">Glaucoma</option><option value="Golf">Golf</option><option value="Gospel music">Gospel music</option><option value="Goth Culture">Goth Culture</option><option value="Government">Government</option><option value="Graphic Design">Graphic Design</option><option value="Guitar">Guitar</option><option value="Guns">Guns</option><option value="Gymnastics">Gymnastics</option><option value="Hacking">Hacking</option><option value="Health">Health</option><option value="Heart Conditions">Heart Conditions</option><option value="Heavy metal">Heavy metal</option><option value="Hedonism">Hedonism</option><option value="Hentai Anime">Hentai Anime</option><option value="Hiking">Hiking</option><option value="Hinduism">Hinduism</option><option value="HipHop/Rap">HipHop/Rap</option><option value="History">History</option><option value="Hockey">Hockey</option><option value="Home Business">Home Business</option><option value="Home Improvement">Home Improvement</option><option value="Homebrewing">Homebrewing</option><option value="Homemaking">Homemaking</option><option value="Homeschooling">Homeschooling</option><option value="Horror Movies">Horror Movies</option><option value="Hotels">Hotels</option><option value="House music">House music</option><option value="Humanitarianism">Humanitarianism</option><option value="Humanities">Humanities</option><option value="Humor">Humor</option><option value="Hunting">Hunting</option><option value="IT">IT</option><option value="Independent Film">Independent Film</option><option value="India">India</option><option value="Indie Rock/Pop">Indie Rock/Pop</option><option value="Industrial Design">Industrial Design</option><option value="Industrial Music">Industrial Music</option><option value="Instant Messaging">Instant Messaging</option><option value="Insurance">Insurance</option><option value="Int\'l Development">Int\'l Development</option><option value="Interior Design">Interior Design</option><option value="Internet">Internet</option><option value="Internet Tools">Internet Tools</option><option value="Investing">Investing</option><option value="Ipod">Ipod</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Islam">Islam</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Japan">Japan</option><option value="Java">Java</option><option value="Jazz">Jazz</option><option value="Jewelry">Jewelry</option><option value="Journalism">Journalism</option><option value="Judaism">Judaism</option><option value="Karaoke">Karaoke</option><option value="Kids">Kids</option><option value="Kinesiology">Kinesiology</option><option value="Knitting">Knitting</option><option value="Korea">Korea</option><option value="Landscaping">Landscaping</option><option value="Latin Music">Latin Music</option><option value="Law">Law</option><option value="Learning Disorders">Learning Disorders</option><option value="Lefthanded">Lefthanded</option><option value="Lesbian Culture">Lesbian Culture</option><option value="Lesbian Sex">Lesbian Sex</option><option value="Liberal Politics">Liberal Politics</option><option value="Liberties/Rights">Liberties/Rights</option><option value="Library Resources">Library Resources</option><option value="Lingerie">Lingerie</option><option value="Linguistics">Linguistics</option><option value="Linux/Unix">Linux/Unix</option><option value="Literature">Literature</option><option value="Live Theatre">Live Theatre</option><option value="Logic">Logic</option><option value="Lounge Music">Lounge Music</option><option value="Luxury">Luxury</option><option value="MacOS">MacOS</option><option value="Machinery">Machinery</option><option value="Magic/Illusions">Magic/Illusions</option><option value="Management/HR">Management/HR</option><option value="Manufacturing">Manufacturing</option><option value="Marine Biology">Marine Biology</option><option value="Marketing">Marketing</option><option value="Married Life">Married Life</option><option value="Martial Arts">Martial Arts</option><option value="Matchmaking">Matchmaking</option><option value="Mathematics">Mathematics</option><option value="Mechanical Eng.">Mechanical Eng.</option><option value="Medical Science">Medical Science</option><option value="Medieval History">Medieval History</option><option value="Memorabilia">Memorabilia</option><option value="Men\'s Issues">Men\'s Issues</option><option value="Mental Health">Mental Health</option><option value="Meteorology">Meteorology</option><option value="Mexico">Mexico</option><option value="Microbiology">Microbiology</option><option value="Middle East">Middle East</option><option value="Military">Military</option><option value="Mining/Metallurgy">Mining/Metallurgy</option><option value="Mobile Computing">Mobile Computing</option><option value="Mormon">Mormon</option><option value="Motor Sports">Motor Sports</option><option value="Motorcycles">Motorcycles</option><option value="Movies">Movies</option><option value="Multimedia">Multimedia</option><option value="Music">Music</option><option value="Music Composition">Music Composition</option><option value="Music Instruments">Music Instruments</option><option value="Music Theory">Music Theory</option><option value="Musicals">Musicals</option><option value="Musician Resources">Musician Resources</option><option value="Mutual Funds">Mutual Funds</option><option value="Mystery Novels">Mystery Novels</option><option value="Mythology">Mythology</option><option value="Nanotech">Nanotech</option><option value="Native Americans">Native Americans</option><option value="Nature">Nature</option><option value="Netherlands">Netherlands</option><option value="Network Security">Network Security</option><option value="Neuroscience">Neuroscience</option><option value="New Age">New Age</option><option value="New York">New York</option><option value="News(General)">News(General)</option><option value="Nightlife">Nightlife</option><option value="Nonprofit/Charity">Nonprofit/Charity</option><option value="Nuclear Science">Nuclear Science</option><option value="Nude Art">Nude Art</option><option value="Nursing">Nursing</option><option value="Nutrition">Nutrition</option><option value="Oceania">Oceania</option><option value="Oldies Music">Oldies Music</option><option value="Online Games">Online Games</option><option value="Open Source">Open Source</option><option value="Opera">Opera</option><option value="Operating Systems">Operating Systems</option><option value="Options/Futures">Options/Futures</option><option value="Orthodox">Orthodox</option><option value="Outdoors">Outdoors</option><option value="P2P">P2P</option><option value="PHP">PHP</option><option value="Paganism">Paganism</option><option value="Painting">Painting</option><option value="Paleontology">Paleontology</option><option value="Paranormal">Paranormal</option><option value="Parenting">Parenting</option><option value="Percussion">Percussion</option><option value="Performing Arts">Performing Arts</option><option value="Peripheral Devices">Peripheral Devices</option><option value="Perl">Perl</option><option value="Personal Sites">Personal Sites</option><option value="Petroleum">Petroleum</option><option value="Pets">Pets</option><option value="Pharmacology">Pharmacology</option><option value="Philosophy">Philosophy</option><option value="Photo Gear">Photo Gear</option><option value="Photography">Photography</option><option value="Photoshop">Photoshop</option><option value="Physical Therapy">Physical Therapy</option><option value="Physics">Physics</option><option value="Physiology">Physiology</option><option value="Poetry">Poetry</option><option value="Poker">Poker</option><option value="Political Science">Political Science</option><option value="Politics">Politics</option><option value="Pop music">Pop music</option><option value="Pornography">Pornography</option><option value="Postmodernism">Postmodernism</option><option value="Pregnancy/Birth">Pregnancy/Birth</option><option value="Programming">Programming</option><option value="Protestant">Protestant</option><option value="Proxy">Proxy</option><option value="Psychiatry">Psychiatry</option><option value="Psychology">Psychology</option><option value="Punk Rock">Punk Rock</option><option value="Puzzles">Puzzles</option><option value="Quilting">Quilting</option><option value="Quizzes">Quizzes</option><option value="Quotes">Quotes</option><option value="Racquetball">Racquetball</option><option value="Radio Broadcasts">Radio Broadcasts</option><option value="Rave Culture">Rave Culture</option><option value="Real Estate">Real Estate</option><option value="Recording Gear">Recording Gear</option><option value="Reggae">Reggae</option><option value="Relationships">Relationships</option><option value="Religion">Religion</option><option value="Research">Research</option><option value="Restaurants">Restaurants</option><option value="Restoration">Restoration</option><option value="Robotics">Robotics</option><option value="Rock music">Rock music</option><option value="Rodeo">Rodeo</option><option value="Roleplaying Games">Roleplaying Games</option><option value="Romance Novels">Romance Novels</option><option value="Rugby">Rugby</option><option value="Running">Running</option><option value="Russia">Russia</option><option value="SEO">SEO</option><option value="Sailing">Sailing</option><option value="Satire">Satire</option><option value="Science">Science</option><option value="Science Fiction">Science Fiction</option><option value="Scientology">Scientology</option><option value="Scouting">Scouting</option><option value="Scrapbooking">Scrapbooking</option><option value="Scuba Diving">Scuba Diving</option><option value="Sculpting">Sculpting</option><option value="Search">Search</option><option value="Self Improvement">Self Improvement</option><option value="Semiconductors">Semiconductors</option><option value="Senior Citizens">Senior Citizens</option><option value="Sewing">Sewing</option><option value="Sex Industry">Sex Industry</option><option value="Sex Toys">Sex Toys</option><option value="Sexual Health">Sexual Health</option><option value="Sexuality">Sexuality</option><option value="Shakespeare">Shakespeare</option><option value="Shareware">Shareware</option><option value="Shopping">Shopping</option><option value="Skateboarding">Skateboarding</option><option value="Skiing">Skiing</option><option value="Skydiving">Skydiving</option><option value="Snowboarding">Snowboarding</option><option value="Soap Operas">Soap Operas</option><option value="Soccer">Soccer</option><option value="Socialism">Socialism</option><option value="Sociology">Sociology</option><option value="Software">Software</option><option value="Songwriting">Songwriting</option><option value="Soul/R&amp;B">Soul/R&amp;B</option><option value="Soundtracks">Soundtracks</option><option value="South America">South America</option><option value="Space Exploration">Space Exploration</option><option value="Spain">Spain</option><option value="Spas">Spas</option><option value="Spirituality">Spirituality</option><option value="Sports(General)">Sports(General)</option><option value="Squash">Squash</option><option value="Statistics">Statistics</option><option value="StumbleUpon">StumbleUpon</option><option value="Subculture">Subculture</option><option value="Substance Abuse">Substance Abuse</option><option value="Sufism">Sufism</option><option value="Sunni">Sunni</option><option value="Supercomputing">Supercomputing</option><option value="Surfing">Surfing</option><option value="Survivalist">Survivalist</option><option value="Swimming">Swimming</option><option value="Swingers">Swingers</option><option value="Tattoos/Piercing">Tattoos/Piercing</option><option value="Taxation">Taxation</option><option value="Tea">Tea</option><option value="Techno">Techno</option><option value="Technology">Technology</option><option value="Teen Life">Teen Life</option><option value="Teen Parenting">Teen Parenting</option><option value="Telecom">Telecom</option><option value="Television">Television</option><option value="Tennis">Tennis</option><option value="Terrorism">Terrorism</option><option value="Toys">Toys</option><option value="Track/Field">Track/Field</option><option value="Trains/Railroads">Trains/Railroads</option><option value="Trance">Trance</option><option value="Transexual Sex">Transexual Sex</option><option value="Transportation">Transportation</option><option value="Travel">Travel</option><option value="TripHop/Downtempo">TripHop/Downtempo</option><option value="UFOs">UFOs</option><option value="UK">UK</option><option value="USA">USA</option><option value="University/College">University/College</option><option value="Vegetarian">Vegetarian</option><option value="Video Equipment">Video Equipment</option><option value="Video Games">Video Games</option><option value="Vintage Cars">Vintage Cars</option><option value="Virtual Reality">Virtual Reality</option><option value="Vocal Music">Vocal Music</option><option value="Volleyball">Volleyball</option><option value="Water Sports">Water Sports</option><option value="Web Development">Web Development</option><option value="Webhosting">Webhosting</option><option value="Weblogs">Weblogs</option><option value="Weddings">Weddings</option><option value="Weight Loss">Weight Loss</option><option value="Wicca">Wicca</option><option value="Windows">Windows</option><option value="Windows Dev">Windows Dev</option><option value="Windsurfing">Windsurfing</option><option value="Wine">Wine</option><option value="Women\'s Issues">Women\'s Issues</option><option value="Woodworking">Woodworking</option><option value="Wrestling">Wrestling</option><option value="Writing">Writing</option><option value="Yoga">Yoga</option><option value="Zoology">Zoology</option>'; }
  
  //#### Show Common Settings
  function showGenNTSettings($ntOpts){ $this->nt = $ntOpts; $this->showNTGroup(); return; }  
  //#### Show NEW Settings Page
  function showNewNTSettings($ii){ $defO = array('nName'=>'', 'do'=>'1', 'uName'=>'', 'uPass'=>'', 'suCat'=>'', 'nsfw'=>'', 'inclTags'=>'1', 'msgTFormat'=>'%TITLE%', 'msgFormat'=>"%EXCERPT%"); $this->showGNewNTSettings($ii, $defO); }
  //#### Show Unit  Settings  
  function checkIfSetupFinished($options) { return !empty($options['uPass']); }
  function accTab($ii, $options, $isNew=false){ $ntInfo = $this->ntInfo; $nt = $ntInfo['lcode']; ?><div id="altFormat" style=""> <div style="width:100%;"><strong>StumbleUpon Category:</strong> </div>
      <select name="su[<?php echo $ii; ?>][suCat]" id="suCat<?php echo $ii; ?>"><option value="error" selected="selected" disabled="">Select default StumbleUpon Category</option>
        <?php  $suCats = $this->suCats(); if (isset($options['suCat']) && $options['suCat']!='') $suCats = str_replace('"'.$options['suCat'].'"', '"'.$options['suCat'].'" selected="selected"', $suCats);  echo $suCats; ?>
      </select><input value="1" type="checkbox" name="su[<?php echo $ii; ?>][nsfw]"  <?php if ((int)$options['nsfw'] == 1) echo "checked"; ?> /> <strong>NSFW</strong>
    </div> <?php $this->elemUserPass($ii, $options['uName'], $options['uPass']); $this->elemMsgFormat($ii,'Message Text Format','msgFormat',$options['msgFormat']);?><br/ >
    <div style="margin-bottom: 20px;margin-top: 5px;"><input value="1" type="checkbox" name="<?php echo $nt; ?>[<?php echo $ii; ?>][inclTags]"  <?php if ((int)$options['inclTags'] == 1) echo "checked"; ?> /> 
       <strong><?php _e('Post with tags', 'social-networks-auto-poster-facebook-twitter-g'); ?></strong> <?php _e('Tags from the blogpost will be included', 'social-networks-auto-poster-facebook-twitter-g'); ?>                                
    </div> <?php
  }
  function advTab($ii, $options){ $this->showProxies($this->ntInfo['lcode'], $ii, $options); }
  //#### Set Unit Settings from POST
  function setNTSettings($post, $options){ 
    foreach ($post as $ii => $pval){       
      if (!empty($pval['uPass']) && !empty($pval['uPass'])){ if (!isset($options[$ii])) $options[$ii] = array(); $options[$ii] = $this->saveCommonNTSettings($pval,$options[$ii]); 
        if (isset($pval['suCat']))   $options[$ii]['suCat'] = trim($pval['suCat']); if (isset($pval['nsfw']))   $options[$ii]['nsfw'] = trim($pval['nsfw']);  else  $options[$ii]['nsfw'] = 0;             
      } elseif ( count($pval)==1 ) if (isset($pval['do'])) $options[$ii]['do'] = $pval['do']; else $options[$ii]['do'] = 0; 
    } return $options;
  }
    
  //#### Show Post->Edit Meta Box Settings
  function showEdPostNTSettings($ntOpts, $post){ $post_id = $post->ID; $nt = $this->ntInfo['lcode']; $ntU = $this->ntInfo['code'];
      foreach($ntOpts as $ii=>$ntOpt)  { $isFin = $this->checkIfSetupFinished($ntOpt); if (!$isFin) continue; 
        $pMeta = maybe_unserialize(get_post_meta($post_id, 'snap'.$ntU, true)); if (is_array($pMeta) && !empty($pMeta[$ii])) $ntOpt = $this->adjMetaOpt($ntOpt, $pMeta[$ii]);         
        
        if (empty($ntOpt['imgToUse'])) $ntOpt['imgToUse'] = ''; if (empty($ntOpt['urlToUse'])) $ntOpt['urlToUse'] = ''; $postType = isset($ntOpt['postType'])?$ntOpt['postType']:'';
        $msgFormat = !empty($ntOpt['msgFormat'])?htmlentities($ntOpt['msgFormat'], ENT_COMPAT, "UTF-8"):''; $msgTFormat = !empty($ntOpt['msgTFormat'])?htmlentities($ntOpt['msgTFormat'], ENT_COMPAT, "UTF-8"):''; 
        $imgToUse = $ntOpt['imgToUse'];  $urlToUse = $ntOpt['urlToUse'];  $ntOpt['ii']=$ii;
         
        $this->nxs_tmpltAddPostMeta($post, $ntOpt, $pMeta); ?>
        <?php  $this->elemEdMsgFormat($ii, __('Message Format:', 'social-networks-auto-poster-facebook-twitter-g'),$msgFormat); ?>
        <tr style=""><th scope="row" style="text-align:right; width:60px; padding-right:10px;">Category:</th> <td><div id="altFormat" style="">  
          <select name="su[<?php echo $ii; ?>][suCat]"><option value="error" selected="selected" disabled="">Select default StumbleUpon Category</option>
            <?php $suCats = $this->suCats(); if (isset($ntOpt['suCat']) && $ntOpt['suCat']!='') $suCats = str_replace('"'.$ntOpt['suCat'].'"', '"'.$ntOpt['suCat'].'" selected="selected"', $suCats);  echo $suCats; ?>
          </select> <input value="0" type="hidden" name="su[<?php echo $ii; ?>][nsfw]" /> <input value="1" type="checkbox" name="su[<?php echo $ii; ?>][nsfw]"  <?php if ((int)$ntOpt['nsfw'] == 1) echo "checked"; ?> /> <strong>NSFW</strong>            
        </div> </td></tr>
        <?php /* ## Select Image & URL ## */ nxs_showURLToUseDlg($nt, $ii, $urlToUse); $this->nxs_tmpltAddPostMetaEnd($ii);        
     }
  }  
  //#### Save Meta Tags to the Post
  function adjMetaOpt($optMt, $pMeta){ $optMt = $this->adjMetaOptG($optMt, $pMeta);  //   prr($optMt);    
    if (!empty($pMeta['suCat'])) $optMt['suCat'] = $pMeta['suCat']; if (!empty($pMeta['nsfw'])) $optMt['nsfw'] = $pMeta['nsfw']; else $optMt['nsfw'] = 0;            
    return $optMt;
  }
  
  function adjPublishWP(&$options, &$message, $postID){ 
      
  }
}}

if (!function_exists("nxs_doPublishToSU")) { function nxs_doPublishToSU($postID, $options){ if (!is_array($options)) $options = maybe_unserialize(get_post_meta($postID, $options, true)); 
  $cl = new nxs_snapClassSU(); $cl->nt[$options['ii']] = $options; return $cl->publishWP($options['ii'], $postID); 
}}  
?>