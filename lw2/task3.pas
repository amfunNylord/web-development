PROGRAM PrintHelloDear(INPUT, OUTPUT);
USES
  Dos;
VAR
  QueryString: STRING;
BEGIN
  QueryString := GetEnv('QUERY_STRING');
  WRITELN;
  IF QueryString = ''
  THEN
    WRITELN('Hell Anonymous!')
  ELSE
    WRITELN('Hello dear, ', QueryString,'!')
END.
