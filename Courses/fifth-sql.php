<html>
<head>
    
    <title>Sql Language</title>
    <link rel="stylesheet" href="css/First.css">
 
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
        crossorigin="anonymous"></script>
    <script src="../prism.js"></script>
    <link rel="stylesheet" href="../prism.css">
</head>

<body>
<?php include("./include/header.php"); ?>
    <table>
        <tr>
            <td>
                <center>
                    <h1>SQL tutorial</h1>
                </center>
                <h5>&nbsp;What is sql?</h5>
                <p>
                    &nbsp;&nbsp;SQL stands for Structured Query Language<br>
                    &nbsp;&nbsp;SQL lets you access and manipulate databases<br>
                    &nbsp;&nbsp;SQL became a standard of the American National Standards Institute (ANSI) in 1986, and
                    of
                    the
                    International Organization for Standardization (ISO) in 1987
                </p>
                <h5>&nbsp;What Can SQL do?</h5>
                <p>
                    &nbsp;&nbsp;SQL can execute queries against a database <br>
                    &nbsp;&nbsp;SQL can retrieve data from a database<br>
                    &nbsp;&nbsp;SQL can insert records in a database<br>
                    &nbsp;&nbsp;SQL can update records in a database<br>
                    &nbsp;&nbsp;SQL can delete records from a database<br>
                    &nbsp;&nbsp;SQL can create new databases<br>
                    &nbsp;&nbsp;SQL can create new tables in a database<br>
                    &nbsp;&nbsp;SQL can create stored procedures in a database<br>
                    &nbsp;&nbsp;SQL can create views in a database<br>
                    &nbsp;&nbsp;SQL can set permissions on tables, procedures, and views<br>
                <h5>&nbsp;Sql operation</h5>
                &nbsp;&nbsp;SELECT - extracts data from a database<br>
                &nbsp;&nbsp;UPDATE - updates data in a database<br>
                &nbsp;&nbsp;DELETE - deletes data from a database<br>
                &nbsp;&nbsp;INSERT INTO - inserts new data into a database<br>
                &nbsp;&nbsp;CREATE TABLE - creates a new table<br>
                &nbsp;&nbsp;ALTER TABLE - modifies a table<br>
                &nbsp;&nbsp;DROP TABLE - deletes a table<br>
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <h5>1.Sql select statement</h5>
                <p>
                    The SELECT statement is used to select data from a database.
                    The data returned is stored in a result table, called the result-set.
                </p>
                <pre class="language-sql"><code>select * from test;</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/1.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <h5>2.Select with Distinct statement</h5>
                <p>
                    The following SQL statement selects only the DISTINCT values from the "Country" column in the
                    "Customers" table:
                </p>
                <pre class="language-sql"><code>select distinct city from test;</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/2.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <h5>3. Sql Where clause</h5>
                <p>
                    The SQL WHERE Clause
                    The WHERE clause is used to filter records.
                    It is used to extract only those records that fulfill a specified condition.
                </p>
                <pre class="language-sql"><code>SELECT * FROM test WHERE city='Srinagar';</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/3.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <h5>4.Sql and, or not</h5>
                <p>
                    The WHERE clause can be combined with AND, OR, and NOT operators.
                    The AND and OR operators are used to filter records based on more than one condition: <br>
                    • The AND operator displays a record if all the conditions separated by AND are TRUE. <br>
                    • The OR operator displays a record if any of the conditions separated by OR is TRUE. <br>
                    • The NOT operator displays a record if the condition(s) is NOT TRUE.

                </p>
            </td>
        </tr>
        <tr>
            <td>
                <h5>4.1 And </h5>
                <p>
                    The following SQL statement selects all fields from "test" where city is "Srinagar" AND salary is
                    "80000":
                </p>
                <pre
                    class="language-sql"><code>SELECT * FROM test WHERE city='Srinagar' AND salary='80000';</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/4.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <h5>4.2 Or </h5>
                <p>
                    The following SQL statement selects all fields from "test" where city is "Srinagar" OR "Panjim":
                </p>
                <pre class="language-sql"><code>SELECT * FROM test WHERE city='Srinagar' or city='Panjim';</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/5.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <h5>4.3 Not </h5>
                <p>
                    The following SQL statement selects all fields from "test" where country is NOT "Srinagar":
                </p>
                <pre class="language-sql"><code>SELECT * FROM test WHERE NOT city='Srinagar';</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/6.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <h5>5 The SQL ORDER BY Keyword</h5>
                <p>
                    The ORDER BY keyword is used to sort the result-set in ascending or descending order.
                    The ORDER BY keyword sorts the records in ascending order by default. To sort the records in
                    descending order, use the DESC keyword.

                </p>
                <pre class="language-sql"><code>SELECT * FROM test ORDER BY city ASC;</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/7.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <h5>6 insert</h5>
                <p>
                    The INSERT INTO statement is used to insert new records in a table.
                    INSERT INTO Syntax
                    It is possible to write the INSERT INTO statement in two ways:
                    1. Specify both the column names and the values to be inserted:
                </p>
                <pre
                    class="language-sql"><code>insert into test (id,name,city,salary,Mobile_no) values(5,"Rakesh","Pune","100000","546321098");</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/8.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    2. Specify only values to be inserted:
                </p>
                <pre
                    class="language-sql"><code>insert into test values(6,'Bhavesh','Sikkim','40000','9638527410');</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/9.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <h5>
                    7 Update
                </h5>
                <p>
                    The UPDATE statement is used to modify the existing records in a table.
                </p>
                <pre
                    class="language-sql"><code>update test set city='Banglore',salary='80000',Mobile_no='9996321450' where id=6;</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/10.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <h5>
                    8 delete
                </h5>
                <p>
                    The DELETE statement is used to delete existing records in a table.
                </p>
                <pre class="language-sql"><code>delete from test where id=6;</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/11.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    if you not specified the where id=6 then it will delete all record
                </p>
                <pre class="language-sql"><code>delete from test;</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/12.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <h5>
                    9 min and max
                </h5>
                <p>
                    The MIN() function returns the smallest value of the selected column.
                </p>
                <pre class="language-sql"><code>SELECT MIN(salary) FROM test;</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/13.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    The MAX () function returns the largest value of the selected column.
                </p>
                <pre class="language-sql"><code>SELECT MAX(salary) FROM test;</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/14.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <h5>
                    10 Count,avg and sum
                </h5>
                <p>
                    The COUNT() function returns the number of rows that matches a specified criterion.
                </p>
                <pre class="language-sql"><code>SELECT count(salary) FROM test;</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/15.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    The AVG() function returns the average value of a numeric column.
                </p>
                <pre class="language-sql"><code>SELECT avg(salary) FROM test;</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/16.png" class="img-fluid">
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    The SUM() function returns the total sum of a numeric column.
                </p>
                <pre class="language-sql"><code>SELECT sum(salary) FROM test;</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/17.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <h5>11 Join</h5>
                <p>
                    A JOIN clause is used to combine rows from two or more tables, based on a related column between
                    them.
                    Here are 2 table employee and emppost
                </p>
                <pre
                    class="language-sql"><code>SELECT employee.id, employee.empname,emppost.post FROM employee JOIN emppost ON employee.id=emppost.id;</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/18.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <h5>11.1 Inner join</h5>
                <p>
                    The INNER JOIN keyword selects records that have matching values in both tables
                </p>
                <pre
                    class="language-sql"><code>SELECT employee.id, employee.empname,emppost.post FROM employee INNER JOIN emppost ON employee.id=emppost.id;</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/19.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <h5>11.2 left join</h5>
                <p>
                    The LEFT JOIN keyword returns all records from the left table (table1), and the matching records
                    from the right table (table2). The result is 0 records from the right side, if there is no match
                </p>
                <pre
                    class="language-sql"><code>SELECT employee.id, employee.empname,emppost.post FROM employee left JOIN emppost ON employee.id=emppost.id;</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/20.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <h5>11.3 right join</h5>
                <p>
                    The RIGHT JOIN keyword returns all records from the right table (table2), and the matching records
                    from the left table (table1). The result is 0 records from the left side, if there is no match
                </p>
                <pre
                    class="language-sql"><code>SELECT employee.id, employee.empname,emppost.post FROM employee RIGHT JOIN emppost ON employee.id=emppost.id;</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/21.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <h5>11.4 Full join</h5>
                <p>
                    The FULL OUTER JOIN keyword returns all records when there is a match in left (table1) or right
                    (table2) table records.
                </p>
                <pre
                    class="language-sql"><code>SELECT employee.id, employee.empname,emppost.post FROM employee full outer JOIN emppost ON employee.id=emppost.id;</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/22.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <h5>12 Create table</h5>
                <p>
                    The CREATE DATABASE statement is used to create a new SQL database.
                    The following example creates a table called "Persons" that contains five columns: PersonID,
                    LastName, FirstName, Address, and City:
                </p>
                <pre class="language-sql"><code>CREATE TABLE Persons (
PersonID int,
LastName varchar(255),
FirstName varchar(255),                                                                                                                       
Address varchar(255),
City varchar(255)
);
</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/23.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <h5>13 Drop table</h5>
                <p>
                    The DROP TABLE statement is used to drop an existing table in a database.
                </p>
                <pre class="language-sql"><code>drop table persons;</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/24.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <h5>14 Alter table</h5>
                <p>
                    The ALTER TABLE statement is used to add an column in a table.
                </p>
                <pre class="language-sql"><code>ALTER TABLE persons ADD Email varchar(255)</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/25.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <h5>15 Primary key</h5>
                <p>
                    The following SQL creates a PRIMARY KEY on the "ID" column when the "Persons" table is created:
                </p>
                <pre class="language-sql"><code>CREATE TABLE Person (
ID int NOT NULL,
LastName varchar(255) NOT NULL,
FirstName varchar(255),
Age int,
PRIMARY KEY (ID)
);</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/26.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <h5>16 Check key</h5>
                <p>
                    The CHECK constraint is used to limit the value range that can be placed in a column.
                    If you define a CHECK constraint on a column it will allow only certain values for this column.
                    If you define a CHECK constraint on a table it can limit the values in certain columns based on
                    values in other columns in the row.
                </p>
                <pre class="language-sql"><code>CREATE TABLE Persons (
ID int NOT NULL,
LastName varchar(255) NOT NULL,
FirstName varchar(255),
Age int CHECK (Age>=18)
);</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/27.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <h5>17 AUTO INCREMENT Field</h5>
                <p>
                    Auto-increment allows a unique number to be generated automatically when a new record is inserted
                    into a table.
                    Often this is the primary key field that we would like to be created automatically every time a new
                    record is inserted
                </p>
                <pre class="language-sql"><code>CREATE SEQUENCE seq_person
MINVALUE 1
START WITH 1
INCREMENT BY 1
CACHE 10;</code></pre>
                <h5>Output</h5>
                <img src="./Sql language output/28.png" class="img-fluid">
                <br><br>
            </td>
        </tr>
    </table>
   
</body>

</html>