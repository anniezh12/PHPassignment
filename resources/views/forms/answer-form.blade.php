<p><div class='card bg-light mb-3 style='min-width:50%'>
	<div class='card-header'>Enter Answer</div>
	<div class='card-body'><p class='card-text'>
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
			<div class='link-color-blue' id='additem'>Add Item </div>
			 <p class="text-danger" id="errorMsg"></p> 
			<div id='item-add-btn' class='link-color' onclick='addAnswer()'>Add Answer </div>
			<input type='submit' id='sub' value='Submit Answer'>
		</form>
		<br><div id="itemData"></div>
	</div>
</div>
</p>
</div>
<p><div id="dis"></div>
	<div class='row'>
		<div class='col-md-4'>
			<div class='link' onclick='addCategoryWithItems()'> Add Category</div>
			<div class='col-md-4'></div>
		</div>
	</div>
		</div>