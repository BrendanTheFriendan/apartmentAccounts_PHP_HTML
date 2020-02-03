# apartmentAccounts_PHP_HTML
*              Simple database driven account creation/editing pages.
* 
* (For pages to provide all functinoality, a database connection is neccesary)
*
* Using MYSQL, allow Managers, Tenants, and Staff accounts to be created.
* If an account already exists, then the user in not allowed to create a duplicate and must log in instead
* Each account must be approved by a manager (an initial manager is required) and has a variety of permissions granted.
* Account holders may change their password and perform actions unique to their account type
*
*
* Tenants accounts may pay their bills, request maintenance to their apartment, and mark the completion of maintenance as satisfactory
* Staff accounts can see the maintenance requests, which apartment submitted the request, and what type of maintenance is required.
* Staff may also change a request to completed.
* Managers can approve new tenants, remove tenants, post bills, approve bill payments, and handle office/unit changes
*
*
* (This collection was part of an assigned project for a database course at NMSU)
* 
*
* Tips about page flow:
* Home/Start page is index.php
*
* 'AddX.php' files take the user input for account creation and 'insertX' pages perform the checks against the database and perform the actual addition of user
* 
* 'XLogin.php' files take credential inputs, then load 'XCheckCredentials.php' file to check the database.
* Valid credentials result in reaching the 'XDashboard.php' file, or alternatively, the 'XFailedLogin.php' file is reached and credentials are requested once more.
*
* From any of the dashboards you may choose on of the actions granted to the user-type.
* The other pages are named according to the actions the user chooses, with any sort of value changes loading and 'UpdateX.php' page.
* 
* 
* Please feel free to contact me for questions or clarifications.
* This code is by no means optimized or prepared for professional use, it's just for fun!.
* Keep on Learning! Thank you.
*
* Brendan Patrick Mcsherry
*
