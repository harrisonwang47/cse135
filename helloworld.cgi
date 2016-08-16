#!/usr/bin/perl -wT
use strict;
use warnings;
use CGI;


print "Content-type: text/html\n\n";

my $datetime = localtime();
my $red = 0;
my $white = 1;
my $blue = 2;
my $color;

my $random = int(rand(3));

if($random == $red)
{
	$color = "#FF0000";
} 

if($random == $white)
{
	$color = "#FFFFFF";
} 

if($random == $blue)
{
	$color = "#0000FF";
} 

print "Hello Web World from Language CGI w/ Perl on $datetime<br>\n";

print "<html><head><title>Hello!</title>";
print "</head>";
print "<body bgcolor = $color>\n";
print "</body>\n</html>";