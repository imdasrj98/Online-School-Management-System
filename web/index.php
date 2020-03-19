<?php
require_once('allmenu.html');
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="DGS Public School">
        <meta name="keywords" content="HTML,CSS,JavaScript">
        <meta name="author" content="Debayan Sourav Geeta">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <title>DGS Public School</title>
        <link rel="icon" href="img/school3.ico">
    </head>
    <body>
        <div id="slidesection">
            <div class="slidetext">
                <h1>Welcome To School!</h1>
                <h2>Search your query!</h2>
                <form>
                    <div class="form-box">
                        <input type="text" class="search-field" placeholder="Search Faculty">
                        <input type="text" class="search-field" placeholder="What's your query">
                    </div>
                </form>
                <a href="#" class="searchbutton" onclick="f1()"><img src="img/search.png" width="30px" height="30px">search</a>
            </div>
        </div>

        <section id="why_us">
            <div class="why_us_heading">
                <h1>Why DGS</h1>
            </div>
            <div class="why_us_work">
                <div class="row">
                    <div class="column">
                        <div>
                            <div class="serviceBox">
                                <div class="service-icon">
                                    <img src="img\icon-1.png" alt="">
                                </div>
                                <div class="service-Content">
                                    <h3 class="title">ISO 9001</h3>
                                    <p id="overflowText" class="description">
                                        It is one of the few residential schools in the country to have received the ISO 9001 certification for Quality Management System and the ISO 14001 certification for Environment Management System and the ISO 22000 for Food Safety and Management System from Lloyds, UK.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="serviceBox">
                                <div class="service-icon">
                                    <img src="img\icon-2.png" alt="">
                                </div>
                                <div class="service-Content">
                                    <h3 class="title">Sprawling Campus</h3>
                                    <p id="overflowText" class="description">
                                        The school has an expansive football ground, state-of-the-arts sports facilities, nearly Olympic size swimming pool, 8 hostels for boys and 2 hostels for girls separately with a capacity of 950 boarders, the academic buildings having houses, keeping in mind the need of academic space, sprawling campus spread over 250 acres, a separate wing comprising halls for learning music and dance and art and craft and for other bipolar activities,                            </p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="serviceBox">
                                <div class="service-icon">
                                    <img src="img\icon-3.png" alt="">                        </div>
                                <div class="service-Content">
                                    <h3 class="title">Safety &amp; Security</h3>
                                    <p id="overflowText" class="description">
                                        The school provides safe and secured environment to the students. The entire campus is under the surveillance of CC TV camera installed at every nook and corner. A contingent of 40 vigilante Security Guards keep an eye on each and every movement of students, visitors and inmates. The administration is zero tolerant to any kind of bullying or violence. A single door supervised entry for visitors is provided to upkeep the wellbeing of boarders.                            </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div>
                            <div class="serviceBox">
                                <div class="service-icon">
                                    <img src="img\icon-4.png" alt="">                        </div>
                                <div class="service-Content">
                                    <h3 class="title">Sports Infrastructure</h3>
                                    <p id="overflowText" class="description">
                                        DGS is committed to students in offering holistic development ensuring ample opportunities to express and explore their talent in the field of sports also. it boasts of a state-of-the-art sporting facilities, such as athletics, basketball, badminton, cricket, football, lawn tennis, table tennis, squash, and an all-weather swimming pool, to mention a few. <br>
                                        With an international standard football field and four basketball courts with flood lit facilities, the management has not left any stone unturned to encourage sports of every kind to flourish within our campus. Our campus is distinctive as it boasts all the resources required to facilitate all-round development.                            </p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="serviceBox">
                                <div class="service-icon">
                                    <img src="img\icon-5.png" alt="">                        </div>
                                <div class="service-Content">
                                    <h3 class="title">Experienced Faculty</h3>
                                    <p id="overflowText" class="description">
                                        DGS has highly qualified and experienced faculty that play a crucial role in enhancing academic reliability in the classroom. Playing a proactive role with students in training them about the respective subjects and tactics upholding the spirit of the students and tirelessly work to improve students’ learning outcomes and working on tech-enabled pedagogies, the faculty works putting its untiring efforts in ensuring optimum results, with no push-backs, encouraging them to go for a win-win situation.                            </p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="serviceBox">
                                <div class="service-icon">
                                    <img src="img/icon-6.png" alt="">                        </div>
                                <div class="service-Content">
                                    <h3 class="title">Value Added Teaching</h3>
                                    <p id="overflowText" class="description">
                                        The School understands the importance of teacher’s role in students’ life. The best teachers are identified to match the neediest students. The foster parenting system caters to the individual need of students academically as well as emotionally. Since boarders live away from their home so, Mentoring and Foster Parenting effectively accentuate students’ performance. The school also understands the need to instil Indian family values in young minds which is why for value inculcation ‘catch them young ‘ policy is adopted. Various activities based on Happiness Index and Moral values are conducted throughout the year.                            </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div>
            <div class="moreinfo">
                <div class="moreinfo1">
                    This is Our School Website
                </div>
                <br>
                <div class="moreinfo2">
                    For more information meet us in our office
                </div>
            </div>
        </div>
        <div class="marq"><marquee scrollamount="15">
        <ul>
            <a href="#"><li>New Admission</li></a>
            <a href="#"><li>New Event</li></a>
            <a href="#"><li>Quiz</li></a>
        </ul></marquee>
        </div>

        <table class="infoTable" cellspacing="10" cellpadding="10">
            <tr>
                <th>OUR VISION</th>
                <th>OUR MISSION</th>
                <th>OBJECTIVE</th>
            </tr>
            <tr>
                <td>
                    We aims to create articulate, compassionate and rational individuals, proudly Indian in essence, humanistic and universal in outlook. An innovative Programmer, delivered by caring educators, addresses the needs of the times and guides the children towards academic and human excellence. The School accords the highest priority to the realization of talent &amp; potential at all levels of the Faculty and Administration so that the young shall never be denied the finest, the latest, and the most meaningful in the realm of knowledge and life.
                </td>
                <td>Our endeavor is to bring up Global Citizens utilizing principles of student-centered learning. We believe in and impart education that fosters excellence, physical fitness, psychological and spiritual health, a consciousness of social obligations and concern for the environment in each student. Our students cherish their Indian culture and at the same time respect the culture of people from other parts of the world. We believe in education that teaches not only to make a living but how to live.
                </td>
                <td>
                    The centre is committed to providing the highest standard of education not only to the wards of JK employees but to every people in and around Gotan and also across the country. Our school community is dedicated to providing a safe, secure and stimulating environment where all the children can develop their skills and talents in a Variety of ways and to the best of their abilities. We want the children to feel confident, to see themselves as successful learners, and to have responsible attitudes towards themselves and others. We also inculcate the students to sustain and enhance rich cultural heritage and also prepare Young learners to keep pace with the challenges to come.
                    <ul>
                        <li>Strategy &amp; Organization</li>
                        <li>Corporate Development</li>
                        <li>Globalization</li>
                        <li>Operations Management</li>
                        <li>Corporate Finance</li>
                        <li>IT Management</li>
                    </ul>
                </td>
            </tr>
        </table>

        <div class="footer2">

            <div class="footerleft">
                <a href="img/logo21.png" class="logo" title="School Logo" ></a>
                <ul class="sociallinks">
                    <li>
                        <a href="https://www.facebook.com" target="_blank" title="facebook">
                            <img class="links" src="img\facebook.png" alt="Facebook">
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com" target="_blank" title="twitter">
                            <img class="links" src="img\twitter.png" alt="Twitter">
                        </a>
                    </li>
                    <li>
                        <a href="https://youtube.com" target="_blank" title="youtube">
                            <img class="links" src="img\utube321.png" alt="YouTube">

                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com" target="_blank" title="instagram">
                            <img class="links" src="img\insta.png" alt="instagram">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com" target="_blank" title="linkedin">
                            <img class="links" src="img\linkedin.png" alt="linkedin">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.whatsapp.com" target="_blank" title="Whatsapp">
                            <img class="links" src="img\whatsapp.png" alt="whatsapp">
                        </a>
                    </li>
                    <li class="linkText">Stay Connected</li>
                </ul>
            </div>

            <div class="footerright">
                <a href="#" id="pagetop">Top of Page</a>
            </div>

        </div>
        <div class="footer">
            HOME - ABOUT US - GALLERY - STAFFS - CONTACT US - LOG IN<br><br>&copy; <script> document.write(new Date().getFullYear());
            </script> DGS PUBLIC SCHOOL, KOLKATA. ALL RIGHTS RESERVED | PRIVACY POLICY | TERMS OF SERVICE
        </div>

    </body>
</html>
