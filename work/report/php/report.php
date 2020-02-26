<?php
session_start();
$pageTitle = 'search';
include_once 'view/head.php';
?>

<body class="body">

    <?php include 'view/header.php';?>

    <article class="report">

        <header>
            <h1>A report from the course DA377B</h1>
        </header>

        <div id="duck" class="duck"></div>

        <section>
            <h2>S01</h2>
            <p>1. Did you before know about the techniques Git, GitHub, Markdown and/or GitHub Pages?</p>

            <p>I know and ahve used Git and Github a few years now. However Markdown and Github Pages i am not familliar with. Now that i have done the assignement 1 i think that GH pages was failry easy to use. </p>

            <p>2. Have you ever created websites before?</p>
            <p>I have not. Perhaps some small crappy page and very little html back in the lunarstorm days. I did host a premade website on a local machine for LAN-parties around 99-00 for gaming statistics. My experince is quite limited with all of it,
                but i think i'll manage.</p>

            <p>3. Briefly explain your experience and knowledge of web application development.</p>
            <p>From previous curse in network applications i learned to set up a webserver and restful services. We did some small laboration creating a small form for sending some variables as a query to the webserver and create a response. In terms of
                protocol i am familliar with http and https protocols. We did study this in some earlier courses. Most of the previous web development has been in restful services on both server and client side. </p>

            <p>4. What is your TIL for this course section?</p>
            I have gotten acquainted with VS code and forking a repo as instructed in the assignement. I learned to create a small html page with links and added a picture and some small info. I learned to change background color and text color with css tags. Finally
            i learned to publish the work to GH pages.</p>

        </section>

        <section>
            <h2>S02</h2>
            <p>Have you any previous experience of HTML, CSS and/or JavaScript?</p>

            <p>No, i have no previous experience these languages. I could argue that i have tested some HTML roughly 20 years ago but i don't think it's relevant anymore. I have heard about all three before and have some insight to what each part is responsible
                for.
            </p>

            <p>Explain the role of HTML, CSS and JavaScript in web development.</p>

            <p>HTML is a markup language used for structuring a web page. This is where content is added and placed throughout the page. CSS is used to add styling such as colors etc to your website. Probably my weakest part as i am not very artistic.n Javascript
                is used to add active/interactive content to a web page. Javascript is content that is run directly in the browser. I also looked at PHP and from what i understand PHP scripts are more commonly executed on serverside. I looked at creating
                a contact form. However github pages does not support this and i will set up my own webserver to try and get it running later on.
            </p>

            <p>Give a brief explanation of how the browser, the HTTP protocol and the web server interacts.</p>

            <p>The browser interpets the information and shows it. Information and requests are sent using HTTP packets. A browser sends a request in HTTP format to the web server. The server tries to identify the request and returns the information that
                is to be showed in the browser.
            </p>

            <p>What is your TIL for this course section?</p>

            <p>I have learned to add various things and utilize html sections such as Header, body and footer. Furthermore i have learned how to utilize stylesheets for using css. A lot of information and practical learning has been related to working with
                css. Some basic structural insights into how javascript is used within webpages. At last we got a quick look into what kind of frameworks are used and how popular different frameworks are.
            </p>

        </section>

        <section>
            <h2>S03</h2>
            <p>Do you have any previous experience of client side JavaScript?</p>
            <p>No i have no previous experience at all of client side javascript. I havve of course heard of it but since i haven't looked at webdevelopement until now i haven't really had a strong enough reson to start with it.</p>
            <p>Can you compare and relate the JavaScript language to any other language you know?</p>
            <P>I see a lot of similarities with several programming languages. I would say that some parts a similar to java where as some parts are a bit lite python. In the end a lot of functionality is quite similar in most languages. Since i have used
                both objectoriented as well as functional programming languages a lot is similar but still quita a lot of diffrences in how the language is utilized.</P>
            <p>Describe how you worked with the coding exercise, what grade do you aim for and how did your code turn out to be?</p>
            <p>I have spent a lot of time with resources on the web obtaining information and looking at examples of how javascript is used. I then approached the problem with trial and error playing around to get acquainted with javascript to what works
                and what does not. Even though my css/styling skills is not the greatest i think i managed to fulfill all assignment requirements. As this task had grade 3-5 requirements i did them all and i am aiming for a grade 5. I think the functionality
                of my code turned out as i expected. I spent some time just getting the functionality to work and then additional time to clean up the code and optimize the implementation such as replacing some for loops with foreach loops and so on.
                At thie moment of writing this i may not have completely placed the entire flag as a js object, more the functionality of it. However as also said where feasible i think this can count as fulfilling the requirement. The duck however is
                completely as a js object and is only called in the html and thereby i think i have showed that i know how to use this.</p>
            <p>What is your TIL for this course section?</p>
            <p>For this section i learned a lot. I got acquainted more with both html and css, for example using select in html to use with javascript. I played around a lot with the uck in javascript to make it move across the sreen in different speed and
                change direction at edges aswell as when the mouse hover above it. If u click the duck it will sometimes stop, make a kwack statement and change the speed. I also took some time to make the duck background transparent so it can move across
                the flags without showing the edges of the image. I also learned a lot from the municipalities apart from the selection by building the html table and create some style to it and added a click option for data cells. In order to change
                it up a bit i downloaded a bug script in js that is added to the about page to show how a java object can be initiated with controllers. I learned to do some transitioning in css before the actual task that i applied to header links. </p>
        </section>

        <section>
            <h2>S04</h2>
            <p>Tell me about your previous experience on node/npm or any equal programming tools.</p>
            <p>I have no previous experience of node or npm. Closest work related to node/npm is developing restful server in java. It has some similarities in terms of restful of course but a lot of diffrences as well. It has been very a very useful experience.</p>
            <p>How do you feel about working with JavaScript, Node and Express?</p>
            <p>I feel quite good actually. It has been some up and downs getting acquainted with js but i'm starting to get a hang of it. Same goes for node and express. I still need some practice with the structure part but for the most part i think i understand
                how it works. I quite like express and working with node as quite a few configuration parts are a lot simpler than in pure java.</p>
            <p>Explain how you did take on the coding assignment, did you have a plan and did it work?</p>
            <p>I approached the assignement step by step according to the assignement description. Working from the examples that helped a lot. Working from the examples i then refactored it with adding and deleting parts to make it work for my intetions.
                As i have no prior experience with this part i continued with trial and error and solving bugs by reading error outputs in the browser. I suppose i had somewhat of a plan from reading the assignement or an image of what i was trying to
                acheive. With that in mind i jumped head first into the assignment to get started without overthinking to get more familliar with both javascript and node/express. It was a nice experience getting this to work on linux as installation
                and configuration was an additional step in order to get this to work.
            </p>
            <p>What grade did you aim for and was it a difficult level?</p>
            <p>I amied for grade 5 and think i gave it an extra effort to present the result in a nice way. Only thing remaining so far is to refactor out the logic for lotto to a separate module, which i will do if i have the time.</p>
            <p>What is your TIL for this course section?</p>
            <p>I have learned a lot for this part. Quite a few new things working with javascript aquiring more skills in how to program with js. I have learned the basics of setting up node/express restful server as well as working with ejs for presenting
                a site and mixing js with html. Furthermore i learned how to utilize query strings in the browser and handle them in express with parsing in js and using the array.include for finding a match between generated data to query data. Some
                small error handling for only ouputing data if a query is actually sent and so on. It was a nice experience utilizing json responses from server to express even though i did not develop the usage further in this assignement. I learned
                a few new skills in using html and generating a table dynamicly with setting background colors depending on input in order to get a nice output. I realized that my directory structure is not according to instructions as i misinterpreted
                how the strucure should be. As a result i suppose i have a rather large refactoring to do. I will however ask if this is actually required as i consider it to be a lot of work that will mean less time to spend on actual assignements.
            </p>
        </section>

        <section>
            <h2>S05</h2>
            <p>How do you feel about PHP as a programming language?</p>
            
            <p>I feel that php is a little bit messier than other programming languages. I do like how it is possible to utilize php together with html to create dynamic content. 
                The way of factoring out header, footer and other content is very nice and quite simple. Perhaps it is my knowledge in php that is still limited or some framework needed but i had to 
                go from php to js and back to php in order to achieve inline editing of html table which felt a bit complicated. But overall i am fairly satisfied with php. 
                I would say that i prefer javascript over php in general but i do see how php could be prefered in some cases. Mostly for the convenience of factoring out content like header, menu, footer etc.
            </p>
           
            <p>Can you compare PHP to other languages you know?</p>
            <p>Overall php feels quite similar to several languages like java and javascript. Most negative part i would say is the difference in syntax and using $ signs everywhere. 
                Quite annoying actually. But structurewise it feels like most other OOP languages. </p>
            
            <p>Describe how you took on the coding exercise, what grade did you aim for and are you satisfied with the result?</p>
            
            <p>I did as i always do with head first, trial and error playing around to get a feel for the language. I aimed for grade 5 and completed all tasks. I did however spend most time on the last part to get a html table with inline CRUD operations working. 
                The result was quite satisfying even thouhg i utilized som javascript as a middle script to get the functionality i was going for.</p>
            
            <p>What is your TIL for this course section?</p>

            <p>I learned a lot! I have used a little php earlier as object oriented when learning unit testing. 
                This was however quite different from using php in web development. 
                It was a nice experience learning to use php with html for creating dynamic content from a database. 
                The most rewarding was again to factor out page content but also database connection and generating html tables from the received content. 
            </p>
        </section>

        <section>
            <h2>S06</h2>
            <p>What is your own opinion on popularity of programming languages and what are your thoughts of future popularity among programming languages?</p>
            <p>Well, popularity of programming languages can indicate several things. How easy a language is to use, how well it performs or availability and quality of documentation. 
                It does give some insight to which languages are developed further and has support for high trend functionality. As long as the trend for a language is going in the right direction it still comes down to personal preference or demand by companies. 
            Knowing how several languages work is important as depending on what the service is supposed to do. HIghly popular languages and frameworks indicates easy and fast implementation of new products.</p>
            <p>What will be your own choice for selecting future programming languages?</p>
            <p>As i intend to start my own business when i graduate this question is highly relevant. Before this course i would have said java. Now i am moore interested in javascript and flutter framework as i intend to create software that will be used on both mobile and desktop envirioment. 
                If flutter works as advertised this will have a large impact in the amount of implementation needed to support multiple plattforms. 
            </p>
            <p> Do your own investigation on https://trends.google.com (Links to an external site.) to customize your own comparison on programming languages (or frameworks) and elaborate on the results. </p>
            <p>Well, the results are a bit questinable. Google of course says that python now is the biggest laguage in programming. But google createn python so there is a bit of cobflict in interest. 
                Especially when you look at world wide demographics and all countries in the world is between 1-5 in search interest where as china is 100. Correct me if i'm wrong but google withdrew from china and should not have access to this type of data there. 
            So whiether or not one should trust google on theese results is not easy to intepret. They also claim php to be moore popular than javascript which i have not seen before as all forums i've visited promote js/java before php. 
            The results of this investigation sure made me think about my choice in language and so i will do moore research before i make my final choice. However, google trends will not be my main source for this choice.</p>
            <p>If you were to recommend a language/framework/technology to your potential employer and your next large project, what would it be and how would you “sell it”?</p>
            <p></p>
            <p>What is your TIL for this course section?</p>
            <p></p>
        </section>

        <section>
            <h2>S07</h2>
            <p>Try to explain the platform .NET (C#, ASP.NET) to a skilled programmer, but newbie to this Microsoft technology.</p>
            <p>.Net aims to offer a complete developement envirioment utilizing a mvc approach. It is a bit different compared to javascript, php and REST with nodejs. 
                But .Net packs all parts into one plattform so that a developer can go all the way from OOP classes and functionality to REST api, Database connection to the frontend. 
                It has quite many similarities to other web and OOP developement languages. It offers quite a few framworks and other tools so that everything could be done within .Net. 
                In my personal opinion the .Net REST and MVC is a bit different and not always as obvious as other envirioments and takes a bit of time to get a hang of. 
                It is a mixture of pleasant developement and some dissapointments in structure and documentation that is classic microsoft.
            </p>
            <p>Elaborate by comparing .NET technologies with the other technologies we learned during the course.</p>
            <p>The OOP part in .Net with C# is quite similar to javascript, php and java with some differences such as using namespaces instead of packages that can be confusing at first. Mostly the OOP part is however very similar to other OOP languages. 
                In my opinion the MVC for REST services is the biggest difference. Even though it has some similarities with android and nodejs it feel a bit more complicated. The structure of paths and controllers is a bit different in its structure and takes a while to figure out.
                 Mostly the .Net documentation for REST was a horrible experience in camparison. In the end i did not implement it as the documentation or a variety of forums claimed to be best practise, instead i found a way to implement it that is more similar to the nodejs/express or java way of setting up a REST service.
                 With that in mind it can handle this appoach as well which is nice even though it was difficult to find how it could be done. I gave up on how the documentation and forums described the approach as it felt as an overcomplicated approach. The html forms with Razor was the most satisfying part once i got a hang of it. 
                 Utilizing Razor for this was a very nice way with good structure and an easy overview. 
            </p>
            <p>Describe how you took on the coding exercise, what grade did you aim for and are you satisfied with the result?</p>
            <p>As always i jumped straight into solving the assignment researching solutions along the way as problems occured and looking a lot at the examples in order to figure out the general way of structuring diffrent parts. 
                As always i aimed for a grade 5 and solves all the tasks in a quite satisfactory way. As i meantioned before my biggest issue was figuring out the mvc structure for REST and paths and probably implemented it in a way that does not completely follow the documentation guidelines.
            In the end i am quite satisfied with the result as i spent a lot of time solving the final parts of the assignment.</p>
            
            <p>What is your TIL for this course section?</p>
            <p>In the spirit of other TIL i learned a lot! I have not used .Net or C# at all before so a complete new overview of the .Net plattform. 
                So everything from using C# and OOP to RESTFUL and Frontend I.E. a nice intro to fullstack developement in microsofts envirioment. Further moore i learned a bit about the mvc and razor framwork for creating forms and tables just like in other languages for this course. 
                Some nice parts was working with Json and serializing to lists in C# and getting a initial insight as to how .Net structures works.
            </p>
        </section>

        <section>
            <h2>S08</h2>
            <p>Here is the text for this section.</p>
        </section>

        <section>
            <h2>S09</h2>
            <p>Here is the text for this section.</p>
        </section>

        <section>
            <h2>S10</h2>
            <p>Here is the text for this section.</p>
        </section>

        <?php include 'view/footer.php';?>

    </article>


    <script type="text/javascript" src="js/main.js"></script>
    <script src="js/Duck.js"></script>
</body>

</html>