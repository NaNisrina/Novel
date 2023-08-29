const SignInButton = document.getElementById('SignIn');
const LoginButton = document.getElementById('Login');
const container = document.getElementById('container');

SignInButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

LoginButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
