<html>
<head>
    <title>create new account with firebase</title>

</head>
<body>

<form action="" enctype="multipart/form-data" method="post">
    <center>
        <label>Email:</label><br>
        <input type="email" id="userEmail" required="required"><br><br>
    </center>
    <center>
        <label>Password:</label><br>
        <input type="password" id="userPassword" required="required"><br><br>
    </center>
    <center>
        <label>Confirm Password:</label><br>
        <input type="password" id="confirmPassword" required="required"><br><br>
    </center>
    <center>
        <button type="button" onclick="createUser();">SignUp</button>
    </center>
</form>firebase login



<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.4.0/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyBOPbN2SgKqRwRGcBgu6aCE7gfr_ZiGTN0",
        authDomain: "test-d7153.firebaseapp.com",
        databaseURL: "https://test-d7153.firebaseio.com",
        projectId: "test-d7153",
        storageBucket: "test-d7153.appspot.com",
        messagingSenderId: "508854023946",
        appId: "1:508854023946:web:43e7fa5f9e9be304d8acf3"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
</script>


<script src="js/SignUp.js" type="text/javascript"></script>

<!-- add your javascript file  add it very bottom of body  -->
</body>
</html>