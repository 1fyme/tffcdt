# tffcdt
A donation tracker made to extract data from Extra Life's website, and customized for use in TFFC's live-streams. 

Tffcdt uses simple_html_dom.php to extract data from Extra Life's website. 
The data is then written into HTML files that is used for comparing and detecting differences between the HTML files and changes in Extra Life's website. 
Because these files are saved on the server, different "access sessions" should be created for each user. 
This method is quite messy, but theoretically works. 
This was created in about a week, in preparation for TFFC's 48-hour charity stream during June 2015. 
