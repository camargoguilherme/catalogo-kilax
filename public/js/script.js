/**
 * Created by guilherme on 25/08/17.
 */
var config = {
    apiKey: "AIzaSyAWubi8YCs_kmNaS5-pw5Uau4CHEbUbveI",
    authDomain: "kilax-japan.firebaseapp.com",
    databaseURL: "https://kilax-japan.firebaseio.com",
    projectId: "kilax-japan",
    storageBucket: "kilax-japan.appspot.com",
    messagingSenderId: "843171232021"
};

firebase.initializeApp(config);

function exe() {
    $(document).ready(function(){


    });
}

function getImageProduct(codbarra) {
    $(document).ready(function(){
        var imagem = document.getElementById(codbarra);
        imagem.src = "https://www.holis.com.br/img/products/dolomita-listrada-pedra-rolada-1353-primary-ql3iKAAp.jpg";
    });
}

function getImagemByProduct(ean) {
    // Create a reference with an initial file path and name
    var storage = firebase.storage();

    // Create a reference from a Google Cloud Storage URI
    var gsReference = storage.refFromURL('gs://kilax-japan.appspot.com/produtos/' + ean +'/' + ean +'.jpg');

    storageRef.child('images/stars.jpg').getDownloadURL().then(function(url) {

        // Or inserted into an <img> element:
        var img = document.getElementById('imageProduct');
        img.src = url;
    }).catch(function(error) {
        // Handle any errors
    });

}



function getUsuarios() {

    var usuarios = firebase.database().ref();
    return usuarios;
}







