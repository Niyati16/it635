#!/bin/sh
DBNAME=libproject
DATE=`date +"%Y%m%d"`
SQLFILE=$DBNAME-${DATE}.sql
mysqldump --opt --user=nbm5 --password $DBNAME > $SQLFILE