Michael Phan, A10024365
Harrison Wang, A10564594
CSE 135
08/16/2016

PHP Implementation:
For most of PHP, we created a HTML skeleton and added php code wherever was necessary.
Files for PHP implementation are:
- helloworld.php
- envvar.php
- form.php & echo.php
- sessionpage1.php
- sessionpage2.php

Hello World:
In the body, we echoed the string ““Hello Web World from Language X on date time stamp”. In order to use the date and time stamp, we setted the default time to the correct time zone first because it was not completely reading in the correct time to begin with. The timezone specified was LA time, since LA and SD run in the same time zone. Additionally, we were forced to manually calculate the hours and minutes since we couldn’t get it to print the correct time, so this was done with minimal Javascript. Afterwards, we echoed the date function with a specified format: echo date('m/d/Y, '); and the current time by using document.write();
For randomizing the background color, three variables were created: c1,c2 and c3, which contained the colors red, blue, and white respectively.. These colors were part of the specification. We also created another variable called number which would use the rand function to randomize on the number it picked. We restricted it between 1 and 3. We concatenated the the number variable with a letter c in order to allow the “c” variables to be searched for. This would then be echoed into the body bgcolor and it would produce the randomized color.
Environment Variable Echo:
For printing out environment variables onto the page, it seemed fairly easy and straightforward. We had just specified the phpinfo(32) function, which essentially shows all the defined variables for the environment. Ex: GET, POST, Cookie, Server, and etc.)
Form Collection:
Initially, we created a form.php file. This form is based off the template that Professor Powell had provided on Slack that has the GET/POST functionality. In addition, we added in the necessary fields such as being able to input your first name, last name, and your favorite color. The colors that the users are able to choose from  within the dropdown are only red, white, and blue (for simplicity purposes). All of this would be echoed to a new page (echo.php).
In echo.php We used the same template we created for our Hello World program, but also added and modified a few things. In order to echo the first and last name the user had entered, we had to do echo the POST and GET request, searching for the value of the first and last name. This was done simply by calling $_POST["firstName"];?, $_GET["firstName"];?, and so on. For the color request, we had just created a variable and find the request of the color that the user selected. This was done by using $_REQUEST["color"]; and inserting it into the bgcolor.
Session Test:
sessionpage1.php saves the username cookie as a POST request. Once it is saved into the session, sessionpage2.php will check to see if it has been set. If it has been, a message will confirm the cookie exists. To clear the cookie, you simply unset the username cookie and destroy the session. 

CGI Implementation:
CGI was a bit more difficult to learn and adapt to than PHP. It had a lot of foreign syntax that made it really confusing and complex.
Files for CGI implementation are:
- helloworld.cgi
- envvar.cgi
- form.html & echo.cgi
- sessionpage1.cgi & sessionpage2.cgi
note: All .cgi files are located in the cgi-bin

Hello World:
For this part, it seemed fairly easy and simple at first, but the most confusing thing about starting off was trying to print html content in CGI and knowing that you had to specify the content type and the bin before using it.
We had created several variables:
Datetime - stored the localtime by calling the function localtime().
Red, white, and blue - with numbers 0, 1 and 2, respectively
Random - calling a random number between 0 and 2 by calling int(rand(3));
Color - the color that will be selected from randomization
There was if conditions expressing that if the random number equaled to the value of the RWB values, then it would assign color with the hex value colors accordingly. We then proceeded by printing the text along with $datetime to show the time. We also adjusted the bg color to be equal $color.
Environment Variable Echo:
This was also very simple. We created a variable called “variable” and we had created a for loop that loops through all the environment variables (%ENV) and assigned it to “variable”. This would also get printed out afterwards.
Form Collection:
Initially, we created a form.php file. This form is based off the template that Professor Powell had provided on Slack that has the GET/POST functionality. In addition, we just added in the necessary fields such as being able to input your first name, last name, and your favorite color. The colors that the users are able to choose from  within the dropdown are only red, white, and blue (for simplicity purposes). All of this would be echoed to a new page (echo.cgi).
In echo.cgi, we had followed a tutorial in guiding me to creating this echo. We had created  several variables to help me parse and associate the name with the correct values. First, we had checked to see if the request method that the user specified was a GET or POST. Depending on what option was selected, different actions will take place accordingly. We then had to split the information up and associated with a value. We did this so that we would be able to grab the values from the FORM that the user had been using. Afterwards, we created more variables to associate the name values from the form.html. This was then printed out with the specified text  “Hello <username> from a Web app written in X on data time” with the $first_name, $last_name and $datetime in their respective place.
Session Test:
Most difficult part of the assignment. We had to make sure that all the modules were installed correctly and that we had configured the main config file correctly in order to run perl and CGI scripts.
In sessionpage1.cgi, we created a query object to take in user input and a session which will store the unique ID of the user into a cookie. This all gets printed into the header. Next, we needed to create a saving mechanism to store the value into the cookie created. When the user puts in their name and hits save on the form, it will query the user’s input and add it into the cookie details within that session. ($session->param('username', $query->param('username'));)  The option to go to page2 will be available to check to see if the username has successfully been queried into the session.
.In sessionpage2, all it does is reflect the name of the user that was entered in the earlier page. If there was a name entered, then that user will be greeted by their name and if not, they will be greeted as a stranger and be asked to go back to page1 and enter a username. The difference in this page is that we maintain the session because the session has not ended yet. We did this by grabbing the session ID that was stored in the cookie. Lastly, if the user hits the “Clear Session” button, it will delete ($session->delete;) the session and it will no longer print out the user’s name, as it does not exist anymore. It will be redirected to the ‘stranger’ text and obligate the user to return to page1.
