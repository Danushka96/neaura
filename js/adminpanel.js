/* function for table selection */
function showTable(tn) {

	var tableWelcome = document.getElementById("welcome_panel");
	var tableClients = document.getElementById("branch_table");
	var tableCustomers = document.getElementById("outlet_table");
	var tableServices = document.getElementById("service_table");

	if(tn === 1) {
		tableWelcome.style.display="none";
		tableClients.style.display = "block";
		tableCustomers.style.display = "none";
		tableServices.style.display = "none";
	} 
	if(tn === 2) {
		tableWelcome.style.display="none";
		tableClients.style.display = "none";
		tableCustomers.style.display = "block";
		tableServices.style.display = "none";
	} 
	if(tn === 3) {
		tableWelcome.style.display="none";
		tableClients.style.display = "none";
		tableCustomers.style.display = "none";
		tableServices.style.display = "block";
	} 
}

/* initialising */

var mdleditbranch = document.getElementById("editbranch");
var mdlAddService = document.getElementById("addservice");
var mdlAddItem=document.getElementById("additem");

var btnEditBranch = document.getElementById("btnEditBranch");
var btnAddItem = document.getElementById("btnAddItem");
var btnAddService = document.getElementById("btnAddService");

var btnCanceleditbranch = document.getElementById("btnCanceleditbranch");
var btnCanceladditem = document.getElementById("btnCanceladditem");
var btnCancelAddService = document.getElementById("btnCancelAddService");



/* function for add clients model */

btnEditBranch.onclick = function() {
	mdleditbranch.style.display = "block";
}

btnCanceleditbranch.onclick = function() {
	mdleditbranch.style.display = "none";
}

/* function for add customer model */

btnAddItem.onclick = function() {
	mdlAddItem.style.display = "block";
}

btnCanceladditem.onclick = function() {
	mdlAddItem.style.display = "none";
}

/* function for add service model */

btnAddService.onclick = function() {
	mdlAddService.style.display = "block";
}
btnCancelAddService.onclick = function() {
	mdlAddService.style.display = "none";
}


