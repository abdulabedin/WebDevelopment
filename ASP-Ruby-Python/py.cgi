#!/usr/bin/python
import cgi, cgitb 

form = cgi.FieldStorage() 
make = form.getvalue('make')
model  = form.getvalue('model')
print "Content-type:text/html\n\n"


city = form.getvalue('city')
province = form.getvalue('province')
country = form.getvalue('country')
population = form.getvalue('population')
url = form.getvalue('url')



print "<html>"

print "<div style=\"font-size:2.5em;color:orange;text-align:center;background-color:black;\">" 

print city.upper() + "&nbsp" + country.upper() + "</div>"

print "<br><br>"
print "<div style=\"font-size:1.5em;color:black;\">" 
print "PROVINCE: " + "&nbsp&nbsp&nbsp" + province.upper() + "<br>"
print "POPULATION: " + population.upper() + "</div>"
print "<br><br><br>"
print "<img src="
print url
print "width=80% height = auto>"
print "</html>"

# print "<img src="
# print url
# print "style='border: 20px solid red';>"
# print "</html>"
# # width=80% height = auto 
