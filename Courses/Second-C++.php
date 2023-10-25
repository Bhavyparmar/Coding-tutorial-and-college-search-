<html>

<head>

    <title>C++ Language</title>
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
                        <h1>C++ tutorial</h1>
                    </center>
                    <h5>1.Simple hello world program</h5>
                    <p>
                        here we write iostream which we have to include to access the cout method and syntax is much similar to c language
                    </p>


                    <pre class="language-Cpp"><code>
#include &lt;iostream&gt;
using namespace std;

int main() {
    cout &lt;&lt;"Hello World!";                                                                                                                                                              
    return 0;
}</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/1-hello.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>2. Comment</h5>
                    <p>
                        &nbsp;&nbsp;Comment in c++ is similar to c language // for single line comment /**/ for the multi line comment.
                    </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;

int main() {
cout &lt;&lt; "Student bread";//This is a single line comment
/*cout &lt;&lt; "Student bread"; This is a double line comment
cout&lt;&lt; "Student bread";*/

return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/2-comment.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>3. Data types</h5>
                    <p>
                        &nbsp;&nbsp;Here we have same data type as a c language which are int float double string and many more available.
                    </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;

int main() {
int a=15;
float b=25.25;
double c=25;
string d="Student bread";
cout&lt;&lt; a&lt;&lt;"\n";
cout&lt;&lt; b&lt;&lt;"\n";
cout&lt;&lt; c&lt;&lt;"\n";
cout&lt;&lt; d&lt;&lt;"\n";
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/3-datatypes.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>4. User input</h5>
                    <p>
                        &nbsp;&nbsp;In c++ user input can taken by writing cout function and variable name.
                    </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;

int main() {
int a;
cout&lt;&lt;"Enter a: ";
cin>>a;
cout&lt;&lt;"A is "&lt;&lt;a;
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/4-datatypes.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>5. Operator</h5>
                    <br/>
                    <h5>5.1 Arithmetic operator</h5>
                    <p>
                        &nbsp;&nbsp;+ operator will add, - operator will subtract , * operator will multiply, / will divide, % operator will modulo means gives the remainder 
                    </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;

int main()
{
int a=20,b=10;
cout&lt;&lt;"Your + operator is "&lt;&lt;a+b&lt;&lt;"\n";
cout&lt;&lt;"Your - operator is "&lt;&lt;a-b&lt;&lt;"\n";
cout&lt;&lt;"Your * operator is "&lt;&lt;a*b&lt;&lt;"\n";
cout&lt;&lt;"Your / operator is "&lt;&lt;a/b&lt;&lt;"\n";
cout&lt;&lt;"Your % operator is "&lt;&lt;a%b&lt;&lt;"\n";
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/5-operator.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>5.2 Comparison operator</h5>
                    <p>
                        &nbsp;&nbsp;This operator can compare a two number and give the output generally this operator used with if else statement. It gives output in bool value 1 or 0.
                    </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;

int main()
{
int a=20,b=10;
cout&lt;&lt;"Your == operator is "&lt;&lt;(a==b)&lt;&lt;"\n";
cout&lt;&lt;"Your != operator is "&lt;&lt;(a!=b)&lt;&lt;"\n";
cout&lt;&lt;"Your &lt; operator is "&lt;&lt;(a&lt;b)&lt;&lt;"\n";
cout&lt;&lt;"Your &gt; operator is "&lt;&lt;(a&gt;b)&lt;&lt;"\n";
cout&lt;&lt;"Your &lt;= operator is "&lt;&lt;(a&lt;=b)&lt;&lt;"\n";
cout&lt;&lt;"Your &gt;= operator is "&lt;&lt;(a&gt;=b)&lt;&lt;"\n";
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/6-comparisionoperator.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>5.3 Logical operator</h5>
                    <p>
                        &nbsp;&nbsp;First is and operator if both condition is true then it will true second is or operator only one condition is need to true then it becomes true.
                    </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;

int main()
{
int a=2,b=10;
cout&lt;&lt;"Your && operator is "&lt;&lt;(a&lt;5 && b&lt;10)&lt;&lt;"\n";
cout&lt;&lt;"Your || operator is "&lt;&lt;(a&lt;5 || b&lt;4)&lt;&lt;"\n";
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/7-logicaloper.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>6 String</h5>
                    <p>
                        &nbsp;&nbsp;String means it is one type of data type which can store a word or a sentences.
                        <br/>
                        &nbsp;&nbsp;In this program we simple initialize a variable string and print it
                    </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;

int main()
{
string a="Student bread";
cout&lt;&lt;a;
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/8-string.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>6 String</h5>
                    <p>
                        &nbsp;&nbsp;String means it is one type of data type which can store a word or a sentences.
                        <br/>
                        &nbsp;&nbsp;In this program we simple initialize a variable string and print it
                    </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;

int main()
{
string a="Student bread";
cout&lt;&lt;a;
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/8-string.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>6.1 String concat</h5>
                    <p>
                        &nbsp;&nbsp;String concat means to join a two different variable string we see it with a program. In this we concat a and b.
                    </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;

int main()
{
string a="Student";
string b=" Bread";
string c= a+b;
cout&lt;&lt;c;
return 0;
}
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/9-stringconcat.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>6.2 Size function</h5>
                    <p>
                        &nbsp;&nbsp;To find the size of the string we have the size method.
                    </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;

int main()
{
string a="Student";
cout&lt;&lt;"Size is "&lt;&lt;a.size();
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/10-stringsize.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>6.3 Access string using it’s index</h5>
                    <p>
                        &nbsp;&nbsp;You can access the string one character as written in [0] means first character you can access.
                    </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;

int main()
{
string a="Student bread";
cout&lt;&lt;a[0];
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/11-stringindex.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>7. Math Function</h5>
                    <p>
                        &nbsp;&nbsp;This type of function is include in the cmath header file .
                    </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
#include  &lt;cmath&gt;
using namespace std;

int main()
{
cout&lt;&lt;min(50,51)&lt;&lt;"\n";
cout&lt;&lt;max(50,51)&lt;&lt;"\n";
cout&lt;&lt;sqrt(49)&lt;&lt;"\n";
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/12-mathfunction.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>8. If else statement </h5>
                    <p>
                        &nbsp;&nbsp;If else statement is used when program takes a decision from multiple choice if choice is selected based on the condition.
                    </p>
                    <br/>
                    <h5>8.1 if else </h5>
                    <p>
                        &nbsp;&nbsp;In here we simple check the number a is greater or b is greater a is greater so if condition will executed otherwise else is executed. 
                        </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
#include  &lt;cmath&gt;
using namespace std;

int main()
{
int a=150,b=100;
if(a>b)
{
cout&lt;&lt;"A is greatest";
}
else
{
cout&lt;&lt;"B is greatest";
}

return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/13-ifelse.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>8.2if else if else statement </h5>
                    <p>
                        &nbsp;&nbsp;This statement is used when we have more then 2 condition. Here we check the number is negative, positive or zero.
                    </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
#include  &lt;cmath&gt;
using namespace std;

int main()
{
int a;
cout&lt;&lt;"Enter your number: ";
cin&gt;&gt;a;
if(a&lt;0)
{
cout&lt;&lt;"Number is negative";
}
else if(a&gt;0)
{
cout&lt;&lt;"Number is positive";
}
else
{
cout&lt;&lt;"Number is zero";
} 
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/14-ifelseifelse.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>8.3 short if else statement </h5>
                    <p>
                        &nbsp;&nbsp;The if else statement are written on one line.  Here we check if you are greater then 18 then you can vote otherwise not.
                    </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
#include  &lt;cmath&gt;
using namespace std;

int main()
{
int a;
cout&lt;&lt; "Enter your age: ";
cin >> a;
string result = (a > 18) ? "You can vote." : "You can not vote.";
cout&lt;&lt;result;
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/15-shortifelse.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>9. switch case </h5>
                    <p>
                        &nbsp;&nbsp;This type of statement is used when we have condition of particular integer or character or a string.
                    </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;

int main()
{
int a;
cout &lt;&lt;"Enter your age: ";
cin &gt;&gt; a;
switch (a)
{
case 1:
cout&lt;&lt;"One";
break;
case 2:
cout&lt;&lt;"Two";
break;
case 3:
cout&lt;&lt;"Three";
break;
case 4:
cout&lt;&lt;"Four";
break;

default:
cout&lt;&lt;"please enter from 1 to 4";
break;
}
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/16-switch.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>10.Loops</h5>
                    <p>
                        &nbsp;&nbsp;Loop is used when we need to print or do a task repeatedly then loop is used there are three types of loops is available do- while , while loop, for loop .
                        <br/>
                        &nbsp;&nbsp;  And for loop we need to initialize it check the condition and increment/decrement it.
                    </p>
                    <br/>
                    <h5>10.1 while loop</h5>
                    <p>
                        &nbsp;&nbsp; Here we initialize i =1 and condition i&lt;=5 when condition hit loop is terminated then we increment it .
                        </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;

int main()
{
int i=1;
while (i&lt;=5)
{
cout&lt;&lt;i&lt;&lt;"\n";
i++;
}

return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/17-while.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>10.2 do while loop</h5>
                    <p>
                        &nbsp;&nbsp; Here we initialize i =1 and condition i&lt;=5 when condition hit loop is terminated then we increment it .
                        </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;

int main()
{
int i=1;
do
{
cout&lt;&lt;i&lt;&lt;"\n";
i++;
} while (i&lt;=5);

return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/18-dowhile.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>10.3 For loop</h5>
                    <p>
                        &nbsp;&nbsp;Here we initialize i =1 and condition i&lt;=5 when condition hit loop is terminated then we increment it .
                        </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;

int main()
{
int i;
for (i = 1; i &lt;=5; i++)
{
cout&lt;&lt;i&lt;&lt;"\n";
}
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/19-for.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>11 Break/ continue</h5>
                    <br/>
                    <h5>11.1 Break will terminated the whole loop when condition is hit</h5>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;

using namespace std;

int main()
{
int i;
for (i = 1; i &lt;=5; i++)
{
if(i==4)
{
break;
}
cout&lt;&lt;i&lt;&lt;"\n";
}
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/20-break.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>11.2 Continue</h5>
                    <p>
                        &nbsp;&nbsp;It will just don’t print the condition we define it will not terminate the whole loop.
                        </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;

int main()
{
int i;
for (i = 1; i &lt;=5; i++)
{
if(i==4)
{
continue;
}
cout&lt;&lt;i&lt;&lt;"\n";
}
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/21-continue.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>12 Array</h5>
                    <p>
                        &nbsp;&nbsp;Array means one type of variable which can store multiple value of single data types.
                        </p>
                    <br/>
                    <h5>12.1 Array initialize and accessing</h5>
                    <p>
                        &nbsp;&nbsp;Here we declare array of size 3   12,13,14 we initialize a variable then simply we access it by writing it’s index in cout.
                        </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;

int main()
{
int i[3]={12,13,14};
cout&lt;&lt;i[0]&lt;&lt;"\n";
cout&lt;&lt;i[1]&lt;&lt;"\n";
cout&lt;&lt;i[2]&lt;&lt;"\n";
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/22-array.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>12.2 Array and loops</h5>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;

int main()
{
int a[3]={12,13,14};
for(int i=0;i&lt;3;i++)
{
cout&lt;&lt;a[i]&lt;&lt;"\n";
}
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/23-loopsarray.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>12.3 Two dimension Array</h5>
                    <p>
                        &nbsp;&nbsp;2 d array it has 01,02,03 .. that much of index in the 2 d array here we initialize x and then simple print it.
                        </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;

int main()
{
int x[3][2] = {{0,1}, {2,3}, {4,5}};
for (int i = 0; i &lt; 3; i++)
{
for (int j = 0; j &lt; 2; j++)
{
cout &lt;&lt; x[i][j]&lt;&lt;endl;
}
}

return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/23-loopsarray.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>13. Structure</h5>
                    <p>
                        &nbsp;&nbsp;Structures (also called structs) are a way to group several related variables into one place. Each variable in the structure is known as a member of the structure.
                        <br/>
                        &nbsp;&nbsp;Unlike an array, a structure can contain many different data types (int, string, bool, etc.).    
                    </p>
                        
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;
struct Employee
{
int a;
string name;
int salary;
};

int main()
{

Employee e;
e.a=15;
e.name="Loy";
e.salary=50000;
cout &lt;&lt;e.a &lt;&lt;endl;
cout &lt;&lt;e.name &lt;&lt;endl;
cout &lt;&lt;e.salary &lt;&lt;endl;
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/24-array2d.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>14. References and memory address</h5>
                    <p>
                        &nbsp;&nbsp;A reference variable is a "reference" to an existing variable, and it is created with the & operator:
                       </p>
                       <h5>14.1 References</h5>
                        <p>
                            &nbsp;&nbsp; Here we gave the references of the a to b variable when we print b it prints the value of a
                        </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;

int main()
{
int a=15;
int &b=a;
cout&lt;&lt;b;
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/25-structure.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>14.2 Memory address</h5>
                    <p>
                        &nbsp;&nbsp;Here we have print the memory address of a by writing &b.
                       </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;

int main()
{
int a=15;
int &b=a;
cout&lt;&lt;&b;
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/26-refrence.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>15. pointer</h5>
                    <p>
                        &nbsp;&nbsp;A pointer is a variable that stores the memory address of an object. Pointers are used extensively in both C and C++ for three main purposes: to allocate new objects on the heap, to pass functions to other functions. 
                    <br/>
                    &nbsp;&nbsp;Here we make a pointer variable b and print a reference of a and variable b
                    </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;

int main()
{
int a=15;
int *b=&a;
cout&lt;&lt;a&lt;&lt;endl;
cout&lt;&lt;&a&lt;&lt;endl;
cout&lt;&lt;b&lt;&lt;endl;
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/27-refrence.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>16. Function</h5>
                    <p>
                        &nbsp;&nbsp;Function means a block of code which executes when its call if we need function so we need to follow 3 steps function declaration, function call, function definition. 
                    </p>
                    <h5>16.1 Function without argument without return type</h5>
                    <p>
                        &nbsp;&nbsp;myfunc is a function with no argument and no return type. Here we declare function call it and then define it.
                        </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;
void myFunc();
int main()
{
myFunc();
return 0;
}
void myFunc()
{
cout&lt;&lt;"I am function";
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/28-pointer.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>16.2 Function with argument without return type </h5>
                    <p>
                        &nbsp;&nbsp;here we make a function which takes 2 argument and add it.
                        </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;
void myFunc(int a,int b);
int main()
{
myFunc(12,12);
return 0;
}
void myFunc(int a,int b)
{
cout&lt;&lt;"Answer is "&lt;&lt;(a+b);
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/29-func1.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>16.3 Function with return type with argument </h5>
                    <p>
                        &nbsp;&nbsp;This is a function where we pass two argument and add it because we return it with a+b.
                        </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;
int myFunc(int a,int b);
int main()
{
cout&lt;&lt;"Answer is "&lt;&lt;myFunc(24,24);
return 0;
}
int myFunc(int a,int b)
{
return a+b;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/30-func2.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>16.4 Function with return type without argument </h5>
                    <p>
                        &nbsp;&nbsp;Here we write a function which print the value of a.
                        </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;
int myFunc();
int main()
{
cout&lt;&lt;"A is "&lt;&lt;myFunc();
return 0;
}
int myFunc()
{
int a=5;
return a;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/31-func3.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>17 Oops concept </h5>
                    <br/>
                    <h5>OOP stands for Object-Oriented Programming.</h5>
                    <p>
                        &nbsp;&nbsp;Procedural programming is about writing procedures or functions that perform operations on the data, while object-oriented programming is about creating objects that contain both data and functions
                        <br/>
                        &nbsp;&nbsp;Object-oriented programming has several advantages over procedural programming:
                        <br/>
                        &nbsp;&nbsp;OOP is faster and easier to execute
                        <br/>
                        &nbsp;&nbsp;OOP provides a clear structure for the programs
                        <br/>
                        &nbsp;&nbsp;OOP helps to keep the C++ code DRY "Don't Repeat Yourself", and makes the code easier to maintain, modify and debug
                        <br/>
                        &nbsp;&nbsp;OOP makes it possible to create full reusable applications with less code and shorter development time
                        </p>
                        <br/>
                        <br/>
                        <h5>17.1 Classes and object</h5>
                        <p>
                            &nbsp;&nbsp;Here we define the myclass in that we have 2 variable which we can access by making it’s object in main method and print it by mc.a and mc.name. Here mc is a object or instances of a class.
                            </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;
class MyClass{
public:
int a=15;
string name="Student bread";
};
int main()
{
MyClass mc;
cout&lt;&lt;mc.a&lt;&lt;endl;
cout&lt;&lt;mc.name&lt;&lt;endl;
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/33-classobject.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>17.2 Access specifier</h5>
                    <p>
                        &nbsp;&nbsp;There are 3 access specifier are available in c++ public, private and protected
                        <br/>
                        &nbsp;&nbsp;Public: you can access data to outside of program also
                        <br/>
                        &nbsp;&nbsp;Private: It can not accessed from outside of the class 
                        <br/>
                        &nbsp;&nbsp;Protected: it cannot accessed by outside of class but it can used by inherited the above class
                        <br/>
                        &nbsp;&nbsp;When we access private member in main class it gives a error
                        <br/>
                        </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;
class MyClass{
public:
int a=15;
string name="Student bread";
private:
int b=25;

};
int main()
{
MyClass mc;
cout&lt;&lt;mc.a&lt;&lt;endl;
cout&lt;&lt;mc.b&lt;&lt;endl;
cout&lt;&lt;mc.name&lt;&lt;endl;
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/34-access-1.png" class="img-fluid">
                    <p>
                        &nbsp;&nbsp;Now you can access all member by having a getdata method in public

                        </p>
                        <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;
class MyClass{
public:
int a=15;
string name="Student bread";
void getdata()
{
cout&lt;&lt;"Your a is "&lt;&lt;a&lt;&lt;endl;
cout&lt;&lt;"Your b is "&lt;&lt;b;
}
private:
int b=25;
protected:
int c=50;

};
int main()
{
MyClass mc;
cout&lt;&lt;mc.a&lt;&lt;endl;
cout&lt;&lt;mc.name&lt;&lt;endl;
mc.getdata();
return 0;
}
</code></pre>
                 <h5>Output</h5>
                <img src="./C++ language output/34-access-2.png" class="img-fluid">
                </td>
            </tr>
            <tr>
                <td>
                    <h5>17.3 Constructor</h5>
                    <p>
                        &nbsp;&nbsp;Constructor is executed when instances is created the class is define but it memory is allocated when the instances is make. Two types of constructor is parameterized and simple constructor. You can define a constructor by write a same name as class name in class in public 
                        </p>
                        <h5>17.3.1 Simple constructor</h5>
                        <p>
                           &nbsp;&nbsp;It is simple constructor it doesn’t have any argument.
                            </p>
                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;
class MyClass{
public:
int a=15;
MyClass()
{
cout&lt;&lt;"I am a constructor";
}
};
int main()
{
MyClass mc;
return 0;
}
</code></pre>
                    <h5>Output</h5>
                    <img src="./C++ language output/35-constructor.png" class="img-fluid">
                    </td>
                    </tr>
                    <tr>
                        <td>
                                <h5>17.3.2 Parameterized  constructor</h5>
                                <p>
                                   &nbsp;&nbsp;This constructor have a argument in it. Simple gave a argument and pass at when object is created.
                                    </p>
                            <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;
class MyClass{
public:
int a=15;
MyClass(int a,int b)
{
cout&lt;&lt;"I am a parameterised constructor";
}
};
int main()
{
MyClass mc(2,2);
return 0;
}
</code></pre>
                            <h5>Output</h5>
                            <img src="./C++ language output/36-paraconst.png" class="img-fluid">
                            </td>
                            </tr>
                            <tr>
                                <td>
                                        <h5>17.4 Encapsulation</h5>
                                        <p>
                                           &nbsp;&nbsp;The meaning of Encapsulation, is to make sure that "sensitive" data is hidden from users. To achieve this, you must declare class variables/attributes as private (cannot be accessed from outside the class). If you want others to read or modify the value of a private member, you can provide public get and set methods.
                                            </p>
                                    <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;
class MyClass{
private:
int a;
public:
void seta(int x)
{
a=x;
}
void display()
{
cout&lt;&lt;"A is "&lt;&lt;a;
}
};
int main()
{
MyClass mc;
mc.seta(15);
mc.display();
return 0;
}
</code></pre>
                                    <h5>Output</h5>
                                    <img src="./C++ language output/37-encap.png" class="img-fluid">
                                    </td>
                                    </tr>
                                    <tr>
                                        <td>
                                                <h5>18. Inheritances</h5>
                                                <p>
                                                   &nbsp;&nbsp;The one class member and method can used by another class. There are 5 types of inheritance is supported by the c++ Single inheritances, Multiple inheritances ,Multilevel inheritances, Hierarchical inheritances and Hybrid inheritances.
                                                    </p>
                                                    <h5>18.1 Single inheritances</h5>
                                                    <p>
                                                        &nbsp;&nbsp;It is one level inheritances one class derived from another that simple. You can write : public previous class name and access it member by making object of class 2.
                                                         </p>

                                            <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;
class MyClass{
public:
int a=15;
string name="student bread";
};
class MyClass2 : public MyClass{

};
int main()
{
MyClass2 mc;
cout&lt;&lt;"Your a is "&lt;&lt;mc.a&lt;&lt;endl;
cout&lt;&lt;"Your name is "&lt;&lt;mc.name&lt;&lt;endl;
return 0;
}
</code></pre>
                                        <h5>Output</h5>
                                            <img src="./C++ language output/38-inher.png" class="img-fluid">
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                        <h5>18.2 Multiple inheritances</h5>
                                                        <p>
                                                           &nbsp;&nbsp;In this type of inheritances 2 class are inherited by it’s child class.
                                                            </p>
                                                          <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;
class MyClass{
public:
int a=15;
};
class MyClass2 {
public:
string name="student bread";
};
class MyClass3 : public MyClass , public MyClass2{
};
int main()
{
MyClass3 mc;
cout&lt;&lt;"Your a is "&lt;&lt;mc.a&lt;&lt;endl;
cout&lt;&lt;"Your name is "&lt;&lt;mc.name&lt;&lt;endl;
return 0;
}
</code></pre>
                                                <h5>Output</h5>
                                                    <img src="./C++ language output/39-inhermultipl.png" class="img-fluid">
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                                <h5>18.3 Multilevel inheritances</h5>
                                                                <p>
                                                                   &nbsp;&nbsp;In this type of inheritances every class are inherited by it’s child class.
                                                                    </p>
                                                                  <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;
class MyClass{
public:
int a=15;
};
class MyClass2: public MyClass{
public:
string name="student bread";
};
class MyClass3 :  public MyClass2{
};
int main()
{
MyClass3 mc;
cout&lt;&lt;"Your a is "&lt;&lt;mc.a&lt;&lt;endl;
cout&lt;&lt;"Your name is "&lt;&lt;mc.name&lt;&lt;endl;
return 0;
}
</code></pre>
                                                        <h5>Output</h5>
                                                            <img src="./C++ language output/40-inhermultilevel.png" class="img-fluid">
                                                            </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                        <h5>18.4 Hierarchical inheritances </h5>
                                                                        <p>
                                                                           &nbsp;&nbsp;In this type of inheritances the one class is derived all their child class.
                                                                            </p>
                                                                          <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;
class MyClass{
public:
int a=15;
string email="student bread@gmail.com";
};
class MyClass2: public MyClass{
public:
string name="student bread";
};
class MyClass3 :  public MyClass{
};
int main()
{
MyClass3 mc;
cout&lt;&lt;"Your a is "&lt;&lt;mc.a&lt;&lt;endl;
cout&lt;&lt;"Your a is "&lt;&lt;mc.email&lt;&lt;endl;
return 0;
}

</code></pre>
                                                                <h5>Output</h5>
                                                                    <img src="./C++ language output/41-inherhierach.png" class="img-fluid">
                                                                    </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                                <h5>18.5 Hybrid inheritances </h5>
                                                                                <p>
                                                                                   &nbsp;&nbsp;It is a combination of more the 2 inheritances it is called hybrid inheritances.
                                                                                    </p>
                                                                                  <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;
class vehicle
{
public:
vehicle()
{
cout &lt;&lt; "This is a vehicle\n";
}
};
class Car : public vehicle
{
public:
Car()
{
cout &lt;&lt;"This is a car\n";
}
};
class Racing
{
public:
Racing()
{
cout &lt;&lt; "This is for Racing\n";
}
};
class Ferrari : public Car, public Racing
{
public:
Ferrari()
{
cout &lt;&lt; "Ferrari is a Racing Car\n";
}
};
int main()
{
Ferrari f;
return 0;
}
</code></pre>
                                                                        <h5>Output</h5>
                                                                            <img src="./C++ language output/42-inherhybrid.png" class="img-fluid">
                                                                            </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                        <h5>19 Polymorphism  </h5>
                                                                                        <p>
                                                                                           &nbsp;&nbsp;It means define a same function in different class and object of class first get their own function.
                                                                                            </p>
                                                                                          <pre class="language-c"><code>
#include &lt;iostream&gt;
using namespace std;
class A{
public:
void getdata()
{
cout&lt;&lt;"I am getdata from A"&lt;&lt;endl;
}
};
class B:public A{
public:
void getdata()
{
cout&lt;&lt;"I am getdata from B"&lt;&lt;endl;
}
};
class C:public B{
public:
void getdata()
{
cout&lt;&lt;"I am getdata from C"&lt;&lt;endl;
}
};
int main()
{
A obj;
B obj1;
C obj2;
obj.getdata();
obj1.getdata();
obj2.getdata();
return 0;
}
</code></pre>
                                                                                <h5>Output</h5>
                                                                                    <img src="./C++ language output/43-polymorphism.png" class="img-fluid">
                                                                                    </td>
                                                                                    </tr> 
                                                                                    <tr>
                                                                                        <td>
                                                                                                <h5>20 File handling </h5>
                                                                                                <p>
                                                                                                   &nbsp;&nbsp;File handling means to read and write a txrt file or other file using the C++ language
                                                                                                   <br/>
                                                                                                   &nbsp;&nbsp;The fstream library allows us to work with files.
                                                                                                   <br/>
                                                                                                   &nbsp;&nbsp;To use the fstream library, include both the standard <iostream> AND the <fstream> header file:
                                                                                                    </p>
                                                                                                    <h5>20.1 Writing on the file </h5>
                                                                                                  <pre class="language-c"><code>
#include &lt;iostream&gt;
#include &lt;fstream&gt;
using namespace std;

int main() {
ofstream MyFile("Student_Bread.txt");
MyFile &lt;&lt; "Our websites provide a college search engine as well as Programming language tutorials";
if(MyFile)
{
cout&lt;&lt;"Your text is written";
}
else
{
cout&lt;&lt;"Your text is written";
}

MyFile.close();
}
</code></pre>
                                        <h5>Output</h5>
                                            <img src="./C++ language output/44-files.png" class="img-fluid">
                                            <br/>
                                            <img src="./C++ language output/45-files.png" class="img-fluid">
                                            <h5>20.2 Reading from the file</h5>
                                            <pre class="language-c"><code>
#include &lt;iostream&gt;
#include &lt;fstream&gt;
using namespace std;

int main()
{
string myText;

ifstream MyReadFile("Student_Bread.txt");

while (getline(MyReadFile, myText))
{
cout &lt;&lt; myText&lt;&lt;endl;
}
MyReadFile.close();
}
</code></pre>
                                                        <h5>Output</h5>
                                                        <img src="./C++ language output/46-files.png" class="img-fluid">
                                                        <br/>
                                                        <img src="./C++ language output/47-files.png" class="img-fluid">
                                            </td>
                                             </tr>                                   
         </table>
    </div>

</body>

</html>