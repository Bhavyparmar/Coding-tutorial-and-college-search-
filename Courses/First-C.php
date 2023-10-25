<html>

<head>

    <title>C Language</title>
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
                        <h1>C tutorial</h1>
                    </center>
                    <h5>1.Basic Hello world program</h5>
                    <p>
                        <b>Line 1:</b>&nbsp;&nbsp;#include &lt;;stdio.h&gt;; It is a library class the method printf is
                        define in this
                        class and we need to implement it when we have to use printf statement
                    </p>
                    <p>
                        <b>Line 2:</b>&nbsp;&nbsp;int main() { &nbsp; The compiler should executes from here
                    </p>
                    <p>
                        <b>Line 3:</b>&nbsp;&nbsp; printf("Hello World!"); It prints the hello world in output
                    </p>
                    <p>
                        <b>Line 4:</b>&nbsp;&nbsp; return 0;} It return 0 our method is int so we need to gave some
                        return value
                    </p>


                    <pre class="language-c"><code>
#include &lt;stdio.h&gt;;
int main() 
{ 
printf("Hello World!");
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C language output/1-hello.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>2.Types of data types in C</h5>
                    <p>
                        <b>Line 3:</b>&nbsp;&nbsp; int a=1; int is one type of data types which can stores non decimal
                        value.
                    </p>
                    <p>
                        <b>Line 4:</b>&nbsp;&nbsp; char favChar='A'; char is one type of data types which can stores one
                        character.
                    </p>
                    <p>
                        <b>Line 5:</b>&nbsp;&nbsp; float b=25.52; float is one type of data types which can stores
                        decimal value.
                    </p>
                    <p>
                        <b>Line 6:</b>&nbsp;&nbsp; double d=56.4444; double is one type of data types which can stores
                        decimal value or non decimal value.
                    </p>
                    <p>
                        <b>Line 7:</b>&nbsp;&nbsp; printf("Int a is %d",a); for print in console for int we need to
                        write format specifier %d.
                    </p>
                    <p>
                        <b>Line 8:</b>&nbsp;&nbsp; printf("\n"); for print another line for next line.
                    </p>
                    <p>
                        <b>Line 9:</b>&nbsp;&nbsp; printf("Char favChar is %c",favChar); for print in console for char
                        we need to write format specifier %c.
                    </p>
                    <p>
                        <b>Line 11:</b>&nbsp;&nbsp; printf("FLoat b is %f",b); for print in console for float we need to
                        write format specifier %f.
                    </p>
                    <p>
                        <b>Line 13:</b>&nbsp;&nbsp; printf("Double d is %lf",d); for print in console for double we need
                        to write format specifier %lf.
                    </p>
                    <pre class="language-c"><code>
#include &lt;stdio.h&gt;;
int main()
{
int a=1;
char favChar='A';
float b=25.52;
double d=56.4444;
printf("Int a is %d",a);
printf("\n");
printf("Char favChar is %c",favChar);
printf("\n");
printf("FLoat b is %f",b);
printf("\n");
printf("Double d is %lf",d);
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C language output/2-datatype.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>3.Types of comments in C</h5>
                    <p>
                        <b>Line 6:</b>&nbsp;&nbsp; /printf("----");printf("----");/ it is a double line comment. Comment
                        means compiler will not executed that particular line which was written on comment.
                    </p>
                    <p>
                        <b>Line 8:</b>&nbsp;&nbsp; // printf("----"); it is a single line comment. Comment means
                        compiler will not executed that particular line which was written on comment.
                    </p>
                    <pre class="language-c"><code>
#include &lt;stdio.h&gt;;
int main()
{
int a=1;
printf("Your a is %d",a);
/*printf("----");
printf("----");*/
// printf("----");
// printf("----");
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C language output/3-comment.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>4.Types Of Operater in C</h5>
                    <p>
                    <h4>Operators</h4>
                    &nbsp;&nbsp; Operators are used to perform operations on variables and values.

                    In the example below, we use the + operator to add together two values:
                    </p>
                    <h4>Example</h4>
                    <pre class="language-c"><code>
int sum1 = 100 + 50;        // 150 (100 + 50)
int sum2 = sum1 + 250;      // 400 (150 + 250)
int sum3 = sum2 + sum2;     // 800 (400 + 400)
</code></pre>
                    <p>
                    <h4>Arithmetic Operators</h4>
                    <br />
                    &nbsp;&nbsp;+ Addition Adds together two values Example: x + y
                    <br />
                    <br />
                    &nbsp;&nbsp;- Subtraction Subtracts one value from another Example: x - y
                    <br />
                    <br />
                    &nbsp;&nbsp;* Multiplication Multiplies two values Example: x * y
                    <br />
                    <br />
                    &nbsp;&nbsp;/ Division Divides one value by another Example: x / y
                    <br />
                    <br />
                    &nbsp;&nbsp;% Modulus Returns the division remainder Example: x % y
                    <br />
                    <br />
                    &nbsp;&nbsp;++ Increment Increases the value of a variable by 1 Example: ++x
                    <br />
                    <br />
                    &nbsp;&nbsp;-- Decrement Decreases the value of a variable by 1 Example: --x
                    <br />
                    <br />
                    </p>
                    <p>
                    <h4>Assignment Operators</h4>
                    &nbsp;&nbsp;Assignment operators are used to assign values to variables.

                    In the example below, we use the assignment operator (=) to assign the value 10 to a variable called
                    x:
                    </p>
                    <h4>Example</h4>
                    <pre class="language-c"><code>
int x = 10;
</code></pre>
                    <p>
                        &nbsp;&nbsp; The addition assignment operator (+=) adds a value to a variable:
                    </p>
                    <h4>Example</h4>
                    <pre class="language-c"><code>
int x = 10;
x += 5;</code></pre>


                </td>
            </tr>
            <tr>
                <td>
                    <h5>5.If else statement</h5>
                    <p>
                        &nbsp;&nbsp;In this program you see we get value from the user using the scanf method
                        you have to pass the format specifier and variable name.
                        <br />
                        <br />
                        &nbsp;&nbsp;In if (condition) we write a>b or not if yes so if statement is execute and not so
                        else statement is excecutes.

                    </p>
                    <pre class="language-c"><code>
#include &lt;stdio.h&gt;
int main()
{
int a,b=50;
printf("Enter your number: ");
scanf("%d",&a);
if(a>b)
{
printf("a is greater than b");
}
else
{
printf("b is greater than a");
}
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C language output/4-ifelse.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>5.1 If elseif else statement</h5>
                    <p>
                        &nbsp;&nbsp;In this program we define the else if when we need more than 2 condition
                    </p>
                    <P>
                        &nbsp;&nbsp;then else if statement is used here we define the three condition a>0 means positive
                    </P>
                    <br />
                    <p>
                        &nbsp;&nbsp;a&lt;0 means negative and else if above condition is not true so else is execute
                        means number is zero
                    </p>
                    <pre class="language-c"><code>
#include &lt;stdio.h&gt;
int main()
{
int a;
printf("Enter your number: ");
scanf("%d",&a);
if(a>0)
{
printf("a is positive");
}
else if(a&lt;0)
{
printf("a is negative");
}
else
{
printf("a is zero");
}
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C language output/5-ifelse else-if.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>
                        5.2 Short hand if else
                    </h5>
                    <p>
                        &nbsp;&nbsp;Here we define if else but in short manner a>18 then you vote it is if statement
                        another is else statement
                    </p>
                    <pre class="language-c"><code>
#include &lt;stdio.h&gt;
int main()
{
int a = 20;
(a >18) ? printf("You can vote."): printf("You can not vote.");
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C language output/6-short-ifelse.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>5.3 Switch case</h5>
                    <p>
                        &nbsp;&nbsp;Switch case statement is used when we have a selected number character or a string
                        just define a case and implement the switch case statement
                        <br />
                        &nbsp;&nbsp;the default statement is executes when above case is not match.
                    </p>
                    <pre class="language-c"><code>
#include &lt;stdio.h&gt;
int main()
{
int a ;
printf("enter your number ");
scanf("%d",&a);
switch(a)
{
case 1:
printf("Sunday");
break;
case 2:
printf("Monday");
break;
case 3:
printf("Tuesday");
break;
case 4:
printf("Wednesday");
break;
case 5:
printf("Thursday");
break;
case 6:
printf("Friday");
break;
case 7:
printf("Saturday");
break;
default:
printf("Please enter 1 to 7");
}
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C language output/7-switchcse.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>6. Loops</h5>
                    <p>
                        &nbsp;&nbsp;Loop is used when we need to print or do a task repeatedly then loop is used there
                        are three types of loops is available do- while , while loop, for loop .
                        <br />
                        &nbsp;&nbsp;And for loop we need to initialize it check the condition and increment/decrement
                        it.
                    </p>
                    <h5>6.1 While loop</h5>
                    <p>
                        &nbsp;&nbsp;Here first we initialize i=0 then we specify condition i&lt;5 means i will executed
                        until this condition becomes true and when true the loop will terminated then we simple
                        increment i ++;
                    </p>
                    <pre class="language-c"><code>
#include &lt;stdio.h&gt;
int main()
{
int i = 0;

while (i < 5)
{
printf("%d\n", i);
i++;
}
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C language output/8-while.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>6.2 Do-while loop</h5>
                    <p>
                        &nbsp;&nbsp;Here first we initialize i=0 then we specify condition i<=4 means i will executed
                            until this condition becomes true and when true the loop will terminated then we simple
                            increment i ++; </p>
                            <pre class="language-c"><code>

#include  &lt;stdio.h&gt;
int main()
{
int i = 0;

do
{
printf("%d\n",i);
i++;
} while (i<=4);
}
</code></pre>
                            <h5>Output</h5>
                            <img src="./C language output/9-dowhile.png" class="img-fluid">

                </td>
            </tr>
            <tr>
                <td>
                    <h5>6.3 For loop</h5>
                    <p>
                        &nbsp;&nbsp;Here initialize condition and increment is in one line the for loop is used more
                        than above 2.
                    </p>
                    <pre class="language-c"><code>
                                                             
#include &lt;stdio.h&gt;
int main()
{
for(int i=0;i<=4;i++)
{
printf("%d\n",i);
}
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C language output/10-for.png" class="img-fluid">


                </td>
            </tr>
            <tr>
                <td>
                    <h5>7. Break and continue </h5>
                    <h5>7.1 Break </h5>
                    <p>
                        &nbsp;&nbsp;when you write break statement then the loop will terminated here we define if
                        condition and when i becomes 4 we write break means lop will terminate
                    </p>
                    <pre class="language-c"><code>

#include &lt;stdio.h&gt;
int main()
{
int i;
for (i = 0; i < 10; i++)
{
if (i == 4)
{
break;
}
printf("%d\n", i);
}
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C language output/11-break.png" class="img-fluid">

                </td>
            </tr>
            <tr>
                <td>

                    <h5>7.2 Continue</h5>
                    <p>
                        &nbsp;&nbsp;when we write continue it skip the particular number means continue will skip
                        particular condition and break will terminate the whole loop.
                    </p>
                    <pre class="language-c"><code>
#include &lt;stdio.h&gt;
int main()
{
int i;
for (i = 0; i < 6; i++)
{
if (i == 4)
{
continue;
}
printf("%d\n", i);
}
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C language output/12-continue.png" class="img-fluid">

                </td>
            </tr>
            <tr>
                <td>

                    <h5>8. Array</h5>
                    <p>
                        &nbsp;&nbsp;Array means a one type of data type which can store multiple element of single data
                        type means you can create array of int, float, char, double, string
                    </p>
                    <h5>8.1 Array</h5>
                    <p>
                        &nbsp;&nbsp;Here we define int a[] means a is variable of array type ={1,2,3} then we initialize
                        it with the variable and simple print it with its index which are a[0],a[1],a[2] array index is
                        always start with the 0.
                    </p>
                    <pre class="language-c"><code>
#include &lt;stdio.h&gt;
int main()
{
int a[]={1,2,3};
printf("%d",a[0]);
printf("\n");
printf("%d",a[1]);
printf("\n");
printf("%d",a[2]);
printf("\n");
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C language output/13-arrayintialize.png" class="img-fluid">

                </td>
            </tr>
            <tr>
                <td>

                    <h5>8.2 Array print using a loop</h5>

                    <pre class="language-c"><code>
#include &lt;stdio.h&gt;
int main()
{
int a[]={1,2,3};
for(int i=0;i<3;i++)
{
printf("%d",a[i]);
printf("\n");
}
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C language output/14-arrayloop.png" class="img-fluid">

                </td>
            </tr>
            <tr>
                <td>

                    <h5>8.3 Array scanf using loop</h5>
                    <p>
                        &nbsp;&nbsp;Here we define the 3 size of array then simple take it from user and print it using
                        the for loop.
                    </p>
                    <pre class="language-c"><code>
#include &lt;stdio.h&gt;
int main()
{
int a[3];
int i;
for(i=0;i<3;i++)
{
printf("Enter your number ");
scanf("%d",&a[i]);
}
for(i=0;i<3;i++)
{
printf("%d",a[i]);
printf("\n");
}
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C language output/15-arrayscanf.png" class="img-fluid">

                </td>
            </tr>
            <tr>
                <td>

                    <h5>9. String</h5>
                    <p>
                        &nbsp;&nbsp;String is one type of data type in c if you make a string so you need to make a
                        array of the char so then you can access the string.
                        <br />
                        <br />
                        &nbsp;&nbsp;Here we make a array of char and initialize it with one string and print it we use
                        %s as format specifier so it prints whole string and then we use %c and a[0] so it print the
                        particular character.
                    </p>
                    <pre class="language-c"><code>
#include &lt;stdio.h&gt;
int main()
{
char a[]={"Student Bread"};
printf("%s",a);
printf("\n");
printf("%c",a[0]);
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C language output/16-string.png" class="img-fluid">

                </td>
            </tr>
            <tr>
                <td>

                    <h5>10. Memory address</h5>
                    <p>
                        &nbsp;&nbsp;The variable which we declare it can store in memory so if we have to fetch memory
                        address so we use %p format specifier for the memory address.
                    </p>
                    <pre class="language-c"><code>
#include &lt;stdio.h&gt;
int main()
{
int a=45;
float b=25.25;
printf("%p",a);
printf("\n");
printf("%p",b);
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C language output/17-memory.png" class="img-fluid">

                </td>
            </tr>
            <tr>
                <td>

                    <h5>11. Pointer</h5>
                    <p>
                        &nbsp;&nbsp;Pointer means it can store the memory address of variable here we initialize one
                        variable int a=45; then we define pointer type int variable int* b=&a; and gave the reference of
                        the a. The we print the value of a then we print address of a by %p and then we print again its
                        address with pointer variable.
                    </p>
                    <pre class="language-c"><code>
#include &lt;stdio.h&gt;
int main()
{
int a=45;
int* b=&a;
printf("%d",a);
printf("\n");
printf("%p",&a);
printf("\n");
printf("%p",b);
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C language output/18-pointer.png" class="img-fluid">

                </td>
            </tr>
            <tr>
                <td>

                    <h5>12. Function in c</h5>
                    <p>
                        &nbsp;&nbsp;Function means a block of code which executes when its call if we need function so
                        we need to follow 3 steps function declaration, function call, function definition.
                    </p>
                    <h5>12.1 Function without argument without return type</h5>
                    <p>
                        &nbsp;&nbsp;Here it is a function which print no argument and no return type it will run when
                        you call in main function it will run. It has no argument and no return type because void has no
                        return type.
                    </p>
                    <pre class="language-c"><code>
#include &lt;stdio.h&gt;
void Myfunc();
int main()
{
Myfunc();
printf("\n");
Myfunc();
return 0;
}
void Myfunc()
{
printf("no argument and no return type");
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C language output/19-fnoargnoret.png" class="img-fluid">

                </td>
            </tr>
            <tr>
                <td>
                    <h5>12.2 Function with argument with return type</h5>
                    <p>
                        &nbsp;&nbsp;Here it is a function with return type and with argument we gave argument int a,int
                        b then we return it a+b then in main function we store it’s value in another variable and simple
                        print it.
                    </p>
                    <pre class="language-c"><code>
#include &lt;stdio.h&gt;
int Myfunc(int a,int b);
int main()
{
int ans=Myfunc(12,12);
printf("Your add is %d",ans);
return 0;
}
int Myfunc(int a,int b)
{
return a+b;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C language output/20-fwargwret.png" class="img-fluid">

                </td>
            </tr>
            <tr>
                <td>
                    <h5>12.3 Function with argument and no return type</h5>
                    <p>
                        &nbsp;&nbsp;Here we declare void type of function o it has no return value but we gave argument
                        so then print it in the function and simple call the function in main function.
                    </p>
                    <pre class="language-c"><code>
#include &lt;stdio.h&gt;
void Myfunc(int a,int b);
int main()
{
Myfunc(45,5);
return 0;
}
void Myfunc(int a,int b)
{
int c;
c=a-b;
printf("Your ans is %d",c);
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C language output/21-fwargnoret.png" class="img-fluid">

                </td>
            </tr>
            <tr>
                <td>
                    <h5>12.4 Function without argument and with return type</h5>
                    <p>
                        &nbsp;&nbsp;Here we declare void type of function o it has no return value but we gave argument
                        so then print it in the function and simple call the function in main function.
                    </p>
                    <pre class="language-c"><code>
#include &lt;stdio.h&gt;
int Myfunc();
int main()
{
int c=Myfunc();
printf("%d",c);
return 0;
}
int Myfunc()
{
int a=5;
return a;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C language output/22-fnoargwtret.png" class="img-fluid">

                </td>
            </tr>
            <tr>
                <td>
                    <h5>13. Structure</h5>
                    <p>
                        &nbsp;&nbsp;Structures (also called structs) are a way to group several related variables into
                        one place. Each variable in the structure is known as a member of the structure.
                        <br />
                        &nbsp;&nbsp;You can create a structure using the struct keyword.
                        <br />
                        &nbsp;&nbsp;Then in main function you need to make its instances and access it’s variable.
                    </p>
                    <pre class="language-c"><code>
#include &lt;stdio.h&gt;
struct MyStruct{
int a;
char letter;
};

int main()
{
struct MyStruct ms;
ms.a=45;
ms.letter='S';
printf("A in structue is %d\n",ms.a);
printf("letter in structue is %c",ms.letter);
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C language output/23-struct.png" class="img-fluid">

                </td>
            </tr>
        </table>
    </div>
   
</body>

</html>