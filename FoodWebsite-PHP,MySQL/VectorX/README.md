<!--
@Authors: VectorX Group
@Date: 12/14/2020
@Version: 1.0
-->

How to run this website in XAMMP.
step 1: copy this root folder to XAMMP folder named "htdocs".     
step 2: setup a virtual hosts in the apache by configuring the file httpd-vhosts.conf located on C:\xampp\apache\conf\extra  
step 3: add vectorx.com in the hosts located at C:\Windows\System32\drivers\etc
step 4: Run the Xampp server and start apache and MYSQL
step 5: create a database named vectorx and import sql files named "fooditem.sql" and "users.sql" into created database named "vectorx".(This files are located to folder named "includes"). 
step 6: type vectorx.com in your browser. 

Note:
For the Client PC: The client needs to add the server PC's IP address together with the domain name of the website in the hosts file located at C:\Windows\System32\drivers\etc.

For the Server PC: Add the client PC IP address together with the website's domain name in the hosts file located at C:\Windows\System32\drivers\etc.