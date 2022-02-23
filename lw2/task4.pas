PROGRAM WorkWithQueryString(INPUT, OUTPUT);
USES
  DOS;
BEGIN {WorkWithQueryString}
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN;
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN;
  WRITELN('Age: ', GetQueryStringParameter('age'))
END. {WorkWithQueryString}
