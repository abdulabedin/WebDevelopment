<%
//Extract data from query strings
colour = Request.QueryString("Colour")
image = Request.QueryString("Image")

response.write("<body style='background-color:" & colour & "'>")
response.write ("</body>")
response.write("<style>body{background-image: url(\"" & color &"\")}</style>")
response.write ("</body>")

if request.cookies("lastvisit")("date") = "" then
response.write("This is your first time visting")
response.cookies("lastVisit")("date") = Date()
response.cookies("lastVisit")("time") = Time()
end if
response.write("Your last visit was at:")

for each key In request.cookies("lastvisit")
response.write("<br>" & key & " = " & _
request.cookies("lastvisit")(key))
next
%>