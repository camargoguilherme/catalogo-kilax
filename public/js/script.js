/**
 * Created by guilherme on 25/08/17.
 */



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

$('.modal').modal({
        dismissible: true, // Modal can be dismissed by clicking outside of the modal
        opacity: .5, // Opacity of modal background
        inDuration: 300, // Transition in duration
        outDuration: 200, // Transition out duration
        startingTop: '4%', // Starting top style attribute
        endingTop: '10%', // Ending top style attribute
        ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
            alert("Ready");
            console.log(modal, trigger);
        },
        complete: function() { alert('Closed'); } // Callback for Modal close
    }
);



