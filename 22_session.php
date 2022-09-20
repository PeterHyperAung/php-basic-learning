<?php
// Sessions' concept is quite similar to coookie but they work differently
// Unlike cookies which are stored in browser, sessions are stored in server

// After you have start the session, you can start storing the data you want by using the superglobal $_SESSION
session_start();

// when u store a data, php will automatically return and ID and return with the PHPSESSID name
// So, when the user need data from session, he/she has to first send the ID to get the data
// this make the session more secure, session ID can't be faked but it can be hacked or stolen
// Session doesn't have expire time like cookie, only works for a tab, after it is closed, data will be lost
// you can store Array or Object in session 
// ofc there are some ways to store array and objects in cookie but cookie is for storing string
$_SESSION['user'] = 'Peter';

// deleting session
unset( $_SESSION['user'] );

