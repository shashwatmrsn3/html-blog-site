let request = new XMLHttpRequest();
request.open('GET','https://newsdata.io/api/1/news?apikey=YOUR_API_KEY&country=au');
request.send();
request.onload = function(){
    let jsonResult =  (JSON.parse(request.response));
    let news = jsonResult.results;
    news.forEach(element => {
        let contentElement = document.getElementsByClassName('content')[0];
        let headingElement = document.createElement('h2');
        headingElement.innerHTML = element.title;

        contentElement.appendChild(headingElement);

        let descElement = document.createElement('p');
        descElement.innerHTML = element.description;

        contentElement.appendChild(descElement);

        
    });
}