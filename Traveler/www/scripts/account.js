

//Store the username of the currently logged user.
var user = null;
// Initialize Firebase
var config = {
    apiKey: "AIzaSyBaHMQpIafpzQXe-jTZuaI_jCh-eThUcZY",
    authDomain: "mad2-77466.firebaseapp.com",
    databaseURL: "https://mad2-77466.firebaseio.com",
    storageBucket: "mad2-77466.appspot.com",
};
firebase.initializeApp(config);



/**
Make sure that the document and all of it's components are successfuly loaded before making any reference.
*/
$(document).ready(function () {


    /**
	Click event handler for the "#btngetweather" anchor. Shows a 3 hourly 5 day
	weather forecast of a location based on the user's selected country and city.
	*/


    /**
	Click event hander for the delete button of a split button. Deletes an item
	from a list content that displays a location based on the city name and country code.
	*/
    $(document).on("click", "a[name=delete]", function () {
        removeFromCollection($(this).attr('id'));
        $(this).parent().remove();
    });

    /**
	Click event hander for a split button. Displays the weather information of a location
	based on the city ID.
	*/
    $(document).on("click", "a[name=display]", function () {
        showWeatherById($(this).attr('id'));
        $("#mainPanel").panel("close");
    });

    /**
	Click event handler for the button to login existing users.
	*/
    $('#btnlogin').click(function () {
        login($('#eusername').val(), $('#epassword').val());
    })

    /**
	Click event handler for the button that registers a new user account.
	*/
    $('#btnregisteruser').click(function () {
        registerUser($('#newusername').val(), $('#newpassword').val());
    });

    /**
	Click event handler for the login button in the weather page.
	*/
    $('#login').click(function () {
        $.mobile.changePage("#userlogin", "pop");
    });

    /**
	Click event handler for the logout button in the weather page.
	*/
    $('#logout').click(function () {
        logout();
    });

    //Calls the method that initializes the page.
    initPage();
});

/**
Displays an alert message on a page.
@param {string} alert - The message to be displayed.
*/
function showMessage(alert) {
    $("#alertmessage").html(alert);
    $(".ui-dialog").dialog("close");
    $.mobile.changePage("#alert", "pop");
}

/**
Page initialization. Called after all of the page's elements have finised loading.
*/
function initPage() {
    /*
	Toggle log in and log out buttons, depending on user's log in status.
	*/
    if (user) {
        $("#login").toggle(false);
        $("#logout").toggle(true);
    }
    else {
        $("#login").toggle(true);
        $("#logout").toggle(false);
    }

}

/**
Display the five day weather forecast of a selected city.
*/







/**
Clear the weather page.
*/
function clearPage() {
    $('#forecastlist').empty();
}






/**
Checks that all the information needed to register a new user is entered.
*/
function registerUser(username, password) {
    if (navigator.onLine) {
        //Reference to the Firebase database.
        if ($('#newusername').val() && $('#newpassword').val() && $('#confirmpassword').val()) {
            if ($('#newpassword').val() == $('#confirmpassword').val()) {
                createAccount(username, password);
            }
            else {
                showMessage("Passwords does not match. Please try again.");
            }
        }
        else {
            showMessage("All fields are required. Please try again.");
        }
    }
    else {
        showMessage("Please check your internet connection.");
    }
}

/**
Checks that all the information needed to authenticate a user is entered.
@param {string} username - The username to be validated.
@param {string} password - The password to be validated.
*/
function login(username, password) {
    if (username && password) {
        validateUser(username, password);
    }
    else {
        showMessage("All fields are required to login. Please try again.");
    }
}

/**
Checks the firebase database if username already exists. An account will only be created if
the username is not already in the database.
@param {string} username - The username for the new account.
@param {string} password - The password for the new account.
*/
function createAccount(username, password) {
    //referred to the online example given by the Firebase via GitHub
    firebase.auth().createUserWithEmailAndPassword(username, password).catch(function (error) {
        var errorCode = error.code;
        var errorMessage = error.message;
        // [START_EXCLUDE]
        if (errorCode == 'auth/weak-password') {
            showMessage('The password is too weak.');
        } else {
            showMessage(errorMessage);
        }
        // [END_EXCLUDE]
    });
}//end of createAccount()

/*** added this for Firebase 3 ****/
firebase.auth().onAuthStateChanged(function (inUser) {
    if (inUser !== null) {
        user = inUser; //this user object has email and uid property. You can use console.dir to check
        console.log('logged in!');
        console.dir(user);
        initUser(user);

        //The following logic works for other scenarios. The event handler
        //triggers x number of times of there are x location objects in the array.
        //I just need to grab the whole array therefore, I dont need the code below.
        /*
        userLocationRef.on('child_added', function(data) {
                console.dir(data.val());
                updateLocationList();
                $("#locationlist").listview('refresh');
        });
        */

    }
});


/**
Checks the firebase database if email already exists and whether the password matches the one
entered by the user.
@param {string} username - The username used by the user to log in.
@param {string} password - The password to validate against the user's password in the firebase database.
*/


function validateUser(username, password) {
    firebase.auth().signInWithEmailAndPassword(username, password).catch(function (error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        // [START_EXCLUDE]
        if (errorCode === 'auth/wrong-password') {
            showMessage('Wrong password.');
        } else {
            showMessage(errorMessage);
        }

        // [END_EXCLUDE]
    });
    // [END authwithemail]

}//end of validate user

/**
Initialize page after a user has logged in.
@param {string} username - The username of the user currently logged in.
*/
function initUser(username) {
    //user = username;
    clearPage();
    $.mobile.changePage("#weather");
    $("#countrycode").text(user.email + "!");


    $("#login").toggle(false);
    $("#logout").toggle(true);
}

/**
Clears the location array and the currently logged user.
*/
function logout() {
    user = "";

    clearPage();

    $("#login").toggle(true);
    $("#logout").toggle(false);
    $.mobile.changePage("#main", "pop");
}
