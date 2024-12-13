const search = document.forms.searchForm.search;
search.addEventListener("input",()=>{
    console.log(search);
    fetch("./controller/SearchController.php?input="+search.value)
    .then((response)=>{response.json()})
    .then(json=>console.dir(json))
})