
var searchCards = document.querySelector('.searchCards');
var allCards = document.querySelector('.allCards');
var catCards = document.querySelector('.catCards');

// bouton "tous les films"
document.querySelector('.allFilms').addEventListener('click', function(){
    allCards.style.display="grid";
    catCards.style.display="none";
    searchCards.style.display="none";
    console.log('toto');
});

//création éléments ajax (le même pour les genres et pour la barre de recherche)
function addElement (titre, cat, year, aff, id, description) {

    var aCards = document.createElement("a");
    aCards.className = "cards";
    catCards.appendChild(aCards);
    aCards.href = "#demo" + id;
    
    var imgCards = document.createElement("img");
    imgCards.className = "img_cards";
    aCards.appendChild(imgCards);

    var divContainer = document.createElement("div");
    divContainer.className = "container_cards";
    aCards.appendChild(divContainer);

    var h4 = document.createElement("h4");
    divContainer.appendChild(h4);

    var pCards = document.createElement("p");
    pCards.className = "p_cards";
    divContainer.appendChild(pCards);

    var pYear = document.createElement("p");
    pYear.className = "year";
    divContainer.appendChild(pYear);

    imgCards.src = aff;
    
    var textH4 = document.createTextNode(titre);
    h4.appendChild(textH4);
   
    var textpCards = document.createTextNode(cat);
    pCards.appendChild(textpCards);

    var textpYear = document.createTextNode(year);
    pYear.appendChild(textpYear);

    /*MODAL*/
    var div_demo = document.createElement("div");
    catCards.appendChild(div_demo);
    div_demo.id = 'demo' + id
    div_demo.className = "modal";

    var div_content = document.createElement('div');
    div_demo.appendChild(div_content);
    div_content.className = "modal_content";

    var img_modal = document.createElement('img');
    div_content.appendChild(img_modal);
    img_modal.src = aff;
    
    var div_modal_column = document.createElement('div');
    div_content.appendChild(div_modal_column);
    div_modal_column.className = "modal_column";

    var h3 = document.createElement('h3');
    div_modal_column.appendChild(h3);
    h3.textContent = titre;

    var p_modal_description = document.createElement('p');
    p_modal_description.className = "modal_description";
    p_modal_description.textContent = description;
    div_modal_column.appendChild(p_modal_description);
    
    var p_modal_annee = document.createElement('p');
    p_modal_annee.className = "modal_annee";
    div_modal_column.appendChild(p_modal_annee);
    p_modal_annee.textContent = year;

    var p_modal_genre = document.createElement('p');
    p_modal_genre.className = "modal_genre";
    div_modal_column.appendChild(p_modal_genre);
    p_modal_annee.textContent = cat;

    var a_modal_close = document.createElement('a');
    a_modal_close.className = "modal_close";
    div_modal_column.appendChild(a_modal_close);
    a_modal_close.textContent = "x";
    a_modal_close.href= "#";

}

// Ajax boutons categories + display.none des anciennes cards
document.querySelectorAll('.categories').forEach(button => {
    button.addEventListener('click', function(e){
        console.log('test');
        // Disparition éléments "allFilms"
        allCards.style.display="none";
        searchCards.style.display="none";
        catCards.style.display="grid";

        e.preventDefault();
        var val = $(this).val();
        $.ajax({
            
            type:'POST',
            url:'controllers/categories_controller.php',
            dataType: "json",
            data: {
            value: val
            },
            success:function(success){
                console.log(success);
                
                var elements_cards = document.querySelector(".catCards");
                while (elements_cards.firstChild) {
                    elements_cards.removeChild(elements_cards.firstChild);
                }
    
                // element 0 = id, 1 = titre, 2 = genre, 3 = description, 4 = annee, 5 = real, 6 = image
                for (let index = 0; index < success.length; index++) {
                    addElement(success[index][1], success[index][2], success[index][4], success[index][6], success[index][0], success[index][3])
                }
            }
        });
    });
});


//*Ajax Search BAR *//
$('form').bind('submit',function(e){
    allCards.style.display="none";
    e.preventDefault();
    $.ajax({
        type:'POST',
        url:'controllers/search_controller.php',
        data:$(this).serialize(),
        dataType: "json",
        success:function(success){
            console.log(success);

            var elements_cards = document.querySelector(".catCards");
                while (elements_cards.firstChild) {
                    elements_cards.removeChild(elements_cards.firstChild);
                }
    
            // element 0 = id, 1 = titre, 2 = description, 3 = genre, 4 = annee, 5 = real, 6 = image
            for (let index = 0; index < success.length; index++) {
                addElement(success[index][1], success[index][3], success[index][4], success[index][6], success[index][0], success[index][2])
            }
        }
    })
});
