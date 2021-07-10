
var searchCards = document.querySelector('.searchCards');
var allCards = document.querySelector('.allCards');
var catCards = document.querySelector('.catCards');

// bouton "tous les films"
document.querySelector('.allFilms').addEventListener('click', function(){
    allCards.style.display="block";
    catCards.style.display="none";
    allCards.setAttribute("style", "display:grid;grid-template-columns: 25% 25% 25% 25%; ");
    searchCards.style.display="none";
});

function addElement (titre, cat, year, aff) {
    catCards.setAttribute("style", "display:grid;grid-template-columns: 25% 25% 25% 25%; ")

    var divCards = document.createElement("div");
    divCards.className = "cards";
    catCards.appendChild(divCards);

    var imgCards = document.createElement("img");
    imgCards.className = "img_cards";
    imgCards.src = aff;
    divCards.appendChild(imgCards);

    var divContainer = document.createElement("div");
    divContainer.className = "container_cards";
    divCards.appendChild(divContainer);

    var h4 = document.createElement("h4");
    divContainer.appendChild(h4);
    var textH4 = document.createTextNode(titre);
    h4.appendChild(textH4);

    var pCards = document.createElement("p");
    pCards.className = "p_cards";
    divContainer.appendChild(pCards);
    var textpCards = document.createTextNode(cat);
    pCards.appendChild(textpCards);


    var pYear = document.createElement("p");
    pYear.className = "year";
    divContainer.appendChild(pYear);
    var textpYear = document.createTextNode(year);
    pYear.appendChild(textpYear);
  
}

// Ajax boutons categories + display.none des anciennes cards
document.querySelectorAll('.categories').forEach(button => {
    button.addEventListener('click', function(e){

        // Disparition éléments "allFilms"
        allCards.style.display="none";
        searchCards.style.display="none";
        catCards.style.display="block";

        e.preventDefault();
        var val = $(this).val();

        $.ajax({
            type:'POST',
            url:'http://localhost/Projet_film/controllers/categories_controller.php',
            dataType: "json",
            data: {
            value: val
            },
            success:function(success){
                console.log(success);

                // element 0 = titre, 1 = genre, 2 = description, 3 = annee, 4 = real, 5 = image
                for (let index = 0; index < success.length; index++) {
                    addElement(success[index][0], success[index][1], success[index][3], success[index][5])
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
        url:'http://localhost/Projet_film/controllers/search_controller.php',
        data:$(this).serialize(),
        dataType: "json",
        success:function(success){
            console.log(success);

            // element 0 = titre, 1 = description, 2 = genre, 3 = annee, 4 = real, 5 = image
            for (let index = 0; index < success.length; index++) {
                addElement(success[index][0], success[index][2], success[index][3], success[index][5])
            }
        }
    })
});

let cards = document.querySelectorAll('.cards')
var idcard = "";

cards.forEach((cardall)=> {
    cardall.addEventListener('click', function(e){
        idcard = e.currentTarget.getAttribute('id')
        loadModal();
    })
})
function loadModal() {
    $(document).ready(function () {
    $.ajax({
    success: function () {
    $(".cible_modal").load("http://localhost/Projet_film/assets/js/modal.php?id=" + idcard);
    },
    });
    });
};
