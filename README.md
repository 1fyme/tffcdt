# tffcdt
A donation tracker made to extract data from Extra Life's website, and customized for use in TFFC's live-streams. 

Tffcdt uses simple_html_dom.php to extract data from Extra Life's website. 
The data is then written into HTML files that is used for comparing and detecting differences between the HTML files and changes in Extra Life's website. 
Because these files are saved on the server (where tffcdt is located), different "access sessions" should be created for each user. 
This method is quite messy, but theoretically works. 
This was created in about a week, in preparation for TFFC's 48-hour charity stream during June 2015. 

## How it Works
We need to tell the tracker how the donations page is outlined in the HTML of Extra Life's website.
Each donation begins with <code>&lt;strong class="block"> [Name or "Anonymous"] [donated $X or "made a donation"] &lt;/strong></code>
After some research, we can tell that the latest donation will always be found at the fourth "strong" HTML tag.
Using simple_html_dom.php, we can get the entire "strong" tag including the text it contains and write it to an HTML file called "recent.html".
We can refresh the tracker and pull the Extra Life website again to check for changes by comparing the fourth "strong" HTML tag and the "recent.html" file, by using comparison operators in PHP.
If there's a difference, then something has changed and we can display an alert on the web page.

## TFFC Website
https://tffcofficial.org
