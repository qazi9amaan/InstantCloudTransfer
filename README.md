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
