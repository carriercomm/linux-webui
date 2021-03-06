function confirmReboot () {
	if (confirm('Are you sure you want to reboot the system?')) {
		window.location.href = 'shellscripts/reboot.php?system=y';
	}
	else {
		// Do nothing
	}
}

function checkUpdate () {
	document.getElementById('update_display').style.display = "block";
	document.getElementById('update_display').src = "shellscripts/updates.php";
	document.getElementById('check_update_button').onclick = hideUpdate;
	document.getElementById('check_update_button').innerHTML = "Hide Updates";
	document.getElementById('update_management').style.display = "block";
}

function hideUpdate () {
	document.getElementById('update_display').src = "";
	document.getElementById('update_display').style.display = "none";
	document.getElementById('check_update_button').onclick = checkUpdate;
	document.getElementById('check_update_button').innerHTML = "Check for updates";
	document.getElementById('update_management').style.display = "none";
	document.getElementById('gentoo_notice').style.display = "none";
}

function applyUpdates () {
	document.getElementById('update_display').src = "shellscripts/applyupdates.php";
}

function showGentoo () {
	document.getElementById('gentoo_notice').style.display = "block";
	document.getElementById('update_management').style.display = "none";
}