#!/usr/bin/perl

use CGI qw/:standard/;
use CGI::Cookie;
use strict;
use warnings;

use CGI;
use CGI::Carp qw(fatalsToBrowser); # show errors in browser
use CGI::Session;

my $cgi = new CGI;   
my $query = CGI->new();
   
my $sid = $cgi->cookie('CGISESSID') || $cgi->param('CGISESSID') || undef;
my $session = new CGI::Session(undef, $sid, {Directory=>'/tmp'});


#prints the HTTP header and sets the session ID cookie
print $session->header();

my $username = $session->param('username');

#if Clear Session is pressed
if(defined $query->param('delete'))
{
	#Destroy the session
	$session->delete;
}

#if username is found
if($username)
{
	print "Hi $username nice to meet you!";
}
else
{
	print "Howdy stranger...tell me your name on page1!<br>";
	print "<a href = \"/cgi-bin/sessionpage1.cgi\"> Go back to sessionpage1</a>";
}

printf << '_HTML_'

<form>
<button type="submit" name="delete">Clear Session</button>
</form>

_HTML_
