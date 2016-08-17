#!/usr/bin/perl

my $buffer;
my @pairs;
my $pair; 
my $name;
my $value; 
my %FORM;

# Read text
$ENV{'REQUEST_METHOD'} =~ tr/a-z/A-Z/;
if ($ENV{'REQUEST_METHOD'} eq "POST")
{
   read(STDIN, $buffer, $ENV{'CONTENT_LENGTH'});
}else {
   $buffer = $ENV{'QUERY_STRING'};
}

# parse into name and value pairs
@pairs = split(/&/, $buffer);
foreach $pair (@pairs)
{
   ($name, $value) = split(/=/, $pair);
   $value =~ tr/+/ /;
   $value =~ s/%(..)/pack("C", hex($1))/eg;
   $FORM{$name} = $value;
}

$first_name = $FORM{firstname};
$last_name  = $FORM{lastname};
$color = $FORM{color};
$request = $FORM{formaction};

print "Content-type:text/html\r\n\r\n";

$datetime = localtime();

print "<html><head><title>Hello!</title>";
print "</head>";
print "<body bgcolor = $color>\n";
print "<h2>Hello $first_name $last_name from a Web app written in Perl on $datetime </h2><br>";
print "</body>\n</html>";

1;