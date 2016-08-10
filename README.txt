To access the server, ssh into harrison@team135.tk. 

The link to our site is: http://team135.tk

Employ password protection:
For time sake, we weren’t able to employ password protection onto our team site because we wanted to focus on maximizing on the other requirements.
Have a status page that indicates your name and/or team members, emails, etc :
Our status page is titled index.html. This is also considered our main page. It contains information of our goal in this class, the team members, and the other pages we implemented. We had very simple html code along with an index.css file for the style of our page. It has also been validated on http://validator.w3.org. This page can be found on http://team135.tk or http://team135.tk/index.html
 
Use custom error pages:
We created 404 and 403 page titled 404error.html and 403error.html, respectively. This can be found at the very bottom of the index.html page under ‘Team Works” or on http://team135.tk/404error.html (or 403error.html).These pages have very minimal html and css code. We tried to develop the message in a sense that speaks to the user and to have them stay on our site by explicitly asking them to return to the homepage and try a different search.

Have a favicon:
We generated our favicon at http://www.favicon.cc/ We created a favicon that says “CSE 135” in blue font. This favicon was used on our index.html page. It is not found on any of the other page because according to the TA, having it on the index.html page was enough, as long as we ran it on several browsers to check if the icon has been cached in. We added a ‘link rel’ tag at the head of the index.html file and had it point to the favicon.ico file. In order for this to work, we had to install the icoutils on the Ubuntu server and add the type into the ‘apache2.conf’ so that it recognizes .ico files (which can be found at the end of the file).

Have a robots.txt file:
According to the write up, we only need a minimal format for this stage. This file can be found in the same root directory as index.html. We allowed the User-Agent to be anyone, but disallowed the bots to go on any page.

Deploy from Github:
Our status page, custom error pages, and all other pages are made deployable to our production server from Github. This is done with configuring our post-receive hook. Our local machine can push to a live branch on the server with the command: git push live master.  

Log Report with GoAccess:
  Total Requests  288 Unique Visitors 17 Unique Files 15 Referrers 0
  Valid Requests  288 Processed Time  0  Static Files 10 Log Size  61.50 KiB
  Failed Requests 0   Excl. IP Hits   0  Unique 404   15 Bandwidth 2.26 MiB
  Log File        /var/log/apache2/access.log

Compress Textual Content:
In order to compress the files, we had to make sure mod_deflate module was enabled and available for use. Ubuntu already has mod_deflate and the deflate.conf file already established when downloading apache, so it automatically compressed the files for us. To know that this is working, you can check the Header on the pages and there will be a section called “Content-Encoding: gzip” under the response header, letting us know that the file has been compressed. We found out that the output of the web server compresses before being sent to the client. Thus, when it gets to the client, he is able to download it faster. The files also got smaller due to the compression, thus drastically decreasing the bandwidth needed for the site. This is a process of optimization in order for the website to run faster.
 
Obscure server identity:
Although removing the server header did not seem like a possible option (or at least we can’t find one) there were other alternatives such as modifying the Server signature to be something else. We named it “JokesOnYou” so that whoever sees the header, will see that signature. We had to download mod_security and enable the module in order to use the security options. At the end of the apache2.conf file, we added a line of code to change the signature.

Run PHP:
Very simple task. We created an info.php that stores the information the current php version that we’re using. It can be found by typing http://team135.tk/info.php.

Deliver Clean URLS:
In order to clean up the URL extensions, we had to load the mod_rewrite module and enable it. Afterwards, we had to modify our team135.conf, html.conf, and apache2.conf, so that it allowed .htaccess file to rewrite the main conf files. We then created a .htaccess file that lives in the same level as the index.html file. Within that file, we enabled the rewrite function and we had any files ending with .html or .php also be redirected to be same page without the file extension. For ex: http://team135.tk/info.php à http://team135.tk/info are the same pages. This can be done with any html or php pages.
