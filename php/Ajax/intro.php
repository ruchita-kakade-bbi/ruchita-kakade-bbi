<?php
// JAX = Asynchronous JavaScript and XML.
// AJAX is a technique for creating fast and dynamic web pages.
// AJAX allows web pages to be updated asynchronously by exchanging small amounts of data with the server behind the scenes.
// This means that it is possible to update parts of a web page, without reloading the whole page.
// Classic web pages, (which do not use AJAX) must reload the entire page if the content should change.

// Examples of applications using AJAX: Google Maps, Gmail, Youtube, and Facebook tabs.

// AJAX is Based on Internet Standards
// AJAX is based on internet standards, and uses a combination of:

// XMLHttpRequest object (to exchange data asynchronously with a server)
// JavaScript/DOM (to display/interact with the information)
// CSS (to style the data)
// XML (often used as the format for transferring data)

//XMLHttpRequest is a class  user send req this xmlhttp sends that req to background  and it takes response from server and 
//and without page reloading it display response content

//in readystate there is 5steps
//0 req is not intialized means (req is not send to server yet)
//1 server connection established
//2 req received (req is received by server)
//3 processing req (req is processing to server side)
//4 req finished and response is ready (req is finished and response is send)

// In response we receive 2things
//1 status = it tells response is correct or fail  three status code :-1. 200 -OK means whatever req is sent that response is successfully send
//2. 403: forbidden means server is not responding 3. 403: not found means requested file is not present in server
//2 responseText and responseXML server sends response in these two format
    
?>