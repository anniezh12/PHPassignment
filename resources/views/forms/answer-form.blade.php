<p><div class='card  bg-warning mb-3' style='min-width:50%'>
	<div class='card-header'>Enter Answer</div>
	<div class='card-body bg-light'><p class='card-text'>
		<form id='answerform' >
			<div class='row '>
			<div class='col-md-4'><label >Category(s):</label></div>
			<div class='col-md-4'><label >Item(s):</label></div>
		</div>
		<input type="hidden" id="CatId" value="0" />
		<div id="FormDiv" class='row formRow' >
			<div class='col-md-4 categorydiv'>
			
			<input type='text' id='category[0]' placeholder='Category'>

		</div>
		<div class='col-md-4 itemsdiv'>
			<input type='text' id='item[0][0]' placeholder='Item'>
		</div>
	</div>
	<div id='displaynewitemfield'>
		<!-- New Text box will be added in this div-->
	</div>
	<div class='row'>
		<div class='col-md-4'></div>
		<div class='col-md-4'>
			<div class='btn btn-link' id='additem'>Add Item </div>
			 <p class="text-danger" id="errorMsg"></p> 
			
			<input type='button' id='submitAnswer' value='Submit Answer'>
		</form>
		<br><div id="itemData"></div>
	</div>
</div>
</p>
</div>
<p><div id="displayCategoryItemsDivAgain"></div>

	<div class='row'>
		<div class='col-md-4'>
			<div class='btn btn-link' id='addCategoryDiv'> Add Category</div>
			<div class='col-md-4'></div>
		</div>
	</div>
		</div>
