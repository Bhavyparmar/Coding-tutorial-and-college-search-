<html>

<head>

    <title>PYTHON Language</title>
    <link rel="stylesheet" href="css/First.css">
   
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <script src="../prism.js"></script>
    <link rel="stylesheet" href="../prism.css">

</head>

<body>
<?php include("./include/header.php"); ?>
    <div class="content">
        <table>
            <tr>
                <td>
                    <center>
                        <h1>PYTHON tutorial</h1>
                    </center>
                    <h5>1.Simple hello world program</h5>
                    <p>
                        &nbsp;&nbsp; Rather then any other language python is easy here we just write print and our string and that’s it will print output on console.
                    </p>


                    <pre class="language-py"><code>
    print("Hello world")                                                                                                                                                        
</code></pre>
                    <h5>Output</h5>
                    <img src="./python language output/1.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>2.User input</h5>
                    <p>
                        &nbsp;&nbsp; In this input you enter int float it will take as a string always.
                        <br/>
                        &nbsp;&nbsp;So for different data type you need to convert string to a int or float.
                    </p>
                  <pre class="language-py"><code>
    a=input("Enter your name:")
    print(a)
</code></pre>
                    <h5>Output</h5>
                    <img src="./python language output/2-input.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>2.1 Conversion of user input </h5>
                    <p>
                        &nbsp;&nbsp; Here we convert a to int
                    </p>
                  <pre class="language-py"><code>
    a=input("Enter your number:")
    a=int(a)
</code></pre>
                    <h5>Output</h5>
                    <img src="./python language output/3-input.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>3 Operator </h5>
                    <p>
                        &nbsp;&nbsp;Operators are used to perform operations on variables and values.
                    </p>
                    <h5>3.1 Arithmetic operator </h5>
                    <p>
                        &nbsp;&nbsp;This operator perform the mathematical operation in 2 variable.
                    </p>
                  <pre class="language-py"><code>
    a=30
    b=10
    print("The value of 30+10 ",a+b)
    print("The value of 30-10 ",a-b)
    print("The value of 30*10 ",a*b)
    print("The value of 30/10 ",a/b)
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/4-arithemetic.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>3.2 Comparison operator</h5>
                    <p>
                        &nbsp;&nbsp;a==b is equal or not
                        <br/>
                        &nbsp;&nbsp;a!=b is does not equals
                        <br/>
                        &nbsp;&nbsp;a&gt;b a is  greater then b
                        <br/>
                        &nbsp;&nbsp;a&lt;b a is less then b
                        <br/>
                        &nbsp;&nbsp;a&gt;= b is greater then or equals to b
                        <br/>
                        &nbsp;&nbsp;a&lt;= b is less then or equals to b
                        <br/>
                    </p>
                  <pre class="language-py"><code>
    a=30
    b=10
    print("== operator ",(a==b))
    print("!= operator ",(a!=b))
    print("&gt; operator ",(a&gt;b))
    print("&lt; operator ",(a&lt;b))
    print("&gt;= operator ",(a&gt;=b))
    print("&lt;= operator ",(a&lt;=b))
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/5-comparision.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>3.3 Logical operator</h5>
                    <p>
                        &nbsp;&nbsp;and operator if both condition is true then it written true
                        <br/>
                        &nbsp;&nbsp;or operator if one condition is true then it written true
                        <br/>
                        &nbsp;&nbsp;not operator reverse the result, returns False if the result is true 
                    </p>
                  <pre class="language-py"><code>
    a=30
    b=10
    print("and operator ",(a<5 and b>9))
    print("or operator ",(a<5 or b>9))
    print("not operator ",(not(a<5 and b>9)))
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/6-logical.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>3.4 Identify operator</h5>
                    <p>
                        &nbsp;&nbsp;a is b means both variable is same then it returns true
                        <br/>
                        &nbsp;&nbsp;a is not b means both variable is not same then it returns true
                    </p>
                  <pre class="language-py"><code>
    a=30
    b=30
    print("is operator ",(a is b))
    print("is not operator ",(a is not b))
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/7-identify.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>4. List</h5>
                    <p>
                        &nbsp;&nbsp;sts are used to store multiple items in a single variable.
                        <br/>
                        &nbsp;&nbsp;Lists are one of 4 built-in data types in Python used to store collections of data, the other 3 are Tuple, Set, and Dictionary, all with different qualities and usage.
                        <br/>
                        &nbsp;&nbsp;Lists are created using square brackets
                    </p>
                    <h5>4.1 Create a list</h5>
                    <p>
                        &nbsp;&nbsp;Here we make a variable a as a list and simple print it.
                    </p>
                  <pre class="language-py"><code>
    a=["Banana","Grapes","Cheery","Apple"]
    print(a)
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/8-list.PNG" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>4.2 Print the member of list by its index</h5>
                    <p>
                        &nbsp;&nbsp;a[0] means a first element a[1] means second.
                    </p>
                  <pre class="language-py"><code>
    a=["Banana","Grapes","Cheery","Apple"]
    print(a[0])
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/9-listindex.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>4.3 List slicing</h5>
                    <p>
                        &nbsp;&nbsp;Means to print a index 0 to 2 means 2 element is printed 
                    </p>
                  <pre class="language-py"><code>
    a=["Banana","Grapes","Cheery","Apple"]
    print(a[0:2])
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/10-listslice.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>4.4 Append the list</h5>
                    <p>
                        &nbsp;&nbsp;.append() is function to append a list
                    </p>
                  <pre class="language-py"><code>
    a=["Banana","Grapes","Cheery","Apple"]
    a.append("Mangoes")
    print(a)
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/11-listappend.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>4.5 Remove the list</h5>
                    <p>
                        &nbsp;&nbsp;.remove is used for removing a element from the list
                    </p>
                  <pre class="language-py"><code>
    a=["Banana","Grapes","Cheery","Apple"]
    print(a)
    a.remove("Apple")
    print(a)
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/12-listremove.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>4.6 Sort a list</h5>
                    <p>
                        &nbsp;&nbsp;.sort  is used for sort a list
                    </p>
                  <pre class="language-py"><code>
    a=["Banana","Grapes","Cheery","Apple"]
    a.sort()
    print(a)
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/13-listsort.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>4.7 Combine a list</h5>
                  <pre class="language-py"><code>
    a=["Banana","Grapes"]
    b=["Kiwi","Mangoes"]
    c=a+b
    print(c)
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/14-listcombine.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>4.8 All List method</h5>
                    <p>
                        &nbsp;&nbsp;clear()	Removes all the elements from the list
                        <br/>
                        &nbsp;&nbsp;copy()	Returns a copy of the list
                        <br/>
                        &nbsp;&nbsp;count()	Returns the number of elements with the specified value
                        <br/>
                        &nbsp;&nbsp;index()	Returns the index of the first element with the specified value
                        <br/>
                        &nbsp;&nbsp;insert()	Adds an element at the specified position
                        <br/>
                        &nbsp;&nbsp;pop()	Removes the element at the specified position
                        <br/>
                        &nbsp;&nbsp;reverse()	Reverses the order of the list
                        <br/>
                    </p>
                  <pre class="language-py"><code>
    a=["Banana","Grapes","Kiwi"]
    print("---clear---")
    print(a)
    a.clear()
    print(a)
    print("---clear---")
    b=["Banana","Grapes","Kiwi"]
    print("---copy---")
    print(b)
    c=b.copy()
    print(c)
    print("---copy---")
    print("---count---")
    print(b.count("Banana"))
    print("---count---")
    print("---Index---")
    print(b.index("Kiwi"))
    print("---Index---")
    print("---Insert---")
    b.insert(1,"Apple")
    print(b)
    print("---Insert---")
    print("---Pop---")
    b.pop(2)
    print(b)
    print("---Pop---")
    print("---Reverse---")
    b.reverse()
    print(b)
    print("---Reverse---")
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/15-listmethod.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>5. Tuples</h5>
                    <p>
                        &nbsp;&nbsp;Tuples are used to store multiple items in a single variable.
                        <br/>
                        &nbsp;&nbsp;Tuple is one of 4 built-in data types in Python used to store collections of data, the other 3 are List, Set, and Dictionary, all with different qualities and usage.
                        <br/>
                        &nbsp;&nbsp;A tuple is a collection which is ordered and unchangeable.
                        <br/>
                        &nbsp;&nbsp;Tuples are written with round brackets
                    </p>
                    <h5>5.1 Create a tuple and access it</h5>
                    <p>
                        &nbsp;&nbsp;Here we first define a tuple and then print it and also access it one element by print with it’s index.
                    </p>
                  <pre class="language-py"><code>
    a=("Banana","Apple","Kiwi")
    print(a)
    print(a[0])
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/16-tuple.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>5.2 Join tuples</h5>
                    <p>
                        &nbsp;&nbsp;You simple use + operator for combine of a tuples.
                    </p>
                  <pre class="language-py"><code>
    a=("Banana","Apple")
    b=("Brinjal","Potato")
    c=a+b
    print(c)
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/17-tuplecombine.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5> 5.3 Tuples methods</h5>
                    <p>
                        &nbsp;&nbsp;count()	Returns the number of times a specified value occurs in a tuple
                        <br/>
                        &nbsp;&nbsp;index()	Searches the tuple for a specified value and returns the position of where it was found
                    </p>
                  <pre class="language-py"><code>
    a=("Banana","Apple","Apple","Kiwi")
    print(a.count("Apple"))
    print(a.index("Kiwi"))
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/18-tuplemethod.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5> 6. Set</h5>
                    <p>
                        &nbsp;&nbsp;Sets are used to store multiple items in a single variable.
                        <br/>
                        &nbsp;&nbsp;Set is one of 4 built-in data types in Python used to store collections of data, the other 3 are List, Tuple, and Dictionary, all with different qualities and usage.
                        <br/>
                        &nbsp;&nbsp;A set is a collection which is unordered, unchangeable*, and unindexed                
                    </p>
                    <h5>6.1 Create a set</h5>
                    <p>
                        &nbsp;&nbsp;You can create a set by having a curly brackets open and close.         
                    </p>
                  <pre class="language-py"><code>
    a={1,3,4,54,1}
    print(a)    
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/19-set.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5> 6.2 Access the element</h5>
                    <p>
                        &nbsp;&nbsp;you cannot access items in a set by referring to an index or a key. But you can loop through the set items using a for loop, or ask if a specified value is present in a set, by using the in keyword.
                        <br/>
                        &nbsp;&nbsp;You can print it directly by using a loop.
                        <br/>
                        &nbsp;&nbsp;You can check that the element is present or not in set.                
                    </p>
                  <pre class="language-py"><code>
    a={1,2,4,56,89}
    for z in a:
    print(z)
    a={1,2,4,56,89}
    print(2 in a)
    print("Student Bread" in a)
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/20-setaccess.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5> 6.3 Combine the set</h5>
                    <p>
                        &nbsp;&nbsp;union() method print the all element but not element which are repeat
                        <br/>
                        &nbsp;&nbsp;intersection() method print the element which are common on both                
                    </p>
                  <pre class="language-py"><code>
    a={1,2,4,56,89}
    b={2,89,45,56,23}
    
    c=a.union(b)
    print(c)
    
    d=a.intersection(b)
    print(d)
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/21-setacc.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5> 6.4 Set methods</h5>
                    <p>
                        &nbsp;&nbsp;add()	Adds an element to the set
                        <br/>
                        &nbsp;&nbsp;clear()	Removes all the elements from the set
                        <br/>
                        &nbsp;&nbsp;copy()	Returns a copy of the set
                        <br/>
                        &nbsp;&nbsp;pop()	Removes an element from the set
                        <br/>
                        &nbsp;&nbsp;update()	Update the set with the union of this set and others     
                    </p>
                  <pre class="language-py"><code>
    a={1,2,4,56,89}
    b={2,89,45,56,23}
    cd={"Ferrai","Mercedes"}
    d={"B.M.W","Audi"}
    a.add("Student bread")
    print("add",a)

    a.clear()
    print("clear",a)

    c=b.copy()
    print("copy",c)

    b.pop()
    print("pop",b)

    cd.update(d)
    print("update",cd)
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/22-setmethod.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>7. Dictionaries</h5>
                    <p>
                        &nbsp;&nbsp;Dictionaries are used to store data values in key:value pairs.A dictionary is a collection which is ordered*, changeable and do not allow duplicates.
                        <br/>
                        &nbsp;&nbsp;Dictionaries are written with curly brackets, and have keys and values.    
                    </p>
                  <pre class="language-py"><code>
    my={
    "Fast": "quick as much as possible",
    "Student bread": "A coding tutorial website ",
    "marks": [1,2,3],
    "Student": {'Future':'citizen'},
    1:2
    }
    print(my['Student bread'])
    print(my['Student']['Future'])
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/23-dictionary.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>7.1 update ,add ,remove values</h5>
                    <br/>
                    <h5>7.1.1 You can update values and key by following</h5>
                  <pre class="language-py"><code>
    thisdict = {
    "Student": "Bread",
    "College": "Search engine",
    "Devloped by": "3 person"
    }
    print(thisdict)
    thisdict["Devloped by"] = "2 person"
    print(thisdict)
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/24-dictionarymethod.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>7.1.2 You can add key and values by following</h5>
                  <pre class="language-py"><code>
    thisdict = {
    "Student": "Bread",
    "College": "Search engine",
    "Devloped by": "3 person"
    }
    print(thisdict)
    thisdict["Hosted by"] = "1 person"
    print(thisdict)
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/25-dict.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>7.1.3 Remove key and values</h5>
                    <p>
                        &nbsp;&nbsp;For remove the pop method is used  
                    </p>
                  <pre class="language-py"><code>
    thisdict = {
    "Student": "Bread",
    "College": "Search engine",
    "Devloped by": "3 person"
    }
    print(thisdict)
    thisdict["Hosted by"] = "1 person"
    print(thisdict)
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/26-dictpop.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>8. Conditional statement</h5>
                    <p>
                        &nbsp;&nbsp;Conditional statement is used when compiler needs to choose a decision between 2 condition or more than 2
                    </p>
                    <h5>8.1 If else statement</h5>
                    <p>
                        &nbsp;&nbsp;In this program we entered one value and check the number is even or odd.
                    </p>
                  <pre class="language-py"><code>
    a=int(input("Enter your number: "))
    if a%2==0:
    print("Number is even")
    else:
    print("Number is odd")
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/27-if.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>8.2 If elif else statement</h5>
                    <p>
                        &nbsp;&nbsp;This statement is used when we have more then 2 condition then this statement is used..
                    </p>
                    <pre class="language-py"><code>
    a=int(input("Enter your number: "))
    if a>0:
    print("Number is positive")
    elif a&lt;0:
    print("Number is negative")
    else:
    print("Number is zero")
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/28-ifelif.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>8.3 short hand if else</h5>
                    <p>
                        &nbsp;&nbsp;This type of statement is used when we must write if else in one line
                    </p>
                    <pre class="language-py"><code>
    a=int(input("Enter your number: "))
    print("a is even") if a%2==0 else print("a is odd")
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/29-shortif.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>9 loops</h5>
                    <p>
                        &nbsp;&nbsp;Python supported 2 types of loop while and for loop. In loop we have to initialize write a condition and increment/decrement the variable.
                    </p>
                    <h5>9.1 While loop</h5>
                    <p>
                        &nbsp;&nbsp;With the while loop we can execute a set of statements as long as a condition is true.
                    </p>
                    <pre class="language-py"><code>
    i=1
    while i&lt;=5:
    print(i)
    i=i+1 
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/30-whileloop.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>9.1.1 break and continue</h5>
                    <p>
                        &nbsp;&nbsp;break used when we need to terminate a loop
                    </p>
                    <pre class="language-py"><code>
    i=1
    while i&lt;=5:
    if(i==3):
    break
    print(i)
    i=i+1 
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/31-break.png" class="img-fluid">
                    <p>
                        &nbsp;&nbsp;continue used when we just executed loop and don’t print the particular condition.
                    </p>
                    <pre class="language-py"><code>
    i = 0
    while i &lt; 4:
    i += 1
    if i == 3:
    continue
    print(i)
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/32-continue.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>9.2 for loop</h5>
                    <p>
                        &nbsp;&nbsp;Here we use range which means it start with 1 end with 4 we write 5 but it execute 5-1 means 4.
                    </p>
                    <pre class="language-py"><code>
    for i in range(1,5):
    print(i)
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/33-for.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>10. Function</h5>
                    <p>
                        &nbsp;&nbsp;In function we have to define it and call it 
                        <br/>
                        </p>
                        <h5>10.1 Function with no argument</h5>
                        <p>
                        &nbsp;&nbsp;You can run a function in multiple times
                    </p>
                    <pre class="language-py"><code>
    def myFunction():
    print("function with no argument")
    myFunction()
    myFunction()
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/34-function.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>10.2 Function with argument</h5>
                    <p>
                        &nbsp;&nbsp;Here we gave argument and return the value. 
                    </p>
                    <pre class="language-py"><code>
    def myFunction(a,b):
    return a+b
    print("Answer is",myFunction(12,12))
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/35-function.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>10.3 Default parameter value</h5>
                    <p>
                        &nbsp;&nbsp;Here we gave a default parameter if you do not give a parameter it will take it by default argument.
                    </p>
                    <pre class="language-py"><code>
    def myFunction(a="person"):
    print("Good morning "+a)
    myFunction("Student")
    myFunction()
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/36-function.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>11. OOPS concept</h5>
                    <p>
                        &nbsp;&nbsp;Python is an object oriented programming language.
                        <br/>
                        &nbsp;&nbsp;Almost everything in Python is an object, with its properties and methods.
                        <br/>
                        &nbsp;&nbsp;A Class is like an object constructor, or a "blueprint" for creating objects.
                        <br/>
                        &nbsp;&nbsp;Here we define a class and have a getdata function and gave 3 argument one is name and age.
                    </p>
                    <h5>11.1 Define a class and method.</h5>
                    <pre class="language-py"><code>
    class A:
    def getdata(self, name, age):
    self.name = name
    self.age = age

    p1 = A()
    p1.getdata("Student bread", 36)
    print(p1.name)
    print(p1.age)
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/37-oops.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>11.2 init method</h5>
                    <p>
                        &nbsp;&nbsp;This init method is running when object is made we have to give argument to the object and it assign the value to name and age.
                    </p>
                    <pre class="language-py"><code>
    class A:
    def __init__(self, name, age):
    self.name = name
    self.age = age

    p1 = A("Student bread", 36)
    print(p1.name)
    print(p1.age)
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/38-oops.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>11.3 Self parameter</h5>
                    <p>
                        &nbsp;&nbsp;The self parameter is a reference to the current instance of the class, and is used to access variables that belongs to the class.
                        &nbsp;&nbsp;It does not have to be named self , you can call it whatever you like, but it has to be the first parameter of any function in the class:
                        &nbsp;&nbsp;You can use any word in self
                    </p>
                    <pre class="language-py"><code>
    class A:
    def __init__(ab, name, age):
    ab.name = name
    ab.age = age

    p1 = A("Loy", 56)
    print(p1.name)
    print(p1.age)
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/39-oops.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <p>
                        &nbsp;&nbsp;In this program we input name depart and post from the user and just print it.
                    </p>
                    <pre class="language-py"><code>
    class A:
    def getdata(self, name,depart,post):
    self.name=name
    self.depart=depart
    self.post=post
    def display(self):
    print("Your name is "+self.name)
    print("Your department is "+self.depart)
    print("Your post is "+self.post)

    a=input("Enter name: ")
    b=input("Enter department: ")
    c=input("Enter post: ")
    obj=A()
    obj.getdata(a,b,c)
    obj.display()
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/40-oops.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>11.4 Inheritances</h5>
                    <pre class="language-py"><code>
    class A:
    def getdata(self, name,depart,post):
    self.name=name
    self.depart=depart
    self.post=post
    def display(self):
    print("Your name is "+self.name)
    print("Your department is "+self.depart)
    print("Your post is "+self.post)
    class  B(A):
    pass
    a=input("Enter name: ")
    b=input("Enter department: ")
    c=input("Enter post: ")
    obj=B()
    obj.getdata(a,b,c)
    obj.display()
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/41-oops.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>12. Exceptional handling</h5>
                    &nbsp;&nbsp;The try block lets you test a block of code for errors.
                    <br/>   
                    &nbsp;&nbsp;The except block lets you handle the error.
                    <br/>    
                    &nbsp;&nbsp;The else block lets you execute code when there is no error.
                    <br/>    
                    &nbsp;&nbsp;The finally block lets you execute code, regardless of the result of the try- and except blocks.
                    <pre class="language-py"><code>
    try:
    print(x)
    except:
    print("An exception occurred")
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/42-except.png" class="img-fluid">
                    <p>
                        &nbsp;&nbsp;In this program we will not defined variable a 
                        </p>
                    <pre class="language-py"><code>
    try:
    print(a)
    except NameError:
    print("Variable a is not defined")
    except:
    print("Something else went wrong")
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/43-except.png" class="img-fluid">  
                    <p>
                        &nbsp;&nbsp;In same program we will defined variable a 
                        </p>
                    <pre class="language-py"><code>
    a=10
    try:
    print(a)
    except NameError:
    print("Variable a is not defined")
    except:
    print("Something else went wrong")
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/44-except.png" class="img-fluid">  
                </td>
            </tr>
            <tr>
                <td>
                    <h5>12.1 Exception with else </h5>
                    <p>
                        &nbsp;&nbsp;Else is executed if no error is generated
                    </p>
                    <pre class="language-py"><code>
    a=10
    try:
    print(a)
    except NameError:
    print("Variable a is not defined")
    else:
    print("Else part if no error")
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/45-except.png" class="img-fluid">
                    <p>
                        &nbsp;&nbsp;Else is not executed when error is generated
                    </p>
                    <pre class="language-py"><code>
    try:
    print(a)
    except NameError:
    print("Variable a is not defined")
    else:
    print("Else part if no error")
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/46-except.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>12.2 Finally </h5>
                    <p>
                        &nbsp;&nbsp;Finally is executed if error is generate or not
                    </p>
                    <pre class="language-py"><code>
    try:
    print(a)
    except NameError:
    print("Variable a is not defined")
    else:
    print("Else part if no error")
    finally:
    print("i am finally")
</code></pre>              
                    <h5>Output</h5>
                    <img src="./python language output/47-except.png" class="img-fluid">
                </td>
            </tr>
        </table>
    </div>
   
</body>

</html>