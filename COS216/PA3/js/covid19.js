var cards = document.querySelectorAll(".card");
var graph = document.getElementById("graph");

//calculating the ratio
function calculateRatio(num_1, num_2,num_3){
    for(num=num_3; num>1; num--) {
        if((num_1 % num) == 0 && (num_2 % num) == 0 && (num_3 % num) == 0) {
            num_1=num_1/num;
            num_2=num_2/num;
            num_3 = num_3/num;
        }
    }
    var ratio = num_1+" : "+num_2+" : "+num_3;
    return ratio;
}
function LoadData(){
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            // any action to be performed when the request is made
            Result = JSON.parse(this.responseText);

            for(var i=0; i < cards.length; i++){
                cards[i].innerHTML = "";
            }

            // data for the first card -- active cases
            var container = document.createElement('div');
            container.className = "container";
            container.innerHTML = '<i class="fas fa-head-side-virus cov"></i> <br>';

            // number
            var title = document.createElement('p');
            title.className = "title";
            title.style.textAlign = "center";
            title.innerHTML = Result.cases;

            // descr
            var description = document.createElement('p');
            description.className = "description";
            description.style.textAlign = "center";
            description.innerHTML = "Cases";
                
            container.appendChild(title);
            container.appendChild(description);

            // card 0
            cards[0].appendChild(container);

            title.innerHTML = Result.recovered;

            // appending children to the appropriate elements
            var container2 = document.createElement('div');
            container2.className = "container";
            container2.innerHTML = '<i class="fas fa-stethoscope cov"></i> <br>';

            var title2 = document.createElement('p');
            title2.className = "title";
            title2.style.textAlign = "center";
            title2.innerHTML = Result.recovered;

            // descr
            var description2 = document.createElement('p');
            description2.className = "description";
            description2.style.textAlign = "center";
            description2.innerHTML = "Recoveries";
                
            container2.appendChild(title2);
            container2.appendChild(description2);

            // card 2
            cards[1].appendChild(container2);

            // appending children to the appropriate elements
            
            var container3 = document.createElement('div');
            container3.className = "container";
            container3.innerHTML = '<i class="fas fa-bed-pulse cov"></i> <br>';

            var title3 = document.createElement('p');
            title3.className = "title";
            title3.style.textAlign = "center";
            title3.innerHTML = Result.deaths;

            // descr
            var description3 = document.createElement('p');
            description3.className = "description";
            description3.style.textAlign = "center";
            description3.innerHTML = "Deaths";
                
            container3.appendChild(title3);
            container3.appendChild(description3);

            // card 3
            cards[2].appendChild(container3);

            // the 4th daily stats cards
            var containerd = document.createElement('div');
            containerd.className = "container";
            containerd.innerHTML = '<p class="title" style="text-align: center">Daily Stats</p><hr styl="wdith: 40%; margin: 0 auto">'+
            '<p class="description">Daily Cases: <strong>'+Result.todayCases+'</strong></p>'+
            '<p class="description">Daily Recoveries: <strong>'+Result.todayRecovered+'</strong></p>'+
            '<p class="description">Daily Deaths: <strong>'+Result.todayDeaths+'</strong></p>';

            cards[3].appendChild(containerd);

            // the fifth card for deductions
            
            var containerf = document.createElement('div');
            containerf.className = "container";
            containerf.innerHTML = '<p class="title" style="text-align: center">Deductions</p><hr styl="wdith: 40%; margin: 0 auto">'+
            '<p class="description">Infection Fatality Ratio: <strong>'+(Result.deaths/Result.active).toFixed(2)+'</strong></p>'+
            '<p class="description">- Case Fatality Ratio: <strong>'+(Result.deaths/(Result.deaths+Result.recovered)).toFixed(2)+'</strong></p>'+
            '<p class="description">Mortality Rate: <strong>'+(Result.deaths/Result.population).toFixed(2)+'</strong></p>'+
            '<p class="description">Cases:Recoveries:Death Ratio: <strong>'+calculateRatio(Result.cases,Result.recovered,Result.deaths)+'</strong></p>';

            //card 4
            cards[4].appendChild(containerf);


            // replacing graph image with the appropriate data
            graph.innerHTML = '';
            // creating the canvas element
            var canvas = document.createElement('canvas');
            canvas.id = 'myChart';
            canvas.style.height = '400px';
            canvas.style.width = '100%';

            graph.appendChild(canvas);
            const ctx = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['daily cases', 'daily recoveries', 'daily deaths'],
                    datasets: [{
                        label: 'Daily Covid 19 Stats',
                        data: [Result.todayCases, Result.todayRecovered, Result.todayDeaths],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                           
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                           
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            myChart.render();
            //ctx.render();
        }
            
    }
    // I used async mode because I want the data from the api to load at the same time with all the other resources of the page
    // so that the page loads faster and there is little waiting for the user
    xhttp.open("GET","https://disease.sh/v3/covid-19/countries/south%20africa?yesterday=yesterday",true);
    xhttp.send();
    
    // clear the cards
    for(var i=0; i < cards.length; i ++){
        cards[i].innerHTML = '';
        cards[i].innerHTML = '<div class="loadingio-spinner-spin-cob4u0vogd6"><div class="ldio-8hj4s8zqsx"><div><div>'+
                '</div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div>'+
                '</div><div><div></div></div><div><div></div></div></div></div>';
    }
    graph.innerHTML='<div class="loadingio-spinner-spin-cob4u0vogd6"><div class="ldio-8hj4s8zqsx"><div><div>'+
    '</div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div>'+
    '</div><div><div></div></div><div><div></div></div></div></div>';

    // making the animation
    var text = document.getElementById("text");
    var pos = 0;
    setInterval(animate,5);

    function animate(){
        pos++;
        text.style.marginLeft = pos+"px";

        if(pos == (1349-539))
            pos = 0;
    }

}


