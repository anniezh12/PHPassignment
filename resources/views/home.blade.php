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
<b>GOAL</b>

<ul>
<li> Write code which can accomplish the requirements below, given the relevant database
tables and reference files.</li>

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
<div>
   (see mocks B and C below)
</div>
</li>
<li> Allow the user to submi the answer, store the user’s response in the
brainstorm_responses table, his/her user id, the time it took him/her to respond and the
date</li>
<li> Display the user’s answer back to him/her </li>
<li> Display the problem’s system answer back to him/her</li>
<li> All of the above should be accomplished on a single page (e.g., the user has a seamless
experience of seeing a problem, providing an answer, submitting answers, seeing a
recap of their answer and the actual answer)</li>
</ol>
ADDITIONAL NOTES
1. User responses must be stored in a way that they can be retrieved again in the future at
any time and displayed
  </div>
 @endsection

