#!/usr/local/bin/ruby -w
puts "Content-type: text/html\n\n"

require 'cgi'
cgi = CGI.new
city = cgi['city']
province = cgi['province']
country = cgi['country']
population = cgi['population']
url = cgi['url']


puts "<html> <div style=\"font-size:2.5em;color:yellow;text-align:center;background-color:purple;\">" 
puts city.capitalize + "&nbsp" + country.capitalize + "</div>"
puts "<br><br>"
puts "<div style=\"font-size:1.5em;color:black;\">" 
puts "Province: " + "&nbsp&nbsp&nbsp" + province.capitalize + "<br>"
puts "Population: " + population.capitalize + "</div>"
puts "<br><br><br>"
puts "<img src="
puts url
puts "width=100% height = auto>"
puts "></html>"