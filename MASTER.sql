ubuntu@ip-172-31-28-249:~$ mysql -u root -p
Enter password:
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 213
Server version: 5.7.22-0ubuntu0.16.04.1-log (Ubuntu)

Copyright (c) 2000, 2018, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> show master status;
+------------------+----------+--------------+------------------+-------------------+
| File             | Position | Binlog_Do_DB | Binlog_Ignore_DB | Executed_Gtid_Set |
+------------------+----------+--------------+------------------+-------------------+
| mysql-bin.000023 |      472 |              |                  |                   |
+------------------+----------+--------------+------------------+-------------------+
1 row in set (0.00 sec)

mysql>


mysql> use libproject;
Reading table information for completion of table and column names
You can turn off this feature to get a quicker startup with -A

Database changed
mysql> show create procedure show_reader;
+-------------+-------------------------------------------------------------------------------------------------------------------------------------------+---------------------------------------------------------------------------------------------------------------------------+----------------------+----------------------+--------------------+
| Procedure   | sql_mode                                                                                                                                  | Create Procedure                                                                                                          | character_set_client | collation_connection | Database Collation |
+-------------+-------------------------------------------------------------------------------------------------------------------------------------------+---------------------------------------------------------------------------------------------------------------------------+----------------------+----------------------+--------------------+
| show_reader | ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION | CREATE DEFINER=`nbm5`@`localhost` PROCEDURE `show_reader`(IN id int)
BEGIN
SELECT * FROM READER   WHERE read_id = id;
END | utf8                 | utf8_general_ci      | latin1_swedish_ci  |
+-------------+-------------------------------------------------------------------------------------------------------------------------------------------+---------------------------------------------------------------------------------------------------------------------------+----------------------+----------------------+--------------------+
1 row in set (0.00 sec)

mysql>


mysql> call show_reader(1);
+---------+-------------+------------+
| read_id | reader_name | reg_date   |
+---------+-------------+------------+
|       1 | beth        | 2018-02-25 |
+---------+-------------+------------+
1 row in set (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

mysql>

