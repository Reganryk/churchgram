
//Notifications
function markNotificationAsRead(notificationcount)
{
 if(notificationcount !== '0'){
 $.get('/user/markAsRead');
 }

}


//function twin user
function twinuserrequest(event)
{
	event.preventDefault();
 alert('clivke me')


}


