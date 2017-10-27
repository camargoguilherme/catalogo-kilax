/**
 * Created by guilherme on 25/08/17.
 */



function a(texto) {
    return texto;
}


function firebaseStorage() {
    // Initialize Firebase
    var config = {
        apiKey: "AIzaSyAWubi8YCs_kmNaS5-pw5Uau4CHEbUbveI",
        authDomain: "kilax-japan.firebaseapp.com",
        databaseURL: "https://kilax-japan.firebaseio.com",
        projectId: "kilax-japan",
        storageBucket: "kilax-japan.appspot.com",
        messagingSenderId: "843171232021"
    };
    firebase.initializeApp(config);
// Get a reference to the storage service, which is used to create references in your storage bucket
    var storage = firebase.storage();
    return storage;
}




