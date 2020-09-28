// Get data



// Listen for auth status changes
auth.onAuthStateChanged(user => {
    if (user) {
        console.log('User is signed in: ', user);
        db.collection('guides').get().then(snapshot => {
            setupGuides(snapshot.docs)
            setupUI(user);
        });
    } else {
        console.log('User is not signed in');
        setupUI();
        setupGuides([]);
    }

});

// create guide
const createForm = document.querySelector('#create-form');
createForm.addEventListener('submit', (e) => {
    e.preventDefault();

    db.collection('guides').add ({
        title: createForm['title'].value,
        content: createForm['content'].value
    }).then(() => {
        // close modal and reset form
        const modal = document.querySelector('#modal-create');
        M.Modal.getInstance(modal).close();
        signupForm.reset();

    }).catch(err => {
        console.log(err.message);
    })
})


// Signup
const signupForm = document.querySelector('#signup-form');
signupForm.addEventListener('submit', (e) => {
    e.preventDefault();


    // get user info 
    const email = signupForm['signup-email'].value;
    const password = signupForm['signup-password'].value;

    // signup user
    auth.createUserWithEmailAndPassword(email, password).then(cred => {
        console.log(cred.user);
        const modal = document.querySelector('#modal-signup');
        M.Modal.getInstance(modal).close();
        signupForm.reset();

    })
});

//logout
const logout = document.querySelector('#logout');
logout.addEventListener('click', (e) => {
    e.preventDefault();
    auth.signOut().then(() => {
        console.log('User signed out')
    });

});


// Login


const loginForm = document.querySelector('#login-form');
loginForm.addEventListener('submit', (e) => {
    e.preventDefault();

    // get user info 
    const email = loginForm['login-email'].value;
    const password = loginForm['login-password'].value;

    auth.signInWithEmailAndPassword(email, password).then(cred => {

        // close the login modal and reset the form

        const modal = document.querySelector('#modal-login');
        M.Modal.getInstance(modal).close();
        loginForm.reset();
    });
});