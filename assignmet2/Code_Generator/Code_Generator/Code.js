// This is for Hello World Syntax:

const basicSyntax = [

{
       "quote":"<pre> <code> public class HelloWorld <br/> { public static void main(String[] args) <br/> { System.out.println(“Hello,World”); <br/> } } </code><pre>","Language":"JAVA"},     
{
       "quote":"<pre> <code> print(“Hello World”) </code><pre>","Language":"Python"},
{
       "quote":"<pre> <code> document.write('Hello, World!');</code><pre>","Language":"Java Script"},
{
       "quote":"<pre> <code> echo 'Hello, World!'; </code><pre>","Language":"PHP"},
];

function getHelloWorld(){
       
       var giveQuote1 = basicSyntax[0];  
       var output1 =  document.getElementById("parent1") 
       output1.innerHTML = giveQuote1.quote; 
       var output1 =  document.getElementById("child1") 
       output1.innerHTML = giveQuote1.Language; 
       

       var giveQuote2 = basicSyntax[1];
       var output2 =  document.getElementById("parent2") 
       output2.innerHTML = giveQuote2.quote; 
       var output2 =  document.getElementById("child2") 
       output2.innerHTML = giveQuote2.Language; 

       var giveQuote3 = basicSyntax[2];
       var output3 =  document.getElementById("parent3") 
       output3.innerHTML = giveQuote3.quote; 
       var output3 =  document.getElementById("child3") 
       output3.innerHTML = giveQuote3.Language; 

       var giveQuote4 = basicSyntax[3];
       var output4 =  document.getElementById("parent4") 
       output4.innerHTML = giveQuote4.quote; 
       var output4 =  document.getElementById("child4") 
       output4.innerHTML = giveQuote4.Language;
}

// This is for, for-loop Syntax:

const forLoopSyntax = [

       {
              "quote":" <pre> <code> for (int count = 0; count < 5; count++) <br/>  { System.out.println(i);} </code><pre> ","Language":"JAVA"},
       {
              "quote":" <pre> <code> for count in range(1,5)<br/> :print(count) </code><pre> ","Language":"Python"},
       {
              "quote":" <pre> <code> for (let count = 0; count < 5; count++) <br/>  {console.log(i);} </code><pre> ","Language":"Java Script"},
       {
              "quote":" <pre> <code> for ($count = 1; $count < 5; $count++) <br/>  {echo $count;} </code><pre> ","Language":"PHP"},
       ];

       function getForLoop(){
       
              var giveQuote1 = forLoopSyntax[0];  
              var output1 =  document.getElementById("parent1") 
              output1.innerHTML = giveQuote1.quote; 
              var output2 =  document.getElementById("child1") 
              output2.innerHTML = giveQuote1.Language; 
              
       
              var giveQuote2 = forLoopSyntax[1];
              var output2 =  document.getElementById("parent2") 
              output2.innerHTML = giveQuote2.quote; 
              var output2 =  document.getElementById("child2") 
              output2.innerHTML = giveQuote2.Language; 
       
              var giveQuote3 = forLoopSyntax[2];
              var output3 =  document.getElementById("parent3") 
              output3.innerHTML = giveQuote3.quote; 
              var output3 =  document.getElementById("child3") 
              output3.innerHTML = giveQuote3.Language; 
       
              var giveQuote4 = forLoopSyntax[3];
              var output4 =  document.getElementById("parent4") 
              output4.innerHTML = giveQuote4.quote; 
              var output4 =  document.getElementById("child4") 
              output4.innerHTML = giveQuote4.Language;
       }

       // This is for while loop Syntax:

const whileLoopSyntax = [

       {
              "quote":" <pre> <code> int i = 1; <br/>  while (i < 6) <br/>  { System.out.println(“Awesome!!”); <br/>  i++;}} </code><pre> ","Language":"JAVA"},
       {
              "quote":" <pre> <code> i=1 <br/> while (i<=5)<br/> : print(“Awesome!!”) <br/>  i=i+1 </code><pre> ","Language":"Python"},
       {
              "quote":" <pre> <code> i=1 <br/> while (i < 6) <br/> { console.log(“Awesome!!”); <br/> i++;} </code><pre> ","Language":"Java Script"},
       {
              "quote":" <pre> <code> $count = 1; <br/> while ($count <= 5) <br/> { echo “Awesome!!”; <br/>  $count += 1;} </code><pre> ","Language":"PHP"},
       ];
       
       function getWhileLoop(){
       
              var giveQuote1 = whileLoopSyntax[0];  
              var output1 =  document.getElementById("parent1") 
              output1.innerHTML = giveQuote1.quote; 
              var output2 =  document.getElementById("child1") 
              output2.innerHTML = giveQuote1.Language; 
              
       
              var giveQuote2 = whileLoopSyntax[1];
              var output2 =  document.getElementById("parent2") 
              output2.innerHTML = giveQuote2.quote; 
              var output2 =  document.getElementById("child2") 
              output2.innerHTML = giveQuote2.Language; 
       
              var giveQuote3 = whileLoopSyntax[2];
              var output3 =  document.getElementById("parent3") 
              output3.innerHTML = giveQuote3.quote; 
              var output3 =  document.getElementById("child3") 
              output3.innerHTML = giveQuote3.Language; 
       
              var giveQuote4 = whileLoopSyntax[3];
              var output4 =  document.getElementById("parent4") 
              output4.innerHTML = giveQuote4.quote; 
              var output4 =  document.getElementById("child4") 
              output4.innerHTML = giveQuote4.Language;
       } 

            // This is for do-while loop Syntax:

const doWhileLoopSyntax = [

       {
              "quote":" <pre> <code> int count = 1; <br/> do <br/> { System.out.print(“I am inside do-while loop!!”); <br/> x++; } <br/> while( count < 6 ); </code><pre> ","Language":"JAVA"},
       {
              "quote":" <pre> <code> i = 1 <br/> while True<br/> : print(“I am inside while-if loop!!”) i = i + 1 <br/> if(i > 5) : break; <br/> FYI - No do-while loop in Python </code><pre> ","Language":"Python"},
       {
              "quote":" <pre> <code> let count = 0; do <br/> { console.log(“I am inside do-while loop!!”); <br/> count++;} <br/> while (count < 5) </code><pre> ","Language":"Java Script"},
       {
              "quote":" <pre> <code> $count = 1; do <br/> { echo “I am inside do-while loop!!”; <br/> $count += 1;} <br/> while ($count <= 5); </code><pre> ","Language":"PHP"},
       ];

       function getDoWhileLoop(){
       
              var giveQuote1 = doWhileLoopSyntax[0];  
              var output1 =  document.getElementById("parent1") 
              output1.innerHTML = giveQuote1.quote; 
              var output2 =  document.getElementById("child1") 
              output2.innerHTML = giveQuote1.Language; 
              
       
              var giveQuote2 = doWhileLoopSyntax[1];
              var output2 =  document.getElementById("parent2") 
              output2.innerHTML = giveQuote2.quote; 
              var output2 =  document.getElementById("child2") 
              output2.innerHTML = giveQuote2.Language; 
       
              var giveQuote3 = doWhileLoopSyntax[2];
              var output3 =  document.getElementById("parent3") 
              output3.innerHTML = giveQuote3.quote; 
              var output3 =  document.getElementById("child3") 
              output3.innerHTML = giveQuote3.Language; 
       
              var giveQuote4 = doWhileLoopSyntax[3];
              var output4 =  document.getElementById("parent4") 
              output4.innerHTML = giveQuote4.quote; 
              var output4 =  document.getElementById("child4") 
              output4.innerHTML = giveQuote4.Language;
       } 
       
  // This is to learn how to write and print arrays in every language:

  const arraySyntax = [

       {
              "quote":" <pre> <code> String[] cars = {“Volvo”, “BMW”, “Ford”, “Mazda”}; <br/> for (int i = 0; i < cars.length; i++) <br/> {System.out.println(cars[i]);} </code><pre> ","Language":"JAVA"},
       {
              "quote":" <pre> <code> import array as arr a = arr.array('i', [“Volvo”, “BMW”, “Ford”,<br/> “Mazda”]) <br/> print (“The new created array is : ”, end =“ ”) <br/> for i in range (0, 3)<br/> : print (a[i], end =“ ”) print() </code><pre> ","Language":"Python"},
       {
              "quote":" <pre> <code> let mountains = ['Everest', 'Fuji', 'Nanga Parbat']; <br/> console.log(mountains); </code><pre> ","Language":"Java Script"},
       {
              "quote":" <pre> <code> $array = array(“Volvo”, “BMW”, “Ford”, “Mazda”); <br/> foreach($array as $item) <br/> {echo $item . “(\n)”;} </code><pre> ","Language":"PHP"},
       ];

       function getArray(){
       
              var giveQuote1 = arraySyntax[0];  
              var output1 =  document.getElementById("parent1") 
              output1.innerHTML = giveQuote1.quote; 
              var output2 =  document.getElementById("child1") 
              output2.innerHTML = giveQuote1.Language; 
              
       
              var giveQuote2 = arraySyntax[1];
              var output2 =  document.getElementById("parent2") 
              output2.innerHTML = giveQuote2.quote; 
              var output2 =  document.getElementById("child2") 
              output2.innerHTML = giveQuote2.Language; 
       
              var giveQuote3 = arraySyntax[2];
              var output3 =  document.getElementById("parent3") 
              output3.innerHTML = giveQuote3.quote; 
              var output3 =  document.getElementById("child3") 
              output3.innerHTML = giveQuote3.Language; 
       
              var giveQuote4 = arraySyntax[3];
              var output4 =  document.getElementById("parent4") 
              output4.innerHTML = giveQuote4.quote; 
              var output4 =  document.getElementById("child4") 
              output4.innerHTML = giveQuote4.Language;
       } 
       