let api

if(window.location.href.split(":80").length > 1){
	api = fetch(window.location.href.replace("80", "8080"));
}
else{
	api = fetch(window.location.href+":8080");
}

	api.then((response)=>{
		if(response.ok){
			return response.json();
		}
		else{
			console.log("erro na API");
		}

	api.then((data)=>{
		console.log(data[0]);
	})

})
