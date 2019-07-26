<?php 
  include get_template_directory() . '/config.php';
?>
<html>
    <head>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/logo.png'; ?> "> 
      <title> Katha Utsav </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        
        <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Noto+Serif+JP|Work+Sans:300,400,700|Literata:600" rel="stylesheet">
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/style.css'; ?> ">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/bootstrap.min.css'; ?> ">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/style.css'; ?> ">
        <style>
      
        .section {
          clear: both;
          margin:20px;
          padding:20px;
        }

        #aboutut
        {
            text-align: center; 
            font-size: 4em; 
            font-weight: 700;
        }

        /*  COLUMN SETUP  */
        .col {
          display: block;
          float:left;
          margin: 1% 0 1% 1.6%;
          background: hsl(263, 92%, 90%);
          border-radius: 8px;
          box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
          cursor: pointer;
          padding-top: 30px;
          margin-top: 30px;
          
        }
        .col:first-child { margin-left: 0; }

        /*  GROUPING  */
        .group:before,
        .group:after { content:""; display:table; }
        .group:after { clear:both;}
        .group { zoom:1; /* For IE 6/7 */ }

        /*  GRID OF THREE  */
        .span_3_of_3 { width: 100%; height: 60%;}
        .span_2_of_3 { width: 66.13%; height: 60%;}
        .span_1_of_3 { width: 32.26%; height: 60%;}

        /*  GO FULL WIDTH BELOW 480 PIXELS */
        @media only screen and (max-width: 1600px) {
          .col {  margin: 1% 0% 1% 0%; }
          .span_3_of_3, .span_2_of_3, .span_1_of_3 { width: 100%; height: 50%;}
          
          #aboutut{
            font-size: 3em;
            font-weight: 700;
          }
        }
        @media only screen and (max-width: 800px) {
          .col {  margin: 1% 0% 1% 0%; }
          .span_3_of_3, .span_2_of_3, .span_1_of_3 { width: 100%; height: 60%;}
          #aboutut{
            font-size: 2em;
            font-weight: 700;
          }
          #contact
          {
            font-size: 0.95em;
          }
        }

        @media only screen and (max-width: 500px) {
          .col {  margin: 1% 0 1% 0%; }
          .span_3_of_3, .span_2_of_3, .span_1_of_3 { height: 100%; }
          #aboutut{
            font-size: 1.3em;
            font-weight: 700;
          }

         .mb-5{
           margin-bottom: 0 !important;
         }
        }

		</style>
    
    </head>

    <body>
      <div class="site-wrap">
        <div class="site-mobile-menu">
          <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
              <span class="icon-close2 js-menu-toggle"></span>
            </div>
          </div>
          <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->


      <div class="site-navbar-wrap js-site-navbar bg-white">
        <div class="container">
          <div class="site-navbar bg-light">
            <div class="py-1">
              <div class="row align-items-center">
                <div class="col-2">
                  <h2 class="mb-0 site-logo"><img src="<?php echo get_template_directory_uri(). '/katha-utsav.png'; ?>"></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="site-blocks-cover overlay" style="background-image: url('<?php echo get_template_directory_uri(). "/katha.jpg"; ?>');" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-10 text-center" data-aos="fade">
              <h1 class="mb-5" id="hi2">Katha Utsav 2019 is here!</h1>
              <p class="mb-5" class="icons" id="hi">
                <a target="_blank" href="https://www.instagram.com/kathaindia/?hl=en"><ion-icon name="logo-instagram" size="large"></ion-icon></a>
                &bullet;
                <a target="_blank" href="https://www.facebook.com/kathaindia/"><ion-icon name="logo-facebook" size="large"></ion-icon></a>
                &bullet;
                <a target="_blank" href="https://twitter.com/KathaIndia"><ion-icon name="logo-twitter" size="large"></ion-icon></a>
                &bullet;
                <a target="_blank" href="https://katha.org/blog/"><ion-icon name="book" size="large"></ion-icon></a>
              </p>
              <p id="contact"> Contact details: event@katha.org, 8800797614 </p>
              <p class="regular-font-size">
                <a href="#register" style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-primary px-4 py-3 text-uppercase">Register as a student</a>
                <a href="./schools" target="_blank" style="margin-bottom: 10px" class="btn btn-primary px-4 py-3 text-uppercase">Register as a school</a>
              </p>
            </div>
          </div>
        </div>
      </div>      

      <div class="site-section" style="text-align: center;">
        <div class="container" style="text-align: center;">
          <div class="row justify-content-center">
            <div class="col-md-7 mx-auto" style="text-align: center;">
              <h2 id="aboutut" class="mb-5 text-uppercase" >About The Utsav</h2>
            </div>
			</div>
          <div class="row justify-content-center" style="text-align: center;">
            <div style="max-width:85%; text-align: center;" >
              <p>The twenty-first century needs <b>creative</b> and <b>compassionate</b> minds, and we believe that children have the potential to make a real change. The Katha National Writers' Workshop, culminating in the grand <b>Katha Utsav</b> is designed to draw out the creative spark in every child, and give them opportunities to develop their writing skills.</p>
              <p class="mb-5">The <b>KNWW</b> or Katha National Writers' Workshop, is live! This year, use the form below, to submit your entries in either of the following genres: Fiction, Non-Fiction, and Poetry. If you like to write enchanting fantasies, page-turning thrillers, avant-garde science fiction, or can chronicle non-fiction, or weave together a poem, then the Writers' Workshop is meant just for you! After an initial selection by an august jury of the online entries, the shortlisted candidates will get a chance to put their wits together with India's best literary artists and mentors, at the <b>Regional and National Workshops</b>. So what are you waiting for? Pick up that pen, err, mouse, and get,set,go!</p>
              <p>Just so we all get it right, here's a brief exemplification of the genres:</p>
            </div>
          </div>
      </div>

      <div class="section group" style="text-align: center">
          <div class="col span_1_of_3" style="text-align: center">
            <h2>Poetry</h2>
            <p style="justify-content:center">A poem can be so much fun! Have you tried singing a poem? You can sing most poems because they have a flow and a beat. Every word in a poem is important and full of meaning. Don’t be afraid of breaking the rules of grammar, punctuation and capitalization when writing a poem.</p>
          </div>
          <div class="col span_1_of_3">
            <h2>Fiction</h2>
            <p>Our country is full of folk tales that our grandmothers have told us. Think about the people, rivers, trees, butterflies, dogs, tigers, fish around you ... Think about everything! Dream, imagine and invent your own story. Go wild. Make it strange, mysterious, imaginative, fantastical, adventurous or sci-fi. The best story is the one that leaves the reader amazed and teary-eyed, at the edge of their seats, biting their nails off and most of the times beaming – truly a ride of emotions.</p>
          </div>
          <div class="col span_1_of_3">
            <h2>Non-Fiction</h2>
            <p>Do you have a story to tell about someone around you who has inspired you or made you think? Perhaps it’s a story about yourself that you want to tell the world! Essays, biographies, interviews, true stories with facts about people make us more considerate and compassionate. They help us know more about the world and fill us with enthusiasm.</p>
          </div>
        </div>

    </div>      


      <div class="site-block-half d-flex images">
      
        <div class="image bg-image" style="background-image: url('<?php echo get_template_directory_uri(). "/1.jpg"; ?>');"></div>
        <div class="image bg-image" style="background-image: url('<?php echo get_template_directory_uri(). "/2.jpg"; ?>');"></div>
      </div>

      <div class="site-section">
        <div class="container">
          <div style="text-align:center">
              <h2 class="mb-5 text-uppercase" id="oof" >Register now!</h2>
              <h2 class="mb-5 text-uppercase" id="oof1" >For the Katha National Writers' Workshop</h2>
          </div>
          <img class="info" src="<?php echo get_template_directory_uri(). '/kat.jpg'; ?>">
          <h2 class="mb-5 text-uppercase" id="oof" style="margin-top: 10%">How it works</h2>
          <div style ="display: inline-block; margin: 0 auto;">
            <img style="width:30%" src="<?php echo get_template_directory_uri(). '/a1.jpg'; ?>">
            <img style="width: 65%" src="<?php echo get_template_directory_uri(). '/a2.jpg'; ?>">
          </div>
          <div style="text-align: center; margin: 50px auto;">
          <a href="./read-more" target="_blank" style="margin-bottom: 10px" class="btn btn-primary px-4 py-3 text-uppercase">Read more</a></div>
        </div>
      </div>

      <div class="site-block-half d-flex images">
        <div class="image bg-image" style="background-image: url('<?php echo get_template_directory_uri(). "/4.jpg"; ?>');"></div>
        <div class="image bg-image" style="background-image: url('<?php echo get_template_directory_uri(). "/3.jpg"; ?>');"></div>
      </div>


      <div class="site-section" style="text-align: center; background: rgb(122, 40, 109);" id="register" >
        <div class="container" style="text-align: center">
          <div class="row">
            <div class="col-md-6 mx-auto text-center mb-5 section-heading">
              <h2 class="mb-5 text-uppercase" style="color:white">Register</h2>
            </div>
          </div>
          <section>
          <div id="thanks"> <h2> Your response has been recorded. Thank you! </h2></div>
          <?php if (isset($_POST['razorpay_payment_id'])): ?>     
            <div id="wrapper">
                <div class="box">
                    <h2 id="reply" class="details">The payment has been made. Kindly review your details and click on submit. </h2>
                      <form id="test-form" action="index.php" method="POST">
                        <div class="live">
                            <input type="text" id="first" name="firstname" value="<?PHP echo $_POST['firstname']; ?>" placeholder="First Name"/>
                            <input type="text" id="last" name="lastname" value="<?PHP echo $_POST['lastname']; ?>" placeholder="Last Name"/>
                        </div>
                        <input type="text" id="email" name="email" value="<?PHP echo $_POST['email']; ?>" placeholder="Email" required/>
                        <input type="text" id="phone" name="phone" value="<?PHP echo $_POST['phone']; ?>" placeholder="Phone number"/>
                        <div class="live">
                          <input type="text" id="country" name="country" value="<?PHP echo $_POST['country']; ?>" placeholder="Country"/>
                          <input type="text" id="city" name="city" value="<?PHP echo $_POST['city']; ?>" placeholder="City"/>
                        </div>
                        <input type="text" id="school" name="school" value="<?PHP echo $_POST['school']; ?>" placeholder="School" required="" />
                        <input id="class" name="class" value="<?PHP echo $_POST['class']; ?>" placeholder="Class" required="" />
                        <input id="genre" name="genre" value="<?PHP echo $_POST['genre']; ?>" placeholder="Genre" required="" />
                        <input id="language" name="language" value="<?PHP echo $_POST['language']; ?>" placeholder="Language" required="" />
                        <input type="hidden" name="id" value="<?PHP echo $_POST['razorpay_payment_id']; ?>" placeholder="Field 5" required />
                        <textarea id="story" name="story" required><?PHP echo $_POST['story_init']; ?></textarea>
                        <input type="submit" id="submit-form" value="Submit story" onclick="fn()" />
                      </form>
                </div> 
            </div>
            <?php else: ?>
            <div class="top">
                <h2 class="det">Kindly make a payment of Rs 150 to enable the submit story option. </h2>
                <h2 class="det">IMPORTANT: Be sure to click on the submit button after payment has been made.</h2>
            </div>
            <div id="wrapper">
                <div class="box">
                    <form action="index.php#register" method="POST">
                        <h2 class="details">Details</h2>
                        <div class="live">
                          <input type="text" id="first" name="firstname" placeholder="First Name" required/>
                          <input type="text" id="last" name="lastname" placeholder="Last Name" required/>
                        </div>
                        <input type="text" id="email" name="email" placeholder="Email" required/>
                        <input type="text" id="phone" name="phone" placeholder="Phone number" required/>
                        <div class="live">
                        <input type="text" id="country" name="country" placeholder="Country" required/>
                        <input type="text" id="city" name="city" placeholder="City" required/>
                        </div>
                        <input type="text" id="school" name="school" placeholder="School" required/>                      
                        <select id="class" name="class" required>
                          <option value="">Class</option>
                          <option value="4-6">4-6</option>
                          <option value="7-9">7-9</option>
                          <option value="10-12">10-12</option>
                        </select>
                        <select name="genre" id="genre" required>
                          <option value="">Genre</option>
                          <option value="Fiction">Fiction</option>
                          <option value="Non-Fiction">Non-Fiction</option>
                          <option value="Poetry">Poetry</option>
                        </select>
                        <select name="language" required id="language" required>
                          <option value="">Language</option>
                          <option value="English">English</option>
                          <option value="हिंदी">हिंदी</option>
                        </select>
                        <textarea id="story_init" name="story_init" placeholder="Add your story here" required></textarea>
                        <script
                            src="https://checkout.razorpay.com/v1/checkout.js"
                            data-key="<?php echo $razor_api_key; ?>"
                            data-amount="15000"
                            data-buttontext="Pay with RazorPay"
                            data-name="Katha Utsav"
                            data-description="Registration fees"
                            data-image="<?php echo get_template_directory_uri(). '/logo.png'; ?>"
                            data-prefill.name="Your name"
                            data-prefill.email="Your email"
                            data-theme.color="#800080"
                            ></script>
                        <input type="hidden" value="Hidden Element" name="hidden">
                    </form>
                </div>
            </div>
          </section>
          <?php endif; ?> 
        </div>
        </div>
      </div>

        
          
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.1.0/jquery-migrate.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/jquery.stellar@0.6.2/jquery.stellar.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
          <script src="<?php echo get_template_directory_uri() . '/js/aos.js'; ?> "></script>
          <script src="<?php echo get_template_directory_uri() . '/js/main.js'; ?> "></script>
        <script>
          
        function fn() {
          $("#wrapper").hide();
          $("#thanks").show();
        };
        
        (function (root, factory) {

          // AMD
          if (typeof define === "function" && define.amd) {
            define(["exports", "jquery"], function (exports, $) {
              return factory(exports, $);
            });
          }

          // CommonJS
          else if (typeof exports !== "undefined") {
            var $ = require("jquery");
            factory(exports, $);
          }

          // Browser
          else {
            factory(root, (root.jQuery || root.Zepto || root.ender || root.$));
          }

        }(this, function (exports, $) {

          var patterns = {
            validate: /^[a-z_][a-z0-9_]*(?:\[(?:\d*|[a-z0-9_]+)\])*$/i,
            key: /[a-z0-9_]+|(?=\[\])/gi,
            push: /^$/,
            fixed: /^\d+$/,
            named: /^[a-z0-9_]+$/i
          };

          function FormSerializer(helper, $form) {

            // private variables
            var data = {},
              pushes = {};

            // private API
            function build(base, key, value) {
              base[key] = value;
              return base;
            }

            function makeObject(root, value) {

              var keys = root.match(patterns.key),
                k;

              // nest, nest, ..., nest
              while ((k = keys.pop()) !== undefined) {
                // foo[]
                if (patterns.push.test(k)) {
                  var idx = incrementPush(root.replace(/\[\]$/, ''));
                  value = build([], idx, value);
                }

                // foo[n]
                else if (patterns.fixed.test(k)) {
                  value = build([], k, value);
                }

                // foo; foo[bar]
                else if (patterns.named.test(k)) {
                  value = build({}, k, value);
                }
              }

              return value;
            }

            function incrementPush(key) {
              if (pushes[key] === undefined) {
                pushes[key] = 0;
              }
              return pushes[key]++;
            }

            function encode(pair) {
              switch ($('[name="' + pair.name + '"]', $form).attr("type")) {
                case "checkbox":
                  return pair.value === "on" ? true : pair.value;
                default:
                  return pair.value;
              }
            }

            function addPair(pair) {
              if (!patterns.validate.test(pair.name)) return this;
              var obj = makeObject(pair.name, encode(pair));
              data = helper.extend(true, data, obj);
              return this;
            }

            function addPairs(pairs) {
              if (!helper.isArray(pairs)) {
                throw new Error("formSerializer.addPairs expects an Array");
              }
              for (var i = 0, len = pairs.length; i < len; i++) {
                this.addPair(pairs[i]);
              }
              return this;
            }

            function serialize() {
              return data;
            }

            function serializeJSON() {
              return JSON.stringify(serialize());
            }

            // public API
            this.addPair = addPair;
            this.addPairs = addPairs;
            this.serialize = serialize;
            this.serializeJSON = serializeJSON;
          }

          FormSerializer.patterns = patterns;

          FormSerializer.serializeObject = function serializeObject() {
            return new FormSerializer($, this).
            addPairs(this.serializeArray()).
            serialize();
          };

          FormSerializer.serializeJSON = function serializeJSON() {
            return new FormSerializer($, this).
            addPairs(this.serializeArray()).
            serializeJSON();
          };

          if (typeof $.fn !== "undefined") {
            $.fn.serializeObject = FormSerializer.serializeObject;
            $.fn.serializeJSON = FormSerializer.serializeJSON;
          }

          exports.FormSerializer = FormSerializer;

          return FormSerializer;
        }));


        var $form = $('form#test-form'),
          url = 'https://script.google.com/macros/s/AKfycbzM7UHV2Oivbcr5B-xTSr4ULWpQpuvbdQiAPYwdKNOhzbZDtpxn/exec'

        $('#submit-form').on('click', function (e) {
          e.preventDefault();
          var jqxhr = $.ajax({
            url: url,
            method: "GET",
            dataType: "json",
            data: $form.serializeObject()
          }).success(
            
          );
        });

          
        </script>
    </body>
</html>