# InstantCloudTransfer
Instantly Transfer your files anywhere using CloudStorage. 

WHAT IS IT?

Transfer your files any-where anytime using cloud Storage, without any Signup Login. The content is to be upload to Amazon Web Services for instant transfer rate and available storage, and the person/ client from other side can access the data anywhere just downlaoding it from the broadcast with unique broadCastName and broadCastRoom.

HOW IT WORKS?

 Files are uploaded to cloud Storage any-where anytime with a specific BroadCastCannel(BroadCastName,BroadCastRoom).This BroadCastCannel
 is later used to access the data uploaded to the Cloud, if it is a single Transfer upon downloading the file the BroadCastCannel is closed.
 
LATER IMPROVEMENTS

   Download the broadcast using  a short sharable url .


Language Used :
1. PHP / Basic HTML
2. CSS
3. SQL 

CURRENT CONTENT STAGE


The Content uploaded has been tested on LocalHost, to initialise database, follow :

sql> create database photos

sql> use photos

sql> create table images(

      id int NOT NULL UNIQUE,
      image varchar(200),
      broadcastname varchar(200) NOT NULL,
      broadcastroom varchar(200) NOT NULL, 
      CONSTRAINT PRIMARY KEY(broadcastname,broadcastroom) 
      )

<h1> SNAPSHOTS </h1>
<h3> Kirangle, Share & Download</h3>
<img src = "/images/1.png">
<br>
<h3> Broadcasting your files </h3>
<p>Write a unique channel name and room number and share the same with the person you want to share files with</p>
<img src = "/images/2.png">
<br>
<h3>Upload multiple files </h3>
<img src = "/images/3.png">
<br>
<h3> Download</h3>
<p>Provide the channel name and room number given by the person who shared files </p>
<img src = "/images/4.png">
<br>
<h3> Text Sharing</h3>
<p> Choose a unique number and give a file name to your file and write the message </p>
<img src = "/images/5.png">
<br>
<p> Provide the credientials to view the message </p>
<img src = "/images/01.png">
<br>
<h3> Login </h3>
<p> Register your channel name and login to post from your channel, this channel name will be explicit to you only </p>
<img src = "/images/6.png">
<br>
<h3>Download using the short link</h3>
<p> Once your files are uploaded we provide you with a download url which leads you here </p>
<img src = "/images/02.png">
<br>
<h1>URL SHORTNER</h1>
<p> You can shorten your links using our shortner </p>
<img src = "/images/03.png">
<br>
