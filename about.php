<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>About</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" href="styles/home.css">
        <?php 
            require_once('includes/config.php');
            include 'includes/header.php';
        ?>
	</head>

	<body>
        <?php
            global $current_page;
            $current_page = "About";
            include "includes/nav.php"
        ?>
        <div class="container">
            <div class="col-xs-12">
                <h2>About Us</h2>
                <p>Our company was formed to be the missing link. By responding with flexible hours on projects, we can be there for you when you need us. </p>
                <p>We offer schmoozers by the hour or short term hire for the project – Contact us to discuss your needs for: a social butterfly at your next event, some who smartly connects people to people, a tester for your new product, a trade show representative, an attendee at an important social or business event, dinners, or lunch meetings. We're the people you can call in to finish a project, plan an event, make phone calls, increase sales, develop new business, organize and follow up on PR outreach, attend a trade show, and more!</p>
                <h2>Our Vision</h2>
                <p>Our vision for this company stems from years in sales and experiencing the human factor that makes the difference between good vs. great relationships, and by extension, good versus great outcomes. Investing in people in a genuine way has always come naturally. We're enthusiastic and find the world to be a far more interesting place when we're more knowledgeable about the people we work with. We love making connections and helping others. Queen of Schmooze is a company designed to help make connections for individuals, organizations and companies that prosper by outreach and human face-to- face or phone interaction.
                </p>
                <div class="profile center-align col-sm-3">
                    <img class="image" src="images/RonniRabinPR.png" alt="profile-picture">
                </div>
                <div class="col-sm-9">
                    <h2>About the Founder</h2><p>Ronni S. Rabin founded Queen of Schmooze to help others. She has extensive experience in sales, marketing, and client development/corporate relations. She excels at opening doors with top-decision makers, developing and building relationships, outreach, creating partnerships, increasing sales, and refining brands.</p>
                    <p>She has exceptional interpersonal, communication and networking skills. She is organized, self-disciplined and professional in demeanor. Ronni has the ability to work individually and as part of a team. She is highly self-motivated, energetic, creative, and accountable.</p>
                    <p>Ronni has had multiple professional experiences to support her abilities. She started her career in NYC in the advertising and publishing world, working for leading consumer magazines including Vanity Fair, Harper’s and the media rep firm/ad agency, Joseph Jacobs Organization. In New Haven, CT, she worked for Second Wind Media and the Yale Alumni Magazine. She has worked in publishing, real estate, business start up centers and for non-profit organizations. Some of her past jobs include Marketing Director, Public Relations Manager, and Account Supervisor.</p>
                </div> <!-- end of col-sm-9 -->
            </div> <!-- end of col-xs-12 -->
            <div>
                <h2>Testimonials</h2>
                <ul>
                    <li>
                        <h3>Neil-</h3>
                        <p>"Ronni has the capacity and the demonstrable background to grow any entity whether for profit or not for profit. But she has one characteristic, which is frankly much harder to find.  She has that intangible quality of making the organization she associates with shine. She presents well. In doing so, the entity emerges as elevated.</p>
                        <p>I would encourage your most careful consideration of Ronni’s established results oriented track record, and perhaps of equal importance, her steadfast presentation of integrity both personally and professionally."</p>
                    </li>
                    <li>
                        <h3>Evelyn-</h3>
                        <p>"Ronni is experienced, sensitive to marketing trends and she is incredibly diligent. Her creative approach, coupled with her skill and intelligence, makes her a perfect hire if you are hoping to increase engagement and broaden your messaging.</p>
                        <p>Whether it's social media, traditional advertising, media relations, event planning or recruiting, Ronni is undaunted. She is highly respected by her peers, largely due to her extraordinary networking skills, which is an asset in our profession, and I recommend her to your institution without reservation."</p>
                    </li>
                    <li>
                        <h3>Simon-</h3>
                        <p>"Ronni was an effective manager and a patient mentor during my college internship at the Yale Alumni Magazine. During my first week Ronni invited me to chat outside the office setting so that I could speak freely about my career interests and so that she could understand how my internship would support them.</p>
                        <p>Once we got started she trusted me with real responsibility. At the end of Q4 for example the magazine needed to calculate year over year ad revenue growth. Rather than make me crunch numbers Ronni gave me ownership of the entire process. This empowered me to streamline the company’s operations and make life easier for future interns. She kept just enough involvement in the project for me not to feel in over my head.</p>
                        <p>For example, she caught on whenever I was struggling with an Excel function and stepped in to help. Ronni clearly enjoys passing on her knowledge. She would frequently brief me on the status of the accounts she was working on, especially when one of them had taken an interesting turn in which she saw a teaching opportunity. Working with her was fun and instructive; I would gladly do it again."</p>
                    </li>
                    <li>
                        <h3>Mitchell-</h3>
                        <p>"Ronni at all times was professional and effective and maintained an excellent reputation both within our organization and with her contacts and accounts. Hardworking, persistent, intelligent and creative are all adjectives we can easily apply to Ronni, beyond that she always operated with the utmost integrity. I would freely recommend Ronni for inclusion in any organization with the confidence she would be an asset in virtually any role."</p>
                    </li>
                </ul>
            </div> <!-- end of testimonials div -->
            <div class="resume body-margin">
                <h2>Resume</h2>
                <embed class="col-xs-12 resume" src="Resume.pdf">
            </div>
        </div> <!--end of container div-->
        <footer>
        </footer>
	</body>
</html>