var cards = document.querySelectorAll(".card");
var authors = ["Happy B junior","CT Mahlase","Koos Mogafe","Malan Van der Merve","JJ Markalen"];
var Result;
function LoadData(){
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            // any action to be performed when the request is made
            Result = JSON.parse(this.responseText);
            
            // soring the articles from latest to newest according to the date
            Result.data.sort(function(a,b){
                return new Date(b.date) - new Date(a.date);
            })

            // create the elements and add them to each card
            for(var i=0; i < cards.length; i++){

                // getting the url;
                var url = Result.data[i].url;
                // making the cards to go to the actual article site when clicked
                cards[i].addEventListener("click",function(){
                    window.open(url, '_blank');
                })

                cards[i].innerHTML = '';
                var image = document.createElement("img");
                image.src = Result.data[i].image_url;
                image.style.width = '100%';
                image.style.margin = 0;
                cards[i].appendChild(image);

                // div container
                var container = document.createElement('div');
                container.className = "container";

                // title
                var title = document.createElement('p');
                title.className = "title";
                title.innerHTML = Result.data[i].title;

                // description
                var description = document.createElement('p');
                description.className = "description";
                description.innerHTML = Result.data[i].description;

                // tags are categories
                var tag = document.createElement('p');
                tag.className = "tags";
                var tags = "";
                if(Result.data[i].categories){
                    for(var j =0; j < Result.data[i].categories.length; j++){
                        tags += "#"+ Result.data[i].categories[j] + ", ";
                    }
                }
                tag.innerHTML = tags;

                // author
                var author = document.createElement('p');
                author.className = "author";
                author.innerHTML = authors[i];

                // categories
                var category = document.createElement('p');
                category.className = "category";
                var cats = "";
                if(Result.data[i].categories){
                    cats = Result.data[i].categories[0];
                    for(var j =1; j < Result.data[i].categories.length; j++){
                        cats += ", "+Result.data[i].categories[j] ;
                    }
                }
                category.innerHTML = cats;

                // date time
                var pDate = document.createElement('p');
                pDate.className = "date";
                pDate.innerHTML = Result.data[i].published_at;

                // appending children to the appropriate elements
                container.appendChild(title);
                container.appendChild(description);
                container.appendChild(tag);
                container.appendChild(author);
                container.appendChild(category);
                container.appendChild(pDate);

                cards[i].appendChild(container);

            }
            
        }
            
    }
    // I used async mode because I want the data from the api to load at the same time with all the other resources of the page
    // so that the page loads faster and there is little waiting for the user
    xhttp.open("GET","https://api.thenewsapi.com/v1/news/all?api_token=6PrT5g1tOc5vhk594pZxFwJkHMHXOZhviMc3MK7z&language=en&limit=5",true);
    xhttp.send();
    
    // clear the cards
    for(var i=0; i < cards.length; i ++){
        cards[i].innerHTML = '';
        cards[i].innerHTML = '<div class="loadingio-spinner-spin-cob4u0vogd6"><div class="ldio-8hj4s8zqsx"><div><div>'+
                '</div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div>'+
                '</div><div><div></div></div><div><div></div></div></div></div>';
    }
}

// implementing the search bar functionality
document.getElementById("search").addEventListener('click',function(){
    var input = document.getElementById("search-bar").value.toUpperCase();
    
    // if result has data
    if(Result){
        for(var i=0; i < cards.length; i++){
            cards[i].style.display = 'none';
        }
        for(var i=0; i < cards.length; i++){
            if(Result.data[i].title.toUpperCase().indexOf(input) > -1){
                cards[i].style.display = 'block';
            }
        }
    }
})
document.getElementById('ftech').addEventListener('click',fTech);

// displaying all articles
document.getElementById('fall').addEventListener('click',function(){
    for(var i=0; i < cards.length; i++){
        cards[i].style.display = 'block';
    }
});
// filtering the tech
var bTech = false;
var bBusiness = false;
var be = false;
var bpolitics = false;
var bgeneral = false;

function fTech(){
    if(bTech == false){
        bTech = true;
        document.getElementById('ftech').style.backgroundColor = "grey";
        if(bBusiness == false && be == false && bpolitics == false && bgeneral == false){
            for(var i=0; i < cards.length; i++){
                cards[i].style.display = 'none';
            }
        }
        for(var i=0; i < cards.length; i++){
            if(Result.data[i].categories.indexOf('tech') > -1){
                cards[i].style.display = 'block';
            }
        }
    }else{
        bTech = false;
        document.getElementById('ftech').style.backgroundColor = "white";
        if(bBusiness == false && be == false && bpolitics == false && bgeneral == false){
            for(var i=0; i < cards.length; i++){
                cards[i].style.display = 'block';
            }
        }
    }   
}

document.getElementById('fbusiness').addEventListener('click',function(){
    if(bBusiness == false){
        bBusiness = true;
        document.getElementById('fbusiness').style.backgroundColor = "grey";
        if(bTech == false && be == false && bpolitics == false && bgeneral == false){
            for(var i=0; i < cards.length; i++){
                cards[i].style.display = 'none';
            }
        }
        for(var i=0; i < cards.length; i++){
            if(Result.data[i].categories.indexOf('business') > -1){
                cards[i].style.display = 'block';
            }
        }
    }else{
        bBusiness = false;
        document.getElementById('fbusiness').style.backgroundColor = "white";
        if(bTech == false && be == false && bpolitics == false && bgeneral == false){
            for(var i=0; i < cards.length; i++){
                cards[i].style.display = 'block';
            }
        }
    } 
})

document.getElementById('fentertainment').addEventListener('click',function(){
    if(be == false){
        be = true;
        document.getElementById('fentertainment').style.backgroundColor = "grey";
        if(bTech == false && bBusiness == false && bpolitics == false && bgeneral == false){
            for(var i=0; i < cards.length; i++){
                cards[i].style.display = 'none';
            }
        }
        for(var i=0; i < cards.length; i++){
            if(Result.data[i].categories.indexOf('entertainment') > -1){
                cards[i].style.display = 'block';
            }
        }
    }else{
        be = false;
        document.getElementById('fentertainment').style.backgroundColor = "white";
        if(bTech == false && bBusiness == false && bpolitics == false && bgeneral == false){
            for(var i=0; i < cards.length; i++){
                cards[i].style.display = 'block';
            }
        }
    } 
})

document.getElementById('fpolitics').addEventListener('click',function(){
    if(bpolitics == false){
        bpolitics = true;
        document.getElementById('fpolitics').style.backgroundColor = "grey";
        if(bTech == false && bBusiness == false && be == false && bgeneral == false){
            for(var i=0; i < cards.length; i++){
                cards[i].style.display = 'none';
            }
        }
        for(var i=0; i < cards.length; i++){
            if(Result.data[i].categories.indexOf('politics') > -1){
                cards[i].style.display = 'block';
            }
        }
    }else{
        bpolitics = false;
        document.getElementById('fpolitics').style.backgroundColor = "white";
        if(bTech == false && bBusiness == false && be == false && bgeneral == false){
            for(var i=0; i < cards.length; i++){
                cards[i].style.display = 'block';
            }
        }
    } 
})

document.getElementById('fgeneral').addEventListener('click',function(){
    if(bgeneral == false){
        bgeneral = true;
        document.getElementById('fgeneral').style.backgroundColor = "grey";
        if(bTech == false && bBusiness == false && be == false && bpolitics == false){
            for(var i=0; i < cards.length; i++){
                cards[i].style.display = 'none';
            }
        }
        for(var i=0; i < cards.length; i++){
            if(Result.data[i].categories.indexOf('general') > -1){
                cards[i].style.display = 'block';
            }
        }
    }else{
        bgeneral = false;
        document.getElementById('fgeneral').style.backgroundColor = "white";
        if(bTech == false && bBusiness == false && be == false && bpolitics == false){
            for(var i=0; i < cards.length; i++){
                cards[i].style.display = 'block';
            }
        }
    } 
})



var b1=false, b2 = false, b3 = false, b4 = false, b5 = false; 

document.getElementById('f1').addEventListener('click',function(){
    if(b1 == false){
        b1 = true;
        document.getElementById('f1').style.backgroundColor = "grey";
        if(b2 == false && b3 == false && b4 == false && b5 == false){
            for(var i=0; i < cards.length; i++){
                cards[i].style.display = 'none';
            }
        }
        for(var i=0; i < cards.length; i++){
            if(authors[i] == 'Happy B junior'){
                cards[i].style.display = 'block';
            }
        }
    }else{
        b1 = false;
        document.getElementById('f1').style.backgroundColor = "white";
        if(b2 == false && b3 == false && b4 == false && b5 == false){
            for(var i=0; i < cards.length; i++){
                cards[i].style.display = 'block';
            }
        }
    } 
})
document.getElementById('f2').addEventListener('click',function(){
    if(b2 == false){
        b2 = true;
        document.getElementById('f2').style.backgroundColor = "grey";
        if(b1 == false && b3 == false && b4 == false && b5 == false){
            for(var i=0; i < cards.length; i++){
                cards[i].style.display = 'none';
            }
        }
        for(var i=0; i < cards.length; i++){
            if(authors[i] == 'CT Mahlase'){
                cards[i].style.display = 'block';
            }
        }
    }else{
        b2 = false;
        document.getElementById('f2').style.backgroundColor = "white";
        if(b1 == false && b3 == false && b4 == false && b5 == false){
            for(var i=0; i < cards.length; i++){
                cards[i].style.display = 'block';
            }
        }
    } 
})
document.getElementById('f3').addEventListener('click',function(){
    if(b3 == false){
        b3 = true;
        document.getElementById('f3').style.backgroundColor = "grey";
        if(b1 == false && b2 == false && b4 == false && b5 == false){
            for(var i=0; i < cards.length; i++){
                cards[i].style.display = 'none';
            }
        }
        for(var i=0; i < cards.length; i++){
            if(authors[i] == 'Koos Mogafe'){
                cards[i].style.display = 'block';
            }
        }
    }else{
        b3 = false;
        document.getElementById('f3').style.backgroundColor = "white";
        if(b1 == false && b2 == false && b4 == false && b5 == false){
            for(var i=0; i < cards.length; i++){
                cards[i].style.display = 'block';
            }
        }
    } 
})
document.getElementById('f4').addEventListener('click',function(){
    if(b4 == false){
        b4 = true;
        document.getElementById('f4').style.backgroundColor = "grey";
        if(b1 == false && b2 == false && b3 == false && b5 == false){
            for(var i=0; i < cards.length; i++){
                cards[i].style.display = 'none';
            }
        }
        for(var i=0; i < cards.length; i++){
            if(authors[i] == 'Malan Van der Merve'){
                cards[i].style.display = 'block';
            }
        }
    }else{
        b4 = false;
        document.getElementById('f4').style.backgroundColor = "white";
        if(b1 == false && b2 == false && b3 == false && b5 == false){
            for(var i=0; i < cards.length; i++){
                cards[i].style.display = 'block';
            }
        }
    } 
})
document.getElementById('f5').addEventListener('click',function(){
    if(b5 == false){
        b5 = true;
        document.getElementById('f5').style.backgroundColor = "grey";
        if(b1 == false && b2 == false && b3 == false && b4 == false){
            for(var i=0; i < cards.length; i++){
                cards[i].style.display = 'none';
            }
        }
        for(var i=0; i < cards.length; i++){
            if(authors[i] == 'JJ Markalen'){
                cards[i].style.display = 'block';
            }
        }
    }else{
        b5 = false;
        document.getElementById('f5').style.backgroundColor = "white";
        if(b1 == false && b2 == false && b3 == false && b4 == false){
            for(var i=0; i < cards.length; i++){
                cards[i].style.display = 'block';
            }
        }
    } 
})