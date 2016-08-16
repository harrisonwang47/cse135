#!/usr/bin/perl

use CGI qw/:standard/;
use CGI::Cookie;
use strict;
use warnings;

use CGI;
use CGI::Carp qw(fatalsToBrowser); # show errors in browser
use CGI::Session;

#creates a query object
my $query = CGI->new();


#Creates a new session object based off the query object
my $session = CGI::Session->new($query);


#prints the HTTP header and sets the session ID cookie
print $session->header();

#if save button is pressed
if(defined $query->param('save'))
{
	#saves the parameter value into the session
	$session->param('username', $query->param('username'));
}


printf << '_HTML_'

<form>
Username: <input type="text" name="username"/>
<button type="submit" name="save">Save</button><br>
<a href = "/cgi-bin/sessionpage2.cgi"> Go to sessionpage2 </a>
</form>

_HTML_
