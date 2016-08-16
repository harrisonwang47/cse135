#!/usr/bin/perl

print "Content-type: text/html\n\n";

my $variable;

foreach $variable (sort keys %ENV) { 
	print "<b>$variable = </b>  $ENV{$variable}<br/>\n";
 }

