-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 02:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentbread`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'bhavy123', 'bhavy@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `date` varchar(50) NOT NULL,
  `para` text NOT NULL,
  `link` varchar(200) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `date`, `para`, `link`, `img`) VALUES
(1, 'dotloop', '2022-09-06', 'Dotloop is a real estate transaction management solution used by professionals and clients to conduct and close deals. ', 'https://blog.hubspot.com/marketing/blog-examples', 'upload/blog1.png'),
(2, 'dotloop', '2022-09-06', 'Dotloop is a real estate transaction management solution used by professionals and clients to conduct and close deals. ', 'https://blog.hubspot.com/marketing/blog-examples', 'upload/blog1.png'),
(3, 'dotloop', '2022-09-06', 'Dotloop is a real estate transaction management solution used by professionals and clients to conduct and close deals. ', 'https://blog.hubspot.com/marketing/blog-examples', 'upload/blog1.png'),
(5, 'utediya mehul', '2003-04-12', 'When students can learn, they can earn their bread in future.', 'https://rku.ac.in/', 'upload/download (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `collegep`
--

CREATE TABLE `collegep` (
  `id` int(11) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `cpara` varchar(300) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collegep`
--

INSERT INTO `collegep` (`id`, `cname`, `city`, `cpara`, `photo`, `link`) VALUES
(5, 'R.K. University', 'rajkot', 'When students can learn, they can earn their bread in future.', 'upload/134391082download (1).png', 'https://rku.ac.in/'),
(6, 'Gujarat Technological University', 'Ahmedabad', 'Gujarat Technological University a best it offeres the 30 courses so it is a', 'upload/202128939download (2).png', 'https://www.gtu.ac.in/');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `sub`, `email`, `message`) VALUES
(1, 'bhavy123', 'ewdw', 'bhavy@gmail.com', 'dewkhkjhdkjhkwhfkwhfw'),
(2, 'bhavy', 'hb ', 'b@gmail.com', 'dxdbnn ');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `que` varchar(500) NOT NULL,
  `ans` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mcqc`
--

CREATE TABLE `mcqc` (
  `id` int(11) NOT NULL,
  `Que` varchar(200) NOT NULL,
  `a` varchar(50) NOT NULL,
  `b` varchar(50) NOT NULL,
  `c` varchar(50) NOT NULL,
  `d` varchar(60) NOT NULL,
  `ans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mcqc`
--

INSERT INTO `mcqc` (`id`, `Que`, `a`, `b`, `c`, `d`, `ans`) VALUES
(1, 'Who is the father of C language?', 'Steve Jobs', 'James Gosling', 'Dennis Ritchie', 'Rasmus Lerdorf', 'Dennis Ritchie'),
(2, 'All keywords in C are in ____________', 'LowerCase letters', 'UpperCase letters', 'CamelCase letters', 'None of the mentioned', 'LowerCase letters'),
(3, 'Which of the following cannot be a variable name in C?', 'volatile', 'true', 'friend', 'export', 'volatile'),
(4, 'Which keyword is used to prevent any changes in the variable within a C program?', 'immutable', 'mutable', 'const', 'volatile', 'const'),
(5, 'What is an example of iteration in C?', 'for', 'while', 'do-while', 'all of the mentioned', 'all of the mentioned'),
(6, 'Functions can return enumeration constants in C?', 'true', 'false', 'depends on the compiler', 'depends on the standard', 'true'),
(7, 'Functions in C Language are always _________', 'Internal', 'External', 'Both Internal and External', 'External and Internal are not valid terms for functions', 'External'),
(8, 'What is #include <stdio.h>?', 'Preprocessor directive', 'Inclusion directive', 'File inclusion directive', 'None of the mentioned', 'Preprocessor directive'),
(9, 'Which of the following are C preprocessors?', '#ifdef', '#define', '#endif', 'all of the mentioned', 'all of the mentioned'),
(10, 'In C language, FILE is of which data type?', 'int', 'char *', 'struct', 'None of the mentioned', 'struct');

-- --------------------------------------------------------

--
-- Table structure for table `mcqcc`
--

CREATE TABLE `mcqcc` (
  `id` int(11) NOT NULL,
  `Que` varchar(200) NOT NULL,
  `a` varchar(50) NOT NULL,
  `b` varchar(50) NOT NULL,
  `c` varchar(50) NOT NULL,
  `d` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mcqcc`
--

INSERT INTO `mcqcc` (`id`, `Que`, `a`, `b`, `c`, `d`, `ans`) VALUES
(1, 'Who invented C++?', 'Dennis Ritchie', 'Ken Thompson', 'Brian Kernighan', 'Bjarne Stroustrup', 'Bjarne Stroustrup'),
(2, 'Which of the following is used for comments in C++?', '/* comment */', '// comment */', '// comment', 'both // comment or /* comment */', 'both // comment or /* comment */'),
(3, 'Which of the following user-defined header file extension used in c++?', 'hg', 'cpp', 'h', 'hf', 'h'),
(4, 'Which of the following is a correct identifier in C++?', 'VAR_1234', '$var_name', '7VARNAME', '7var_name', 'VAR_1234'),
(5, 'Which of the following approach is used by C++?', 'Left-right', 'Right-left', 'Bottom-up', 'Top-down', 'Bottom-up'),
(6, 'Which of the following type is provided by C++ but not C?', 'double', 'float', 'int', 'bool', 'bool'),
(7, 'By default, all the files in C++ are opened in _________ mode.', 'Binary', 'VTC', 'Text', 'ISCII', 'Text'),
(8, 'What is the size of wchar_t in C++?', 'Based on the number of bits in the system', '2 or 4', '4', '2', 'Based on the number of bits in the system'),
(9, 'Which of the following is used to terminate the function declaration in C++?', ';', ']', ')', ':', ';'),
(10, 'Which keyword is used to define the macros in c++?', '#macro', '#define', 'macro', 'define', '#define');

-- --------------------------------------------------------

--
-- Table structure for table `mcqhtml`
--

CREATE TABLE `mcqhtml` (
  `id` int(11) NOT NULL,
  `Que` varchar(200) NOT NULL,
  `a` varchar(100) NOT NULL,
  `b` varchar(100) NOT NULL,
  `c` varchar(100) NOT NULL,
  `d` varchar(100) NOT NULL,
  `ans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mcqhtml`
--

INSERT INTO `mcqhtml` (`id`, `Que`, `a`, `b`, `c`, `d`, `ans`) VALUES
(1, 'What is HTML?', 'HTML describes the structure of a webpage', 'HTML is the standard markup language mainly used to create web pages', 'HTML consists of a set of elements that helps the browser how to view the content', 'All of the mentioned', 'All of the mentioned'),
(2, 'Who is the father of HTML?', 'Rasmus Lerdorf', 'Tim Berners-Lee', 'Brendan Eich', 'Sergey Brin', 'Tim Berners-Lee'),
(3, 'HTML stands for __________', 'HyperText Markup Language', 'HyperText Machine Language', 'HyperText Marking Language', 'HighText Marking Language', 'HyperText Markup Language'),
(4, 'In HTML, the tags are __________.', ' in upper case', ' case-sensitive', 'in lowercase\r\n\r\n', 'not case sensitive', 'not case sensitive'),
(5, 'Which of the following is used to read an HTML page and render it?', 'Web server', 'Web network', 'Web browser', 'Web matrix', 'Web browser'),
(6, 'Which of the following is not a difference between HTML and XHTML?', 'Charset in both html and xhtml is “text/html”', 'Tags and attributes are case-insensitive in HTML but not in XHTML', 'Special characters must be escaped using character entities in XHTML unlike HTML', 'Charset in html is “text/html” where as in xhtml it is “application/xml+xhtml”', 'Charset in both html and xhtml is “text/html”'),
(7, 'What attribute do we use for data binding?', 'datasrc', 'mayscript', 'name', 'datafld', 'datasrc'),
(8, 'What is DOM in HTML?', 'Language dependent application programming', 'Hierarchy of objects in ASP.NET', 'Application programming interface', 'Convention for representing and interacting with objects in html documents', 'Convention for representing and interacting with objects in html documents'),
(9, 'In which part of the HTML metadata is contained?', 'head tag', 'title tag', 'html tag', 'body tag', 'head tag'),
(10, 'Which of these classes helps make a text stand out?', '.small', '.lead', '.text-center', '.text-left', '.lead');

-- --------------------------------------------------------

--
-- Table structure for table `mcqjava`
--

CREATE TABLE `mcqjava` (
  `id` int(11) NOT NULL,
  `Que` varchar(200) NOT NULL,
  `a` varchar(50) NOT NULL,
  `b` varchar(50) NOT NULL,
  `c` varchar(50) NOT NULL,
  `d` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mcqjava`
--

INSERT INTO `mcqjava` (`id`, `Que`, `a`, `b`, `c`, `d`, `ans`) VALUES
(1, 'Which one of the following is not a Java feature?', 'Object-oriented', 'Use of pointers', 'Portable', 'Dynamic and Extensible', 'Use of pointers'),
(2, 'What is the extension of java code files?', '.js', '.txt', '.class', '.java', '.java'),
(3, 'Which environment variable is used to set the java path?', 'MAVEN_Path', 'JAVA', 'JAVA', 'JAVA_HOME', 'JAVA_HOME'),
(4, 'What is the extension of compiled java classes?', '.txt', '.js', '.class', '.java', '.class'),
(5, 'Which of these are selection statements in Java?', 'break', 'continue', 'for()', 'if()', 'if()'),
(6, 'Which of these keywords is used to define interfaces in Java?', 'intf', 'Intf', 'interface', 'Interface', 'interface'),
(7, 'Which of the following is a superclass of every class in Java?', 'ArrayList', 'Abstract class', 'Object class', 'String', 'Object class'),
(8, 'Which of the below is not a Java Profiler?', 'JProfiler', 'Eclipse Profiler', 'JVM', 'JConsole', 'JVM'),
(9, 'Which of these packages contains the exception Stack Overflow in Java?', 'java.io', ' java.system', 'java.lang', 'java.util', 'java.lang'),
(10, 'Which one of the following is not an access modifier?', 'Protected', 'Void', 'Public', 'Private', 'Void');

-- --------------------------------------------------------

--
-- Table structure for table `mcqpy`
--

CREATE TABLE `mcqpy` (
  `id` int(11) NOT NULL,
  `Que` varchar(200) NOT NULL,
  `a` varchar(50) NOT NULL,
  `b` varchar(50) NOT NULL,
  `c` varchar(50) NOT NULL,
  `d` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mcqpy`
--

INSERT INTO `mcqpy` (`id`, `Que`, `a`, `b`, `c`, `d`, `ans`) VALUES
(1, 'Who developed Python Programming Language?', 'Wick van Rossum', 'Rasmus Lerdorf', 'Guido van Rossum', 'Niene Stom', 'Guido van Rossum'),
(2, 'Is Python case sensitive when dealing with identifiers?', 'no', 'yes', 'machine dependent', 'none of the mentioned', 'no'),
(3, 'Which of the following is the correct extension of the Python file?', '.python', '.pl', '.py', '.p', '.py'),
(4, 'All keywords in Python are in _________', 'Capitalized', 'lower case', 'UPPER CASE', 'None of the mentioned', 'None of the mentioned'),
(5, 'Which keyword is used for function in Python language?', 'Function', 'Def', 'Fun', 'Define', 'Def'),
(6, 'Which of the following character is used to give single-line comments in Python?', '//', '#', '!', '/*', '#'),
(7, 'Which of the following is the truncation division operator in Python?', '|', '//', '/', '%', '//'),
(8, 'Which of the following functions is a built-in function in python?', 'factorial()', 'print()', 'seed()', 'sqrt()', 'print()'),
(9, 'Which of the following is not a core data type in Python programming?', 'Tuples', 'Lists', 'Class', 'Dictionary', 'Class'),
(10, 'Which one of the following is not a keyword in Python language?', 'pass', 'eval', 'assert', 'nonlocal', 'eval');

-- --------------------------------------------------------

--
-- Table structure for table `mcqsql`
--

CREATE TABLE `mcqsql` (
  `id` int(11) NOT NULL,
  `Que` varchar(200) NOT NULL,
  `a` varchar(50) NOT NULL,
  `b` varchar(50) NOT NULL,
  `c` varchar(50) NOT NULL,
  `d` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mcqsql`
--

INSERT INTO `mcqsql` (`id`, `Que`, `a`, `b`, `c`, `d`, `ans`) VALUES
(1, 'The ________ clause is used to list the attributes desired in the result of a query.', 'Where', 'Select', 'From', 'Distinct', 'Select'),
(2, 'Which of the following fields are displayed as output?', 'Salary, dept_id', 'Employee', 'Salary', 'All the field of employee relation', 'All the field of employee relation'),
(3, 'What is the full form of SQL?', 'Structured Query List', 'Structure Query Language', 'Sample Query Language', 'None of these', 'Structure Query Language'),
(4, 'Which of the following is not a valid SQL type?', 'FLOAT', 'NUMERIC', 'DECIMAL', 'CHARACTER', 'DECIMAL'),
(5, 'Which of the following is not a DDL command?', 'TRUNCATE', 'ALTER', 'CREATE', 'UPDATE', 'UPDATE'),
(6, 'Which statement is used to delete all rows in a table without having the action logged?', 'DELETE', 'REMOVE', 'DROP', 'TRUNCATE', 'TRUNCATE'),
(7, 'SQL Views are also known as', 'Simple tables', 'Virtual tables', 'Complex tables', 'Actual Tables', 'Virtual tables'),
(8, 'How many Primary keys can have in a table?', 'Only 1', 'Only 2', 'Depends on no of Columns', 'Depends on DBA', 'Only 1'),
(9, 'Which datatype can store unstructured data in a column?', 'CHAR', 'RAW', 'NUMERIC', 'VARCHAR', 'RAW'),
(10, 'Which of the following is not Constraint in SQL?', 'Primary Key', 'Not Null', 'Check', 'Union', 'Union');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'rohan', 'rohan123@gmail.com', '123'),
(2, 'das', 'das123@gmail.com', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collegep`
--
ALTER TABLE `collegep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcqc`
--
ALTER TABLE `mcqc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcqcc`
--
ALTER TABLE `mcqcc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcqhtml`
--
ALTER TABLE `mcqhtml`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcqjava`
--
ALTER TABLE `mcqjava`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcqpy`
--
ALTER TABLE `mcqpy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcqsql`
--
ALTER TABLE `mcqsql`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `collegep`
--
ALTER TABLE `collegep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mcqhtml`
--
ALTER TABLE `mcqhtml`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
