
document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.getElementById('login-form');
    const signupForm = document.getElementById('signup-form');
    const loginToggle = document.getElementById('login-toggle');
    const signupToggle = document.getElementById('signup-toggle');
    const formBody = document.querySelector('.form-body');
    
    loginToggle.addEventListener('click', () => {
        formBody.style.transform = 'translateX(0)';
        loginToggle.classList.add('active');
        signupToggle.classList.remove('active');
    });

    signupToggle.addEventListener('click', () => {
        formBody.style.transform = 'translateX(-50%)';
        signupToggle.classList.add('active');
        loginToggle.classList.remove('active');
    });

    document.getElementById('switch-to-signup').addEventListener('click', () => {
        formBody.style.transform = 'translateX(-50%)';
        signupToggle.classList.add('active');
        loginToggle.classList.remove('active');
    });

    document.getElementById('switch-to-login').addEventListener('click', () => {
        formBody.style.transform = 'translateX(0)';
        loginToggle.classList.add('active');
        signupToggle.classList.remove('active');
    });
    
});
