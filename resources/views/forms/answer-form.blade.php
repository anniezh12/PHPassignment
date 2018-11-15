<p><div class='card  bg-warning mb-3' style='min-width:50%'>
	<div class='card-header'>Enter Answer</div>
	<div class='card-body bg-light'><p class='card-text'>
		<form id='answerform' >
			<div class='row '>
					<div class='col-md-4'><label >Category(s):</label></div>
					<div class='col-md-4'><label >Item(s):</label></div>
		   </div>
		<input type="hidden" id="CatId" value="0" />

		<!-- fORM DIV DISPLAYING category and items -->

		   <div id="FormDiv" class='formRow' >
		<div class="row" style="margin-top:15px">
			<div class='col-md-4 categorydiv'>
			
			  <input type='text' class='form-control' placeholder='Category'>

		    </div>

		    <!-- item div having class name-->

			<div class='col-md-8 itemsdiv'>
				<input type='text' class='form-control' placeholder='Item'>
			</div>
	   </div>
	<!-- end of form div-->


	</div>
	<div id='displaynewitemfield'>
		<!-- New Text box will be added in this div-->
	</div>
	<div class='row'>
		<div class='col-md-4'></div>
		<div class='col-md-4'>
			<div class='btn btn-link' id='additem' title="  Add will add Category and item(s) as your response">Add <small></small> </div>
			 <p class="text-danger" id="errorMsg"></p> 
			
			
		</form>
		<br><div id="itemData"></div>
	</div>
</div>
</p>
</div>
<p><div id="displayCategoryItemsDivAgain"></div>

	<div class='row'>
		<div class='col-md-4'>
			<div class='btn btn-link' id='addCategoryDiv' title='A new Category and Item(s) can be added from this button'> Add </div>
			<div class='col-md-4'></div>
		</div>
		<div class="col-md-8 text-right">
			<a href="#" id='submitAnswer'> Submit Answer </a>
		</div>
	</div>
		</div>
