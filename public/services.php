<?php
include_once ('../resources/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8dabcbb496.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8dabcbb496.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/services.css">
    <link rel="stylesheet" href="../css/navigation.css">
    <link rel="stylesheet" href="../css/footer_style.css">
    <title>Maya V3</title>
</head>
<body>
    <section>
        <div id="hero">
            <?php include('top_nav.php'); ?>
        </div>    
    </section>


    <section id="next">
        <div class="img">
            <div class="overlay"></div>
            <div class="text-container">
                <h1>Services</h1>
                <h4>Customers are the lifeblood of a business</h4>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center">
                    <div class="icon">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <h3>Sales</h3>
                    <p>
                        In store we have a large range of musical instruments and equipment for sale.
                         Our friendly staff are here to help understand your requirements and find the best solution to
                         your needs. Check out our <a href="shop.php">'SHOP'</a> page, alternatively pop in and see all we have in store or send us your enquiry via the
                        <a href="contact.php">'CONTACT US' </a>link.
                    </p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="icon">
                        <i class="fa-solid fa-arrow-right-arrow-left"></i>
                    </div>
                    <h3>Hire</h3>
                    <p>
                        If you require a guitar or piano to play a special song at a wedding ceremony or maybe you need a sound system, or extra equipment for an event without wanting the expense of buying brand new, we have musical instruments and
                        equipment to hire. Call or come in and talk to us about your specific requirements and let's work something out.
                        Maya Music also hire a wide range of Orchestral Instruments, at a very reasonable rate, this can be over 3 - 9 or 12 months, Saxophone and Flute are very popular, contact us today to find out more.
                    </p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="icon">
                        <i class="fa-solid fa-wrench"></i>
                    </div>
                    <h3>Repairs</h3>
                    <p>
                        We service and repair all guitar, bass and ukuleles.
                        From a simple re-string to the detailed intricacies of an instrument's electronics, Deo has over 15 years experience, and a wealth of knowledge, he also specialises in guitar and bass electronics and intonation, Deo will work to get your guitar or bass sounding the best it can.
                        Maya Music are also agents for all fretwork, as well as structural damage to wooden instruments eg: cracks, splits, broken head stocks etc.
                        Agents also for Brass and Woodwind Repairs.

                    </p>
                </div>
            </div>





            <div class="row">
                <div class="col-lg-4 text-center">
                    <div class="icon">
                        <i class="fa-solid fa-person-chalkboard"></i>
                    </div>
                    <h3>Lessons</h3>
                    <p>
                        Our lessons are for all ages and are custom designed for students at any level of their learning. We have experienced teachers who work
                        professionally within the music industry bringing with them a broad knowledge and skill set to pass on to our students. Our friendly tutors are here to help
                        you grow as a musician and bring your skills to the next level.
                    </p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="icon">
                        <i class="fa-solid fa-microphone"></i>
                    </div>
                    <h3>Band Jam</h3>
                    <p>
                        Our famous <a href="#">Band Jam</a> are the pinnacle of a students learning, held during school holidays, Band Jam is very popular with under 18-year-olds, any child can join (they don't have to be a student of Maya Music)
                        all that is required is they have some experience playing an instrument. Band Jam brings confidence, the experience is fun, empowering and supportive, as our team
                        mentor and teach the children the dynamics of playing in a band, with the final night showcasing all the children have learnt about playing and performance.

                    </p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="icon">
                        <i class="fa-solid fa-guitar"></i>
                    </div>
                    <h3>Rehearsal Space</h3>
                    <p>
                        If you are a Manager looking for a space for a touring band to rehearse, or a group of casual musicians needing a place to jam, we offer a space outside of business hours for you to hire.
                        We provide you with a Ludwig drum kit, a Marshall MB450 H Bass Amp head and cab, a Marshall VS100 Guitar Amp head and cab, as well as a Soundcraft GIGRAC 600 PA, Shure PGA 58 & Samson R21S microphone both with stand. All you have to do, is book a day and time, bring your own instruments or talk to us about hiring some of our instruments, then play as loud as you please and have a rocking good time.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="footer-relative">
        <?php include('footer_new.php') ?>
    </section>

  <script src="../js/index.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script>
  </script>
</body>
</html>