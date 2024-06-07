// Created by Group-2
"use strict";
// List of bookstores available in each location.
var ks = [
    {
        "Name": "Prospero's Books",
        "Address": "1800 W 39th St, Kansas City, MO 64111",
        "Phone": "(816) 531-9673"
    },
    {
        "Name": "Rainy Day Books",
        "Address": "2706 W 53rd St,Fairway, KS 66205",
        "Phone": "(913) 384-3126"

    }
]
var dallas = [
    {
        "Name": "Interabang Books",
        "Address": "5600 W Lovers Ln #142, Dallas, TX 75209",
        "Phone": "(214) 484-4289"
    },
    {
        "Name": "Lucky Dog Books",
        "Address": "911 W Jefferson Blvd, Dallas, TX 75208",
        "Phone": "(214) 941-2665"

    }
]
var chicago = [
    {
        "Name": "After-Words Bookstore",
        "Address": "23 E Illinois St, Chicago, IL 60611",
        "Phone": "(312) 464-1110"
    },
    {
        "Name": "Abraham Lincoln Book Shop, Inc.",
        "Address": "824 W Superior St Ste 100, Chicago, IL 60642",
        "Phone": "(312) 944-3085"

    }
]
// Function for Event listner calls getstores when city is selected.
function start(){
    document.getElementById("city").addEventListener("click",getStores,false);
}
// Function to send store details as selected.
function getStores(){
    var place = document.getElementById("city").value;
    switch(place) {
        case 'ks':
            var msg = "<tr><th>Name of the store</th><th>Address</th><th>Contact</th></tr>";
            ks.forEach(function(v,k){
                msg += "<tr><td>"+v.Name+"</td>";
                msg += "<td>"+v.Address+"</td>";
                msg += "<td>"+v.Phone+"</td></tr>";
            })

            document.getElementById("result").innerHTML = msg;
            break;
        case 'dallas':
            var msg = "<tr><th>Name of the store</th><th>Address</th><th>Contact</th></tr>";
            dallas.forEach(function(v,k){
                msg += "<tr><td>"+v.Name+"</td>";
                msg += "<td>"+v.Address+"</td>";
                msg += "<td>"+v.Phone+"</td></tr>";
            })
            document.getElementById("result").innerHTML = msg;
            break;
        case 'chicago':
            var msg = "<tr><th>Name of the store</th><th>Address</th><th>Contact</th></tr>";
            chicago.forEach(function(v,k){
                msg += "<tr><td>"+v.Name+"</td>";
                msg += "<td>"+v.Address+"</td>";
                msg += "<td>"+v.Phone+"</td></tr>";
            })
            document.getElementById("result").innerHTML = msg;
            break;
    }

}
// calls start function when page is loaded.
window.addEventListener("load",start,false);