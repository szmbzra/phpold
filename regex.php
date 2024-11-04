<?php
/*
regular expression
a method of specifying a search string using a  number of special characters that can precisely match a substring

enclose in literals sucha as /
example for email validation
/^[A-Za-z0-0._%]+@[A-Za-z0-9._%-]+/


regular expression quanitifers
quantifiers are wildcard that specify how many times to match the preceding string pattern                           notation
match zero or more of previous       *
match one or more of previous         +
match one or zero of previous         ?
match exactly number of previous     {4} 
match at least min of previous  {3,}
match at least min but not more than max of previous characters {min, max}

regular expression anchors
match start of line          ^
match end of line            $
match any single character     .

escape special characters
characters such as ?, ., $, *, + have a special meaning if we want to actually use them as a literal we need to escape them with a backslash
name ^[A-Za-z. ]*$
/[a-zA-z0-9._-]{3,}@[a-zA-z0-9._-]{3,}[.]{1}[a-zA-z0-9._-]{2,}/
*/
?>