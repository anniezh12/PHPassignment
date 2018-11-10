@extends('layouts.master')

@section('contents')
<script>
		$document.getElementByID('mockBC').onmouseover=fnction(){mouseOver()}
		function mouseOver(){
			document.getElementById("mockBC").innerHTML="Hello";
		}
	</script>

<div class="jumbotron">
	<b>CONTEXT</b>
<br>
A core part of this apps functionality is allowing candidates to drill themselves on case style
interview questions.
<br>As a result, displaying a question, saving the answer and showing the suggested answer is a
key piece of functionality.<br> This functionality is used in many different permutations and styles
across the app.
<p>This challenge is designed to 
	<ol>
		<li> Give you a sense of the type of engineering work we do </li>
		<li> See how you approach the work and </li>
	    <li> Give both of us a sense of what it’s like to work together.</li>
    </ol>	
  </p>
<b>GOAL</b>

<ul>
<li> Write code which can accomplish the requirements below, given the relevant database
tables and reference files.</li>
<li> Don’t stress & have fun!
PRODUCT REQUIREMENTS</li>
</ul>
<ol >
 Display the title, problem and category of the problem of any active problem the user has
*not* seen before.
<li>
 If he/she has seen all of them, pick the one they’ve seen least (see mock A
below)</li>
<li> There should be 1 problem on screen at any given time (e.g., the user gets a
problem, answers it, reviews the system answer and then moves to the next
problem)</li>
<li> Allow the user to enter a text response(s) and categorize them. The user should be able
to enter as many or few as they like
<div id="mockBC">
   (see mocks B and C below)
</div>
</li>
<li> Allow the user to submi the answer, store the user’s response in the
brainstorm_responses table, his/her user id, the time it took him/her to respond and the
date</li>
<li> Display the user’s answer back to him/her (mock D)</li>
<li> Display the problem’s system answer back to him/her (mock E)</li>
<li> All of the above should be accomplished on a single page (e.g., the user has a seamless
experience of seeing a problem, providing an answer, submitting answers, seeing a
recap of their answer and the actual answer)</li>
</ol>
<b>OUT OF SCOPE</b>
1. You do not need to build a user creation / user log in flow -> you can make up a user
and associated id (e.g., use with id=123)
ADDITIONAL NOTES
1. User responses must be stored in a way that they can be retrieved again in the future at
any time and displayed (as shown in mock D)
  </div>
 @endsection

