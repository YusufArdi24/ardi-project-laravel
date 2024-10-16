document.getElementById('LoginForm').addEventListener('submit', function(event){
    event.preventDefault();

    const correctUsername = 'Ardi';
    const correctPassword = 'Ardi';

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if(username === correctUsername && password === correctPassword){
        alert('Login Berhasil');
        window.location.href = '/';
    }else{
        alert('Login gagal');
    }
});