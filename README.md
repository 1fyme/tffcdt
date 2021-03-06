# tffcdt
A donation tracker made to extract data, mainly donation information, from [Extra Life's website](http://www.extra-life.org/). It is customized for use in TFFC's live-streams. **It is no longer used.**

Tffcdt uses [simple_html_dom.php](http://simplehtmldom.sourceforge.net/) to extract donation information. 
The information is then written into HTML files that is used for comparing and detecting differences between the HTML files and changes in Extra Life's website. 
Because these files are saved on the same server as tffcdt, different "access sessions" should be created for each user. 

This was created in about a week, in preparation for TFFC's 48-hour June 2015 charity-fundraising live-stream. 

## How it Works
We need to tell the tracker how the donations page is outlined in the HTML of Extra Life's website.
Each donation begins with <code>&lt;strong class="block"> [Name or "Anonymous"] [donated $X or "made a donation"] &lt;/strong></code>
After some research, we can tell that the latest donation will always be found at the fourth "strong" HTML tag.
Using simple_html_dom.php, we can get the entire "strong" tag including the text it contains and write it to an HTML file called "recent.html".
We can refresh the tracker and pull the Extra Life website again to check for changes by comparing the fourth "strong" HTML tag and the "recent.html" file, by using comparison operators in PHP.
If there's a difference, then something has changed (a new donation, perhaps) and we can display an alert on the web page as it is reloaded.

## Demo
A snippet from TFFC's June 2015 charity live-stream can be viewed [here](https://youtu.be/cbf0uLHxAlI).

## TFFC Twitch Channel
https://www.twitch.tv/tffcofficial
