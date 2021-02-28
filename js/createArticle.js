// laedt die in der localStorage vorhandenen Werte in den neu zu erstellenden Beitrag
window.onload = function(){
    var articleTitle = localStorage.getItem("title");
    var articleText = localStorage.getItem("text");
    var articleCategory = localStorage.getItem("category");
    if(articleTitle || articleText || articleCategory){
        let titleBox = document.getElementsByClassName("title_createarticle")[0];
        let textBox = document.getElementsByClassName("title_createarticleContent")[0];
        let category = document.getElementsByClassName("selectCategoryDropDown")[0];
        titleBox.value = articleTitle;
        textBox.value = articleText;
        category.value = articleCategory;
    }
};

//speichert den Titel des neuen Beitrags im localStorage ab, wenn dieser geaendert wurde
function saveTitle(){
    let title = document.getElementsByClassName("title_createarticle")[0];
    localStorage.setItem("title",title.value);
}

//speichert den Text des neuen Beitrags im localStorage ab, wenn dieser geaendert wurde
function saveText(){
    let text = document.getElementsByClassName("title_createarticleContent")[0];
    localStorage.setItem("text",text.value);
}

//speichert die Kategorie des neuen Beitrags im localStorage ab, wenn diese geaendert wurde
function saveCategory(){
    let category = document.getElementsByClassName("selectCategoryDropDown")[0];
    localStorage.setItem("category",category.value);
}

//loescht alles im localStorage, sobald der neue Beitrag erstellt wurde
function clearStorage(){
    localStorage.clear();
}