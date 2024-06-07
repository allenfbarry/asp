// Created by Group-2
//Javascript for displaying details of the web page creators.
"use strict";
var count=0;
function groupMember1(){
 //display the details of groupMmeber1 on to webpage on clicking the button.
 let name ='Jhansi Gurram';
 let email='jxg20860@ucmo.edu';
 let linkedIn ='https://www.linkedin.com/in/jhansi-gurram-10a514a6';
 display("jhansiLabel", name, email, linkedIn);
}

function groupMember2(){
    //display the details of groupMmeber2 on to webpage on clicking the button.
    let name ='Sri Sahith Lakkaraju';
    let email='sxl68468@ucmo.edu';
    let linkedIn ='https://www.linkedin.com/in/sri-sahith-lakkaraju-5241531ab';
    display("sahithLabel", name, email, linkedIn);
}

function groupMember3(){
    //display the details of groupMmeber3 on to webpage on clicking the button.
    let name ='Lavanya Naidu';
    let email='lxn72880@ucmo.edu';
    let linkedIn ='https://www.linkedin.com/in/lavanya-naidu-';
    display("lavanyaLabel", name, email, linkedIn);
   }

function display(id, name, email, linkedIn){ //display function to print the details of developers 
    document.getElementById(id).style.textAlign="left"
    document.getElementById(id).innerHTML ='<span style="font-weight: bold;">'+'Name: '+' </span>'+name +'<br><span style="font-weight: bold;">'+'Email: '+'</span>'+email +'<br><span style="font-weight: bold;">'+'LinkedIn: '+'</span>'+'<a href='+ linkedIn+'>'+'<img height="15" width="15" src="images/LinkedInLogo.png">'+name+'</a>';
}
function nonDisplay(id){
        document.getElementById(id).style.display="none";
    }

//event listener for page load
window.addEventListener("load",function(){
    //Event Listener for submit button using anonymous function
    document.getElementById("lavanyaDetails").addEventListener("click",groupMember3, false);
    document.getElementById("jhansiDetails").addEventListener("click", groupMember1, false);
    document.getElementById("sahithDetails").addEventListener("click", groupMember2,false);
}, false);