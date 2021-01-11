<!--
@University Project: Saint Louis University PHILIPPINES(SAMCIS)
@Authors: VectorX Group
@Date: 12/14/2020
@Version: 1.0
-->
"HOW TO SETUP IN XAMMP OR WAMP"

(Required)How to run this website in XAMMP:
step 1: copy this root folder to XAMMP folder named "htdocs". 
step 2: Run the Xampp server and start apache and MYSQL
step 3: Open phpMYAdmin AND create a database named vectorx and import sql files named "fooditem.sql" and "users.sql" into created database named "vectorx".(This files are located to folder named "includes"). 
step 4: type localhost in your browser. 

(Optional)How to host your website locally using XAMP:
step 1: copy this root folder to XAMMP folder named "htdocs". 
step 2: setup a virtual hosts in the apache by configuring the file httpd-vhosts.conf located on C:\xampp\apache\conf\extra 
	----> In the httpd-vhosts.conf add your server name(example. vectorx.com) and change the "Require local" to " Require All granted".
step 3: setup the file httpd.conf located on C:\wamp64\bin\apache\apache2.4.46("or your apache version")\conf.
	----->  Change the directory "Require all denied" to " Require all granted" in line 250 of httpd.conf file.
step 4: Add your "IP and your choosen servername" in the hosts located at C:\Windows\System32\drivers\etc. (example: 192.168.254.254 vectorx.com")
step 5: Run the Xampp server and start apache and MYSQL
step 6: create a database named vectorx and import sql files named "fooditem.sql" and "users.sql" into created database named "vectorx".(This files are located to folder named "includes"). 
step 7: type vectorx.com in your browser. 

Note:
For the Client PC: The client needs to add the server PC's IP address together with the domain name of the website in the hosts file located at C:\Windows\System32\drivers\etc.

For the Server PC: Add the client PC IP address together with the website's domain name in the hosts file located at C:\Windows\System32\drivers\etc.

=================================================================================================================================================================================================================================

(Required)How to run this website in WAMP:
step 1: copy this root folder to WAMP folder named "www". 
step 2: Run the WAMPserver. All WAMPServer 3 service should be all running.
step 3: Open phpMYAdmin AND create a database named vectorx and import sql files named "fooditem.sql" and "users.sql" into created database named "vectorx".(This files are located to folder named "includes"). 
step 4: type localhost in your browser. 

(Optional)How to host your website locally using XAMP:
step 1: copy this root folder to WAMP folder named "www". 
step 2: setup the virtual hosts in the apache by configuring the file httpd-vhosts.conf located on C:\wamp64\bin\apache\apache2.4.46("or your apache version")\conf\extra
	----> In the httpd-vhosts.conf add your server name(example. vectorx.com) and change the "Require local" to " Require All granted".
step 3: setup the file httpd.conf located on C:\wamp64\bin\apache\apache2.4.46("or your apache version")\conf.
	----->  Change the directory "Require all denied" to " Require all granted" in line 250 of httpd.conf file.
step 4: Add your "IP and vectorx.com in the hosts located at C:\Windows\System32\drivers\etc. (example: 192.168.254.254 vectorx.com")
step 5: Run the Xampp server and start apache and MYSQL
step 6: create a database named vectorx and import sql files named "fooditem.sql" and "users.sql" into created database named "vectorx".(This files are located to folder named "includes"). 
step 7: type vectorx.com in your browser. 


Note:
For the Client PC: The client needs to add the server PC's IP address together with the domain name of the website in the hosts file located at C:\Windows\System32\drivers\etc.

For the Server PC: Add the client PC IP address together with the website's domain name in the hosts file located at C:\Windows\System32\drivers\etc.



